<?php
$username="root";
$password="";

$conn = mysqli_connect("localhost",$username,$password,"smartattendancesystem");
$att = $_POST['card_number'];
if(mysqli_query($conn, "INSERT INTO attendances(attendant,event_id) VALUES('$att',1)")){
	$row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM attendants WHERE card_id='$att' LIMIT 1"));
	$resp['action'] = 1;
	$resp['message'] = $row['first_name'] ." Successfully attended";
}
else{
	$resp['action'] = 0;
	$resp['message'] = "not registrerd error occured";	
}
echo json_encode($resp);
?>