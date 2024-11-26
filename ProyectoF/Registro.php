<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" >
    <title>Nuevo</title>
    <link rel="shortcut icon" href="media/Añadir.png" type="image/x-icon">
    <!-- Importar Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!-- Importar los iconos de Materialize -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
   
<div>
    <nav class="deep-purple lighten-2 right-align">
    <i class="material-icons left">group</i>
        <a href="eliminarPersona.php" class="btn pink">ELIMINAR</a>
        <a href="inicioSesion.php" class="btn indigo">SALIR</a>
    </nav>
</div>

<div class="container">
    <header class="center-align">
        <h3 class="center-align" style="color: purple; font-family: Georgia">Registrate aquí:</h3>
    </header>
    <div class="row">
        <form action="Logica/añadirRegistro.php" method="post">
            
            <div class="input-field">
                <label for="nombre" style= "font-family: Tahoma">Nombre:</label>
                <input type="text" name="nombre" required maxlength="100" placeholder="Ingresa tu nombre">
            </div>
            <div class="input-field">
                <label for="apellido" style= "font-family: Tahoma">Apellido:</label>
                <input type="text" name="apellido" required maxlength="30" placeholder="Ingresa tu apellido paterno">
            </div>
            <div class="input-field">
                <label for="email" style= "font-family: Tahoma">Correo:</label>
                <input type="email" name="email" required maxlength="100" placeholder="Ingresa tu correo">
            </div>
            <div class="input-field">
                <label for="no_cuenta" style= "font-family: Tahoma">Numero de cuenta:</label>
                <input type="text" name="no_cuenta" required maxlength="9" placeholder="Ingresa tu numero de cuenta">
            </div>
            <div class="input-field">
                <label for="ocupacion" style= "font-family: Tahoma">Ocupación:</label>
                <input type="text" name="ocupacion" required maxlength="15" placeholder="Ingresa tu ocupacion">
            </div>
            <div class="input-field">
                <label for="hobby" style= "font-family: Tahoma">Hobby:</label>
                <input type="text" name="hobby" required maxlength="50" placeholder="Pasatiempo favorito">
            </div>
            <div class="input-field">
                <label for="password" style= "font-family: Tahoma">Contraseña:</label>
                <input type="password" name="password" required maxlength="4" placeholder="Ingresa tu contraseña">
            </div>
    </div>
            <button class="btn green waves-effect waves" type="submit" name="submit">
                Enviar registro
                <i class="material-icons right">send</i>
            </button>     
        </form>
    </div>
    <div class="center-align" style="margin-top: 20px;">
            <a href="index.php" class="btn deep-purple waves-effect waves-light">
                Ver registro
                <i class="material-icons right">visibility</i>
            </a>
    </div>
</div>
     <!-- Importar Materialize JS y dependencia de JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
