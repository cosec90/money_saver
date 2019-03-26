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
  <section class="landing-sec">
    <div class="col-md-6">
      <div class="row">
        <h3 class="main-heading">Welcome to PickPocket</h3>
        <div class="login-cnt">
          <form class="login-form" action="../Admin-modules/sign_up_mod.php" method="POST">
              <div class="form-group">
                  <input type="email" class="form-control form-input" id="email" placeholder="Enter email" name="email" required>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control form-input" id="pwd" placeholder="Enter username" name="username" required>
              </div>
              <div class="form-group">
                  <input type="password" class="form-control form-input" id="pwd" placeholder="Enter password" name="pwd" required>
              </div>
              <div class="form-group">
                  <input type="password" class="form-control form-input" id="pwd" placeholder="Confirm password" name="confirm_pwd" required>
              </div>
              <button type="submit" class="btn submit-button" name="signup-sub">Sign up</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</html>
