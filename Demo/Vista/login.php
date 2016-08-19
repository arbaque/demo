 <?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Taller</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Datots Personales</h2>
<form name="formulario" method="post" action="Admin.php">
    <div class="form-group" <?php  if (isset($_SESSION['usuario'])){
echo "style='display:none;'";
} else {
 echo "style='display:block;'"; } ?>   >
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Enter email">
    </div>
    <div class="form-group" <?php  if (isset($_SESSION['usuario'])){
echo "style='display:none;'";
} else {
 echo "style='display:block;'"; } ?>>
      <label for="Clave">Clave:</label>
      <input type="clave"  name="clave" class="form-control" id="clave" placeholder="Enter password">
    </div>
<div <?php  if (isset($_SESSION['usuario'])){
echo "style='display:none;'";
} else {
 echo "style='display:block;'"; } ?>>
    <button type="submit" class="btn btn-default">Enviar</button>
</div>
<div>
      <label for="hola">Hola Mundo <?php  if (isset($_SESSION['usuario'])){
        print_r($_SESSION["usuario"]);
        echo '<br /><a href="destruirsession.php">Cerrar Session</a>';
}   ?> </label>
</div>
  </form>
</div>

</body>
</html>
