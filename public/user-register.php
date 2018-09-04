
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php require_once("includes/head.php"); ?>
</head>
<?php
require_once("../web-config/config.php");
require_once("../web-config/database.php");
if (isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    if ($database->query("INSERT INTO user (fname,lname,username,password,active,level) VALUES ('$fname','$lname', '$username','$password','1','1')")){
        header("location:home.php");
    }
}
    ?>
<body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.php">
                        <h1 style="color: white">S.A.S Admin </h1>
                    </a>
                </div>
                <div class="login-form">
                    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
                    	<div class="form-group">
                            <label>First Name</label><span class="required-mark">*</span>
                            <input type="text" id="fname" name="fname" class="form-control" maxlength="255">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label><span class="required-mark">*</span>
                            <input type="text" id="lname" name="lname" class="form-control" maxlength="255">
                        </div>
                        
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email" class="form-control" maxlength="255">
                        </div>
                        
                        <div class="form-group">
                            <label>User Name</label><span class="required-mark">*</span>
                            <input type="text" name="email" class="form-control" maxlength="16">
                        </div>
                        
                        <div class="form-group">
                            <label>Password</label><span class="required-mark">*</span>
                            <input type="password" id="password" name="password" class="form-control" maxlength="40">
                        </div>
                       
                        <button type="submit" name="submit"  style="background: #343A40" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="index">Back</a></p>
                        </div>
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
