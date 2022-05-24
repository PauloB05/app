
const armarTabla = ()=>{
    $.get(
        url = "../js/jsonC.php", 
        function(response){ 
            const par = JSON.parse(response)
 
            let table = 
                ` <thead>
                    <tr>
                        <th >order_id</th>
                        <th >nombre</th>
                        <th >telefono</th>
                        <th >direccion</th>     
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
            

                `
      
             par.forEach((d)=>{
                d.id = (d._id["$oid"])
                table += 
                `
                <tr>
                    <td>${d.id}</td>
                    <td>${d.client_name}</td>
                    <td>${d.phone}</td>
                    <td>${d.addres}</td> 
                    <td><a href="editar.php?id=${d.id}"><i class="fa-solid fa-pen-to-square "></i></a></td> 
                    <td><i onclick="eliminar(${d.id})" class="fa-solid fa-trash-can" id="hola" ></i></td>
                </tr>

                `
                 
            })
            table += ` </tbody></table>`
            const tc= document.querySelector("#tabla_cliente")
            $(tc).empty()
            $(tc).append(table)
           
        }    
    )

}

