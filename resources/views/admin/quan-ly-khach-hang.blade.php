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
<style>
    /* Basic container padding */
.container {
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Table styling */
table {
    width: 100%;
    border-collapse: collapse;
}

table th, table td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    text-align: left;
    vertical-align: middle;
}
.toolbar-quanLy{
    display: flex;
    justify-content:  start !important;
    gap: 1rem;
}
/* Header styling */
h2 {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 20px;
}

/* Styling for action buttons */
table td a,
table td button {
    color: #555;
    font-size: 16px;
    margin-right: 8px;
}

table td button {
    background: none;
    border: none;
    cursor: pointer;
}

/* Dropdown and input spacing */
form select, form input {
    max-width: 150px;
}
   .d-flex{
        align-items: center;
        gap: 4rem;
    }
    .perPage>.form-select{
        width: 3rem;
        height: 2rem;
    }
    .search{
        width: 20rem;
        position: relative;
        display: flex;
        align-items: center;
    }
    .search>input{
        max-width: 20rem;
        border-radius: 0%;
    }
    .search >button{
        position: fixed;
        right: 11rem;
        height: 2.8rem;
        margin: 0;
        border-radius: 0%;
    }
    .btn-primary{
        border-radius: 0%;
        height: 2.8rem;
        margin: 0;
        display: flex;
        align-items: center;
    }
/* Responsive adjustments */
@media (max-width: 768px) {
    /* Stack filter and search form vertically on small screens */
    .d-flex {
        flex-direction: column;
        align-items: stretch;
    }

    .form-select, .form-control, .btn {
        width: 100%;
        margin-bottom: 10px;
    }

    table {
        font-size: 14px;
    }

    table th, table td {
        padding: 8px;
    }

    /* Adjust container padding */
    .container {
        padding: 15px;
    }
}

@media (max-width: 576px) {
    /* Hide non-essential columns on extra small screens */
    table th:nth-child(3),
    table td:nth-child(3), /* Email */
    table th:nth-child(4),
    table td:nth-child(4), /* Phone */
    table th:nth-child(6),
    table td:nth-child(6)  /* Actions */
    {
        display: none;
    }

    /* Reduce font size */
    table th, table td {
        font-size: 12px;
        padding: 5px;
    }

    /* Reduce button spacing */
    table td a, table td button {
        font-size: 14px;
    }
}

</style>

<body class="app sidebar-mini rtl">
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
    <div class="container">
    <h2>Quản lý tài khoản</h2>
<div>
    <div class="toolbar-quanLy justify-content-between align-items-center mb-3">
        <!-- Left: Search and Filters -->
        <form action="{{ route('admin.quan-ly-khach-hang') }}" id="filterForm" method="GET" class="d-flex">
            <!-- Limit per page dropdown -->
            <div class="perPage">
            <label for="perPage" class="me-2">Hiển thị:</label>
            <select name="perPage" id="perPage" class="form-select me-3">
                <option value="10" {{ request('perPage') == 10 ? 'selected' : '' }}>10</option>
                <option value="25" {{ request('perPage') == 25 ? 'selected' : '' }}>25</option>
                <option value="50" {{ request('perPage') == 50 ? 'selected' : '' }}>50</option>
            </select>
            </div>

            <!-- User Type dropdown -->
            <select name="role" class="form-select me-3" style="height: 2rem;">
                <option value="">Tất cả người dùng</option>
                <option value="0" {{ request('role') == '0' ? 'selected' : '' }}>Khách hàng</option>
                <option value="1" {{ request('role') == '1' ? 'selected' : '' }}>Quản trị viên</option>
            </select>

            <!-- Search bar -->
            <div class="search">
                <input type="text" name="search" placeholder="Tìm kiếm..." value="{{ request('search') }}" class="form-control me-3">
            </div>
        </form>
    </div>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Loại tài khoản</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                 @foreach($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phoneNumber }}</td>
                    <td>{{ $user->role == 1 ? 'Quản trị viên' : 'Khách hàng' }}</td>
                    <td>
                        <a href="">👁️</a>
                        <a href="{{route('admin.edit-khach-hang',['id' => $user->id])}}">✏️</a>
                        <form action="{{ route('admin.destroy-khach-hang', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" 
                                    onclick="return confirm('Bạn có chắc chắn muốn xóa khách hàng này?')">
                                🗑️
                            </button>
                        </form>   
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
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
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        const filterForm = document.getElementById('filterForm');
        
        // Dropdown role
        const roleDropdown = document.querySelector('select[name="role"]');
        roleDropdown.addEventListener('change', function () {
            filterForm.submit();
        });

        // Dropdown perPage
        const perPageDropdown = document.querySelector('select[name="perPage"]');
        perPageDropdown.addEventListener('change', function () {
            filterForm.submit();
        });

        // Search input
        const searchInput = document.querySelector('input[name="search"]');
        let typingTimer;
        searchInput.addEventListener('input', function () {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(() => {
                filterForm.submit();
            }, 1000);
        });
    });
</script>
  </body>
</html>