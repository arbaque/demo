<?php
class demo {  
   private $id_demo;  
   private $nombre;  
   private $foto; 
  
   function __construct() {  
    

   }  
 
   public function getid_demo() {  
     return $this->id_demo;  
   }  
   public function setid_demo($id_demo) {  
     $this->id_demo = $id_demo;  
   }  
   public function getNombre() {  
     return $this->nombre;  
   }  
   public function setNombre($nombre) {  
     $this->nombre = $nombre;  
   }  
   
      public function getfoto() {  
     return $this->foto;  
   }  
   public function setfoto($foto) {  
     $this->foto = $foto;  
   } 

 }
 ?>
