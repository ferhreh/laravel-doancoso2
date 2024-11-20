<!DOCTYPE html>
<html lang="en">

<head>
  <title>Danh sách đơn hàng | Quản trị Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/css/css_admin/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css"
    href="http://127.0.0.1:8000/assets/font/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

</head>

<body onload="time()" class="app sidebar-mini rtl">
  <!-- Navbar-->
  <header class="app-header">
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
      aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">


      <!-- User Menu-->
      <li><a class="app-nav__item" href="{{route('admin.index')}}"><i class='bx bx-log-out bx-rotate-180'></i> </a>

      </li>
    </ul>
  </header>
  <style>
    body {
    background-color: #f8f9fa;
    font-family: Arial, sans-serif;
}

.container {
    max-width: 800px;
    margin: auto;
}

.card {
    border-radius: 10px;
}

.card-header {
    border-radius: 10px 10px 0 0;
    font-size: 18px;
    font-weight: bold;
}

.btn-success {
    background-color: #28a745;
    border: none;
}

.btn-secondary {
    background-color: #6c757d;
    border: none;
}

.form-control,
.form-select {
    border-radius: 5px;
}

.invalid-feedback {
    font-size: 14px;
    color: #dc3545;
}

  </style>
  <!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="/images/hay.jpg" width="50px"
        alt="User Image">
      <div>
        <p class="app-sidebar__user-name"><b>Admin</b></p>
        <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
      </div>
    </div>
    <hr>
    <ul class="app-menu">
      <li><a class="app-menu__item haha" href="phan-mem-ban-hang.html"><i class='app-menu__icon bx bx-cart-alt'></i>
          <span class="app-menu__label">POS Bán Hàng</span></a></li>
      <li><a class="app-menu__item active" href="{{route('admin.index')}}"><i class='app-menu__icon bx bx-tachometer'></i><span
            class="app-menu__label">Bảng điều khiển</span></a></li>
      <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-user-voice'></i><span
            class="app-menu__label">Quản lý khách hàng</span></a></li>
      <li><a class="app-menu__item" href="{{route('admin.table-data-product')}}"><i
            class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý sản phẩm</span></a>
      </li>
      <li><a class="app-menu__item" href="{{route('admin.table-data-oder')}}"><i 
            class='app-menu__icon bx bx-task'></i><span class="app-menu__label">Quản lý đơn hàng</span></a></li>
      <li><a class="app-menu__item" href="{{route('admin.quan-ly-bao-cao')}}"><i
            class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label">Báo cáo doanh thu</span></a>
      </li>
      <li><a class="app-menu__item" href="{{route('admin.page-calendar')}}"><i class='app-menu__icon bx bx-calendar-check'></i><span
            class="app-menu__label">Lịch công tác </span></a></li>
      <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-cog'></i><span class="app-menu__label">Cài
            đặt hệ thống</span></a></li>
    </ul>
  </aside>
  <div class="container mt-4">
    <h2>Chỉnh sửa sản phẩm</h2>
    <form action="{{ route('admin.update-san-pham', $nuocHoa->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="thuongHieu">Thương hiệu</label>
            <input type="text" class="form-control" id="thuongHieu" name="thuongHieu" value="{{ $nuocHoa->thuongHieu }}" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="name">Tên sản phẩm</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $nuocHoa->name }}" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="gioiTinh">Giới tính</label>
            <select class="form-control" id="gioiTinh" name="gioiTinh" required>
                <option value="Nam" {{ $nuocHoa->gioiTinh == 'Nam' ? 'selected' : '' }}>Nam</option>
                <option value="Nữ" {{ $nuocHoa->gioiTinh == 'Nữ' ? 'selected' : '' }}>Nữ</option>
                <option value="Unisex" {{ $nuocHoa->gioiTinh == 'Unisex' ? 'selected' : '' }}>Unisex</option>
            </select>
        </div>
        
        <div class="form-group mb-3">
            <label for="nongDo">Nồng độ</label>
            <input type="text" class="form-control" id="nongDo" name="nongDo" value="{{ $nuocHoa->nongDo }}" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="dungTich">Dung tích lớn</label>
            <input type="text" class="form-control" id="dungTich" name="dungTich" value="{{ $nuocHoa->dungTich }}" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="giaTienLon">Giá tiền lớn</label>
            <input type="number" class="form-control" id="giaTienLon" name="giaTienLon" value="{{ $nuocHoa->giaTienLon }}" step="0.01">
        </div>
        
        <div class="form-group mb-3">
            <label for="dungTichNho">Dung tích nhỏ</label>
            <input type="text" class="form-control" id="dungTichNho" name="dungTichNho" value="{{ $nuocHoa->dungTichNho }}" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="giaTienNho">Giá tiền nhỏ</label>
            <input type="number" class="form-control" id="giaTienNho" name="giaTienNho" value="{{ $nuocHoa->giaTienNho }}" step="0.01">
        </div>
        
        <div class="form-group mb-3">
            <label for="doLuuHuong">Độ lưu hương</label>
            <input type="text" class="form-control" id="doLuuHuong" name="doLuuHuong" value="{{ $nuocHoa->doLuuHuong }}" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="doToaHuong">Độ tỏa hương</label>
            <input type="text" class="form-control" id="doToaHuong" name="doToaHuong" value="{{ $nuocHoa->doToaHuong }}" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="so_luong">Số lượng</label>
            <input type="number" class="form-control" id="so_luong" name="so_luong" value="{{ $nuocHoa->so_luong }}" min="0" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="image">Ảnh sản phẩm</label>
            @if($nuocHoa->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $nuocHoa->image) }}" alt="Ảnh sản phẩm" width="150">
                </div>
            @endif
            <input type="file" class="form-control" id="image" name="image">
        </div>
        
        <div class="form-group mb-3">
            <label for="tinh_trang">Tình trạng</label>
            <select class="form-control" id="tinh_trang" name="tinh_trang">
                <option value="1" {{ $nuocHoa->tinh_trang == 1 ? 'selected' : '' }}>Còn hàng</option>
                <option value="0" {{ $nuocHoa->tinh_trang == 0 ? 'selected' : '' }}>Hết hàng</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
        <a href="{{ route('admin.table-data-product') }}" class="btn btn-secondary">Quay lại</a>
    </form>
</div>
</div>  
    </main>
   <!-- Essential javascripts for application to work-->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="js/plugins/pace.min.js"></script>
  </body>
</html>