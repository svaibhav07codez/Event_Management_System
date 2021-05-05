<?php 
if (!session_id()) {
	session_start();
} 
include_once 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Bootstrap core CSS -->
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/main.js"></script>
</head>
<body>


	<!-- header-section-starts -->

	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="#">BookMyEvent</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="customerPage.php">Home</a>
        </li>
		<li class="nav-item">
            <a class="nav-link" href="profile.php">My Orders</a>
        </li>

    </ul>

		<ul class="navbar-nav ml-auto">

		<li><button id="login_btn" style="display:inline;" type="button" class="btn btn-info btn-round" onclick="openLoginModal();">
		Login </button>
		</li>
		<li>
		<button id="logout_btn" style="display:none;" type="button" class="btn btn-info btn-round" onclick="window.location.href='logout.php';">
		Logout </button>
		</li>

		<?php 
				if (!empty($_SESSION['user'])) {
					$userId=$_SESSION['user'];
					$res=$conn->query("select * from user where userId='$userId';");
					$row=$res->fetch_object();
					echo "<li class='navbar-text' id='username'>".strtoupper($row->userName)."</li>";
					echo "<script type='text/javascript'> chg_to_logout(); </script>"; 
				}
		?>
		
		</ul>
		</div>
	</nav>
		
</body>
</html>


