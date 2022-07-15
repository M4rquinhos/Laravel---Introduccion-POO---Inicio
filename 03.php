<?php
include 'includes/header.php';

// Atributos de una clase
class Empleado {
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;
}

$empleado = new Empleado;

$empleado->nombre = "Marco";
$empleado->apellido = "Carrillo";
$empleado->departamento = "Sistemas";
$empleado->email = "marco@mail.com";
$empleado->codigo = "001MC";


echo "<pre>";
var_dump($empleado);
echo "</pre>";