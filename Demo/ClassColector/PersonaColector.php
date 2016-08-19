<?php

require_once("../Colector/colector.php");
class PersonaColector
{
 
 private $modelo;
 public function __construct()
 {
 
 //en $this->con tenemos la conexión con la bd pruebas

 $this->modelo = new colector();
 
 
 }
 
  
 //obtenemos usuarios de una tabla con postgreSql
public function Listarpersona()
	{
		try
		{
		    $result= $this->modelo->Listar("persona");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
 
 public function Insertpersona($ObGenero)
 {
 try
		{

 /*$result= $this->modelo->operacion("insert into persona (nombres, apellidos,  correo, telefono,genero) values ('anibalsss', 'baque','a@a.com','25565',1)",$ObGenero);*/

 /*$result= $this->modelo->operacion("INSERT INTO persona (nombres, apellidos,fechaNacimiento,correo,telefono,genero) values ( ".$ObGenero-> getnombres().", ".$ObGenero-> getapellidos().", ".$ObGenero-> getfechaNacimiento().", ". $ObGenero-> getcorreo().", ".$ObGenero-> gettelefono().", ".$ObGenero-> getgenero().")",$ObGenero);*/


		     $result= $this->modelo->operacion("INSERT INTO persona (nombres, apellidos,correo,telefono,genero,fechanacimiento) values (:nombres, :apellidos, :correo, :telefono, :genero, :fechanacimiento)",array(":nombres"=>$ObGenero-> getnombres(),":apellidos" => $ObGenero-> getapellidos()
,":correo" => $ObGenero-> getcorreo()
,":telefono" => $ObGenero-> gettelefono()
,":genero" => $ObGenero-> getgenero()
,":fechanacimiento" => $ObGenero-> getfechaNacimiento()));
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function Updatepersona($ObGenero)
 {
 try
		{

$result= $this->modelo->operacion("update persona set nombres =:nombres , apellidos =:apellidos, correo = :correo, telefono =:telefono, genero =:genero 
,fechanacimiento =:fechanacimiento where pkpersona = :pkpersona",array(":nombres"=>$ObGenero-> getnombres(),":apellidos" => $ObGenero-> getapellidos()
,":correo" => $ObGenero-> getcorreo()
,":telefono" => $ObGenero-> gettelefono()
,":genero" => $ObGenero-> getgenero()
,":fechanacimiento" => $ObGenero-> getfechaNacimiento()
,":pkpersona" => $ObGenero-> getpkPersona()));
		 
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function Deletepersona($ObGenero)
 {
 try
		{
		      $result= $this->modelo->operacion("delete from persona  where pkPersona = :pkPersona)",array(":pkPersona" => $ObGenero-> $getpkPersona()));
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 
 
}
 ?>
