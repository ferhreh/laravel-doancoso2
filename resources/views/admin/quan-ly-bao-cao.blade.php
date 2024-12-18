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

</head>
<style>
    #revenueChart {
    width: 100%;
    height: 300px;
}
</style>
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
  <main class="app-content">
    <div class="row">
      <div class="col-md-12">
        <div class="app-title">
          <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="#"><b>Báo cáo doanh thu</b></a></li>
          </ul>
          <div id="clock"></div>
        </div>
      </div>
    </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="widget-small info coloured-icon"><i class='icon bx bxs-purchase-tag-alt fa-3x' ></i>
                    <div class="info">
                        <h4>Tổng sản phẩm</h4>
                        <p><b>{{ $tongSanPham }}</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="widget-small warning coloured-icon"><i class='icon fa-3x bx bxs-shopping-bag-alt'></i>
                    <div class="info">
                        <h4>Tổng đơn hàng</h4>
                        <p><b>{{$tongDonHang}}</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="widget-small primary coloured-icon"><i class='icon fa-3x bx bxs-chart' ></i>
                    <div class="info">
                        <h4>Tổng thu nhập</h4>
                        <p><b>{{ number_format($tongDoanhThu) }} ₫</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="widget-small warning coloured-icon"><i class='icon fa-3x bx bxs-tag-x' ></i>
                    <div class="info">
                        <h4>Hết hàng</h4>
                        <p><b>{{ $sapHetHang}}</b></p>
                    </div>
                </div>
            </div>
        </div>  
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div>
                        <h3 class="tile-title">SẢN PHẨM BÁN CHẠY</h3>
                    </div>
                    <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Giá tiền</th>
                                    <th>Tình trạng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($hotProducts as $product)
                                <tr>
                                    <td>{{$product->order_id}}</td>
                                    <td>{{ $product->tenDonHang }}</td>
                                    <td><img width="100" src="http://127.0.0.1:8000/assets/images/anhnuochoa/all/{{$product->image}}" alt=""></td>
                                    <td>{{ number_format($product->giaTienLon, 0, ',', '.') }} ₫</td>
                                    <td>
                                        @if($product->tinh_trang == 1)
                                            Còn hàng
                                        @else
                                            Hết hàng
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div>
                        <h3 class="tile-title">SẢN PHẨM ĐÃ HẾT</h3>
                    </div> 
                </div>
            </div>
        </div>
        <div class="row">
           <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">TỔNG DOANH THU</h3>
                    <div>
                        <label for="filter">Xem doanh thu theo:</label>
                        <select id="filter" class="form-control">
                            <option value="day">Ngày</option>
                            <option value="month">Tháng</option>
                            <option value="year">Năm</option>
                        </select>
                    </div>
                    <canvas id="revenueChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="http://127.0.0.1:8000/assets/js/jquery-3.2.1.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/popper.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/bootstrap.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="http://127.0.0.1:8000/assets/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->

    <!-- Google analytics script-->
    <script type="text/javascript">
        if (document.location.hostname == 'pratikborsadiya.in') {
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-72504830-1', 'auto');
            ga('send', 'pageview');
        }
    </script>
<script> 
document.addEventListener("DOMContentLoaded", function () {
    const ctx = document.getElementById("revenueChart").getContext("2d");
    let chart;
    // Hàm lấy dữ liệu từ API
    async function fetchRevenueData(filter) {
        const response = await fetch(`/admin/revenue?filter=${filter}`);
        const data = await response.json();
        return data;
    }
    // Hàm render biểu đồ
    function renderChart(revenueData, costData, profitData, labels) {
        if (chart) {
            chart.destroy(); // Xóa biểu đồ cũ nếu có
        }
        chart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: labels, // Gán thời gian làm nhãn (trục x)
                datasets: [
                    {
                        label: "Doanh thu (VNĐ)",
                        data: revenueData, // Giá trị doanh thu
                        backgroundColor: "rgba(75, 192, 192, 0.5)", // Màu nền
                        borderColor: "rgba(75, 192, 192, 1)", // Màu viền
                        borderWidth: 1,
                    },
                    {
                        label: "Chi phí (VNĐ)",
                        data: costData, // Giá trị chi phí
                        backgroundColor: "rgba(255, 159, 64, 0.5)",
                        borderColor: "rgba(255, 159, 64, 1)",
                        borderWidth: 1,
                    },
                    {
                        label: "Lợi nhuận (VNĐ)",
                        data: profitData, // Giá trị lợi nhuận
                        backgroundColor: "rgba(54, 162, 235, 0.5)",
                        borderColor: "rgba(54, 162, 235, 1)",
                        borderWidth: 1,
                    },
                ],
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: "Thời gian",
                        },
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: "VNĐ",
                        },
                    },
                },
            },
        });
    }

    // Xử lý khi thay đổi bộ lọc
    async function updateChart(filter) {
        const revenueData = await fetchRevenueData(filter);
        const labels = revenueData.map((item) => item.time_group);
        const revenues = revenueData.map((item) => parseFloat(item.total_revenue)); // Doanh thu
        const costs = revenueData.map((item) => parseFloat(item.total_cost)); // Chi phí
        const profits = revenueData.map((item) => parseFloat(item.total_profit)); // Lợi nhuận
        renderChart(revenues, costs, profits, labels);
    }

    document.getElementById("filter").addEventListener("change", function () {
        const selectedFilter = this.value;
        updateChart(selectedFilter);
    });

    updateChart("day"); // Hiển thị dữ liệu mặc định theo ngày
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