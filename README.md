# Guía para seguir agregando notas y ejercicios

Este proyecto está organizado por **tema** para que las notas de clase y los ejercicios sean fáciles de encontrar, mantener y ampliar.

## Estructura actual

```text
3406221/
├── README.md
├── index.php
└── ejercicios/
    ├── fundamentos/
    ├── arrays/
    ├── condicionales/
    ├── ciclos/
    ├── funciones/
    └── strings/
```

## Idea general

Cada archivo `.php` debe representar una nota, ejemplo o ejercicio de un tema específico.

La idea es mantener el proyecto:

- ordenado por tema
- fácil de navegar
- sin mezclar contenido visual innecesario
- consistente en nombres y estilo

---

## Dónde guardar un archivo nuevo

Usa esta regla:

- `ejercicios/fundamentos/` → variables, constantes, tipos de datos, operadores, cálculos básicos
- `ejercicios/arrays/` → arrays simples, asociativos, multidimensionales, funciones de arrays
- `ejercicios/condicionales/` → `if`, `else`, `switch`, validaciones, decisiones lógicas
- `ejercicios/ciclos/` → `for`, `while`, recorridos, repeticiones, conteos
- `ejercicios/funciones/` → funciones, parámetros, retorno, tipos, scope, `global`, `static`
- `ejercicios/strings/` → longitud, separación, reemplazo, búsqueda y transformación de texto

Si en el futuro aparece un tema nuevo, puedes crear una carpeta nueva dentro de `ejercicios/`.

Por ejemplo:

- `ejercicios/strings/`
- `ejercicios/formularios/`
- `ejercicios/poo/`
- `ejercicios/bases_de_datos/`

---

## Convención de nombres

Usa nombres de archivo descriptivos y en minúsculas, separados por guiones bajos.

### Bien

- `variables_y_constantes.php`
- `array_multidimensional.php`
- `tabla_de_multiplicar.php`
- `funcion_con_parametros.php`

### Evitar

- `class1.php`
- `ejerciciofinalnuevo2.php`
- `prueba.php`
- `cosas.php`

El nombre debe decir claramente **qué contiene** el archivo.

---

## Reglas para nuevos archivos

### 1. Usa solo PHP si es una nota de consola

En este proyecto se decidió eliminar HTML y CSS de los ejercicios.

Por eso, para nuevas notas, usa salida simple en texto:

```php
<?php

echo 'Hola mundo' . '<br>';
```

### 2. No agregues HTML ni CSS

Evita cosas como:

- `<!DOCTYPE html>`
- `<html>`
- `<body>`
- `<h1>`
- `<style>`
- propiedades CSS como `margin`, `color`, `display`, etc.

### 3. Mantén un solo tema por archivo

Si un archivo empieza hablando de arrays, no metas también funciones, ciclos y condicionales sin necesidad.

Si el contenido crece demasiado, sepáralo.

### 4. Usa nombres de variables claros

Ejemplos:

- `$nombreEstudiante`
- `$listaCiudades`
- `$resultadoFinal`
- `$notaParcial`

Evita variables como:

- `$x`
- `$a`
- `$dato1`

salvo que sea un ejemplo muy pequeño.

### 5. Mantén la salida legible

Usa `'<br>'` para separar líneas.

Ejemplo:

```php
<?php

$nombre = 'Alejandro';
$edad = 20;

echo 'Nombre: ' . $nombre . '<br>';
echo 'Edad: ' . $edad . '<br>';
```

---

## Plantilla recomendada para una nota nueva

Puedes copiar esta base:

```php
<?php

// Tema: Nombre del tema

$valor = 10;

function ejemplo(int $numero): int
{
    return $numero * 2;
}

echo 'Valor original: ' . $valor . '<br>';
echo 'Valor procesado: ' . ejemplo($valor) . '<br>';
```

---

## Cómo agregar una nueva clase

### Ejemplo 1: una nota de arrays

