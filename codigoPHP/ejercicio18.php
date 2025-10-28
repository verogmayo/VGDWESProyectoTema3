<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Véro Grué - ProyectoTema3 Ejercicio18</title>
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
                width: 60px;
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
            <h1>Ejercicio 18</h1>
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
                //  Inicializar array vacio
                /** @var int $filas Numero de filas del teatro. */
                $filas = 20;
                /** @var int $asientosXFila Numero de asientos por filas. */
                $asientosXFila = 15;

                /**
                 * Crea el array de los asientos del teatro en funcion del nombre de filas y de asientos por filas
                 * @param $asientosXFila numero de asientos por fila
                 * @param $filas numero de filas.
                 * 
                 */
                function crearArrayAsientos($filas, $asientosXFila) {
                    /** @var Array $aAsientosTeatro Filas y columnas del teatro. */
                    $aAsientosTeatro = []; //ahy que definir la variable
                    for ($f = 1; $f <= $filas; $f++) {
                        $aAsientosTeatro[$f] = [];
                        for ($a = 1; $a <= $asientosXFila; $a++) {
                            $aAsientosTeatro[$f][$a] = '';
                        }
                    }
                    return $aAsientosTeatro;
                }

                //se asigna el valor de asientosTeatro con la funcion.
                $aAsientosTeatro = crearArrayAsientos($filas, $asientosXFila);

                // Los 5 asientos ocupados
                $aAsientosTeatro[1][3] = 'Ana';       // Fila 1, Asiento 3
                $aAsientosTeatro[2][1] = 'Juan';       // Fila 2, Asiento 1
                $aAsientosTeatro[6][15] = 'Laura';      // Fila 6, Asiento 15
                $aAsientosTeatro[20][8] = 'Carlos';     // Fila 20, Asiento 8
                $aAsientosTeatro[11][6] = 'Marta';      // Fila 11, Asiento 6



                echo "<h2>Mapa del Teatro (Asientos Libres(verde) y Ocupados(rojo))</h2>";

                // Recorrido con for para crear los divs

                /**
                 * Crea los divs para la representación de los asientos del teatro en funcion del nombre de filas y de asientos por filas
                 * @param $asientosXFila numero de asientos por fila
                 * @param $filas numero de filas.
                 * @param $aAsientosTeatro de asientos totales del teatro.
                 * 
                 */
                function crearDivs($aAsientosTeatro, $filas, $asientosXFila) {
                   echo '<div class="planoAsientos">';
                echo '<div class="cabeceraAsientos">';
                foreach ($aAsientosTeatro[1] as $indiceAsiento => $nombre) {
                    echo "<div class='numAsiento'>Asiento {$indiceAsiento}</div>";
                }
                echo '</div>';
                for ($f = 1; $f <= $filas; $f++) {//se puede empezar en la fila que se quiera en este caso el 1.
                    echo '<div class="fila">'; // Inicio de la fila
                    echo "<div class='nombreFila'>Fila {$f}</div>";
                    for ($a = 1; $a <= $asientosXFila; $a++) {//se puede empezar en el asiento que se quiera en este caso  el 1

                        $nombre = $aAsientosTeatro[$f][$a];
                        // Estado y contenido del asiento
                        if (!empty($nombre)) {
                            // ocupado
                            $clase = 'ocupado';
                            $textoAsiento = $nombre;
                        } else {
                            // libre
                            $clase = 'libre';
                            $textoAsiento = 'F' . $f . ' A' . $a;
                        }

                        echo "<div class='asiento $clase' title='Fila {$f}, Asiento {$a}'>";
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
                echo '</div>';
                }

                

                //creamos los divs con la funcion
                crearDivs($aAsientosTeatro, $filas, $asientosXFila);

                /**
                 * Crea el array de los asientos del teatro en funcion del nombre de filas y de asientos por filas
                 * @param $asientosXFila numero de asientos por fila
                 * @param $filas numero de filas.
                 * 
                 */
                //se asigna el valor de asientosTeatro con la funcion.
                $aAsientosTeatro = crearArrayAsientos($filas, $asientosXFila);

                // Los 5 asientos ocupados
                $aAsientosTeatro[1][3] = 'Ana';       // Fila 1, Asiento 3
                $aAsientosTeatro[2][1] = 'Juan';       // Fila 2, Asiento 1
                $aAsientosTeatro[6][15] = 'Laura';      // Fila 6, Asiento 15
                $aAsientosTeatro[20][8] = 'Carlos';     // Fila 20, Asiento 8
                $aAsientosTeatro[11][6] = 'Marta';      // Fila 11, Asiento 6



                echo "<h2>Mapa del Teatro (Asientos Libres(verde) y Ocupados(rojo))</h2><br>";

                // Recorrido con for para crear los divs

                /**
                 * Crea los divs para la representación de los asientos del teatro en funcion del nombre de filas y de asientos por filas
                 * @param $asientosXFila numero de asientos por fila
                 * @param $filas numero de filas.
                 * @param $aAsientosTeatro de asientos totales del teatro.
                 * 
                 */
                function crearDivsForEach($aAsientosTeatro, $fila, $asientosXFila) {
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
                        // Estado y contenido del asiento
                        if (!empty($nombre)) {
                            // Ocupado
                            $clase = 'ocupado';
                            $textoAsiento = $nombre;
                        } else {
                            // Libre
                            $clase = 'libre';
                            $textoAsiento = "F{$indiceFila} A{$indiceAsiento}";
                        }
                        echo "<div class='asiento $clase' title='Fila {$indiceFila}, Asiento {$indiceAsiento}'>";
                        echo $textoAsiento;
                        echo '</div>';
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
                }

                //creamos los divs con la funcion
                crearDivs($aAsientosTeatro, $filas, $asientosXFila);
                ?>
            </section>


        </main>
        <footer class="footer">
            <div class="footerContent">
                <div><p class="copyright">
                        2025-26 IES LOS SAUCES. &#169;Todos los derechos reservados.</p> <address><a href="../indexProyectoTema3.php">Véronique Grué.</a> Fecha de Actualización :
                        <time datetime="2025-10-16"></time> 16-10-2025 </address>
                </div>

            </div>

        </footer>

    </body>
</html>

