<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Véro Grué - ProyectoTema3 Ejercicio 17</title>
        <link rel="stylesheet" href="../webroot/css/styleEjercicios.css">
        <style>
            
            .planoAsientos {
                display: flex;
                flex-direction: column;
                margin-bottom: 20px;
            }
            .fila {
                display: flex;
                margin-bottom: 5px;
            }
            .asiento {
                width: 45px;
                height: 45px;
                margin: 2px;
                border: 1px solid #ccc;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 12px;
                font-weight: bold;
                position: relative;
            }
            .ocupado {
                background-color: red;
                color: white;
                border-color: black;
            }
            .libre {
                background-color:limegreen;
                color: white;
                border-color: black;
            }
            .nombreFila{
                width: 70px;
                height: 45px;
                font-weight: 700;
                line-height: 45px;
                padding-right: 5px;
                padding-left: 10px;
                background-color: gray;
                color:white;
                margin: 2px
            }
             .cabeceraAsientos, .pieAsientos{
                display: flex;
                color: white;
                text-align: center;
            }
            .numAsiento{
                width: 45px;
                height: 45px;
                margin: 2px;
                background-color: gray;
                align-items: center;
                padding-top:  5px;
                font-size: 12px;
                font-weight: bold;

            }


        </style>
    </head>
    <body>
        <header class="header">
            <a href="../indexProyectoTema3.php">volver</a>
            <h1>Ejercicio 17</h1>
        </header>
        <main>
            <section>
                <?php
                /**
                 * @author Véronique Grué
                 * @version 1.0
                 * @date 2025-10-27 
                 * 
                 *
                 * Ejercicio 18
                 * * Recorrer el array anterior utilizando funciones para obtener el mismo resultado.
                 */
                /** @const int NUMFILAS Numero de filas del teatro. */
                define('NUMFILAS', 20);
                /** @const int NUMASIENTOXFILAS Numero de asientos por filas. */
                define('NUMASIENTOXFILAS', 15);

                //  Inicializar array vacio
                for ($f = 1; $f <= NUMFILAS; $f++) {
                    $aAsientosTeatro[$f] = [];
                    for ($a = 1; $a <= NUMASIENTOXFILAS; $a++) {
                        $aAsientosTeatro[$f][$a] = '';//es mejor poner '' que null
                    }
                }

                // Los 5 asientos ocupados
                $aAsientosTeatro[1][3] = 'Ana';       // Fila 1, Asiento 3
                $aAsientosTeatro[2][1] = 'Juan';       // Fila 2, Asiento 1
                $aAsientosTeatro[6][15] = 'Laura';      // Fila 6, Asiento 15
                $aAsientosTeatro[20][8] = 'Carlos';     // Fila 20, Asiento 8
                $aAsientosTeatro[11][6] = 'Marta';      // Fila 11, Asiento 6
                

                
                
                
                //Mapa del teatro con foreach -------------------------------

                echo "<h2>Mapa del Teatro con FOREACH (Asientos Libres y Ocupados)</h2>";

                // Recorrido con for para crear los divs
                echo '<div class="planoAsientos">';

                echo '<div class="cabeceraAsientos">';
                foreach ($aAsientosTeatro[1] as $indiceAsiento => $nombre) {
                    echo "<div class='numAsiento'>Asiento {$indiceAsiento}</div>";
                }
                echo '</div>';

                foreach ($aAsientosTeatro as $indiceFila => $filaActual) {
                    echo '<div class="fila">';
                    echo "<div class='nombreFila'>Fila {$indiceFila}</div>";
                    foreach ($filaActual as $indiceAsiento => $nombre) {
                        // Se dibujan los asientos en función del estado y contenido del asiento
                        echo "<div class='asiento". (!empty($nombre)? ' ocupado' : ' libre'). "'>".
                               (!empty($nombre) ? $nombre : "F{$f} A{$a}").
                         "</div>";
                    }
                    echo "<div class='nombreFila'>Fila {$indiceFila}</div>";

                    echo '</div>';
                }
                echo '<div class="pieAsientos">';
                foreach ($aAsientosTeatro[1] as $indiceAsiento => $nombre) {
                    echo "<div class='numAsiento'>Asiento {$indiceAsiento}</div>";
                }
                echo '</div>';

                echo '</div>';

                
                
                
                //Mapa del teatro con While y las funciones para recorrer una array-------------------------------

                echo "<h2><br><br>Mapa del Teatro con WHILE Y LAS FUNCIONES PARA RECORRER UN ARRAY (Asientos Libres y Ocupados)</h2>";

                echo '<div class="planoAsientos">';

                // Cabecera
                echo '<div class="cabeceraAsientos">';
                reset($aAsientosTeatro[1]);
                while (($nombre = current($aAsientosTeatro[1])) !== false) {//mientras  haya una asiento en la fila 1
                    $indiceAsiento = key($aAsientosTeatro[1]);
                    echo "<div class='numAsiento'>Asiento {$indiceAsiento}</div>";
                    next($aAsientosTeatro[1]); //pas a al asiento siguiente.
                }
                echo '</div>';

                // Filas
                reset($aAsientosTeatro);
                while (($filaActual = current($aAsientosTeatro)) !== false) {
                    $indiceFila = key($aAsientosTeatro);

                    echo '<div class="fila">';
                    echo "<div class='nombreFila'>Fila {$indiceFila}</div>";

                    reset($filaActual); //se situa el puntero al comienzo del array
                    while (($nombre = current($filaActual)) !== false) {
                        $indiceAsiento = key($filaActual);

                       
                        // Se dibujan los asientos en función del estado y contenido del asiento
                        echo "<div class='asiento". (!empty($nombre)? ' ocupado' : ' libre'). "'>".
                               (!empty($nombre) ? $nombre : "F{$indiceFila} A{$indiceAsiento}").
                         "</div>";

                        next($filaActual);
                    }
                    echo "<div class='nombreFila'>Fila {$indiceFila}</div>";
                    echo '</div>';

                    next($aAsientosTeatro);
                }

                echo '<div class="pieAsientos">';
                reset($aAsientosTeatro[1]);
                while (($nombre = current($aAsientosTeatro[1])) !== false) {
                    $indiceAsiento = key($aAsientosTeatro[1]);
                    echo "<div class='numAsiento'>Asiento {$indiceAsiento}</div>";
                    next($aAsientosTeatro[1]);
                }
                echo '</div>';

                echo '</div>';
                
                
                
                //Mapa del teatro con 2 for---------------
                echo "<h2>Mapa del Teatro con FOR (Asientos Libres y Ocupados)</h2>";

                // Recorrido con for para crear los divs
                echo '<div class="planoAsientos">';
                echo '<div class="cabeceraAsientos">';
                foreach ($aAsientosTeatro[1] as $indiceAsiento => $nombre) {
                    echo "<div class='numAsiento'>Asiento {$indiceAsiento}</div>";
                }
                echo '</div>';
                for ($f = 1; $f <= NUMFILAS; $f++) {
                    echo '<div class="fila">'; // Inicio de la fila
                    echo "<div class='nombreFila'>Fila {$f}</div>";
                    for ($a = 1; $a <= NUMASIENTOXFILAS; $a++) {

                        $nombre = $aAsientosTeatro[$f][$a];
                        // Se dibujan los asientos en función del estado y contenido del asiento
                        echo "<div class='asiento". (!empty($nombre)? ' ocupado' : ' libre'). "'>".
                               (!empty($nombre) ? $nombre : "F{$f} A{$a}").
                         "</div>";
                    }
                    echo "<div class='nombreFila'>Fila {$f}</div>";
                    echo '</div>';
                }
                echo '<div class="cabeceraAsientos">';
                foreach ($aAsientosTeatro[1] as $indiceAsiento => $nombre) {
                    $asiento = $indiceAsiento;
                    echo "<div class='numAsiento'>Asiento {$asiento}</div>";
                }
                echo '</div>';
                echo '</div>';

                
                ?>  

                