Si en clase viste arrays asociativos, crea:

`ejercicios/arrays/array_asociativo_basico.php`

### Ejemplo 2: una nota de ciclos

Si viste `while`, crea:

`ejercicios/ciclos/while_basico.php`

### Ejemplo 3: una nota de funciones

Si viste parámetros opcionales, crea:

`ejercicios/funciones/parametros_opcionales.php`

---

## Cuándo crear una carpeta nueva

Crea una carpeta nueva cuando:

- el tema no encaje bien en las carpetas actuales
- ya tengas varios archivos del mismo tema
- quieras separar temas grandes para que no se mezclen

Por ejemplo, si empiezas a ver Programación Orientada a Objetos, podrías crear:

```text
ejercicios/poo/
```

Y dentro:

- `clases_basicas.php`
- `herencia.php`
- `encapsulamiento.php`

---

## Qué hacer con `index.php`

El archivo `index.php` de la raíz funciona como resumen rápido de la estructura.

Cuando agregues un archivo nuevo, también conviene actualizar `3406221/index.php` para que aparezca listado ahí.

### Ejemplo

Si agregas:

`ejercicios/ciclos/while_basico.php`

entonces añade ese nombre dentro del arreglo correspondiente en `index.php`.

---

## Flujo recomendado cada vez que tengas una clase nueva

1. Identifica el tema principal
2. Elige la carpeta correcta dentro de `ejercicios/`
3. Crea un archivo con nombre descriptivo
4. Escribe solo PHP
5. Usa salida clara con `'<br>'`
6. Revisa que no tenga HTML ni CSS
7. Actualiza `index.php` si quieres que aparezca en el listado general

---

## Ejemplo completo

Si mañana ves el tema de `while`, podrías crear este archivo:

**Ruta:** `ejercicios/ciclos/while_basico.php`

```php
<?php

$contador = 1;

while ($contador <= 5) {
    echo 'Contador: ' . $contador . '<br>';
    $contador++;
}
```

Y luego agregar en `index.php` dentro de `ciclos`:

```php
'while_basico.php',
```

---

## Ejercicios propuestos

1. Desarrolla un programa que permita mostrar el factorial de un número definido previamente.

2. Desarrollar un programa que determine los divisores de un número definido previamente.

3. Desarrollar un programa que permita definir si un número entero ya establecido es un número perfecto o no.

4. Muestre los números de pisos y oficinas de un bloque. Por ejemplo:
   - Piso 1 – Oficina 1
   - Piso 2 – Oficina 2
   Así hasta llegar al piso 5 – Oficina 6.

5. Desarrolla un programa que permita invertir la palabra “Programación”. El resultado debe ser “nóicamargorP”.

6. Desarrollar un programa que determine si una palabra establecida previamente es o no palíndroma.

7. Desarrollar un programa que continúe con la serie sumatoria de 11 – 22 – 33 – 44. Debe mostrar únicamente los primeros 25 valores de la serie.

8. Desarrolla un programa completamente de tu autoría y con el grado de complejidad que creas necesario, utiliza todo lo aprendido hasta ahora.

---

## Recomendaciones finales

- prioriza nombres claros sobre nombres cortos
- no mezcles HTML/CSS con ejercicios de PHP
- si un archivo crece mucho, divídelo
- si un tema crece mucho, crea una carpeta nueva
- intenta que cada archivo sirva como apunte fácil de revisar después

---

## Checklist rápido antes de guardar un archivo nuevo

- [ ] Está en la carpeta correcta
- [ ] El nombre del archivo describe el tema
- [ ] Solo contiene PHP
- [ ] No tiene HTML
- [ ] No tiene CSS
- [ ] La salida es legible
- [ ] Si hace falta, actualicé `index.php`

---

Si más adelante quieres, puedo ayudarte a crear una **plantilla automática para nuevas clases** o incluso un **index más bonito y autogenerado** para todos tus apuntes.
