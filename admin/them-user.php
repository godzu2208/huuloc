<?php 
    include "../model/pdo.php";
    if(isset($_POST['submit'])&&($_POST['submit'])){
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cfpassword = $_POST['cfpassword'];

        $sql = " INSERT INTO `res-user` (`fullname` , `phone` , `email` , `password` , `cfpassword`)
        VALUES ('$fullname', '$phone', '$email', md5('$password') , md5('$cfpassword'))";

        
        pdo_execute($sql);
        $thongbao = "Thêm tài khoản người dùng thành công";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản Trị - Thêm Sản Phẩm</title>
    <link rel="icon" href="../assect/img/logo-header/favicon.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="../assect/css/style-admin.css">
    <link rel="stylesheet" href="../assect/css/base.css">
    <link rel="stylesheet" href="../assect/css/grid.css">
    <link rel="stylesheet" href="../assect/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="app">
        <header class="header-admin">
            <nav class="header-navbar">
                <ul class="header-navbar_list">
                    <li>
                        <a href="thong-ke.php" title="Trang chủ"><img src="../assect/img/logo-header/favicon.jpg" alt="logo"></a>
                    </li>
                    <li>
                        <a href="#" class="text-admin">Xin chào Quản Trị Viên</a>
                    </li>
                </ul>
                <ul class="header-navbar_list">
                    
                    <li>
                        <a class="dang-xuat" href="index.php">&nbsp;Đăng xuất</a>
                        <i class="fa fa-sign-out"></i>
                    </li>
                    <li>
                        <a class="trang-chu" href="thong-ke.php">&nbsp;Trang chủ</a>
                        <i class="fa fa-home"></i>
                    </li>
                </ul>
            </nav>
        </header>

        <div class=" grid wide" style="height : 469px;">  
            <div class="main-content">
                <div class="container ">
                    <div class="container-row ">
    
                        <div class="admin-menu  l-3 m-12 c-12">
                            <h1>Admin Menu</h1>
                            <ul>
                                <li><a href="quan-ly-san-pham.php"><i class="fa fa-list-ul"></i> Sản phẩm</a></li>
            
                                <li><a href="quan-ly-don-hang.php"><i class="fa fa-envelope"></i> Đơn hàng</a></li>
                                <li>
                                    <a href="quan-ly-user.php"> <i class="fa fa-cog"></i> Quản lý người dùng</a>
                                </li>
                                <li>
                                    <a href="chinh-sua-thong-tin.php"> <i class="fa fa-user"></i> Chỉnh sửa thông tin cá nhân</a>
                                </li>
                            </ul>
                        </div>
                        <div class="danh-sach-san-pham l-8" >   
                            <h1>Thêm USER</h1>
                            <div class="them-sp">
                                <?php if(isset($thongbao)&&($thongbao!="")) echo $thongbao?>
                                <form method="post">
                                    <label for="ten-tai-khoan"><b>Họ và tên: </b></label>
                                    <input type="text" name="fullname" id="name-user" class="input-add" required>
            
                                    <label for="so-dien-thoai"><b>Số điện thoại: </b></label>
                                    <input type="phone" name="phone" id="phone-user" class="input-add" required>

                                    <label for="email"><b>Email: </b></label>
                                    <input type="email" id="email" name="email" class="input-add" >
            
                                    <label for="pass"><b>Mật Khẩu: </b></label>
                                    <input type="password" name="password" id="mo-ta-pass" class="input-add"  required>

                                    <label for="pass"><b>Xác nhận mật Khẩu: </b></label>
                                    <input type="password" name="cfpassword" id="mo-ta-cfpass" class="input-add"  required>
            
            
                                    
            
                                    
            
                                    <a href="quan-ly-user.php"><input type="button" value="Huỷ bỏ" class="huy-bo"></a>
                                    <input type="submit" value="Thêm" name="submit" class="add">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fuid">
            <div class="copyrights">
                <p> <br> &copy; 2023  Nguyễn Hữu Lộc <br></p>
            </div>
        </div>
    </div>
    
    
    <script src="./js/admin.js"></script>
</body>

</html>