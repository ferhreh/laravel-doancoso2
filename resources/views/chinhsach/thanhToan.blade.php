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
    .container-thanhToan {
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

.payment-methods,
.bank-info,
.commitment {
    margin-bottom: 20px;
}

.payment-methods ul {
    list-style-type: none;
}

.commitment p {
    text-align: center;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .container-thanhToan {
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
                <li>Chính sách thanh toán</li>
            </ul>
        </div>
   </section>
   <div class="container-thanhToan">
    <header>
        <h1>Chính sách thanh toán</h1>
    </header>
    <section class="payment-methods">
        <h2>Có 3 hình thức thanh toán:</h2>
        <ul>
            <li><strong>Cách 1:</strong> Thanh toán tiền mặt trực tiếp tại địa chỉ của chúng tôi.</li>
            <li><strong>Cách 2:</strong> Thanh toán khi nhận hàng (COD): Khách hàng xem hàng tại nhà, thanh toán tiền mặt cho nhân viên giao nhận hàng.</li>
            <li><strong>Cách 3:</strong> Chuyển khoản trước: Quý khách chuyển khoản trước, sau đó chúng tôi tiến hành giao hàng theo thỏa thuận hoặc hợp đồng với Quý khách.</li>
        </ul>
    </section>
    <section class="bank-info">
        <h2>Thông tin tài khoản</h2>
        <p><strong>CÔNG TY TUANHALAN – 2302200567899 – MBbank CHI NHÁNH ĐÀ NẴNG</strong></p>
        <ul>
            <li><strong>Lưu ý:</strong> Nội dung chuyển khoản: ghi rõ Số điện thoại hoặc Số đơn hàng</li>
            <li>Sau khi chuyển khoản, chúng tôi sẽ liên hệ xác nhận và tiến hành giao hàng.</li>
            <li>Nếu sau thời gian thỏa thuận mà chúng tôi không giao hàng hoặc không phản hồi lại, quý khách có thể gửi khiếu nại trực tiếp về địa chỉ trụ sở.</li>
            <li>Đối với khách hàng có nhu cầu mua số lượng lớn để kinh doanh hoặc buôn sỉ, vui lòng liên hệ trực tiếp với chúng tôi để có chính sách giá cả hợp lý. Và việc thanh toán sẽ được thực hiện theo hợp đồng.</li>
        </ul>
    </section>
    <section class="commitment">
        <h2>Cam kết của chúng tôi</h2>
        <p>Chúng tôi cam kết kinh doanh minh bạch, hợp pháp, bán hàng chất lượng, có nguồn gốc.</p>
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