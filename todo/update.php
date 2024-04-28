<?php
include "../connect.php" ;
include_once "../function.php"; // Include the file once

$id = FilterRequest("id"); 
$name = FilterRequest("name"); 
$time = FilterRequest("time");
$date = FilterRequest("date");


$stmt = $con->prepare(
    "UPDATE `todo` SET `name`=?, `due_time`=?, `due_date`=? WHERE `id`=?"
);

$stmt->execute(array($name, $time, $date, $id));



$count = $stmt->rowCount();

if($count >0){
    echo json_encode(array("status"=>"success")) ;
} else {
    echo json_encode(array("status"=> "Fail"));
}
?>
