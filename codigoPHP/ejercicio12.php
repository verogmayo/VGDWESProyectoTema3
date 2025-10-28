<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Véro Grué - ProyectoTema3 Ejercicio12</title>
        <link rel="stylesheet" href="../webroot/css/styleEjercicios.css">
    </head>
    <body>
        <header class="header">
            <h1>Ejercicio 12</h1>
        </header>
        <main>
            <section>
                <?php
                /**
                 * @author Véronique Grué
                 * @version 1.0
                 * @date 2025-10-13 
                 * 
                 *
                 * Ejercicio 12
                 * * Mostrar el contenido de las variables superglobales
                 */
               

                session_start(); // Se debe ejecutar antes de llamarla, y tiene que estar antes de cualquier etiqueta de html
                //Estilos para la tabla---------------------------------
                echo' 
                <style>
                section{
                width:80%;
                margin-left:0;
                padding-right 50px;
                }                
                table {
                    border-collapse: collapse;
                    width: 80%;
                    border: 2px solid black; 
                    background-color: #f9f9f9; 
                    font-family: Arial, sans-serif;
                }
                th, td {
                    border: 1px solid black;
                    padding-left: 8px;
                    
                    
                }
                th {
                    background-color: #9999cc; 
                    padding: 8px;
                    text-align: center;
                    
                }
                td:nth-child(even) {
                    background-color: #DDDDDD; 
                    font-family: Arial, Helvetica, sans-serif;
                    font-size: 12px;
                    font-weight: 400;
                    margin-right:50px;
                }
                 td:nth-child(odd) {
                    font-family: Arial, Helvetica, sans-serif;
                    font-size: 12px;
                    font-weight: 700;
                }
                                
                </style>';

                //Contenido de la variable $_SERVER-----------------------------------------------
                echo '<h3>Contenido de la variable $_SERVER</h3><br>';
                echo '<table >';
                echo '<tr><th>Variable</th><th>Valor</th></tr>';
                if (!empty($_SERVER)) {
                    foreach ($_SERVER as $variable => $resultado) {
                        echo "<tr>";
                        echo '<td>$_SERVER[' . $variable . ']</td>';
                        echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'><em>La variable \$_SESSION está vacía.</em></td></tr>";
                }
                echo "</table>";

                //Contenido de la variable $_GET-------------------------------------
                echo '<br><br><h3>Contenido de la variable $_GET</h3><br>';
                echo '<table >';
                echo '<tr><th>Variable</th><th>Valor</th></tr>';
                if (!empty($_GET)) {
                    foreach ($_GET as $variable => $resultado) {
                        echo "<tr>";
                        echo '<td>$_GET[' . $variable . ']</td>';
                        echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                        echo "</tr><br><br>";
                    }
                } else {
                    echo "<tr><td colspan='2'><em>La variable \$_SESSION está vacía.</em></td></tr>";
                }
                echo "</table>";

                //Contenido de la variable $_POST-----------------------------------------
                echo '<br><br><h3>Contenido de la variable $_POST</h3><br>';
                echo '<table >';
                echo '<tr><th>Variable</th><th>Valor</th></tr>';
                if (!empty($_POST)) {
                    foreach ($_POST as $variable => $resultado) {
                        echo "<tr>";
                        echo '<td>$_POST[' . $variable . ']</td>';
                        echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'><em>La variable \$_SESSION está vacía.</em></td></tr>";
                }
                echo "</table>";

                //Contenido de la variable $_FILES-------------------------------------------
                echo '<br><br><h3>Contenido de la variable $_FILES</h3><br>';
                echo '<table >';
                echo '<tr><th>Variable</th><th>Valor</th></tr>';
                if (!empty($_FILES)) {
                    foreach ($_FILES as $variable => $resultado) {
                        echo "<tr>";
                        echo '<td>$_FILES[' . $variable . ']</td>';
                        echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'><em>La variable \$_SESSION está vacía.</em></td></tr>";
                }
                echo "</table>";

                //Contenido de la variable $_COOKIE---------------------------------------------------
                echo '<br><br><h3>Contenido de la variable $_COOKIE</h3><br>';
                echo '<table >';
                echo '<tr><th>Variable</th><th>Valor</th></tr>';
                if (!empty($_COOKIE)) {
                    foreach ($_COOKIE as $variable => $resultado) {
                        echo "<tr>";
                        echo '<td>$_COOKIE[' . $variable . ']</td>';
                        echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'><em>La variable \$_SESSION está vacía.</em></td></tr>";
                }
                echo "</table>";

                //Contenido de la variable $_SESSION-------------------------------------------------------
                echo '<br><br><h3>Contenido de la variable $_SESSION</h3><br>';
                echo '<table >';
                echo '<tr><th>Variable</th><th>Valor</th></tr>';
                if (!empty($_SESSION)) {
                    foreach ($_SESSION as $variable => $resultado) {
                        echo "<tr>";
                        echo '<td>$_SESSION[' . $variable . ']</td>';
                        echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'><em>La variable \$_SESSION está vacía.</em></td></tr>";
                }
                echo "</table>";

                //Contenido de la variable $_REQUEST--------------------------------------------------
                echo '<br><br><h3>Contenido de la variable $_REQUEST</h3><br>';
                echo '<table >';
                echo '<tr><th>Variable</th><th>Valor</th></tr>';
                if (!empty($_REQUEST)) {
                    foreach ($_REQUEST as $variable => $resultado) {
                        echo "<tr>";
                        echo '<td>$_REQUEST[' . $variable . ']</td>';
                        echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                        echo "</tr><br><br>";
                    }
                } else {
                    echo "<tr><td colspan='2'><em>La variable \$_SESSION está vacía.</em></td></tr>";
                }
                echo "</table>";

                //Contenido de la variable $_ENV-----------------------------------------------------
                echo '<br><br><h3>Contenido de la variable $_ENV</h3><br>';
                echo '<table >';
                echo '<tr><th>Variable</th><th>Valor</th></tr>';
                if (!empty($_ENV)) {
                    foreach ($_ENV as $variable => $resultado) {
                        echo "<tr>";
                        echo '<td>$_ENV[' . $variable . ']</td>';
                        echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'><em>La variable \$_SESSION está vacía.</em></td></tr>";
                }
                echo "</table><br><br>";
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

