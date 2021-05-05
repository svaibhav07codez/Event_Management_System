<?php 
if (!session_id()) {
	# code...
	session_start();
  
if (empty($_SESSION['user'])) {
  header("Location: index.php");
}
}
include 'db.php';

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link href="css/style.css" rel="stylesheet">

</head>
<body>
  <?php 
    include 'header.php';
    $userId=$_SESSION['user'];
    $res=$conn->query("select * from user where userId='$userId';");
		$row=$res->fetch_object();
	?>
	<div class="container">
		<h2 style="text-align:center">
      
      <?php 
      echo "Hello,".$row->userName;
      ?>

    </h2>
    <h3 style="text-align:center">Events booked/Orders</h3>
      <table class="table table-user-information" align=center>
      <thead>
        <tr>
          <th>Event</th>
          <th>No. of Tickets</th>
          <th>Unique order ID</th>
        </tr>
      </thead>
      <tbody> 
        <?php
              $tickets=$conn->query("select * from booked_tickets where userId=$userId;");
            while ($tickets_obj=$tickets->fetch_object()) {
            echo "
            <tr>
              <td>".$tickets_obj->event_name."</td>
              <td>".$tickets_obj->no_of_tickets."</td>
              <td>".$tickets_obj->UniqueId."</td>
            </tr>
            ";
            }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>