<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Véro Grué - ProyectoTema3 Ejercicio23</title>
        <link rel="stylesheet" href="../webroot/css/styleEjercicios.css">
        <style>
            label{
                font-size: 20px;
                margin-bottom: 10px;
                display: inline-block;
                width: 170px;
            }
            input {
                height : 35px;
                margin-bottom: 20px;
                width: 500px;
                display: inline-block;
                padding-left: 5px;
            }
            #edad, #nombre{
                margin-right: 10px;
            }


            button{
                font-size: 20px;
                background-color: grey;
                color: white;
                padding: 10px;
                border-radius: 5px;
            }
            section{
                margin-top: 10px;
                display: inline-block;
                margin-bottom: 50px;
            }
            label#carnet{
                display: inline-flex;
            }
            form label:nth-of-type(3){
                width: 300px;
            }
            input#carnet{
                width: 100px;
                height: 20px;
            }
            .pregunta{
                width: 300px;
            }
            #preg{
                width: 200px;
            }
            #tipoFormulario{
                background-color: gainsboro;
            }
            #nombre, #pregunta{
                background-color:rgb(252, 248, 204);
                font-weight: bold;
            }
            li{
                font-size: 20px;
            }
            h3{
                font-size: 25px;
            }


        </style>
    </head>
    <body>
        <header class="header">
            <a href="../indexProyectoTema3.php">volver</a>
            <h1>Ejercicio 23</h1>
        </header>
        <main>
                        <?php
            /**
             * @author Véronique Grué
             * @version 1.0
             * @date 2025-10-18 
             * 
             *
             * Ejercicio 24
             * * Construir un formulario para recoger un cuestionario realizado a una persona y 
             * mostrar en la misma página las preguntas y las respuestas recogidas; en el caso de que 
             * alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, 
             * pero las respuestas que habíamos tecleado correctamente aparecerán en el formulario 
             * y no tendremos que volver a teclearlas.
             */
            /** @var array $aErrores Array para almacenar mensajes de error de validación. */
            $aErrores = [];
            /** @var string $nombre Nombre completo introducido por el usuario. */
            $nombre = '';
            /** @var string $edad Edad introducida por el usuario (como string, se convierte a int para validación). */
            $edad = '';
            /** @var string $pregunta Respuesta a la pregunta de seguridad. */
            $pregunta = '';
            /** @var boolean $carnet Indica si el usuario tiene carnet de conducir (checkbox marcado o no). */
            $carnet = false;

            if (isset($_REQUEST['submit'])) {//se cumple si el boton es submit
                $nombre = $_REQUEST['nombre'] ?? ''; //guarda el valor del campo, y sino gurada vacio
                $edad = $_REQUEST['edad'] ?? '';
                $pregunta = $_REQUEST['pregunta'] ?? '';
                $carnet = isset($_REQUEST['boolean']);

                // Validaciones
                if ($nombre === '') {
                    $aErrores[] = "El nombre no puede estar vacío.";
                }

                if ($edad === '') {
                    $aErrores[] = "La edad no puede estar vacía.";
                } elseif ((int) $edad < 0 || (int) $edad > 120) {
                    $aErrores[] = "La edad no es válida (0-120).";
                }

                // comprobación de la pregunta de seguridad
                if ($pregunta === '' || $pregunta !== 'Lola') {
                    $aErrores[] = "La pregunta de seguridad es incorrecta o está vacía.";
                }

                // Si no hay errores, se muestran los resultados
                if (empty($aErrores)) {
                    echo "<h3>Respuestas recibidas:</h3>";
                    echo"Nombre completo: {$nombre}<br>";
                    echo"Edad: {$edad}<br>";
                    echo "Carnet de conducir: " . ($carnet ? "Sí" : "No") . "<br>";
                    echo "Nombre de tu mascota: " . $pregunta;
                }
            }else{
                 ?>
                <section>
                <h2>Rellena el formulario.</h2>
                <form action="" method="post">
                    <label for="tipoFormulario">Tipo del formulario</label><br>
                    <input name="tipoFormulario" id="tipoFormulario" type="text" value="Formulario de Seguridad" readonly><br>

                    <label for="nombre">Nombre completo:</label><br>
                    <input name="nombre" id="nombre" type="text"><br>

                    <label for="edad">Edad:</label><br>
                    <input name="edad" id="edad" type="number"><br><br>

                    <label id="preg">Pregunta de seguridad:</label>
                    <label for="pregunta" class="pregunta">Cual es el nombre de tu mascota? </label><br>
                    <input name="pregunta" id="pregunta" type="text"><br><br>

                    <label for="carnet">Marca si tienes carnet de conducir:</label>
                    <input type="checkbox" name="boolean" id="carnet"><br>

                    <button type="submit" name="submit">Enviar</button>
                </form>  
            </section>
             <?php
            }
           
           
            // Mostrar errores si hay
            if (!empty($aErrores)) {
                echo'<br><h3>Respuestas del formulario :</h3><br>';
                echo "<div style='color:red;'><ul>";
                foreach ($aErrores as $error) {
                    echo "<li>" . $error . "</li>";
                }
                echo "</ul></div>";
            }
            ?>
        </main>
        <footer class="footer">
            <div class="footerContent">
                <div><p class="copyright">
                        2025-26 IES LOS SAUCES. &#169;Todos los derechos reservados.</p> <address><a href="../../VGDWESProyectoDWES/indexProyectoDWES.html">Véronique Grué.</a> Fecha de Actualización :
                        <time datetime="2025-10-18"></time> 18-10-2025 </address>
                </div>

            </div>

        </footer>

    </body>
</html>

