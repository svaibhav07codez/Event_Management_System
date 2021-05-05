<?php 
if (!session_id()) {
# code...
	session_start();
} 
include 'db.php';
if (!empty($_SESSION['user'])) {
  header("Location: customerPage.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  
  <!-- Bootstrap core CSS -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- css files -->
  <link href="css/style.css" rel="stylesheet">

</head>
<body style="background-image: url('images/bg.jpg');background-size:100%;">
  <?php include 'header.php'; ?>
  <div id="bg_index" style="height:800px" class="center title">
    <h1 style="font-size:80px;">Welcome to BookMyEvent</h1>
    <p>Exclusive events, priceless memories</p>
  </div >
  <div class="modal fade login" id="loginModal">
      <div class="modal-dialog login animated">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Login</h4>
          </div>

          <!-- login -->
          <div class="modal-body">  
            <div class="box">
              <div class="content">
                <div class="error"></div>
                <div class="form loginBox">
                  <form method="post" action="index.php" accept-charset="UTF-8">
                    
                    <input id="userName" class="form-control" type="text" placeholder="Username" name="Username">
                    <br>
                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                    <input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">
                  </form>
                </div>
              </div>
            </div>

            <!-- Registration -->

            <div class="box" id="RegistrationBox">
              <div class="content registerBox" style="display:none;">
                <div class="form">
                  <form method="post" html="{:multipart=>true}" data-remote="true" action="index.php" accept-charset="UTF-8">
                    <input id="registrationName" class="form-control" type="text" placeholder="username" name="username">
                    <br>
                    <input id="registrationPassword" class="form-control" type="password" placeholder="Password" name="password">
                    <br>
                    <input id="registrationPassword_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                    <br>
                    <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit" onclick=" RegistrationAjax(event)">
                  </form>
                </div>


              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="forgot login-footer">
              <span>Looking to 
                <a href="javascript: showRegisterForm();">create an account</a>
                ?</span>
              </div>
              <div class="forgot register-footer" style="display:none">
                <span>Already have an account?</span>
                <a href="javascript: showLoginForm();">Login</a>
              </div>
            </div>        
          </div>
        </div>
      </div>
    
    <?php include 'footer.php'; ?>

    <!-- Bootstrap core JavaScript -->
    <script src="js/main.js"></script>
</body>
</html>


<!--
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BookMyEvent</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="body">
        <br><br><br><br><br><br><br><br><br>
        <div class="beg">
            <h1>WELCOME TO BOOKMYEVENT!</h1>
            <p>Exclusive events, priceless memories</p>
        </div>
    </body>
</html>
-->