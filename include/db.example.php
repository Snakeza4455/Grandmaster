<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "grandmaster";

$conn = new mysqli($host, $user, $pass, $db);
$conn->query("SET NAMES utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
