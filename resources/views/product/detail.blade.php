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
        h1{
        color: #46382F;
    }
    p{
        color: #4D5562;
        font-size: 18px;
        line-height: 1.6; 
    }
    .nav-bread{
        box-sizing: border-box;
        width: 100%;
        max-width: 100%;
        padding: 10px ;
        position: relative; 
        margin: 0 auto ;
        background-color: #EEE9E9;
    }
    .bread-list li:nth-child(3){
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
    .product-detail {
    display: flex;
    gap: 20px;
    padding: 20px;
    justify-content: center;
}
.product-image>img {
    width: 300px;
    height: auto;
}
.product-info-sp {
    max-width: 400px;
}
.product-thumbnails{
    width: 4rem;
    height: 4rem;
    border-radius: 1rem;
    border: 0.2rem solid #c4c4c4;
    cursor: pointer;
    overflow: hidden;
    transition: 0.4s ease-out;
}
.product-details{
    padding: 10px;
    width: 20%;
    height: 100%;
    border: 0.2rem solid #c4c4c4;
    border-radius: 20px;
}
.product-details>ul>li{
    display: flex;
    align-items: center;
}
.product-details>ul>li>img{
    width: 2rem;
    height: 2rem;
    margin-right: 1rem;
}
.product-thumbnails>img{
    width: 4rem;
    height: auto;
}
.price {
    color: red;
    font-size: 24px;
    font-weight: bold;
}
.size-btn{
    background: #fff;
    border: 0.2rem solid #c4c4c4;
    border-radius: 10px;
}
.size-btn, .add-to-cart, .buy-now {
    padding: 10px;
    margin: 5px 0;
}
.size-btn>span{

}
.add-to-cart, .buy-now{
    background: #fff;
    border: 0.2rem solid #c4c4c4;
    border-radius: 10px;
}
.quantity {
    display: flex;
    align-items: center;
}
.quantity button {
    padding: 5px;
}
.product-details ul {
    list-style: none;
    padding: 0;
}
.product-details ul li {
    padding: 5px 0;
}
.hotline .phone {
    color: red;
    font-weight: bold;
}
.quantity{
    width: 50%;
}
.quantity>button{
    width: 2rem;
    background: #fff;
    border: 0.2rem solid #c4c4c4;
    border-radius: 10px;
    cursor: pointer;

}
.wishlist{
    background: #fff;
    border: 0.2rem solid #c4c4c4;
    cursor: pointer;
}
.wishlist:focus{
    background: #FF6A6A
}
.quantity>input{
    border: none;
    width: 1rem;
    margin: 0 auto;
}
.thanh-toan{
    display: flex;
    gap: 1rem;
}
/*  */

.usage-instructions {
    font-family: Arial, sans-serif;
    line-height: 1.8;
    color: #333;
}

.usage-instructions h2 {
    color: #b12704;
    font-size: 18px;
    margin-top: 20px;
    margin-bottom: 10px;
}

.usage-instructions ul {
    margin: 10px 0;
    padding-left: 20px;
}

.usage-instructions li {
    margin-bottom: 10px;
}

.usage-instructions p {
    margin-top: 15px;
}
.container-baohanh {
            max-width: 800px;
            margin: 20px auto;
            background: #fff;
            border-radius: 8px;
        }
        .container-baohanh p {
            margin-bottom: 15px;
        }
        .container-baohanh h3 {
            font-size: 1.2em;
            margin-top: 20px;
            margin-bottom: 10px;
            color: #1a73e8; /* Highlight color for headings */
            border-left: 4px solid #1a73e8;
            padding-left: 10px;
        }
        .container-baohanh strong {
            color: #d9534f; /* Highlight important text in red */
        }
        .container-baohanh a {
            color: #1a73e8;
            text-decoration: none;
        }
        .container-baohanh a:hover {
            text-decoration: underline;
        }
        .highlight {
            font-weight: bold;
            color: #5cb85c; /* Green color for positive text */
        }
        .support-contact {
            margin-top: 10px;
        }
        .product-detail-wrapper {
    display: flex;
    gap: 20px; /* Khoảng cách giữa các phần */
    margin: 0 150px;
}

.product-detail-tabs {
    flex: 2; /* Chiếm nhiều không gian hơn */
}

.customer-benefits {
    flex: 1; /* Chiếm ít không gian hơn */
    background: #f9f9f9; /* Màu nền để làm nổi bật (tuỳ chọn) */
    padding: 20px; /* Khoảng cách bên trong */
    border: 1px solid #ddd; /* Viền để phân biệt */
    height: 13rem;
}

.product-detail-tabs {
    font-family: Arial, sans-serif;
    max-width: 800px;
    margin: 0 auto;
}

.tabs {
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid #ddd;
    margin-bottom: 20px;
    padding: 0;
    list-style: none;
}

.tab-item {
    cursor: pointer;
    padding: 10px 15px;
    border-bottom: 2px solid transparent;
    font-weight: bold;
    color: #333;
}

.tab-item.active {
    border-color: #9c8679; /* Đường viền dưới của tab đang chọn */
    color: #9c8679;
    transition: color 0.3s ease, border-color 0.3s ease;
}

.tab-pane {
    display: none;
    padding: 15px;
    background: #fff;
    border: 1px solid #ddd;
    border-top: none;
    opacity: 0;
    transition: opacity 0.3s ease-in-out; /* Hiệu ứng mờ dần */
}

.tab-pane.active {
    display: block;
    opacity: 1; /* Khi tab active, độ mờ là 1 */
}

.customer-benefits {
    margin-top: 30px;
    background: #f9f9f9;
    padding: 15px;
    border: 1px solid #ddd;
}

.customer-benefits h3 {
    font-size: 18px;
    margin-bottom: 10px;
    color: #9c8679;
}

.customer-benefits ul {
    list-style: none;
    padding: 0;
}

.customer-benefits ul li {
    margin-bottom: 10px;
    font-size: 14px;
    line-height: 1.5;
}
.review-item{
    gap: 1rem;
    display: flex;
    justify-content: center;
}
.review-section {
    max-width: 800px;
    margin: 20px auto;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
    background-color:#fff;
}
.review-section h3 {
    font-size: 18px;
    margin-bottom: 20px;
    text-transform: uppercase;
    color: #333;
}

.review-summary {
    border-bottom: 1px solid #ddd;
    padding-bottom: 20px;
    margin-bottom: 20px;
    text-align: center;
}

.review-summary p {
    margin: 10px 0;
    font-size: 14px;
    color: #666;
}

.rating-filter {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 10px;
}

.filter-btn {
    border: 1px solid #ddd;
    background-color: #fff;
    padding: 8px 15px;
    font-size: 14px;
    cursor: pointer;
    border-radius: 3px;
    transition: all 0.3s;
}

.filter-btn.active,
.filter-btn:hover {
    background-color:#9c8679;
    border-color: #9c8679;
    color: #fff;
}

.review-list {
    text-align: center;
    color: #666;
    font-size: 14px;
}
.similar-products {
    margin-top: 2rem;
    overflow: hidden; /* Prevents scrollbars from showing */
    position: relative;
    user-select: none; /* Ngăn chọn văn bản */
}
.product-list{
    height: 20rem;
}
.similar-products .product-list {
    display: flex;
    overflow-x: auto;
    scroll-behavior: smooth; /* Smooth scrolling effect */
    gap: 1rem;
    padding: 1rem 0;
}

.similar-products .product-card {
    flex: 0 0 calc(18% - 1rem); /* 20% width for 5 products per row */
    border: 1px solid #ddd;
    padding: 1rem;
    text-align: center;
    transition: transform 0.3s ease-in-out;
    user-select: none; /* Ngăn chọn trong từng sản phẩm */
    pointer-events: none; /* Ngăn mọi tương tác với các phần tử */
}
.similar-products .product-card:hover {
    transform: translateY(-10px); /* Lifts the card slightly on hover */
}

.similar-products .product-card img {
    width: 70%;
    height: auto;
    border-radius: 8px;
}
.similar-products h2{
    color: #9c8679;
    text-align: center;
}
.similar-products .product-card h3 {
    margin: 0.5rem 0;
    font-size: 1rem;
    text-overflow: ellipsis;
}

.similar-products .product-card .price {
    color: #9c8679;
    font-weight: bold;
}

.similar-products .product-card a {
    pointer-events: auto; /* Cho phép nhấp vào link trong sản phẩm */
}
/* Responsive Design */
@media (max-width: 1024px) {
    .product-detail-wrapper {
        flex-direction: column; /* Chuyển layout thành cột trên màn hình nhỏ */
        margin: 0 30px;
    }

    .customer-benefits {
        height: auto; /* Cho phép chiều cao tự động thay đổi */
    }
}

@media (max-width: 768px) {
    .tabs {
        flex-direction: column; /* Đặt các tab thành cột */
    }

    .product-detail-wrapper {
        margin: 0 20px;
    }

    .tab-item {
        padding: 10px;
        text-align: center;
    }

    .product-detail-tabs {
        max-width: 100%; /* Cho phép tabs chiếm toàn bộ chiều rộng */
    }
    .review-section {
        padding: 15px;
    }

    .rating-filter {
        flex-wrap: wrap;
        gap: 5px;
    }

    .filter-btn {
        flex: 1 1 calc(33.33% - 10px); /* Mỗi nút chiếm 1/3 hàng */
        text-align: center;
        font-size: 12px;
    }

    .review-summary p, .review-list p {
        font-size: 12px;
    }
    .similar-products .product-card {
        flex: 0 0 calc(40% - 1rem); /* Show 2 products per row on smaller screens */
    }

}

@media (max-width: 480px) {
    .product-detail-wrapper {
        margin: 0 10px;
    }

    .customer-benefits {
        margin-top: 20px;
    }

    .tabs {
        flex-direction: column; /* Đặt các tab thành cột */
    }

    .tab-item {
        font-size: 14px; /* Giảm kích thước font chữ cho các tab */
        padding: 8px 10px;
    }

    .customer-benefits h3 {
        font-size: 16px; /* Giảm kích thước font chữ cho tiêu đề */
    }

    .customer-benefits ul li {
        font-size: 12px; /* Giảm kích thước font chữ cho các mục */
    }
    .filter-btn {
        flex: 1 1 calc(50% - 10px); /* Mỗi nút chiếm 1/2 hàng */
        font-size: 10px;
        padding: 6px 10px;
    }
}
.review-item img {
    max-width: 100px;
    margin-top: 10px;
    border-radius: 5px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
}

.review-item video {
    margin-top: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}
</style>
<body>
@include('header')
<section class="nav-bread">
    <div class="bread-content">
        <ul class="bread-list">
            <li><a href="{{ route('form') }}">Home </a></li>
            <li><img src="http://127.0.0.1:8000/assets/images/logo/arrow.png"alt=""></li>
            <li><a href="{{ route('perfumes') }}">Nước hoa </a></li>
            <li><img src="http://127.0.0.1:8000/assets/images/logo/arrow.png"alt=""></li>
            <li>{{ $nuocHoa->thuongHieu }}</li>
        </ul>
    </div>
   </section>
    <div class="product-detail">
        <div class="product-image">
            <img src="http://127.0.0.1:8000/assets/images/anhnuochoa/all/{{ $nuocHoa->image }}" alt="{{ $nuocHoa->name }}">
            <div class="product-thumbnails">
               <!-- Thêm hình ảnh nhỏ nếu có -->
               <img src="http://127.0.0.1:8000/assets/images/anhnuochoa/all/{{ $nuocHoa->image }}" alt="{{ $nuocHoa->tenSanPham }}">
            </div>
        </div>
        <div class="product-info-sp">
            <h2>{{ $nuocHoa->name }}</h2>
            <div class="rating">⭐⭐⭐⭐⭐ {{ $danhGia->count()}} đánh giá</div>
            <form action="{{ route('wishlist.add', ['productId' => $nuocHoa->id]) }}" method="POST" style="display: inline;">
                @csrf
                <input type="hidden" name="name" value="{{ $nuocHoa->name }}">
                <input type="hidden" name="image" value="{{ $nuocHoa->image }}">
                <input type="hidden" name="giaTienLon" value="{{ $nuocHoa->giaTienLon }}">
                <button type="submit" class="wishlist">Thêm vào yêu thích</button>
            </form>
            @if(session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            @if(session('error'))
             <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <p class="price" id="price">{{ number_format($nuocHoa->giaTienLon, 0, ',', '.') }} ₫</p>
            <hr>
            <h4>Dung tích</h4>
            <button style="border: 0.2rem solid red;" class="size-btn" id="mainSizeBtn">{{ $nuocHoa->dungTich }}</button>
            @if ($nuocHoa->dungTichNho)
                <button class="size-btn" id="smallSizeBtn">{{ $nuocHoa->dungTichNho }}</button>
            @endif
            <hr>
            <h4>Số lượng</h4>
            <div id="quantity" class="quantity">
                <button class="minus">-</button>
                <input type="text" id="so-luong" value="1">
                <button class="plus">+</button>
            </div>
            <div class="thanh-toan">
                <form style="display: flex;" action="{{ route('cart.add', ['productId' => $nuocHoa->id]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="selectedVolume" id="selectedVolume" value="{{ $nuocHoa->dungTich }}">
                    <input type="hidden" name="selectedPrice" id="selectedPrice" value="{{ $nuocHoa->giaTienLon }}">
                    <input type="hidden" name="quantity" id="hidden-quantity-cart" value="1"> <!-- Số lượng sẽ được cập nhật ở đây -->
                    <button class="add-to-cart">THÊM VÀO GIỎ HÀNG</button>
                </form>
                <form action="{{ route('checkout.show', ['id' => $nuocHoa->id]) }}" method="POST">
                    @csrf
                    <input type="hidden" id="hidden-quantity-checkout" name="quantity" value="1">
                    <input type="hidden" name="selectedPrice" id="selectedPriceCheckout" value="{{ $nuocHoa->giaTienLon }}">
                    <button type="submit"  class="buy-now">MUA NGAY</button>
                </form>
            </div>
            <p class="hotline">HOTLINE TƯ VẤN <span class="phone">0917 513 519</span> (9:00 - 22:00)</p>
        </div>    
        <div class="product-details">
            <h2>Thông tin sản phẩm</h2>
            <ul>
                <li><img src="http://127.0.0.1:8000/assets/images/logo/perfume.png" alt="">Thương hiệu: {{ $nuocHoa->thuongHieu }}</li>
                <hr>
                <li><img src="http://127.0.0.1:8000/assets/images/logo/acid.png" alt="">Nồng độ: {{ $nuocHoa->nongDo }}</li>
                <hr>
                <li><img src="http://127.0.0.1:8000/assets/images/logo/drop.png" alt="">Độ lưu hương: {{ $nuocHoa->doLuuHuong }}</li>
                <hr>
                <li><img src="http://127.0.0.1:8000/assets/images/logo/zinnia.png" alt=""> Độ tỏa hương: {{ $nuocHoa->doToaHuong }}</li>
                <hr>
                <li><img src="http://127.0.0.1:8000/assets/images/logo/sex.png" alt=""> Giới tính: {{ $nuocHoa->gioiTinh }}</li>
                <hr>
            </ul>
        </div>
    </div>
<div class="review-section">
    <h3>ĐÁNH GIÁ SẢN PHẨM</h3>
    <div class="review-summary">
        <p>{{ $danhGia->count() > 0 ? 'Tổng cộng: ' . $danhGia->count() . ' đánh giá' : 'Hiện tại chưa có đánh giá nào cho sản phẩm này!' }}</p>
        <div class="rating-filter">
            <button class="filter-btn active">Tất cả</button>
            @for ($i = 5; $i >= 1; $i--)
                <button class="filter-btn">
                    {{ $i }} Điểm ({{ $danhGia->where('rating', $i)->count() }})
                </button>
            @endfor
        </div>
    </div>

<div class="review-list">
    <p style="display: none;">Hiện chưa có bài đánh giá nào</p>
    @foreach ($danhGia as $item)
    <div class="review-item" data-rating="{{ $item->rating }}">
        <p><strong>{{ $item->user->name }}</strong> - {{ $item->rating }} sao</p>
        <p>{{ $item->comment }}</p>
        @if ($item->image || $item->video)
            @if ($item->image)
                <img class="anh-don-hang" style="width: 100px; height: 100px;" src="{{ asset('storage/' . $item->image) }}" alt="Ảnh đánh giá" width="100">
            @endif
            @if ($item->video)
                <video controls width="150" height="150">
                    <source src="{{ asset('storage/' . $item->video) }}" type="video/mp4">
                </video>
            @endif
        @else
            <p>Người dùng không gửi ảnh hoặc video trong đánh giá này.</p>
        @endif
    </div>
@endforeach
</div>
</div>
    <div class="product-detail-wrapper">
        <div class="product-detail-tabs">
        <ul class="tabs">
        <li class="tab-item active" data-tab="tab-1">Mô tả sản phẩm</li>
        <li class="tab-item" data-tab="tab-2">Sử dụng và bảo quản</li>
        <li class="tab-item" data-tab="tab-3">Vận chuyển và đổi trả</li>
    </ul>

    <div class="tab-content">
        <!-- Tab 1: Mô tả sản phẩm -->
        <div class="tab-pane active" id="tab-1">
            @foreach ($nuocHoa->moTa as $key => $moTa)
                <p>{!! nl2br(e($moTa->noi_dung)) !!}</p>
            @endforeach
        </div>

        <!-- Tab 2: Sử dụng và bảo quản -->
        <div class="tab-pane" id="tab-2">
        <div class="usage-instructions">
    <h2>CÁCH SỬ DỤNG:</h2>
    <ul>
        <li>Các vị trí được ưu tiên tiếp xúc là cổ tay, khuỷu tay, sau tai, gáy, cổ trước.</li>
        <li>Sau khi xịt nước hoa lên cơ thể, tránh dùng tay chà xát hoặc làm khô da bằng những vật dụng khác, điều này phá vỡ các tầng hương trong nước hoa, khiến nó có thể thay đổi mùi hương hoặc bay mùi nhanh hơn.</li>
        <li>Để chai nước hoa cách vị trí cần dùng nước hoa trong khoảng 15-20cm và xịt mạnh, dứt khoát để mật độ phủ của nước hoa được rộng nhất, tầng độ bám tỏa trên da của bạn.</li>
        <li>Nước hoa có thể bám tốt hay không tùy thuộc vào thời gian, không gian, cơ địa, chế độ sinh hoạt, ăn uống của bạn.</li>
        <li>Bạn nên mang theo nước hoa bên mình hoặc trang bị những mẫu nhỏ tiện dụng.</li>
    </ul>

    <h2>Bảo quản nước hoa:</h2>
    <ul>
        <li>Nước hoa thường không có hạn sử dụng. Tuy nhiên, ở một số loại nước hạn sử dụng được chú thích là từ 24 đến 36 tháng, và tính từ ngày bạn xịt sản phẩm và sử dụng lần đầu tiên.</li>
        <li>Nên bảo quản nước hoa ở những nơi khô thoáng, mát mẻ, tránh nắng, nóng hoặc quá lạnh, lưu ý không để nước hoa trong cốp xe, những nơi có nhiệt độ nóng lạnh thất thường.</li>
    </ul>

    <p><strong>Hạn sử dụng:</strong> In trên bao bì sản phẩm</p>
    <p><strong>Ngày sản xuất:</strong> In trên bao bì sản phẩm</p>

    <p>
        Cảm ơn quý khách đã tin tưởng và lựa chọn TUANHALAN. Chúng tôi cam kết sẽ mang đến những sản phẩm chính
        hãng và chất lượng tuyệt vời cho bạn.
    </p>
    <p>
        Sau khi sử dụng sản phẩm, quý khách vui lòng để lại nhận xét đánh giá, TUANHALAN sẽ dựa vào đó để thay đổi
        ngày một tốt hơn, mang đến những trải nghiệm tuyệt vời cho bạn.
    </p>
</div>

        </div>

        <!-- Tab 3: Vận chuyển và đổi trả -->
        <div class="tab-pane" id="tab-3">
        <div class="container-baohanh">
        <p><strong>TUANHALAN cam kết bảo hành trọn đời</strong> về mùi hương của chai nước hoa. Nếu sản phẩm không đúng chính hãng, khách hàng có quyền trả hàng <strong>hoàn tiền 100%</strong>.</p>

        <h3>ĐIỀU KIỆN BẢO HÀNH</h3>
        <p>Sản phẩm phải còn đầy đủ tem, hộp của nhà sản xuất và tem bảo hành của Missi.</p>

        <h3>QUY TRÌNH BẢO HÀNH</h3>
        <p>Khách hàng gửi sản phẩm về 470 Đ. Trần Đại Nghĩa, Hoà Hải, Ngũ Hành Sơn, Đà Nẵng 550000, Vietnam.<br>
        TUANHALAN sẽ kiểm tra và tiến hành hoàn tiền cho quý khách từ 1-2 ngày làm việc.</p>

        <h3>CÁC TRƯỜNG HỢP KHÔNG HỖ TRỢ BẢO HÀNH</h3>
        <p>- Sản phẩm không phải do TUANHALAN trực tiếp bán.<br>
        - Sản phẩm đã bị can thiệp vào các phần vỏ, tem bảo hành của TUANHALAN.</p>

        <h3>HỖ TRỢ</h3>
        <p class="support-contact">Hotline: 0917 513 519 (Zalo)<br>
        Email: <a href="mailto:tuandiep.230205@gmail.com">tuandiep.230205@gmail.com</a><br>
        Trong trường hợp cần xử lý nhanh quý khách có thể liên hệ <strong>0917 513 519</strong> (Zalo).</p>
    </div>

        </div>
    </div>
        </div>
        <div class="customer-benefits">
        <h3>Quyền lợi khách hàng tại TUANHALAN</h3>
        <ul>
            <li>Cam kết sản phẩm chính hãng 100% (đền 200% giá trị sản phẩm nếu phát hiện hàng giả)</li>
            <li>Chính sách đổi hàng và tích điểm thành viên</li>
            <li>Tư vấn và hỗ trợ gọi miễn phí cho khách hàng</li>
            <li>Miễn phí giao hàng cho hóa đơn từ 1 triệu</li>
        </ul>
    </div>
    </div>
    <div class="similar-products">
    <h2>Sản phẩm tương tự</h2>
    <div class="product-list">
        @foreach($similarProducts as $product)
            <div class="product-card">
                <a href="{{ route('product.detail', ['id' => $product->id]) }}">
                    <img src="http://127.0.0.1:8000/assets/images/anhnuochoa/all/{{ $product->image }}" alt="{{ $product->name }}">
                    <h3>{{ $product->name }}</h3>
                    <p class="price">{{ number_format($product->giaTienLon, 0, ',', '.') }} ₫</p>
                </a>
            </div>
        @endforeach
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
<script src="http://127.0.0.1:8000/assets/js/scriptabout.js"></script>
@include('footer')
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const minusButton = document.querySelector('.minus');
    const plusButton = document.querySelector('.plus');
    const quantityInput = document.querySelector('.quantity input');

    // Sự kiện cho nút tăng
    plusButton.addEventListener('click', () => {
        let currentValue = parseInt(quantityInput.value) || 0;
        quantityInput.value = currentValue + 1;
    });

    // Sự kiện cho nút giảm
    minusButton.addEventListener('click', () => {
        let currentValue = parseInt(quantityInput.value) || 0;
        if (currentValue > 1) { // Đảm bảo giá trị không giảm xuống dưới 1
            quantityInput.value = currentValue - 1;
        }
    });
});
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const mainSizeBtn = document.getElementById('mainSizeBtn');
        const smallSizeBtn = document.getElementById('smallSizeBtn');
        const priceElement = document.getElementById('price');
        const selectedVolumeInput = document.getElementById('selectedVolume');
        const selectedPriceInput = document.getElementById('selectedPrice');
        const selectedPriceInputCheckout = document.getElementById('selectedPriceCheckout');


        const mainPrice = "{{ $nuocHoa->giaTienLon }}";
        const smallPrice = "{{ $nuocHoa->giaTienNho }}";
        const mainVolume = "{{ $nuocHoa->dungTich }}";
        const smallVolume = "{{ $nuocHoa->dungTichNho }}";

        // Set default to main size
        mainSizeBtn.style.border = '0.2rem solid red';

        mainSizeBtn.addEventListener('click', () => {
            mainSizeBtn.style.border = '0.2rem solid red';
            if (smallSizeBtn) smallSizeBtn.style.border = 'none';
            priceElement.textContent = parseInt(mainPrice).toLocaleString() + ' ₫';
            selectedVolumeInput.value = mainVolume;
            selectedPriceInput.value = mainPrice;
            selectedPriceInputCheckout.value = mainPrice;
        });

        if (smallSizeBtn) {
            smallSizeBtn.addEventListener('click', () => {
                smallSizeBtn.style.border = '0.2rem solid red';
                mainSizeBtn.style.border = 'none';
                priceElement.textContent = parseInt(smallPrice).toLocaleString() + ' ₫';
                selectedVolumeInput.value = smallVolume;
                selectedPriceInput.value = smallPrice;
                selectedPriceInputCheckout.value = smallPrice;
                
            });
        }
    });
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const soluong = document.getElementById('so-luong');
    const hiddenQuantityCart = document.getElementById('hidden-quantity-cart');
    const hiddenQuantityCheckout = document.getElementById('hidden-quantity-checkout');

    document.querySelector('.minus').addEventListener('click', () => {
        if (parseInt(soluong.value) >= 1) {
            soluong.value = parseInt(soluong.value) ;
            hiddenQuantityCart.value = soluong.value; // Update cart form's hidden field
            hiddenQuantityCheckout.value = soluong.value; // Update checkout form's hidden field
        }
    });

    document.querySelector('.plus').addEventListener('click', () => {
        soluong.value = parseInt(soluong.value) ;
        hiddenQuantityCart.value = soluong.value; // Update cart form's hidden field
        hiddenQuantityCheckout.value = soluong.value; // Update checkout form's hidden field
    });
});

