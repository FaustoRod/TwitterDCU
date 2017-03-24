<?php
include("database.php");

session_start();

//Se habilita la sesion y al digitar el Usuario(correo) y la contrasena en el login

if($_SERVER["REQUEST_METHOD"]=="POST"){
  $miUsuario= mysqli_real_escape_string($con,$_POST['user']);  //Se toma el usuario del Submit, ya tienen los nombres de los botones.
  $miPass= mysqli_real_escape_string($con,$_POST['pass']);  //Se toma la pass del Submit
  $query= "select id from usuarios where user= '$miUsuario' and password='$miPass'"; // Se llama el id del usuario que coincida con esos.
  $result= mysqli_query($con,$query);
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
  $active= $row['active'];  //La verdad no se en que se utiliza
  $count=mysqli_num_rows($result);
  if($count == 1){

    $_SESSION['login_user']=$miUsuario;  //Aqui se almacena el correo del usuario
    header("Location: inicio.php"); //Te envia para la pagina principal luego de validar al usuario
  }
  else{
    header("Location: index.php"); //Si las credenciales no coinciden te devuelve al login
    echo "<script> alert('Nombre de usuario o Password invalido'); </scrip>";
  }
}

?>
