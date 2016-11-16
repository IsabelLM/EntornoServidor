<?php

class Cliente {

    public $direccion;
    public $telefono;
    public $nombre;

    function __construct($direccion, $telefono, $nombre) {
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->nombre = $nombre;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }
}

class Pizza{
    public $tipoPizza ;
    public $tamanoPizza;
    public $masa;
    public $extras;
    
    function __construct($tipoPizza, $tamanoPizza, $masa, $extras) {
        $this->tipoPizza = $tipoPizza;
        $this->tamanoPizza = $tamanoPizza;
        $this->masa = $masa;
        $this->extras = $extras;
    }
    function getTipoPizza() {
        return $this->tipoPizza;
    }

    function getTamanoPizza() {
        return $this->tamanoPizza;
    }

    function getMasa() {
        return $this->masa;
    }

    function getExtras() {
        return $this->extras;
    }

     function setTipoPizza($tipoPizza) {
        $this->tipoPizza = $tipoPizza;
    }

    function setTamanoPizza($tamanoPizza) {
        $this->tamanoPizza = $tamanoPizza;
    }

    function setMasa($masa) {
        $this->masa = $masa;
    }

    function setExtras($extras) {
        $this->extras = $extras;
    }
}

class Pedido {

    public $cliente;
    public $pizzas;

    function __construct() {
        $this->cliente = new Cliente($direccion, $telefono, $nombre);
        $this->pizzas = new Pizza($tipoPizza, $tamanoPizza, $masa, $extras);
    }        
    
    function prueba(){
       // $cliente->
    }
    
}

$cliente = new Cliente("", "", "");
$cliente->getNombre();


        