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
    /* Main Container */
.confirmation-container {
    max-width: 600px;
    margin: 30px auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
    color: #333;
}

.confirmation-container h2 {
    text-align: center;
    color: #9c8679;
    margin-bottom: 15px;
}

.order-summary {
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 5px;
}

.order-summary p {
    margin-bottom: 8px;
    font-size: 14px;
}

.order-info p strong {
    display: inline-block;
    width: 140px;
    color: #333;
}

/* Order Details Table */
.order-details h4 {
    color: #9c8679;
    margin-top: 20px;
    margin-bottom: 10px;
}

.order-details table {
    width: 100%;
    border-collapse: collapse;
    font-size: 14px;
}

.order-details table th,
.order-details table td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.order-details table th {
    color: #9c8679;
}

.order-details table tr:last-child td {
    font-weight: bold;
}

.delivery-message {
    color: #333;
    font-size: 14px;
    margin-top: 5px;
}

/* Continue Shopping Button */
.btn-continue {
    display: block;
    width: 100%;
    padding: 10px;
    background-color:#9c8679;
    color: #ffffff;
    text-align: center;
    font-weight: bold;
    border-radius: 5px;
    cursor: pointer;
    border: none;
    margin-top: 20px;
}

.btn-continue:hover {
    background-color: #9c8679;
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
<div class="confirmation-container">
    <h2>Đơn hàng đã nhận</h2>
    <div class="order-summary">
        <p>🙏 Cảm ơn bạn. Đơn hàng của bạn đã được nhận.</p>
        <div class="order-info">
            <p><strong>Mã Đơn Hàng:</strong> {{ $product->id }}</p>
            <p><strong>Ngày:</strong> {{ now()->format('d/m/Y') }}</p>
            <p><strong>Tổng Cộng:</strong> {{ number_format(($totalPrice) ) }} ₫</p>
            <p><strong>Số điện thoại:</strong> {{ $phone }}</p>
            <p><strong>Phương Thức Thanh Toán:</strong> {{ ucfirst(str_replace('_', ' ', $payment_method)) }}</p>
            <p><strong>Địa Chỉ:</strong> {{ $address }}</p>
        </div>
        <p class="delivery-message">Trả tiền mặt khi giao hàng.</p>
        @if($payment_method === 'qr_transfer')
            <div class="qr-payment-info" style="margin-top: 15px; border: 1px solid #ddd; padding: 15px; border-radius: 5px;">
                <h4>Thông tin thanh toán qua chuyển khoản</h4>
                <p><strong>Mã QR:</strong></p>
                <img src="http://127.0.0.1:8000/assets/images/qr_thanhtoan/mbank.jpg" alt="QR Code" style="width: 150px; height: 150px;">
                <p><strong>Số tài khoản:</strong> 2302200567899</p>
                <p><strong>Tên ngân hàng:</strong>MBank</p>
                <p><strong>Chủ tài khoản:</strong>Diệp Mạnh Tuấn</p>
            </div>
        @else
            <p class="delivery-message">Trả tiền mặt khi giao hàng.</p>
        @endif
        <div class="order-details">
            <h4>Chi tiết đơn hàng</h4>
            <table>
                <tr>
                    <th>Sản Phẩm</th>
                    <th>Tổng</th>
                </tr>
                <tr>
                    <td>{{ $product->name }} × {{ $quantity }}</td>
                    <td>{{ number_format($totalPrice) }} ₫</td>
                </tr>
                <tr>
                    <td><strong>Tạm tính:</strong></td>
                    <td>{{ number_format($totalPrice) }} ₫</td>
                </tr>
                <tr>
                    <td><strong>Giao hàng:</strong></td>
                    <td>Miễn phí ship mọi đơn hàng</td>
                </tr>
                <tr>
                    <td><strong>Phương thức thanh toán:</strong></td>
                    <td>{{ ucfirst(str_replace('_', ' ', $payment_method)) }}</td>
                </tr>
                <tr>
                    <td><strong>Tổng cộng:</strong></td>
                    <td>{{ number_format($totalPrice) }} ₫</td>
                </tr>
            </table>
        </div>

        <form action="{{ route('form') }}" method="get">
            <button type="submit" class="btn-continue">Tiếp tục mua sắm</button>
        </form>
    </div>
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