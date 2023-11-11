/*slider*/
var KichThuoc = document.getElementsByClassName("slide")[0].clientWidth;
var ChuyenSlide = document.getElementsByClassName("chuyen-slide")[0];
var Img = ChuyenSlide.getElementsByTagName("img");
var Max = KichThuoc * Img.length;
Max -= KichThuoc;
var Chuyen = 0;
function Next() {
    if (Chuyen < Max) Chuyen += KichThuoc;
    else Chuyen = 0;
    ChuyenSlide.style.marginLeft = '-' + Chuyen + 'px';
}

function Back() {
    if (Chuyen == 0) Chuyen = Max;
    else Chuyen -= KichThuoc;
    ChuyenSlide.style.marginLeft = '-' + Chuyen + 'px';
}
setInterval(function() {
    Next();
}, 5000);
function timkiem() {
    var kqtim = document.getElementById("getIn").value; 
    if (kqtim == "truyentranh" ) {
        window.location = "truyentranh.html";
    } else if (kqtim == "sachgiaokhoa" ) {
        window.location = "sachgiaokhoa.html";
    } else if (kqtim == "sachnuocngoai") {
        window.location = "sachnuocngoai.html";
    } else if (kqtim == "tieuthuyet" ) {
        window.location = "tieuthuyet.html";
    } else if (kqtim == "sachnauan") {
        window.location = "sachnauan.html";
    } else window.location = "sachdocthu.html";
}

// Giỏ hàng
function addshop() {
    alert("Đã thêm vào giỏ hàng");
}
// Đăng nhập
function kiemtra() {

    var name1 = "nhom11";
    var username1 = "nhom11";
    var password1 = "123";

    var name2 = "bansachonline";
    var username2 = "bansachonline";
    var password2 = "123";

    var name3 = localStorage.getItem("name");
    var username3 = localStorage.getItem("username");
    var password3 = localStorage.getItem("password");

    var userName = document.getElementById("username").value;
    var passWord = document.getElementById("password").value;

    if (userName == "" || passWord == "") {
        if (userName == "") {
            alert("Tên tài khoản không được bỏ trống!");
            return;
        }
        if (passWord == "") {
            alert("Mật khẩu không được bỏ trống!");
            return;
        }
    } else {
        if ((username1 == userName) && (password1 == passWord)) {
            localStorage.setItem("Hello", name1);
            alert("Chào mừng " + name1 + "!");
            window.location = "index-user.html";
            return false;
        } else if ((username2 == userName) && (password2 == passWord)) {
            localStorage.setItem("Hello", name2);
            alert("Chào mừng " + name2 + "!");
            window.location = "index-user.html";
            return false;
        } else if ((username3 == userName) && (password3 == passWord)) {
            localStorage.setItem("hello", name3);
            alert("Chào mừng " + name3 + "!");
            window.location = "index-user.html";
            return false;
        } else alert("Bạn nhập sai tên tài khoản hoặc mật khẩu !");
    }
}
//Mua ngay
function mua() {
    if (confirm("Bạn phải đăng nhập để mua hàng!") == true) {
        window.location = "login.html";
    }

}
//Shop
//shop
function check() {
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var diachi1 = document.getElementById("dc1").value;
    var diachi2 = document.getElementById("dc2").value;
    var diachi3 = document.getElementById("dc3").value;
    var diachi4 = document.getElementById("dc4").value;

    var sexRadios = document.getElementsByName("name");
    var a = sexRadios.value;
    var selected = false;
    for (var i = 0; i < sexRadios.length; i++) {
        if (sexRadios[i].checked) {
            selected = true;
            break;
        }
    }
    if (name == "") {
        alert("Họ và tên người nhận không được bỏ trống!");
        return;
    }
    if (phone == "") {
        alert("Số điện thoại giao hàng không được bỏ trống!");
        return;
    }
    if (diachi1 == "") {
        alert("Tỉnh/ Thành phố không được bỏ trống!");
        return;
    }
    if (diachi2 == "") {
        alert("Quận/ Huyện không được bỏ trống!");
        return;
    }
    if (diachi3 == "") {
        alert("Phường/ Xã không được bỏ trống!");
        return;
    }
    if (diachi4 == "") {
        alert("Địa chỉ không được bỏ trống!");
        return;
    }
    if (!selected) {
        alert("Vui lòng chọn phương thức thanh toán");
        return;
    }
    if (name != "" && phone != "" && diachi1 != "" && diachi2 != "" && diachi3 != "" && diachi4 != "" && selected) {
        window.location = "hoa-don.html";
    }
}
//Đăng kí
function register() {
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("pass").value

   
    var selected = false;
    for (var i = 0; i < sexRadios.length; i++) {
        if (sexRadios[i].checked) {
            selected = true;
            break;
        }
    }
    if (name == "" || phone == "" || email == "" || password == "" ) {
        if (name == "") {
            alert("Họ và tên không được bỏ trống!");
            return;
        } else if (phone == "") {
            alert("Số điện thoại không được bỏ trống!");
            return;
        
        } else if (email == "") {
            alert("Email không được bỏ trống!");
            return;
        } else if (password == "") {
            alert("Mật khẩu không được bỏ trống!");
            return;
        }
    } else if (name.length < 5) {
        alert("Bạn phải dùng họ tên thật của mình để đăng kí!");
        return;
    
    } else if (password.length <= 7) {
        alert("Mật khẩu phải từ 8 kí tự trở lên !");
        return;
    
    } else {
        localStorage.setItem("email", email);
        localStorage.setItem("password", password);
        localStorage.setItem("name", name);
        alert("Bạn đã đăng kí thành công!");
        window.location = "login.html";
    }
}
//Xoa
function xoa() {
    if (confirm("Bạn chắc chắn muốn xóa sản phẩm ?") == true) {
        alert("Bạn đã xóa thành công!");
    }
}
function xoadn() {
    if (confirm("Bạn chắc chắn muốn xóa tài khoản này ?") == true) {
        alert("Bạn đã xóa thành công!");
    }
}
function khoadn() {
    if (confirm("Bạn chắc chắn muốn khóa tài khoản này ?") == true) {
        alert("Khóa tài khoản thành công!");
    }
}
function btnXacNhan() {
    alert("Đã đặt hàng thành công!\nCảm ơn bạn đã mua hàng HDMC Book");
    window.location = "index-user.html";
}
function btnHuyBo() {
    if (confirm("Bạn chắc chắn muốn hủy?") == true) {
        alert("Bạn đã hủy!");
        window.location = "index-user.html";
    }
}