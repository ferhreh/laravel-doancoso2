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
    .row{
        display: flex;
        gap: 1rem;
        width: 100%;
    }
    .product-grid{
        display: flex;
    }
    .container-product{
        padding: 50px;
    }
    .col-md-3{
        width: 25%;
    }
    .filter-box>h5:nth-child(1){             
        max-width: 100%;
        background-color: #fafafa;
        border: 0.1rem solid #ccc;
        color: #000;
        padding: 1rem;
        margin-bottom: 1rem;        
    }
   
    .filter-box>ul{
        display: flex;
        box-sizing: border-box;
        list-style: none;
        flex-wrap: wrap;
        padding: 0;
    }
    .filter-box>ul:nth-child(2){
        display: block !important;
    }
    .filter-box>ul:nth-child(2)>li{
        margin-bottom: 1rem;
    }
    .filter-box>ul>li{
        width: auto;
        min-width: 7.5rem;
        height: 2rem;
        align-items: center;
        display: flex;
        color: #5f5f5f;
    }
    .filter-box>ul:nth-child(2){
        height: 20rem;
        overflow-y: scroll;
    }
    /* Tùy chỉnh thanh cuộn */
    .filter-box>ul:nth-child(2)::-webkit-scrollbar {
    width: 8px; /* Đặt độ rộng thanh cuộn */
}

/* Tùy chỉnh track (đường nền của thanh cuộn) */
.filter-box>ul:nth-child(2)::-webkit-scrollbar-track {
    background: #f1f1f1;
}

/* Tùy chỉnh thumb (phần cuộn có thể kéo) */
.filter-box>ul:nth-child(2)::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 10px; /* Bo góc để loại bỏ mũi tên */
}

/* Tùy chỉnh thumb khi hover */
.filter-box>ul:nth-child(2)::-webkit-scrollbar-thumb:hover {
    background: #555;
}
    /* Price Filter Heading */
.price-filter h3 {
    font-size: 1.2em;
    color: #000;
    margin-bottom: 10px;
}
input[type="checkbox"] {
    width: 16px;           /* Chiều rộng tùy chỉnh cho checkbox */
    height: 16px;          /* Chiều cao tùy chỉnh cho checkbox */
    border-radius: 0;      /* Không bo tròn góc, để tạo hình vuông */
    -webkit-appearance: none; /* Loại bỏ kiểu mặc định trên một số trình duyệt */
    appearance: none;         /* Loại bỏ kiểu mặc định cho các trình duyệt khác */
    border: 0.1rem solid #ccc;/* Viền tùy chỉnh cho checkbox */
    background-color: #fff; /* Màu nền cho checkbox */
    cursor: pointer;        /* Thêm con trỏ chuột */
    position: relative; 
}

/* Hiệu ứng khi checkbox được chọn */
input[type="checkbox"]:checked {
    content: "m"; 
    border: 2px solid #333; /* Giữ viền màu giống nhau khi chọn */
}
input[type="checkbox"]:checked::after {
    content: "\2713";        /* Ký tự dấu tích */
    font-size: 16px;
    color: #8c6b5b;            /* Màu của dấu tích */
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%); /* Căn giữa dấu tích */
}
/* Range Slider Container */
/* Container for range sliders */
.range-slider {
    position: relative;
    width: 100%;
    height: 6px;
    background-color: #b59d8e; /* Background color for the track */
    margin-top: 10px;
    border-radius: 5px;
    display: flex;
    align-items: center;
}

/* Individual Sliders */
.slider-1,
.slider-2 {
    -webkit-appearance: none;
    appearance: none;
    position: absolute;
    width: 100%;
    height: 6px;
    background: transparent;
    pointer-events: none;
}

