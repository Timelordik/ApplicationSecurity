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
    <title>Car Removing</title>
</head>
<body>

<h3 align="center">
    <form id="myForm" action="deleteCar.php" method="post" >
        ID: <input type="number" name="car_id"/><br/> <hr>
        Model: <input type="text" name="model"/><br/><hr>
        Mileage: <input type="number" name="mileage"/><br/><hr>
        Engine Number: <input type="text" name="engine_number"/><br/><hr>
        Color: <input type="text" name="color"/><br/><hr>
        Year: <input type="" name="year"/><br/><hr>

        <button id = "sub">Delete Car</button>



    </form>
</h3>

</body>
</html>