<!--                echo "<h2>Mapa del Teatro (Asientos Libres y Ocupados)</h2>";

                // Recorrido con for para crear los divs
                echo '<div class="planoAsientos">';
                echo '<div class="cabeceraAsientos">';
                foreach ($aAsientosTeatro[1] as $indiceAsiento => $nombre) {
                    echo "<div class='numAsiento'>Asiento {$indiceAsiento}</div>";
                }
                echo '</div>';
                for ($f = 1; $f <= NUMFILAS; $f++) {
                    echo '<div class="fila">'; // Inicio de la fila
                    echo "<div class='nombreFila'>Fila {$f}</div>";
                    for ($a = 1; $a <= NUMASIENTOXFILAS; $a++) {

                        $nombre = $aAsientosTeatro[$f][$a];
                        // Estado y contenido del asiento
                        if (!empty($nombre)) {
                            $clase = 'ocupado';
                            $textoAsiento = $nombre;
                        } else {
                            $clase = 'libre';
                            $textoAsiento = 'F' . $f . ' A' . $a;
                        }

                        echo "<div class='asiento $clase' >";
                        echo $textoAsiento;
                        echo '</div>';
                    }
                    echo "<div class='nombreFila'>Fila {$f}</div>";
                    echo '</div>';
                }
                echo '<div class="cabeceraAsientos">';
                foreach ($aAsientosTeatro[1] as $indiceAsiento => $nombre) {
                    $asiento = $indiceAsiento;
                    echo "<div class='numAsiento'>Asiento {$asiento}</div>";
                }
                echo '</div>';
                echo '</div>';-->

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

