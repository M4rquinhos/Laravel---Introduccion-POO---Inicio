<?php
include 'includes/header.php';


// Getters and setters
class Empleado {


    // Public, Acceso en cualquier lugar (clase u objeto)
    // Protected, Acceso en la clase 
    // private,


    protected $nombre;
    protected $apellido;
    protected $departamento;
    protected $email;
    protected $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }

    /*
        Get = obtener un valor.
        Set = modificar un valor.
    
    */


    public function getName(){
        return $this->nombre;
    }

    public function setName($nombre) {
        $this->nombre = $nombre;
    }

    public function getCode(){
        return $this->codigo;
    }

    public function setCode($codigo) {
        $this->codigo = $codigo;
    }

    public function getDepartment() {
        return $this->departamento;
    }

    public function setDepartment($departamento) {
        $this->departamento = $departamento;
    }
}

$marco = new Empleado('Marco', 'Carrillo', 'Sistemas', 'marco@mail.com', 001);

// echo $marco->nombre;
$marco->setName('Un nuevo nombre pa');

echo $marco->getName();

// echo "<pre>";
// var_dump($marco);
// echo "</pre>";
// echo "<br>";

$marco->setCode(1111);
echo $marco->getCode();
