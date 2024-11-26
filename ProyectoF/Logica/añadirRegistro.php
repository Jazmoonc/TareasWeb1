<?php
include "./conexion.php";
mysqli_set_charset($conexion,'utf8');
$nombreUser=$_POST['nombre'];

$buscarusuario="SELECT * FROM  persona WHERE nombre ='$nombreUser'";

$resultado = $conexion -> query($buscarusuario);
$count =mysqli_num_rows($resultado);
if($count==1){
    echo"El usuario ya esta registrado";
    echo "<a href='../Registro.php'>Nuevo registro</a>";

}else{

    mysqli_query($conexion,"INSERT INTO persona(
        nombre,apellido,no_cuenta,ocupacion,hobby,email,password)
        VALUES(
            '$_POST[nombre]',
            '$_POST[apellido]',
            '$_POST[no_cuenta]',
            '$_POST[ocupacion]',
            '$_POST[hobby]',
            '$_POST[email]',
            '$_POST[password]'
        )");
        header("Location:../Registro.php");
}
 

?>