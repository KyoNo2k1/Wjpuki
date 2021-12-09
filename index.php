<?php require_once('connect.php');

$user = (isset($_SESSION['user'])) ? $user = $_SESSION['user'] : [];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WjpuKi</title>
    <link rel="icon" href="./icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,500;0,700;1,300&display=swap">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
    
</head>
<body>
    <class class="app">
        <header class="header">
            <div class="grid wide">
                <nav class="header__navbar hide-on-mobile-tablet">
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item--has-qr header__navbar-item--separate">
                            Vào cửa hàng trên web
                            
                            <!-- Header QR Code -->
                            <div class="header__qr">
                                <img src="./assets/img/qr-code.png" alt="QR Code" class="header__qr-img">
                                <div class="header__qr-apps">
                                    <a href="https://play.google.com/store/apps/details?id=com.shopee.th&hl=vi&gl=US" class="header__qr-link">
                                        <img src="./assets/img/gg-play.png" alt="GG Play" class="header__qr-download-img">
                                    </a>
                                    <a href="https://apps.apple.com/vn/app/shopee-9-9-ng%C3%A0y-si%C3%AAu-mua-s%E1%BA%AFm/id959841449" class="header__qr-link">
                                        <img src="./assets/img/app-store.png" alt="App Store" class="header__qr-download-img">
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="header__navbar-item">
                            <span class="header__navbar-title--no-pointer">Kết nối</span>
                            <a href="" class="header__navbar-icon-link">
                                <i class="header__navbar-icon fab fa-facebook"></i>
                            </a>

                            <a href="" class="header__navbar-icon-link">
                                <i class="header__navbar-icon fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item--has-noti">
                            <a href="" class="header__navbar-item-link ">
                                <i class="header__navbar-icon far fa-bell"></i>
                                Thông báo
                            </a>
                            <div class="header__noti">
                                <header class="header__noti-header">
                                    <h3>Thông báo mới nhận</h3>
                                </header>
                                <ul class="header__noti-list">
                                    <li class="header__noti-item header__noti-item--viewed">
                                        <a href="" class="header__noti-link">
                                            <img src="./assets/img/product/1.jfif" alt="" class="header__noti-img">
                                            <div class="header__noti-info">
                                                <span class="header__noti-name">Bạn vừa thêm vào giỏ hàng mô hình figure:Sagiri</span>
                                                <span class="header__noti-desc">Chính hãng</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="header__noti-item">
                                        <a href="" class="header__noti-link">
                                            <img src="./assets/img/product/4.jfif" alt="" class="header__noti-img">
                                            <div class="header__noti-info">
                                                <span class="header__noti-name">Bạn vừa thêm vào giỏ hàng [Mihoyo] Mô hình nhân vật Honkai Impact 3rd</span>
                                                <span class="header__noti-desc">Chính hãng</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="header__noti-item">
                                        <a href="" class="header__noti-link">
                                            <img src="./assets/img/product/2.jfif" alt="" class="header__noti-img">
                                            <div class="header__noti-info">
                                                <span class="header__noti-name">Bạn vừa thêm vào giỏ hàng mô hình figure: Konjiki yami Yukata</span>
                                                <span class="header__noti-desc">Chính hãng</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="header__noti-item">
                                        <a href="" class="header__noti-link">
                                            <img src="./assets/img/product/3.jfif" alt="" class="header__noti-img">
                                            <div class="header__noti-info">
                                                <span class="header__noti-name">Bạn vừa thêm vào giỏ hàng Mô hình figure: Rem </span>
                                                <span class="header__noti-desc">Chính hãng</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                                <footer class="header__noti-footer">
                                    <a href="" class="header__noti-footer-btn">Xem tất cả</a>
                                </footer>

                            </div>

                        </li>
                        <li class="header__navbar-item">
                            <a href="" class="header__navbar-item-link">
                                <i class="header__navbar-icon far fa-question-circle"></i>
                                Trợ giúp
                            </a>
                        </li>
                        <!-- <li class="header__navbar-item header__navbar-item--bold header__navbar-item--separate">Đăng ký</li>
                        <li class="header__navbar-item header__navbar-item--bold">Đăng nhập</li> -->            
           <!--Khoan hẳng xoá--> <!-- <img src="https://cf.shopee.vn/file/8e289302619dfd2b67f9795e097c420f_tn" alt="" class="header__navbar-user-img"> -->
                        <li class="header__navbar-item header__navbar-user">
                            <?php if(isset($_SESSION['user'])){ ?>                        
                            <img src="https://cf.shopee.vn/file/8e289302619dfd2b67f9795e097c420f_tn" alt="" class="header__navbar-user-img">
                            <span class="header__navbar-user-name"><?php echo $user['email'] ?></span>
                            <ul class="header__navbar-user-menu">
                                <li class="header__navbar-user-item">
                                    <a href="">Tài khoản của tôi</a>
                                </li>
                                <li class="header__navbar-user-item">
                                    <a href="">Địa chỉ của tôi</a>
                                </li>
                                <li class="header__navbar-user-item">
                                    <a href="">Đơn mua</a>
                                </li>
                                <li class="header__navbar-user-item header__navbar-user-item--separate">
                                    <a href="logout.php">Đăng xuất</a>
                                </li>
                            </ul>
                        
                            <?php } else { ?>
                                <button id="js-dangnhap-btn" class="dangnhap-btn">
                                Đăng nhập                                
                                </button>
                            <?php } ?>                        
                        <li>
                    </ul>
                </nav>
                
                <div class="header-with-search">
                    <div>
                        <div class="header__mobile-menu header__mobile-menu--has-menu hide-on-pc">
                            <!-- <input type="button" hidden id="header__mobile-menu-check" class="header__mobile-menu-checkbox"> -->
                            <p class="ti-menu header__mobile-menu-icon"></p>
                            <ul class="header__mobile-menu-list">
                                <li class="header__mobile-menu-item">
                                    <i class="fas fa-user-circle header__mobile-menu__icon-size"></i>
                                    Account
                                </li>
                                <li class="header__mobile-menu-item">
                                    <i class="fas fa-sign-in-alt header__mobile-menu__icon-size"></i>    
                                    Đăng nhập
                                </li>
                                <li class="header__mobile-menu-item">
                                    <i class="fas fa-plus header__mobile-menu__icon-size"></i>
                                    Đăng ký
                                </li>
                                <li class="header__mobile-menu-item">
                                    <i class="fas fa-sign-out-alt header__mobile-menu__icon-size"></i>
                                    Đăng xuất
                                </li>
                            </ul>
                        </div>
    
                        <label for="mobile-search-checkbox" class="header__mobile-search hide-on-pc hide-on-tablet">
                            <i class="header__mobile-search-icon fas fa-search"></i>
                        </label>
                    </div>

                    <div class="header__logo">
                        <a href="" class="header__logo-link">
                            <!-- <img src="https://api.freelogodesign.org/files/112bfa0b94514f7494492bb674139dbf/thumb/logo_200x200.png?v=0" class="header__logo-img" alt=""> -->
                            <img src="WJPUKI.svg" class="header__logo-img" alt="">
                        </a>
                    </div>

                    <!-- Search  -->
                    <input type="checkbox" hidden id="mobile-search-checkbox" class="header__search-checkbox">

                    <div class="header__search">
                        <div class="header__search-input-wrap">
                            <input type="text" id="search-item" class="header__search-input" placeholder="Tìm kiếm trong Shop" onchange=searchChange()>

                            <!-- Search history -->
                            <div class="header__search-history">
                                <h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
                                <ul class="header__search-history-list">
                                    <li class="header__search-history-item">
                                        <a href="">Figure giá rẻ</a>
                                    </li>

                                    <li class="header__search-history-item">
                                        <a href="">Gối ôm cho kỳ bu</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="header__search-select">
                            <span class="header__search-select-label">Trong shop</span>
                            <i class="header__search-select-icon fas fa-chevron-down"></i>

                            <ul class="header__search-option">
                                <li class="header__search-option-item header__search-option-item--active">
                                    <span>Trong shop</span>
                                    <i class="fas fa-check"></i>
                                </li>

                                <li class="header__search-option-item">
                                    <span>Ngoài shop</span>
                                    <i class="fas fa-check"></i>
                                </li>
                            </ul>
                        </div>
                        <button class="header__search-btn" onclick=searchItem() >
                            <i class="header__search-btn-icon fas fa-search"></i>
                        </button>
                    </div>

                    <!-- Cart -->
                    <div class="header__cart">
                        
                        <div class="header__cart-wrap" onclick='openCartList()'>
                            <i class="header__cart-icon fas fa-shopping-cart"></i>
                            <?php
                            if(isset($_SESSION['user'])){
                            $sqlCartCount = "select count(*) AS 'SL' from cartproduct,nguoidung,danhmucsp where cartproduct.userid = nguoidung.id and cartproduct.productid = danhmucsp.id and nguoidung.id = '$user[id]'";
                            $resultCartCount = $conn->query($sqlCartCount);
                            while($rowCartCount = $resultCartCount -> fetch_assoc()){
                            echo "
                                <span class='header__cart-notice'>".$rowCartCount['SL']."</span>
                                "
                            ;}
                            }
                            ?>
                            <div class="header__cart-list ">
                                <img src="./assets/img/pngtree-add-shopping-cart-icon-png-image_4436011.jpg" class="header__cart--no-cart-img" alt="">
                                <span class="header__cart-list-msg">
                                    Chưa có sản phẩm
                                </span>

                                <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                                <?php
                                if(isset($_SESSION['user'])){
                                $sqlCart = "select *from cartproduct,nguoidung,danhmucsp where cartproduct.userid = nguoidung.id and cartproduct.productid = danhmucsp.id and nguoidung.id = '$user[id]'";
                                $resultCart = $conn->query($sqlCart);
                                while($rowCart = $resultCart -> fetch_assoc()){
                                echo "
                                    <ul class='header__cart-list-item'>
                                        <!-- cart item, -->
                                        <li class='header__cart-item'>
                                            <img src='".$rowCart['anh']."' alt='' class='header__cart-img'>
                                            <div class='header__cart-item-info'>
                                                <div class='header__cart-item-head'>
                                                    <h5 class='header__cart-item-name'>".$rowCart['tensp']."</h5>
                                                    <div class='header__cart-item-price-wrap'>
                                                        <span class='header__cart-item-price'>".number_format($rowCart['giagiam'],0,',','.')."đ</span>
                                                        <span class='header__cart-item-mutiply'>x</span>
                                                        <span class='header__cart-item-qnt'>".$rowCart['count']."</span>
                                                    </div>
                                                </div>

                                                <div class='header__cart-item-body'>
                                                    <span class='header__cart-item-desc'>
                                                        Phân loại:Real
                                                    </span>
                                                    <span class='header__cart-item-remove'>Xóa</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                ";}
                                }
                                ?>
                                <a onclick=openCartList() class="header__cart-view-cart btn btn--primary">Xem giỏ hàng</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <ul class="header__sort-bar">
                <li class="header__sort-item">
                    <a href="" class="header__sort-link">Liên quan</a> 
                </li>
                <li class="header__sort-item">
                    <a href="" class="header__sort-link">Mới nhất</a>
                </li>
                <li class="header__sort-item">
                    <div class="header__sort-item--active">
                        <a href="" class="header__sort-link">Bán chạy</a>
                    </div>
                </li>
                <li class="header__sort-item">
                    <a href="" class="header__sort-link">Giá</a>
                    
                </li>            
            </ul>
        </header>
        
        <div class="app__container">
            <div class="grid wide">
                <div class="row sm-gutter app__content">
                    <div class="col l-2 m-0 c-0" style="position:relative">
                        <nav class="category">
                            <h3 class="category__heading">Danh mục
                            </h3>
            
                            <ul class="category-list" id="category-list">
                                <li class="category-item category-item--active" data-filter="all">
                                    <a class="category-item__link">All</a>
                                </li>
                                <li class="category-item" data-filter="Figure">
                                    <a class="category-item__link" >Figure</a>
                                </li>
                                <li class="category-item" data-filter="Cosplay">
                                    <a class="category-item__link">Cosplay</a>
                                </li>
                                <li class="category-item" data-filter="Accessory">
                                    <a class="category-item__link">Phụ kiện</a>
                                </li>
                            </ul>
                            <button class="btnDemo" id="btnDemo" onclick="btnDemo()">
                                <h3>Demo Wjpuki</h3>
                            </button>
                            <button class="btnRexlax" id="btnRelax" onclick="btnRelax()">
                                <h3>Relax <br> Music</h3>
                            </button>

                        </nav>
                    </div>
                                
                    <div class="col l-10 m-12 c-12 ">
                        <div class="home-filter hide-on-mobile-tablet">
                            <span class="home-filter__lable">Sắp xếp theo</span>
                            <button class="home-filter__btn btn">Phổ biến</button>
                            <button class="home-filter__btn btn btn--primary">Mới nhất</button>
                            <button class="home-filter__btn btn">Bán chạy</button>

                            <div class="select-input">
                                <span class="select-input__label">Giá</span>
                                <i class="select-input__icon fas fa-chevron-down"></i>

                                <!-- List option -->
                                <ul class="select-input__list">
                                    <li class="select-input__item">
                                        <a href="" class="select-input__link">Giá: Thấp đến cao</a>
                                    </li>

                                    <li class="select-input__item">
                                        <a href="" class="select-input__link">Giá: Cao đến thấp</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="home-filter__page">
                                <span class="home-filter__page-num">
                                    <span class="home-filter__page-now">1</span>/14
                                </span>

                                <div class="home-filter__page-control">
                                    <a href="" class="home-filter__page-btn home-filter__page-btn--disabled">
                                        <i class="home-filter__page-icon fas fa-chevron-left"></i>
                                    </a>
                                    <a href="" class="home-filter__page-btn">
                                        <i class="home-filter__page-icon fas fa-chevron-right  "></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <nav class="mobile-category hide-on-pc">
                            <ul class="mobile-category__list">
                                <li class="mobile-category__item">
                                    <a href="" class="mobile-category__link">Dụng cụ y tế & Thiết bị điện tử</a>
                                </li>
                                <li class="mobile-category__item">
                                    <a href="" class="mobile-category__link">Dụng cụ y tế & Thiết bị điện tử</a>
                                </li>
                                <li class="mobile-category__item">
                                    <a href="" class="mobile-category__link">Dụng cụ y tế & Thiết bị điện tử</a>
                                </li>
                                <li class="mobile-category__item">
                                    <a href="" class="mobile-category__link">Dụng cụ y tế & Thiết bị điện tử</a>
                                </li>
                                <li class="mobile-category__item">
                                    <a href="" class="mobile-category__link">Dụng cụ y tế & Thiết bị điện tử</a>
                                </li>
                                <li class="mobile-category__item">
                                    <a href="" class="mobile-category__link">Dụng cụ y tế & Thiết bị điện tử</a>
                                </li>
                                <li class="mobile-category__item">
                                    <a href="" class="mobile-category__link">Dụng cụ y tế & Thiết bị điện tử</a>
                                </li>
                                <li class="mobile-category__item">
                                    <a href="" class="mobile-category__link">Dụng cụ y tế & Thiết bị điện tử</a>
                                </li>
                                <li class="mobile-category__item">
                                    <a href="" class="mobile-category__link">Dụng cụ y tế & Thiết bị điện tử</a>
                                </li>
                                <li class="mobile-category__item">
                                    <a href="" class="mobile-category__link">Dụng cụ y tế & Thiết bị điện tử</a>
                                </li>
                            </ul>
                        </nav>

                        <div class="home-product">
                            <div class="row sm-gutter">
                                <!-- Product item -->
                                <?php
                                $sql = "select *from danhmucsp";
                                $result = $conn->query($sql);
                               while($row =$result -> fetch_assoc()){
                                    echo"<div onclick='openProduct()' class='col l-2-4 m-4 c-6 product-all' data-item='".$row['loaihinh']."'>
                                    <a href='chitietsanpham.php?danhmuc=chitietsp&id=".$row['id']."' class='home-product-item'>
                                        <div class='home-product-item__img' style='background-image: url(".$row['anh'].")'></div>
                                        <h4 class='home-product-item__name'>".$row['tensp']."</h4>
                                        <div class='home-product-item__price'>
                                            <span class='home-product-item__price-old'>".number_format($row['giagoc'],0,',','.')."đ</span>
                                            <span class='home-product-item__price-current'>".number_format($row['giagiam'],0,',','.')."đ</span>
                                        </div>
                                        <div class='home-product-item__action'>
                                            <span class='home-product-item__like home-product-item__like--liked'>
                                                <i class='home-product-item__like-icon-empty far fa-heart'></i>
                                                <i class='home-product-item__like-icon-fill fas fa-heart'></i>
                                            </span>
                                            <div class='home-product-item__rating'>
                                                <i class='home-product-item__star--gold fas fa-star'></i>
                                                <i class='home-product-item__star--gold fas fa-star'></i>
                                                <i class='home-product-item__star--gold fas fa-star'></i>
                                                <i class='home-product-item__star--gold fas fa-star'></i>
                                                <i class='fas fa-star'></i>
                                            </div>
                                            <span class='home-product-item__sold'>".$row['daban']." sản phẩm</span>
                                        </div>
                                        <div class='home-product-item__origin'>
                                            <span class='home-product-item__brand'>".$row['brand']."</span>
                                            <span class='home-product-item__origin-name'>".$row['sanxuat']."</span>
                                        </div>
                                        <div class='home-product-item__favorite'>
                                            <i class='fas fa-check'></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class='home-product-item__sale-off'>
                                            <span class='home-product-item__sale-off-percent'>10%</span>
                                            <span class='home-product-item__sale-off-label'>GIẢM</span>
                                        </div>
                                    <a>
                                    
                                </div>";
                               } ?>

                                
                            </div>
                        </div>
                        <!-- <div>
                            <div onclick="openProduct()" class="col l-2-4 m-4 c-6 product-all" data-item="figure">
                                    <a href="./chitietsanpham.html" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/product/1.jfif)"></div>
                                        <h4 class="home-product-item__name">Mô hình figure: Sagiri chính hãng</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">715.000đ</span>
                                            <span class="home-product-item__price-current">599.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">100 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Local brand</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    <a>
                                    
                                </div>
                                <div class="col l-2-4 m-4 c-6 product-all" data-item="figure">
                                    <a href="#" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/product/2.jfif)"></div>
                                        <h4 class="home-product-item__name">Mô hình figure: Konjiki yami Yukata</h4>  
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">615.000đ</span>
                                            <span class="home-product-item__price-current">550.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">100 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Local brand</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="col l-2-4 m-4 c-6 product-all" data-item="figure">
                                    <a href="#" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/product/3.jfif)"></div>
                                        <h4 class="home-product-item__name">Mô hình figure: Rem chính hãng   </h4>
                                        <div class="home-product-item__price">
                                          
                                            <span class="home-product-item__price-current">6.999.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">100 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Local brand</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="col l-2-4 m-4 c-6 product-all" data-item="figure">
                                    <a href="#" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/product/4.jfif)"></div>
                                        <h4 class="home-product-item__name">[Mihoyo] Mô hình nhân vật Honkai Impact 3rd Rita Rossweisse  </h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-current">3.390.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">100 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Local brand</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="col l-2-4 m-4 c-6 product-all" data-item="figure">
                                    <a href="#" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/product/hina.jpg)"></div>
                                        <h4 class="home-product-item__name">Mô hình figure :Amano Hina</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">1.000.000đ</span>
                                            <span class="home-product-item__price-current">900.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">100 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Local brand</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="col l-2-4 m-4 c-6 product-all" data-item="figure">
                                    <a href="#" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/product/6.jfif)"></div>
                                        <h4 class="home-product-item__name">Mô hình figure :Kochou Shinobu KMY</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-current">830.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">100 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Local brand</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="col l-2-4 m-4 c-6 product-all" data-item="figure">
                                    <a href="#" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/product/7.jfif)"></div>
                                        <h4 class="home-product-item__name">Mô hình figure : Mèo mập </h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">715.000đ</span>
                                            <span class="home-product-item__price-current">599.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">100 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Local brand</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="col l-2-4 m-4 c-6 product-all" data-item="figure">
                                    <a href="#" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/product/8.jfif)"></div>
                                        <h4 class="home-product-item__name">Mô hình figure:Houkai 3rd THERESA APOCALYPSE ROSY BRIDESMAID</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-current">8.000.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">100 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Local brand</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="col l-2-4 m-4 c-6 product-all" data-item="figure">
                                    <a href="#" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/product/0,3.jfif)"></div>
                                        <h4 class="home-product-item__name">Bộ 3 thằng WIBU </h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">10.000đ</span>
                                            <span class="home-product-item__price-current">500đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">0 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Local brand</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">95%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="col l-2-4 m-4 c-6 product-all" data-item="figure">
                                    <a href="#" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/product/0,2.jfif)"></div>
                                        <h4 class="home-product-item__name">Mô hình Transformer: DX10 JETPOWER REVIVE PRIME</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">2.715.000đ</span>
                                            <span class="home-product-item__price-current">2.699.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">100 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Local brand</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="col l-2-4 m-4 c-6 product-all" data-item="figure">
                                    <a href="#" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/product/0,1.jfif)"></div>
                                        <h4 class="home-product-item__name">Gate Box: vợ ảo Azuma Hikari</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">27.600.000đ</span>
                                            <span class="home-product-item__price-current">27.000.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">100 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Local brand</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="col l-2-4 m-4 c-6 product-all" data-item="cosplay">
                                    <a href="#" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/product/cos0.jfif)"></div>
                                        <h4 class="home-product-item__name">Mô hình 5 anh em pokemon</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">999.000đ</span>
                                            <span class="home-product-item__price-current">949.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">100 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Local brand</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="col l-2-4 m-4 c-6 product-all" data-item="cosplay">
                                    <a href="#" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/product/cos1.jfif)"></div>
                                        <h4 class="home-product-item__name">Cosplay hầu gái gợi cảm</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">675.000đ</span>
                                            <span class="home-product-item__price-current">649.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">100 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Local brand</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="col l-2-4 m-4 c-6 product-all" data-item="cosplay">
                                    <a href="#" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/product/cos2.jfif)"></div>
                                        <h4 class="home-product-item__name">Mô hình Avenger: Hulk Buster tỉ lệ 1:6</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">1.715.000đ</span>
                                            <span class="home-product-item__price-current">1.599.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">100 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Local brand</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="col l-2-4 m-4 c-6 product-all" data-item="cosplay">
                                    <a href="#" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/product/cos3.jfif)"></div>
                                        <h4 class="home-product-item__name">Mô hình figure: Kaido </h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">1.915.000đ</span>
                                            <span class="home-product-item__price-current">1.899.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">100 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Local brand</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                        
                                <div class="col l-2-4 m-4 c-6 product-all" data-item="cosplay">
                                    <a href="#" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/product/cos4.jfif)"></div>
                                        <h4 class="home-product-item__name">Cosplay Mirai chính hãng</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">315.000đ</span>
                                            <span class="home-product-item__price-current">299.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">100 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Local brand</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="col l-2-4 m-4 c-6 product-all" data-item="cosplay">
                                    <a href="#" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/product/cos5.webp)"></div>
                                        <h4 class="home-product-item__name">Cosplay Asta chính hãng</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">1.000.000đ</span>
                                            <span class="home-product-item__price-current">899.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">100 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Local brand</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="col l-2-4 m-4 c-6 product-all" data-item="cosplay">
                                    <a href="#" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/product/cos6.webp)"></div>
                                        <h4 class="home-product-item__name">Cosplay Dio chính hãng</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">815.000đ</span>
                                            <span class="home-product-item__price-current">799.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">100 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Local brand</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>


                                <div class="col l-2-4 m-4 c-6 product-all" data-item="accessory">
                                    <a href="#" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/product/item1.jfif)"></div>
                                        <h4 class="home-product-item__name">Set đồ Ninja  Konoha</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">515.000đ</span>
                                            <span class="home-product-item__price-current">479.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">100 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Local brand</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="col l-2-4 m-4 c-6 product-all" data-item="accessory">
                                    <a href="#" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/product/item2.jpg)"></div>
                                        <h4 class="home-product-item__name">Set cosplay Kakashi </h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">670.000đ</span>
                                            <span class="home-product-item__price-current">599.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">100 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Local brand</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="col l-2-4 m-4 c-6 product-all" data-item="accessory">
                                    <a href="#" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/product/item3.jpg)"></div>
                                        <h4 class="home-product-item__name">Móc khóa in hình Nezuko</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">50.000đ</span>
                                            <span class="home-product-item__price-current">45.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">100 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Local brand</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col l-2-4 m-4 c-6 product-all" data-item="accessory">
                                    <a href="#" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/product/item4.jfif)"></div>
                                        <h4 class="home-product-item__name">Bao đựng bút in hình anime</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">200.000đ</span>
                                            <span class="home-product-item__price-current">180.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">100 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Local brand</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="col l-2-4 m-4 c-6 product-all" data-item="accessory">
                                    <a href="#" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/product/item5.jpg)"></div>
                                        <h4 class="home-product-item__name">Gối ôm Saber: kích thước 120x40 </h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">500.000đ</span>
                                            <span class="home-product-item__price-current">450.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">100 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Local brand</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="col l-2-4 m-4 c-6 product-all" data-item="accessory">
                                    <a href="#" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/product/item6.jfif)"></div>
                                        <h4 class="home-product-item__name"> Set gối ôm kurumi 3 chiếc </h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">2.600.000đ</span>
                                            <span class="home-product-item__price-current">2.340.000đ</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="home-product-item__star--gold fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">1549 đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Local brand</span>
                                            <span class="home-product-item__origin-name">Nhật Bản</span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">10%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                    </a>
                                    
                                </div>
                        </div> -->
                        <h1 id="no__product">

                
                        </h1>
                        <ul class="pagination home-product--pagination">
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    <i class="pagination-item__icon fas fa-angle-left"></i>  
                                </a>
                            </li>
                            
                            <li class="pagination-item pagination-item--active">
                                <a href="" class="pagination-item__link">1</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">2</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">3</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">4</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">5</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">...</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">14</a>
                            </li>

                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    <i class="pagination-item__icon fas fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
            
        </div>

        <footer class="footer">
            <div class="grid wide footer__content">
                <div class="row">
                    <div class="col l-2-4 m-4 c-6 footer__row-space">
                        <h3 class="footer__heading">Chăm sóc khách hàng</h3>
                        <ul class="footer__list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Trung tâm trợ giúp</a>
                            </li>
                            <li class="footer-item"></li>
                                <a href="" class="footer-item__link">Shop Mail</a>
                            </li>
                            <li class="footer-item"></li>
                                <a href="" class="footer-item__link">Hướng dẫn mua hàng</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col l-2-4 m-4 c-6 footer__row-space">
                        <h3 class="footer__heading">Giới thiệu</h3>
                        <ul class="footer__list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Giới thiệu</a>
                            </li>
                            <li class="footer-item"></li>
                                <a href="" class="footer-item__link">Tuyển dụng</a>
                            </li>
                            <li class="footer-item"></li>
                                <a href="" class="footer-item__link">Điều khoản</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col l-2-4 m-4 c-6 footer__row-space">
                        <h3 class="footer__heading">Danh mục</h3>
                        <ul class="footer__list">
                            <li class="footer-item">
                                <a href="" class="footer-item__link">Sản phẩm mới</a>
                            </li>
                            <li class="footer-item"></li>
                                <a href="" class="footer-item__link">Sản phẩm được ưa chuộng</a>
                            </li>
                            <li class="footer-item"></li>
                                <a href="" class="footer-item__link">Sản phẩm nhập khẩu</a>
                            </li>
                        </ul>
                        
                    </div>
                    <div class="col l-2-4 m-4 c-6 footer__row-space">
                        <h3 class="footer__heading">Theo dõi</h3>
                        <ul class="footer__list">
                            <li class="footer-item">
                                <a href="https://www.facebook.com/profile.php?id=100072110707666" class="footer-item__link">
                                    <i class="footer-item__icon fab fa-facebook"></i>
                                    Facebook
                                </a>
                            </li>
                            <li class="footer-item"></li>
                                <a href="" class="footer-item__link">
                                    <i class="footer-item__icon fab fa-instagram-square"></i>
                                    Instagram
                                </a>
                            </li>
                            <li class="footer-item"></li>
                                <a href="" class="footer-item__link">
                                    <i class="footer-item__icon fab fa-linkedin-in"></i>
                                    Linkin
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col l-2-4 m-8u c-12 footer__row-space">
                        <h3 class="footer__heading">Vào cửa hàng trên ứng dụng</h3>
                        <div class="footer__download">
                            <img src="/assets/img/qr-code.png" alt="Download QR" class="footer__download-qr">
                            <div class="footer__download-apps">
                                <a href="" class="footer__download-app-link">
                                    <img src="/assets/img/gg-play.png" alt="Google Play" class="footer__download-app-img">
                                </a>
                                <a href="" class="footer__download-app-link">
                                    <img src="/assets/img/app-store.png" alt="App Store" class="footer__download-app-img">
                                </a>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
            <div class="footer__bottom">
                <div class="grid wide">
                   <p class="footer__text"> © 2021 - Bản quyền thuộc về Công ty TNHH WjpuKi</p>
                </div>
            </div>
        </footer>
        
    </div>

    
    <div class="videoDemo modal" id="videoDemo">
        <div class="modal__overlay" onclick="offVideoDemo()">

        </div> 

        <div class="modal__body">
            <div class="webDemo">
                
            </div>
        </div>
    </div>
    <!-- Modal lauout -->
    <div class="modal" id="js-modal-regis">
        <div class="modal__overlay" onclick="offloginForm(), offRegisForm()">

        </div> 

        <div class="modal__body">
            <!-- Register form -->
            <form action="regis.php" method="POST" role="form">
            <div class="auth-form regis">
                <div class="auth-form__container" id="form-1">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng ký</h3>
                        <a onclick="offRegisForm(),loginForm()" class="auth-form__switch-btn">Đăng nhập</a>
                    </div>

                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <div><div>
                                <input name="email" type="text" id="email1" class="auth-form__input" placeholder="Email">

                            </div></div>
                            <span class="form-message"></span>
                        </div>

                        <div class="auth-form__group">
                            <input type="password" name="password" id="password1" class="auth-form__input" placeholder="Mật khẩu">
                            <span class="form-message"></span>
                        </div>
                        <div class="auth-form__group">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="auth-form__input" placeholder="Nhập lại mật khẩu">
                            <span class="form-message"></span>
                        </div>
                    </div>

                    <div class="auth-form__aside">
                        <p class="auth-form__policy-text">
                            Bằng việc ấn đăng ký, bạn đã đồng ý với WjpuKi về 
                            <a href="" class="auth-form__text-link">Điều khoản dịch vụ </a> & 
                            <a href="" class="auth-form__text-link">Chính sách bảo mật. </a>

                        </p>
                    </div>
                    
                        <div class="auth-form__control">
                            <a onclick="offRegisForm()" class="btn btn--normal auth-form__control-back">TRỞ LẠI</a>
                            <button class="btn btn--primary form-submit">ĐĂNG KÝ</button>
                        </div>
                    </form>

                </div>
                <div class="auth-form__socials">
                    <a href="" class="auth-form__socials--fb btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fab fa-facebook-square"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Facebook
                        </span>
                    </a>

                    <a href="" class="auth-form__socials--gg btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon ti-google"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Google
                        </span>
                    </a>
                </div>

            </div>
            
        </div>
    </div>

    <div class="modal" id="js-modal-login">
        <div class="modal__overlay" onclick="offloginForm(), offRegisForm()">

        </div> 

        <div class="modal__body">
            <!-- Login form -->
            <form action="login.php" method="POST" role="form">
            <div class="auth-form login js-dangnhap">
                <div class="auth-form__container" id="form-2">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng nhập</h3>
                        <a onclick="onRegisForm()" class="auth-form__switch-btn">Đăng ký</a>
                    </div>
                    
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input name="email" type="text" id="email2" class="auth-form__input" placeholder="Email">
                            <span class="form-message"></span>
                        </div>
        
                        <div class="auth-form__group">
                            <input type="password" name="password" id="password2" class="auth-form__input" placeholder="Mật khẩu">
                            <span class="form-message"></span>
                        </div>
                    </div>
        
                    <div class="auth-form__aside">
                       <div class="auth-form__help">
                           <a href="" class="auth-form__help-link auth-form__help-forgot">Quên mật khẩu</a>
                           <span class="auth-form__help-separate"></span>
                           <a href="" class="auth-form__help-link">Cần trợ giúp</a>
                       </div>
                    </div>
                    
                    
                        <div class="auth-form__control">
                            <button onclick="offloginForm()" class="btn btn--normal auth-form__control-back">TRỞ LẠI</button>
                            <button class="btn btn--primary">ĐĂNG NHẬP</button>
                        </div>
                    </form>
        
                </div>
                <div class="auth-form__socials">
                    <a href="" class="auth-form__socials--fb btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fab fa-facebook-square"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Facebook
                        </span>
                    </a>
        
                    <a href="" class="auth-form__socials--gg btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon ti-google"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Google
                        </span>
                    </a>
                </div>
        
            </div>
        </div>
    </div>

    <!-- Cart Item  -->
    <div class="cartItem modal" id="cartItem">
            <div class="modal__overlay" onclick="closeCartList()">

            </div>

            <div class="modal__body">
                <div class="itemList">
                    <h1 class='itemList__header'>Danh sách sản phẩm trong giỏ hàng</h1>
                    <?php
                        $sqlCart = "select *from cartproduct,nguoidung,danhmucsp where cartproduct.userid = nguoidung.id and cartproduct.productid = danhmucsp.id and nguoidung.id = '$user[id]'";
                        $resultCart = $conn->query($sqlCart);
                        while($rowCart = $resultCart -> fetch_assoc()){
                        echo "
                        <ul class='header__cart-list-item'>
                            <li class='header__cart-item'>
                                    <input type='checkbox' class='header__cart-checkbox'></input>
                                    <img src='".$rowCart['anh']."' alt='' class='header__cart-img'>
                                    <div class='header__cart-item-info'>
                                        <div class='header__cart-item-head'>
                                            <h5 class='header__cart-item-name'>".$rowCart['tensp']."</h5>
                                            <div class='header__cart-item-price-wrap'>
                                                <span class='header__cart-item-price'>".number_format($rowCart['giagiam'],0,',','.')."đ</span>
                                                <span class='header__cart-item-mutiply'>x</span>
                                                <span class='header__cart-item-qnt'>".$rowCart['count']."</span>
                                            </div>
                                        </div>

                                        <div class='header__cart-item-body'>
                                            <span class='header__cart-item-desc'>
                                                Phân loại:Real
                                            </span>
                                            <span class='header__cart-item-remove'>Xóa</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        ";}
                        
                    ?>
                </div>
            </div>
    </div>

    <script src="./dn.js"></script>
    <script src="./validator.js"></script>
    <script>
        //Validator
        Validator({
            form: '#form-1',
            formGroupSelector: '.auth-form__group',
            errorSelector: '.form-message',
            rules:[
                Validator.isRequired('#email1'),
                Validator.isEmail('#email1', 'Nhập đúng mail làm ơn :('),
                Validator.minLength('#password1', 6),
                Validator.isRequired('#password_confirmation'),
                Validator.isConfirm('#password_confirmation', function(){
                    return document.querySelector('#form-1 #password1').value;
                }, 'Mật khẩu sai bạn êi bạn tên koa à :V'),
            ],
            onSubmit: function(data){
                console.log(data);
            }
        });

        Validator({
            form: '#form-2',
            formGroupSelector: '.auth-form__group',
            errorSelector: '.form-message',
            rules:[
                Validator.isRequired('#email2'),
                Validator.isEmail('#email2', 'Nhập đúng mail làm ơn :('),
                Validator.isRequired('#password2'),
                Validator.minLength('#password2', 6),
            ],
            onSubmit: function(data){
                //call API
                console.log(data);
            }
        });
        </script>
    <script src="./login.js"></script>
    <script src="./main.js"></script>
</body>
</html>
