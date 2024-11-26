<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link rel="shortcut icon" href="media/Datos.png" type="image/x-icon">
    <!-- Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!-- Materialize JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- iconos de Materialize-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

<style>
    /*El color de las columnas de la tabla se alterna uno y uno*/
    .table tbody tr:nth-child(odd) {
        background-color: #e0f2f1; /* Azul claro */
    }
    .table tbody tr:nth-child(even) {
        background-color: white; /* Otro tono azul */
    }

    .th{
        background-color: #006064; /* Color teal */
        color: white; /* Texto blanco */
        font-weight: bold; /* Opcional: texto en negrita */
    }

    .h1 {
        color: #c2185b;
        font-family: 'Open Sans', sans-serif;
        font-size: 28px;
        font-weight: bold;
    } 


</style>    
    
<div>
    <nav class="deep-purple lighten-2 right-align">
        <i class="material-icons left">group</i>
        <a href="eliminarPersona.php" class="btn pink">ELIMINAR</a>
        <a href="inicioSesion.php" class="btn indigo">SALIR</a>
    </nav>
</div>

       <h2 class="center-align h1" style="font-size: 30px; color: purple; font-family: Georgia">Personas registradas</h2>

<div class="container grid-example col s12">
    <?php
    // Conexión a la base de datos
        require "Logica/conexion.php";
        mysqli_set_charset($conexion,'utf8');

    // Consulta SQL
        $consulta_sql="SELECT * FROM persona";
        $resultado = $conexion->query($consulta_sql);

    // Registros
        $count = mysqli_num_rows($resultado); 
            echo "<table class='highlight responsive-table table centered'>
            <thead>
            <tr>    
                <th class='th'>Nombre</th>
                <th class='th'>Apellido</th>
                <th class='th'>No_Cuenta</th>
                <th class='th'>Ocupacion</th>
                <th class='th'>Hobby</th>
                <th class='th'>Correo</th>
                <th class='th'>Contraseña</th>
                <th class='th'>Fecha de Registro</th>
                <th class='th'>Permisos</th>
            </tr>
            </thead>
            <tbody>";

        if ( $count>0 ){
        //para visualizar los datos de la BD
        while( $row = mysqli_fetch_assoc($resultado)  ){
            echo "<tr>";
            echo"<td>". $row['nombre'] ."</td>";
            echo"<td>". $row['apellido'] ."</td>";
            echo"<td>". $row['no_cuenta'] ."</td>";
            echo"<td>". $row['ocupacion'] ."</td>";
            echo"<td>". $row['hobby'] ."</td>";
            echo"<td>". $row['email'] ."</td>";
            echo"<td>". $row['password'] ."</td>";
            echo"<td>". $row['fecha_registro'] ."</td>";
            echo"<td>". $row['permisos'] ."</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        } else {
            echo "<h5 class='red-text center-align'>Sin ningún registro disponible</h5>";
        }
        ?>

        <div class="section center-align">
            <a href="Registro.php" class="deep-purple darken-4 waves-effect waves-light btn">
                Nuevo Registro
                <i class="material-icons left">add_circle</i>
            </a> 
        </div>
</div>
    
        <!-- Scripts de Materialize -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit(); // Inicializa automáticamente los componentes de Materialize
        });
    </script>
</body>
</html>