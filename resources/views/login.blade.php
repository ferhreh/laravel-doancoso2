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
    .group-form{
        margin-bottom: 1rem;
    }
    .group-form input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    font-size: 16px;
    max-width:100%;
    box-sizing: border-box;
    
    }
    .group-form input:focus{
        outline:1px solid #9c8679;
    }
    
    .login-page{
        max-width: 100%;
        box-sizing: border-box;
        padding: 10px
    }
    .tt-sec{
        font-size: 28px;
        text-align: center;
    }
.group-sup {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 14px;
    color:#9c8679;
    max-width: 100%;
    box-sizing: border-box;
    margin-top: 10px; /* Tạo khoảng cách giữa các liên kết */
}

.group-sup a {
    text-decoration: none;
    max-width: 100%;
    box-sizing: border-box;
    color: #9c8679;
}

.btn.btn-pri {
    width: 100%;
    padding: 12px;
    background-color: #9c8679;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-top: 20px; /* Khoảng cách trên nút */
}

.login-content {
    max-width: 35rem;
    margin: auto;
}

    .login-content .group-form input::placeholder {
    color: #ccc;
    }  
    .group-form>.txt{
        position: relative;
        font-weight: bold;
        color: #333;

    }
    .group-form>.txt::after{
        content: "*";
        color: red;
    }
    @media (max-width: 378px) {
        .group-sup{
            flex-direction: column;
        align-items: flex-start;
        gap: 5px; 
        }
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
                <li>Đăng nhập</li>
            </ul>
        </div>
   </section>
   <section class="login-page">
        <div class="login-content">
            <div class="inner">
                <div class="login-form">
                    <div class="login-hd">
                        <p class="tt-sec">Đăng nhập</p>
                    </div>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="box-form">
                        <div class="group-form">
    <label class="txt" for="email">Email</label>
    <input id="email" name="email" type="text" placeholder="Email" required autocomplete="email">
</div>
<div class="group-form">
    <label class="txt" for="password">Mật khẩu</label>
    <input id="password" class="re-input" name="password" type="password" placeholder="Mật khẩu" required autocomplete="current-password">
</div>

                            <div class="group-sup">
                                <a class="txt forgot-password" href="{{ route( 'forgot-pass') }}">Quên mật khẩu</a>
                                <a class="txt sign-up" href="{{ route('register') }}">Bạn là thành viên mới? Đăng ký tại đây</a>
                            </div>
                            <button class="btn btn-pri" type="submit">
                                <span class="txt">Đăng nhập</span>
                            </button>
                        </div>
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