<!DOCTYPE html>
<html lang="en">

<head>
  <title>Thêm sản phẩm | Quản trị Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/css/css_admin/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <link rel="stylesheet" type="text/css"
    href="http://127.0.0.1:8000/assets/font/font-awesome.min.css">
  <script type="text/javascript" src="http://127.0.0.1:8000/assets/js/ckeditor.js"></script>
  <script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>
  <script>

    function readURL(input, thumbimage) {
      if (input.files && input.files[0]) { //Sử dụng  cho Firefox - chrome
        var reader = new FileReader();
        reader.onload = function (e) {
          $("#thumbimage").attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
      else { // Sử dụng cho IE
        $("#thumbimage").attr('src', input.value);

      }
      $("#thumbimage").show();
      $('.filename').text($("#uploadfile").val());
      $('.Choicefile').css('background', '#14142B');
      $('.Choicefile').css('cursor', 'default');
      $(".removeimg").show();
      $(".Choicefile").unbind('click');

    }
    $(document).ready(function () {
      $(".Choicefile").bind('click', function () {
        $("#uploadfile").click();

      });
      $(".removeimg").click(function () {
        $("#thumbimage").attr('src', '').hide();
        $("#myfileupload").html('<input type="file" id="uploadfile"  onchange="readURL(this);" />');
        $(".removeimg").hide();
        $(".Choicefile").bind('click', function () {
          $("#uploadfile").click();
        });
        $('.Choicefile').css('background', '#14142B');
        $('.Choicefile').css('cursor', 'pointer');
        $(".filename").text("");
      });
    })
  </script>
</head>

<body class="app sidebar-mini rtl">
  <style>
    .Choicefile {
      display: block;
      background: #14142B;
      border: 1px solid #fff;
      color: #fff;
      width: 150px;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      padding: 5px 0px;
      border-radius: 5px;
      font-weight: 500;
      align-items: center;
      justify-content: center;
    }

    .Choicefile:hover {
      text-decoration: none;
      color: white;
    }

    #uploadfile,
    .removeimg {
      display: none;
    }

    #thumbbox {
      position: relative;
      width: 100%;
      margin-bottom: 20px;
    }

    .removeimg {
      height: 25px;
      position: absolute;
      background-repeat: no-repeat;
      top: 5px;
      left: 5px;
      background-size: 25px;
      width: 25px;
      /* border: 3px solid red; */
      border-radius: 50%;

    }

    .removeimg::before {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      content: '';
      border: 1px solid red;
      background: red;
      text-align: center;
      display: block;
      margin-top: 11px;
      transform: rotate(45deg);
    }

    .removeimg::after {
      /* color: #FFF; */
      /* background-color: #DC403B; */
      content: '';
      background: red;
      border: 1px solid red;
      text-align: center;
      display: block;
      transform: rotate(-45deg);
      margin-top: -2px;
    }
    .container {
    max-width: 800px;
    margin: auto;
}

.card {
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 20px;
}

  </style>
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
    <div class="card">
        <div class="card-header">
            <h3>Thêm sản phẩm mới</h3>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('admin.add-san-pham') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên sản phẩm" required>
                </div>
                <div class="form-group">
                    <label for="thuongHieu">Thương hiệu</label>
                    <input type="text" class="form-control" id="thuongHieu" name="thuongHieu" placeholder="Nhập thương hiệu" required>
                </div>
                <div class="form-group">
                   <label for="moTa">Mô tả</label>
                   <textarea class="form-control" id="moTa" name="moTa" rows="4" placeholder="Nhập mô tả sản phẩm" required></textarea>
                </div>
                <div class="form-group">
                    <label for="gioiTinh">Giới tính</label>
                    <select class="form-control" id="gioiTinh" name="gioiTinh" required>
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                        <option value="Unisex">Unisex</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nongDo">Nồng độ</label>
                    <input type="text" class="form-control" id="nongDo" name="nongDo" placeholder="Nhập nồng độ" required>
                </div>
                <div class="form-group">
                    <label for="dungTich">Dung tích</label>
                    <input type="text" class="form-control" id="dungTich" name="dungTich" placeholder="Nhập dung tích" required>
                </div>
                <div class="form-group">
                    <label for="doLuuHuong">Độ lưu hương</label>
                    <input type="text" class="form-control" id="doLuuHuong" name="doLuuHuong" placeholder="Nhập độ lưu hương" required>
                </div>
                <div class="form-group">
                    <label for="doToaHuong">Độ toả hương</label>
                    <input type="text" class="form-control" id="doToaHuong" name="doToaHuong" placeholder="Nhập độ toả hương" required>
                </div>
                <div class="form-group">
                    <label for="giaTienNho">Giá tiền (nhỏ)</label>
                    <input type="number" class="form-control" id="giaTienNho" name="giaTienNho" placeholder="Nhập giá tiền nhỏ" required>
                </div>
                <div class="form-group">
                    <label for="dungTichNho">Dung tích (nhỏ)</label>
                    <input type="text" class="form-control" id="dungTichNho" name="dungTichNho" placeholder="Nhập dung tích nhỏ" required>
                </div>
                <div class="form-group">
                    <label for="so_luong">Số lượng</label>
                    <input type="number" class="form-control" id="so_luong" name="so_luong" placeholder="Nhập số lượng" required>
                </div>
                <div class="form-group">
                    <label for="giaTienLon">Giá tiền</label>
                    <input type="number" class="form-control" id="giaTienLon" name="giaTienLon" placeholder="Nhập giá tiền" required>
                </div>
                <div class="form-group">
                    <label for="giaTienLon">Giá Vốn</label>
                    <input type="number" class="form-control" id="giaTienLon" name="giaVon" placeholder="Nhập giá vốn" required>
                </div>
                <div class="form-group">
                    <label for="giaTienLon">Giá Vốn nhỏ</label>
                    <input type="number" class="form-control" id="giaTienLon" name="giaVonNho" placeholder="Nhập giá vốn nhỏ" required>
                </div>
                <div class="form-group">
                    <label for="image">Hình ảnh</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>
                <div class="form-group">
                    <label for="tinh_trang">Tình trạng</label>
                    <select class="form-control" id="tinh_trang" name="tinh_trang">
                        <option value="1" selected>Còn hàng</option>
                        <option value="0">Hết hàng</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
                <a href="{{ route('admin.table-data-product') }}" class="btn btn-secondary">Quay lại</a>
            </form>
        </div>
    </div>
</div>
  <script src="http://127.0.0.1:8000/assets/js/jquery-3.2.1.min.js"></script>
  <script src="http://127.0.0.1:8000/assets/js/popper.min.js"></script>
  <script src="http://127.0.0.1:8000/assets/js/bootstrap.min.js"></script>
  <script src="http://127.0.0.1:8000/assets/js/main.js"></script>
  <script src="http://127.0.0.1:8000/assets/js/plugins/pace.min.js"></script>
</body>
</html>