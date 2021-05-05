<?php 
if (!session_id()) {
	session_start();
} 
include 'db.php';
include 'seatReduce.php';
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
<body>
	<?php include 'header.php';?>
	<h1 id="booked">Ticket(s) booked Sucessfully!!!</h1>
	<br>
	<a href="customerPage.php"><input type=button value='HOME'></a>
</body>
</html>