</script>
<script>
    document.querySelectorAll('.tab-item').forEach(tab => {
    tab.addEventListener('click', function () {
        const target = this.getAttribute('data-tab'); // Lấy tab tương ứng

        // Xóa class 'active' khỏi tất cả các tab và nội dung
        document.querySelectorAll('.tab-item').forEach(item => item.classList.remove('active'));
        document.querySelectorAll('.tab-pane').forEach(content => content.classList.remove('active'));

        // Thêm class 'active' vào tab và nội dung được chọn
        this.classList.add('active');
        document.getElementById(target).classList.add('active');
    });
});

</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".filter-btn");
    const reviewItems = document.querySelectorAll(".review-item");
    const noReviewMessage = document.querySelector(".review-list p");

    filterButtons.forEach((button) => {
        button.addEventListener("click", function () {
            filterButtons.forEach((btn) => btn.classList.remove("active"));
            this.classList.add("active");

            const rating = this.textContent.match(/\d+/); // Lấy số sao (1-5) từ nút, hoặc null nếu là "Tất cả"
            let hasVisibleReview = false;

            reviewItems.forEach((item) => {
                const itemRating = parseInt(item.dataset.rating); // Dùng dataset thay vì textContent
                if (!rating || itemRating === parseInt(rating[0])) {
                    item.style.display = "flex"; // Hiển thị
                    hasVisibleReview = true;
                } else {
                    item.style.display = "none"; // Ẩn
                }
            });

            noReviewMessage.style.display = hasVisibleReview ? "none" : "flex";
        });
    });
});

</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const productList = document.querySelector('.similar-products .product-list');
        
        let isDown = false;
        let startX;
        let scrollLeft;

        productList.addEventListener('mousedown', (e) => {
            isDown = true;
            productList.classList.add('active');
            startX = e.pageX - productList.offsetLeft;
            scrollLeft = productList.scrollLeft;
        });

        productList.addEventListener('mouseleave', () => {
            isDown = false;
            productList.classList.remove('active');
        });

        productList.addEventListener('mouseup', () => {
            isDown = false;
            productList.classList.remove('active');
        });

        productList.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - productList.offsetLeft;
            const walk = (x - startX) * 2; // Scroll-fast
            productList.scrollLeft = scrollLeft - walk;
        });
    });
</script>
</body>
</html>
