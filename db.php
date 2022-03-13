<?php

$dsn = 'mysql:host=localhost;dbname=test;charset=utf8mb4';
$user = 'iuGuy@iu.edu' ;
$pass = 'password' ;

// Connect to DB
try {
  $db = new PDO( $dsn, $user, $pass);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //print "<p>DB connect error</p>" ;
} catch( Exception $ex) {
  echo "<p>DB Connection Error</p>" ;
  exit;
}
