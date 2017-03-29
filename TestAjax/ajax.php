<?php
/**
 * Created by PhpStorm.
 * User: Timelord
 * Date: 28.03.2017
 * Time: 21:44
 */

if(!empty($_GET['query'])){
    $query = (string)$_GET['query'];
    $array = array();
    $request  = $db->query("SELECT `car_id`, `model` FROM `cars` WHERE `description` LIKE '%". $db->real_escape_string($query) . "%' OR `name` LIKE '%". $db->real_escape_string($query) . "%' LIMIT 0, 10");
    while($data =$db->fetch_assoc($request)){
        $array[] = $data['name'];
    }

    echo "['".implode("','", $array)."']";
}
exit();