<?php
class persona {  
   private $pkPersona;  
   private $nombres;
   private $apellidos;  
   private $fechanacimiento;  
   private $correo;
   private $telefono;        
   private $genero;    
  
   function __construct() {  
    
   }
  
   public function getpkPersona() {  
     return $this->pkpersona;  
   }  
   public function setpkPersona($pkpersona) {  
     $this->pkpersona = $pkpersona;  
   }  
   public function getnombres() {  
     return $this->nombres;  
   }  
   public function setnombres($nombres) {  
     $this->nombres = $nombres;  
   }  

   public function getapellidos() {  
     return $this->apellidos;  
   }  
   public function setapellidos($apellidos) {  
     $this->apellidos = $apellidos;  
   }  

   public function setfechaNacimiento($fechanacimiento) {  
     $this->fechanacimiento = $fechanacimiento;  
   }  
   public function getfechaNacimiento() {  
     return $this->fechanacimiento;  
   }  
   public function setcorreo($correo) {  
     $this->correo = $correo;  
   }  
   public function getcorreo() {  
     return $this->correo;  
   }  
   public function settelefono($telefono) {  
     $this->telefono = $telefono;  
   }  
   public function gettelefono() {  
     return $this->telefono;  
   }  
   public function setgenero($genero) {  
     $this->genero = $genero;  
   }  
   public function getgenero() {  
     return $this->genero;  
   }  
  

 }
 ?>
