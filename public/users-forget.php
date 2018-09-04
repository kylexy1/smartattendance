<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>S.A.S Admin System</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<?php
require_once("../web-config/config.php");
require_once("../web-config/database.php");
session_start();

if (isset($_POST['submit'])){
    $c_pass = $_POST['c-pass'];
    $n_pass = $_POST['n-pass'];
    $n_pass2 = $_POST['n-pass2'];
    $id = $_SESSION['id'];
    $q = $database->query("SELECT password FROM user where id=$id");
    $row = $database->fetch_array($q);
    if ($n_pass === $n_pass2) {
	  		$password = md5($n_pass2);	  
	    if (md5($c_pass) === $row['password']) {
	    	$database->query("UPDATE user SET password='$password' WHERE id=$id");
	    	header("location:home.php");
	    }
	   else{
				header("location:users-forget.php?error=invalid current password");
		}
	
	}
	else{
		header("location:users-forget.php?error=passwords don't match");
	}
}
    ?>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="">
                        <h1 style="color: white">S.A.S Admin</h1>
                    </a>
                </div>
                <div class="login-form">
                    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
                        <div class="form-group">
                            <label>Current Password</label>
                            <input type="password" class="form-control" name="c-pass" placeholder="Old Password">
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" class="form-control" name="n-pass" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <label>Repeat Password</label>
                            <input type="password" class="form-control" name="n-pass2" placeholder="New Password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-15" name="submit" style="background: #343A40">Submit</button>
                        <?php if (isset($_GET['error'])) {?>
                        	<span class="error" style="color: red"><?=$_GET['error'];?></span>
                       <?php  }	?>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
