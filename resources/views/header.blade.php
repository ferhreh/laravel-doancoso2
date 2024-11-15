<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop nước hoa</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
    .cart-item, .cart-item-details, .cart-item-price, .cart-footer, .total-price {
    visibility: visible !important; /* Đảm bảo các phần tử không bị ẩn */
}
.total-thanh-tien{
    position: absolute;
    left: 0;
    top: -2rem;
}
.total-price {
    position: absolute;
    left: 6rem;
    top: -2.2rem;
    color:#a0522d;;
}
.cart-item-details{
    display: flex;
}
.cart-items {
    width: 100%; /* Đảm bảo vùng giỏ hàng chiếm toàn bộ chiều rộng */
    margin: 0 auto; /* Căn giữa giỏ hàng */
}

.cart-item {
    display: flex;
    align-items: center;
    padding: 10px 0;
    border-bottom: 1px solid #ddd;
}

.cart-item-image {
    width: 70px;
    border: 0.2rem solid #c4c4c4;
    height: auto;
    margin-right: 15px;
}

.cart-item-details {
    flex: 1;
    gap: 1rem;
}

.cart-footer {
    padding-top: 10px;
    border-top: 1px solid #ddd;
    text-align: right;
}
.btn {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border: none;
    border-radius: 5px;
    margin: 10px;
}

.btn-view-cart {
    background-color: #ddd;
    color: #333;
}

.btn-checkout {
    background-color: #a0522d;
    color: white;
}
.edit-quantity{
    display: flex;
    gap: 0.8rem;
}
.btn-delete{
    right: 0;
    position: absolute;
}
</style>
<body>
    <header>
        <div class="header">
            <div class="information">
                <div class="ht-header">
                    <p>Xin chào!</p>
                </div>
                <div class="login">
                <a href="{{ Auth::check() ? route('logout') : route('login') }}">
    <img src="http://127.0.0.1:8000/assets/images/logo/user-profile.png" alt="">
    <span>
        {{ Auth::check() ? 'Đăng xuất' : 'Đăng nhập/ Đăng ký' }}
    </span>
</a>
                    <button class="login-btn">
                        <span>
                            @if(Auth::check())
                                <!-- Nếu đã đăng nhập, hiển thị tên người dùng -->
                                <a href="{{ route('logout') }}">Xin chào, {{ session('user_display_name') }}!</a>
                            @else
                                <!-- Nếu chưa đăng nhập, hiển thị chữ "Đăng nhập" -->
                                <a href="{{ route('login') }}">Đăng nhập</a>
                            @endif
                        </span>
                    </button>
                </div>
            </div>
            <div class="brand">
                <div class="logo-brand">
                    <img src="http://127.0.0.1:8000/assets/images/logo/logo-brand.png" alt="Logo">
                </div>
                <div class="Toolbar">
                    <div class="boxSearch">
                        <form action="" method="get" class="search-form">
                            <button type="button" class="btnSearch">
                                <img src="http://127.0.0.1:8000/assets/images/logo/search.png" alt="Search">
                            </button>
                            <input type="text" name="search" id="search" placeholder="Tìm sản phẩm của bạn">
                        </form>
                    </div>
                    <!-- Nút thay thế chỉ hiển thị khi màn hình nhỏ hơn 700px -->
                    <button class="searchToggleBtn" style="display: none;">
                        <img src="http://127.0.0.1:8000/assets/images/logo/search.png" alt="Search Icon">
                    </button>
                    <div class="ic-Toolbar">
                    <div class="ic-heart">
    <a href="{{ route('wishlist.index') }}">
        <img src="http://127.0.0.1:8000/assets/images/logo/love.png" alt="">
        <span>Sản phẩm yêu thích</span>
    </a>
</div>
                        <div class="ic-cart">
                            <a  href="" onclick="handleCartClick(event)"><img src="http://127.0.0.1:8000/assets/images/logo/bag.png" alt=""><span>Giỏ hàng</span></a>
                        </div>
                        <div id="cart-overlai" class="overlai" onclick="closeCart()"></div>
                        <div id="cart-modal" class="cart-modal">
@if($cartItems->isEmpty())
    <p>Giỏ hàng của bạn hiện đang trống. Vui lòng bấm vào đây để tiếp tục mua sắm.</p>
