<?php
$host="sql2.njit.edu";
$database="ha382";
$username="ha382";
$password="Ywcc!1xcvb";

try {
  $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
// Create connection
$conn = new mysqli($host, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

/*
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