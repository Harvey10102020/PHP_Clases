<?php

// function salida ($nombre) {
// return "Hola usuario ".$nombre. " Total Letras: ".strlen($nombre);
// }

// echo salida("Harvey Muralla");

// class modelos {

// public function tipos_modelos(){

// return "Mi Modelo";

// }

// class productos  extends modelos{

    
//    function Marcas(){

//        return this->tipos_modelos();


//     }

//     }


// }

// $obj = new productos("xiami");


class Verificar {
  protected function Datos_A_Verificar($arg1 ,$arg2){
  
    if($arg1 == "Harvey" && $arg2 =="123") {
  
      return "Usuario Logueado:".$arg1;
  
    }else{
  
      return "Error los datos no coinciden";
  
  
    }
  
  
  return $this->usuario;
  
  
  }
  
  
  }
  
  
  class login extends Verificar{
  
    private $usuario, $contraseña;
  
    public function __construct($arg1, $arg2) {
      $this->usuario = $arg1;
      $this->contrasena = $arg2;
    }
  
  
  private function Enviar_Datos() {
  
  
    return $this->Datos_A_Verificar($this->usuario, $this->contrasena);
  
  }
  
  public function Mensaje(){
               return $this->Enviar_Datos();
  
  
  }
  
  
  }
  
  
  $obj = new Login("Harvey","123");
  
  echo $obj->Mensaje();



?>