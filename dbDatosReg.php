<?php


//Aqui se toman los datos del usuario que se registro y
// se insertan en la BD

// Include Database, descomentalo o agraga la extencion donde esta la conexion
 include("database.php");


$nombreReg=$_POST['nombreReg'];
$apellidoReg=$_POST['apellidoReg'];
$correoReg=$_POST['correoReg'];
$passwordReg=$_POST['passReg'];
$nombreUsr=$_POST['usuarioReg'];


  $target = "Assets/".basename($_FILES['fotoPerfil']['name']);
	$imagen = $_FILES['fotoPerfil']['name'];

	move_uploaded_file($_FILES['fotoPerfil']['tmp_name'], $target);


$query="insert into usuarios (nombre,apellido,correo,usuario,password,fotoPerfil)
values('$nombreReg','$apellidoReg','$correoReg','$nombreUsr','$passwordReg','$imagen')";

if($result=mysqli_query($con,$query)){
  echo "<script> alert('Registro correcto')</script>";
  header("Location: index.php");
}
else {
  echo "error ";
  header("Location: registrarse.php");
}





 ?>
