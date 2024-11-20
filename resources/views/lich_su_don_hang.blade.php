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
    /* Định dạng bảng */
table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    font-size: 16px;
    text-align: left;
}

table th, table td {
    padding: 12px 15px;
    border: 1px solid #ddd;
}

table th {
    background-color: #f4f4f4;
    color: #333;
    font-weight: bold;
    text-transform: uppercase;
}

/* Định dạng các hàng */
table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

table tbody tr:hover {
    background-color: #f1f1f1;
    transition: background-color 0.3s ease;
}

/* Responsive cho bảng */
@media (max-width: 768px) {
    table {
        border: 0;
    }

    table thead {
        display: none;
    }

    table tr {
        display: block;
        margin-bottom: 15px;
        border-bottom: 1px solid #ddd;
    }

    table td {
        display: block;
        text-align: right;
        font-size: 14px;
        border: 0;
        position: relative;
        padding: 8px 12px;
    }

    table td:before {
        content: attr(data-label);
        position: absolute;
        left: 0;
        width: 50%;
        padding-left: 10px;
        font-weight: bold;
        text-align: left;
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
                <li>Đăng nhập</li>
            </ul>
        </div>
   </section>
   <section>
    <h1 style="text-align: center;">Lịch sử đơn hàng</h1>
    @if($donHangs->isEmpty())
        <p style="text-align: center;">Bạn chưa có đơn hàng nào.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Mã Đơn Hàng</th>
                    <th>Ngày Đặt Hàng</th>
                    <th>Tổng Tiền</th>
                    <th>Trạng Thái</th>
                    <th>Tên Khách Hàng</th>
                    <th>Tên Đơn Hàng</th>
                    <th>Hình Thức Mua</th>
                    <th>Số Lượng</th>
                    <th>Ghi Chú</th>
                </tr>
            </thead>
            <tbody>
                @foreach($donHangs as $donHang)
                    <tr>
                        <td data-label="Mã Đơn Hàng">{{ $donHang->maDonHang }}</td>
                        <td data-label="Ngày Đặt Hàng">{{ $donHang->ngayDatHang }}</td>
                        <td data-label="Tổng Tiền">{{ number_format($donHang->tongTien, 0, ',', '.') }} VNĐ</td>
                        <td data-label="Trạng Thái">
                            @switch($donHang->trangThai)
                                @case(1) Đang xử lý @break
                                @case(2) Đã xác nhận @break
                                @case(3) Đã hủy @break
                                @case(4) Đã giao hàng @break
                                @case(5) Đã hoàn thành @break
                                @default Không rõ
                            @endswitch
                        </td>
                        <td data-label="Tên Khách Hàng">{{ $donHang->tenKhachHang }}</td>
                        <td data-label="Tên Đơn Hàng">{{ $donHang->tenDonHang }}</td>
                        <td data-label="Hình Thức Mua">
                            @if($donHang->hinhThucMua === 'cash_on_delivery')
                                Thanh toán khi nhận hàng
                            @else
                                {{ $donHang->hinhThucMua }}
                            @endif
                        </td>
                        <td data-label="Số Lượng">{{ $donHang->soLuong }}</td>
                        <td data-label="Ghi Chú">{{ $donHang->ghiChu ?? 'Không có ghi chú' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
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