<?php
/**
 * Created by PhpStorm.
 * User: Timelord
 * Date: 28.03.2017
 * Time: 4:15
 */

$connect = mysqli_connect('localhost','root','','database')
or die('Could not connect to mysql server.' );

$term = strip_tags(substr($_POST['search_term'], 0, 100));
$term = mysqli_escape_string($connect, $term);

$sql = "select car_id, model, mileage, engine_number, color, year from cars where car_id like '%$term%' or model like '%$term%' or mileage like '%$term%' or engine_number like '%$term%' or color like '%$term%' or year like '%$term%' order by car_id asc";

$result = mysqli_query($connect,$sql);

$string = '';

if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_object($result)){
        $string .= $row->car_id."</b>. ";
        $string .= "<b>".$row->model."</b>,  ";
        $string .= "<b>Mileage: </b>".$row->mileage."</b>,  ";
        $string .= "<b>Engine Number: </b>".$row->engine_number."</b>,  ";
        $string .= "<b>Color: </b>".$row->color."</b>,  ";
        $string .= "<b>Year: </b>".$row->year."</b>;";
        $string .= "<br/>\n";
    }

}else{
    $string = "No matches!";
}

echo $string;
