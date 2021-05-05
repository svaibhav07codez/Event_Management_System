<?php 
if (!session_id()) {
	session_start();
} 
include_once 'db.php';

$userId=$_SESSION['user'];

//Reducing seats
$eventId=$_SESSION['eventId'];
$eventIdentity=$conn->query("select * from eventlist where eventId=$eventId;");
$row=$eventIdentity->fetch_object();

$no_of_tickets=$_POST['seats'];
$newSeatCount=($row->seats)-($no_of_tickets);
$conn->query("update eventlist set seats=$newSeatCount where eventId=$eventId;");

//Checking and assigning unique_id
while(1){
$unique_id=rand(10000000,99999999);
$check=$conn->query("select * from booked_tickets where UniqueId=$unique_id;");
if($check->num_rows == 0)
	{
		break;
	}
}

//Updating Booked tickets table
$conn->query("insert into booked_tickets(event_name,UniqueId,no_of_tickets,userId) values('$row->Name',$unique_id,$no_of_tickets,$userId);");

?>
