<?php
include 'connect.php';

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "insert into nguoidung (email,matkhau) values ('$email','$password')";
$result = $conn->query($sql);



?>