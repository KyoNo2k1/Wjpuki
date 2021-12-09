<?php require_once('../connect.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/grid.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,500;0,700;1,300&display=swap">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="../assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./admin.css">
    <link rel="stylesheet" href="./quanly.css">

</head>

<body>
    <div class="app">
        <header class="header">
            <div class="grid wide">
                <img src="../WJPUKI.svg" class="header__logo-img" alt="">
                <h1 class="admin-head">ADMIN CONTROL</h1>
            </div>
        </header>
        <div class="app__container">
            <div class="grid wide">
                <div class="row sm-gutter app__content">
                    <div class="col l-2 m-0 c-0">
                        <nav class="category">
                            <h3 class="category__heading">Control</h3>
                            <ul class="category-list" id="category-list">
                                <li class="category-item" >
                                    <a class="category-item__link" href="../index.php">HOME</a>
                                </li>
                                <li class="category-item" data-filter="user">
                                    <a class="category-item__link">User</a>
                                </li>
                                <li class="category-item" data-filter="sanpham">
                                    <a class="category-item__link">Sản phẩm</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col l-10 m-12 c-12 product-all active-item" data-item="sanpham">
                        <a href=""><button class="btn btn-primary">Add</button></a>
                        <div class="">
                            <table class="table-product" id="data-table">
                                <thead class='list-head'>
                                    <tr class='list-title'>
                                        <td align="center"><span class="white-text">#</span></td>
                                        <td align="center"><span class="white-text">Type</td>
                                        <td align="center"><span class="white-text">Name</td>
                                        <td align="center"><span class="white-text">Status</td>
                                    </tr>
                                </thead>
                                <tbody class='list-product'>
                                    <?php
                            $sql = "select *from danhmucsp";
                            $result = $conn->query($sql);
                            while($row =$result -> fetch_assoc()){
                            echo"
                                    <tr class='list-product__row'>
                                        <td class='list-product__data' align='center'>".$row['id']."</td>
                                        <td class='list-product__data' align='center'>".$row['loaihinh']."</td>
                                        <td class='list-product__data' align='left'>".$row['tensp']."</td>
                                    </tr>";
                            }
                            ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col l-10 m-12 c-12 product-all active-item" data-item="user">
                        <a href=""><button class="btn btn-primary">Add</button></a>
                        <div class="templatemo-content-widget no-padding">
                            <div class="panel panel-default table-responsive table-padding">
                                <table class="table table-striped table-bordered templatemo-user-table" id="data-table">
                                    <thead>
                                        <tr>
                                            <td align="center"><span class="white-text">#</span></td>
                                            <td align="center"><span class="white-text">Ten</td>
                                            <td align="center"><span class="white-text">Email</td>
                                            <td align="center"><span class="white-text">SDT</td>                                       
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                $sql = "select *from nguoidung";
                                $result = $conn->query($sql);
                               while($row =$result -> fetch_assoc()){
                                echo"
                                <tr>
                                    <td align='center'>".$row['id']."</td>
                                    <td align='center'>".$row['hoten']."</td>
                                    <td align='left'>".$row['email']."</td>
                                    <td align='left'>".$row['sdt']."</td>
                                </tr>";
                               }
                               ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="footer__bottom">
                <div class="grid wide">
                    <p class="footer__text"> © 2021 - Bản quyền thuộc về Công ty TNHH WjpuKi</p>
                </div>
            </div>
        </footer>
    </div>

    <script src="./admin.js"></script>
</body>

</html>