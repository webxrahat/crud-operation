<?php

$sarverName = "localhost";
$userName = "root";
$password = "";
$dataBaseName = "tododb";


$conn = mysqli_connect($sarverName, $userName, $password, $dataBaseName) or die("Connection Failed");
?>