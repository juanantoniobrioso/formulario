<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario - Datos Recibidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5">
        <div class="col-md-10 col-lg-8 mx-auto">
            <div class="card shadow-sm">
                <div class="card-body p-4 p-md-5">

                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        echo "<h1 class='mb-4'>¡Formulario Recibido!</h1>";
                        echo "<p class='lead'>Estos son los datos que enviaste:</p>";

                        //Denominación de variables de Informacion Personal
                        $nombre = htmlspecialchars($_POST['nombre']);
                        $email = htmlspecialchars($_POST['email']);
                        $telefono = htmlspecialchars($_POST['telefono']);
                        $fechaNac = htmlspecialchars($_POST['fechaNac']);
                        $genero = isset($_POST['genero']) ? htmlspecialchars($_POST['genero']) : "No especificado";

                        //Echos para que se vean los datos de Información Personal
                        echo "<h3>Información Personal</h3>";
                        echo "<ul>";
                        echo "<li><strong>Nombre:</strong> $nombre</li>";
                        echo "<li><strong>Email:</strong> $email</li>";
                        echo "<li><strong>Teléfono:</strong> $telefono</li>";
                        echo "<li><strong>Fecha de Nacimiento:</strong> $fechaNac</li>";
                        echo "<li><strong>Género:</strong> $genero</li>";
                        echo "</ul>";

                        //Denominación de variables de Informacion del Evento
                        $fechaEvento = htmlspecialchars($_POST['fechaEvento']);
                        $tipoEntrada = htmlspecialchars($_POST['tipoEntrada']);
                        
                        //Echos para datos de Informacion del Evento
                        echo "<h3>Información del Evento</h3>";
                        echo "<ul>";
                        echo "<li><strong>Fecha del Evento:</strong> $fechaEvento</li>";
                        echo "<li><strong>Tipo de Entrada:</strong> $tipoEntrada</li>";
                        echo "<li><strong>Preferencias de comida:</strong></li>";
                        echo "<ul>";
                        echo isset($_POST['vegetariano']) ? "<li>Vegetariano</li>" : "";
                        echo isset($_POST['vegano']) ? "<li>Vegano</li>" : "";
                        echo isset($_POST['singluten']) ? "<li>Sin gluten</li>" : "";
                        echo isset($_POST['sinpreferencias']) ? "<li>Sin preferencias</li>" : "";
                        echo "</ul>";
                        echo "</ul>";

                        //Denominacion de variables de Informacion de Acceso
                        $nomUsuario = htmlspecialchars($_POST['nomUsuario']);
                        $password = $_POST['password'];
                        
                        //Echos para datos de Informacion de Acceso
                        echo "<h3>Información de Acceso</h3>";
                        echo "<ul>";
                        echo "<li><strong>Nombre de Usuario:</strong> $nomUsuario</li>";
                        echo "<li><strong>Contraseña:</strong> $password</li>";
                        echo "</ul>";

                        //Denominacion de variables para Preferencias
                        $notisEmail = isset($_POST['aceptarNotisEmail']) ? "Sí, acepto recibir notificaciones" : "No";
                        $terminos = isset($_POST['aceptarTerminos']) ? "Sí, acepto los términos" : "No";

                        //Echos de datos para Preferencias
                        echo "<h3>Preferencias</h3>";
                        echo "<ul>";
                        echo "<li><strong>Recibir Notificaciones:</strong> $notisEmail</li>";
                        echo "<li><strong>Términos y Condiciones:</strong> $terminos</li>";
                        echo "</ul>";


                        //Denominacion de datos para la Encuesta
                        $calificacion = htmlspecialchars($_POST['calificarEventos']);
                        $comentarios = htmlspecialchars($_POST['comentarios']);

                        //Echo de variables de la Encuesta
                        echo "<h3>Encuesta</h3>";
                        echo "<ul>";
                        echo "<li><strong>Calificación:</strong> $calificacion / 10</li>";
                        echo "<li><strong>Comentarios:</strong> $comentarios</li>";
                        echo "</ul>";



                        echo "<h3>Archivo Adjunto</h3>";

                    } else {
                        //Por si acaso alguien entra a procesar.php directamente sin formulario
                        echo "<div class='alert alert-danger text-center'>";
                        echo "<h1 class='display-4'>Acceso Denegado</h1>";
                        echo "<p>Debes enviar el formulario para ver esta página.</p>";
                        echo "<a href='index.html' class='btn btn-primary'>Volver al Formulario</a>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>
</html>