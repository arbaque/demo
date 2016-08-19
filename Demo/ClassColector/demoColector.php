<?php

require_once("../Colector/colector.php");
class demoColector
{
 
 private $modelo;
 public function __construct()
 {
 
 //en $this->con tenemos la conexión con la bd pruebas

 $this->modelo = new colector();
 
 
 }
 
  
 //obtenemos usuarios de una tabla con postgreSql
public function Listardemo()
	{
		try
		{
		    $result= $this->modelo->Listar("demo", "");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
public function ListarDEMOespecifico ($codigo)
{
	try
		{
		     $result= $this->modelo->Listar("demo", " where id_demo =".$codigo);
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
}
 
 public function Insertdemo($Obdemo)
 {
 try
		{
		     $result= $this->modelo->operacion("INSERT INTO demo (nombre, foto) values (:nombre, :foto)",array(":nombre"=>$Obdemo-> getnombre(),":foto" => $Obdemo-> getfoto()));                     
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function updatedemo($Obdemo)
 {
 try
{

$result= $this->modelo->operacion("update demo set nombre =:nombre , foto =:foto where id_demo = :id_demo",array(":nombre"=>$Obdemo-> getnombre(),":foto" => $Obdemo-> getfoto()
,":id_demo" => $Obdemo-> getid_demo()));
		 
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function deletedemo($Obdemo)
 {
 try
		{
		      $result= $this->modelo->operacion("delete from demo where id_demo =:id_demo",array(":id_demo" => $Obdemo-> getid_demo()));
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 
 
}
 ?>
