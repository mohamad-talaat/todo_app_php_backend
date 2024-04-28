
<?php 
$dsn = "mysql:host=localhost;dbname=todoapp" ; 
$user = "root" ;
$pass = "" ; 
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8" // FOR Arabic
);
try {

    $con = new PDO($dsn , $user , $pass , $option ); 
    $con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION) ;
    include_once "../function.php"; // Include the file once


    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With, Access-Control-Allow-Origin");
       header("Access-Control-Allow-Methods: POST, OPTIONS , GET");
    // to connect with backend by easy... without opening the phpmysql
    
  //  checkAuthenticate();
}
catch(PDOException $e){
  echo $e->getMessage() ;        
}