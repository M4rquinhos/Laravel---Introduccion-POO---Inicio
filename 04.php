<?php
include 'includes/header.php';


// Constructores
class Empleado {
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }
}


$marco = new Empleado('Marco', 'Carrillo', 'Sistemas', 'marco@mail.com', '001MC');
$areli = new Empleado('Lizbeth', 'Torres', 'TICS', 'areli@mail.com', '001LT');

// $empleado->nombre = "Marco";
// $empleado->apellido = "Carrillo";
// $empleado->departamento = "Sistemas";
// $empleado->email = "marco@mail.com";
// $empleado->codigo = "001MC";


echo "<pre>";
var_dump($marco);
echo "</pre>";
echo "<br>";
echo "<pre>";
var_dump($areli);
echo "</pre>";