<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Véro Grué - ProyectoTema3 Ejercicio05</title>
        <link rel="stylesheet" href="../webroot/css/styleEjercicios.css">
        <style>
            .parafo{
                margin-top: 5px;
            }
            p{
                font-size: 18px;
            }

        </style>
    </head>
    <body>
        <header class="header">
            <a href="../indexProyectoTema3.php">volver</a>
            <h1>Ejercicio 05</h1>
        </header>
        <main>
            <section>
                <?php
                /**
                 * @author:  Véronique Grué
                 * @since  10/10/2025
                 * 
                 */
                // Establecer la zona horaria 
                date_default_timezone_set('Europe/Madrid');
                //Para obtener el timestamp actual
                //  $timeStamp = time();
                //Mostrar el timeStamp
                // echo "El Timestamp actual es: ".date("d-m-Y H:i:s ",$timeStamp);


                $ofecha = new DateTime();
                //Para obtener el timestamp actual
                $timestamp = $ofecha->getTimestamp();
                //Mostrar el timeStamp
                echo"<p>Codigo TimeStamp : " . $timestamp . "</p>";
                echo '<p class="parafo">El formato legible del Timestamp actual es: ' . date("d-m-Y H:i:s", $timestamp) . "</p>";
                ?>
            </section>


        </main>
        <footer class="footer">
            <div class="footerContent">
                <div><p class="copyright">
                        2025-26 IES LOS SAUCES. &#169;Todos los derechos reservados.</p> <address><a href="../indexProyectoTema3.php">Véronique Grué.</a> Fecha de Actualización :
                        <time datetime="2025-10-10"></time> 10-10-2025 </address>
                </div>

            </div>

        </footer>

    </body>
</html>

