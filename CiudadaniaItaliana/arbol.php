<?php
    include("database.php"); 
    $id=$_GET["id"];   
    $clientes= "SELECT * FROM arboles WHERE id_cliente= '$id'";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <ul class="menu">
        <li><a href="index.php">Activos</a></li>
        <li><a href="enTratativas.php">En Tratavivas</a></li>
        <li><a href="terminados.php">Terminados</a></li>
        <li><a href="nuevoCliente.php">Nuevo Cliente</a></li>
    </ul>
    <div id="main-container">

    <table>
        <thead>
            <tr>
                <th>Partida</th><th>Nobre</th><th>Comuna</th><th>Estado de partida</th>
            </tr>
        </thead>
<?php
    $resultado = mysqli_query($conexion,$clientes); 
    
    while($row=mysqli_fetch_assoc($resultado)){
       
?>
        <tr>
            <td><?php echo $row["partida"]; ?></td>
            <td><?php echo $row["nombre"]; ?></td>
            <td><?php echo $row["comuna"]; ?></td>
            <td><?php echo $row["estado_partida"]; ?></td>
            
            <td>
                <a href="actualizarArbol.php?id=<?php echo $row["id_arbol"];?>" class="mover">Modificar</a>
                <a href="eliminarArbol.php?id=<?php echo $row["id_arbol"];?>&idCliente=<?php echo $row["id_cliente"];?>" class="eliminar">Eliminar</a>
            </td>
        </tr>
<?php } ?>
    </table>
    </div>
    <script src="confirmacion.js"></script>
</body>
</html>