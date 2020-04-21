<?php
  session_start();
  $error = "";
  if(isset($_SESSION['crystal-admin-login'])){
    header('location:index.php');
  }

  if(isset($_POST['signin'])){

    $res = "";

    $ussername = $_POST['username'];
    $password = $_POST['password'];
    require_once('../connect.php');
    $result = $conn->prepare("SELECT * FROM users WHERE usermail = '$ussername' AND userpasword = '$password'");
    $result->execute();
    $count = 0;

    for($i=0; $row = $result->fetch(); $i++){
      $count++;
    }
    if($count > 0){
      $_SESSION['crystal-admin-login'] = $ussername;
      header('location:index.php');
    }else{
      $res = "divCls";
      $error = "User name or Password incorrect.";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Crystal Sign in</title>
  <link rel="icon" href="assets/img/favicon.png">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Sign in Form with Facebook and Twitter Buttons</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>
  <style type="text/css">
    .login-form {
      width: 385px;
      margin: 30px auto;
    }

    .login-form form {
      margin-bottom: 15px;
      background: #f7f7f7;
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      padding: 30px;
    }

    .login-form h2 {
      margin: 0 0 15px;
    }

    .form-control,
    .login-btn {
      min-height: 38px;
      border-radius: 2px;
    }

    .input-group-addon .fa {
      font-size: 18px;
    }

    .login-btn {
  
      font-size: 15px;
      font-weight: bold;
    }

    .social-btn .btn {
      border: none;
      margin: 10px 3px 0;
      opacity: 1;
    }

    .social-btn .btn:hover {
      opacity: 0.9;
    }

    .social-btn .btn-primary {
      background: #507cc0;
    }

    .social-btn .btn-info {
      background: #64ccf1;
    }

    .social-btn .btn-danger {
      background: #df4930;
    }

    .or-seperator {
      margin-top: 20px;
      text-align: center;
      border-top: 1px solid #ccc;
    }

    .or-seperator i {
      padding: 0 10px;
      background: #f7f7f7;
      position: relative;
      top: -11px;
      z-index: 1;
    }
    .divCls {
      border: red;
      border-style: solid;
    outline-color: red;
    /* also need animation and -moz-animation */
    -webkit-animation: shake .5s linear;
}
/* also need keyframes and -moz-keyframes */
 @-webkit-keyframes shake {
    8%, 41% {
        -webkit-transform: translateX(-10px);
    }
    25%, 58% {
        -webkit-transform: translateX(10px);
    }
    75% {
        -webkit-transform: translateX(-5px);
    }
    92% {
        -webkit-transform: translateX(5px);
    }
    0%, 100% {
        -webkit-transform: translateX(0);
    }
}

  </style>
</head>

<body style="background: #007bff;">
  <div class="login-form" style="margin-top: 13%;">
    <center><img src="assets/img/logo-white.png">

    </center>

    <form action="signin.php" method="post" class="<?php echo $res; ?>">
  
      <h2 class="text-center">Admin Sign in</h2>
      <center><div style="color:red;">
          <?php
            if($error != ""){
              echo $error;
              echo "</br>";
            }
          ?>
      </div></center>
      <div class="form-group" >
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input type="text" class="form-control" name="username" placeholder="Username" required="required">
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
      </div>
      <div class="form-group">
        <button type="submit" name="signin" class="btn btn-primary login-btn btn-block">Sign in</button>
      </div>
      <div class="clearfix">
        <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
        <a href="#" class="pull-right">Forgot Password?</a>
      </div>
    </form>
  </div>
</body>

</html>
