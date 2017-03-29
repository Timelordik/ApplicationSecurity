<?php
/**
 * Created by PhpStorm.
 * User: Timelord
 * Date: 28.03.2017
 * Time: 4:20
 */


$conn = mysqli_connect("localhost", "root", "", "database", "3306", "ini_get('mysqli.default_socket')");

$car_id = $_POST ['car_id'];
$model = $_POST ['model'];
$mileage = $_POST ['mileage'];
$engine_number = $_POST ['engine_number'];
$color = $_POST ['color'];
$year = $_POST ['year'];

if ($car_id == '' || $model == '' || $mileage == '' || $engine_number == '' || $color == '' || $year == '') {
    echo "Write the whole fields!";
} else {

    if (mysqli_query($conn, "INSERT INTO cars VALUES ('$car_id', '$model', '$mileage', '$engine_number', '$color', '$year')")) {
        echo "Successful";
    } else echo "Insertion failed. This id is already exist";
}
?>
