<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Véro Grué - ProyectoTema3 Ejercicio08</title>
        <link rel="stylesheet" href="../webroot/css/styleEjercicios.css">
        <style>
            .parafo{
                font-size: 18px;
            }
            
        </style>
    </head>
    <body>
        <header class="header">
            <h1>Ejercicio 08</h1>
        </header>
        <main>
            <section>
                <?php
                /**
                 * @author:  Véronique Grué
                 * @since 13/10/2025
                 * 
                 */
                // Mostrar la dirección IP.     

                echo '<p class="parafo">Dirección IP del servidor: ' . $_SERVER['SERVER_ADDR'].'</p>';
                //https://www.php.net/manual/es/reserved.variables.server.php
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

