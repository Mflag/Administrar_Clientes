<?php
    include("database.php");

    $nombre = $_POST["nombre"];
    $fecha = $_POST["fecha"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $arbol = $_POST["arbol"];
    $estado = $_POST["estado"];

    $insertar = "INSERT INTO clientes (id_cliente, nombre, fecha, email, telefono, arbol, estado) VALUES (NULL, '$nombre', '$fecha', '$email', '$telefono', '$arbol', '$estado');";

    $resultado = mysqli_query($conexion, $insertar);

    if($resultado){
        echo "<script> alert('Se registro el usuario con exito');
        window.location='/CiudadaniaItaliana'</script>";
    }else{
        echo "<script> alert(No se pudo registrar el usuario');
        window.location='/CiudadaniaItaliana'</script>";
    }

    
?>