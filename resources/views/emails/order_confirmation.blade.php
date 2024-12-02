<!DOCTYPE html>
<html>
<head>
    <title>Xác nhận đơn hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #444;
        }
        .container {
            width: 100%;
            max-width: 700px;
            margin: 50px auto;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        h2 {
            background-color: #4CAF50;
            color: white;
            margin: 0;
            padding: 20px;
            text-align: center;
            font-size: 24px;
        }
        .content {
            padding: 20px;
        }
        p {
            margin: 0 0 15px;
            line-height: 1.6;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        td, th {
            padding: 12px;
            text-align: left;
            border: 1px solid #e0e0e0;
        }
        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .footer {
            text-align: center;
            padding: 15px;
            background-color: #f4f4f4;
            font-size: 14px;
            color: #777;
            border-top: 1px solid #e0e0e0;
        }
        .highlight {
            color: #4CAF50;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        @if($thu_nghiem==1)
            <h2>Cảm ơn bạn đã đặt hàng!</h2>
            <div class="content">
                <p>Thông tin đơn hàng của bạn:</p>
                <table>
                    <thead>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cartItems as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->quantity }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tr>
                        <th>Mã đơn hàng</th>
                        <td>{{ $orderDetails['maDonHang'] }}</td>
                    </tr>
                    <tr>
                        <th>Họ và tên</th>
                        <td>{{ $orderDetails['tenKhachHang'] }}</td>
                    </tr>
                    <tfoot>
                        <tr>
                            <th>Phương thức thanh toán</th>
                            <td>{{ $orderDetails['hinhThucMua'] }}</td>
                        </tr>
                        <tr>
                            <th>Ngày đặt hàng</th>
                            <td>{{ $orderDetails['ngayDatHang'] }}</td>
                        </tr>
                        <tr>
                            <th>Địa chỉ</th>
                            <td>{{ $orderDetails['diaChi'] }}</td>
                        </tr>
                        <tr>
                            <th>Tổng tiền</th>
                            <td class="highlight">{{ number_format($orderDetails['tongTien']) }} ₫</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        @else
            <h2>Cảm ơn bạn đã đặt hàng!</h2>
            <div class="content">
                <p>Thông tin đơn hàng của bạn:</p>
                <table>
                    <tr>
                        <th>Mã đơn hàng</th>
                        <td>{{ $orderDetails['maDonHang'] }}</td>
                    </tr>
                    <tr>
                        <th>Họ và tên</th>
                        <td>{{ $orderDetails['tenKhachHang'] }}</td>
                    </tr>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <td>{{ $orderDetails['tenDonHang'] }}</td>
                    </tr>
                    <tr>
                        <th>Số lượng</th>
                        <td>{{ $orderDetails['soLuong'] }}</td>
                    </tr>
                    <tr>
                        <th>Phương thức thanh toán</th>
                        <td>{{ $orderDetails['hinhThucMua'] }}</td>
                    </tr>
                    <tr>
                        <th>Ngày đặt hàng</th>
                        <td>{{ $orderDetails['ngayDatHang'] }}</td>
                    </tr>
                    <tr>
                        <th>Địa chỉ</th>
                        <td>{{ $orderDetails['diaChi'] }}</td>
                    </tr>
                    <tr>
                        <th>Tổng tiền</th>
                        <td class="highlight">{{ number_format($orderDetails['tongTien']) }} ₫</td>
                    </tr>
                </table>
            </div>
        @endif
        <p class="footer">Chúng tôi sẽ liên hệ bạn sớm nhất để giao hàng. Cảm ơn đã mua sắm tại cửa hàng của chúng tôi!</p>
    </div>
</body>
</html>
