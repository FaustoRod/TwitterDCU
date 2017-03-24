<?php

//Aqui se destruye la sesion cuando el usuario hace SingOut
  include("sessionForLogin.php"); //Se llama todo lo que se hizo en sessionForLogin
  session_start();

  //Se destruye la sesion!
  if(isset($_GET['logout'])){
    unset($_SESSION['login_user']);
    session_unset();
    session_destroy();
    header("Location:index.php");
    exit;
  }




 ?>
