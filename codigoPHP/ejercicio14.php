<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Véro Grué - ProyectoTema3 Ejercicio14</title>
        <link rel="stylesheet" href="../webroot/css/styleEjercicios.css">
    </head>
    <body>
        <header class="header">
            <h1>Ejercicio 14</h1>
        </header>
        <main>
            <section>
                <?php
                require_once 'miLibreria.php'; //para inclir la libreria miLibreria.php
                require_once 'miLibreriaStatic.php'; //para inclir la libreria miLibreriaStatic.php

                $a = random_int(0, 100);
                $b = random_int(0, 100);
                echo "<h3>Prueba con miLibreria (funciones normales)</h3>";

                echo "Suma: " . sumar($a, $b) . "<br>";
                echo "Resta: " . restar($a, $b) . "<br>";

                echo "<h3><br>Prueba con miLibreriaStatic (funciones estáticas)</h3>";

                echo "Suma: " . MiLibreriaStatic::sumar($a, $b) . "<br>";
                echo "Resta: " . MiLibreriaStatic::restar($a, $b) . "<br>";
                ?>
            </section>
            <!-- Cuándo usar funciones normales
                - El código es pequeño o temporal (ejercicios, scripts, tests).
                - Las funciones no dependen unas de otras ni comparten estado.
                - No hay necesidad de “agruparlas” en una misma entidad. -->
            
            <!-- Cuándo usar funciones estáticas
                - Quieres organizar funciones relacionadas (misma temática o dominio).
                - Estás haciendo un proyecto grande o modular, con varias librerías.
                - Quieres reutilizar código en varios sitios sin duplicar funciones.
                - No necesitas crear un objeto, pero sí agrupar lógica. -->
        </main>
        <footer class="footer">
            <div class="footerContent">
                <div><p class="copyright">
                        2025-26 IES LOS SAUCES. &#169;Todos los derechos reservados.</p> <address><a href="../indexProyectoTema3.php">Véronique Grué.</a> Fecha de Actualización :
                        <time datetime="2025-10-19"></time> 19-10-2025 </address>
                    </p></div>

            </div>

        </footer>

    </body>
</html>

