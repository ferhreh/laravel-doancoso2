<!DOCTYPE html>
<html lang="en">

<head>
  <title>Danh sách nhân viên | Quản trị Admin</title>
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
  <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Essential javascripts for application to work-->
      <script src="http://127.0.0.1:8000/assets/js/jquery-3.2.1.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/popper.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/bootstrap.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="http://127.0.0.1:8000/assets/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="http://127.0.0.1:8000/assets/js/plugins/moment.min.js"></script>
    <script type="text/javascript" src="http://127.0.0.1:8000/assets/js/plugins/jquery-ui.custom.min.js"></script>
    <script type="text/javascript" src="http://127.0.0.1:8000/assets/js/plugins/fullcalendar.min.js"></script>
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
      <li><a class="app-menu__item " href="{{route('admin.index')}}"><i class='app-menu__icon bx bx-tachometer'></i><span
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
      <li><a class="app-menu__item active" href="{{route('admin.page-calendar')}}"><i class='app-menu__icon bx bx-calendar-check'></i><span
            class="app-menu__label">Lịch công tác </span></a></li>
      <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-cog'></i><span class="app-menu__label">Cài
            đặt hệ thống</span></a></li>
    </ul>
  </aside>
  <main class="app-content">
    <div class="row">
      <div class="col-md-12">
        <div class="app-title">
          <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="#"><b>Lịch công tác</b></a></li>
          </ul>
          <div id="clock"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
          <div class="row">
            <div class="col-md-3">
              <div id="external-events">
                <h4 class="mb-4">Kéo sự kiện thả vào</h4>
                <div class="fc-event"><b>Họp công ty</b></div>
                <div class="fc-event"><b>Họp báo</b></div>
                <div class="fc-event"><b>Mừng sinh nhật</b></div>
                <div class="fc-event"><b>Nghĩ lễ</b></div>
                <div class="fc-event"><b>Đi công tác</b></div>
                <div class="fc-event"><b>Gặp khách hàng</b></div>
                <div class="fc-event"><b>Tổ chức du lịch</b></div>
                <p class="animated-checkbox mt-20">
                  <label>
                    <input id="drop-remove" type="checkbox"><span class="label-text">Hủy bỏ sau khi thả</span>
                  </label>
                </p>
              </div>
            </div>
            <div class="col-md-9">
              <div id="calendar"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </main>
    <script>
    $(document).ready(function () {
    // Cấu hình AJAX
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
    });
    // Xử lý kéo/thả sự kiện
    $('#external-events .fc-event').each(function () {
        $(this).data('event', {
            title: $.trim($(this).text()), // Lấy nội dung làm tiêu đề sự kiện
            stick: true, // Sự kiện sẽ giữ nguyên trên lịch
        });

        // Cho phép sự kiện được kéo thả
        $(this).draggable({
            zIndex: 999,
            revert: true, // Quay lại vị trí ban đầu nếu không được thả
            revertDuration: 0, // Thời gian quay lại
        });
    });
    
    // Cấu hình FullCalendar
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay',
        },
        editable: true, // Cho phép chỉnh sửa sự kiện
        droppable: true, // Kích hoạt tính năng kéo/thả
        events: '/events', // Lấy danh sách sự kiện từ API
        eventReceive: function (event) {
            // Xử lý khi sự kiện được kéo từ danh sách vào lịch
            $.ajax({
                url: '/events',
                method: 'POST',
                data: {
                    title: event.title,
                    start_date: event.start.format(),
                },
                success: function () {
                    alert('Sự kiện đã được lưu!');
                },
                error: function (xhr) {
                    alert('Lỗi khi lưu sự kiện: ' + xhr.responseJSON.message);
                },
            });
        },
    });
});

</script>

    <script type="text/javascript">
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