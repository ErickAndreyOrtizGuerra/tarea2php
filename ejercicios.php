<?php
// Definir el numero del cual calcular el factorial
$numeroBase = 11; // Puedes cambiar este numero al que desees calcular su factorial

// Inicializar variables
$factorial = 1;
$i = 1;

// Calcular el factorial utilizando un bucle while
while ($i <= $numeroBase) {
    $factorial *= $i;
    $i++;
}
// Mostrar el resultado
echo "El factorial  $numeroBase es: $factorial";
?>