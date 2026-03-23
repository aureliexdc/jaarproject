<?php
$host = "ID479734_elegancebyaur.db.webhosting.be";
$dbname = "ID479734_elegancebyaur";
$user = "ID479734_elegancebyaur";
$pass = "snuffie07;)";

$conn = new mysqli($host, $user, $pass, $dbname);  // verbinding maken

if ($conn->connect_error) {
    die("Connectie mislukt: " . $conn->connect_error);
}
?>