<?php
/**
 * Created by PhpStorm.
 * User: aylos
 * Date: 5/7/2017
 * Time: 8:26 م
 */
include "../../include/phpscripts/DB.php";
$query = "SELECT * FROM CURRENCIES";
$select_currency = mysqli_query($mysqli, $query);
$array = array();
// look through query
while($row = mysqli_fetch_assoc($select_currency)){
    // add each row returned into an array
    $array[] = $row;
}
// debug:
echo json_encode($array);
//print_r($array); // show all array data