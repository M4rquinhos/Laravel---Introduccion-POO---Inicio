<?php

use Empleado as GlobalEmpleado;

include 'includes/header.php';

/* Metodos estaticos
    Son los que no requieren una instancia

*/
class Empleado {


    // Public, Acceso en cualquier lugar (clase u objeto)
    // Protected, Acceso en la clase 
    // private,


    protected static $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo){
        self::$nombre = $nombre;
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

    public static function getEmpleado () {
        echo "Desde metodo estatico";
    }

    public static function getNombre () {
        return self::$nombre;
    }
}

// Empleado::getEmpleado();


$marco = new Empleado('Marco', 'Carrillo', 'Sistemas', 'marco@mail.com', 001);

echo $marco::getNombre();

echo "<pre>";
var_dump($marco);
echo "</pre>";
echo "<br>";