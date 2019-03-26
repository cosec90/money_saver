<?php
include '../Admin-config/connection.php';
include '../Admin-controllers/controller.php';

if(isset($_POST['signup-sub'])){
  $username=$_POST['username'];
  $pwd=$_POST['pwd'];
  $email=$_POST['email'];
  $confirm=$_POST['confirm_pwd'];
  if($pwd == $confirm){
    $sign= SIGN_UP($username,$pwd,$email);
  }
  else{
    header("Location: ../views/sign_up.php?use=$username&pass=$email");
  }
}









 ?>
