# Guía de funciones de arrays en PHP

Este archivo resume las funciones de arrays vistas en clase y otras relacionadas que te sirven para seguir ampliando apuntes.

## Funciones de la tabla de clase

| Función | Descripción |
| --- | --- |
| `array()` | Crea un array. |
| `array_change_key_case()` | Cambia a mayúsculas o minúsculas todas las claves de un array. |
| `array_column()` | Devuelve los valores de una columna de un array multidimensional. |
| `array_combine()` | Crea un array usando uno para claves y otro para valores. |
| `array_count_values()` | Cuenta cuántas veces aparece cada valor. |
| `array_diff()` | Devuelve la diferencia entre arrays. |
| `array_fill()` | Llena un array con un valor repetido. |
| `array_fill_keys()` | Llena un array usando claves dadas y un valor común. |
| `array_key_exists()` | Verifica si una clave existe en un array. |
| `array_keys()` | Devuelve todas las claves de un array. |
| `array_merge()` | Combina uno o más arrays. |
| `array_pop()` | Extrae el último elemento. |
| `array_push()` | Inserta uno o más elementos al final. |
| `array_replace()` | Reemplaza elementos del array original con valores de otros arrays. |
| `array_search()` | Busca un valor y devuelve su clave si existe. |
| `array_shift()` | Quita el primer elemento del array. |
| `array_slice()` | Extrae una porción de un array sin modificar el original. |
| `array_splice()` | Elimina o reemplaza una parte del array original. |
| `array_sum()` | Suma los valores numéricos de un array. |
| `array_unique()` | Elimina valores repetidos. |
| `array_unshift()` | Añade elementos al inicio del array. |
| `array_values()` | Devuelve todos los valores de un array. |
| `array_walk()` | Aplica una función a cada elemento del array. |
| `arsort()` | Ordena en orden descendente manteniendo la asociación de índices. |
| `asort()` | Ordena en orden ascendente manteniendo la asociación de índices. |
| `count()` | Cuenta los elementos del array. |
| `in_array()` | Comprueba si un valor existe en un array. |
| `key()` | Obtiene la clave actual de un array. |
| `krsort()` | Ordena por claves en orden descendente. |
| `ksort()` | Ordena por claves en orden ascendente. |
| `list()` | Asigna variables desde un array. |
| `natcasesort()` | Ordena con comparación natural sin distinguir mayúsculas y minúsculas. |
| `natsort()` | Ordena con comparación natural. |
| `rsort()` | Ordena en orden descendente. |
| `shuffle()` | Mezcla los elementos del array. |
| `sizeof()` | Alias de `count()`. |
| `sort()` | Ordena en orden ascendente. |
| `uasort()` | Ordena valores con una función de comparación personalizada manteniendo índices. |
| `uksort()` | Ordena claves con una función de comparación personalizada. |
| `usort()` | Ordena valores con una función de comparación personalizada. |

## Otras funciones útiles de arrays

| Función | Descripción |
| --- | --- |
| `current()` | Devuelve el valor actual del puntero interno del array. |
| `next()` | Avanza el puntero interno. |
| `prev()` | Retrocede el puntero interno. |
| `reset()` | Reinicia el puntero interno al primer elemento. |
| `end()` | Mueve el puntero al último elemento. |
| `array_map()` | Aplica una función a todos los elementos y devuelve un nuevo array. |
| `array_filter()` | Filtra elementos según una condición. |
| `array_reduce()` | Reduce un array a un solo valor. |
| `range()` | Crea un array con un rango de valores. |
| `compact()` | Crea un array a partir de variables existentes. |
| `extract()` | Importa variables desde un array asociativo. |

## Regla práctica

Si el ejercicio trabaja principalmente con listas, claves, valores, búsqueda, combinación, ordenamiento o transformación de arrays, debería ir en esta carpeta.
