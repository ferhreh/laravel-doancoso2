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
    /* CSS cơ bản */
.forgot-password {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f9f9f9;
    padding: 20px;
}

.inner {
    max-width: 400px;
    width: 100%;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    padding: 20px;
}

.forgot-form {
    text-align: center;
}

.forgot-hd .tt-sec {
    font-size: 1.5rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 20px;
}

.box-form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.group-form {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.group-form .txt {
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 5px;
    color: #555;
}

.group-form input {
    width: 100%;
    padding: 10px;
    font-size: 1rem;
    border: 1px solid #ddd;
    border-radius: 5px;
    outline: none;
    transition: border-color 0.3s;
}

.group-form input:focus {
    border-color: #9c8679;
}

.btn {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    padding: 10px 20px;
    font-size: 1rem;
    color: #fff;
    background-color: #9c8679;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
    transition: background-color 0.3s;
}
.btn-pri .txt {
    font-size: 1rem;
    font-weight: 600;
}

/* Responsive */
@media (max-width: 768px) {
    .inner {
        padding: 15px;
    }

    .forgot-hd .tt-sec {
        font-size: 1.3rem;
    }

    .group-form input {
        font-size: 0.9rem;
        padding: 8px;
    }

    .btn {
        padding: 8px 15px;
        font-size: 0.9rem;
    }
}

@media (max-width: 480px) {
    .forgot-password {
        padding: 10px;
    }

    .forgot-hd .tt-sec {
        font-size: 1.2rem;
    }

    .btn {
        padding: 7px 10px;
        font-size: 0.8rem;
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
                <li>Quên mật khẩu</li>
            </ul>
        </div>
   </section>
   <section class="forgot-password">
        <div class="inner">
            <div class="forgot-form">
                <div class="forgot-hd">
                    <p class="tt-sec">Đặt lại mật khẩu</p>
                </div>
                <form action="{{ route('send-reset-code') }}" method="post">
                    @csrf
                    <div class="box-form">
                        <div class="group-form">
                            <label class="txt" for="register_email">Nhập Email</label>
                            <input type="email" id="register_email" name="register_email" placeholder="Email" required>
                        </div>
                        <button class="btn btn-pri" type="submit"><span class="txt">Gửi</span></button>
                    </div>
                </form>
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