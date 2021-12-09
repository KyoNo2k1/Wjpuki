<?php
include 'connect.php';
include 'loading.php';
if(isset($_POST['count'])){
    $count = $_POST['count'];
    if(isset($_SESSION['user'])){
        $postid=$_GET['id'];
        $checkuser = $_SESSION['user'];
        $checkuser= $checkuser['email'];
        $sqli = "select * from nguoidung where email='$checkuser'";
        
        $result = mysqli_query($conn,$sqli);
        $userid = mysqli_fetch_assoc($result);
        $userid=$userid['id'];
        $sql="insert into cartproduct (userid,productid,count) values('$userid','$postid','$count')";
        if ($conn->query($sql) === TRUE) {
          $message = "Thêm sản phẩm thành công";
          echo "<script type='text/javascript'>alert('$message');</script>";
          header( "refresh:1;url=chitietsanpham.php?danhmuc=chitietsp&id=$postid" );
          } else {
            $message = "Chưa thêm số lượng sản phẩm";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header( "refresh:1;url=chitietsanpham.php?danhmuc=chitietsp&id=$postid" );
          }
    } else {
        $message = "Bạn chưa đăng nhập";
echo "<script type='text/javascript'>alert('$message');</script>";
        header( "refresh:1;url=index.php" );
    }
}
?>