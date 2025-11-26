<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Véro Grué - ProyectoTema3 Ejercicio01</title>
        <link rel="stylesheet" href="../webroot/css/styleEjercicios.css">
    </head>
    <body>
        <header class="header">
            <a href="../indexProyectoTema3.php">volver</a>
            <h1>Ejercicio 01</h1>
        </header>
        <main>
            <section>
                <?php
                /**
                 * @author: Véronique Grué
                 * @since 10/10/2025
                 * Inicializar variables de los distintos tipos de datos básicos (string, int, float, bool) 
                 * y mostrar los datos por pantalla (echo, print, printf, print_r, var_dump) .
                 */
                //Declaración de variables
                $nombre = 'Ana'; //String
                $edad = 35; //int
                $altura = 1.70; //float
                $esEstudiante = true; //boolean
                //Impresión utilizando echo
                echo "<h3>Impresión utiliando echo : </h3>";
                echo 'La variable <span style="color:blue"> $nombre </span> es de tipo <span style="color:blue">' . gettype($nombre) . '</span> y su valor es <span style="color:blue">' . $nombre . '</span><br>';
                echo 'La variable <span style="color:blue"> $edad </span> es de tipo <span style="color:blue">' . gettype($edad) . '</span> y su valor es <span style="color:blue">' . $edad . '</span><br>';
                echo 'La variable <span style="color:blue"> $altura </span> es de tipo <span style="color:blue">' . gettype($altura) . '</span> y su valor es <span style="color:blue">' . $altura . 'm </span><br>';
                echo 'La variable <span style="color:blue"> $esEstudiante </span> es de tipo <span style="color:blue">' . gettype($esEstudiante) . '</span> y su valor es <span style="color:blue">' . ($esEstudiante ? 'true' : 'false') . '</span><br><br>';

                //Impresión utilizando print
                print("<h3>Impresión utiliando print : </h3>");
                print('La variable <span style="color:blue"> $nombre </span> es de tipo  <span style="color:blue">' . gettype($nombre) . '</span> y su valor es <span style="color:blue">' . $nombre . '</span><br>');
                print('La variable <span style="color:blue"> $edad </span> es de tipo  <span style="color:blue">' . gettype($edad) . '</span>  y su valor es <span style="color:blue">' . $edad . '</span><br>');
                print('La variable <span style="color:blue"> $altura </span> es de tipo  <span style="color:blue">' . gettype($altura) . '</span> y su valor es <span style="color:blue">' . number_format($altura, 2, ',', '') . 'm </span><br>');
                //number_format(float $number,int $decimals = 0, ?string $decimal_separator = ".",?string $thousands_separator = ","): string
                print('La variable <span style="color:blue"> $esEstudiante </span> es de tipo  <span style="color:blue">' . gettype($esEstudiante) . '</span>  y su valor es <span style="color:blue">' . ($esEstudiante ? 'true' : 'false') . '</span><br><br>');

                //Impresión utilizando printf: para formatear la salida
                printf("<h3>Impresión utiliando printf : </h3>");
                printf('La variable <span style="color:blue"> $nombre </span> es de tipo <span style="color:blue"> %s </span> y su valor es <span style="color:blue"> %s </span><br>', gettype($nombre), $nombre); //%s = string, %d = entero, %.2f = float con 2 decimales
                printf('La variable <span style="color:blue"> $edad </span> es de tipo <span style="color:blue"> %s </span> y su valor es <span style="color:blue"> %d </span><br>', gettype($edad), $edad); //%s = string, %d = entero, %.2f = float con 2 decimales
                printf('La variable <span style="color:blue"> $altura </span> es de tipo <span style="color:blue"> %s </span> y su valor es <span style="color:blue"> %.2fm </span><br>', gettype($altura), $altura); //%s = string, %d = entero, %.2f = float con 2 decimales
                printf('La variable <span style="color:blue"> $esEstudiante </span> es de tipo <span style="color:blue"> %s </span> y su valor es <span style="color:blue"> %s </span><br><br>', '<span style="color:blue">' . gettype($esEstudiante) . "</span>", '<span style="color:blue">' . ($esEstudiante ? 'true' : 'false') . '</span>'); //%s = string, %d = entero, %.2f = float con 2 decimales
                //Impresión utilizando print_r
                print_r("<h3>Impresión utiliando print_r : </h3>");
                print_r('La variable <span style="color:blue"> $nombre </span> es de tipo ' . '<span style="color:blue">' . gettype($nombre) . '</span> y su valor es <span style="color:blue">' . $nombre . '</span><br>');
                print_r('La variable <span style="color:blue"> $edad </span> es de tipo ' . '<span style="color:blue">' . gettype($edad) . '</span> y su valor es <span style="color:blue">' . $edad . '</span><br>');
                print_r('La variable <span style="color:blue"> $altura </span> es de tipo ' . '<span style="color:blue">' . gettype($altura) . '</span> y su valor es <span style="color:blue">' . $altura . 'm </span><br>');
                print_r('La variable <span style="color:blue"> $esEstudiante </span> es de tipo ' . '<span style="color:blue">' . gettype($esEstudiante) . '</span> y su valor es <span style="color:blue">' . ($esEstudiante ? 'true' : 'false') . '</span><br><br>');

                //Impresión utilizando var_dump. Función pensada para depurar
                var_dump("<h3>Impresión utiliando var_dump: </h3>");
                var_dump('La variable <span style="color:blue"> $nombre </span> es de tipo ' . '<span style="color:blue">' . gettype($nombre) . '</span> y su valor es <span style="color:blue">' . $nombre . '</span><br>');
                var_dump('La variable <span style="color:blue"> $edad </span> es de tipo ' . '<span style="color:blue">' . gettype($edad) . '</span> y su valor es <span style="color:blue">' . $edad . '</span><br>');
                var_dump('La variable <span style="color:blue"> $altura </span> es de tipo ' . '<span style="color:blue">' . gettype($altura) . '</span> y su valor es <span style="color:blue">' . $altura . 'm </span><br>');
                var_dump('La variable <span style="color:blue"> $esEstudiante </span> es de tipo ' . '<span style="color:blue">' . gettype($esEstudiante) . '</span> y su valor es <span style="color:blue">' . ($esEstudiante ? 'true' : 'false') . '</span><br><br>');
                ?>
            </section>


        </main>
        <footer class="footer">
            <div class="footerContent">
                <div><p class="copyright">
                        2025-26 IES LOS SAUCES. &#169;Todos los derechos reservados.</p> <address><a href="../indexProyectoTema3.php">Véronique Grué.</a> Fecha de Actualización :
                        <time datetime="2025-10-10"></time>10-10-2025 </address>
                </div>

            </div>

        </footer>

    </body>
</html>

