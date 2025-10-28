<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Véro Grué - ProyectoTema3 Ejercicio16</title>
        <link rel="stylesheet" href="../webroot/css/styleEjercicios.css">
    </head>
    <body>
        <header class="header">
            <h1>Ejercicio 16</h1>
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
                 * Ejercicio 16
                 * * Recorrer el array anterior utilizando funciones para obtener el mismo resultado
                 */
                //Creación e inicialización de un array con los sueldos de lunes a domingo
                /** @var Array $aSalarioXDia Array del salrario de todos los dias de la semana. */
                $asalarioXDia = array(
                    'Lunes' => 100,
                    'Martes' => 150,
                    'Miercoles' => 80,
                    'Jueves' => 90,
                    'Viernes' => 120,
                    'Sabado' => 110,
                    'Domingo' => 160
                );


            // Función para calcular el total de la semana.

                /**
                 * Calcula la suma de los valores del array de salarios.
                 * @param $aSalarioXDia El array con los salarios por día.
                 * @return El total del salario semanal.
                 */
                function totalSalarioSemanal( $aSalarioXDia) {
                    $total = 0; // Se inicializa el total dentro de la función
                    foreach ($aSalarioXDia as $salarioDia) {
                        $total += $salarioDia; // Se puede usar $total += $salarioDia o la función array_sum()
                    }
                    return $total;//retorna el ttotal
                }

            // Funciónm para mostrar el salario por día

                /**
                 * Muestra el contenido del array (día y salario).
                 * @param $aSalarioXDia El array con los salarios por día.
                 * 
                 */
                function salarioXDia($aSalarioXDia) {
                    foreach ($aSalarioXDia as $dia => $salarioDia) {
                        echo "$dia : $salarioDia horas<br>";
                    }
                    // No se necesita return, solo imprime)
                }

            // Se llama a las funciones
         
                echo '<h3>Detalle del Salario por Día</h3>';
                echo 'Recorrido del Array con funciones<br><br>';
                salarioXDia($asalarioXDia);
                
                $resultadoTotal = totalSalarioSemanal($asalarioXDia);

                echo '<br><h3>El total del salario semanal es: ' . $resultadoTotal . " horas</h3><br>";


            //https://www.php.net/manual/es/function.array-sum.php
            // Si solo quieres la suma, puedes usar array_sum:
            $resultadoTotalFN = array_sum($asalarioXDia);
            echo '<br><br><h3>Calculo de la suma, utilizando array_sum :</h3>';
            echo '<h3>El total del salario semanal es: ' . $resultadoTotalFN . " horas</h3><br>";
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

