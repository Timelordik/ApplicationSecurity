<?php
session_start();

if (!isset($_SESSION['user_session'])) {
    header("Location: index.php");
}

include_once 'dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_id=:uid");
$stmt->execute(array(":uid" => $_SESSION['user_session']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$expireAfter = 1;

//Check to see if our "last action" session
//variable has been set.
if(isset($_SESSION['last_action'])){

    //Figure out how many seconds have passed
    //since the user was last active.
    $secondsInactive = time() - $_SESSION['last_action'];

    //Convert our minutes into seconds.
    $expireAfterSeconds = $expireAfter * 20;

    //Check to see if they have been inactive for too long.
    if($secondsInactive >= $expireAfterSeconds){
        //User has been inactive for too long.
        //Kill their session.
        session_unset();
        session_destroy();
    }

}

//Assign the current timestamp as the user's
//latest activity
$_SESSION['last_action'] = time();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Login to the Car Shop</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="jquery-1.9.1.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
    <link href="style.css" rel="stylesheet" media="screen">

    <script src="jquery.js"></script>
    <script src="jquery-1.9.1.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</head>


<body>


<script type='text/javascript'>
    $(document).ready(function () {
        $("#search_results").slideUp();
        $("#search_button").click(function (e) {
            e.preventDefault();
            ajax_search();
        });
        $("#search_term").keyup(function (e) {
            e.preventDefault();
            ajax_search();
        });

    });

    function ajax_search() {
        $("#search_results").show();
        var search_val = $("#search_term").val();
        $.post("carSearch.php", {search_term: search_val}, function (data) {
            if (data.length > 0) {
                $("#search_results").html(data);
            }
        })
    }

</script>


<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://sabis.sakarya.edu.tr/tr/Login">Bilgisayar Muhendislik</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="http://localhost/authentification/inc/addCar.html">Add Car</a></li>
                <li><a href="http://localhost/authentification/inc/deleteCar.html">Remove Car</a></li>
                <li><a href="http://localhost/authentification/Rest/RestfulClient/1RestClient.html">Restful Testing</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $row['user_name']; ?>
                        &nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;View Profile</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
</nav>


<div class="body-container">

    <div class="container">
        <div class='alert alert-success'>
            <button class='close' data-dismiss='alert'>&times;</button>
            <strong>Hello <?php echo $row['user_name']; ?></strong>. Welcome to the Car Shop page.
        </div>
    </div>


    <h1 style="color: #2b669a" align="center">Car Search</h1>
    <form id="searchform" method="post">
        <div align="center">
            <label for="search_term">Search Car</label>
            <input type="text" name="search_term" id="search_term"/>
            <input type="submit" value="List all Cars" id="search_button"/>
        </div>
    </form>
    <div id="search_results"></div>

</body>
</html>