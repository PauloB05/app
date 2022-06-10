<?php 

// var_dump($hola);
// die ();
// die();
// $array = traerOrdenes($_GET['id']);
// $arrayOrdenes=traerArray();

 ?>

<!DOCTYPE html>
<html>
<head>
    <title> Pagina ordenese</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="../js/sweetalert.js"></script>


</head>
<script> 
 
   
$.get(
    url = "http://localhost/prueba/back/index.php?id=<?php echo $_GET['id']?>",
    function(response){
        const nombre = document.querySelector("#nombree")
        const modelo = document.querySelector("#modeloo")
        const condicion = document.querySelector("#condicionn")
        const url = document.querySelector("#url")

     
        nombre.value = response.order_name
        modelo.value = response.model
        condicion.value = response.order_condition
        url.setAttribute ("src",response.src)
       

    })




</script>
<body>

<form method="post" action='http://localhost/prueba/back/index.php?id=<?php echo $_GET['id']?>' id="formU">           
<table id="tabla_clientes">
    <thead>
        <tr>
         
            <th >nombre</th>
            <th >modelo</th>
            <th >condicion</th>     
        </tr>
    </thead>
    <tbody>

            <tr>
                <td><input type="text"  value ="" id="nombree" ></td>
                <td><input type="text"  value="" id="modeloo" ></td>
                <td><input type="text"  value="" id="condicionn" ></td>
                
                <div class="container">
                    <div class="row">
                    <div class="col"><input type="file" name="fotoEdit" id="fotoEdit"> </div>
                    </div>
                    <div class="row">
                    <div class="col" ><img  src="" id="url" width="200px" height="200px" >  </div>
                   
                    </div>
                <td><input type="submit" value="editar" id="btnEnviar"></td>                                        
            </tr>
       
    </tbody>
    </table>
</form>

</div>
<script>
    const btn = document.querySelector("#btnEnviar")
    const formU = document.querySelector("#formU")
    const url  = formU.getAttribute("action")
    const idOrden = '<?=$arrayOrdenes['id']?>'
    const filee = document.querySelector("#fotoEdit")
    const urll='http://localhost/prueba/back/indexfile.php'

    
    // filee.addEventListener("change",nuevaImagen=(e)=>{
        
    //     let reader = new FileReader();
    //     reader.readAsDataURL(e.target.files[0])
    //     console.log (reader)
        
    //     // reader.onload= function(e){ 
    //     // const url = document.querySelector("#url")
    //     // url.setAttribute("src",e.result)
    //     // }




    
    // })

    btn.addEventListener("click", (e)=>{
        e.preventDefault();
            const src = document.querySelector("#url")
            const prueba = src.getAttribute("src")
            const inNombre = document.getElementById("nombree").value
            const inModelo = document.querySelector("#modeloo").value
            const inCondicion = document.querySelector("#condicionn").value
            const form = new FormData(formU)
        
        filee.addEventListener("change",cambiar())
        function cambiar(){
            fetch('http://localhost/prueba/back/indexfile.php',{
                method:'POST',
                body:form
            }).then(response => response.text())
            .then(data => actualizar(data))   

            function actualizar($url){
                $.ajax({
                    urll,
                    type:'PUT',
                    data:{
                        url:$url,
                        nombre:inNombre,
                        model:inModelo,    
                        condicion:inCondicion
                    },
                    success:function(response){
                    window.location.href = "index.php";
                   }, error: function (error) {
                    window.location.href = "index.php";
                
              
                }
                //     swal({
                //         title: "Terminado",
                //         text: "Orden Modificada",
                //         icon: "success",
                //         button: "Aceptar",
                //     })
                //     .then((value) => {
                //         window.location.href = "index.php";
                //     });
                // }
            
                })
            }
        }
     
        //  $.ajax({
        //         url,
        //          type:'PUT',
        //          data:{
        //             nombre:inNombre,
        //              model:inModelo,    
        //              condicion:inCondicion
        //          },
        //      })
        
        
    })

</script>

</body>
</html>