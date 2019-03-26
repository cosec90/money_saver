<?php
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
            <a href="../Admin-modules/sign-out.php" class="nav-link side-link"><h6 class="">Sign out</h6></a>
          </div>
      </div>
      <div class="col-md-10 right-main">
        <div class="upper-div">
          <h1 class="header">Dashboard</h1>
          <hr color=black>
        </div>
        <div class="main-inner">
          <div class="main-form-input">
            <form action="../Admin-modules/pocket_money.php" method="post">
                <div class="form-group">
                  <label>Enter monthly pocket money</label>
                  <input type="text" class="form-control" name="main_money">
                </div>
                <div class="form-group">
                  <label>Enter money to be saved</label>
                  <input type="text" class="form-control" name="main_money" required>
                </div>
              <button type="submit" class="btn submit-pocket" name="pocket-sub">Submit Money</button>
              <button type="submit" class="btn submit-pocket" name="pocket-sub-update">Update money</button>
            </form>
            <form action="../Admin-modules/pocket_money.php" method="post" class="fm">
                <div class="form-group">
                  <label>Enter money to be saved</label>
                  <input type="text" class="form-control" name="main_money" required>
                </div>
              <button type="submit" class="btn submit-pocket" name="save-money">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</html>
