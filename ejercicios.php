<?php
// Generar un array con 20 numeros aleatorios entre 1 y 100
$numeros = array_map(fn() => rand(1, 10), range(1, 20));

// Ordenar los numeros de mayor a menor
rsort($numeros);

// Mostrar los numeros aleatorios generados y ordenados
echo "Los numeros aleatorios generados y ordenados de mayor a menor: " . implode(' ', $numeros);
?>