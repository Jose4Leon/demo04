<?php
include ('conexion.php');

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$instruccionSQL = $db->prepare("INSERT INTO usuario (usuario,clave) VALUES('$usuario','$clave')");
$instruccionSQL->execute();
echo '<script>window.location="index.php"; </script>';
?>