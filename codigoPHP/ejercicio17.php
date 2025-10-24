<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Véro Grué - ProyectoTema3 Ejercicio 17</title>
        <link rel="stylesheet" href="../webroot/css/styleEjercicios.css">
        <style>
            *{
                box-sizing:border-box;
            }
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
                 * @date 2025-10-16 
                 * 
                 *
                 * Ejercicio 18
                 * * Recorrer el array anterior utilizando funciones para obtener el mismo resultado.
                 */
                /** @const int NUMFILAS Numero de filas del teatro. */
                define('NUMFILAS', 20);
                /** @const int NUMASIENTOXFILAS Numero de asientos por filas. */
                define('NUMASIENTOXFILAS',15);

                //  Inicializar array vacio
                for ($f = 0; $f < NUMFILAS; $f++) {
                    $aAsientosTeatro[$f] = [];
                    for ($a = 0; $a < NUMASIENTOXFILAS; $a++) {
                        $aAsientosTeatro[$f][$a] = '';
                    }
                }

                // Los 5 asientos ocupados
                $aAsientosTeatro[0][2] = 'Ana';       // Fila 1, Asiento 3
                $aAsientosTeatro[1][0] = 'Juan';       // Fila 2, Asiento 1
                $aAsientosTeatro[5][14] = 'Laura';      // Fila 6, Asiento 15
                $aAsientosTeatro[19][7] = 'Carlos';     // Fila 20, Asiento 8
                $aAsientosTeatro[10][5] = 'Marta';      // Fila 11, Asiento 6
                //Mapa del teatro con 2 for---------------

                echo "<h2>Mapa del Teatro (Asientos Libres y Ocupados)</h2>";

                // Recorrido con for para crear los divs
                echo '<div class="planoAsientos">';
                echo '<div class="cabeceraAsientos">';
                foreach ($aAsientosTeatro[0] as $indiceAsiento => $nombre) {
                    $asiento = $indiceAsiento + 1;
                    echo "<div class='numAsiento'>Asiento {$asiento}</div>";
                }
                echo '</div>';
                for ($f = 0; $f < NUMFILAS; $f++) {
                    echo '<div class="fila">'; // Inicio de la fila
                    $fl = $f + 1;
                    echo "<div class='nombreFila'>Fila {$fl}</div>";
                    for ($a = 0; $a < NUMASIENTOXFILAS; $a++) {
                        $fila = $f + 1;
                        $asiento = $a + 1;
                        $nombre = $aAsientosTeatro[$f][$a];
                        // Estado y contenido del asiento
                        if ($nombre !== '') {
                            // ocupado
                            $clase = 'ocupado';
                            $textoAsiento = $nombre;
                        } else {
                            // libre
                            $clase = 'libre';
                            $textoAsiento = 'F' . $fila . ' A' . $asiento;
                        }

                        echo "<div class='asiento $clase' title='Fila {$fila}, Asiento {$asiento}'>";
                        echo $textoAsiento;
                        echo '</div>';
                    }
                    echo "<div class='nombreFila'>Fila {$fl}</div>";
                    echo '</div>';
                }
                echo '<div class="cabeceraAsientos">';
                foreach ($aAsientosTeatro[0] as $indiceAsiento => $nombre) {
                    $asiento = $indiceAsiento + 1;
                    echo "<div class='numAsiento'>Asiento {$asiento}</div>";
                }
                echo '</div>';
                echo '</div>';

                //Mapa del teatro con foreach -------------------------------

                echo "<h2><br><br>Mapa del Teatro con foreach (Asientos Libres y Ocupados)</h2>";

                // Recorrido con for para crear los divs
                echo '<div class="planoAsientos">';

                echo '<div class="cabeceraAsientos">';
                foreach ($aAsientosTeatro[0] as $indiceAsiento => $nombre) {
                    $asiento = $indiceAsiento + 1;
                    echo "<div class='numAsiento'>Asiento {$asiento}</div>";
                }
                echo '</div>';

                foreach ($aAsientosTeatro as $indiceFila => $filaActual) {
                    echo '<div class="fila">';
                    $numeracionFila = $indiceFila + 1;
                    echo "<div class='nombreFila'>Fila {$numeracionFila}</div>";

                    foreach ($filaActual as $indiceAsiento => $nombre) {
                        $fila = $indiceFila + 1;
                        $asiento = $indiceAsiento + 1;

                        // Estado y contenido del asiento
                        if ($nombre !== '') {
                            // Ocupado
                            $clase = 'ocupado';
                            $textoAsiento = $nombre;
                        } else {
                            // Libre
                            $clase = 'libre';
                            $textoAsiento = "F{$fila} A{$asiento}";
                        }

                        echo "<div class='asiento $clase' title='Fila {$fila}, Asiento {$asiento}'>";
                        echo $textoAsiento;
                        echo '</div>';
                    }
                    echo "<div class='nombreFila'>Fila {$numeracionFila}</div>";

                    echo '</div>';
                }
                echo '<div class="pieAsientos">';
                foreach ($aAsientosTeatro[0] as $indiceAsiento => $nombre) {
                    $asiento = $indiceAsiento + 1;
                    echo "<div class='numAsiento'>Asiento {$asiento}</div>";
                }
                echo '</div>';

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

