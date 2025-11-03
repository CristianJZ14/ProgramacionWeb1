<?php

 //local
$host = 'sql100.infinityfree.com';
$user = 'if0_40289094';  // Cambia esto si tu usuario de MySQL es diferente
$password = 'wh7OrAXqz0kyDG';  // Deja vacío si no tienes contraseña configurada
$dbname = 'if0_40289094_ico';

/*
//hosting
    $host = 'sql113.infinityfree.com';
    $user = 'if0_40185846';  
    $password = 'nEICu24MeqneFB';
    $dbname = 'if0_40185846_ico';
*/



$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die('Error en la conexión: ' . $conn->connect_error);
}
?>
