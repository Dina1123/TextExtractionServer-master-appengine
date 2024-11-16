<?php
$dsn = "mysql:unix_socket=/cloudsql/text-402508:us-central1:text2;dbname=text3";
// $dsn = "mysql:host=localhost;port=3306;dbname=text3";

$user = "root";
$pass = "12345678";
// 
// $dsn = getenv('MYSQL_DSN');
// $user = getenv('MYSQL_USER');
// $pass = getenv('MYSQL_PASSWORD');
$option = array(
   PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"
);
$countrowinpage = 9;
try {
   $con = new PDO($dsn, $user, $pass, $option);
   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   header("Access-Control-Allow-Origin: *");
   header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With, Access-Control-Allow-Origin");
   header("Access-Control-Allow-Methods: POST, OPTIONS, GET");
   include "functions.php";
   if (!isset($notAuth)) {
      // checkAuthenticate();
   }
}catch (PDOException $e) {
   echo "Connection failed: " . $e->getMessage();
   exit();
}

