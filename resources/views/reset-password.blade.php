<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nước hoa chính hãng</title>
    <link rel="icon" href="http://127.0.0.1:8000/assets/images/logo/logo-brand-web.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<style>
    .nav-bread{
        box-sizing: border-box;
        width: 100%;
        max-width: 100%;
        padding: 10px ;
        position: relative; 
        margin: 0 auto ;
        background-color: #EEE9E9;
    }
    .bread-list li:nth-child(2){
        margin: 0px 3px 0px 3px;
    }
    .bread-list li:nth-child(3){
        color: #C96F3B;
    }
    .bread-content{
        width: 100%;
        margin: 0 auto;
        max-width: 123rem;
    }
    .bread-list{
        display: flex;
        align-items: center;
        text-align: center;
    }
</style>
<body>
@include('header')
<main>
    <section class="nav-bread">
        <div class="bread-content">
            <ul class="bread-list">
                <li><a href="{{ route('form') }}">Home </a></li>
                <li><img src="http://127.0.0.1:8000/assets/images/logo/arrow.png"alt=""></li>
                <li>Quên mật khẩu</li>
            </ul>
        </div>
    </section>
    <section class="reset-password">
        <div class="inner">
            <div class="forgot-form">
                <div class="forgot-hd">
                    <p class="tt-sec">Nhập mã xác thực và mật khẩu mới</p>
                </div>
                <div class="box-form">
                    <form action="{{ route('reset-password.submit') }}" method="POST">
                        @csrf
                        <div class="group-form">
                        <label class="txt" for="reset_code">Mã xác thực</label>
                        <input type="text" id="reset_code" name="reset_code" placeholder="Mã xác thực" required>
                    </div>
                    <div class="group-form">
                        <label class="txt" for="password">Mật khẩu mới</label>
                        <input type="password" id="password" name="password" placeholder="Mật khẩu mới" required>
                    </div>
                    <div class="group-form">
                        <label class="txt" for="password_confirmation">Nhập lại mật khẩu mới</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu" required>
                    </div>

                        <button class="btn btn-pri" type="submit"><span class="txt">Đặt lại mật khẩu</span></button>
                    </form>
             </div>
            </div>
        </div>
    </section>
    <div class="fixed-nav">
            <ul class="fixed-nav-list">    
                <li class="fixed-nav-item"> <a class="link-items" href="tel:0917513519"><i class="fa-solid fa-phone-volume"></i></a></li>
                <li class="fixed-nav-item"> <a class="link-items" href=""><i class="fa-brands fa-facebook-messenger"></i></a></li>
                <li class="fixed-nav-item">
                    <div class="back-to-top"> <i class="fa-solid fa-arrow-up"></i></div>
                </li>
            </ul>
    </div>
</main>
<script src="http://127.0.0.1:8000/assets/js/scriptabout.js"></script>
@include('footer')
</body>
</html>