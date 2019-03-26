<?php
include '../Admin-config/connection.php';
include '../Admin-controllers/controller.php';
if(isset($_POST['login-sub'])){
  $username=$_POST['username'];
  $pwd=$_POST['pwd'];
  $login=LOGIN($username,$pwd);
}
else{
  echo 'error';
}


 ?>
