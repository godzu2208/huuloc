
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản Lý Đơn Hàng</title>
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

                        <div class="danh-sach-don-hang l-9" style="padding-bottom: 30px;">
                            <h1>Quản Lý Đơn Hàng</h1>
                            <div class="loc-don-hang">
                                Từ&emsp;<input type="date" name="bday">&emsp;Đến&emsp;
                                <input type="date" name="bday" min="2019-01-01">&emsp;
                                <input type="button" class="loc-ngay" name="loc-ngay" value="Tìm kiếm">
                            </div>
                            <table>
                                <tr>
                                    <th>Mã Đơn Hàng</th>
                                    <th>Ảnh</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Ngày Đặt</th>
                                    <th>Người Đặt</th>
                                    <th>Giá</th>
                                    <th>Trạng Thái</th>
                                </tr>
                                <tr>
                                    <td>3118410330</td>
                                    <td><img src="../assect/img/lookbook/4piece.webp" alt="Sách giao khoa 12"></td>
                                    <td>4-PIECE </td>
                                    <td>20/10/2023 15:33</td>
                                    <td>Huân</td>
                                    <td>400.000 VNĐ</td>
                                    <td>Đang giao</td>
                                </tr>
                                <tr>
                                    <td>3118410331</td>
                                    <td><img src="../assect/img/lookbook/bartin.webp" alt="Sách giáo khoa lớp 9"></td>
                                    <td>BARTIN</td>
                                    <td>20/10/2023 16:53</td>
                                    <td>Khôi</td>
                                    <td>350.000 VNĐ</td>
                                    <td>Đã giao</td>
                                </tr>
                                <tr>
                                    <td>3118410332</td>
                                    <td><img src="../assect/img/lookbook/aurora.webp" alt="Thám tử đã chết"></td>
                                    <td>AURORA</td>
                                    <td>20/10/2023 17:21</td>
                                    <td>Huy</td>
                                    <td>395.000 VNĐ</td>
                                    <td>Đang vận chuyển</td>
                                </tr>
                                <tr>
                                    <td>3118410333</td>
                                    <td><img src="../assect/img/product/quần/AE-1.webp" alt="Mắ Biếc"></td>
                                    <td>AE</td>
                                    <td>20/10/2023 19:20</td>
                                    <td>Hoàn</td>
                                    <td> 300.000 VNĐ</td> </td>
                                    <td>Đang đóng gói</td>
                                </tr>
                                <tr>
                                    <td>3118410333</td>
                                    <td><img src="../assect/img/product/túi/chain1.webp" alt="Quo Vadis"></td>
                                    <td>Túi CHAIN</td>
                                    <td>20/10/2023 15:01</td>
                                    <td>Hoàng</td>
                                    <td>170.000 VNĐ</td>
                                    <td>Giao hàng thành công</td>
                                </tr>

                                
                               
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fuid">
            <div class="grid ">

                <div class="copyrights">
                    <p> <br> &copy; 2023  Nguyễn Hữu Lộc <br></p>
                </div>
            </div>
        </div>
    </div>
    
    
    <script src="./js/admin.js"></script>
</body>

</html>