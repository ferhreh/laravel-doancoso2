<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>
    <footer>  
        <main>
            <hr>
            <div class="footer-ctn">
                <div class="footer-endow">
                    <h3>ĐĂNG KÝ ĐỂ NHẬN ƯU ĐÃI</h3>
                    <form action="" method="post">
                        <input type="text" name="address-email" placeholder="Địa chỉ email của bạn">
                        <button>Gửi</button>
                    </form>
                    <p>CẬP NHẬT NHỮNG ƯU ĐÃI MỚI NHẤT CỦA CHÚNG TÔI</p>
                    <a href="https://www.facebook.com/profile.php" target="_blank"><img style="width: 32px; height: 32px;" src="http://127.0.0.1:8000/assets/images/logo/facebook-logo.png" alt=""></a>
                    <a href="https://www.tiktok.com/@binmt_" target="_blank"><img src="http://127.0.0.1:8000/assets/images/logo/tiktok.png" alt=""></a>
                    <a href="https://www.instagram.com/dmt_2302/" target="_blank"><img src="http://127.0.0.1:8000/assets/images/logo/instagram.png" alt=""></a>
                </div>
                <div class="footer-we">
                    <h3>VỀ CHÚNG TÔI</h3>
                    <a href="">Trang Chủ</a>
                    <a href="">Sản Phẩm</a>
                </div>
                <div class="footer-service">
                    <h3>DỊCH VỤ KHÁCH HÀNG</h3>
                    <a href="{{route('kiemHang')}}">Chính sách kiểm hàng</a>
                    <a href="{{route('vanChuyen')}}">Chính sách vận chuyển và giao hàng</a>
                    <a href="{{route('khieuNai')}}">Chính sách xử lý khiếu nại</a>
                    <a href="{{route('thanhToan')}}">Chính sách thanh toán</a>
                    <a href="{{route('baoHanh')}}">Chính sách bảo hành</a>
                    <a href="{{route('baoMat')}}">Chính sách bảo mật thông tin</a>
                </div>
                <div class="footer-system">
                    <h3>HỆ THỐNG CỬA HÀNG</h3>
                    <a href=""><img style="margin-right: 0.7rem;" src="http://127.0.0.1:8000/assets/images/logo/home.png" alt="">232 Bình Triều, Thăng Bình, Quảng Nam</a>
                    <a href=""><img style="margin-right: 0.7rem;" src="http://127.0.0.1:8000/assets/images/logo/phone-call.png" alt="">0917513519</a>
                    <a href=""><img style="margin-right: 0.7rem;" src="http://127.0.0.1:8000/assets/images/logo/mail.png" alt="">tuandm.23ns@vku.udn.vn</a>
                </div>
            </div>
        </main>
    </footer>
</body>
</html>