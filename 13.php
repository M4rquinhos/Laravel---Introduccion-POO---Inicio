<?php
include 'includes/header.php';
include 'DB.php';


// Comunicar 2 clases
class Empleado {

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
$nombre = $marco->getName();

// echo $nombre;

$db = new DB($nombre);
$db->guardar();
// var_dump($db);