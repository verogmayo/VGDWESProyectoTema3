<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Véro Grué - ProyectoTema3 Ejercicio15</title>
        <link rel="stylesheet" href="../webroot/css/styleEjercicios.css">
    </head>
    <body>
        <header class="header">
            <h1>Ejercicio 15</h1>
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
                 * Ejercicio 15
                 * * Crear e inicializar un array con el sueldo percibido de lunes a domingo. 
                 * Recorrer el array para calcular el sueldo percibido durante la semana.
                 * (Array asociativo con los nombres de los días de la semana)
                 */
                //Creación e inicialización de un array con los sueldos de lunes a domingo
                /** @var Array $aSalarioXDia Array del salrario de todos los dias de la semana. */
                $aSalarioXDia = [
                    'Lunes' => random_int(80, 160),
                    'Martes' => random_int(80, 160),
                    'Miercoles' => random_int(80, 160),
                    'Jueves' => random_int(80, 160),
                    'Viernes' => random_int(80, 160),
                    'Sabado' => random_int(80, 160),
                    'Domingo' => random_int(80, 160)
                ];
                $totalHorasSemana = 0;

                echo'<h3>Horas trabajadas a lo largo de la semana.</h3><br>';
                foreach ($aSalarioXDia as $dia => $salarioDia) {
                    echo"$dia : $salarioDia horas<br>";
                }
            
                foreach ($aSalarioXDia as $salarioDia) {
                    // $totalHorasSemana = $salarioDia+$totalHorasSemana;
                    $totalHorasSemana += $salarioDia;
                }
                echo'<br><h3>El total del salario semanal es: ' . $totalHorasSemana . " horas</h3><br>";
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

