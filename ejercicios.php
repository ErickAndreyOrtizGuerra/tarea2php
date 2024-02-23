<?php
// Definir los dos numeros
$primerNumero = 26;
$segundoNumero = 56;

// Verificar cual es mayor usando una estructura condicional if-else
if ($primerNumero > $segundoNumero) {
    echo "El primer numero ($primerNumero) es mayor que el segundo numero ($segundoNumero).";
} elseif ($primerNumero < $segundoNumero) {
    echo "El segundo numero ($segundoNumero) es mayor que el primer numero ($primerNumero).";
} else {
    echo "Ambos numeros son iguales.";
}

?>