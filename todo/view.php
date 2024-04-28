<?php
include "../connect.php" ;
$id = FilterRequest ("id");
$stmt = $con->prepare(

"SELECT * FROM todo "
);

//$stmt->execute();
$stmt->execute(
    array(
       // $id
        )
);
$data= $stmt->fetchAll(PDO::FETCH_ASSOC);
$count = $stmt->rowCount();


if ($count > 0) {
    echo json_encode(array("status" => "success", "data" => $data));
} else {
    echo json_encode(array("status" => "Fail", "error" => "No data found for user ID: $id"));
}


?>