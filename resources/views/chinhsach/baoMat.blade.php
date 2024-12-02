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
    .container-baoMat {
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
.content h2 {
    font-size: 1.5rem;
    color: #9c8679;
    border-left: 4px solid #9c8679;
    padding-left: 10px;
    margin-top: 20px;
}

.content p,
.content ul {
    margin: 10px 0;
}

.content ul {
    list-style: disc;
    padding-left: 20px;
}

.content a {
    color: #9c8679;
    text-decoration: none;
}

.content a:hover {
    text-decoration: underline;
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
                <li>Chính sách bảo mật thông tin</li>
            </ul>
        </div>
   </section>
   <div class="container-baoMat">
        <!-- Header Section -->
        <header class="header">
            <h1>Chính sách bảo mật thông tin</h1>
        </header>

        <!-- Content Section -->
        <section class="content">
            <h2>1. Mục đích và phạm vi thu thập thông tin</h2>
            <p>TUANHALAN không bán, chia sẻ hay trao đổi thông tin cá nhân của khách hàng thu thập trên trang web cho một bên thứ ba nào khác.</p>
            <p>Thông tin cá nhân thu thập được sẽ chỉ được sử dụng trong nội bộ công ty.</p>
            <p>Khi bạn liên hệ đăng ký dịch vụ, thông tin cá nhân mà TUANHALAN thu thập bao gồm:</p>
            <ul>
                <li>Họ và tên</li>
                <li>Địa chỉ</li>
                <li>Điện thoại</li>
                <li>Email</li>
                <li>Tên sản phẩm</li>
                <li>Số lượng</li>
                <li>Thời gian giao nhận sản phẩm</li>
            </ul>

            <h2>2. Phạm vi sử dụng thông tin</h2>
            <ul>
                <li>Hỗ trợ khách hàng</li>
                <li>Cung cấp thông tin liên quan đến dịch vụ</li>
                <li>Xử lý đơn đặt hàng và cung cấp dịch vụ và thông tin qua trang web của chúng tôi theo yêu cầu của bạn</li>
                <li>Gửi thông tin sản phẩm, dịch vụ mới, hoặc các sự kiện sắp tới nếu quý khách đăng ký nhận email</li>
                <li>Hỗ trợ quản lý tài khoản và giao dịch tài chính trực tuyến</li>
            </ul>

            <h2>3. Thời gian lưu trữ thông tin</h2>
            <p>Thông tin cá nhân được lưu trữ đến khi khách hàng yêu cầu xóa thông qua email: <a href="mailto:tuandiep.230205@gmail.com">tuandiep.230205@gmail.com</a></p>

            <h2>4. Những người hoặc tổ chức có thể được tiếp cận với thông tin cá nhân</h2>
            <ul>
                <li>CÔNG TY TUANHALAN</li>
                <li>Các đối tác có hợp đồng thực hiện dịch vụ với công ty</li>
            </ul>

            <h2>5. Địa chỉ của đơn vị thu thập và quản lý thông tin cá nhân</h2>
            <p>Công ty TUANHALAN</p>
            <p>Địa chỉ:  470 Đ. Trần Đại Nghĩa, Hoà Hải, Ngũ Hành Sơn, Đà Nẵng 550000, Vietnam</p>
            <p>Điện thoại: 0917513519</p>
            <p>Email: <a href="mailto:tuandiep.230205@gmail.com">tuandiep.230205@gmail.com</a></p>

            <h2>6. Phương tiện và công cụ để người dùng tiếp cận và chỉnh sửa dữ liệu cá nhân của mình</h2>
            <p>Khách hàng có thể liên hệ qua email: <a href="mailto:tuandiep.230205@gmail.com">tuandiep.230205@gmail.com</a> hoặc số điện thoại: 0917513519.</p>

            <h2>7. Cơ chế tiếp nhận và giải quyết khiếu nại</h2>
            <p>TUANHALAN cam kết bảo vệ thông tin cá nhân, không chia sẻ hoặc bán thông tin cho bên thứ ba. Liên hệ qua hotline 0917513519 hoặc email: <a href="mailto:tuandiep.230205@gmail.com">tuandiep.230205@gmail.com</a> để xử lý khiếu nại.</p>
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