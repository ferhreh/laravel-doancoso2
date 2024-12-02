<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nước hoa chính hãng</title>
    <link rel="icon" href="http://127.0.0.1:8000/assets/images/logo/logo-brand-web.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
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
    .menu-mega.active{
        opacity: 1;
        visibility: visible;
    }
    .brands-list.active li {
        border: none;
    }
    .brands-list.active li a{
        color: black;
    }
    .tintuc> .menu-mega.active{
        border: none;
    }
    .tintuc> .menu-mega.active .menu-list>li{
        border: none;
    }
    .tintuc> .menu-mega.active .menu-list>li>a{
        color: black;
    }
    section.brands-set {
    width: 100%;
    margin: 0 auto;
}

.brands-nav {
    position: sticky;
    top: 0;
    width: 72%;
    max-width: 100%;
    background-color: #ffffff;
    margin: 20px auto;
    padding: 10px;
}

.brands-content {
    position: relative;
    display: flex;
    justify-content: center;
    max-width: 100%;
}
.words-list {
    display: flex;
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.words-item {
    margin: 0;
}

.word {
    color: #333;
    font-size: 18px;
    padding: 20px 20px;
    background-color: #fff;
    transition: background-color 0.3s, color 0.3s;
}
/* Bố cục chính cho phần thương hiệu */
.brands-main {
    padding: 0 15px;
    width:82%;
    margin: 0 auto;
}
.brands-main-content {
    width: 100%;
    display: flex;
    gap: 2rem;
}
.brands-content-left {
    width: 25%;
    height: 200px;
    position: sticky;
    top: 4rem;
}
.brands-content-right {
    width: 73%;
}
.brands-content-left .img {
    height: 100%;
}
.brands-content-left .img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.brands-name h2 {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
}

/* Các ô thương hiệu */
.brand-box {
    margin-bottom: 20px;
}

.tt-word {
    font-size: 20px;
    color: #333;
    margin: 0 0 10px 0;
}
.brands-list {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    padding: 0;
    margin: 0;
    justify-content: start !important;
}
.brand-item {
    border: 1px solid #6c6c6c;
    width: 18.5%;
}
.brand-logo img {
    width: 100%;
    height: auto;
    transition: transform 0.3s;
}
.words-item .word.active {
    background-color: #9c8679;
    color: #fff;
}
/* Responsive cho các màn hình nhỏ hơn */
@media (max-width: 916px) {
    /* Đặt .brands-nav với chiều rộng hẹp hơn để nằm bên trái */
    .brands-content-left{
        display: none;
    }
    .brands-content-right{
        width: 100%;
    }
    .brands-nav {
        position: fixed; /* Giữ nó cố định bên trái khi cuộn */
        top:9rem;
        left: 0;
        width: 60px; /* Chiều rộng phù hợp cho danh sách cột dọc */
        height: 100vh; /* Chiều cao chiếm toàn màn hình */
        background-color: #fff;
        padding: 10px 0;
        z-index: 1; /* Đảm bảo nó nằm trên các phần tử khác */
    }

    /* Đặt .brands-content để phù hợp với kích thước mới của .brands-nav */
    .brands-content {
        display: flex;
        flex-direction: column; /* Sắp xếp theo chiều dọc */
        align-items: center; /* Canh giữa các phần tử theo chiều ngang */
    }
    .brands-main{
        margin: 0 0 0 50px;
        width: 90%;
        max-width: 100%;
        box-sizing: border-box;
    }
    /* Đặt danh sách .words-list theo chiều dọc */
    .words-list {
        gap: 1rem;
        display: flex;
        flex-direction: column; /* Chuyển thành cột dọc */
        align-items: center;
    }

    /* Căn chỉnh và điều chỉnh khoảng cách giữa các chữ cái */
    .word {
        padding: 10px 10px;
        font-size: 14px; 
    }
    .word.active{
        background-color: #fff !important;
        font-size: 23px;
        color: #333 !important;
    }
}
@media (max-width: 541px) {
    .brands-main {
        width: 90%;
    }
    .brand-item {
    border: 1px solid #6c6c6c;
    width: 29.5%;
    }
}
@media (max-width: 413px) {
    .brand-item {
    border: 1px solid #6c6c6c;
    width: 30.5%;
    }
}
@media (max-width: 391px) {
    .brand-item {
        border: 1px solid #6c6c6c;
        width: 46.5%;
    }
}
@media (max-width: 376px) {
    .brand-item {
        border: 1px solid #6c6c6c;
        width: 46.5%;
    }
}
@media (max-width: 344px) {
    .brand-item {
        border: 1px solid #6c6c6c;
        width: 45.5%;
    }
}
</style>
<body>
    <main>
    @include('header')
    <section class="nav-bread">
        <div class="bread-content">
            <ul class="bread-list">
                <li><a href="{{ route('form') }}">Home </a></li>
                <li><img src="http://127.0.0.1:8000/assets/images/logo/arrow.png"alt=""></li>
                <li>Thương hiệu a-z</li>
            </ul>
        </div>
   </section>
   <section class="brands-set">
    <div class="brands-nav">
        <div class="brands-content">
            <ul class="words-list">
                <li class="words-item">
                    <a class="word" href="#brandA">A</a>
                </li>
                <li class="words-item">
                    <a class="word" href="#brandB">B</a>
                </li>
                <li class="words-item">
                    <a class="word" href="#brandC">C</a>
                </li>
                <li class="words-item">
                    <a class="word" href="#brandD">D</a>
                </li>
                <li class="words-item">
                    <a class="word" href="#brandE">E</a>
                </li>
                <li class="words-item">
                    <a class="word" href="#brandF">F</a>
                </li>
                <li class="words-item">
                    <a class="word" href="#brandG">G</a>
                </li>
                <li class="words-item">
                    <a class="word" href="#brandH">H</a>
                </li>
                <li class="words-item">
                    <a class="word" href="#brandI">I</a>
                </li>
                <li class="words-item">
                    <a class="word" href="#brandJ">J</a>
                </li>
                <li class="words-item">
                    <a class="word" href="#brandK">K</a>
                </li>
                <li class="words-item">
                    <a class="word" href="#brandL">L</a>
                </li>
                <li class="words-item">
                    <a class="word" href="#brandM">M</a>
                </li>
                <li class="words-item">
                    <a class="word" href="#brandN">N</a>
                </li>
                <li class="words-item">
                    <a class="word" href="#brandO">O</a>
                </li>
                <li class="words-item">
                    <a class="word" href="#brandP">P</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="brands-main">
        <div class="brands-main-content">
            <div class="brands-content-left">
                <div class="img"><img src="http://127.0.0.1:8000/assets/images/anhnuochoa/all/roja.jpg" alt=""></div>
            </div>
            <div class="brands-content-right">
                <div class="brands-name">
                    <h2>Thương hiệu</h2>
                    <div class="brands-box-list">
                        <div class="brand-box" id="brandA"> 
                            <h3 class="tt-word">A</h3>
                            <ul class="brands-list">                                           
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/a/logo-brand-afnan.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>    
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['al haramain']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/a/al-haramain-brand.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>   
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Attar Collection']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/a/attar-collection.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>   
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['alaia']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/a/logo-alaia.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>   
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => [' Argos Fragrances']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/a/logo-argos-fragrances-a.webp" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>   
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Astrophil Stella']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/a/logo-astrophil-stella-a.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>   
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Atelier Cologne']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/a/logo-atelier-cologne.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>   
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Atelier Materi ']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/a/logo-atelier-materi.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>   
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Alexandria Fragrances']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/a/logo-brand-alexandria-a.webp" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>   
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => [' Amouage']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/a/logo-brand-amouage-a.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>   
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Armaf']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/a/logo-brand-armaf-a.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>   
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => [' Azzaro']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/a/logo-brand-azzaro.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>                                                         
                            </ul>
                        </div>    
                        <div class="brand-box" id="brandB">
                            <h3 class="tt-word">B</h3>
                            <ul class="brands-list">                                           
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['BDK Parfums']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/b/logo-bdk-parfums.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>  
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['BORNTOSTANDOUT']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/b/logo-borntostandout.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => [' Butterfly Thai Perfume']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/b/logo-brand-butterfly-thai-perfume.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Burberry']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/b/logo-burberry.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Byredo']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/b/logo-byredo.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>                                                
                            </ul>
                        </div> 
                        <div class="brand-box" id="brandC">
                            <h3 class="tt-word">C</h3>
                            <ul class="brands-list">                                           
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Calvin Klein']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/c/logo-calvin-klein.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>  
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Carner Barcelona']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/c/logo-carner-barcelona.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Carolina Herrera']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/c/logo-carolina-herrera.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <!-- Chưa làm -->
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/c/logo-chabaud.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Chanel']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/c/logo-chanel.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <!-- chưa làm -->
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/c/logo-chasing-scents.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <!-- chưa làm -->
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/c/logo-chloe.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <!-- chưa làm -->
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/c/logo-city-rhythm.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <!-- chưa làm -->
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/c/logo-clive-christian.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['creed']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/c/logo-creed.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>                                                                             
                            </ul>
                        </div>
                        <div class="brand-box" id="brandD">
                            <h3 class="tt-word">D</h3>
                            <ul class="brands-list">    
                                   <!-- Chưa làm -->
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/d/logo-dame-perfumery.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>   
                                <!-- chưa làm -->
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/d/logo-dior.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>  
                                <!-- chưa làm -->
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/d/logo-diptyque.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>  
                                <!-- chưa làm -->
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/d/logo-dolce-gabbana.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>  
                                <!-- chưa làm -->
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/d/logo-dsquared2.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>                                                                             
                            </ul>
                        </div>
                        <div class="brand-box" id="brandE">
                            <h3 class="tt-word">E</h3>
                            <ul class="brands-list">                                           
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/e/logo-elizabeth-arden.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>     
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/e/logo-ellie-saab.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/e/logo-escentric-molecules.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/e/logo-etat-libre-d-orange.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Ex Nihilo']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/e/logo-ex-nihilo.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>                                                                          
                            </ul>
                        </div> 
                        <div class="brand-box" id="brandF">
                            <h3 class="tt-word">F</h3>
                            <ul class="brands-list">                                           
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/f/logo-brand-franck-boclet-2.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>    
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/f/logo-brand-franck-boclet.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>                                                                            
                            </ul>
                        </div>  
                        <div class="brand-box" id="brandG">
                            <h3 class="tt-word">G</h3>
                            <ul class="brands-list">                                           
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/g/logo-giardini-di-toscana.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>    
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Giorgio Armani']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/g/logo-giorgio-armani.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>  
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/g/logo-gucci.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>  
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/g/logo-guerlain.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>  
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img style="" width="206" height="144" src="http://127.0.0.1:8000/assets/images/thuonghieu/g/Gritti-logo-Australia-Oligarch.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>                                                                            
                            </ul>
                        </div>  
                        <div class="brand-box" id="brandH">
                            <h3 class="tt-word">H</h3>
                            <ul class="brands-list">                                           
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/h/logo-hermes.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>                                                                              
                            </ul>
                        </div> 
                        <div class="brand-box" id="brandI">
                            <h3 class="tt-word">I</h3>
                            <ul class="brands-list">                                           
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/i/logo-imaginary-authors.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>   
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/i/logo-imaginary-authors.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>                                                                              
                            </ul>
                        </div>     
                        <div class="brand-box" id="brandJ">
                            <h3 class="tt-word">J</h3>
                            <ul class="brands-list">                                           
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Jean Paul Gaultier']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/j/logo-jean-paul-gaultier.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>  
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/j/logo-jimmy-choo.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/j/logo-jo-malone.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/j/logo-juliette-has-a-gun.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>                                                                             
                            </ul>
                        </div>  
                        <div class="brand-box" id="brandK">
                            <h3 class="tt-word">K</h3>
                            <ul class="brands-list">                                           
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/k/logo-kilian.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>                                                                              
                            </ul>
                        </div>   
                        <div class="brand-box" id="brandL">
                            <h3 class="tt-word">L</h3>
                            <ul class="brands-list">                                           
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/l/logo-lalique.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>       
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/l/logo-lanvin.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>   
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/l/logo-le-galion.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>   
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/l/logo-le-labo.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>   
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/l/logo-liquides-imaginaires.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>   
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/l/logo-loewe.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>   
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/l/logo-logo-lorchestre.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>   
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/l/logo-louis-vuiton.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>                                                                          
                            </ul>
                        </div>  
                        <div class="brand-box" id="brandM">
                            <h3 class="tt-word">M</h3>
                            <ul class="brands-list">                                           
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/m/logo-mad-et-len.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>     
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/m/logo-maison-francis-kurkdjian.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/m/logo-maison-margiela.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/m/logo-maison-matine.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/m/logo-maison-violet.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/m/logo-mancera.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/m/logo-marc-antoine-barrois.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/m/logo-marc-jacobs.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/m/logo-marie-jeanne.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/m/logo-matiere-premiere.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/m/logo-mcm.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>   
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/m/logo-memo-paris.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/m/logo-missoni.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/m/logo-mith-bangkok.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/m/logo-mont-blanc.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/m/logo-montale.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                              <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/m/logo-moschino.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/m/o.2788-2048x1123.jpg" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/m/o.1322.jpg" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>                                                                        
                            </ul>
                        </div>    
                        <div class="brand-box" id="brandN">
                            <h3 class="tt-word">N</h3>
                            <ul class="brands-list">                                           
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/n/logo-narciso-rodriguez.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>    
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/n/logo-nasomatto.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/n/logo-nautica.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/n/logo-nishane.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>                                                                           
                            </ul>
                        </div>     
                        <div class="brand-box" id="brandO">
                            <h3 class="tt-word">O</h3>
                            <ul class="brands-list">                                           
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/o/logo-once-perfume-1.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>          
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/o/logo-orto-parisi-1.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>                                                                     
                            </ul>
                        </div> 
                        <div class="brand-box" id="brandP">
                            <h3 class="tt-word">P</h3>
                            <ul class="brands-list">                                           
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/p/logo-paco-rabanne.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/p/logo-parfums-de-marly.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/p/logo-parfums-mdci.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/p/logo-penhaligon-s.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li> 
                                <li class="brand-item">
                                    <div class="brand-logo">
                                         <a class="brand-link" href="{{ route('perfumes', ['thuongHieu' => ['Afnan']]) }}">
                                            <img width="206" height="114" src="http://127.0.0.1:8000/assets/images/thuonghieu/p/logo-prada.png" alt=""/>                                                                                                                                 
                                        </a>
                                    </div>
                                </li>                                                                              
                            </ul>
                        </div>    
                    </div>                                                         
                </div>
            </div>
        </div>
    </div>
   </section>
    </main>
    @include('footer')
    <script src="http://127.0.0.1:8000/assets/js/scriptabout.js"></script>
    <script>
        window.addEventListener('scroll', () => {
    const words = document.querySelectorAll('.word');
    const brands = document.querySelectorAll('.brand-box');
    const viewportHeight = window.innerHeight;

    brands.forEach((brand, index) => {
        const rect = brand.getBoundingClientRect();
        const brandCenterPosition = rect.top + (rect.height / 2);

        if (brandCenterPosition >= viewportHeight / 2 - 50 && brandCenterPosition <= viewportHeight / 2 + 50) {
            words.forEach(word => word.classList.remove('active'));
            words[index].classList.add('active');
        }
    });
});
document.querySelectorAll('.word').forEach(word => {
    word.addEventListener('click', function(event) {
        event.preventDefault();  // Ngăn cuộn mặc định của trình duyệt

        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            const elementPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
            const offset = (window.innerHeight / 2) - (targetElement.offsetHeight / 2);

            window.scrollTo({
                top: elementPosition - offset,
                behavior: 'smooth'
            });
        }
    });
});
    </script>
</body>
</html>