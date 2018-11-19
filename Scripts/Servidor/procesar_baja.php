<?php
include("conexion.php");
$host = "127.0.0.1"; //Local Host
$usuario = "root"; //NO LO HAGA COMPA!!!
$password = "";
$bd = "bd_escuela";

$enlace = conexion($host, $usuario, $password, $bd);

$nc=$_POST['num_controlE'];

$sql="DELETE FROM alumnos WHERE Num_control='$nc'";
//var_dump($sql);
$res = mysqli_query($enlace, $sql);
if (mysqli_query($enlace,$sql)) {
  cerrarConexion($enlace);

}
header("Location:../../index.php");
 ?>
