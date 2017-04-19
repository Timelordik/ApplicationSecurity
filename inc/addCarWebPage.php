<?php
session_start();

if (!isset($_SESSION['user_session'])) {

echo "You didn`t authorized or session expired
				<a href=\"../index.php\" >Login</a>";

exit();
}
$oturumOmru = 1*20; // Oturum süresi 20 sn.

if (isset($_SESSION['baslangicZamani']))
{
    $oturumSuresi = time() - $_SESSION['baslangicZamani'];
    if ($oturumSuresi > $oturumOmru)
    {
        header("Location: http://localhost/authentification/index.php");
        echo "The session expired";
    }
}
$_SESSION['baslangicZamani'] = time();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Car</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Add Car</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
    <link href="/css/style.css" rel="stylesheet" media="screen">

</head>

<body>


<h3 align="center">
    <form id="myForm" action="addCar.php" method="post" >
        ID: <input type="number" name="car_id"/><br/> <hr>
        Model: <input type="text" name="model"/><br/><hr>
        Mileage: <input type="number" name="mileage"/><br/><hr>
        Engine Number: <input type="text" name="engine_number"/><br/><hr>
        Color: <input type="text" name="color"/><br/><hr>
        Year: <input type="" name="year"/><br/><hr>

        <button id = "sub">Add Car</button>
    </form>

    <form href="/authentification/index.php" action="/authentification/index.php">
        <button href="/authentification/index.php">Home</button>
    </form>




</h3>
<script src=" jquery/1.12.0/jquery.min.js"></script>

</body>
</html>