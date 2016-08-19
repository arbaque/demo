<?php
require_once("../Configuracion/conexion.php");
//require_once("demo.php");
/*
require('login/login.php') #works fine (main.php)
require('../includes/session.php') #quits (login.php)
*/


class colector
{
 
 private $con;
 public function __construct()
 {
 
 //en $this->con tenemos la conexión con la bd pruebas
 $this->con = new conexion();
 
 }
 
  
 //obtenemos usuarios de una tabla con postgreSql
public function Listar($table, $codigo)
	{
		try
		{
			$result = array();
			$cadena = "SELECT * FROM ".$table.$codigo;
            
           // echo $cadena;
			$stm = $this->con->prepare($cadena);
			$stm->execute();
			
			$result = $stm->fetchAll(PDO::FETCH_CLASS, $table);
            //var_dump($result);
            $this->con->close_con();
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	
	public function operacion($cadena, $ArrayobjetoClass)
	{
	    try
	    {
echo $cadena;
//var_dump( $ArrayobjetoClass);
// $count = $this->con->execute($cadena);

	    $stm =  $this->con->prepare($cadena);
		$count =$stm->execute($ArrayobjetoClass);

	 if ($count>0){
			$count =1;
			echo '1 row has been inserted';
		}
        //$stm->execute($objetoClass);
        //$count = $stm->rowCount();
echo "contador ". $count;
        //$count = $this->con->exec($cadena);
         $this->con->close_con();
        return $count;
        
	    }
	    catch(Exception $e)
		{
echo $e->getMessage();
			die($e->getMessage());
		}
	}
 
}
 ?>
