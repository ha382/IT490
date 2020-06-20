<?php
/*
require('config.php');
$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
$db = new PDO($conn_string, $username, $password);

$stmt = $db->query("SELECT * from testtable");
$result = $stmt->fetch();

  $enteredEmail = $_POST['Remail'];
  $enteredPassword = $_POST['Rpassword'];
  
  $insert_query = "INSERT INTO `ha382`.`testtable` (`id`, `email`, `password`) VALUES (NULL, '$enteredEmail', '$enteredPassword');";
  $stmt = $db->prepare($insert_query);
  $r = $stmt->execute();
  */
  //SOMEHOW PERSIST LOGIN VALUES INTO DASHBOARD
  header("Location: registerSuccess.html");
  



?>