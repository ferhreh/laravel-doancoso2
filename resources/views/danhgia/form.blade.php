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
.container {
    max-width: 80rem;
    margin: 20px auto;
    padding: 40px !important;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
}

.container h3 {
    text-align: center;
    color: #C96F3B;
    font-size: 24px;
    margin-bottom: 20px;
}

/* Form */
.form-group {
    margin-bottom: 20px;
}

label {
    font-weight: bold;
    color: #333;
    margin-top: -1rem;
}

textarea, input[type="file"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    outline: none;
    font-size: 14px;
}

textarea:focus, input[type="file"]:focus {
    border-color: #C96F3B;
    box-shadow: 0px 0px 5px rgba(201, 111, 59, 0.5);
}

textarea {
    resize: none;
}

/* Nút gửi đánh giá */
button.btn {
    display: block;
    width: 100%;
    padding: 12px;
    background-color: #C96F3B;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button.btn:hover {
    background-color: #A54B2F;
}

/* Ngôi sao đánh giá */
div.stars {
    width: 20rem;
    margin: 15px 0;
    display: inline-block;
}
.star{
    position: relative;
    left: 0;
}
input.star {
    display: none;
}

label.star {
    float: right;
    font-size: 40px;
    color: #ccc;
    cursor: pointer;
    transition: transform 0.2s ease, color 0.3s ease;
}

input.star:checked ~ label.star:before {
    content: '\f005';
    color: #FD4;
}

label.star:hover, label.star:hover ~ label.star {
    transform: scale(1.2);
    color: #FD4;
}

label.star:before {
    content: '\f005';
    font-family: FontAwesome;
}

/* Điều hướng cố định */
.fixed-nav {
    position: fixed;
    bottom: 15px;
    right: 15px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    z-index: 100;
}

.fixed-nav-item a {
    display: block;
    width: 50px;
    height: 50px;
    background-color: #C96F3B;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    font-size: 20px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.fixed-nav-item a:hover {
    background-color: #A54B2F;
    transform: translateY(-5px);
}

.fixed-nav .back-to-top {
    background-color: #333;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    font-size: 20px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.fixed-nav .back-to-top:hover {
    background-color: #000;
    transform: translateY(-5px);
}

/* Responsive */
@media (max-width: 768px) {
    .container {
        padding: 15px;
    }

    .container h3 {
        font-size: 20px;
    }

    button.btn {
        padding: 10px;
        font-size: 14px;
    }

    div.stars label.star {
        font-size: 30px;
    }

    .fixed-nav {
        bottom: 10px;
        right: 10px;
    }

    .fixed-nav-item a {
        width: 40px;
        height: 40px;
        font-size: 16px;
    }

    .fixed-nav .back-to-top {
        width: 40px;
        height: 40px;
    }
}

@media (max-width: 480px) {
    .bread-list {
        flex-direction: column;
        align-items: flex-start;
    }

    .container h3 {
        text-align: center;
        font-size: 18px;
    }

    .fixed-nav {
        bottom: 5px;
        right: 5px;
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
                <li>Đánh giá</li>
            </ul>
        </div>
   </section>
    <div class="container">
        <h3>Đánh giá sản phẩm: {{ $donHang->tenDonHang }}</h3>
        <form action="{{ route('danhGia.store', $donHang->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="stars">
                <label for="rating">Đánh giá</label>
    
                <input class="star star-5" id="star-5" type="radio" name="rating" value="5" />
                <label class="star star-5" for="star-5"></label>
                
                <input class="star star-4" id="star-4" type="radio" name="rating" value="4" />
                <label class="star star-4" for="star-4"></label>
                
                <input class="star star-3" id="star-3" type="radio" name="rating" value="3" />
                <label class="star star-3" for="star-3"></label>
    
                <input class="star star-2" id="star-2" type="radio" name="rating" value="2" />
                <label class="star star-2" for="star-2"></label>
                
                <input class="star star-1" id="star-1" type="radio" name="rating" value="1" />
                <label class="star star-1" for="star-1"></label>
            </div>


             <div class="form-group">
                  <label for="comment">Bình luận</label>
                  <textarea name="comment" id="comment" class="form-control" rows="5" required></textarea>
             </div>
    
             <div class="form-group">
                  <label for="image">Hình ảnh (tùy chọn)</label>
                 <input type="file" name="image" id="image" class="form-control-file">
            </div>
            
            <div class="form-group">
                <label for="video">Video (tùy chọn)</label>
                <input type="file" name="video" id="video" class="form-control-file">
            </div>
            
            <button type="submit" class="btn btn-success">Gửi đánh giá</button>
        </form>
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