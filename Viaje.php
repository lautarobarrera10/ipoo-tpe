<?php

class Viaje {
    /**
     * De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.
     */
    private $codigo;
    private $destino;
    private $maximoPasajeros;
    private $colPasajeros;
    private $objResponsable;

    public function __construct(Int $codigo, String $destino, Int $maximoPasajeros, Array $colPasajeros, ResponsableV $objResponsable){
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->maximoPasajeros = $maximoPasajeros;
        $this->colPasajeros = $colPasajeros;
        $this->objResponsable = $objResponsable;
    }

    public function __toString(){
        return
        "✈️  Viaje" . "\n" .
        "Código de vuelo: " . $this->getCodigo() . "\n" .
        "Destino: " . $this->getDestino() . "\n" .
        "Máximo de pasajeros: " . $this->getMaximoPasajeros() . "\n" .
        "\nResponsable: \n" . $this->getObjResponsable() . "\n" .
        "Pasajeros: \n" . implode("\n", $this->getColPasajeros()) . "\n";
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($value){
        $this->codigo = $value;
    }

    public function getDestino(){
        return $this->destino;
    }

    public function setDestino($value){
        $this->destino = $value;
    }

    public function getMaximoPasajeros(){
        return $this->maximoPasajeros;
    }

    public function setMaximoPasajeros($value){
        $this->maximoPasajeros = $value;
    }

    public function getColPasajeros(){
        return $this->colPasajeros;
    }

    public function setColPasajeros($value){
        $this->colPasajeros = $value;
    }

    public function getObjResponsable(){
        return $this->objResponsable;
    }

    public function setObjResponsable($value){
        $this->objResponsable = $value;
    }
}