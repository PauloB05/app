
const armarTabla = ()=>{
    $.get(
        url = "http://localhost/prueba/back/Class/test.php", 
        function(response){ 
            const par = JSON.parse(response)
            // par.forEach((x)=>{
            //    x.id = (x._id["$oid"])
               

            // }
            // )



            // console.log d.id = d._id["$oid"]
            let table = 
                ` <thead>
                    <tr>
                        <th >order_id</th>
                        <th >nombre</th>
                        <th >modelo</th>
                        <th >condicion</th>     
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
                    <td>${d.order_name}</td>
                    <td>${d.model}</td>
                    <td>${d.order_condition}</td> 
                    <td><a href="editar.php?id=${d.id}"><i class="fa-solid fa-pen-to-square "></i></a></td> 
                    <td><i onclick="eliminar(${d.id})" class="fa-solid fa-trash-can" id="hola" ></i></td>
                </tr>

                `
                 
            })
            table += ` </tbody></table>`
            const tc= document.querySelector("#tabla_clientes")
            $(tc).empty()
            $(tc).append(table)
           
        }    
    )

}

