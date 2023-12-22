<?php
include "../connect.php";

// استقبال بيانات المستخدم من التطبيق (يمكنك تعيينها بشكل ديناميكي)
$user_id = $_POST["id"]; // تأكد من استقبال البيانات بطريقة آمنة

// استعلام SQL لاسترجاع الملاحظات المرتبطة برقم المستخدم
$stmt = $con->prepare("SELECT * FROM notes WHERE notes_users= ?");
$stmt->execute([$user_id]);
$notes = $stmt->fetchAll(PDO::FETCH_ASSOC);

// التحقق من وجود بيانات الملاحظات
if ($stmt->rowCount() > 0) {
    // إرجاع بيانات الملاحظات في صيغة JSON في حالة وجودها
    echo json_encode(array("status" => "success", "data" => $notes));
} else {
    // إرجاع رسالة خطأ إذا لم توجد ملاحظات للمستخدم
    echo json_encode(array("status" => "Fail", "error" => "No notes found for user ID: $user_id"));
}
?>
