<?php
include '../Admin-config/connection.php';
include '../Admin-controllers/controller.php';

  $calculate= CALCULATE_EXP();
  $money= MONEY();

  $remaining= $money -$calculate ;
  echo $remaining;
 ?>
