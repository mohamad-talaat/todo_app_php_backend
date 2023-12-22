<?php
include "../connect.php" ;
// notes_id   notes_title    notes_content   notes_user 
$userid = FilterRequest ("id");// هو انا هغير حاجه ف الملاحظة .. لا انا هعرضهم بس 


$stmt = $con->prepare(

"SELECT * FROM `notes` WHERE `notes_users` = ? "
);

//$stmt->execute();
$stmt->execute(array($userid));
$data= $stmt->fetchAll(PDO::FETCH_ASSOC);
$count = $stmt->rowCount();


if ($count > 0) {
    echo json_encode(array("status" => "success", "data" => $data));
} else {
    echo json_encode(array("status" => "Fail", "error" => "No data found for user ID: $userid"));
}


?>