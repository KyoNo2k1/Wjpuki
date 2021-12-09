<?php
include 'connect.php';
include 'loading.php';
if(isset($_POST['comment'])){
    $cmt = $_POST['comment'];
    if(isset($_SESSION['user'])){
        $postid=$_GET['id'];
        $checkuser = $_SESSION['user'];
        $checkuser= $checkuser['email'];
        $sqli = "select * from nguoidung where email='$checkuser'";
        
        $result = mysqli_query($conn,$sqli);
        $userid = mysqli_fetch_assoc($result);
        $userid=$userid['id'];
        $sql="insert into comment (userid,postid,content) values('$userid','$postid','$cmt')";
        if ($conn->query($sql) === TRUE) {
          $message = "Đăng bình luận thành công";
          echo "<script type='text/javascript'>alert('$message');</script>";
          header( "refresh:1;url=chitietsanpham.php?danhmuc=chitietsp&id=$postid" );
          } else {
            echo "504 Error";
          }
    } else {
        $message = "Bạn chưa đăng nhập";
echo "<script type='text/javascript'>alert('$message');</script>";
        header( "refresh:1;url=index.php" );
    }
}
?>