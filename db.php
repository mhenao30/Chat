<?php
$servidor ="localhost";
$nombre = "id2487732_mghenao95";
$password = "mahl182332";
$db = "id2487732_chatm";

$conexion = new mysqli($servidor, $nombre, $password, $db);
function formatearfecha($fecha){
    return date('g:i a', strtotime($fecha));
}
?>
 