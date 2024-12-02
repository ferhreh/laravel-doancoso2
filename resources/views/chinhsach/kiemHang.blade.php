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
/* Global Styles */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    color: #333;
}

/* Container */
.container-kiemHang {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Header Section */
.header {
    text-align: center;
    margin-bottom: 20px;
}

.header h1 {
    font-size: 2rem;
    color: #9c8679;
    margin-bottom: 10px;
}

.header p {
    font-size: 0.9rem;
    color: #777;
}

/* Content Section */
.content p {
    margin: 10px 0;
    text-align: justify;
}

.content h2 {
    font-size: 1.5rem;
    color: #9c8679;
    border-left: 4px solid #9c8679;
    padding-left: 10px;
    margin-top: 20px;
}

.content ul {
    list-style: disc;
    padding-left: 20px;
    margin: 10px 0;
}

.content ul li {
    margin-bottom: 10px;
}

.content strong {
    color: #e63946;
}

/* Responsive Design */
@media (max-width: 768px) {
    .container {
        padding: 15px;
    }

    .header h1 {
        font-size: 1.5rem;
    }

    .content h2 {
        font-size: 1.25rem;
    }
}

.menu-item a{
    text-align: left;
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
                <li>Chính sách kiểm hàng</li>
            </ul>
        </div>
   </section>
   <section>
   <div class="container-kiemHang">
        <!-- Header Section -->
        <header class="header">
            <h1>Chính sách kiểm hàng</h1>
        </header>

        <!-- Content Section -->
        <section class="content">
            <p>Trước khi nhận hàng và thanh toán, Quý Khách được quyền kiểm tra sản phẩm. Không hỗ trợ thử hàng.</p>
            <p>Quý Khách vui lòng mở gói hàng kiểm tra để đảm bảo đơn hàng được giao đúng mẫu mã, số lượng như đơn hàng đã đặt. <strong>Không thử hay dùng thử sản phẩm.</strong></p>
            <p>Sau khi đồng ý với món hàng được giao đến, Quý Khách thanh toán với nhân viên giao hàng (trường hợp đơn hàng được ship COD) và nhận hàng.</p>
            <p>Trường hợp Quý Khách không ưng ý với sản phẩm, Quý Khách có thể từ chối nhận hàng. Tại đây, chúng tôi sẽ thu thêm chi phí hoàn hàng, tương đương với phí ship của đơn hàng Quý Khách đã đặt.</p>

            <h2>Lưu ý:</h2>
            <ul>
                <li>Khi Quý Khách kiểm tra đơn hàng, nhân viên giao nhận buộc phải đợi Quý Khách kiểm tra hàng hóa bên trong gói hàng. Trường hợp nhân viên từ chối cho Quý Khách kiểm tra hàng hóa, Quý Khách vui lòng liên hệ với Laluz.vn qua hotline: <strong>0941417777</strong> để được hỗ trợ.</li>
                <li>TUANHALAN sẽ không chịu trách nhiệm về số lượng, mẫu mã cũng như lỗi của sản phẩm, sau khi đơn hàng đã được giao hàng thành công.</li>
                <li>Quý Khách tránh dùng vật sắc nhọn để mở gói hàng để tránh gây hư hỏng cho sản phẩm bên trong. Đối với những trường hợp sản phẩm bị hư hỏng do lỗi từ phía Khách hàng, Laluz.vn rất tiếc không thể hỗ trợ Quý Khách đổi/trả/bảo hành sản phẩm.</li>
            </ul>
        </section>
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