<?php    
session_start();
echo 'Bienvenido a la página '.$_SESSION['usuario'];
echo '<br /><a href="destruirsession.php">Cerrar Session</a>';

require_once '../ClassColector/demoColector.php';
require_once '../Colector/demo.php';
error_reporting( ~E_NOTICE ); // avoid notice

// Logica
$alm = new demo();
$model = new demoColector();

if(isset($_POST['senddemo'])){ 
    $nombre = $_POST['nombre']; 
    $alm->setnombre($nombre);
    $imgFile = $_FILES['foto']['name'];
    $tmp_dir = $_FILES['foto']['tmp_name'];
    $imgSize = $_FILES['foto']['size'];
    $upload_dir = '/var/www/html/Demo/Vista/fotos/'; // upload directory
 
   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
   
   // valid image extensions
   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
  
   // rename uploading image
   $userpic = rand(1000,1000000).".".$imgExt;
  
   if (move_uploaded_file($tmp_dir,$upload_dir.$userpic)){
 //echo "File is valid, and was successfully uploaded.\n";
} else {
   echo "Upload failed";
}    
    $alm->setfoto($userpic);

    $model->Insertdemo($alm);
    echo '<a href="Vistademo.php">Regresar</a>';

}
  

?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GuardarPersona</title>
<link type="text/css" media="all" rel="stylesheet" href="style.css">
</head>

<body>
<div class="display">
<form action="" method="post" name="insertform" enctype="multipart/form-data">
<p>
  <label for="name" id="preinput"> Nombres : </label>
  <input type="text" name="nombre" required placeholder="Enter your name" id="inputid"/>
</p>
<p><label class="control-label">Foto:</label></td>
        <td><input class="input-group" type="file" name="foto" accept="fotos/*" /></p>
   
<p>
 <input type="submit" name="senddemo" value="Guardar" id="inputid"  />
</p>
</form>
</div>

</body>
</html>
