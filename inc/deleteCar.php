<?php
/**
 * Created by PhpStorm.
 * User: Timelord
 * Date: 28.03.2017
 * Time: 4:24
 */

$conn = mysqli_connect("localhost", "root", "", "database", "3306", "ini_get('mysqli.default_socket')");

$car_id = $_POST ['car_id'];
$model = $_POST ['model'];
$mileage = $_POST ['mileage'];
$engine_number = $_POST ['engine_number'];
$color = $_POST ['color'];
$year = $_POST ['year'];


if ($car_id == '' && $model == '' && $mileage == '' && $engine_number == '' && $color == '' && $year == '') {
    echo "Write the some fields!";
} else {
    if (mysqli_query($conn, "DELETE FROM `cars` WHERE car_id LIKE '$car_id' or model LIKE '$model' or mileage LIKE '$mileage' or engine_number LIKE '$engine_number' or color like '$color' or year like '$year';")) {
        echo "Deletion Successful";
    } else echo "Deletion failed";
}