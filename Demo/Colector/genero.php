<?php
class genero {  
   private $pkGenero;  
   private $descripcion;
   private $estado;    
  
   function __construct() {  
    

   }  
   /*
      function __construct() {  
    print "En el constructor BaseClass\n";
   } */ 
   
   
  
   public function getpkGenero() {  
     return $this->pkGenero;  
   }  
   public function setpkGenero($pkGenero) {  
     $this->pkGenero = $pkGenero;  
   }  
   public function getdescripcion() {  
     return $this->descripcion;  
   }  
   public function setdescripcion($descripcion) {  
     $this->descripcion = $descripcion;  
   }  

   public function getestado() {  
     return $this->estado;  
   }  
   public function setestado($estado) {  
     $this->estado = $estado;  
   }  

 }
 ?>
