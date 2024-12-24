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
/*  */
.search-results {
    position: absolute;
    background: #fff;
    top: 3rem;
    max-height: 400px; /* Chiều cao tối đa */
    width: 100%;
    overflow-y: auto; /* Cho phép cuộn dọc */
    z-index: 10;
}

.search-item {
    display: flex;
    align-items: center;
    padding: 10px;
    border-bottom: 1px solid #eee;
    cursor: pointer;
}

.search-item:hover {
    background-color: #f5f5f5;
}
.search-item>a>div{
    display: flex;
    align-items: center;

}
.search-item img {
    width: 80px !important;
    height: 80px !important;
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
                        <div id="searchResults" class="search-results" style="display: block;"></div>
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
                                    <form action="{{ route('checkout.cart') }}" method="get">
                                        @csrf
                                        <button class="btn btn-view-cart-tt">Thanh toán</button>
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
                    @if(isset($hotProducts) && $hotProducts->isNotEmpty())
                    @foreach ($hotProducts as $product)
                        @php
                            // Lấy các query string hiện tại
                            $currentQuery = request()->query();

                            // Đảm bảo `$thuongHieu` luôn là một mảng
                            $thuongHieu = isset($currentQuery['thuongHieu']) ? (array) $currentQuery['thuongHieu'] : [];

                            if (!in_array($product->thuongHieu, $thuongHieu)) {
                                $thuongHieu[] = $product->thuongHieu; // Thêm thương hiệu mới
                            }

                            // Xây dựng query mới
                            $newQuery = array_merge($currentQuery, ['thuongHieu' => $thuongHieu]);

                            // Tạo URL
                            $url = route('perfumes', $newQuery);
                        @endphp

                        <li class="menu-item">
                            <a href="{{ $url }}">{{ $product->thuongHieu }}</a>
                        </li>
                    @endforeach
                    @else
                        <li class="menu-item">Không có sản phẩm</li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="menu-mega-right">
            <a href="" class="menu-header">Thương hiệu nước hoa</a><span class="toggle-arrow">&#9660;</span>
            <div class="word-nav">
                <ul class="word-list">
                    <!-- Nút "All" -->
                    <li class="word-it" data-tab="All">
                        <label for="w-all">
                            <input type="radio" name="w-all" id="w-all">
                            <div class="box"><span class="txt">All</span></div>
                        </label>
                    </li>
                    <!-- Các chữ cái -->
                    @foreach (range('A', 'Z') as $letter)
                        <li class="word-it" data-tab="{{ $letter }}">
                            <label for="w-{{ $letter }}">
                                <input type="radio" id="w-{{ $letter }}" value="{{ $letter }}">
                                <div class="box"><span class="txt">{{ $letter }}</span></div>
                            </label>
                        </li>
                    @endforeach
                </ul>
            </div>
            <ul class="brand-list" id="Perfume">
                @foreach ($brands as $brand)
                    @php
                        $thuongHieu = (array) request('thuongHieu', []);

                        // Lấy tên thương hiệu (giả sử là `$brand->thuongHieu` nếu là đối tượng Eloquent)
                        $brandName = is_object($brand) ? $brand->thuongHieu : $brand;

                        // Kiểm tra nếu tên thương hiệu chưa có trong danh sách hiện tại
                        if (!in_array($brandName, $thuongHieu)) {
                            $thuongHieu[] = $brandName; // Thêm tên thương hiệu vào danh sách query
                        }

                        // Tạo URL với danh sách thương hiệu
                        $url = route('perfumes', ['thuongHieu' => $thuongHieu]);
                    @endphp
                    <li class="brand-it">
                        <a href="{{ $url }}">{{ $brandName }}</a>
                    </li>
                @endforeach
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
                                        @foreach($gioiTinhList as $gioiTinh)
                                            <li class="menu-item"><a href="{{ route('perfumes', ['genders[]' => $gioiTinh->gioiTinh]) }}">Nước hoa {{ $gioiTinh->gioiTinh }}</a></li>
                                        @endforeach
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
                                        @foreach($nongDoList as $nongDo)
                                            <li class="menu-item"><a href="{{ route('perfumes', ['concentrations[]' => $nongDo->nongDo]) }}">{{ $nongDo->nongDo }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="menu-mega-item">
                                    <a href="#" class="menu-header">Dung Tích</a> <span class="toggle-arrow">&#9660;</span>
                                    <ul class="menu-list">
                                        @foreach($dungTichList as $dungTich)
                                            <li class="menu-item"><a href="{{ route('perfumes', ['volumes[]' =>  $dungTich->dungTich]) }}">{{ $dungTich->dungTich }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="{{ route('contact') }}">Liên Hệ</a></li>
                    </ul>
                </div>
                <div class="overlay"></div>
            </div>
        </div>
    </header>
    <script>
    document.getElementById('search').addEventListener('input', function () {
    const query = this.value;
    const searchResults = document.getElementById('searchResults');
    
    // Gửi yêu cầu AJAX tới server
    fetch(`/search?search=${encodeURIComponent(query)}`)
        .then(response => response.json())
        .then(data => {
            // Xóa kết quả cũ
            searchResults.innerHTML = '';
            // Hiển thị kết quả mới
            data.forEach(product => {
                const item = document.createElement('div');
                item.className = 'search-item';
                item.innerHTML = `
                    <a href="${product.link}" class="product-link">
                        <div>
                            <img src="http://127.0.0.1:8000/assets/images/anhnuochoa/all/${product.image}" alt="${product.name}" width="50">
                            <p>${product.name} - ${new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(product.giaTienLon)}</p>
                        </div>
                    </a>
                `;
                searchResults.appendChild(item);
            });
        })
        .catch(error => {
            console.error('Error:', error);
        });
});
// Ẩn khung kết quả khi nhấn ra ngoài
document.addEventListener('click', function (event) {
    const searchInput = document.getElementById('search');
    const searchResults = document.getElementById('searchResults');
    
    if (!searchInput.contains(event.target) && !searchResults.contains(event.target)) {
        searchResults.style.display = 'none'; // Ẩn khung kết quả
    }
});

// Hiển thị lại khung kết quả khi focus vào ô tìm kiếm
document.getElementById('search').addEventListener('focus', function () {
    const searchResults = document.getElementById('searchResults');
    if (this.value.trim() !== '') {
        searchResults.style.display = 'block'; // Hiển thị kết quả
    }
});

</script>
<script>
document.getElementById('Perfume').addEventListener('click', function (event) {
    const target = event.target;

    // Kiểm tra nếu phần tử được click là một liên kết trong danh sách
    if (target.tagName === 'A' && target.closest('.brand-it')) {
        event.preventDefault(); // Ngăn hành động mặc định nếu cần
        const href = target.getAttribute('href');
        console.log('Link clicked:', href);
        // Thực hiện hành động khác nếu cần, hoặc điều hướng:
        window.location.href = href;
    }
});

document.querySelectorAll('.word-it').forEach(item => {
    item.addEventListener('click', function () {
        const letter = this.getAttribute('data-tab') || 'All';
        const perfumeList = document.getElementById('Perfume');

        // Hiển thị trạng thái loading
        perfumeList.innerHTML = '<li>Loading...</li>';

        // Gửi yêu cầu AJAX đến server
        fetch(`/thuong-hieu/${letter}`)
            .then(response => response.json())
            .then(data => {
                perfumeList.innerHTML = ''; // Xóa "Loading..."
                if (data.length) {
                    data.forEach(brand => {
                        perfumeList.innerHTML += `<li class="brand-it"><a href="/perfumes?thuongHieu[]=${brand.thuongHieu}">${brand.thuongHieu}</a></li>`;
                    });
                } else {
                    perfumeList.innerHTML = '<li>No brands found</li>';
                }
            })
            .catch(err => {
                console.error(err);
                perfumeList.innerHTML = '<li>Error loading brands</li>';
            });
    });
});
</script>
    
</body>
</html>
