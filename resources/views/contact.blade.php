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
.contact-section {
    padding: 20px;
    text-align: center;
    background-color: #f9f9f9;
}

h1, h2 {
    color: #9c8679;
}

.contact-info {
    margin: 20px auto;
    max-width: 800px;
    text-align: left;
}

.contact-info p {
    margin: 10px 0;
}

.contact-info a {
    color: #9c8679;
}

.map iframe {
    width: 100%;
    border-radius: 5px;
}

.contact-form {
    margin: 30px auto;
    max-width: 600px;
    text-align: left;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.contact-form input, textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.contact-form button {
    width: 100%;
    padding: 10px;
    background-color: #9c8679;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #9c8679;
}

.success {
    color: green;
    font-weight: bold;
}

.error {
    color: red;
    font-size: 0.9rem;
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
                <li>Liên hệ</li>
            </ul>
        </div>
   </section>
   <section class="contact-section">
        <h1>LIÊN HỆ</h1>

        <!-- Thông tin liên hệ -->
        <div class="contact-info">
            <p>Showroom: <strong>470 Đ. Trần Đại Nghĩa, Hoà Hải, Ngũ Hành Sơn, Đà Nẵng 550000, Vietnam</strong></p>
            <p>Hotline: <span>0917513519</span>, <span>0332933892</span></p>
            <p>Email: <a href="mailto:tuandiep.230205@gmail.com">tuandiep.230205@gmail.com</a></p>
        </div>

        <!-- Bản đồ -->
        <div class="map">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.4987421764583!2d108.250774!3d16.038872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142191b1c2b9b7d%3A0x10a2ec1c2534d4b6!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBDb25nIE5naOG7hyBUaMO0bmcgVGluIFbhu4sgSOG6oW4!5e0!3m2!1svi!2s!4v1697026761291!5m2!1svi!2s" 
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
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