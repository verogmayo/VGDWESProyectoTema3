# 📚 Ejercicios Prácticos de PHP en el Aula

---

## 💻 1. Conceptos Fundamentales e Información del Entorno

| ID | Descripción de la Práctica | Conceptos Clave |
| :--- | :--- | :--- |
| **0** | **Hola mundo y phpinfo()**. | Configuración del entorno, salida básica. |
| **1** | Inicializar variables de los distintos tipos de datos básicos (`string`, `int`, `float`, `bool`) y mostrar los datos por pantalla. | Tipos de datos, `echo`, `print`, `printf`, `print_r`, `var_dump`. |
| **2** | Inicializar y mostrar una variable `heredoc`. | Cadenas de texto multilínea. |
| **7** | Mostrar el **nombre del fichero** que se está ejecutando. | Constantes mágicas (`__FILE__`). |
| **8** | Mostrar la **dirección IP** del equipo desde el que estás accediendo. | Variables Superglobales (`$_SERVER`). |
| **9** | Mostrar el **path** donde se encuentra el fichero que se está ejecutando. | Constantes mágicas (`__DIR__`). |
| **10** | Mostrar el **contenido del fichero** que se está ejecutando. | Funciones de manejo de archivos (`file_get_contents`). |
| **12** | Mostrar el contenido de las **variables superglobales** (utilizando `print_r()` y `foreach()`). | `$_GET`, `$_POST`, `$_SERVER`, `$_SESSION`, etc. |
| **11** | Mostrar el documento **PHPDoc** del proyecto generado con PHP Documentor o ApiGen. _(Avanzado/Opcional)_ | Documentación de código, herramientas de generación. |
| **13** | Crear una función que cuente el **número de visitas** a la página actual desde una fecha concreta. _(Avanzado/Opcional)_ | Sesiones o archivos, contadores. |

---

## ⌚ 2. Manejo de Fechas y Tiempo

| ID | Descripción de la Práctica | Conceptos Clave |
| :--- | :--- | :--- |
| **3** | Mostrar en la página `index` la **fecha y hora actual formateada en castellano**. | Clase `DateTime`, `setlocale()`, formato. |
| **4** | Mostrar en la página `index` la **fecha y hora actual en Oporto** formateada en portugués. | Zonas horarias, localización. |
| **5** | Inicializar y mostrar una variable que tiene una **marca de tiempo** (`timestamp`). | Unix Timestamp, función `time()`. |
| **6** | **Operar con fechas**: calcular la fecha y el día de la semana de **dentro de 60 días**. | Objeto `DateInterval` o métodos de `DateTime`. |

---

## 🗂️ 3. Arrays

| ID | Descripción de la Práctica | Conceptos Clave |
| :--- | :--- | :--- |
| **15** | Inicializar un **Array Asociativo** con el sueldo percibido de lunes a domingo. Recorrerlo para **calcular el sueldo semanal**. | Arrays asociativos, bucles. |
| **16** | Recorrer el array anterior **utilizando funciones** para obtener el mismo resultado. | Funciones de Array. |
| **17** | Inicializar un **Array Bidimensional** (`teatro[fila][asiento]`). Recorrerlo con distintas técnicas para **mostrar los asientos ocupados y sus ocupantes**. | Arrays multidimensionales, recorrido con diferentes bucles. |
| **18** | Recorrer el array anterior **utilizando funciones** para obtener el mismo resultado. | Funciones de Array para matrices. |

---

## 📚 4. Estructura de Código y Librerías

| ID | Descripción de la Práctica | Conceptos Clave |
| :--- | :--- | :--- |
| **14** | Comprobar las **librerías en uso** en desarrollo/explotación. Crear una **librería de funciones propia** y estudiar su uso en ambos entornos. | Carga de archivos (`require`)|
| **19** | Construir una **librería de funciones** de validación de formularios (`LibreriaValidacionFormularios.php`). _(Avanzado/Opcional)_ | Organización de código, reutilización. |
| **20** | Convertir la `LibreriaValidacionFormularios.php` en una **clase** `ValidacionFormularios.php`. | Clases, Métodos. |

---

## 📝 5. Desarrollo de Formularios

| ID | Descripción de la Práctica | Conceptos Clave |
| :--- | :--- | :--- |
| **21** | Construir un formulario y enviarlo a una página **`Tratamiento.php`** para mostrar las respuestas recogidas. | Método `POST`/`GET`, acción del formulario. |
| **22** | Construir un formulario y **mostrar las respuestas recogidas en la misma página**. | Autoprocesamiento de formularios, validación condicional. |
| **23** | Formulario con validación: Si hay errores, **muestra el formulario de nuevo con el mensaje de error** correspondiente. | Lógica de validación, mensajes de error. |
| **24** | Formulario con **persistencia de datos**: Si hay errores, las respuestas correctas se **mantienen en el formulario** y no se pierden. | Atributo `value` condicional, `$_POST` persistente. |
| **25** | Trabajar en **`PlantillaFormulario.php`** para crear una plantilla reutilizable de formularios. |  |
| **26** | **Aplicación práctica**: Desarrollar un formulario que recoja temperatura y presión atmosférica y genere un **informe con promedios, mínimos y máximos**. |  |
