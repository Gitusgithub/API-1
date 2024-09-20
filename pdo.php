<?php
$servername = "localhost";
$username = "username";
$password = "password";
$username = "root";
$password = "";
$dbname="api_d";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  //Create the connection
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
}
