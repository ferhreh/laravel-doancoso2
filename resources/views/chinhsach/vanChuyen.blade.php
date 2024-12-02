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
/* Container */
.container-vanChuyen {
    max-width: 900px;
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
    margin-top: 20px;
    border-left: 4px solid #9c8679;
    padding-left: 10px;
}

.content p {
    margin: 10px 0;
    text-align: justify;
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
                <li>Chính sách vận chuyển và giao nhận</li>
            </ul>
        </div>
   </section>
   <div class="container-vanChuyen">
        <!-- Header Section -->
        <header class="header">
            <h1>Chính sách vận chuyển và giao nhận</h1>
        </header>

        <!-- Content Section -->
        <section class="content">
            <!-- Phương thức giao hàng -->
            <h2>1. Các phương thức giao hàng</h2>
            <ul>
                <li>Khách hàng mua trực tiếp hàng tại công ty, cửa hàng của chúng tôi.</li>
                <li>Ship hàng.</li>
            </ul>

            <!-- Thời hạn giao hàng -->
            <h2>2. Thời hạn ước tính cho việc giao hàng</h2>
            <p>Thông thường sau khi nhận được thông tin đặt hàng, chúng tôi sẽ xử lý đơn hàng trong vòng 24h và phản hồi lại thông tin cho khách hàng về việc thanh toán và giao nhận.</p>
            <p>Thời gian giao hàng thường trong khoảng từ 3-5 ngày kể từ ngày chốt đơn hàng hoặc theo thỏa thuận với khách khi đặt hàng.</p>
            <p><strong>Tuy nhiên, một số trường hợp giao hàng có thể kéo dài hơn:</strong></p>
            <ul>
                <li>Không liên lạc được với khách hàng qua điện thoại.</li>
                <li>Địa chỉ giao hàng không chính xác hoặc khó tìm.</li>
                <li>Số lượng đơn hàng tăng đột biến.</li>
                <li>Đối tác vận chuyển hoặc cung cấp hàng chậm.</li>
            </ul>
            <p>Phí vận chuyển sẽ được thông báo cụ thể khi xác nhận đơn hàng.</p>

            <!-- Giới hạn địa lý -->
            <h2>3. Các giới hạn về mặt địa lý cho việc giao hàng</h2>
            <p>Đối với khách tỉnh mua số lượng lớn hoặc khách buôn sỉ, TUANHALAN sẽ nhờ các dịch vụ giao nhận từ công ty vận chuyển. Phí sẽ được tính theo đơn vị vận chuyển hoặc thỏa thuận giữa hai bên.</p>

            <!-- Chứng từ hàng hóa -->
            <h2>4. Chứng từ hàng hóa trong quá trình giao nhận</h2>
            <p>Mỗi đơn hàng đều được đóng gói và niêm phong cẩn thận. Bao bì sẽ bao gồm thông tin:</p>
            <ul>
                <li>Người nhận: Tên, số điện thoại và địa chỉ.</li>
                <li>Mã vận đơn.</li>
            </ul>
            <p>Hóa đơn tài chính hoặc phiếu xuất kho (nếu có) sẽ được gửi kèm để hỗ trợ khiếu nại và đảm bảo giá trị hàng hóa lưu thông hợp lệ.</p>

            <!-- Hư hỏng khi vận chuyển -->
            <h2>5. Trách nhiệm về trường hợp hàng bị hư hỏng do quá trình vận chuyển</h2>
            <p>Nếu hàng hóa bị hư hỏng trong quá trình vận chuyển, TUANHALAN chịu trách nhiệm giải quyết vấn đề cho khách hàng. Khách hàng có quyền từ chối nhận hàng và yêu cầu đổi trả theo chính sách “đổi trả hoàn phí”.</p>
            <p>Mọi vấn đề phát sinh sẽ được TUANHALAN làm việc với đối tác vận chuyển để đền bù theo thỏa thuận hợp tác.</p>

            <!-- Lưu ý -->
            <h2>Lưu ý:</h2>
            <p>Trong trường hợp giao hàng bị chậm trễ, chúng tôi sẽ thông báo kịp thời cho khách hàng để khách hàng có thể lựa chọn giữa việc <strong>hủy đơn hàng</strong> hoặc <strong>tiếp tục chờ hàng.</strong></p>
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