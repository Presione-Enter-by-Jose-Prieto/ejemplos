<?php

$estructura = [
    "fundamentos" => [
        "variables_y_constantes.php",
        "tipos_de_datos_strings.php",
        "operaciones_y_geometria.php",
    ],
    "arrays" => [
        "arrays_basicos.php",
        "array_search.php",
        "array_asociativo_dni.php",
        "arrays_de_motos.php",
        "arrays_mixtos_y_multidimensionales.php",
        "array_pop.php",
        "array_push.php",
        "array_search_ciudades.php",
        "sort_ciudades.php",
    ],
    "condicionales" => [
        "dias_semana.php",
        "calculadora_switch.php",
        "notas_parcial_y_prueba.php",
        "pais_y_departamento.php",
    ],
    "ciclos" => [
        "combinaciones_tres_numeros.php",
        "caracteres_de_palabra.php",
        "aleatorios_hasta_multiplo_de_10.php",
        "numeros_pares.php",
        "multiplos_de_7.php",
        "tablas_de_multiplicar.php",
        "separar_letras.php",
    ],
    "funciones" => [
        "nombre_y_correo_en_una_salida.php",
        "nombre_y_correo_con_mensajes.php",
        "funciones_y_scope.php",
        "enviar_email.php",
        "calcular_imc.php",
        "multiplicacion.php",
        "guardar_telefonos.php",
        "tipos_estrictos.php",
        "suma_con_parametros.php",
    ],
];

echo "Proyecto reorganizado por temas" . "<br>" . "<hr>";

foreach ($estructura as $tema => $archivos) {
    echo strtoupper($tema) . "<br>";
    foreach ($archivos as $archivo) {
        echo "- ejercicios/" . $tema . "/" . $archivo . "<br>";
    }
    echo "<br>";
}
