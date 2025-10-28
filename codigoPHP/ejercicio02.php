<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Véro Grué - ProyectoTema3 Ejercicio02</title>
        <link rel="stylesheet" href="../webroot/css/styleEjercicios.css">
    </head>
    <body>
        <header class="header">
            <h1>Ejercicio 02</h1>
        </header>
        <main>
            <section>
                <?php
                /**
                 * @author Véronique Grué
                 * @date 09/10/2025
                 * 	Inicializar y mostrar una variable heredoc.
                 *      */
                //Un heredoc en PHP es una forma especial de escribir cadenas multilínea 
                //sin necesidad de concatenar ni escapar comillas.
                //Estos saltos se ven en la consola PHP, pero no en html.
                echo("<h3>Mostrar una variable Heredoc</h3><br>");
                echo('<h4>Con [echo "$mensaje"] se muestra el texto en una linea si no se utiliza <br> </h4>');
                $nombre = "David";
                $mensaje = <<<CADENA
           Buenos días $nombre,
           Este es un mensaje 
           de prueba de cadena heredoc.
           Permite escribir un texto o cadenas
           en varias lineas.
           Pero solo sirve 
           en la consola de PHP.
           No se ven los saltos de lineas 
           en HTML.
           CADENA;
                //Se utiliza este tipo de variable para escribir las secuencias sql
                echo "$mensaje <br><br>";
                //Para que se vean los saltos de linea en html
                echo('<h4>Con [echo "&lt;pre&gt;$mensaje&lt;/pre&gt;"] se muestra el texto con los saltos de linea como se vería en la consola de PHP.<br> </h4>');
                echo "<pre>$mensaje</pre>";
                ?>
            </section>


        </main>
        <footer class="footer">
            <div class="footerContent">
                <div><p class="copyright">
                        2025-26 IES LOS SAUCES. &#169;Todos los derechos reservados.</p> <address><a href="../indexProyectoTema3.php">Véronique Grué.</a> Fecha de Actualización :
                        <time datetime="2025-10-09"></time> 09-10-2025 </address>
                    </div>

            </div>

        </footer>

    </body>
</html>

