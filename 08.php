<?php
include 'includes/header.php';

// Modificadores de acceso Public, Protected, Private
class Empleado {


    // Public, Acceso en cualquier lugar (clase u objeto)
    // Protected, Acceso en la clase 
    // private,


    protected $nombre;
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

    // protected
    public function getName(){
        return $this->nombre;
    }

    public function cambiarNombre($nombre) {
        $this->nombre = $nombre;
    }
}

$marco = new Empleado('Marco', 'Carrillo', 'Sistemas', 'marco@mail.com', 001);

// echo $marco->nombre;
$marco->cambiarNombre('Un nuevo nombre pa');

echo $marco->getName();

echo "<pre>";
var_dump($marco);
echo "</pre>";
echo "<br>";

