
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
    $name = $_POST['event-name'];
    $start = $_POST['event-startdate'];
    $end = $_POST['event-enddate'];

    if ($database->query("INSERT INTO events (name,created_at,date) VALUES ('$name','$start','$end')")){
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
                        <h1 style="color: white">Add new Event </h1>
                    </a>
                </div>
                <div class="login-form">
                    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
                    	<div class="form-group">
                            <label>Event Name</label><span class="required-mark">*</span>
                            <input type="text" id="fname" name="event-name" class="form-control" maxlength="255">
                        </div>
                        <div class="form-group">
                            <label>Event Start Date</label><span class="required-mark">*</span>
                            <input type="date" id="lname" name="event-startdate" class="form-control" maxlength="255">
                        </div>
                        
                        <div class="form-group">
                            <label>EVent End-date</label>
                            <input type="date" name="event-enddate" class="form-control" maxlength="255">
                        </div>
                       
                        <button type="submit" name="submit"  style="background: #343A40" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
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
