<?php require_once('../connect.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminLogin</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/grid.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,500;0,700;1,300&display=swap">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="../assets/fonts/themify-icons/themify-icons.css">
</head>
<body>
<div class="modal open" id="js-modal-login">
        <div class="modal__overlay" >
        </div> 
    <div class="modal__body">
        <!-- Login form -->
        <form action="adminlogin.php" method="POST" role="form">
        <div class="auth-form login js-dangnhap">
            <div class="auth-form__container" id="form-2">
                <div class="auth-form__header">
                    <h3 class="auth-form__heading">Đăng nhập Admin</h3>
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
                        <button class="btn btn--primary">ĐĂNG NHẬP</button>
                    </div>
                </form>
    
            </div>
    
        </div>
    </div>
</div>
</body>
</html>
