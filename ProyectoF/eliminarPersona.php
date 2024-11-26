<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elimina Registro</title>
    <link rel="shortcut icon" href="media/Eliminar.png" type="image/x-icon">
    <!-- Importa Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!-- Importa los iconos de Materialize -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
<div>
    <nav class="deep-purple lighten-2 right-align">
    <i class="material-icons left">group</i>
        <a href="index.php" class="btn pink"><i class="material-icons">home</i></a>
        <a href="eliminarPersona.php" class="btn pink">ELIMINAR</a>
        <a href="inicioSesion.php" class="btn indigo">SALIR</a>
    </nav>
</div>


<div class="container">
    <h1 style=" text-align: center; color: purple; font-family: Georgia">Elimina Registro</h1>
    <form style=" text-align: center;" method="POST" action="Logica/eliminarRegistro.php">

    <div class="input-field">
        <i class="material-icons prefix">account_circle</i>
                <input id="no_cuenta" type="text" name="no_cuenta" placeholder=" " required>
                <label for="no_cuenta">Número de Cuenta</label>
    </div>

            <button class="btn waves-effect waves-light red" type="submit">
                Eliminar
                <i class="material-icons left">delete</i>
            </button>
    </form>

        <!-- <div class="center-align" style="margin-top: 20px;">
            <a href="index.php" class="btn blue lighten-1 waves-effect waves-light">
                Lista registros
                <i class="material-icons left">home</i>
            </a>
        </div> -->
</div>
<!-- Importa Materialize JS y dependencia de JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>