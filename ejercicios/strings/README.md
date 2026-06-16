# Guía de funciones de strings en PHP

Este archivo resume las funciones de cadenas vistas en clase y otras relacionadas que te pueden servir para seguir estudiando.

## Funciones base de la tabla de clase

| Función | Descripción |
| --- | --- |
| `chr()` | Devuelve un carácter a partir de un código ASCII. |
| `bin2hex()` | Convierte datos binarios o texto a representación hexadecimal. |
| `addcslashes()` | Escapa caracteres específicos con barras invertidas. |
| `echo` | Imprime una o varias cadenas. |
| `explode()` | Divide una cadena en un array usando un separador. |
| `ltrim()` | Elimina espacios u otros caracteres al inicio de una cadena. |
| `md5()` | Genera un hash MD5 de una cadena. |
| `print()` | Imprime una cadena. |
| `rtrim()` | Elimina espacios u otros caracteres al final de una cadena. |
| `str_replace()` | Reemplaza texto dentro de una cadena. |
| `strlen()` | Devuelve la longitud de una cadena. |
| `hash('sha256', $texto)` | Genera un hash SHA-256. En PHP normalmente se usa `hash()` en lugar de `sha2()`. |

## Otras funciones de strings muy comunes

| Función | Descripción |
| --- | --- |
| `trim()` | Elimina espacios u otros caracteres al inicio y al final. |
| `strpos()` | Busca la posición de una subcadena. |
| `stripos()` | Igual que `strpos()`, pero sin distinguir mayúsculas y minúsculas. |
| `substr()` | Extrae una parte de una cadena. |
| `strtolower()` | Convierte a minúsculas. |
| `strtoupper()` | Convierte a mayúsculas. |
| `ucfirst()` | Pone en mayúscula la primera letra. |
| `ucwords()` | Pone en mayúscula la primera letra de cada palabra. |
| `str_contains()` | Verifica si una cadena contiene otra. |
| `str_starts_with()` | Verifica si una cadena empieza por otra. |
| `str_ends_with()` | Verifica si una cadena termina con otra. |
| `implode()` | Une los elementos de un array en una cadena. |
| `str_split()` | Divide una cadena en caracteres o partes del mismo tamaño. |
| `strcmp()` | Compara dos cadenas. |
| `str_repeat()` | Repite una cadena varias veces. |
| `str_pad()` | Completa una cadena hasta cierto tamaño. |
| `number_format()` | Formatea números como texto. |
| `htmlspecialchars()` | Escapa caracteres especiales para salida segura en HTML. |
| `nl2br()` | Convierte saltos de línea en etiquetas `<br>` al trabajar con HTML. |

## Regla práctica

Si el ejercicio se centra en texto, longitud, separación, búsqueda, reemplazo o transformación de cadenas, debería ir en esta carpeta.
