//MENU HEADER
// Mở và đóng menu khi nhấn vào biểu tượng menu (3 gạch)
document.addEventListener("DOMContentLoaded", function () {
    const menu = document.querySelector(".nav-menu");
    const menuIcon = document.querySelector(".menu-icon");
    const overlay = document.querySelector(".overlay");
    const brand = document.querySelector(".brand");
    const information = document.querySelector(".information");

    // Khi nhấn vào biểu tượng menu
    menuIcon.addEventListener("click", function () {
        // Kiểm tra xem đã tồn tại brand-clone chưa
        if (!menu.querySelector(".brand-clone")) {
            // Sao chép phần brand vào nav-menu nếu chưa tồn tại
            const brandClone = brand.cloneNode(true);
            brandClone.classList.add("brand-clone"); // Thêm class nếu cần
            menu.prepend(brandClone);
        }
        if (!menu.classList.contains("active")) {
            document.body.classList.add("no-scroll"); // Thêm class để ngăn cuộn trang
        }
        // Kiểm tra xem đã tồn tại information-clone chưa
        if (!menu.querySelector(".information-clone")) {
            // Sao chép phần information vào nav-menu nếu chưa tồn tại
            const informationClone = information.cloneNode(true);
            informationClone.classList.add("information-clone"); // Thêm class nếu cần
            menu.prepend(informationClone);
        }

        menu.classList.add("active");
        overlay.classList.add("active");
    });

    // Khi nhấn vào overlay, đóng menu
    overlay.addEventListener("click", function () {
        menu.classList.remove("active");
        overlay.classList.remove("active");
        document.body.classList.remove("no-scroll");
    });
});
// menu-mega trong nav-menu
document.addEventListener("DOMContentLoaded", function () {
    const perfumeMenu = document.querySelector(".Nuochoa");
    const menuMega = perfumeMenu.querySelector(".menu-mega");
    const toggleArrowL = perfumeMenu.querySelector(".toggle-arrow-L");

    if (toggleArrowL && menuMega) {
        perfumeMenu.addEventListener("click", function (e) {
            // Kiểm tra nếu phần tử được nhấn là span.toggle-arrow-L
            if (e.target === toggleArrowL) {
                e.stopPropagation(); // Ngăn chặn sự kiện lan ra ngoài
                console.log("Span clicked");

                // Thêm hoặc bỏ class active cho menu-mega
                menuMega.classList.toggle("active");

                // Xử lý xoay mũi tên
                if (menuMega.classList.contains("active")) {
                    toggleArrowL.style.transform = "rotate(180deg)";
                } else {
                    toggleArrowL.style.transform = "rotate(0deg)";
                }
            }
        });

        // Ngăn sự kiện click lan truyền khi nhấn vào bên trong menu-mega
        menuMega.addEventListener("click", function (e) {
            e.stopPropagation();
        });
    }

    // Xử lý sự kiện click ngoài menu để đóng menu-mega
    document.addEventListener("click", function (e) {
        if (!perfumeMenu.contains(e.target)) {
            menuMega.classList.remove("active");
            toggleArrowL.style.transform = "rotate(0deg)";
        }
    });
    // Bắt sự kiện click vào từng "menu-mega-item" để mở danh sách con
    const menuMegaItems = document.querySelectorAll(".menu-mega-item");

    menuMegaItems.forEach(function (item) {
        // Tìm toggle-arrow trong từng "menu-mega-item"
        const toggleArrow = item.querySelector(".toggle-arrow");

        // Tìm menu-list nằm trong "menu-mega-item"
        const menuList = item.querySelector(".menu-list");

        if (toggleArrow && menuList) {
            // Thêm sự kiện click chỉ vào toggle-arrow
            toggleArrow.addEventListener("click", function (e) {
                e.stopPropagation(); // Ngăn chặn sự kiện lan ra ngoài
                e.preventDefault(); // Ngăn hành vi mặc định của thẻ a nếu có

                // Thêm hoặc bỏ class active cho menu-list
                menuList.classList.toggle("active");

                // Xử lý xoay mũi tên toggle-arrow
                if (menuList.classList.contains("active")) {
                    toggleArrow.style.transform = "rotate(180deg)"; // Xoay mũi tên xuống
                } else {
                    toggleArrow.style.transform = "rotate(0deg)"; // Xoay mũi tên lại lên
                }
            });
        }
    });
    // Tìm phần tử cha .Thuonghieu
    const thuongHieuMenu = document.querySelector(".Thuonghieu");
    const menuMega_th = thuongHieuMenu.querySelector(".menu-mega");
    const toggleArrowL_th = thuongHieuMenu.querySelector(".toggle-arrow-L");

    if (toggleArrowL_th && menuMega_th) {
        // Thêm sự kiện click cho phần tử cha .Thuonghieu
        thuongHieuMenu.addEventListener("click", function (e) {
            // Kiểm tra nếu phần tử được nhấn là span.toggle-arrow-L
            if (e.target === toggleArrowL_th) {
                e.stopPropagation(); // Ngăn chặn sự kiện lan ra ngoài
                console.log("Span clicked");

                // Thêm hoặc bỏ class active cho menu-mega
                menuMega_th.classList.toggle("active");

                // Xử lý xoay mũi tên
                if (menuMega_th.classList.contains("active")) {
                    toggleArrowL_th.style.transform = "rotate(180deg)";
                } else {
                    toggleArrowL_th.style.transform = "rotate(0deg)";
                }
            }
        });

        // Ngăn sự kiện click lan truyền khi nhấn vào bên trong menu-mega
        menuMega_th.addEventListener("click", function (e) {
            e.stopPropagation();
        });
    }

    // Xử lý sự kiện click ngoài menu để đóng menu-mega
    document.addEventListener("click", function (e) {
        if (!thuongHieuMenu.contains(e.target)) {
            thuongHieuMenu.classList.remove("active");
            menuMega_th.classList.remove("active");
            toggleArrowL_th.classList.remove("active");
            toggleArrowL_th.style.transform = "rotate(0deg)";
        }
    });
    // Bắt sự kiện click vào từng "menu-mega-item" để mở danh sách con
    const menuMegaItems_th = document.querySelectorAll(".menu-mega-right");

    menuMegaItems_th.forEach(function (item) {
        // Tìm toggle-arrow trong từng "menu-mega-right"
        const toggleArrow = item.querySelector(".toggle-arrow");

        // Tìm brandList nằm trong "menu-mega-item"
        const brandList = item.querySelector(".brand-list");

        if (toggleArrow && brandList) {
            // Thêm sự kiện click chỉ vào toggle-arrow
            toggleArrow.addEventListener("click", function (e) {
                e.stopPropagation(); // Ngăn chặn sự kiện lan ra ngoài
                e.preventDefault(); // Ngăn hành vi mặc định của thẻ a nếu có

                // Thêm hoặc bỏ class active cho menu-list
                brandList.classList.toggle("active");

                // Xử lý xoay mũi tên toggle-arrow
                if (brandList.classList.contains("active")) {
                    toggleArrow.style.transform = "rotate(180deg)"; // Xoay mũi tên xuống
                } else {
                    toggleArrow.style.transform = "rotate(0deg)"; // Xoay mũi tên lại lên
                }
            });
        }
    });
    //tintuc
    const tintucMenu = document.querySelector(".tintuc");
    const menuMega_tt = tintucMenu.querySelector(".menu-mega");
    const toggleArrowL_tt = tintucMenu.querySelector(".toggle-arrow-L");

    if (toggleArrowL_tt && menuMega_tt) {
        tintucMenu.addEventListener("click", function (e) {
            if (e.target === toggleArrowL_tt) {
                e.stopPropagation();
                menuMega_tt.classList.toggle("active");

                if (menuMega_tt.classList.contains("active")) {
                    toggleArrowL_tt.style.transform = "rotate(180deg)";
                } else {
                    toggleArrowL_tt.style.transform = "rotate(0deg)";
                }
            }
        });

        document.addEventListener("click", function (e) {
            if (!tintucMenu.contains(e.target)) {
                tintucMenu.classList.remove("active");
                toggleArrowL_tt.classList.remove("active");
                menuMega_tt.classList.remove("active");
                toggleArrowL_tt.style.transform = "rotate(0deg)";
            }
        });
    }
});
// thanh dieu huong
// Select the back-to-top button
const backToTopButton = document.querySelector(".back-to-top");

// Add a click event listener
backToTopButton.addEventListener("click", () => {
    // Smoothly scroll to the top of the page
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
});
// phan gio hang
function openCart() {
    document.getElementById("cart-overlai").style.display = "block";
    document.getElementById("cart-modal").classList.add("open");
    document.body.classList.add("no-scroll");
}

function closeCart() {
    document.getElementById("cart-overlai").style.display = "none";
    document.getElementById("cart-modal").classList.remove("open");
    document.body.classList.remove("no-scroll");
}

function handleCartClick(event) {
    event.preventDefault(); // Ngăn chặn mặc định của thẻ <a>
    if (window.innerWidth > 1000) {
        openCart();
    } else {
        window.location.href = ""; // Điều hướng đến trang giỏ hàng
    }
}
