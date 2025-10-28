<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Véro Grué - ProyectoTema3 Ejercicio27</title>
        <link rel="stylesheet" href="../webroot/css/styleEjercicios.css">
        <style>
            main{
                margin: 0 auto;
                display: flex;
            }
            form{
                padding: 50px;
            }
            label{
                font-size: 20px;
                margin-bottom: 10px;
                display: inline-block;
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
                background-color:gainsboro;
                color: green;
                border:solid black 1px;
                align-self: center;
                width: 150px;
                height: 30px;
            }
            section{
                margin-top: 10px;
                display: inline-block;
                margin-bottom: 50px;
                justify-content: center;
            }
            form label:nth-of-type(3){
                width: 300px;
            }
            #nombreCompletoObligatorio, #fechaIntervaloObligatorio, #numEnteroObligatorio,#textareaObligatorio, #cuadroListaObligatorio{
                background-color:rgb(252, 248, 204);
                font-weight: bold;
                border: solid black 1px;
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
            #cuadroListaObligatorio{
                height: 35px;
            }
            #fechaIntervaloObligatorio{
                width: 100px;
            }
            #textareaObligatorio{
                width: 100%;
            }
            .emoji{
                display: flex;
                width: 100%;

                margin: 0 auto;
            }
            .button{
                display: flex;
                margin-top: 20px;
                align-content: center;

            }

            .contenedor-animo {
                display: flex;
                justify-content: center;
                align-items: center;
                line-height: 1;
                width: 200px;
            }

            /* Columnas verticales */
            .columna-labels,
            .columna-radios {
                display: flex;
                flex-direction: column;    /* Coloca los elementos uno debajo del otro */
                justify-content: center;
            }
            .columna-labels{
                width: 250px;
            }
            .columna-labels label:nth-child(3){
                width: 150px;
            }
            /* Quita márgenes entre etiquetas */
            .columna-labels label {
                margin: 2px 0;
                text-align: center;         /* Alinea el texto hacia los radios */
                width: 150px;
                margin: 10px;
            }

            /* Ajusta posición de los radios */
            .columna-radios input[type="radio"] {
                margin: 2px 0;
                width: 40px;
            }



        </style>
    </head>
    <body>
        <header class="header">
            <a href="../indexProyectoTema3.php">volver</a>
            <h1>Ejercicio 27</h1>
        </header>
        <main>
            <section>
                <?php
                /**
                 * @author Véronique Grué
                 * @version 1.0
                 * @date 2025-10-26
                 * 
                 *
                 * Ejercicio 25
                 * * Modificar la plantilla para el desarrollo de un formulario que recoja y genere el siguiente informe con los datos que se muestran a
                  continuación:
                 */
                //enlace para importar las librerías de validación de campos
                require_once '../core/libreriaValidacion.php';

                //inicialización de variables
                /** @var array $aErrores Array para almacenar mensajes de error de validación. */
                $aErrores = [
                    'nombreCompletoObligatorio' => '',
                    'fechaIntervaloObligatorio' => '',
                    'numEnteroObligatorio' => '',
                    'textareaObligatorio' => '',
                    'cuadroListaObligatorio' => '',
                    'radioButton' => ''
                ];
                /** @var array $aRespuestas Array para almacenar las repuestas. */
                $aRespuestas = [
                    'nombreCompletoObligatorio' => '',
                    'fechaIntervaloObligatorio' => '',
                    'numEnteroObligatorio' => '',
                    'textareaObligatorio' => '',
                    'cuadroListaObligatorio' => '',
                    'animo' => ''
                ];

                /** @boollean boolean $entradaOK Indica si los datos de entrada son correctos o no. */
                $entradaOK = true;

                //Para cada campo del formulario se valida la entrada y se actua en consecuencia
                if (isset($_REQUEST['enviar'])) {//se cumple si el boton es submit
                    //Validación de los datos de los campos del formulario
                    $aErrores['nombreCompletoObligatorio'] = validacionFormularios::comprobarAlfabetico($_REQUEST['nombreCompletoObligatorio'], 100, 1, 1);
                    $aErrores['fechaIntervaloObligatorio'] = validacionFormularios::validarFecha($_REQUEST['fechaIntervaloObligatorio'], '01/01/2025', '01/10/1900', 1);
                    $aErrores['numEnteroObligatorio'] = validacionFormularios::comprobarEntero($_REQUEST['numEnteroObligatorio'], 10, 0, 1);
                    $aErrores['textareaObligatorio'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['textareaObligatorio'], 300, 10, 1);
                    $aErrores['cuadroListaObligatorio'] = validacionFormularios::comprobarAlfabetico($_REQUEST['cuadroListaObligatorio'], 100, 1, 1);

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
                    $aRespuestas['nombreCompletoObligatorio'] = $_REQUEST['nombreCompletoObligatorio'];
                    $aRespuestas['fechaIntervaloObligatorio'] = $_REQUEST['fechaIntervaloObligatorio'];
                    $aRespuestas['numEnteroObligatorio'] = $_REQUEST['numEnteroObligatorio'];
                    $aRespuestas['textareaObligatorio'] = $_REQUEST['textareaObligatorio'];
                    $aRespuestas['cuadroListaObligatorio'] = $_REQUEST['cuadroListaObligatorio'];
                    $aRespuestas['animo'] = $_REQUEST['animo'];

                    //Se recorre el array de las respuestas y se muestran
                    print("<br><h3>Respuestas del usuario</h3><br>");
                    foreach ($aRespuestas as $campo => $valorCampo) {
                        print("$campo del usuario : " . $valorCampo . '</br>');
                    }
                } else {
                    //si hay algún error se vuelve a mostrar el formulario
                    ?>

                    <h2>ENCUESTA INDIVIDUAL DE VALORACIÓN.</h2>
                    <div class="emoji"><img src="../webroot/images/emoji.jfif" width="100" height="100" alt="imagenEmoji"></div>

                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

                        <label for="nombreCompletoObligatorio">Nombre y apellidos del alumno:</label>
                        <input name="nombreCompletoObligatorio" id="nombreCompletoObligatorio" type="text" value='<?php echo(empty($aErrores['nombreCompletoObligatorio'])) ? ($_REQUEST['nombreCompletoObligatorio'] ?? '') : ''; ?> '>
                        <a style='color:red'><?php echo $aErrores['nombreCompletoObligatorio'] ?></a>


                        <br>
                        <label for="fechaIntervaloObligatorio">Fecha de nacimiento(hasta el 01/01/2025):</label>
                        <input name="fechaIntervaloObligatorio" id="fechaIntervaloObligatorio" type="date"
                            value="<?php echo empty($aErrores['fechaIntervaloObligatorio']) ? ($_REQUEST['fechaIntervaloObligatorio'] ?? '') : '';?>">
                        <a style='color:red'><?php echo $aErrores['fechaIntervaloObligatorio'] ?? '' ?></a>

                        <br><label for="animo">¿Cómo te sientes hoy?</label><br>
                        <div class="contenedor-animo">
                            <div class="columna-labels">
                                <label for="muyMal">MUY MAL</label>
                                <label for="mal">MAL</label>
                                <label for="regular">REGULAR</label>
                                <label for="bien">BIEN</label>
                                <label for="muyBien">MUY BIEN</label>
                            </div>

                            <div class="columna-radios">
                                <input type="radio" id="muyMal" name="animo" value="muyMal"
                                       <?php if (isset($_REQUEST['animo']) && $_REQUEST['animo'] === 'muyMal') echo 'checked'; ?>>
                                <input type="radio" id="mal" name="animo" value="mal"
                                       <?php if (isset($_REQUEST['animo']) && $_REQUEST['animo'] === 'mal') echo 'checked'; ?>>
                                <input type="radio" id="regular" name="animo" value="regular"
                                       <?php if (isset($_REQUEST['animo']) && $_REQUEST['animo'] === 'regular') echo 'checked'; ?>>
                                <input type="radio" id="bien" name="animo" value="bien"
                                       <?php if (isset($_REQUEST['animo']) && $_REQUEST['animo'] === 'bien') echo 'checked'; ?>>
                                <input type="radio" id="muyBien" name="animo" value="muyBien"
                                       <?php if (isset($_REQUEST['animo']) && $_REQUEST['animo'] === 'muyBien') echo 'checked'; ?>>
                            </div>
                        </div>

                        <br>
                        <label for='numEnteroObligatorio'>¿Como va el curso?[0-10]:</label>
                        <input name='numEnteroObligatorio' id='numEnteroObligatorio' type='number' value="<?php echo(empty($aErrores['numEnteroObligatorio'])) ? ($_REQUEST['numEnteroObligatorio'] ?? '') : ''; ?>">
                        <a style='color:red'><?php echo $aErrores['numEnteroObligatorio'] ?></a>



                        <label for="cuadroListaObligatorio">¿Cómo se presentan las vacaciones de navidad?:</label>
                        <select name="cuadroListaObligatorio" id="cuadroListaObligatorio">
                            <option value="Ni idea">Ni idea</option>
                            <option value="Con la familia">Con la familia</option>
                            <option value="De fiesta">De fiesta</option>
                            <option value="Trabajando">Trabajando</option>
                            <option value="Estudiando DWES">Estudiando DWES</option>
                        </select><br>                   


                        <label for="textareaObligatorio">Comentario:</label>
                        <a style='color:red'><?php echo $aErrores['textareaObligatorio'] ?? '' ?></a><br>
                        <textarea name="textareaObligatorio" id="textareaObligatorio" rows="4" cols="50"><?php echo(empty($aErrores['textareaObligatorio'])) ? ($_REQUEST['textareaObligatorio'] ?? '') : ''; ?></textarea>


                        <div class="button"><button type="submit" name="enviar">Enviar</button></div>


                    </form>  
                    <?php
                }
                ?>
            </section>


        </main>
        <footer class="footer">
            <div class="footerContent">
                <div><p class="copyright">
                        2025-26 IES LOS SAUCES. &#169;Todos los derechos reservados.</p> <address><a href="../../VGDWESProyectoDWES/indexProyectoDWES.html">Véronique Grué.</a> Fecha de Actualización :
                        <time datetime="2025-10-02"></time> 02-10-2025 </address>
                </div>

            </div>

        </footer>

    </body>
</html>

