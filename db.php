<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "thrift_bookstore";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>