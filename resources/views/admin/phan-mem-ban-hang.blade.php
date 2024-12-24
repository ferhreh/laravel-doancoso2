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
</head>
<style>
  /* #orderForm{
    width: ;
  } */
   .tile>.row{
    flex-wrap: wrap;
   }
   .col-md-4{
    max-width: 450px;
   }
  .row{
    display: flex;
  }
  #searchResultList{
    width: 200px;
    top: 150px;
    left: 20px;
  }
  #search-results{
    display: flex;
    flex-wrap: wrap;
  }
  .product{
    border: 1px solid;
    border-top: none;
    padding: 10px;
  }
  .product> span{
   display: flex;
   justify-content: center;
   align-items: center;
  }
  .product> span >img{
    width: 100px;
    height: 100px;
  }
  .product {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    border: 2px solid #ddd;
    border-radius: 10px;
    padding: 15px;
    margin: 10px;
    background-color: #f9f9f9;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    width: 200px;
}

.product:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
}

.product span {
    font-size: 14px;
    color: #333;
    margin: 8px 0;
    text-align: center;
}

.product img {
    max-width: 100%;
    border-radius: 8px;
    transition: transform 0.3s ease;
}

.product img:hover {
    transform: scale(1.05);
}

.product button {
    padding: 10px 15px;
    background-color: #007bff;
    color: white;
    font-size: 14px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.product button:hover {
    background-color: #0056b3;
}
/* Định dạng bảng */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    font-family: Arial, sans-serif;
}

/* Định dạng tiêu đề bảng */
table th {
    background-color: #f4f4f4;
    color: #333;
    font-weight: bold;
    padding: 10px;
    text-align: center; /* Canh giữa nội dung tiêu đề */
    border: 1px solid #ddd;
}

/* Định dạng các ô dữ liệu */
table td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: center; /* Canh giữa nội dung theo chiều ngang */
    vertical-align: middle; /* Canh giữa nội dung theo chiều dọc */
}

/* Hình ảnh trong bảng */
table td img {
    display: block;
    margin: 0 auto; /* Canh giữa hình ảnh */
    max-width: 100%;
    width: 70px;
    height: auto;
    border-radius: 5px; /* Thêm viền bo tròn nếu cần */
}

/* Ô nhập số lượng */
table td input.quantity {
    width: 60px;
    text-align: center; /* Canh giữa số lượng */
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

/* Nút xóa */
table td button.trash {
    background-color: #ff4d4d;
    color: white;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    padding: 5px 10px;
    font-size: 14px;
}

table td button.trash i {
    margin-right: 5px;
}

table td button.trash:hover {
    background-color: #e60000;
}
#change-amount{
  font-size: 20px;
    font-weight: 600;
    color: var(--danger);
}
.alert {
    padding: 15px;
    margin: 20px 0;
    border-radius: 5px;
    font-size: 16px;
}

.alert-success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.alert-success a {
    color: #155724;
    font-weight: bold;
}