/* Custom track for slider-1 to show active color */
.slider-1 {
    background: linear-gradient(to right, #b59d8e 0%, #b59d8e var(--min-percent), #e0e0e0 var(--min-percent), #e0e0e0 100%);
}

/* Custom track for slider-2 to show active color */
.slider-2 {
    background: linear-gradient(to right, #e0e0e0 0%, #e0e0e0 var(--max-percent), #b59d8e var(--max-percent), #b59d8e 100%);
}

/* Slider thumb (handle) */
.slider-1::-webkit-slider-thumb,
.slider-2::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 18px;
    height: 18px;
    background-color: #b59d8e;
    border-radius: 50%;
    pointer-events: all;
    cursor: pointer;
}

/* Firefox */
.slider-1::-moz-range-thumb,
.slider-2::-moz-range-thumb {
    width: 18px;
    height: 18px;
    background-color: #b59d8e;
    border-radius: 50%;
    cursor: pointer;
}

/* Price Labels */
.price-labels {
    display: flex;
    justify-content: space-between;
    font-size: 1em;
    color: #333;
    margin-top: 10px;
}
.product-grid{
    width: 100%;
    display: flex;
    flex-wrap: wrap; /* Cho phép các sản phẩm xuống dòng khi hết không gian */
    gap: 16px; /* Khoảng cách giữa các sản phẩm */
}
.product-grid>a{
    width: calc(20% - 16px);
    text-decoration: none;
}
.product-item {
    width:100%;
    box-sizing: border-box;
    overflow: hidden;
    padding: 5px;
}
.product-item>p{
    color: #5f5f5f;
    min-height: 40px;
    
}
.product-item>span{
    display: flex;
    justify-content: center;
    color: #b59d8e;
    font-weight: bold;

}
.product-item>h2{
    margin: 0;
    position: relative;
    color: #b59d8e;
    min-height: 55px;
}
.product-item>img{
    width: 100%;
    max-width: 200px;
    height: auto;
    transition: 0.5s;
}
.product-item:hover{
    box-shadow: 0 0 12px rgb(0 0 0 / 10%);
}
.product-item:hover >img{
    transform: translate(0%, +5%) scale(1.1);
}
.col-md-9{
    width: 80%;
}
.pagination {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin: 20px 0;
}

.pagination .prev-page, .pagination .next-page {
    font-size: 14px;
    cursor: pointer;
}

.pagination .page-item {
    display: inline;
}

.pagination a {
    text-decoration: none;
    color: #a0826e;
}

.pagination .disabled {
    color: #ccc;
}

.pagination .current-page {
    font-weight: bold;
    color: #ccc;
}

</style>
<body>
@include('header')
<main>
   <section class="nav-bread">
        <div class="bread-content">
            <ul class="bread-list">
                <li><a href="{{ route('form') }}">Home</a></li>
                <li><img src="http://127.0.0.1:8000/assets/images/logo/arrow.png"alt=""></li>
                <li>Sản phẩm</li>
            </ul>
        </div>
   </section>
   <div class="container-product">  
    <form action="{{ route('perfumes') }}" method="GET">
        <div class="row">
            <div class="col-md-3">
                <div class="filter-box">
                    <!-- Lọc theo thương hiệu -->
                    <h5>Tìm theo thương hiệu</h5>
                    <ul>
                        @foreach($brands as $brand)
                            <li>
                                <input type="checkbox" name="thuongHieu[]" value="{{ $brand }}" onchange="this.form.submit()"
                                {{ in_array($brand, request('thuongHieu', [])) ? 'checked' : '' }}> {{ $brand }}
                            </li>
                        @endforeach
                    </ul>          
                    
                    <!-- Lọc theo giới tính -->
                    <h5>Giới Tính</h5>
                    <ul>
                        @foreach($genders as $gender)
                            <li>
                                <input type="checkbox" name="genders[]" value="{{ $gender }}" onchange="this.form.submit()"
                                {{ in_array($gender, request('genders', [])) ? 'checked' : '' }}>
                                {{ $gender == 'Nam' ? 'Nam' : ($gender == 'Nữ' ? 'Nữ' : 'Unisex') }}
                            </li>
                        @endforeach
                    </ul>

                    <!-- Lọc theo nồng độ -->
                    <h5>Nồng Độ</h5>
                    <ul>
                        @foreach($concentrations as $concentration)
                            <li>
                                <input type="checkbox" name="concentrations[]" value="{{ $concentration }}" onchange="this.form.submit()"
                                {{ in_array($concentration, request('concentrations', [])) ? 'checked' : '' }}> {{ $concentration }}
                            </li>
                        @endforeach
                    </ul>

                    <!-- Lọc theo dung tích -->
                    <h5>Dung Tích</h5>
                    <ul>
                        @foreach($volumes as $volume)
                            <li>
                                <input type="checkbox" name="volumes[]" value="{{ $volume }}" onchange="this.form.submit()"
                                {{ in_array($volume, request('volumes', [])) ? 'checked' : '' }}> {{ $volume }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            <div class="price-filter">
                <h3>THEO GIÁ</h3>
                <div class="range-slider">
                    <input type="range" class="slider-1" min="150000" max="81400000" value="{{ $minPrice }}" id="min-price-slider">
                    <input type="range" class="slider-2" min="150000" max="81400000" value="{{ $maxPrice }}" id="max-price-slider">
                </div>
                <div class="price-labels">
                    <span class="price-min" id="min-price-label">{{ number_format($minPrice) }} ₫</span>
                    <span class="price-max" id="max-price-label">{{ number_format($maxPrice) }} ₫</span>
                </div>
                <input type="hidden" name="min_price" id="min-price" value="{{ $minPrice }}">
                <input type="hidden" name="max_price" id="max-price" value="{{ $maxPrice }}">
            </div>         
            </div>    
            <!-- Hiển thị sản phẩm -->
            <div class="col-md-9">
                <h3>SẢN PHẨM</h3>
                @include('partials.product_list')
                <div class="pagination">
                    <!-- Nút Previous -->
                    <span class="prev-page">
                        @if ($perfumes->onFirstPage())
                            <span class="disabled">« Trước</span>
                        @else
                            <a href="{{ $perfumes->previousPageUrl() }}">« Trước</a>
                        @endif
                    </span>
                    <!-- Hiển thị các số trang -->
                    @foreach ($perfumes->getUrlRange(1, $perfumes->lastPage()) as $page => $url)
                        @if ($page == 1 || $page == $perfumes->lastPage() || ($page >= $perfumes->currentPage() - 1 && $page <= $perfumes->currentPage() + 1))
                            <span class="page-item">
                                @if ($page == $perfumes->currentPage())
                                    <span class="current-page">{{ $page }}</span>
                                @else
                                    <a href="{{ $url }}">{{ $page }}</a>
                                @endif
                            </span>
                        @elseif ($page == $perfumes->currentPage() - 2 || $page == $perfumes->currentPage() + 2)
                            <span class="dots">...</span>
                        @endif
                    @endforeach
                    <!-- Nút Next -->
                    <span class="next-page">
                        @if ($perfumes->hasMorePages())
                            <a href="{{ $perfumes->nextPageUrl() }}">Tiếp »</a>
                        @else
                            <span class="disabled">Tiếp »</span>
                        @endif
                    </span>
                </div>
            </div>
        </div>
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

<script src="http://127.0.0.1:8000/assets/js/scriptabout.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const minSlider = document.getElementById('min-price-slider');
    const maxSlider = document.getElementById('max-price-slider');
    const minPriceLabel = document.getElementById('min-price-label');
    const maxPriceLabel = document.getElementById('max-price-label');
    const minPriceInput = document.getElementById('min-price');
    const maxPriceInput = document.getElementById('max-price');
    const productList = document.getElementById('product-list');
    const paginationContainer = document.querySelector('.pagination-posts-ajax');
    function updatePriceLabels() {
        minPriceLabel.textContent = parseInt(minSlider.value).toLocaleString() + " ₫";
        maxPriceLabel.textContent = parseInt(maxSlider.value).toLocaleString() + " ₫";
    }
    function updateSliderBackground() {
    const minValue = parseInt(minSlider.value);
    const maxValue = parseInt(maxSlider.value);
    const minPercent = ((minValue - minSlider.min) / (minSlider.max - minSlider.min)) * 100;
    const maxPercent = ((maxValue - minSlider.min) / (maxSlider.max - minSlider.min)) * 100;

    // Apply a single gradient background for the track between min and max slider values
    minSlider.style.background = `linear-gradient(to right, #e0e0e0 ${minPercent}%, #b59d8e ${minPercent}%, #b59d8e ${maxPercent}%, #e0e0e0 ${maxPercent}%)`;
    maxSlider.style.background = minSlider.style.background;
}

    // Hàm gửi yêu cầu AJAX để lọc sản phẩm theo giá
    function filterProducts() {
        const minPrice = minSlider.value;
        const maxPrice = maxSlider.value;

        fetch(`/perfumes?min_price=${minPrice}&max_price=${maxPrice}`, {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error("Network error: " + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            // Cập nhật danh sách sản phẩm
            productList.innerHTML = data.html;
        })
        .catch(error => console.error('Lỗi khi tải sản phẩm:', error));
    }
    minSlider.addEventListener('input', function() {
        minPriceInput.value = minSlider.value;
        updatePriceLabels();
        updateSliderBackground();
    });

    maxSlider.addEventListener('input', function() {
        maxPriceInput.value = maxSlider.value;
        updatePriceLabels();
        updateSliderBackground();
    });
    // Gọi hàm lọc sản phẩm khi người dùng thay đổi giá trị của thanh trượt
    minSlider.addEventListener('change', filterProducts);
    maxSlider.addEventListener('change', filterProducts);
    
    updatePriceLabels();
    updateSliderBackground();
});
</script>
@include('footer')
</body>
</html>