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
      <form action="{{ route('logout') }}" method="POST" class="form-logout">
      @csrf
      <button><li><a class="app-nav__item" href=""><i class='bx bx-log-out bx-rotate-180'></i> </a>
      </li></button>
      </form>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="http://127.0.0.1:8000/assets/images/logo/download.jpg" width="50px"
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
  <div>
  <main class="app-content">
  <div class="container">
    <h1>Sửa Đơn Hàng</h1>
    <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="tenKhachHang" class="form-label">Tên khách hàng</label>
            <input type="text" name="tenKhachHang" class="form-control" value="{{ $order->tenKhachHang }}" required>
        </div>
        <div class="mb-3">
            <label for="tenDonHang" class="form-label">Tên đơn hàng</label>
            <input type="text" name="tenDonHang" class="form-control" value="{{ $order->tenDonHang }}" required>
        </div>
        <div class="mb-3">
            <label for="hinhThucMua" class="form-label">Hình thức mua</label>
            <input type="text" name="hinhThucMua" class="form-control" value="{{ $order->hinhThucMua }}" required>
        </div>
        <div class="mb-3">
            <label for="trangThai" class="form-label">Trạng thái</label>
            <select name="trangThai" class="form-select">
                <option value="1" {{ $order->trangThai == 1 ? 'selected' : '' }}>Đang xử lý</option>
                <option value="2" {{ $order->trangThai == 2 ? 'selected' : '' }}>Đã xác nhận</option>
                <option value="3" {{ $order->trangThai == 3 ? 'selected' : '' }}>Đã hủy</option>
                <option value="4" {{ $order->trangThai == 4 ? 'selected' : '' }}>Đang giao hàng</option>
                <option value="5" {{ $order->trangThai == 5 ? 'selected' : '' }}>Đã hoàn thành</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="soLuong" class="form-label">Số lượng</label>
            <input type="number" name="soLuong" class="form-control" value="{{ $order->soLuong }}" required>
        </div>
        <div class="mb-3">
            <label for="ghiChu" class="form-label">Ghi chú</label>
            <textarea name="ghiChu" class="form-control">{{ $order->ghiChu }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('admin.table-data-oder') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="http://127.0.0.1:8000/assets/js/jquery-3.2.1.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/popper.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="src/jquery.table2excel.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="http://127.0.0.1:8000/assets/js/plugins/pace.min.js"></script>
  <!-- Page specific javascripts-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
  <!-- Data table plugin-->
  <script type="text/javascript" src="http://127.0.0.1:8000/assets/js/plugins/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="http://127.0.0.1:8000/assets/js/plugins/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript">$('#sampleTable').DataTable();</script>
  <script>
    //Thời Gian
    function time() {
      var today = new Date();
      var weekday = new Array(7);
      weekday[0] = "Chủ Nhật";
      weekday[1] = "Thứ Hai";
      weekday[2] = "Thứ Ba";
      weekday[3] = "Thứ Tư";
      weekday[4] = "Thứ Năm";
      weekday[5] = "Thứ Sáu";
      weekday[6] = "Thứ Bảy";
      var day = weekday[today.getDay()];
      var dd = today.getDate();
      var mm = today.getMonth() + 1;
      var yyyy = today.getFullYear();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      nowTime = h + " giờ " + m + " phút " + s + " giây";
      if (dd < 10) {
        dd = '0' + dd
      }
      if (mm < 10) {
        mm = '0' + mm
      }
      today = day + ', ' + dd + '/' + mm + '/' + yyyy;
      tmp = '<span class="date"> ' + today + ' - ' + nowTime +
        '</span>';
      document.getElementById("clock").innerHTML = tmp;
      clocktime = setTimeout("time()", "1000", "Javascript");

      function checkTime(i) {
        if (i < 10) {
          i = "0" + i;
        }
        return i;
      }
    }

  </script>
</body>

</html>