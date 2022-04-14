<!DOCTYPE html>
<html>
<head>
    <title> Pagina clientes</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<form method="post" action="../Controller/ClientesController.php?crear_cliente=true">           
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
            
                <td><input type="text" name="nombre"></td>
                <td><input type="text" name="telefono"></td>
                <td><input type="text" name="direccion"></td>    
                <td><input type="submit" value="crear"></td>                                        
            </tr>
       
    </tbody>
    </table>
</form>

</div>
</body>
</html>
