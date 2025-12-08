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
                border-radius: 10px;
            }
            #descripcionDpto, #codigoDepartamento{
                margin-right: 10px;
            }
            #codigoDepartamento, #VolumenNegocioDpto, #fechaCreacionDpto, #fechaBajaDpto {
                width: 100px;
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
                margin-bottom: 50px;
            }
            label{
                width: auto;
            }

            
            #descripcionDpto{
                width: 80%;
            }

            #codigoDepartamento, #descripcionDpto, #VolumenNegocioDpto{
                background-color:rgb(252, 248, 204);
                font-weight: bold;
            }
            
            h3{
                font-size: 25px;
            }
            #fechaCreacionDpto{
                background-color: gainsboro;
            }
            .button{
                margin-top: 100px;
                font-size: 20px;
                background-color: grey;
                color: white;
                padding: 10px;
                border-radius: 5px;
            }
            p{
                margin: 10px;
                font-size: 20px;
                font-weight: bold;
            }
            .valorCampo{
                font-size: 20px;
                color:blue;
                font-weight: bold;
            }
            .fechas{
                display: flex;
                gap: 20px;
            }
            form a{
                color: red;
                font-size: 18px;
            }
            form{
                border: 2px solid blue;
                border-radius: 15px;
                width: 60%;
                padding: 25px;
                background:rgb(220, 241, 248);
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
             * @version 2.0
             * @date 2025-12-06 
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
                'codigoDepartamento' => '',
                'fechaCreacionDpto' => '',
                'fechaBajaDpto' => '',
                'descripcionDpto' => '',
                'VolumenNegocioDpto' => ''
            ];
            /** @var array $aRespuestas Array para almacenar las repuestas. */
            $aRespuestas = [
                'codigoDepartamento' => '',
                'fechaCreacionDpto' => '',
                'fechaBajaDpto' => '',
                'descripcionDpto' => '',
                'VolumenNegocioDpto' => ''
            ];

            /** @boollean boolean $entradaOK Indica si los datos de entrada son correctos o no. */
            $entradaOK = true;

            //Para cada campo del formulario se valida la entrada y se actua en consecuencia
            if (isset($_REQUEST['enviar'])) {//se cumple si el boton es submit
                //Validación de los datos de los campos del formulario
                $aErrores['codigoDepartamento'] = miLibreriaStatic::comprobarAlfabeticoMayuscula($_REQUEST['codigoDepartamento'], 3, 3, 1);
                //la fecha de creación de dpto  es un campo obligatorio.
                $aErrores['fechaCreacionDpto'] = validacionFormularios::validarFecha($_REQUEST['fechaCreacionDpto']);
                //la fecha de creación de dpto  no es un campo obligatorio.
                $aErrores['fechaBajaDpto'] = validacionFormularios::validarFecha($_REQUEST['fechaBajaDpto']);
                $aErrores['descripcionDpto'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['descripcionDpto'], 255, 5, 1);
                $aErrores['VolumenNegocioDpto'] = miLibreriaStatic::comprobarFloatMonetarioES2($_REQUEST['VolumenNegocioDpto'], PHP_FLOAT_MAX, -PHP_FLOAT_MAX, 1);
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
                $aRespuestas['codigoDepartamento'] = $_REQUEST['codigoDepartamento'];
                $aRespuestas['fechaCreacionDpto'] = $_REQUEST['fechaCreacionDpto'];
                //Si no se introduce la fecha de baja el dateTime es null y aparece el mensaje
                if (!empty($_REQUEST['fechaBajaDpto'])) {
                    $oFechaBajaDpto = new DateTime($_REQUEST['fechaBajaDpto']);
                    $aRespuestas['fechaBajaDpto'] = $oFechaBajaDpto;
                } else {
                    $oFechaBajaDpto = null;
                    $aRespuestas['fechaBajaDpto'] = 'Departamento en activo';
                }
                $aRespuestas['descripcionDpto'] = $_REQUEST['descripcionDpto'];
                $aRespuestas['VolumenNegocioDpto'] = $_REQUEST['VolumenNegocioDpto'];

                //Se formatean las respuestas
                echo '<div>';
                print("<br><h3>Respuestas del usuario</h3><br>");
                print("<p > Código de Departamento: <span class='valorCampo'>" . $aRespuestas['codigoDepartamento'] . "</span></p>");
                print("<p >Fecha de Creación del departamento: <span class='valorCampo'>" . $aRespuestas['fechaCreacionDpto'] . "</span></p>");
                // si el valor del campo es un objeto DateTime formatea la fecha sino escibe el mensaje
                print("<p>Fecha de baja del departamento: <span class='valorCampo'>" . ($oFechaBajaDpto instanceof DateTime ? $oFechaBajaDpto->format("d-m-Y") : "Departamento en activo") . "</span></p>");
                print("<p >Descripción del departamento: <span class='valorCampo'>" . $aRespuestas['descripcionDpto'] . "</span></p>");
                print("<p >Volumen de negocio del departamento: <span class='valorCampo'>" . $aRespuestas['VolumenNegocioDpto'] . "€</span></p>");

                echo '</div>';
                echo '<div>';
                echo "<br><a href='ejercicio24.php' class='button'>Volver al formulario</a>";
                echo '</div>';
            } else {
                //si hay algún error se vuelve a mostrar el formulario
                ?>
                <section>
                    <h2>Formulario de alta de Departamento.</h2>
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

                        <label for="codigoDepartamento">Código del departamento: </label>
                        <input  name="codigoDepartamento" id="codigoDepartamento" type="text" value='<?php echo(empty($aErrores['codigoDepartamento'])) ? ($_REQUEST['codigoDepartamento'] ?? '') : ''; ?>'>
                        <a style='color:red'><?php echo $aErrores['codigoDepartamento'] ?></a><br>

                        <label for="fechaCreacionDpto">Fecha de creación del departamento: </label>
                        <input  name="fechaCreacionDpto" id="fechaCreacionDpto" type="text" value='<?php echo (new DateTime())->format('d-m-Y'); ?>'readonly>
                        <a style='color:red'><?php echo $aErrores['fechaCreacionDpto'] ?></a><br>
                        
                        <label for="fechaBajaDpto">Fecha de baja del departamento:</label>
                        <input name="fechaBajaDpto" id="fechaBajaDpto" type="date" value='<?php echo(empty($aErrores['fechaBajaDpto'])) ? ($_REQUEST['fechaBajaDpto'] ?? '') : ''; ?>'>
                        <a style='color:red'><?php echo $aErrores['fechaBajaDpto'] ?></a><br>
                        
                        <label for="descripcionDpto" id="preg">Descripción del departamento:</label>
                        <input name="descripcionDpto" id="descripcionDpto" type="text" value='<?php echo(empty($aErrores['descripcionDpto'])) ? ($_REQUEST['descripcionDpto'] ?? '') : ''; ?>'>
                        <a style='color:red'><?php echo $aErrores['descripcionDpto'] ?></a><br>
                       
                        <label for="VolumenNegocioDpto" id="preg">Volumen de negocio del Departamento:</label>
                        <input name="VolumenNegocioDpto" id="VolumenNegocioDpto" type="text" value='<?php echo(empty($aErrores['VolumenNegocioDpto'])) ? ($_REQUEST['VolumenNegocioDpto'] ?? '') : ''; ?>'>
                        <a style='color:red'><?php echo $aErrores['VolumenNegocioDpto'] ?></a><br>

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
                        <time datetime="2025-12-06"></time> 06-12-2025 </address>
                </div>

            </div>

        </footer>

    </body>
</html>

