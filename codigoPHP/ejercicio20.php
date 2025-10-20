<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Véro Grué - ProyectoTema3 Ejercicio03</title>
    <link rel="stylesheet" href="../webroot/css/styleEjercicios.css">
    <style>
        div{
            font-size: 20px;
        }
        h3{
            font-size: 30px;
        }
        h4{
            font-size: 25px;
        }
      
    </style>
</head>
<body>
    <header class="header">
         <a href="../indexProyectoTema3.php">volver</a>
        <h1>Ejercicio 03</h1>
    </header>
    <main>
        <section>
            <?php 
            /**
                 * @author Véronique Grué
                 * @version 1.0
                 * @date 2025-10-20 
                 * 
                 *
                 * Ejercicio 20
                 * * Mostrar el contenido de las variables superglobales
                 */
            //enlace a la libreria
            require '../core/libreriaValidacion.php'; 
            /** @var string $cadena contraseña que tiene que ser alfanumerica. */
            $email;
            /** @var boolean $obligatorio bolean para el campo obligatorio. */
            $obligatorio=0; //el email no es obligatorio
            
            echo'<h3>Utilización de una función de validación</h3>';
            echo'<h4>Función de validación de email</h4>';
            echo '<div>';
            $email='email.hotmail.com';
            echo'<br>Email introducido : '.$email;
            echo '<br>'.validacionFormularios::validarEmail($email,$obligatorio);
             $email='email@hotmail.com';
            echo'<br><br>Email introducida : '.$email;
            echo '<br>'.validacionFormularios::validarEmail($email,$obligatorio);
            echo '</div>';    
            
    ?>
        </section>
        
    
    </main>
    <footer class="footer">
      <div class="footerContent">
            <div><p class="copyright">
            2025-26 IES LOS SAUCES. &#169;Todos los derechos reservados.</p> <address><a href="../../VGDWESProyectoDWES/indexProyectoDWES.html">Véronique Grué.</a> Fecha de Actualización :
                <time datetime="2025-10-02"></time> 02-10-2025 </address>
          </div>
            
          </div>
          
    </footer>
    
</body>
</html>

