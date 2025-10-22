 <?php 
     /**
    * Nombre: Véronique Grué
     * Fecha : 09/10/2025
     * 
     *      */
    //Un heredoc en PHP es una forma especial de escribir cadenas multilínea 
    //sin necesidad de concatenar ni escapar comillas.
 // Solo sirve 
    echo("<h3>Mostrar una variable Heredoc</h3><br>");
   $nombre = "David";
   $mensaje =<<<CADENA
           Buenos días $nombre,
           Este es un mensaje 
           de prueba de cadena heredoc.
           Permite escribir un texto o cadenas
           en varias lineas.
           Pero solo sirve 
           en la consola de PHP.
           No se ven los saltos de lineas 
           en HTML.
           CADENA;
    //Se utiliza este tipo de variable para escribir las secuencias sql
   echo "$mensaje";
    
    ?>