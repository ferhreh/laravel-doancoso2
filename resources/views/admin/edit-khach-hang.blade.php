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
      <!-- <li><a class="app-menu__item haha" href="phan-mem-ban-hang.html"><i class='app-menu__icon bx bx-cart-alt'></i>
          <span class="app-menu__label">POS Bán Hàng</span></a></li> -->
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
  <div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Chỉnh sửa thông tin khách hàng</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.update-khach-hang', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Họ và tên -->
                <div class="mb-3">
                    <label for="name" class="form-label">Họ và tên</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" 
                           class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Số điện thoại -->
                <div class="mb-3">
                    <label for="phoneNumber" class="form-label">Số điện thoại</label>
                    <input type="text" name="phoneNumber" id="phoneNumber" 
                           value="{{ old('phoneNumber', $user->phoneNumber) }}" 
                           class="form-control @error('phoneNumber') is-invalid @enderror">
                    @error('phoneNumber')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Tình trạng -->
                <div class="mb-3">
                    <label for="tinh_trang" class="form-label">Tình trạng</label>
                    <select name="tinh_trang" id="tinh_trang" 
                            class="form-select @error('tinh_trang') is-invalid @enderror">
                        <option value="1" {{ old('tinh_trang', $user->tinh_trang) == 1 ? 'selected' : '' }}>Hoạt động</option>
                        <option value="0" {{ old('tinh_trang', $user->tinh_trang) == 0 ? 'selected' : '' }}>Vô hiệu hóa</option>
                    </select>
                    @error('tinh_trang')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Vai trò -->
                <div class="mb-3">
                    <label for="role" class="form-label">Vai trò</label>
                    <select name="role" id="role" 
                            class="form-select @error('role') is-invalid @enderror">
                        <option value="0" {{ old('role', $user->role) == 0 ? 'selected' : '' }}>Khách hàng</option>
                        <option value="1" {{ old('role', $user->role) == 1 ? 'selected' : '' }}>Quản trị viên</option>
                    </select>
                    @error('role')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Ngày sinh -->
                <div class="mb-3">
                    <label for="birthDay" class="form-label">Ngày sinh</label>
                    <input type="date" name="birthDay" id="birthDay" 
                           value="{{ old('birthDay', $user->birthDay) }}" 
                           class="form-control @error('birthDay') is-invalid @enderror">
                    @error('birthDay')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Nút Lưu -->
                <div class="text-end">
                    <button type="submit" class="btn btn-success">Lưu thay đổi</button>
                    <a href="{{ route('admin.quan-ly-khach-hang') }}" class="btn btn-secondary">Hủy</a>
                </div>
            </form>
        </div>
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