<?php
include 'includes/header.php';

// Metodos
class Empleado {
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }


    public function nombreEmpleado(){
        echo $this->nombre ." ". $this->apellido;
    }


    public function departamentoEmpleado() {
        return $this->departamento;
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

echo $marco->nombreEmpleado();
echo $marco->departamentoEmpleado();
echo $areli->nombreEmpleado();
echo $areli->departamentoEmpleado();