@else
    <div class="cart-items">
        @foreach($cartItems as $item)
            <div class="cart-item">
                <img width="200" height="200" src="http://127.0.0.1:8000/assets/images/anhnuochoa/all/{{ $item->image }}" alt="{{ $item->name }}" class="cart-item-image">
                <div class="cart-item-details">
                    <!-- Quantity Controls -->
                    <div class="cart-item-quantity">
                        <form action="{{ route('cart.update', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <span style="display: block !important;" class="cart-item-name">{{ $item->name }}</span>
                            <span style="display: block !important;" class="cart-item-dung-tich">{{ $item->dungTich }}</span>
                            <div class="edit-quantity">
                            <button type="submit" name="action" value="decrease" class="btn-quantity">-</button>
                            <span style="display: block;">{{ $item->quantity }}</span>
                            <button type="submit" name="action" value="increase" class="btn-quantity">+</button>
                            </div>
                        </form>
                    </div>
                    <!-- Delete Button -->
                    <form action="{{ route('cart.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button style="border: none; background-color: #fff;" type="submit" class="btn-delete"><img src="http://127.0.0.1:8000/assets/images/logo/close.png" alt=""></button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    <div class="cart-footer">
        <span class="total-thanh-tien" style="display: block;">Thành tiền:</span>
        <span style="display: block;" class="total-price">{{ number_format($cartItems->sum(fn($item) => $item->giaTienLon * $item->quantity), 0, ',', '.') }} ₫</span>
        <button class="btn btn-view-cart">Xem Giỏ Hàng</button>
        <form action="{{ route('checkout.cart') }}" method="post">
        @csrf
            <button class="btn btn-view-cart">Thanh toán</button>
        </form>
    </div>
