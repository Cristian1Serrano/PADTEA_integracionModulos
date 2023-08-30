<?php
require('lib/config.php');

$usuario = mysqli_real_escape_string($_POST['usuario']);
$comentario = mysqli_real_escape_string($_POST['comentario']);
$publicacion = mysqli_real_escape_string($_POST['publicacion']);

$insert = mysqli_query("INSERT INTO comentarios (usuario, comentario, fecha, publicacion) VALUES ('$usuario', '$comentario', now(), '$publicacion')");


$llamado = mysqli_query("SELECT * FROM publicaciones WHERE id_pub = '".$publicacion."'");
$ll = mysqli_fetch_array($llamado);

$usuario2 = mysqli_real_escape_string($ll['usuario']);

$insert2 = mysqli_query("INSERT INTO notificaciones (user1, user2, tipo, leido, fecha, id_pub) VALUES ('$usuario', '$usuario2', 'ha comentado', '0', now(), '$publicacion')");


?>