<?php
// Autor: Sergio Gómez <sergio@uco.es>
<<<<<<< HEAD
require('HolaMundo.php');

print "Introduce tu nombre:";
$nombre = trim(fgets(STDIN));
=======
// El nombre por defecto es Mundo
require('HolaMundo.php');

$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
>>>>>>> b7d97e6 (hola usa la clase HolaMundo)
print new HolaMundo($nombre);
?>