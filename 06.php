<?php
include 'includes/header.php';

// Constructor Property Promotion
class Empleado {
    
    public function __construct(
        public $nombre,
        public $apellido,
        public $departamento,
        public $email,
        public $codigo,
    ) {
        
    }
}


$marco = new Empleado('Marco', 'Carrillo', 'Sistemas', 'marco@mail.com', 001);
$areli = new Empleado('Lizbeth', 'Torres', 'TICS', 'areli@mail.com', 002);

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