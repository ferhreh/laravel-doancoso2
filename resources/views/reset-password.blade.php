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
.reset-password {
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
    transition: border-color 0.3s ease;
}

.group-form input:focus {
    border-color: #9c8679;
}

button.btn.btn-pri {
    display: inline-block;
    width: 100%;
    padding: 10px;
    font-size: 1rem;
    background-color: #9c8679;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}


button.btn.btn-pri span.txt {
    font-weight: 600;
}

/* Responsive */
@media (max-width: 768px) {
    .inner {
        padding: 15px;
    }

    .forgot-hd .tt-sec {
        font-size: 1.25rem;
    }

    button.btn.btn-pri {
        font-size: 0.9rem;
        padding: 8px;
    }
}

@media (max-width: 480px) {
    .forgot-hd .tt-sec {
        font-size: 1rem;
    }

    button.btn.btn-pri {
        font-size: 0.8rem;
        padding: 6px;
    }
}
.warning-popup {
        position: fixed;
    top: 20px;
    right: -400px; /* Khởi đầu nằm ngoài màn hình bên phải */
    background-color: #fff;
    color: #d9534f;
    padding: 10px 20px;
    border: 1px solid #d9534f;
    border-left: 5px solid #d9534f; /* Đường viền màu đỏ bên trái */
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    font-size: 16px;
    z-index: 9999;
    display: flex;
    align-items: center;
    gap: 10px;
    transition: right 0.5s ease-in-out; /* Hiệu ứng trượt */
}
.warning-popup.show {
    right: 20px;
}
.warning-popup .icon {
    color: #d9534f;
    font-size: 20px;
}
.warning-popup .title {
    font-weight: bold;
    margin-bottom: 5px;
}
.warning-popup .message {
    margin: 0;
}
.warning-success {
        position: fixed;
    top: 20px;
    right: -400px; /* Khởi đầu nằm ngoài màn hình bên phải */
    background-color: #fff;
    color: #33CC66;
    padding: 10px 20px;
    border: 1px solid #33CC66;
    border-left: 5px solid #33CC66; /* Đường viền màu đỏ bên trái */
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    font-size: 16px;
    z-index: 9999;
    display: flex;
    align-items: center;
    gap: 10px;
    transition: right 0.5s ease-in-out; /* Hiệu ứng trượt */
}
.warning-success.show {
    right: 20px;
}
.warning-success .icon {
    color: #33CC66;
    font-size: 20px;
}

.warning-success .title {
    font-weight: bold;
    margin-bottom: 5px;
}

.warning-success .message {
    margin: 0;
}
</style>
<body>
@include('header')
<main>
@if(session('success'))
    <div class="warning-success">
        <div class="icon">✅</div> <!-- Thay bằng icon hoặc SVG -->
        <div>
            <div class="title">Thành công</div>
            <div class="message">{{ session('success') }}</div>
        </div>
    </div>
@endif  
@if(session('warning'))
<div class="warning-popup">
    <div class="icon">❌</div> <!-- Thay bằng icon hoặc SVG -->
    <div>
        <div class="title">Lỗi</div>
        <div class="message">{{ session('warning') }}</div>
    </div>
</div>
@endif
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
@if(session('success'))
    <script>
        // Hiển thị thông báo khi có warning trong session
        document.addEventListener("DOMContentLoaded", function() {
            const warningPopup = document.querySelector('.warning-success');
            if (warningPopup) {
                warningPopup.classList.add('show');
                setTimeout(function() {
                    warningPopup.classList.remove('show');
                }, 2000);  // Thông báo sẽ biến mất sau 2s
            }
        });
    </script>
@endif
@if(session('warning'))
    <script>
        // Hiển thị thông báo khi có warning trong session
        document.addEventListener("DOMContentLoaded", function() {
            const warningPopup = document.querySelector('.warning-popup');
            if (warningPopup) {
                warningPopup.classList.add('show');
                setTimeout(function() {
                    warningPopup.classList.remove('show');
                }, 2000);  // Thông báo sẽ biến mất sau 2s
            }
        });
    </script>
@endif
@include('footer')
</body>
</html>