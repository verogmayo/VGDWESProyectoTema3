<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Véro Grué - ProyectoTema3 Ejercicio09</title>
        <link rel="stylesheet" href="../webroot/css/styleEjercicios.css">
    </head>
    <body>
        <header class="header">
            <a href="../indexProyectoTema3.php">volver</a>
            <h1>Ejercicio 09</h1>
        </header>
        <main>
            <section>
                <?php
                /**
                 * @author:  Véronique Grué
                 * @since  13/10/2025
                 * 
                 */
                // Mostrar el path donde se encuentra el fichero que se está ejecutando.     
                // echo "El path donde se encuentra el fichero que se está ejecutando: " . $_SERVER['PATH_INFO'];
                // No funciona con este.
                //Con $SERVER y SCRIPT_NAME: ruta del fichero
                echo'<h3>Ruta del fichero son "$_SERVER"<h3>';
                echo '<p style="font-size:14px;">El path donde se encuentra el fichero que se está ejecutando: </p>' . $_SERVER['SCRIPT_FILENAME'];
                //Sin $SERVER 
                echo '<br><br><h3>Ruta del fichero sin "$_SERVER"</h3>';
                echo '<p style="font-size:14px;"><b>El directorio donde se encuentra el fichero que se está ejecutando: ' . __DIR__ .'</b></p>';

                //https://www.php.net/manual/es/reserved.variables.server.php
                ?>
            </section>


        </main>
        <footer class="footer">
            <div class="footerContent">
                <div><p class="copyright">
                        2025-26 IES LOS SAUCES. &#169;Todos los derechos reservados.</p> <address><a href="../indexProyectoTema3.php">Véronique Grué.</a> Fecha de Actualización :
                        <time datetime="2025-10-13"></time> 13-10-2025 </address>
                </div>

            </div>

        </footer>

    </body>
</html>

