<?php
// Fecha de nacimiento de la persona (en formato de texto)
$fecha_nacimiento = "2004-05-15";

// Convertir la fecha de nacimiento 
$timestamp_nacimiento = strtotime($fecha_nacimiento);

// Obtener la fecha actual 
$timestamp_actual = time();

// Calcular la diferencia en segundos entre la fecha actual y la fecha de nacimiento
$diferencia = $timestamp_actual - $timestamp_nacimiento;

// Convertir la diferencia de segundos a years
$edad = floor($diferencia / (60 * 60 * 24 * 365.25));

// Mostrar la edad
echo " tienes $edad años.";

?>