</style>
<body onload="time()" class="app sidebar-mini rtl">
  <header class="app-header">
    <ul class="app-nav">
    <form action="{{ route('logout') }}" method="POST" class="form-logout">
      @csrf
      <button><li><a class="app-nav__item" href=""><i class='bx bx-log-out bx-rotate-180'></i> </a>
      </li></button>
      </form>
    </ul>
  </header>
  <main class="app app-ban-hang">
  @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="row">
      <div class="col-md-12">
        <div class="app-title">
          <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="#"><b>POS bán hàng</b></a></li>
          </ul>
          <div id="clock"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="tile">
          <h3 class="tile-title">Phần mềm bán hàng</h3>
          <input type="text" id="myInput"placeholder="Nhập mã sản phẩm hoặc tên sản phẩm để tìm kiếm...">
          <div id="search-results"></div>
        <div class="du--lieu-san-pham">
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th class="so--luong " width="10">MSP</th>
                <th class="so--luong">Tên sản phẩm</th>
                <th class="so--luong">Ảnh</th>
                <th class="so--luong" width="10">Số lượng</th>
                <th class="so--luong">Giá bán</th>
                <th class="so--luong text-center" style="text-align: center; vertical-align: middle;"></th>
              </tr>
            </thead>
            <tbody>
             
            </tbody>
          </table>
        </div>
        <div class="alert">
          <i class="fas fa-exclamation-triangle"></i> Gõ mã hoặc tên sản phẩm vào thanh tìm kiếm để thêm hàng vào đơn hàng
        </div>
        </div>
      </div>
  <form id="orderForm" action="{{ route('order.save') }}" method="POST">
    @csrf
      <div class="col-md-4">
        <div class="tile">
          <h3 class="tile-title">Thông tin thanh toán</h3>
          <div class="row">
            <div class="form-group  col-md-10">
              <label class="control-label">Họ tên khách hàng</label>
              <input id="searchCustomerInput" name="name" class="form-control" type="text" placeholder="Tìm kiếm khách hàng" value="{{ old('name') }}">
            </div>
            <ul id="searchResultList" class="list-group mt-2" style="position: absolute; z-index: 1000; max-height: 200px; overflow-y: auto; display: none;">
               <!-- Kết quả tìm kiếm sẽ được hiển thị tại đây -->
           </ul>
           <input type="hidden" name="khachHangID" id="khachHangID"> 
            <div class="form-group  col-md-2">
              <label style="text-align: center;" class="control-label">Tạo mới</label>
              <button class="btn btn-primary btn-them" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-user-plus"></i>
              </button>
            </div>
            <div class="form-group  col-md-12">
              <label class="control-label">Ghi chú đơn hàng</label>
              <textarea class="form-control" name="ghiChu" rows="4" placeholder="Ghi chú thêm đơn hàng"></textarea>
            </div>
          </div>
          <div class="row"> 
            <div class="form-group  col-md-12">
              <label class="control-label">Hình thức thanh toán</label>
              <select class="form-control" name="hinhThuc" id="exampleSelect2" required>
                <option>Thanh toán chuyển khoản</option>
                <option>Trả tiền mặt tại quầy</option>
              </select>
            </div>
            <div class="form-group col-md-6">
               <label class="control-label">Giảm giá (%): </label>
                <input id="discount" class="form-control" type="number" value="0" onchange="applyDiscount()">
            </div>
            <div class="form-group  col-md-6">
              <label class="control-label">Tổng cộng thanh toán: </label>
              <p class="control-all-money-total">0 ₫</p>
              <input type="hidden" name="tongTien" value="">
            </div>
            <div class="form-group col-md-6">
                <label class="control-label">Khách hàng đưa tiền: </label>
               <input id="customer-money" class="form-control" type="number" value="" onchange="calculateChange()">
            </div>
            <div class="form-group col-md-6">
                <label class="control-label">Tiền thối lại khách: </label>
                <p id="change-amount">0 ₫</p>
            </div>
            <div class="tile-footer col-md-12">
              <button class="btn btn-primary luu-san-pham" onclick="saveOrder()">Lưu đơn hàng</button>
              <button class="btn btn-primary luu-va-in" onclick="saveAndPrint()">Lưu và in hóa đơn</button>
              <a class="btn btn-secondary luu-va-in" href="{{route('admin.table-data-product')}}">Quay về</a>
            </div>
          </div>
        </div>
      </div>
  </form>
      </div>
    </div>
  </main>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
data-backdrop="static" data-keyboard="false">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-body">
      <div class="row">
        <div class="form-group  col-md-12">
          <span class="thong-tin-thanh-toan">
            <h5>Tạo mới khách hàng</h5>
          </span>
        </div>
        <div class="form-group col-md-12">
          <label class="control-label">Họ và tên</label>
          <input class="form-control" name="name" type="text" required>
        </div>
        <div class="form-group col-md-6">
          <label class="control-label">Địa chỉ</label>
          <input class="form-control" name="diaChi" type="text" required>
        </div>
        <div class="form-group col-md-6">
          <label class="control-label">Email</label>
          <input class="form-control" name="email" type="text" required>
        </div>
        <div class="form-group col-md-6">
          <label class="control-label">Ngày sinh</label>
          <input class="form-control" name="ngaySinh" type="date" required>
        </div>
        <div class="form-group col-md-6">
          <label class="control-label">Số điện thoại</label>
          <input class="form-control" name="phoneNumber" type="number" required>
        </div>
      </div>
      <BR>
      <button class="btn btn-save" type="button" id="saveCustomerBtn">Lưu lại</button>
      <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
      <BR>
    </div>
    <div class="modal-footer">
    </div>
  </div>
</div>
</div>


  <script src="http://127.0.0.1:8000/assets/js/jquery-3.2.1.min.js"></script>
  <script src="http://127.0.0.1:8000/assets/js/popper.min.js"></script>
  <script src="http://127.0.0.1:8000/assets/js/bootstrap.min.js"></script>
  <script src="http://127.0.0.1:8000/assets/js/main.js"></script>
  <script src="http://127.0.0.1:8000/assets/js/plugins/pace.min.js"></script>
  <script type="text/javascript" src="http://127.0.0.1:8000/assets/js/plugins/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="http://127.0.0.1:8000/assets/js/plugins/dataTables.bootstrap.min.js"></script>
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
      tmp = '<span class="date"> <i class="bx bxs-calendar" ></i> ' + today + ' | <i class="fa fa-clock-o" aria-hidden="true"></i>  : ' + nowTime +
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
  <!-- banhang -->
   <script>
