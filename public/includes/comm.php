<?php
$username="root";
$password="";

$conn = new PDO('mysql:host=localhost;dbname=smartattendancesystem', $username, $password);

$sql="SELECT  * from user";
$st=$conn->query($sql);

$sql2="SELECT  * from events";
$st2=$conn->query($sql2);

$sql4="SELECT  * from attendances";
$st4=$conn->query($sql4);

$sql5="SELECT  * from attendants";
$st5=$conn->query($sql5);
