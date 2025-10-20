<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Véro Grué - ProyectoTema3 Tratamiento.php</title>
    <link rel="stylesheet" href="../webroot/css/styleEjercicios.css">
</head>
<body>
    <header class="header">
        <h1>Tratamiento.php</h1>
    </header>
    <main>
        <section>
            <div>
                
            </div>
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
            echo '<h3>Respuestas al formulario</h3><br>';
            echo"Nombre completo: {$_REQUEST['nombre']}<br>";
            echo"Edad: {$_REQUEST['edad']}<br>";
             echo"Carnet?: ";
             if (isset($_REQUEST['boolean'])) {
            echo("Sí");
                }else{
                    echo 'No';
                }
            
   
    ?>
        </section>
        
    
    </main>
    <footer class="footer">
      <div class="footerContent">
            <div><p class="copyright">
            2025-26 IES LOS SAUCES. &#169;Todos los derechos reservados.</p> <address><a href="../indexProyectoTema3.php">Véronique Grué.</a> Fecha de Actualización :
                <time datetime="2025-10-02"></time> 02-10-2025 </address>
          </p></div>
            
          </div>
          
    </footer>
    
</body>
</html>
