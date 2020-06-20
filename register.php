<?php
require('config.php');
$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
$db = new PDO($conn_string, $username, $password);

$stmt = $db->query("SELECT * from testtable");
$result = $stmt->fetch();

  $Remail = $_POST['Remail'];
  $Rpassword = $_POST['Rpassword'];

 $insert_query = "INSERT INTO TestUsers (id, email, password) VALUES (NULL, '$Remail', '$Rpassword');";
  $stmt = $db->prepare($insert_query);
  $r = $stmt->execute();
  
  //SOMEHOW PERSIST LOGIN VALUES INTO DASHBOARD
  header("Location: registerSuccess.html");

?>