<?php
include "../connect.php" ;
include_once "../function.php"; // Include the file once

$name = FilterRequest("name"); 
$time = FilterRequest("time");
$date = FilterRequest("date");

$stmt = $con->prepare(
    "INSERT INTO `todo`( `name`, `time`, `date` )
     VALUES (?,?,?)"
);

$stmt->execute(array( $name , $time , $date));

$count = $stmt->rowCount();

if($count >0){
    echo json_encode(array("status"=>"success")) ;
} else {
    echo json_encode(array("status"=> "Fail"));
}
?>
