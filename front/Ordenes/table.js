
const armarTabla = ()=>{
    $.get(
        url = "http://localhost/prueba/back/index.php", 
        function(response){ 
            const par =(response)

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
                    <td><i onclick="eliminar('${d.id}')" class="fa-solid fa-trash-can" id="hola" ></i></td>
                    <td><img src=${d.src}  style="width:50px; height: 50px;" id="img" alt="imagen no encotrada"/></td>
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

