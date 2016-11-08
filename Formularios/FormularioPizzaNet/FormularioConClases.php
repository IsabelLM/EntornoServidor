<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cliente {
     
    public $direccion;
    public $telefono;
 
  
  public function __construct() {
        $this-> telefono = "1234";
    }


   


}
class Pedido{
 
   public $c1 = new Cliente();
    echo $c1->telefono;
    
    
}
