<?php


//Aqui se toman los datos del usuario que se registro y
// se insertan en la BD

// Include Database, descomentalo o agraga la extencion donde esta la conexion
// include("database.php");


$nombreReg=$_POST['nombreReg'];
$correoReg=$_POST['correoReg'];
$passwordReg=$_POST['passReg'];
$fotoPerfil=$_POST['fotoPerfil'];

$query="insert into usuarios (nombreCompleto,correo,password,fotoPerfil)
values('$nombreReg','$correoReg','$passwordReg','$fotoPerfil')";

if($result=mysqli_query($con,$query)){
  echo "<script> alert('Registro correcto')</script>";
  header("Location: registrarse.php");
}
else {
  echo "<script> alert('Registro Fallido')</script>";
  header("Location: registrarse.php");
}





 ?>
