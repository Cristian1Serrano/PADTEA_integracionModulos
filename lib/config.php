<?php
$host = "localhost:3310";
$dbuser = "root";
$dbpwd = "";
$db = "padtea";

$connect = mysqli_connect($host, $dbuser, $dbpwd, $db);
if (!$connect) {
    echo("No se ha conectado a la base de datos");
} else {
    $select = mysqli_select_db($connect, $db);
}
?>