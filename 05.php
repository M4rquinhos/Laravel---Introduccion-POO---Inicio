<?php
include 'includes/header.php';

// Tipado
class Empleado {
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct(string $nombre, string $apellido, string $departamento, string $email, int $codigo) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }
}


$marco = new Empleado('Marco', 'Carrillo', 'Sistemas', 'marco@mail.com', 001);
$areli = new Empleado('Lizbeth', 'Torres', 'TICS', 'areli@mail.com', 002);

echo "<pre>";
var_dump($marco);
echo "</pre>";
echo "<br>";
echo "<pre>";
var_dump($areli);
echo "</pre>";