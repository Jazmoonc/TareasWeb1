<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="shortcut icon" href="media/Inicio.png" type="image/x-icon">
    <!-- Importar Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    
</head>
<body>
    <!-- Contenedor principal -->
    <div class="container">
        <!-- Encabezado con imagen centrada -->
        <header class="center-align">
            <img src="media/inicio.jpg" alt="Logo" class="responsive-img" style="max-width: 80px; margin-top: 20px;">
        </header>

        <!-- Tarjeta con formulario -->
        <div class="row">
            <div class="col s12 m6 offset-m3">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title center-align" style="font-size: 26px; color: blue;"><b>Iniciar sesión</b></span>
                        <form action="Logica/loguin.php" method="post">
                            <div class="input-field">
                                <input id="nombre" type="text" name="nombre" required maxlength="60">
                                <label for="nombre" style= "font-family: Tahoma">Nombre</label>
                            </div>
                            <div class="input-field">
                                <input id="password" type="password" name="password" required maxlength="4">
                                <label for="password" style= "font-family: Tahoma">Contraseña</label>
                            </div>
                            <div class="center-align">
                                <button type="submit" name="submit" class="btn purple darken-4 waves-effect waves">
                                    Ingresar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Importar Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