document.getElementById('myInput').addEventListener('input', function () {
    const query = this.value;
    if (query.length >= 2) {
        fetch(`/admin/search-products?query=${query}`)
            .then(response => response.json())
            .then(data => {
                const results = document.getElementById('search-results');
                results.innerHTML = ''; // Xóa kết quả cũ

                data.forEach(product => {
                    const productRow = `<div class="product" data-id="${product.id}">
                        <span>${product.name}</span>
                        <span><img src="http://127.0.0.1:8000/assets/images/anhnuochoa/all/${product.image}" alt=""></span> 
                        <span>${product.formattedPrice} ₫</span>
                        <button onclick="addToTable(${product.id}, '${product.name}', ${product.giaTienLon},'${product.image}')">Thêm</button>
                    </div>`;
                    results.innerHTML += productRow;
                });
            })
            .catch(error => console.error('Error:', error)); // Xử lý lỗi
    }
});
   </script>
   <script>
    function addToTable(id, name, price,image) {
    const tableBody = document.querySelector('table tbody');
    const newRow = document.createElement('tr');
    newRow.innerHTML = `
        <td>${id}</td>
        <td>${name}</td>
        <td><img src="http://127.0.0.1:8000/assets/images/anhnuochoa/all/${image}" alt="" width="50px;"></td>
        <td><input class="quantity" type="number" value="1" onchange="updatePrice(this, ${price})"></td>
        <td class="price">${formatPriceVND(price)}</td>
        <td style="text-align: center; vertical-align: middle;">
            <button class="btn btn-primary btn-sm trash" onclick="deleteRow(this)" type="button" title="Xóa"><i class="fas fa-trash-alt"></i></button>
        </td>
    `;
    tableBody.appendChild(newRow);
    updateTotal();
}

function deleteRow(button) {
    const row = button.parentElement.parentElement;
    row.remove();
    updateTotal();
}
function formatPriceVND(price) {
    return price.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' }).replace('₫', '') + ' ₫';
}
   </script>
   <script>
function updatePrice(input, unitPrice) {
    const quantity = input.value;
    const priceCell = input.parentElement.nextElementSibling; // Lấy ô giá tiền
    const totalPrice = quantity * unitPrice;
    priceCell.textContent = formatPriceVND(totalPrice); // Định dạng lại giá tiền
    updateTotal(); // Cập nhật tổng tiền
}

// Hàm cập nhật tổng tiền
function updateTotal() {
    const prices = document.querySelectorAll('table tbody .price'); // Lấy tất cả ô giá tiền
    let total = 0;
    prices.forEach(priceCell => {
        // Loại bỏ ký tự " ₫" trước khi chuyển thành số
        const rawPrice = priceCell.textContent.replace(/[^0-9]/g, '');
        total += parseFloat(rawPrice);
    });

    // Hiển thị tổng tiền với định dạng Việt Nam
    const totalElement = document.querySelector('.control-all-money-total');
    totalElement.textContent = formatPriceVND(total);

    // Cập nhật giá trị tổng ban đầu
    setInitialTotal(total);
    document.querySelector('input[name="tongTien"]').value = total;
}

let totalAmount = 0; // Tổng tiền ban đầu (không giảm giá)
let discountedTotal = 0; // Tổng tiền sau giảm giá

// Hàm cập nhật giá trị tổng cộng (ban đầu) từ hệ thống
function setInitialTotal(initialTotal) {
    totalAmount = initialTotal; // Đặt giá trị tổng ban đầu
    discountedTotal = totalAmount; // Ban đầu, tổng tiền sau giảm giá = tổng tiền ban đầu
    document.querySelector('.control-all-money-total').textContent = formatPriceVND(discountedTotal); // Hiển thị tổng tiền ban đầu
    applyDiscount(); // Áp dụng giảm giá ngay lập tức
}

// Hàm áp dụng giảm giá
function applyDiscount() {
    const discountInput = document.getElementById('discount');
    const discount = parseFloat(discountInput.value) || 0; // Giá trị giảm giá (%)
    
    discountedTotal = totalAmount * (1 - discount / 100); // Tính tổng tiền sau giảm giá

    // Cập nhật tổng cộng thanh toán sau khi áp dụng giảm giá
    const finalTotalDisplay = document.querySelector('.control-all-money-total');
    finalTotalDisplay.textContent = formatPriceVND(discountedTotal);
    document.querySelector('input[name="tongTien"]').value = discountedTotal;
}

