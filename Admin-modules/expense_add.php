<?php
include '../Admin-config/connection.php';
include '../Admin-controllers/controller.php';
if(isset($_POST['expense-sub'])){
  $money_spent=$_POST['money_spent'];
  $date_expense=$_POST['date_expense'];
  $expense_add= ADD_EXPENSE($money_spent,$date_expense);
}





 ?>
