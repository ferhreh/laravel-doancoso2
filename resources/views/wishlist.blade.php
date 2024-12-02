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
        color: #9c8679;
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
    .wishlist-main{
        display: flex;
        
    }
    .wishlist-item{
        padding: 10px;
    }
    .wishlist-item>p{
        text-align: center;
    }
    .wishlist-item form>button{
        width: 100%;
        height: 2.4rem;
        border: 0.2rem solid #c4c4c4;

    }
    h1{
        text-align: center;
    }
    .wishlist-main {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin: 20px 0;
}

.wishlist-item {
    text-align: center;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    padding: 15px;
    background-color: #fff;
    transition: box-shadow 0.3s ease;
}

.wishlist-item:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.wishlist-item img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin-bottom: 10px;
}

.wishlist-item form button {
    background-color: #9c8679;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 10px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.wishlist-item form button:hover {
    background-color: #9c8679;
}

h1 {
    font-size: 1.8rem;
    color: #333;
    margin-bottom: 20px;
}

/* Nút điều hướng cố định */
.fixed-nav {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 1000;
}

.fixed-nav-list {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.fixed-nav-item a,
.back-to-top {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
    background-color:#9c8679;
    color: #fff;
    border-radius: 50%;
    text-decoration: none;
    font-size: 1.2rem;
    transition: background-color 0.3s ease;
}

.fixed-nav-item a:hover,
.back-to-top:hover {
    background-color: #9c8679;
}

/* Media Queries */
@media (max-width: 768px) {
    .bread-list {
        flex-direction: column;
        align-items: center;
        font-size: 0.85rem;
    }

    h1 {
        font-size: 1.5rem;
    }

    .wishlist-item form button {
        font-size: 0.9rem;
        padding: 8px;
    }
}

@media (max-width: 480px) {
    h1 {
        font-size: 1.2rem;
    }

    .wishlist-main {
        grid-template-columns: 1fr;
    }

    .wishlist-item {
        padding: 10px;
    }

    .wishlist-item img {
        max-width: 150px;
    }

    .fixed-nav-item a,
    .back-to-top {
        width: 40px;
        height: 40px;
        font-size: 1rem;
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
                <li>Wishlist</li>
            </ul>
        </div>
   </section>
   <h1>Danh sách yêu thích</h1>
   <section class="wishlist-main">
   @foreach($wishlistItems as $item)
    <div class="wishlist-item">
        <img width="200px" src="http://127.0.0.1:8000/assets/images/anhnuochoa/all/{{ $item->image }}" alt="">
        <h3>{{ $item->name }}</h3>
        <p>{{ number_format($item->giaTienLon, 0, ',', '.') }} ₫</p>
        <form action="{{ route('wishlist.remove', $item->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Xóa sản phẩm</button>
        </form>
    </div>
@endforeach
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