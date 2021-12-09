<?php
include '../connect.php';

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "select * from admin where email='$email' and matkhau='$password' ";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)==1){
    $_SESSION['admin']=$data;
    header('location: quanli.php');
}
else {echo"<h2>Dangnhapthatbai</h2>";
}
?>