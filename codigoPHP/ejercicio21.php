<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Véro Grué - ProyectoTema3 Ejercicio 21</title>
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
                width: 300px;
                display: inline-block;
                padding-left: 5px;
            }
            #edad, #nombre{
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

        </style>
    </head>
    <body>
        <header class="header">
            <h1>Ejercicio 21</h1>
        </header>
        <main>
            

            <!-- // https://www.php.net/manual/es/tutorial.forms.php -->
            <section>
                <h2>Rellena el formulario.</h2>
                <form action="Tratamiento.php" method="post">
                    <label for="nombre">Nombre completo:</label>
                    <input name="nombre" id="nombre" type="text"><br>

                    <label for="edad">Edad:</label>
                    <input name="edad" id="edad" type="number"><br>

                    <label for="carnet">Marca si tienes carnet de conducir:</label>
                    <input type="checkbox" name="boolean" id="carnet"><br>

                    <button type="submit">Enviar</button>
                </form>  
            </section>
            <?php
           /**
             * @author Véronique Grué
             * @version 1.0
             * @date 2025-10-17 
             * 
             *
             * Ejercicio 21
             * * Construir un formulario para recoger un cuestionario realizado a una
             *  persona y enviarlo a una página Tratamiento.php para que muestre las 
             * preguntas y las respuestas recogidas.
             */
            ?>



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

