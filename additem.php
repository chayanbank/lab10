<?php
$servername = "localhost";
$username = "it58160253";
$password = "CHSU#2785";
$dbname = "it58160253";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$conn->query("SET NAMES UTF8");

$item = $_GET['item'];

$sql = "INSERT INTO shoppinglist(item) VALUES('$item')";
$conn->query($sql);

$conn->close();

header("location: getall.php");
?>