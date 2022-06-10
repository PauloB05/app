
<?php 
require_once '../Controller/ClientesController.php';
$array = traerClientes($_GET['id']);
$arrayCliente=$array;
?>
<!DOCTYPE html>
<html>
<head>
    <title> Pagina clientes</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../js/sweetalert.js"></script>
</head>
<body>
    <form method="post" action="../Controller/ClientesController.php?editar_cliente=<?=$arrayCliente['_id']?>" id="formU">           
        <table id="tabla_clientes">
            <thead>
                <tr>
                    <th >nombre</th>
                    <th >telefono</th>
                    <th >direccion</th>     
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text"  value ="<?= $arrayCliente["client_name"]; ?>" id="nombre"></td>
                    <td><input type="text"  value="<?= $arrayCliente["phone"]; ?>" id="telefono"></td>
                    <td><input type="text"  value="<?= $arrayCliente["addres"]; ?>" id="direccion"></td>    
                    <td><input type="submit" value="editar" id="btnEnviar"></td>                                        
                </tr>
            </tbody>
        </table>
    </form>
    <script>
        const btn = document.querySelector("#btnEnviar")
        const formU = document.querySelector("#formU")
        const url  = formU.getAttribute("action")

        btn.addEventListener("click", (e)=>{
            e.preventDefault();
                const inNombre = document.getElementById("nombre").value
                const inTelefono = document.querySelector("#telefono").value
                const indireccion= document.querySelector("#direccion").value
            $.post(
                url,
                {
                    nombre:inNombre,
                    telefono:inTelefono,    
                    direccion:indireccion
                },
                function(response){
                    swal({
                        title: "Terminado",
                        text: "Cliente Modificado",
                        icon: "success",
                        button: "Aceptar",
                    })
                .then((value) => {
                    window.location.href = "index.php";
                });
                }
            )
        })    
</script>        
</body>
</html>