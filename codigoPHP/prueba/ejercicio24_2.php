<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Véro Grué - ProyectoTema3 Ejercicio24</title>
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
            #preguntaSeguridad, #nombre{
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
            .preguntaSeguridad{
                width: 400px;
            }
            #preg{
                width: 200px;
            }
            #nombre, #preguntaSeguridad{
                background-color:rgb(252, 248, 204);
                font-weight: bold;
            }
            li{
                font-size: 20px;

            }
            h3{
                font-size: 25px;
            }
            #tipoFormulario{
                background-color: gainsboro;
            }


        </style>
    </head>
    <body>
        <header class="header">
            <a href="../indexProyectoTema3.php">volver</a>
            <h1>Ejercicio 24</h1>
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
            //enlace para importar las librerías de validación de campos
            require_once '../core/libreriaValidacion.php';
            require_once '../core/miLibreriaStatic.php';

            //inicialización de variables
            /** @var array $aErrores Array para almacenar mensajes de error de validación. */
            $aErrores = [
                'nombre' => '',
                'edad' => '',
                'preguntaSeguridad' => '',
            ];
            /** @var array $aRespuestas Array para almacenar las repuestas. */
            $aRespuestas = [
                'nombre' => '',
                'edad' => '',
                'preguntaSeguridad' => '',
            ];

            /** @boollean boolean $entradaOK Indica si los datos de entrada son correctos o no. */
            $entradaOK = true;

            //Para cada campo del formulario se valida la entrada y se actua en consecuencia
            if (isset($_REQUEST['enviar'])) {//se cumple si el boton es submit
                //Validación de los datos de los campos del formulario
                $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'], 80, 10, 1);
                $aErrores['edad'] = validacionFormularios::comprobarEntero($_REQUEST['edad'], 120, 0, 0);
                // Pregunta de seguridad
                $valoresValidos = ["Lola", "lola"]; // posibles valores válidos 
                $aErrores['preguntaSeguridad'] = miLibreriaStatic::comprobarPreguntaSeguridad($_REQUEST['preguntaSeguridad'], $valoresValidos, 1);

                //recorre el array de errores para detectar si hay alguno
                foreach ($aErrores as $campo => $valorCampo) {
                    if ($valorCampo != null) {//Si encuentra algún error 
                        $entradaOK = false; // la entrada no es correcta
                    }
                }
            } else {
                //Si no se ha aceptado el formulario
                $entradaOK = false;
            }
            //Tratamiento del formulario
            if ($entradaOK) {
                //REllenamos el array de respuesta con los valores que ha introducido el usuario
                $aRespuestas['nombre'] = $_REQUEST['nombre'];
                $aRespuestas['edad'] = $_REQUEST['edad'];
                $aRespuestas['preguntaSeguridad'] = $_REQUEST['preguntaSeguridad'];

                //Se recorre el array de las respuestas y se muestran
                print("<br><h3>Respuestas del usuario</h3><br>");
                foreach ($aRespuestas as $campo => $valorCampo) {
                    print("$campo del usuario : " . $valorCampo . '</br>');
                }
            } else {
                //si hay algún error se vuelve a mostrar el formulario
                ?>
                <section>
                    <h2>Rellena el formulario.</h2>
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

                        <label for="tipoFormulario">Tipo del formulario</label><br>
                        <input name="tipoFormulario" id="tipoFormulario" type="text" value="Formulario de Seguridad" readonly><br>
                        
                        <label for="nombre">Nombre completo:</label>
                        <a style='color:red'><?php echo $aErrores['nombre'] ?></a><br>
                        <input  name="nombre" id="nombre" type="text" value='<?php echo(empty($aErrores['nombre'])) ? ($_REQUEST['nombre'] ?? '') : ''; ?> '><br>

                        <label for="edad">Edad:</label><br>
                        <a style='color:red'><?php echo $aErrores['edad'] ?></a><br>
                        <input name="edad" id="edad" type="number" value=' <?php echo(empty($aErrores['edad'])) ? ($_REQUEST['edad'] ?? '') : ''; ?> '><br>

                        <label for="preguntaSeguridad" id="preg">Pregunta de seguridad:</label>
                        <label for="preguntaSeguridad" class="preguntaSeguridad">Cual es el nombre de tu mascota? </label><br>
                        <a style='color:red'><?php echo $aErrores['preguntaSeguridad'] ?></a><br>
                        <input name="preguntaSeguridad" id="preguntaSeguridad" type="text" value=' <?php echo(empty($aErrores['preguntaSeguridad'])) ? ($_REQUEST['preguntaSeguridad'] ?? '') : ''; ?> '><br>

                        <label for="carnet">Marca si tienes carnet de conducir:</label>
                        <input type="checkbox" name="boolean" id="carnet"><br>

                        <button type="submit" name="enviar">Enviar</button>

                    </form>  
                    <?php
                }
                ?>
        </main>
        <footer class="footer">
            <div class="footerContent">
                <div><p class="copyright">
                        2025-26 IES LOS SAUCES. &#169;Todos los derechos reservados.</p> <address><a href="../indexProyectoTema3.php">Véronique Grué.</a> Fecha de Actualización :
                        <time datetime="2025-10-18"></time> 18-10-2025 </address>
                </div>

            </div>

        </footer>

    </body>
</html>

