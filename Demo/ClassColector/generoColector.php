<?php

require_once("../Colector/colector.php");

class generoColector
{
 
 private $modelo;
 public function __construct()
 {
 
 //en $this->con tenemos la conexión con la bd pruebas

 $this->modelo = new colector();
 
 
 }
 
  
 //obtenemos usuarios de una tabla con postgreSql
public function Listargenero()
	{
		try
		{
		    $result= $this->modelo->Listar("genero");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
 
 public function InsertGenero($ObGenero)
 {
 try
		{

		    $result= $this->modelo->operacion("INSERT INTO genero (descripcion, estado) values (:descripcion, :estado)",array(":descripcion"=>$ObGenero=> $get_descripcion(),":estado" => $ObGenero=> $get_estado()));
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function UpdateGenero($ObGenero)
 {
 try
		{
//		    $result= $this->modelo->operacion("update demo set  where id_demo = 1");

 $result= $this->modelo->operacion("update genero set descripcion =:descipcion, estado =:estado where pkGenero = :pkGenero) ",array(":descripcion"=>$ObGenero=> $get_descripcion(),":estado" => $ObGenero=> $get_estado(),":pkGenero" => $ObGenero=> $get_pkGenero()));
 
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function DeleteGenero($ObGenero)
 {
 try
		{
		   //  $result= $this->modelo->operacion("delete from demo where id_demo = 2");
     
     $result= $this->modelo->operacion("delete from genero where pkGenero = :pkGenero) ",array(":pkGenero" => $ObGenero=> $get_pkGenero()));
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 
 
}
 ?>
