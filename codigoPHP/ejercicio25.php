<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Véro Grué - ProyectoTema3 Ejercicio25</title>
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
            #dni,#dniObligatorio, #nombre,#nombreObligatorio, #apellidos,#apellidosObligatorio, #fecha{
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
            <h1>Ejercicio 25</h1>
        </header>
        <main>
            <section>
                <?php
                /**
                 * @author Véronique Grué
                 * @version 1.0
                 * @date 2025-10-24 
                 * 
                 *
                 * Ejercicio 25
                 * * Trabajar en PlantillaFormulario.php mi plantilla para hacer formularios como churros.
                 */
                //enlace para importar las librerías de validación de campos
                require_once '../core/libreriaValidacion.php';
                require_once '../core/miLibreriaStatic.php';

                //inicialización de variables
                /** @var array $aErrores Array para almacenar mensajes de error de validación. */
                $aErrores = [
                    'dniObligatorio' => '',
                    'dni' => '',
                    'nombreObligatorio' => '',
                    'nombre' => '',
                    'apellidosObligatorio' => '',
                    'apellidos' => '',
                    'nombreCompletoObligatorio' => '',
                    'nombreCompleto' => '',
                    'fechaIntervaloObligatorio' => '',
                    'fechaConTope' => '',
                    'fecha' => '',
                    'telefonoObligatorio' => '',
                    'telefono' => '',
                    'numEnteroObligatorio' => '',
                    'numEntero' => '',
                    'textoCortoObligatorio' => '',
                    'textoCorto' => '',
                    'cuadroListaObligatorio' => '',
                    'textareaObligatorio' => '',
                    'textarea' => '',
                    'emailObligatorio' => '',
                    'email' => '',
                    'fileObligatorio' => '',
                    'file' => '',
                    'password' => ''
                ];
                /** @var array $aRespuestas Array para almacenar las repuestas. */
                $aRespuestas = [
                    'dniObligatorio' => '',
                    'dni' => '',
                    'nombreObligatorio' => '',
                    'nombre' => '',
                    'apellidosObligatorio' => '',
                    'apellidos' => '',
                    'nombreCompletoObligatorio' => '',
                    'nombreCompleto' => '',
                    'fechaIntervaloObligatorio' => '',
                    'fechaConTope' => '',
                    'fecha' => '',
                    'telefonoObligatorio' => '',
                    'telefono' => '',
                    'numEnteroObligatorio' => '',
                    'numEntero' => '',
                    'textoCortoObligatorio' => '',
                    'textoCorto' => '',
                    'cuadroListaObligatorio' => '',
                    'textareaObligatorio' => '',
                    'textarea' => '',
                    'emailObligatorio' => '',
                    'email' => '',
                    'fileObligatorio' => '',
                    'file' => '',
                    'password' => ''
                ];

                /** @boollean boolean $entradaOK Indica si los datos de entrada son correctos o no. */
                $entradaOK = true;

                //Para cada campo del formulario se valida la entrada y se actua en consecuencia
                if (isset($_REQUEST['enviar'])) {//se cumple si el boton es submit
                    //Validación de los datos de los campos del formulario
                    $aErrores['dniObligatorio'] = validacionFormularios::validarDni($_REQUEST['dniObligatorio'], 1);
                    $aErrores['dni'] = validacionFormularios::validarDni($_REQUEST['dni']);
                    $aErrores['nombreObligatorio'] = validacionFormularios::comprobarAlfabetico($_REQUEST['nombreObligatorio'], $maxTamanio, $minTamanio, 1);
                    $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'], $maxTamanio, $minTamanio, 0);
                    $aErrores['apellidosObligatorio'] = validacionFormularios::comprobarAlfabetico($_REQUEST['apellidosObligatorio'], $maxTamanio, $minTamanio, 1);
                    $aErrores['apellidos'] = validacionFormularios::comprobarAlfabetico($_REQUEST['apellidos'], $maxTamanio, $minTamanio, 0);
                    $aErrores['nombreCompletoObligatorio'] = validacionFormularios::comprobarAlfabetico($_REQUEST['nombreCompletoObligatorio'], $minTamanio, 1, 1);
                    $aErrores['nombreCompleto'] = validacionFormularios::comprobarAlfabetico($_REQUEST['nombreCompleto'], $maxTamanio, $minTamanio, 0);
                    $aErrores['fechaIntervaloObligatoria'] = validacionFormularios::validarFecha($_REQUEST['fechaIntervaloObligatoria'], $fechaMaxima, $fechaMinima, 1);
                    $aErrores['fechaConTope'] = validacionFormularios::validarFecha($_REQUEST['fechaConTope'], $fechaMaxima);
                    $aErrores['fecha'] = validacionFormularios::validarFecha($_REQUEST['fecha']);
                    $aErrores['telefonoObligatorio'] = validacionFormularios::validarTelefono($_REQUEST['telefonoObligatorio'], $obligatorio);
                    $aErrores['telefono'] = validacionFormularios::validarTelefono($_REQUEST['telefono']);
                    $aErrores['numEnteroObligatorio'] = validacionFormularios::comprobarEntero($_REQUEST['numEnteroObligatorio'], $max, $min, 1);
                    $aErrores['numEntero'] = validacionFormularios::comprobarEntero($_REQUEST['numEntero']);
                    $aErrores['textoCortoObligatorio'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['textoCortoObligatorio'], $maxTamanio, $minTamanio, 1);
                    $aErrores['textoCorto'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['textoCorto']);
                    $aErrores['cuadroListaObligatorio'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['cuadroListaObligatorio'], $maxTamanio, $minTamanio, 1);
                    $aErrores['textareaObligatorio'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['textareaObligatorio'], $maxTamanio, $minTamanio, 1);
                    $aErrores['textarea'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['textareaCorto']);
                    $aErrores['emailObligatorio'] = validacionFormularios::validarEmail($_REQUEST['email'], 1);
                    $aErrores['email'] = validacionFormularios::validarEmail($_REQUEST['email'], 0);
                    $aErrores['passwordObligatorio'] = validacionFormularios::validarPassword($_REQUEST['passwordObligatorio'], $maximo, $minimo, $tipo, $obligatorio);
                    $aErrores['password'] = validacionFormularios::validarPassword($_REQUEST['password']);

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
                    $aRespuestas['dniObligatorio'] = $_REQUEST['dniObligatorio'];
                    $aRespuestas['dni'] = $_REQUEST['dni'];
                    $aRespuestas['nombreObligatorio'] = $_REQUEST['nombreObligatorio'];
                    $aRespuestas['nombre'] = $_REQUEST['nombre'];
                    $aRespuestas['apellidosObligatorio'] = $_REQUEST['apellidosObligatorio'];
                    $aRespuestas['apellidos'] = $_REQUEST['apellidos'];
                    $aRespuestas['nombreCompletoObligatorio'] = $_REQUEST['nombreCompletoObligatorio'];
                    $aRespuestas['nombreCompleto'] = $_REQUEST['nombreCompleto'];
                    $aRespuestas['fechaIntervaloObligatoria'] = $_REQUEST['fechaIntervaloObligatoria'];
                    $aRespuestas['fechaConTope'] = $_REQUEST['fechaConTope'];
                    $aRespuestas['fecha'] = $_REQUEST['fecha'];
                    $aRespuestas['telefonoObligatorio'] = $_REQUEST['telefonoObligatorio'];
                    $aRespuestas['telefono'] = $_REQUEST['telefono'];
                    $aRespuestas['numEnteroObligatorio'] = $_REQUEST['numEnteroObligatorio'];
                    $aRespuestas['numEntero'] = $_REQUEST['numEntero'] ;
                    $aRespuestas['textoCortoObligatorio'] = $_REQUEST['textoCortoObligatorio'];
                    $aRespuestas['textoCorto'] = $_REQUEST['textoCorto'] ;
                    $aRespuestas['emailObligatorio'] = $_REQUEST['emailObligatorio'];
                    $aRespuestas['email'] = $_REQUEST['email'];
                    $aRespuestas['passwordObligatorio'] = $_REQUEST['passwordObligatorio'];
                    $aRespuestas['password'] = $_REQUEST['password'];

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
                            
                            <label for="dniObligatorio">DNI:</label>
                            <a style='color:red'><?php echo $aErrores['dniObligatorio'] ?></a><br>
                            <input name="dniObligatorio" id="dniObligatorio" type="text" value='<?php echo(empty($aErrores['dniObligatorio'])) ? ($_REQUEST['dniObligatorio'] ?? '') : ''; ?> '><br>

                            <label for="nombreObligatorio">Nombre:</label>
                            <a style='color:red'><?php echo $aErrores['nombreObligatorio'] ?></a><br>
                            <input name="nombreObligatorio" id="nombreObligatorio" type="text" value='<?php echo(empty($aErrores['nombreObligatorio'])) ? ($_REQUEST['nombreObligatorio'] ?? '') : ''; ?> '><br>
                            
                            <label for="apellidosObligatorio">Apellidos:</label>
                            <a style='color:red'><?php echo $aErrores['apellidosObligatorio'] ?></a><br>
                            <input name="apellidosObligatorio" id="apellidosObligatorio" type="text" value='<?php echo(empty($aErrores['apellidosObligatorio'])) ? ($_REQUEST['apellidosObligatorio'] ?? '') : ''; ?> '><br><!--  -->
                            
                            
                            <label for="fecha">Fecha Nacimiento:</label>
                            <a style='color:red'><?php echo $aErrores['fecha'] ?? '' ?></a><br>
                            <input name="fecha" id="fecha" type="date"><br>

                            <label for="telefono">Teléfono:</label><br>
                            <a style='color:red'><?php echo $aErrores['telefono'] ?></a><br>
                            <input name="telefono" id="telefono" type="text" value='<?php echo(empty($aErrores['telefono'])) ? ($_REQUEST['telefono'] ?? '') : ''; ?> '><br>
                            
                            <label for="email">Email:</label><br>
                            <a style='color:red'><?php echo $aErrores['email'] ?></a><br>
                            <input name="email" id="email" type="email" value='<?php echo(empty($aErrores['email'])) ? ($_REQUEST['email'] ?? '') : ''; ?> '><br>
                            
                            <label for="textareaObligatorio">Comentario:</label>
                            <a style='color:red'><?php echo $aErrores['textareaObligatorio'] ?? '' ?></a><br>
                            <textarea name="textareaObligatorio" id="textareaObligatorio" rows="4" cols="50"><?php echo(empty($aErrores['textareaObligatorio'])) ? ($_REQUEST['textareaObligatorio'] ?? '') : ''; ?></textarea><br>
                            
                            <label for="carnet">Marca si tienes carnet de conducir:</label>
                            <input type="checkbox" name="boolean" id="carnet"><br>

                            <button type="submit" name="enviar">Enviar</button>

                        </form>  
                        <?php
                    }
                    ?>
                   
                </section>

        </main>
        <footer class="footer">
            <div class="footerContent">
                <div><p class="copyright">
                        2025-26 IES LOS SAUCES. &#169;Todos los derechos reservados.</p> <address><a href="../indexProyectoTema3.php">Véronique Grué.</a> Fecha de Actualización :
                        <time datetime="2025-10-02"></time> 02-10-2025 </address>
                    </div>

            </div>

        </footer>

    </body>
</html>

