<?php
  include '../Admin-config/connection.php';
  session_start();
  if(!isset($_SESSION['user'])){
    header("Location: index.html");
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/main.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="cust_main">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 left-main">
          <h3 class="side-dash">PickPocket</h3>
          <hr color="black">
          <div class="in-main">
            <a href="expense_sheet.php" class="nav-link side-link"><h6 class="">Expense sheet</h6></a>
            <a href="main.php" class="nav-link side-link"><h6 class="">Update monthly budget</h6></a>
            <a href="expense.php" class="nav-link side-link"><h6 class="">Add expenses</h6></a>
            <a href="../Admin-modules/sign-out.php" class="nav-link side-link"><h6 class="">Sign out</h6></a>
          </div>
      </div>
      <div class="col-md-10 right-main">
        <div class="upper-div">
          <h1 class="header">Dashboard</h1>
          <hr color=black>
        </div>
        <div class="main-expense-output">
          <table class="table">
            <thead>
              <tr>
                <th>Date</th>
                <th>Amount</th>
              </tr>
          </thead>
      <tbody>
        <?php
          $query="SELECT * FROM user_transaction WHERE id=(SELECT id FROM user_login WHERE username='".$_SESSION['user']."')";
          $result=mysqli_query($con,$query);
          while($row=mysqli_fetch_assoc($result)){
          $date=$row['date_trans'];
          $amount=$row['amount'];
          echo "<tr>";
            echo "<td>$date</td>";
            echo "<td>$amount</td>";
          echo "</tr>";
          }
        ?>
    </tbody>
  </table>
  <div class="calculate">
      <button type="submit" class="btn submit-pocket-expense">Calculate balance sheet</button>
  </div>
    <div class="results">
      <h3>Total expenditure occured = <span id="total"></span></h3>
      <h3>Balance left = <span id="balance"></span></h3>
    </div>
  </div>
      </div>
    </div>
  </div>
</section>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</html>
<!-- <form action="../Admin-modules/expense_calculate.php" method="POST">
  <button type="submit" class="btn submit-pocket-expense" name="calc-submit">Calculate balance sheet</button>
</form> -->
