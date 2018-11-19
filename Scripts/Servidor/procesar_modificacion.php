<?php
include("conexion.php");
$host = "127.0.0.1"; //Local Host
$usuario = "root"; //NO LO HAGA COMPA!!!
$password = "";
$bd = "bd_escuela";

$enlace = conexion($host, $usuario, $password, $bd);
var_dump($enlace);

$num_control = $_POST['num_control'];
var_dump($num_control);
$nombre = $_POST['nombre'];
$primer_ap = $_POST['primer_ap'];
$segundo_ap = $_POST['segundo_ap'];
$edad = $_POST['edad'];
$semestre = $_POST['semestre'];
$carrera = $_POST['carrera'];
//var_dump($carrera);

  $sql ="UPDATE alumnos SET Nombre_Alumno='$nombre', Primer_Ap_Alumno='$primer_ap',Segundo_Ap_Alumno='$segundo_ap',
                            Edad_Alumno = $edad, Semestre=$semestre, Carrera = '$carrera' WHERE Num_Control='$num_control'";
  var_dump($sql);
  $res = mysqli_query($enlace, $sql);
  cerrarConexion($enlace);

header("Location:../../index.php");
 ?>
