<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang Quản Trị</title>
    <link rel="icon" href="../assect/img/logo-header/favicon.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assect/css/style-admin.css">
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
                        <div class="danh-sach-thong-ke  l-8 m-12 c-12" >
                            <h1>Trang Chủ</h1>
                            <div class="loc-thong-ke">
                            </div>
                            <div class="thong-ke-chi-tiet">
                                <ul>
                                    <li>
                                        <i class="fa fa-shopping-cart" style=" color:#3E99DE"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-comment" style=" color:#F3B93C"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-users" style="color:#3E99DE"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-search" style=" color:#E07694"></i>
                                    </li>
                                    <li class="so-lieu">120</li>
                                    <li class="so-lieu">52</li>
                                    <li class="so-lieu">24</li>
                                    <li class="so-lieu">25.2k</li>
                                    <li class="thong-tin">ĐƠN HÀNG</li>
                                    <li class="thong-tin">HỎI ĐÁP</li>
                                    <li class="thong-tin">NGƯỜI DÙNG</li>
                                    <li class="thong-tin">LƯỢT TRUY CẬP</li>
                                </ul>
                            </div>
                            
            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fuid">
            <div class="copyrights">
                <p> <br> &copy;2023  Nguyễn Hữu Lộc <br></p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Guitar', 8],
                ['Piano', 6],
                ['Organ', 5],
                ['Ukulele', 2],
                ['Phụ Kiện', 2]
            ]);

            // Optional; add a title and set the width and height of the chart
            var options = {
                'title': '',
                'width': 600,
                'height': 400
            };

            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>
    <script src="./js/admin.js"></script>
</body>

</html>