<?php
require_once("../web-config/config.php");
$conn = mysqli_connect(DB_SERVE, DB_USER, DB_PASS,DB_NAME);
$reason = $_POST['reason'];
$why = $_POST['why'];
$qwery = mysqli_query($conn, "INSERT INTO messages(response,summary) VALUES('$reason', '$why')");
if ($qwery)
    $resp['response'] = "ok";
else
    $resp['response'] = "error";