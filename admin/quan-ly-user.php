<?php 
    include "../model/pdo.php";
    $sql = "SELECT * FROM `res-user`";
    $listuser = pdo_query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản Trị - Quản Lý Người Dùng</title>
    <link rel="icon" href="../assect/img/logo-header/favicon.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="../assect/css/style-admin.css">
    <link rel="stylesheet" href="../assect/css/base.css">
    <link rel="stylesheet" href="../assect/css/grid.css">
    <link rel="stylesheet" href="../assect/css/responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
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

        <div class=" grid wide" >  
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

                        <div class="danh-sach-user l-9" style="padding-bottom: 30px;">
                            <h1>Quản Lý Người Dùng</h1>
                            <div class="loc-ds-user">
                                <a href="them-user.php"><button> + Thêm Mới</button></a>
                                <input type="text" name="text" id="text" class="loc-text" style="width:25%; padding: .5% .5%; margin: 6% 0% -10% 34%;">
                                <input type="button" class="loc-user" name="loc-ngay" value="Tìm kiếm">
                            </div>
                            <table>
                                <tr>
                                    <th style="width: 124px;">ID</th>
                                    <th style="width: 124px;">Họ Và Tên</th>
                                    <th style="width: 197px;">Email</th>
                                    <th style="width: 124px;">Số Điện Thoại</th>
                                    <th style="width: 124px;">Trạng Thái</th>
                                    <th style="width: 124px;">Quản Lý</th>
                                </tr>

                                <?php 
                                    // Lấy dữ liệu về từ database
                                    foreach ($listuser as $user) {
                                        extract($user);
                                        $edituer = ("edituser?id=".$id);
                                        $deleteuser = ("deleteuser.php?id=".$id);
                                        echo '
                                            <tr>
                                                <td>'. $id .'</td>
                                                <td>'. $fullname.'</td>
                                                <td>'. $email .'</td>
                                                <td>'. $phone .'</td>
                                                <td><i class="fa fa-check"></i></td>
                                                <td>
                                                    <a href="'.$edituser.'"><i class="fa fa-edit"></i> Sửa </a><br><br>
                                                    <a href="'.$deleteuser.'"><i class="fa fa-remove"></i> Xoá</a>
                                                    
                                                </td>
                                            </tr>
                                        ';
                                    }
                                ?>

                                
                               
                                
                            </table>
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