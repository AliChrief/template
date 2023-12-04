
<?php 
 header('Access-Control-Allow-Origin: *');
 header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
 header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
 
 $serverName ="DESKTOP-LKIJUHN\SQLEXPRESS02"; 
 $password = "123"; 
 $connectionInfo = array( "Database"=>"asd", "UID"=>"sa",  "PWD"=>$password, "CharacterSet" => "UTF-8"); 
 $conn = sqlsrv_connect( $serverName, $connectionInfo);
 if ($conn === false) { 
  die("Connection failed. Error: " .  print_r(sqlsrv_errors(), true)); 
 } 
 
 if( !$conn ) { 
 die( print_r( sqlsrv_errors(), true));
 } 
 ?> 







