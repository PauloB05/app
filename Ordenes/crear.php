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
<form method="post" action="../Controller/OrdenesController.php?crear_orden=true" id ="formU">           
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
                <td><input type="text" id="nombree"></td>
                <td><input type="text" id="modeloo"></td>
                <td><input type="text" id="condicionn"></td>    
                <td><input type="submit" value="crear" id ="btnCrear" ></td>                                        
            </tr>  
    </tbody>
    </table>
</form>

</div>
<script>
    const btn = document.querySelector("#btnCrear")
    const formm = document.querySelector("#formU")
    const url = formU.getAttribute("action")

    btn.addEventListener("click", (e)=>{
        e.preventDefault();

        const inNombre = document.getElementById("nombree").value
        const inModelo = document.querySelector("#modeloo").value
        const inCondicion = document.querySelector("#condicionn").value

        $.post(
              url,
            {
                nombre:inNombre,
                modelo:inModelo,    
                condicion:inCondicion
            },
            function(response){
            swal({
                title: "Terminado",
                text: "Orden Creada",
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
