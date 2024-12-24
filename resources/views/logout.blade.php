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
    .info-account{
        padding: 50px 0 50px 0;
        height: 246.4px;
    }
    .info-account-flex{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 246.4px;
    }
.info-account-col-left {
    width: 100%; /* Cho phép chiếm 100% chiều rộng khi màn hình nhỏ */
    max-width: 230px; /* Giới hạn chiều rộng tối đa */
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.inner {
    display: flex;
    flex-direction: column;
    width: 100%;
}

/* Ảnh đại diện và nút upload */
.ava-label {
    display: block;
    cursor: pointer;
    text-align: center;
    margin-bottom: 20px;
}
/* Link phần thông tin, lịch sử, và đổi mật khẩu */
.info-account .link {
    display: flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
    color: #000;
    margin: 10px 0;
    font-size: 14px;
}

.info-account .link img {
    width: 16px;
    height: 16px;
}

/* Button đăng xuất */
.form-logout {
    width: 100%;
    text-align: center;
    margin-top: 20px;
}

.btn-logout {
    background-color: #a58a78;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
}
.group-form> input{
    height: 2rem;
}
/* Container bên phải */
.info-account-col-right {
    width: 55%;
}
.info-account-item span{
    color: #5f5f5f;
    font-size: 16px;
    font-weight: 500;
    transition: 0.3s linear;
    margin-left: 0.6rem;
}
.info-account-item span:hover{
    color: #a58a78;
}
.e-commerce {
    padding: 20px;
    border-radius: 10px;
}

.form-info-account {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
}

.group-form {
    display: flex;
    flex-direction: column;
}
.group-form input:focus{
    outline: 0.5px solid #a58a78 ;
}
.name-group {
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 5px;
}
.name-group>input{
    width: 98%;
    height: 2rem;
}
.btn-thay-doi {
    background-color: #a58a78;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    width: 150px;
    text-align: center;
    margin-top: 20px;
}
.btn-thay-doi span{
    text-align: center;
}

/* Responsive cho màn hình nhỏ hơn 768px */
@media (max-width: 768px) {
    .info-account-flex {
        flex-direction: column; /* Sắp xếp theo cột khi thu nhỏ màn hình */
    }
    .info-account {
    padding: 250px 20px; /* Tăng padding nếu cần để tránh đè lên header và footer */
}
.info-account-col-left{
    width: 90%;
    max-width: none;
}
    .info-account-col-right {
        width: 100%; /* Chiếm toàn bộ chiều rộng màn hình */
        max-width: none; /* Bỏ giới hạn chiều rộng tối đa */
        margin-bottom: 20px; /* Thêm khoảng cách giữa các cột */
    }

    .form-info-account {
        grid-template-columns: 1fr; /* Đổi thành một cột */
    }
}

/* Responsive cho màn hình nhỏ hơn 480px */
@media (max-width: 480px) {
    .info-account {
        padding: 300px 0;
    }
    .info-account-col-left{
    width: 80%;
    max-width: none;
}
    .btn-thay-doi, .btn-logout {
        width: 100%; /* Cho phép các nút chiếm toàn bộ chiều rộng */
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
                <li>Tài khoản</li>
            </ul>
        </div>
   </section>
   <section class="info-account">
        <div class="info-account-flex">
            <div class="info-account-col-left">
                <div class="inner">
                    <div class="info-and-img">
                        <label class="ava-label" for="fileUpLoad">
                            <div class="loading-img">
                                <img src="" class="fileImg img-src">
                            </div>
                            <input class="upload-image" type="file" accept=".png" hidden id="fileUpLoad">
                        </label>
                        <!-- ????? -->
                        <p class="name"></p>
                    </div>
                    <div class="info-account-item">                    
                        <a class="link" href="">
                            <span class="txt">Thông tin sản phẩm</span>
                         </a>           
                        <a class="link" href="{{ route('lich_su_don_hang') }}">
                            <span class="txt">Lịch sử đơn hàng</span>
                         </a>
                         <a class="link" href="">
                            <span class="txt">Thay đổi mật khẩu</span>
                         </a>                          
                    </div>
                    <form action="{{ route('logout') }}" method="POST" class="form-logout">
                        @csrf
                        <button type="submit" class="btn-logout"><span class="txt">Đăng xuất</span></button>
                    </form>
                </div>
            </div>
            <div class="info-account-col-right">
                <div class="e-commerce">
                    <div class="inner">
                    <form action="{{ route('account.update') }}" method="post">
    @csrf
    <div class="form-info-account">
        <div class="group-form">
            <label class="name-group">
                Họ và Tên
                <br>
                <input type="text" name="your-name" required value="{{ old('your-name', $user->name) }}" placeholder="Full Name">
            </label>
        </div>
        <div class="group-form">
            <label class="name-group">
                Email
                <br>
                <input type="text" name="your-email" required value="{{ old('your-email', $user->email) }}" placeholder="Your email" readonly>
            </label>
        </div>
        <div class="group-form">
            <label class="name-group">
                Ngày sinh
                <br>
                <input class="date" name="your-birthday" value="{{ old('your-birthday', $user->birthDay) }}" placeholder="năm/tháng/ngày">
            </label>
        </div>
        <div class="group-form">
            <label class="name-group">
                Số Điện thoại
                <br>
                <input type="tel" name="your-phone" pattern="[0-9]{10}" required value="{{ old('your-phone', $user->phoneNumber) }}" placeholder="Số Điện thoại">
            </label>
        </div>
    </div>
    <button class="btn-thay-doi" type="submit"><span class="txt">Thay đổi</span></button>
</form>

                    </div>
                </div>
            </div>
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