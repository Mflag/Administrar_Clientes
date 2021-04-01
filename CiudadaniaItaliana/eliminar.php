<?php
    include("database.php");

    $id = $_GET["id"];  

    $eliminar = "DELETE FROM clientes WHERE id_cliente ='$id'";
    
    $resultado = mysqli_query($conexion, $eliminar);

    if($resultado){
        echo "<script> alert('Se elimino correctamente al cliente');
        window.location='/CiudadaniaItaliana'</script>";
    }else{
        echo "<script> alert(No se pudo al cliente');
        window.location='/CiudadaniaItaliana'</script>";
    }