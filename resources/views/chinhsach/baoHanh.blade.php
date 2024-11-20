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
    .container-baoHanh {
    max-width: 800px;
    margin: 20px auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
h1{
    color: #9c8679;
    padding-left: 10px;
    text-align: center;
}
h2 {
    font-size: 1.5rem;
    color: #9c8679;
    border-left: 4px solid #9c8679;
    padding-left: 10px;
    margin-top: 20px;
}

ul {
    margin: 10px 0;
    padding-left: 20px;
}

ul li {
    margin-bottom: 8px;
}

strong {
    color: #555;
}

.warranty-coverage,
.warranty-exclusions,
.return-policy,
.notice {
    margin-bottom: 20px;
}

.warranty-coverage ul,
.warranty-exclusions ul,
.return-policy ul,
.notice ul {
    list-style-type: none;
}

.notice ul {
    margin-top: 10px;
}

.notice li {
    font-weight: bold;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .container-baoHanh {
        padding: 15px;
    }

    h1, h2 {
        font-size: 1.5rem;
    }

    ul {
        padding-left: 15px;
    }
}

@media (max-width: 480px) {
    h1, h2 {
        font-size: 1.2rem;
    }

    body {
        font-size: 14px;
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
                <li>Chính sách bảo hành</li>
            </ul>
        </div>
   </section>
   <div class="container-baoHanh">
    <header>
        <h1>Chính sách bảo hành</h1>
    </header>
    <section class="warranty-coverage">
        <h2>1. Trường hợp được bảo hành:</h2>
        <ul>
            <li>Sản phẩm vừa được giao không đúng như hình ảnh cung cấp hoặc trên website</li>
        </ul>
    </section>
    <section class="warranty-exclusions">
        <h2>2. Trường hợp không được bảo hành:</h2>
        <ul>
            <li>Sản phẩm bị trầy xước do quá trình sử dụng lâu ngày</li>
            <li>Sản phẩm bị bể móp, biến dạng do bị va đập</li>
            <li>Sản phẩm bị bong tem mác của nhà sản xuất</li>
        </ul>
    </section>
    <section class="return-policy">
        <h2>3. Điều kiện đổi trả hàng hoặc hoàn tiền 100%:</h2>
        <ul>
            <li>Sản phẩm phát hiện bị lỗi của nhà sản xuất khi nhận hàng.</li>
            <li>Sản phẩm không giống với sản phẩm mà Quý khách đã đặt hàng trên website của chúng tôi.</li>
        </ul>
    </section>
    <section class="notice">
        <h2>Lưu ý:</h2>
        <ul>
            <li>Khách hàng cần đổi trả hàng trong vòng 02 ngày làm việc tính từ thời điểm quý khách nhận hàng.</li>
            <li>Sản phẩm đổi trả cần nguyên vẹn nhãn mác, hộp, bao bì gốc của sản phẩm như khi Quý khách nhận hàng lúc đầu.</li>
        </ul>
    </section>
</div>
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