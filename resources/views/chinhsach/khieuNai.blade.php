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
    .policy-container {
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

ul, ol {
    margin: 10px 0;
    padding-left: 20px;
}

ul li, ol li {
    margin-bottom: 8px;
}

strong {
    color: #555;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .policy-container {
        padding: 15px;
    }

    h1, h2 {
        font-size: 1.5rem;
    }

    ul, ol {
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
                <li>Chính sách Khiếu nại</li>
            </ul>
        </div>
   </section>
   <div class="policy-container">
        <h1>Chính sách xử lý khiếu nại</h1>
        <ul>
            <li>Tiếp nhận mọi khiếu nại của khách hàng liên quan đến việc sử dụng dịch vụ của công ty.</li>
            <li>Tất cả mọi trường hợp bảo hành, quý khách có thể liên hệ với chúng tôi để làm thủ tục bảo hành.</li>
            <li>Thời gian giải quyết khiếu nại trong thời hạn tối đa là 03 (ba) ngày làm việc kể từ khi nhận được khiếu nại của khách hàng. Trong trường hợp bất khả kháng 2 bên sẽ tự thương lượng.</li>
        </ul>
        <h2>Quy trình tiếp nhận và xử lý khiếu nại</h2>
        <ol>
            <li><strong>Tiếp nhận khiếu nại:</strong>
                <ul>
                    <li>Khách hàng có thể gửi khiếu nại thông qua:</li>
                    <ul>
                        <li><strong>Email:</strong> tuandiep.230205@gmail.com</li>
                        <li><strong>Hotline:</strong> 0917513519</li>
                    </ul>
                    <li>Khi gửi khiếu nại, khách hàng cần cung cấp đầy đủ thông tin:
                        <ul>
                            <li>Họ tên.</li>
                            <li>Số điện thoại liên hệ.</li>
                            <li>Mô tả chi tiết vấn đề gặp phải.</li>
                            <li>Ảnh chụp hóa đơn hoặc thông tin đặt hàng liên quan (nếu có).</li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ol>
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