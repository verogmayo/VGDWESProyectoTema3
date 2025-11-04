<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Véro Grué - ProyectoTema3 Ejercicio06</title>
        <link rel="stylesheet" href="../webroot/css/styleEjercicios.css">
        <style>
             p{
                font-size: 18px;
            }
            span{
                color:blue;
                font-weight: 700;
            }
                    </style>
    </head>

        
    <body>
        <header class="header">
            <a href="../indexProyectoTema3.php">volver</a>
            <h1>Ejercicio 06</h1>
        </header>
        <main>
            <section>
                <?php
                /**
                 * @author: Véronique Grué
                 * @since 10/10/2025
                 * 
                 */
                //Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.
                // Establecer la zona horaria 
                date_default_timezone_set('Europe/Madrid');
                $ofecha = new DateTime();
                // Establecer el locale (idioma) en español
                setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'spanish');
                https://www.php.net/manual/es/class.dateinterval.php
                //Intervalo de días

                $intervalo = new DateInterval('P60D');
                
                
                $ofecha->add($intervalo);
                 echo('<br><br><h3>Fecha dentro de 60 días</h3> ');
               echo( "<p>La fecha de hoy es :<span> " . $ofecha->format("l") . " " . $ofecha->format("d") . " de " . $ofecha->format("F") . " de " . $ofecha->format("o") . " y la hora es: " . $ofecha->format("H:i:s") . '</span></p>');
                
                 echo('<br><br><h3>Usando el timestamp de DateTime y strftime, los dias y los meses están en español</h3> ');
                echo "<p>La fecha dentro de 60 días será : <span>" . strftime("%A %d de %B de %Y", $ofecha->getTimestamp()) .
                " y la hora es: " . $ofecha->format("H:i:s") . '</span></p>';
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

