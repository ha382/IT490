<?php
session_start();

$host="sql2.njit.edu";
$database="ha382";
$username="ha382";
$password="Ywcc!1xcvb";

$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
$db = new PDO($conn_string, $username, $password);


$stmt = $db->query("SELECT * from testtable");
$result = $stmt->fetch();


  $enteredEmail = $_POST['Lemail'];
  $enteredPassword = $_POST['Lpassword'];

  $stmt = $db->query("SELECT * FROM testtable WHERE email = '$enteredEmail'");
  $result = $stmt->fetch();

  if($enteredPassword == $result['password']){
    //naviagte to dashboard
    header("Location: loginSuccess.html");
  } else {
    header("Location: index.html");
  }


  /*
  $insert_query = "INSERT INTO `ha382`.`testtable` (`email`, `password`) VALUES ('$enteredEmail', '$enteredPassword');";
  $stmt = $db->prepare($insert_query);
  $r = $stmt->execute();
  */

?>