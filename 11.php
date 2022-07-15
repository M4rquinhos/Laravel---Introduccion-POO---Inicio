<?php


include 'includes/header.php';

/* Clases abstractas 
    No se pueden instanciar
*/

 abstract class Persona {
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;


    public function __construct($nombre, $apellido, $email, $telefono)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
    }

    public function getInformation() {
        echo "Nombre: " . $this->nombre . " " . $this->apellido . "\n Email: " . $this->email;
    }
    
    public function getTelefono() {
        return $this->telefono;
    }
}

class Empleado extends Persona{
    protected $codigo;
    protected $departamento;

    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->codigo = $codigo;
        $this->departamento = $departamento;
    }

}

class Proveedor extends Persona{
    protected $empresa;

    public function __construct($nombre, $apellido, $email, $telefono, $empresa)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->$empresa = $empresa;
    }
}

$empleado = new Empleado('Marco', 'Carrillo', 'marco@correo.com', 899879897, 0001, 'Sistemas');
$proveedor = new  Proveedor('Pedro', 'El hermano de pablo', 'lic@hotmail.com', 878987, 'Secucore');


echo "<pre>";
    var_dump($empleado);
echo "</pre>";

echo "<pre>";
    var_dump($proveedor);
echo "</pre>";

$empleado->getInformation();
echo "<br>";
$proveedor->getInformation();
echo "<br>";
 echo $empleado->getTelefono();
echo "<br>";
echo $proveedor->getTelefono();