// Hàm tính tiền thối lại
function calculateChange() {
    const customerMoneyInput = document.getElementById('customer-money');
    const customerMoney = parseFloat(customerMoneyInput.value) || 0; // Tiền khách đưa

    // Tính tiền thối lại
    const change = customerMoney - discountedTotal;

    // Cập nhật tiền thối lại
    const changeAmountDisplay = document.getElementById('change-amount');
    if (change >= 0) {
        changeAmountDisplay.textContent = formatPriceVND(change); // Hiển thị tiền thối lại
    } else {
        changeAmountDisplay.textContent = 'Không đủ tiền';
    }
}

// Hàm định dạng tiền kiểu Việt Nam
function formatPriceVND(price) {
    return price.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' }).replace('₫', '') + ' ₫';
}
   </script>
   <!-- lưu khách hàng mới -->
    <script>
      document.getElementById('saveCustomerBtn').addEventListener('click', function () {
    // Thu thập dữ liệu từ các trường
    const name = document.querySelector('.form-control[name="name"]').value;
    const address = document.querySelector('.form-control[name="diaChi"]').value;
    const email = document.querySelector('.form-control[name="email"]').value;
    const ngaySinh = document.querySelector('.form-control[name="ngaySinh"]').value;
    const phoneNumber = document.querySelector('.form-control[name="phoneNumber"]').value;

    // Kiểm tra dữ liệu hợp lệ
    if (!name || !address || !email || !ngaySinh || !phoneNumber) {
        alert('Vui lòng nhập đầy đủ thông tin.');
        return;
    }

    // Gửi dữ liệu đến server
    saveCustomerToDatabase({ name, address, email, ngaySinh, phoneNumber });
});
function saveCustomerToDatabase(data) {
    fetch('/admin/customers', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        body: JSON.stringify(data),
    })
        .then(response => {
            if (response.ok) {
                return response.json();
            }
            throw new Error('Có lỗi xảy ra khi lưu dữ liệu');
        })
        .then(data => {
            alert('Khách hàng đã được lưu thành công!');
            location.reload(); // Reload trang sau khi lưu thành công
        })
        .catch(error => {
            console.error(error);
            alert('Không thể lưu khách hàng. Vui lòng thử lại.');
        });
}
    </script>
    <script>
     document.addEventListener('DOMContentLoaded', function () {
    // Lấy input và danh sách kết quả
    const searchInput = document.getElementById('searchCustomerInput');
    const resultList = document.getElementById('searchResultList');
    const hiddenKhachHangID = document.getElementById('khachHangID'); // Trường ẩn khachHangID

    // Xử lý sự kiện khi người dùng gõ vào ô tìm kiếm
    searchInput.addEventListener('input', function () {
        const searchQuery = searchInput.value.trim();

        if (searchQuery.length === 0) {
            resultList.style.display = 'none';
            return;
        }

        // Gửi request tìm kiếm khách hàng
        fetch(`/admin/customers/search?query=${encodeURIComponent(searchQuery)}`)
            .then(response => response.json())
            .then(data => {
                resultList.innerHTML = ''; // Xóa danh sách kết quả cũ

                if (data.length > 0) {
                    resultList.style.display = 'block'; // Hiển thị danh sách kết quả
                    data.forEach(customer => {
                        const listItem = document.createElement('li');
                        listItem.textContent = customer.name; // Hiển thị tên khách hàng
                        listItem.classList.add('list-group-item');
                        listItem.style.cursor = 'pointer'; // Chỉ ra rằng phần tử có thể click được

                        // Xử lý khi người dùng nhấn vào tên khách hàng
                        listItem.addEventListener('click', function () {
                            // Gán tên khách hàng vào ô tìm kiếm
                            searchInput.value = customer.name;

                            // Cập nhật giá trị khachHangID vào trường ẩn
                            hiddenKhachHangID.value = customer.id;

                            // Ẩn danh sách kết quả sau khi chọn khách hàng
                            resultList.style.display = 'none';
                        });

                        resultList.appendChild(listItem);
                    });
                } else {
                    resultList.style.display = 'none'; // Nếu không có kết quả, ẩn danh sách
                }
            })
            .catch(error => {
                console.error('Lỗi:', error);
            });
    });

    // Đóng danh sách kết quả khi người dùng nhấn ra ngoài
    document.addEventListener('click', function (e) {
        if (!resultList.contains(e.target) && e.target !== searchInput) {
            resultList.style.display = 'none';
        }
    });
});


    </script>
</body>
</html>