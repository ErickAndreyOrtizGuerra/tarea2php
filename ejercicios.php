<?php
// Definir un array asociativo con los datos de los alumnos
$alumnos = array(
    array('alumno' => 'Erick', 'curso' => 'Matematicas', 'nota' => 85),
    array('alumno' => 'Leo', 'curso' => 'Geografia', 'nota' => 30),
    array('alumno' => 'Cristian', 'curso' => 'Musica', 'nota' => 45),
    array('alumno' => 'Andrea', 'curso' => 'Matematicas', 'nota' => 88),
    array('alumno' => 'Sofia', 'curso' => 'Historia', 'nota' => 70),
    array('alumno' => 'Laura', 'curso' => 'Naturales', 'nota' => 92),
    array('alumno' => 'Carlos', 'curso' => 'Quimica', 'nota' => 82),
    array('alumno' => 'Andres', 'curso' => 'Historia', 'nota' => 60),
    array('alumno' => 'Nicolas', 'curso' => 'Sociales', 'nota' => 95),
    array('alumno' => 'Julia', 'curso' => 'Quimica', 'nota' => 100)
);

// Recorrer el array para mostrar los datos de los alumnos
echo "Datos de los alumnos:";
foreach ($alumnos as $alumno) {
    echo "Alumno: " . $alumno['alumno'] . ", Curso: " . $alumno['curso'] . ", Nota: " . $alumno['nota'] . "";
}
?>