<?php
session_start();

function LOGIN($user,$password){
  include '../Admin-config/connection.php';
  $query="SELECT * FROM `user_login` WHERE username='$user' or password='$password'";
  $result=mysqli_query($con,$query);
  $count=mysqli_num_rows($result);
  if($count == 1){
    $_SESSION['user']=$user;
    check();
  }
  else{
    echo 'fail';
  }
}
function check(){
  include '../Admin-config/connection.php';
  $query="SELECT * FROM pick_money WHERE id=(SELECT id FROM user_login WHERE username='".$_SESSION['user']."') ";
  $result=mysqli_query($con,$query);
  $count=mysqli_num_rows($result);
  if($count == 1){
    header("Location: ../views/expense.php");
  }
  else{
      header("Location: ../views/main.php");
  }
}
function SIGN_UP($user,$password,$mail){
  include '../Admin-config/connection.php';
  $query="INSERT into user_login VALUES (not null,'$mail','$user','$password')";
  $result=mysqli_query($con,$query);
  header("Location:../views/index.html");
}
function INITIAL_MONEY($money){
  include '../Admin-config/connection.php';
  $query="INSERT into pick_money values (not null,(SELECT id from user_login where username='".$_SESSION['user']."'),'$money')";
  $result=mysqli_query($con,$query);
  header("Location: ../views/expense.php");
}
function UPDATE_MONEY($main_money){
  include '../Admin-config/connection.php';
  $query="UPDATE pick_money SET main_amount='$main_money'where id=(Select id from user_login where username='".$_SESSION['user']."')";
  $result=mysqli_query($con,$query);
  header("Location: ../views/expense.php");
}
function ADD_EXPENSE($money,$date){
  include '../Admin-config/connection.php';
  $query="INSERT into user_transaction values (not null,(SELECT id from user_login where username='".$_SESSION['user']."'),'$money','$date',null)";
  $result=mysqli_query($con,$query);
  header("Location: ../views/expense.php?success");
}
function CALCULATE_EXP(){
    include '../Admin-config/connection.php';
    $query="SELECT sum(amount) as total from user_transaction";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_assoc($result)){
      $expense=$row['total'];
    }
    return $expense;
}
function MONEY(){
  include '../Admin-config/connection.php';
  $query="SELECT main_amount FROM pick_money WHERE id=(SELECT id FROM user_login WHERE username='".$_SESSION['user']."')";
  $result=mysqli_query($con,$query);
  while($row=mysqli_fetch_assoc($result)){
    $main_money=$row['main_amount'];
  }
  return $main_money;
}
?>
