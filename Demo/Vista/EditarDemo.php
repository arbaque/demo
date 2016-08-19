<?php    
session_start();
echo 'Bienvenido a la página '.$_SESSION['usuario'];
echo '<br /><a href="destruirsession.php">Cerrar Session</a>';

require_once '../ClassColector/demoColector.php';
require_once '../Colector/demo.php';


// Logica
$alm = new demo();
$model = new demoColector();

if(isset($_POST['updatedemo'])){ 
$id = $_POST['id'];
 $nombre = $_POST['nombre'];
 $fotoaux = $_POST['fotoaux'];  

$alm->setid_demo($id);
    $alm->setnombre($nombre);

if(isset($_FILES['foto'])) {
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
   echo $userpic = $fotoaux; //"Upload failed";
} 

}//fin de subir foto   
else {
   echo $userpic = $fotoaux;
}
    $alm->setfoto($userpic);

    $model->updatedemo($alm);
    echo '<a href="Vistademo.php">Regresar</a>';

}
  
?>

<?php
require_once '../ClassColector/demoColector.php';
require_once '../Colector/demo.php';

// Logica
$alm = new demo();
$model = new demoColector();
$alm  = $model->ListarDEMOespecifico($_GET['id']);
//var_dump( $alm );
$nombre =$alm[0]->getNombre();
$foto =$alm[0]->getfoto();



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
  <input type="text" name="nombre" required placeholder="Enter your name" id="inputid" value=<?php echo $nombre;?> />
</p>
<p>
<label class="control-label">Foto:</label></td>
        <td><input class="input-group" type="file" name="foto" accept="fotos/*" value=<?php $foto;?> />
<img src="fotos/<?php echo $foto; ?>" class="img-rounded" width="50px" height="50px" />          
</p>
<p>
  <input type="submit" name="updatedemo" value="Actualizar" id="inputid"  />
</p>
<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
<input type="hidden" name="fotoaux" value=<?php echo $foto; ?>>
</form>
</div>

</body>
</html>
