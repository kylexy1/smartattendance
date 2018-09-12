<?php
$username="root";
$password="";

$conn = new PDO('mysql:host=localhost;dbname=smartattendancesystem', $username, $password);

$sql="SELECT  * from user ORDER BY id DESC";
$st=$conn->query($sql);

$sql2="SELECT  * from events ORDER BY id DESC";
$st2=$conn->query($sql2);

$sql4="SELECT  * from attendances ORDER BY id DESC";
$st4=$conn->query($sql4);

$sql5="SELECT  * from attendants ORDER BY id DESC";
$st5=$conn->query($sql5);

function getAttendant($id){
	$username="root";
	$password="";
	$conn = new PDO('mysql:host=localhost;dbname=smartattendancesystem', $username, $password);
	foreach ($conn->query("SELECT * FROM attendants WHERE id=$id") as $key => $value) {
	 	return $value;
	 } 
}

function getEvent($id){
	$username="root";
	$password="";
	$conn = new PDO('mysql:host=localhost;dbname=smartattendancesystem', $username, $password);
	foreach ($conn->query("SELECT * FROM events WHERE id=$id") as $key => $value) {
	 	return $value[1];
	 } 
}