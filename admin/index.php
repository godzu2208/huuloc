<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập trang quản trị </title>
    <link rel="icon" href="../assect/img/logo-header/favicon.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="../assect/css/style-admin-login.css">
    <link rel="stylesheet" href="../assect/css/base.css">
    <link rel="stylesheet" href="../assect/css/grid.css">
    <link rel="stylesheet" href="../assect/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <header class="header">
            <div class="grid wide">

                <div class="header__logo col">
                    <a href="index.php" class="header__logo-img ">
                        <img src="../assect/img/logo-header/logo.webp" alt="lộc"  class="header__logo-img">
                    </a>
                </div>
            </div>
        </header>
        <div class="main-content">
            <div class="container-f">
                <div style="margin-left: -15px;
                margin-right: -15px;">
                    <div class="container-form">
                        <div class="form-login">
                            <div class="heading-login">
                                <h1 class="heading-title">
                                    <i class="fa fa-lock"></i> Đăng nhập vào trang quản trị
                                </h1>
                            </div>
                            <div class="body-login">
                                <form>
                                    <div class="form-group">
                                        <label for="input-username">Tên tài khoản</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                                
                                            </span>
                                            <input type="text" id="username" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="input-username">Mật khẩu</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                    <i class="fa fa-lock"></i> 
                                                </span>
                                            <input type="password" id="password" class="form-control">
                                        </div>
                                    </div>

                                    <div class="text-right">
                                        <button class="btn-login" onclick="return checklogin()">
                                            <i class="fa fa-key"></i>
                                            Đăng nhập
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function checklogin() {
            var name = "Admin";
            var username = "admin";
            var password = "admin";

            var userName = document.getElementById("username").value;
            var passWord = document.getElementById("password").value;

            if (userName == "" || passWord == "") {
                if (userName == "") alert("Tên tài khoản không được bỏ trống!");
                if (passWord == "") alert("Mật khẩu không được bỏ trống!");
            } else if ((username == userName) && (password == passWord)) {

                alert("Chào mừng " + name + "!");
                window.location = "thong-ke.php";
                return false;
            } else alert("Bạn nhập sai tên tài khoản hoặc mật khẩu !");
        }
    </script>
</body>

</html>