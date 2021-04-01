<?php
    include("database.php");

    $id = $_POST["id"];    
    $nombre = $_POST["nombre"];
    $fecha = $_POST["fecha"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $arbol = $_POST["arbol"];
    $estado = $_POST["estado"];

    $actualizar = "UPDATE clientes SET nombre='$nombre',fecha='$fecha',email='$email',telefono='$telefono',arbol='$arbol',estado='$estado' WHERE id_cliente ='$id';";

    $resultado = mysqli_query($conexion, $actualizar);

    if($resultado){
        echo "<script> alert('Se actualizo el usuario con exito');
        window.location='/CiudadaniaItaliana'</script>";
    }else{
        echo "<script> alert(No se pudo registrar el usuario');
        window.location='/CiudadaniaItaliana'</script>";
    }

    
?>