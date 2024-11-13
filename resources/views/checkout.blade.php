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
    .bread-list li:nth-child(5){
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
.container {
    max-width: 700px;
    margin: auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

/* Product Summary */
.cart-summary {
    display: flex;
    align-items: center;
    padding: 10px 0;
}

.cart-summary img {
    border-radius: 4px;
    margin-right: 15px;
}

.cart-summary p {
    font-weight: bold;
    font-size: 18px;
    color: #333;
}

input[type="number"] {
    width: 50px;
    padding: 5px;
    font-size: 16px;
    margin-left: 10px;
}

/* Form Header */
h4 {
    color: #9c8679;
    font-weight: bold;
    margin-bottom: 20px;
    font-size: 20px;
}

/* Form Labels */
.form-group label {
    font-weight: bold;
    color: #333;
    margin-bottom: 5px;
    display: inline-block;
}

/* Form Inputs */
.form-group input,
.form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-bottom: 15px;
    font-size: 14px;
}

.form-group textarea {
    resize: vertical;
    min-height: 60px;
}

/* Summary Section */
.summary p {
    font-size: 16px;
    color: #333;
    margin-bottom: 5px;
}

.summary p:last-child {
    font-weight: bold;
    color: #d9534f;
}

/* Payment Method */
.payment-method {
    margin-top: 20px;
}

.payment-method label {
    font-size: 14px;
    color: #333;
}

.payment-method input[type="radio"] {
    margin-right: 5px;
}

/* Submit Button */
.btn-primary {
    background-color: #fb923c;
    border: none;
    color: white;
    padding: 12px 25px;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    border-radius: 5px;
    width: 100%;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #f97316;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .container {
        padding: 15px;
    }
    .cart-summary {
        flex-direction: column;
        align-items: flex-start;
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
                <li><a href="{{ route('product.detail', ['id' => $product->id]) }}">Sản phẩm</a></li>
                <li><img src="http://127.0.0.1:8000/assets/images/logo/arrow.png"alt=""></li>
                <li>Thanh toán</li>
            </ul>
        </div>
   </section>
   <div class="container">
    <div class="row">
        <!-- Product Summary -->
        <div class="col-md-8">
            <h4>{{ $product->thuongHieu }} {{ $product->name }}</h4>
            <div class="cart-summary">
                <img src="http://127.0.0.1:8000/assets/images/anhnuochoa/all/{{$product->image}}" alt="{{ $product->name }}" style="width: 100px;">
                <p>{{ number_format($product->giaTienLon) }} ₫</p>
                <input type="number" value="1" min="1">
            </div>
        </div>

        <!-- Checkout Form -->
        <div class="col-md-4">
            <h4>Thanh Toán và Giao Hàng</h4>
            <form action="{{ route('checkout.process', ['id' => $product->id]) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="full_name">Họ và tên *</label>
                    <input type="text" class="form-control" id="full_name" name="full_name" required>
                </div>

                <div class="form-group">
                    <label for="address">Địa chỉ *</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>

                <div class="form-group">
                    <label for="phone">Số điện thoại *</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="notes">Ghi chú đơn hàng (tùy chọn)</label>
                    <textarea class="form-control" id="notes" name="notes"></textarea>
                </div>

                <hr>
                
                <div class="summary">
                    <p>Tạm tính (1 sản phẩm): {{ number_format($product->giaTienLon) }} ₫</p>
                    <p>Giao hàng: Miễn phí ship mọi đơn hàng</p>
                    <p>Tổng: {{ number_format($product->giaTienLon) }} ₫</p>
                </div>

                <div class="payment-method">
                    <label>Chọn phương thức thanh toán:</label><br>
                    <input type="radio" id="cash_on_delivery" name="payment_method" value="cash_on_delivery" checked>
                    <label for="cash_on_delivery">Trả tiền mặt khi nhận hàng</label><br>

                    <input type="radio" id="bank_transfer" name="payment_method" value="bank_transfer">
                    <label for="bank_transfer">Chuyển khoản ngân hàng</label><br>

                    <input type="radio" id="qr_transfer" name="payment_method" value="qr_transfer">
                    <label for="qr_transfer">Chuyển khoản ngân hàng (Quét mã QR)</label>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Đặt Hàng</button>
            </form>
        </div>
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