@endif


                        </div>
                    </div>
                </div>
            </div>
            <div class="menu">
                <div class="menu-icon">&#9776;</div> <!-- Biểu tượng ba dấu chấm -->
                <div class="nav-menu">
                    <ul>
                        <li><a href="{{ route('form') }}">Trang Chủ</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li class="Thuonghieu">
                            <a href="{{ route('brands') }}">Thương hiệu</a><span class="toggle-arrow-L">&#9660;</span>
                            <div class="menu-mega"> 
                                <div class="menu-mega-left">
                                    <div class="menu-mega-item">
                                        <a href="" class="menu-header">Thương hiệu bán chạy</a><span class="toggle-arrow">&#9660;</span>
                                        <ul class="menu-list">
                                            <li class="menu-item"><a href="">Roja Parfums</a></li>
                                            <li class="menu-item"><a href="">Atelier Materi</a></li>
                                            <li class="menu-item"><a href="">Liquides Imaginaies</a></li>
                                            <li class="menu-item"><a href="">Argos Fragrances</a></li>
                                            <li class="menu-item"><a href="">Clive Christian</a></li>
                                            <li class="menu-item"><a href="">Matiere Premiere</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="menu-mega-right">
                                    <a href="" class="menu-header">Thương hiệu nước hoa</a><span class="toggle-arrow">&#9660;</span>
                                    <div class="word-nav">
                                        <ul class="word-list">
                                            <li class="word-it">
                                                <label for="w-all">
                                                    <input type="radio" name="w-all" id="w-all">
                                                    <div class="box">
                                                        <span class="txt">All</span>
                                                    </div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="A">
                                                <label for="w-A">
                                                    <input type="radio" id="w-A" value="A">
                                                    <div class="box is-loading-group"> <span class="txt">A</span></div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="B">
                                                <label for="w-B">
                                                    <input type="radio" id="w-B" value="B">
                                                    <div class="box is-loading-group"> <span class="txt">B</span></div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="C">
                                                <label for="w-C">
                                                    <input type="radio" id="w-C" value="C">
                                                    <div class="box is-loading-group"> <span class="txt">C</span></div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="D">
                                                <label for="w-D">
                                                    <input type="radio" id="w-D" value="D">
                                                    <div class="box is-loading-group"> <span class="txt">D</span></div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="E">
                                                <label for="w-E">
                                                    <input type="radio" id="w-E" value="E">
                                                    <div class="box is-loading-group"> <span class="txt">E</span></div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="F">
                                                <label for="w-F">
                                                    <input type="radio" id="w-F" value="F">
                                                    <div class="box is-loading-group"> <span class="txt">F</span></div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="G">
                                                <label for="w-G">
                                                    <input type="radio" id="w-G" value="G">
                                                    <div class="box is-loading-group"> <span class="txt">G</span></div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="H">
                                                <label for="w-H">
                                                    <input type="radio" id="w-H" value="H">
                                                    <div class="box is-loading-group"> <span class="txt">H</span></div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="I">
                                                <label for="w-I">
                                                    <input type="radio" id="w-I" value="I">
                                                    <div class="box is-loading-group"> <span class="txt">I</span></div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="J">
                                                <label for="w-J">
                                                    <input type="radio" id="w-J" value="J">
                                                    <div class="box is-loading-group"> <span class="txt">J</span></div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="K">
                                                <label for="w-K">
                                                    <input type="radio" id="w-K" value="K">
                                                    <div class="box is-loading-group"> <span class="txt">K</span></div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="L">
                                                <label for="w-L">
                                                    <input type="radio" id="w-L" value="L">
                                                    <div class="box is-loading-group"> <span class="txt">L</span></div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="M">
                                                <label for="w-M">
                                                    <input type="radio" id="w-M" value="M">
                                                    <div class="box is-loading-group"> <span class="txt">M</span></div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="N">
                                                <label for="w-N">
                                                    <input type="radio" id="w-N" value="N">
                                                    <div class="box is-loading-group"> <span class="txt">N</span></div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="O">
                                                <label for="w-O">
                                                    <input type="radio" id="w-O" value="O">
                                                    <div class="box is-loading-group"> <span class="txt">O</span></div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="P">
                                                <label for="w-P">
                                                    <input type="radio" id="w-P" value="P">
                                                    <div class="box is-loading-group"> <span class="txt">P</span></div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="Q">
                                                <label for="w-Q">
                                                    <input type="radio" id="w-Q" value="Q">
                                                    <div class="box is-loading-group"> <span class="txt">Q</span></div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="R">
                                                <label for="w-R">
                                                    <input type="radio" id="w-R" value="R">
                                                    <div class="box is-loading-group"> <span class="txt">R</span></div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="S">
                                                <label for="w-S">
                                                    <input type="radio" id="w-S" value="S">
                                                    <div class="box is-loading-group"> <span class="txt">S</span></div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="T">
                                                <label for="w-T">
                                                    <input type="radio" id="w-T" value="T">
                                                    <div class="box is-loading-group"> <span class="txt">T</span></div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="U">
                                                <label for="w-U">
                                                    <input type="radio" id="w-U" value="U">
                                                    <div class="box is-loading-group"> <span class="txt">U</span></div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="V">
                                                <label for="w-V">
                                                    <input type="radio" id="w-V" value="V">
                                                    <div class="box is-loading-group"> <span class="txt">V</span></div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="W">
                                                <label for="w-W">
                                                    <input type="radio" id="w-W" value="W">
                                                    <div class="box is-loading-group"> <span class="txt">W</span></div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="X">
                                                <label for="w-X">
                                                    <input type="radio" id="w-X" value="X">
                                                    <div class="box is-loading-group"> <span class="txt">X</span></div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="Y">
                                                <label for="w-Y">
                                                    <input type="radio" id="w-Y" value="Y">
                                                    <div class="box is-loading-group"> <span class="txt">Y</span></div>
                                                </label>
                                            </li>
                                            <li class="word-it" data-tab="Z">
                                                <label for="w-Z">
                                                    <input type="radio" id="w-Z" value="Z">
                                                    <div class="box is-loading-group"> <span class="txt">Z</span></div>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="brand-list" id="Perfume">
                                        <li class="brand-it"><a href="">Afnan</a></li>
                                        <li class="brand-it"><a href="">Al Haramain</a></li>
                                        <li class="brand-it"><a href="">Alaia</a></li>
                                        <li class="brand-it"><a href="">Alexandria Fragrances</a></li>
                                        <li class="brand-it"><a href="">Amouage</a></li>
                                        <li class="brand-it"><a href="">Argos Fragrances</a></li>
                                        <li class="brand-it"><a href="">Armaf</a></li>
                                        <li class="brand-it"><a href="">Astrophil Stella</a></li>
                                        <li class="brand-it"><a href="">Atelier Cologne</a></li>
                                        <li class="brand-it"><a href="">ATELIER MATERI</a></li>
                                        <li class="brand-it"><a href="">Attar Collection</a></li>
                                        <li class="brand-it"><a href="">Azzaro</a></li>
                                        <li class="brand-it"><a href="">BDK Parfums</a></li>
                                        <li class="brand-it"><a href="">BORNTOSTANDOUT</a></li>
                                        <li class="brand-it"><a href="">Burberry</a></li>
                                        <li class="brand-it"><a href="">Butterfly Thai Perfume</a></li>
                                        <li class="brand-it"><a href="">Bvlgari</a></li>
                                        <li class="brand-it"><a href="">Byredo</a></li>
                                        <li class="brand-it"><a href="">Calvin Klein</a></li>
                                        <li class="brand-it"><a href="">Carner Barcelona</a></li>
                                        <li class="brand-it"><a href="">Carolina Herrera</a></li>
                                        <li class="brand-it"><a href="">Chabaud</a></li>
                                        <li class="brand-it"><a href="">Chanel</a></li>
                                        <li class="brand-it"><a href="">Chasing Scents</a></li>
                                        <li class="brand-it"><a href="">Chlóe</a></li>
                                        <li class="brand-it"><a href="">Christian Louboutin</a></li>
                                        <li class="brand-it"><a href="">City Rhythm</a></li>
                                        <li class="brand-it"><a href="">Clive Christian</a></li>
                                        <li class="brand-it"><a href="">Creed</a></li>
                                        <li class="brand-it"><a href="">Dame Perfumery</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="Nuochoa">
                            <a href="{{ route('perfumes') }}">Nước hoa</a><span class="toggle-arrow-L">&#9660;</span>
                            <div class="menu-mega">
                                <div class="menu-mega-item">
                                    <a href="" class="menu-header">Nước hoa</a><span class="toggle-arrow">&#9660;</span>
                                    <ul class="menu-list">
                                        <li class="menu-item"><a href="">Nước Hoa Unisex</a></li>
                                        <li class="menu-item"><a href="">Nước Hoa Nữ</a></li>
                                        <li class="menu-item"><a href="">Nước Hoa Nam</a></li>    
                                    </ul>
                                </div>
                                <div class="menu-mega-item">
                                    <a href="#" class="menu-header">Nhóm Hương </a><span class="toggle-arrow">&#9660;</span>
                                    <ul class="menu-list">
                                        <li class="menu-item"><a href="">Floral</a></li>
                                        <li class="menu-item"><a href="">Floral Fruity</a></li>
                                        <li class="menu-item"><a href="">Woody</a></li>    
                                    </ul>
                                </div>
                                <div class="menu-mega-item">
                                    <a href="#" class="menu-header">Nồng Độ </a><span class="toggle-arrow">&#9660;</span>
                                    <ul class="menu-list">
                                        <li class="menu-item"><a href="">Eau de Cologne</a></li>
                                        <li class="menu-item"><a href="">Eau De Parfum</a></li>
                                        <li class="menu-item"><a href="">Eau de Toilette</a></li>
                                        <li class="menu-item"><a href="">Eau Fraiche</a></li>    
                                        <li class="menu-item"><a href="">Extrait de Parfum</a></li>    
                                        <li class="menu-item"><a href="">Parfum</a></li>    
                                        <li class="menu-item"><a href="">Parfum Enfant</a></li>    
                                    </ul>
                                </div>
                                <div class="menu-mega-item">
                                    <a href="#" class="menu-header">Dung Tích</a> <span class="toggle-arrow">&#9660;</span>
                                    <ul class="menu-list">
                                        <li class="menu-item"><a href="">100Ml</a></li>
                                        <li class="menu-item"><a href="">10Ml</a></li>
                                        <li class="menu-item"><a href="">125Ml</a></li>
                                        <li class="menu-item"><a href="">35Ml</a></li>    
                                        <li class="menu-item"><a href="">50Ml</a></li>    
                                        <li class="menu-item"><a href="">5Ml</a></li>    
                                        <li class="menu-item"><a href="">75Ml</a></li>    
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="tintuc">
                            <a href="">Tin tức</a><span class="toggle-arrow-L">&#9660;</span>
                            <div class="menu-mega">
                                <ul class="menu-list">
                                    <li class="menu-item"><a href="{{ route('review-nh') }}">Review nước hoa</a></li>
                                    <li class="menu-item"><a href="{{route('tinTuc-nh')}}">kinh nghiệm chọn mua nước hoa</a></li>
                                </ul>
                            </div>    
                        </li>
                        <li><a href="{{ route('contact') }}">Liên Hệ</a></li>
                    </ul>
                </div>
                <div class="overlay"></div>
            </div>
        </div>
    </header>

    
</body>
</html>
