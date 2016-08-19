
<?php
// Inicializar la sesión.
// Si está usando session_name("algo"), ¡no lo olvide ahora!
session_start();

// Finalmente, destruir la sesión.
session_destroy();

echo '<br /><a href="login.php">Inicio</a>';

?>

