<?php

class Pasajero {
    //  Objeto que tenga los atributos nombre, apellido, numero de documento y teléfono
    private $nombre;
    private $apellido;
    private $numDoc;
    private $telefono;

    public function __construct(String $nombre, String $apellido, Int $numDoc, Int $telefono){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numDoc = $numDoc;
        $this->telefono = $telefono;
    }

    public function __toString(){
        return
        "😊 Pasajero" . "\n" .
        "Nombre: " . $this->getNombre() . "\n" .
        "Apellido: " . $this->getApellido() . "\n" .
        "Número de documento: " . $this->getNumDoc() . "\n" .
        "Teléfono: " . $this->getTelefono() . "\n";
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

    public function getNumDoc(){
        return $this->numDoc;
    }

    public function setNumDoc($value){
        $this->numDoc = $value;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function setTelefono($value){
        $this->telefono = $value;
    }
}