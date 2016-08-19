
<?php
// crear las cookies
session_start();



$nombre = $_POST['nombre'];
$clave = $_POST['clave'];

echo 'Bienvenido a la página '.$nombre;
 echo '<br /><a href="destruirsession.php">Cerrar Session</a>';

$_SESSION['usuario']  = $nombre;
// Funciona si la cookie de sesión fue aceptada
echo '<br /><a href="taller.php">Volver</a>';


?>


<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Administracion</title>       
	</head>
    <body style="padding:15px;">
<form action="" method="post" name="insertform">
        <div class="pure-g">
<p>
  <input type="submit" name="send" value="Nuevo" id="inputid"  />
</p>
            <div class="pure-u-1-12">
                               

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <tr>
                            <th style="text-align:left;"> </th>
                            <th style="text-align:left;"> </th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                        <tr>
                            <td> <a href="Vistademo.php">DEMO</a></td>
                            <td> <a href="Vistademo.php">Ciudad</a></td>
                        </tr>
                                                <tr>
                            <td> <a href="Vistademo.php">Usuario</a></td>
                            <td> <a href="Vistademo.php">Persona</a></td>
                        </tr>


                </table>     
         <input type="hidden" name="loginusuario" value=<?php echo $nombre; ?>>
		<input type="hidden" name="loginpassword" value=<?php echo $clave; ?>>
            </div>
        </div>

    </body>
</html>


