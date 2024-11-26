<?php
    require 'conexion.php';

    session_start();
    
    $nombre=$_POST['nombre'];
    $contraseña=$_POST['password'];

    $q = "SELECT COUNT(*) as contar from persona where nombre= '$nombre' AND  password= '$contraseña'";

    $consulta=mysqli_query($conexion,$q);

    $array=mysqli_fetch_array($consulta);

    if($array['contar']>0){
        $_SESSION['nombre']=$nombre;
        header("Location:../index.php");
        exit();
    }else{
        //Si no existe lo devuelve a la pagina login
        header("Location:../inicioSesion.php");
        exit();
    }

    //Salir del sistema
    $stmt->close();
    $conexion->close();
?>