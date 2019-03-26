<?php
include '../Admin-config/connection.php';
include '../Admin-controllers/controller.php';
  if(isset($_POST['pocket-sub'])){
    $main=$_POST['main_money'];
    $initial_money= INITIAL_MONEY($main);
  }
  else{
    header("Location ..views/main.php");
  }

  if(isset($_POST['pocket-sub-update'])){
      $update_main=$_POST['main_money'];
      $update_money= UPDATE_MONEY($update_main);
  }
  else{
    header("Location ..views/main.php");
  }
 ?>
