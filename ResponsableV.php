<?php

class ResponsableV {
    // Registre el número de empleado, número de licencia, nombre y apellido.
    private $numEmpleado;
    private $numLicencia;
    private $nombre;
    private $apellido;

    public function __construct(Int $numEmpleado, Int $numLicencia, String $nombre, String $apellido){
        $this->numEmpleado = $numEmpleado;
        $this->numLicencia = $numLicencia;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function __toString(){
        return
        "🧑‍✈️  Responsable de viaje \n" .
        "Número de empleado: " . $this->getNumEmpleado() . "\n" .
        "Número de licencia: " . $this->getNumLicencia() . "\n" .
        "Nombre: " . $this->getNombre() . "\n" .
        "Apellido: " . $this->getApellido() . "\n";
    }

    public function getNumEmpleado(){
        return $this->numEmpleado;
    }

    public function setNumEmpleado($value){
        $this->numEmpleado = $value;
    }

    public function getNumLicencia(){
        return $this->numLicencia;
    }

    public function setNumLicencia($value){
        $this->numLicencia = $value;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($value){
        $this->nombre = $value;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setApellido($value){
        $this->apellido = $value;
    }
}