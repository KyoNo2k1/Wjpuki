<?php
$servername = "remotemysql.com";
$username = "5RHsUm0JGH";
$password = "DQPKxILx5x";
$database = "5RHsUm0JGH";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);
// Check connection
// if ($conn->connect_error) {
//   die("Loi ket noi " . $conn->connect_error);
// }
// echo "Connected successfully";
session_start();
function exRs($sql){
    mysqli_set_charset($conn,'utf8');
    $data = [];
    $result = mysqli_query($conn ,$sql);
    while ($row =mysqli_fetch_array($result,1)){
        $data[]=$row;
    }
    mysqli_close($conn);
    return $data;
}
// ?>
