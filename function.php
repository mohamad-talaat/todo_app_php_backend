<?php
//$age = $_POST["age"]; // من المفترض ان يكون التسمية باشكل دا ولكن الكود هيكون معرض لسهولة للأختراق 
//لذلك عملنا ميثود اسمها فيلتر ريقويست ف ملف فانكشن عشان تحجب الداتا بتاعتي 
//$name = htmlspecialchars(strip_tags($_POST["name"])); // ودا بدل الميثود 

function FilterRequest ($requestName){

return htmlspecialchars(strip_tags($_POST[$requestName]));

}



?>