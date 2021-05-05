<?php 
if (!session_id()) {
	session_start();
} 
include 'db.php';
if (empty($_SESSION['user'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ticket</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<!-- css files -->
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/customerPanel.css">
	<!--<link href="bootstrap/bootstrap.min.css" rel='stylesheet' type='text/css' />-->


</head>
<body>
	<?php include_once 'header.php'; ?>
	<div class="container">
	<div class="row">
		<div class="col-md-12" >
			<h3>
          <?php 
          //movie details
          $eventId=$_POST['eventId'];	
          $_SESSION['eventId']=$eventId;
          $res=$conn->query("select * from eventlist where eventId=$eventId;");
          $row=$res->fetch_object();
          echo "".$row->Name;
          ?>
			</h3>
					<div class="row">
						<div class="col-md-4 col-lg-4 ">
							<img alt="User Pic" src=<?php echo '"uploadimages/'.$row->image.'"';?> class=" img-responsive movie_pic"> 
						</div>
						<div class=" col-md-8 col-lg-8 "> 
							<table class="table table-user-information">
								<tbody>
									<tr>
										<td><strong>Event Name </strong></td>
										<td><?php echo "".$row->Name;?> </td>
									</tr>
										<tr>
											<td><strong>Description</strong></td>
											<td><?php echo "".$row->Description;	?> </td>
										</tr>
										<tr>
											<td><strong>Price(per ticket)</strong></td>
											<td><?php echo "Rs ".$row->price;?> </td>
										</tr>
                    
										<form name="ticket_submit" action="ticketConfirmation.php" method="post" onsubmit="return chk_seats()" >
										<tr>
											<td><strong>No. of tickets</strong></td>
											<td><input class="boxStyle" type="number" name="no_of_tickets"></td>
										</tr>
                    					<input type='hidden' name='total_seats' value=<?php echo"".$row->seats;?>>
										<tr>									
											<td colspan="2" width="100%">
												<input class="btn btn-primary btn-xs btn-block" type="submit" name="submit" value="Request For Ticket">
											</td>
										</tr>

										</form>
								</tbody>
							</table>

						</div>
					</div>
				</div>

				</div>

			</div>
		</body>

</html>