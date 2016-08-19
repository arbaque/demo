<?php

session_start();
echo 'Bienvenido a la página '.$_SESSION['usuario'];
echo '<br /><a href="destruirsession.php">Cerrar Session</a>';

require_once '../ClassColector/demoColector.php';
require_once '../Colector/demo.php';

// Logica
$alm = new demo();
$model = new demoColector();

?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>ejemplo grupo de la muerte</title>       
	</head>
    <body style="padding:15px;">
<form action="GuardarDemo.php" method="post" name="insertform">
        <div class="pure-g">

<p>
  <input type="submit" name="send" value="Nuevo" id="inputid"  />
</p>
            <div class="pure-u-1-12">
                               

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <tr>
                            <th style="text-align:left;">id</th>
                            <th style="text-align:left;">Nombre</th>
                           <th style="text-align:left;">Foto</th>
                             <th style="text-align:left;">Opciones</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach($model->ListarDEMO() as $r): ?>
                        <tr>
                            <td><?php echo $r->getid_demo(); ?></td>
                            <td><?php echo $r->getNombre(); ?></td>     
                            <td><img src="fotos/<?php echo $r->getfoto(); ?>" class="img-rounded" width="50px" height="50px" /></td>                             
                            <td><a href="EditarDemo.php?id=<?php echo $r->getid_demo();?>">Edit</a> | <a href="EliminarDemo.php?id=<?php echo $r->getid_demo();?>" onClick="return confirm('Esta seguro de eliminar?'">Delete</a></td>
                       
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
      
        </div>

    </body>
</html>
