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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<style>
        .review-card {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }
        .review-card:last-child {
            border: none;
        }
        .review-header {
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .stars {
            color: orange;
        }
        .comment {
            margin: 5px 0;
        }
        .mt-4 {
          overflow-y: auto; /* Hiển thị thanh cuộn nếu vượt quá chiều cao */
          border: 1px solid #ddd; /* Viền để nhìn rõ vùng đánh giá */
          padding: 10px; /* Khoảng cách bên trong */
          background-color: #fff; /* Màu nền */
          border-radius: 8px; /* Bo góc */
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Đổ bóng */
          max-height: 450px; /* Giới hạn chiều cao tối đa */  
        }
        .review-item {
            margin-bottom: 15px; /* Khoảng cách giữa các đánh giá */
            padding-bottom: 10px;
            border-bottom: 1px solid #eee; /* Đường ngăn cách giữa các đánh giá */
        }
        
        .review-item:last-child {
            border-bottom: none; /* Loại bỏ đường ngăn cách cuối cùng */
        }
        
        .rating span {
            font-size: 18px; /* Kích thước sao */
            margin-right: 2px;
        }
        .col-md-6{
          max-width: 10100%;
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
      <li><a class="app-nav__item" href="/index.html"><i class='bx bx-log-out bx-rotate-180'></i> </a>

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
      <li><a class="app-menu__item" href="{{route('admin.quan-ly-khach-hang')}}"><i class='app-menu__icon bx bx-user-voice'></i><span
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
          <p>Bảng điều khiển</p>
          <div id="clock"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <!--Left-->
      <div class="col-md-12 col-lg-6">
        <div class="row">
       <!-- col-6 -->
       <div class="col-md-6">
        <div class="widget-small primary coloured-icon"><i class='icon bx bxs-user-account fa-3x'></i>
          <div class="info">
            <h4>Tổng khách hàng</h4>
            <p><b>{{ $tongKhachHang }}</b></p>
            <p class="info-tong">Tổng số khách hàng được quản lý.</p>
          </div>
        </div>
      </div>
       <!-- col-6 -->
          <div class="col-md-6">
            <div class="widget-small info coloured-icon"><i class='icon bx bxs-data fa-3x'></i>
              <div class="info">
                <h4>Tổng sản phẩm</h4>
                <p><b>{{ $tongSanPham }}</b></p>
                <p class="info-tong">Tổng số sản phẩm được quản lý.</p>
              </div>
            </div>
          </div>
           <!-- col-6 -->
          <div class="col-md-6">
            <div class="widget-small warning coloured-icon"><i class='icon bx bxs-shopping-bags fa-3x'></i>
              <div class="info">
                <h4>Tổng đơn hàng</h4>
                <p><b>{{ $tongDonHang }}</b></p>
                <p class="info-tong">Tổng số hóa đơn bán hàng trong tháng.</p>
              </div>
            </div>
          </div>
           <!-- col-6 -->
          <div class="col-md-6">
            <div class="widget-small danger coloured-icon"><i class='icon bx bxs-error-alt fa-3x'></i>
              <div class="info">
                <h4>Sắp hết hàng</h4>
                <p><b>{{ $sapHetHang }}</b></p>
                <p class="info-tong">Số sản phẩm cảnh báo hết cần nhập thêm.</p>
              </div>
            </div>
          </div>
           <!-- col-12 -->
           <div class="col-md-12">
            <div class="tile">
              <h3 class="tile-title">Đánh giá từ khách hàng</h3>
              <div class="container mt-4">
               <div class="reviews">
                    @foreach ($reviews as $review)
                   <div class="review-card">
                       <div class="review-header">
                           <span>{{ $review->product_name }}</span>
                           <small>{{ $review->created_at->format('h:i A') }}</small>
                       </div>
                       <div>
                           <small><strong>{{ $review->user_name }}</strong>: {{ $review->comment }}</small>
                       </div>
                       <div class="stars">
                            @for ($i = 1; $i <= 5; $i++)
                                <span class="fa fa-star{{ $i <= $review->rating ? '' : '-o' }}"></span>
                           @endfor
                        </div>
                   </div>
                   @endforeach
               </div>
           </div>
              <!-- / div trống-->
            </div>
           </div>
            <!-- / col-12 -->
             <!-- col-12 -->
            <div class="col-md-12">
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Phân bố doanh mục sản phẩm</h3>
                    <canvas id="productDistributionChart"></canvas>
                </div>
            </div>
            </div>
             <!-- / col-12 -->
        </div>
      </div>
      <!--END left-->
      <!--Right-->
      <div class="col-md-12 col-lg-6">
        <div class="row">
          <div class="col-md-12">
            <div class="tile">
              <h3 class="tile-title">Dữ liệu 6 tháng đầu vào</h3>
              <div class="embed-responsive embed-responsive-16by9">
                <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="tile">
              <h3 class="tile-title">Thống kê 6 tháng doanh thu</h3>
              <div class="embed-responsive embed-responsive-16by9">
                <canvas class="embed-responsive-item" id="barChartDemo"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="http://127.0.0.1:8000/assets/js/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="http://127.0.0.1:8000/assets/js/popper.min.js"></script>
  <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
  <!--===============================================================================================-->
  <script src="http://127.0.0.1:8000/assets/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="http://127.0.0.1:8000/assets/js/main.js"></script>
  <!--===============================================================================================-->
  <script src="http://127.0.0.1:8000/assets/js/plugins/pace.min.js"></script>
  <!--===============================================================================================-->
  <script type="text/javascript" src="http://127.0.0.1:8000/assets/js/plugins/chart.js"></script>
  <!--===============================================================================================-->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Dữ liệu mẫu (dữ liệu này cần lấy từ Backend Laravel)
    fetch('/chart-data')
    .then(response => response.json())
    .then(data => {
        const labels = data.labels;
        const inputData = data.inputData;
        const revenueData = data.revenueData;

        // Cập nhật biểu đồ Line (Dữ liệu đầu vào)
        const ctx1 = document.getElementById("lineChartDemo").getContext("2d");
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: labels,
                datasets: [{
                    label: "Số lượng đầu vào (sp)",
                    data: inputData,
                    borderColor: "rgba(75, 192, 192, 1)",
                    backgroundColor: "rgba(75, 192, 192, 0.2)",
                    tension: 0.4,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: true, position: "top" },
                },
                scales: {
                    x: { title: { display: true, text: "Tháng" } },
                    y: { title: { display: true, text: "Số lượng sản phẩm" } }
                }
            }
        });

        // Cập nhật biểu đồ Bar (Doanh thu)
        const ctx2 = document.getElementById("barChartDemo").getContext("2d");
        new Chart(ctx2, {
            type: "bar",
            data: {
                labels: labels,
                datasets: [{
                    label: "Doanh thu (VND)",
                    data: revenueData,
                    backgroundColor: "rgba(54, 162, 235, 0.5)",
                    borderColor: "rgba(54, 162, 235, 1)",
                    borderWidth: 1,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: true, position: "top" },
                },
                scales: {
                    x: { title: { display: true, text: "Tháng" } },
                    y: {
                        title: { display: true, text: "Doanh thu (VND)" },
                        ticks: {
                            callback: function(value) {
                                return value.toLocaleString("vi-VN");
                            }
                        }
                    }
                }
            }
        });
    });
</script>
<script>
    // Lấy dữ liệu từ backend
    const data = @json($phongboSanPham);
    
    // Chuẩn bị labels và dữ liệu cho biểu đồ
    const labels = data.map(item => item.gioiTinh);
    const counts = data.map(item => item.count);

    // Vẽ biểu đồ
    const ctx = document.getElementById('productDistributionChart').getContext('2d');
    new Chart(ctx, {
        type: 'pie', // Dạng biểu đồ (pie = tròn)
        data: {
            labels: labels,
            datasets: [{
                label: 'Số lượng sản phẩm',
                data: counts,
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'], // Màu sắc cho các mục
                hoverOffset: 4
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return `${tooltipItem.label}: ${tooltipItem.raw}`;
                        }
                    }
                }
            }
        }
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