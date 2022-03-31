<?php
$servername = "localhost";
$username = "futreg";
$password = "Syyl)Id-lM!wYDht";
$dbname = "futreg";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  echo $conn->error;
}

?>
