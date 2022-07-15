<?php

use Empleado as GlobalEmpleado;

include 'includes/header.php';

// Instanciar una clase
class Empleado {

}

$empleado = new Empleado;
$empleado2 = new Empleado;
$empleado3 = new Empleado;

var_dump($empleado);
var_dump($empleado2);
var_dump($empleado3);