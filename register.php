<?php


$host="sql2.njit.edu";
$database="ha382";
$username="ha382";
$password="Ywcc!1xcvb";

$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
$db = new PDO($conn_string, $username, $password);


$stmt = $db->query("SELECT * from testtable");
$result = $stmt->fetch();


  $enteredEmail = $_POST['Remail'];
  $enteredPassword = $_POST['Rpassword'];

  
  
  $insert_query = "INSERT INTO testtable (username, password) VALUES ('$enteredUsername', '$enteredPassword')";
  $stmt = $db->prepare($insert_query);
  $r = $stmt->execute();
  
  header("Location: registerSuccess.html");
?>