<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Báo cáo bán hàng</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
        <!-- bootstrap datepicker -->
        <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="dist/css/font/GoogleFont.css">

        <style>
            .table {
                background-color: rgb(240, 240, 240);
            }

            .table thead tr th {
                vertical-align: middle !important;
                text-align: center;
                background-color: #3c8dbc;
                color: #fff;
            }

            .table tbody td:nth-child() {
                text-align: left;
            }

            .table tbody td:nth-child() {
                text-align: right;
            }
            .table th{
                background-color:white;
                color:black;
            }
        </style>
    </head>
    <body class="hold-transition skin-blue-light sidebar-mini fixed">
        <div class="wrapper">

            <header class="main-header">

                <!-- Logo -->
                <a href="quanly_index.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>T</b>SB</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg" style="margin-left: -15px;">
                        <img style="width:50px; height:50px;" class="img-responsive pull-left" src="dist/img/Logo TSB - Final.png" alt="Photo">
                        <b style="margin-right: 35px;">Quản lý</b>
                        <span style="position: absolute; margin-top: 15px; margin-left: -108px; font-size: x-small;"><small>Phân hệ</small></span>
                    </span>
                </a>

                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">5</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">Bạn có 5 thông báo mới</li>
                                    <li>
                                        <ul class="menu">
                                            <li>
                                                <a href="quanly_donhang_chi-tiet-phieu-giao-nhieu-lan.html">
                                                    <i class="fa fa-shopping-cart text-green"></i> Lô hàng số 81264-1#1 đã hoàn thành
                                                    <div class="pull-right">1 phút trước</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="quanly_donhang_danh-sach-phieu-giu-hang.html">
                                                    <i class="fa fa-shopping-cart text-green"></i> Lô hàng số 89665-0 đang chờ xử lý
                                                    <div class="pull-right">8 phút trước</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="sua_phieu_0.html">
                                                    <i class="fa fa-shopping-cart text-green"></i> Lô hàng số 89659-0 đang chờ xử lý <p/> đổi trả
                                                    <div class="pull-right">55 phút trước</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="quanly_donhang_chi-tiet-phieu-giao-mot-lan.html">
                                                    <i class="fa fa-shopping-cart text-green"></i> Lô hàng số 89664-0 đang chờ xử lý 
                                                    <div class="pull-right">1 giờ trước</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="quanly_donhang_chi-tiet-phieu-giao-nhieu-lan.html">
                                                    <i class="fa fa-shopping-cart text-green"></i> Lô hàng số 81264-1#2 đang xử lý
                                                    <div class="pull-right">1 giờ trước</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">Xem tất cả</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="dist/img/user2-160x160.jpeg" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Nguyễn Thành Công</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="dist/img/user2-160x160.jpeg" class="img-circle" alt="User Image">

                                        <p>Nguyễn Thành Công<small>Quản lý</small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="quanly_nguoidung_thong-tin-nguoi-dung.html" class="btn btn-default btn-flat">Hồ sơ</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="login.html" class="btn btn-default btn-flat">Thoát</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="dist/img/user2-160x160.jpeg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Nguyễn Thành Công</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Trực tuyến</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Tìm Kiếm...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="menu-open">
                            <a href="quanly_index.html">
                                <i class="fa fa-dashboard"></i> <span>Trang chủ</span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-file-o"></i> <span>Đơn hàng</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class=""><a href="quanly_donhang_lap-phieu.html"><i class="fa fa-edit"></i> Lập Phiếu</a></li>
                                <li>
                                    <a href="quanly_donhang_danh-sach-phieu-dang-soan.html">
                                        <i class="fa fa-file-text"></i>
                                        <span>Phiếu đang soạn</span>
                                        <span class="pull-right-container">
                                            <span class="label label-primary pull-right">2</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="quanly_donhang_danh-sach-phieu-dang-xu-ly.html">
                                        <i class="fa fa-list-alt"></i>
                                        <span>Phiếu đang xử lý</span>
                                        <span class="pull-right-container">
                                            <span class="label label-primary bg-green">1</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="quanly_donhang_danh-sach-phieu-hoan-thanh.html">
                                        <i class="fa fa-files-o"></i>
                                        <span>Phiếu đã hoàn thành</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="quanly_donhang_danh-sach-phieu-giu-hang.html">
                                        <i class="fa fa-book"></i>
                                        <span>Phiếu giữ hàng</span>
                                        <!--<span class="pull-right-container">-->
                                            <!--<span class="label pull-right bg-green">new</span>-->
                                            <!--<span class="label pull-right bg-red">2</span>-->
                                        <!--</span>-->
                                    </a>
                                </li>
                                <li class="">
                                    <a href="quanly_donhang_lich-giao-hang-tong.html">
                                        <i class="fa fa-calendar-minus-o"></i>
                                        <span>Lịch giao hàng</span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Hàng hoá</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class=""><a href="quanly_hanghoa_gia-hang-hoa.html"><i class="fa fa-dollar"></i> Giá hàng hóa</a></li>
                                <li class=""><a href="quanly_hanghoa_ton-kho.html"><i class="fa fa-dropbox"></i> Hàng tồn kho</a></li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-hand-o-right"></i> Yêu cầu nhập
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class=""><a href="quanly_hanghoa_tao-yeu-cau-nhap.html"><i class="fa fa-edit"></i> Tạo yêu cầu nhập</a></li>
                                        <li class=""><a href="quanly_hanghoa_nhap-hoa-don.html"><i class="fa fa-id-card-o"></i> Nhập hoá đơn</a></li>
                                        <li class=""><a href="quanly_hanghoa_lich-su-yeu-cau-nhap.html"><i class="fa fa-table"></i> Lịch sử yêu cầu nhập</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-hand-o-right"></i> Nhập hàng
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class=""><a href="quanly_hanghoa_tao-dot-nhap-kho.html"><i class="fa fa-edit"></i> Tạo đợt nhập mới</a></li>
                                        <li class=""><a href="quanly_hanghoa_lich-su-nhap-hang.html"><i class="fa fa-table"></i> Lịch sử nhập hàng</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Công nợ</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class=""><a href="quanly_congno_danh-sach-cong-no-khach-hang.html"><i class="fa fa-hand-o-right"></i> Công nợ khách hàng</a></li>
                                <li class=""><a href="quanly_congno_danh-sach-cong-no-cung-cap.html"><i class="fa fa-hand-o-right"></i> Công nợ nhà cung cấp</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-truck"></i> <span>Giao hàng</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class=""><a href="quanly_giaohang_thong-tin-lai-xe.html"><i class="fa fa-hand-o-right"></i> Thông tin lái xe</a></li>
                                <li class=""><a href="quanly_giaohang_thong-tin-nhan-vien-giao.html"><i class="fa fa-hand-o-right"></i> Nhân viên giao hàng</a></li>
                                <li class=""><a href="quanly_giaohang_thong-tin-xe-hang.html"><i class="fa fa-hand-o-right"></i> Thông tin xe hàng</a></li>
                                <li class=""><a href="quanly_giaohang_dinh-vi-xe-hang.html"><i class="fa fa-hand-o-right"></i> Định vị xe hàng</a></li>
                            </ul>
                        </li>

                        <li class="treeview menu-open active">
                            <a href="#">
                                <i class="fa fa-pencil-square"></i> <span>Báo cáo</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="quanly_baocao_ban-hang.html"><i class="fa fa-line-chart"></i> Bán hàng</a>
                                </li>
                                <li class="">
                                    <a href="quanly_baocao_doanh-thu.html"><i class="fa fa-line-chart"></i> Doanh thu</a>
                                </li>

                                <li class="">
                                    <a href="quanly_baocao_cong-no-khach-hang.html"><i class="fa fa-line-chart"></i> Công nợ khách hàng</a>
                                </li>

                                <li class="">
                                    <a href="quanly_baocao_cong-no-cung-cap.html"><i class="fa fa-line-chart"></i> Công nợ nhà cung cấp</a>
                                </li>

                            </ul>
                        </li>

                        <li class="treeview ">
                            <a href="#">
                                <i class="fa fa-database"></i> <span>Quản trị</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="">
                                    <a href="quanly_khachhang_danh-sach-khach-hang.html"><i class="fa fa-globe"></i> Danh sách khách hàng</a>
                                </li>
                                <li class="">
                                    <a href="quanly_cungcap_danh-sach-nha-cung-cap.html"><i class="fa fa-cubes"></i> Danh sách nhà cung cấp</a>
                                </li>
                                <li class="">
                                    <a href="quanly_nhanvien_danh-sach-nhan-vien.html"><i class="fa fa-users"></i> Danh sách nhân viên</a>
                                </li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-paper-plane"></i> Hàng hoá
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class=""><a href="quanly_hanghoa_danh-sach-danh-muc.html"><i class="fa fa-tags"></i> Danh mục</a></li>
                                        <li class=""><a href="quanly_hanghoa_danh-sach-san-pham.html"><i class="fa fa-anchor"></i> Sản phẩm</a></li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="quanly_nhanvien_danh-sach-nhan-vien.html"><i class="fa fa-cogs"></i> <a href="quanly_cai-dat.html"><i class="fa fa-cogs"></i> Cài đặt</a></a>
                                </li>

                            </ul>
                        </li>
                        <li class="">
                            <a href="quanly_quy-trinh-xu-ly.html">
                                <i class="fa fa-question-circle"></i> <span>Help</span>
                            </a>
                        </li>						
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="quanly_index.html"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="row" style="margin-left:0px; margin-right:0px; margin-top: 10px;">
                                    <div class="col-md-12">
                                        <h4>
                                            <b>Báo cáo bán hàng</b>
                                        </h4>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box">
                                    <div class="box-header with-border text-center menu-button">

                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Tạo Mới" data-placement="bottom" >
                                            <i class="fa fa-plus-square text-grey"></i>
                                            <span><strong>Tạo Mới</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                            <i class="fa fa-edit text-grey"></i>
                                            <span><strong>Sửa</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Lưu" data-placement="bottom">
                                            <i class="fa fa-save text-grey"></i>
                                            <span><strong>Lưu</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Hủy" data-placement="bottom">
                                            <i class="fa fa-close text-grey"></i>
                                            <span><strong>Hủy</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Chốt đơn" data-placement="bottom">
                                            <i class="fa fa-check-circle text-grey"></i>
                                            <span><strong>Chốt đơn</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Đổi trả" data-placement="bottom">
                                            <i class="fa fa-exchange text-grey"></i>
                                            <span><strong>Đổi trả</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Xem Trước" data-placement="bottom">
                                            <i class="fa fa-eye text-black"></i>
                                            <span><strong>Xem Trước</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn" data-toggle="tooltip" title="In" data-placement="bottom">
                                            <i class="fa fa-print text-blue"></i>
                                            <span><strong>In</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Import Excel" data-placement="bottom">
                                            <i class="fa fa-download text-grey"></i>
                                            <span><strong>Import Excel</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Xuất Excel" data-placement="bottom">
                                            <i class="fa fa-file-excel-o text-green"></i>
                                            <span><strong>Xuất Excel</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Xuất PDF" data-placement="bottom">
                                            <i class="fa fa-file-pdf-o text-gray"></i>
                                            <span><strong>Xuất PDF</strong></span>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="box-body">
                                    <div class="col-md-offset-3" style="display: inline-flex;padding-top: 20px; padding-bottom: 20px;">
                                        <label style="padding-right: 10px; padding-top: 7px;">Từ: </label>
                                        <div class="input-group week-select col-md-3 no-padding"> 
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" class="form-control" style="width: 150px" id="datepicker" value="01/01/2018">
                                        </div>
                                        <label style="padding-right: 10px; padding-top: 7px;padding-left:15px">Đến: </label>
                                        <div class="input-group week-select col-md-3 no-padding"> 
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" class="form-control" style="width: 150px" id="datepicker2" value="07/01/2018">
                                        </div>
                                    </div>

                            <!--        <div class="row">
                                        <div class="col-md-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h4><strong>DOANH THU BÁN HÀNG</strong></h4>
                                                            <div class="chart">
                                                                <!-- Sales Chart Canvas -->
                            <!--                                    <canvas id="lineChart" style="height: 300px;"></canvas>
                                                                <small>Đơn vị :<em> chục triệu VNĐ</em></small>
                                                            </div>
                                                            <!-- /.chart-responsive -->
                            <!--                            </div>
                                                        <!-- /.col -->
                            <!--                            <div class="col-md-6">
                                                            <h4><strong>SỐ ĐƠN HÀNG</strong></h4>				  
                                                            <div class="chart">
                                                                <!-- Sales Chart Canvas -->
                             <!--                                   <canvas id="lineChart2" style="height: 300px;"></canvas>
                                                                <small>Đơn vị :<em> Số đơn</em></small>
                                                            </div>
                                                            <!-- /.chart-responsive -->
                            <!--                            </div>
                                                        <!-- /.col -->
                            <!--                        </div>
                                                    <!-- /.row -->
                            <!--                    </div>
                                                <!-- ./box-body -->
                            <!--                    <div class="box-footer">
                                                    <div class="col-sm-offset-5">
                                                        <div style="width: 13px; height: 13px; background-color: rgba(221, 41, 13, 1); display: inline-block;"></div>
                                                        <strong>Tháng 11</strong>
                                                        <div class="col-sm-offset-1" style="width: 13px; height: 13px; background-color: rgba(15,224,15,1); display: inline-block;"></div>
                                                        <strong>Tháng 12</strong>
                                                    </div>
                                                </div>
                                                <div class="box-footer">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-xs-6">
                                                            <div class="description-block border-right">
                                                                <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 15%</span>
                                                                <h5 class="description-header">10,625,414</h5>
                                                                <span class="description-text">DOANH THU BÁN HÀNG</span>
                                                            </div>
                                                            <!-- /.description-block -->
                             <!--                           </div>
                                                        <!-- /.col -->
                             <!--                           <div class="col-sm-6 col-xs-6">
                                                            <div class="description-block border-right">
                                                                <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 11.25%</span>
                                                                <h5 class="description-header">9</h5>
                                                                <span class="description-text">SỐ ĐƠN HÀNG</span>
                                                            </div>
                                                            <!-- /.description-block -->
                            <!--                            </div>
                                                        <!-- /.col -->
                            <!--                        </div>
                                                    <!-- /.row -->
                            <!--                    </div>
                                                <!-- /.box-footer -->
                                <!--            </div>
                                            <!-- /.box -->
                                    <!--    </div>
                                        <!-- /.col -->
                           <!--         </div>
                                    <!-- /.row -->

                                    <div class="row" style="margin-top: 30px;">
                                        <fieldset class="col-md-12">
                                            <legend style="font-size: 17px"><b>Tổng quan bán hàng</b></legend>
                                            <table id="example1" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Báo cáo</th>
                                                        <th>Chỉ số đã đạt</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Tổng số đơn đã tạo</td>
                                                        <td style="text-align: right; padding-right: 30%">150</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Số đơn đã hoàn thành</td>
                                                        <td style="text-align: right; padding-right: 30%">120</td>
                                                    </tr>
                                                     <tr>
                                                        <td>3</td>
                                                        <td>Số đơn đang xử lý</td>
                                                        <td style="text-align: right; padding-right: 30%">120</td>
                                                    </tr>
													 <tr>
                                                        <td>4</td>
                                                        <td>Số đơn đã huỷ</td>
                                                        <td style="text-align: right; padding-right: 30%">120</td>
                                                    </tr>
													 <tr>
                                                        <td>5</td>
                                                        <td>Tổng doanh thu</td>
                                                        <td style="text-align: right; padding-right: 30%">120,000,000</td>
                                                    </tr>
                                                </tbody>
                                               
                                            </table>
                                        </fieldset>
                                    </div>

                    <!--                <div class="row" style="margin-top: 30px;">
                                        <fieldset class="col-md-12">
                                            <legend style="font-size: 17px"><b>Chi tiết PO</b></legend>
                                            <table id="example2" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>PO no</th>
                                                        <th>PI no</th>
                                                        <th>Nhà cung cấp</th>
                                                        <th>Ngày tạo</th>
                                                        <th>Tổng tiền</th>
                                                        <th>Ghi chú</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <a href="quanly_hanghoa_chi-tiet-dot-nhap-hang.html">11-11/2017/TSB</a>
                                                        </td>
                                                        <td>
                                                            <a href="quanly_hanghoa_chi-tiet-PI.html">M01-121629-1</a>
                                                        </td>
                                                        <td>LS Industrial Systems Co., Ltd.</td>
                                                        <td class="text-center">20-12-2017</td>
                                                        <td class="text-right">15,069,500</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <a href="quanly_hanghoa_chi-tiet-dot-nhap-hang.html">12-11/2017/TSB</a>
                                                        </td>
                                                        <td>
                                                            <a href="quanly_hanghoa_chi-tiet-PI.html">M01-121629-1</a>
                                                        </td>
                                                        <td>LS Industrial Systems Co., Ltd.</td>
                                                        <td class="text-center">17-11-2017</td>
                                                        <td class="text-right">82,735,872</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>
                                                            <a href="quanly_hanghoa_chi-tiet-dot-nhap-hang.html">13-11/2017/TSB</a>
                                                        </td>
                                                        <td>
                                                            <a href="quanly_hanghoa_chi-tiet-PI.html">M01-121629-1</a>
                                                        </td>
                                                        <td>LS Industrial Systems Co., Ltd.</td>
                                                        <td class="text-center">16-09-2017</td>
                                                        <td class="text-right">41,735,872</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>
                                                            <a href="quanly_hanghoa_chi-tiet-dot-nhap-hang.html">11-12/2017/TSB</a>
                                                        </td>
                                                        <td>
                                                            <a href="quanly_hanghoa_chi-tiet-PI.html">M01-121629-1</a>
                                                        </td>
                                                        <td>Thái Sơn Nam</td>
                                                        <td class="text-center">16-08-2017</td>
                                                        <td class="text-right">5,990,800</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>
                                                            <a href="quanly_hanghoa_chi-tiet-dot-nhap-hang.html">02-11/2017/TSB</a>
                                                        </td>
                                                        <td>
                                                            <a href="quanly_hanghoa_chi-tiet-PI.html">M01-121629-1</a>
                                                        </td>
                                                        <td>Thái Sơn Nam</td>
                                                        <td class="text-center">15-08-2017</td>
                                                        <td class="text-right">20,590,000</td>
                                                        <td></td>
                                                    </tr>

                                                </tbody>
                                                <tfoot></tfoot>
                                            </table>
                                        </fieldset>
                                    </div>
									
									-->

                                    <div class="row" style="margin-top: 30px;">
                                        <fieldset class="col-md-12">
                                            <legend style="font-size: 17px"><b>Phân hệ phân phối</b></legend>
                                            <table id="example3" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Tên Nhân Viên</th>
                                                        <th>Tổng đơn hàng</th>
                                                        <th>Tổng giá trị</th>
                                                        <th>Ghi chú</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Lã Mạnh Đạt</a>
                                                        </td>
                                                        <td class="text-center">20</td>
                                                        <td class="text-right" style="padding-right:15%">15,069,500</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Nguyễn Văn Minh</a>
                                                        </td>
                                                        <td class="text-center">25</td>
                                                        <td class="text-right" style="padding-right:15%">82,735,872</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>
                                                            <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Lê Minh Trung</a>
                                                        </td>
                                                        <td class="text-center">12</td>
                                                        <td class="text-right" style="padding-right:15%">41,735,872</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>
                                                            <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Võ Văn Linh</a>
                                                        </td>
                                                        <td class="text-center">5</td>
                                                        <td class="text-right" style="padding-right:15%">5,990,800</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>
                                                            <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Nguyễn Minh Trường</a>
                                                        </td>
                                                        <td class="text-center">9</td>
                                                        <td class="text-right" style="padding-right:15%">20,590,000</td>
                                                        <td></td>
                                                    </tr>

                                                </tbody>
                                                <tfoot></tfoot>
                                            </table>
                                        </fieldset>
                                    </div>

                                    <div class="row" style="margin-top: 30px;">
                                        <fieldset class="col-md-12">
                                            <legend style="font-size: 17px"><b>Phân hệ kế toán</b></legend>
                                            <table id="example4" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Tên Nhân Viên</th>
                                                        <th>Tổng đơn hàng</th>
                                                        <th>Thời gian giải quyết trung bình</th>
                                                        <th>Ghi chú</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Lã Mạnh Đạt</a>
                                                        </td>
                                                        <td class="text-center">20</td>
                                                        <td class="text-center">2h30p</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Nguyễn Văn Minh</a>
                                                        </td>
                                                        <td class="text-center">25</td>
                                                        <td class="text-center">1h30p</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>
                                                            <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Lê Minh Trung</a>
                                                        </td>
                                                        <td class="text-center">12</td>
                                                        <td class="text-center">30p</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>
                                                            <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Võ Văn Linh</a>
                                                        </td>
                                                        <td class="text-center">5</td>
                                                        <td class="text-center">1h20p</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>
                                                            <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Nguyễn Minh Trường</a>
                                                        </td>
                                                        <td class="text-center">9</td>
                                                        <td class="text-center">3h</td>
                                                        <td></td>
                                                    </tr>

                                                </tbody>
                                                <tfoot></tfoot>
                                            </table>
                                        </fieldset>
                                    </div>
                                    <div class="row" style="margin-top: 30px;">
                                        <fieldset class="col-md-12">
                                            <legend style="font-size: 17px"><b>Phân hệ hàng hóa</b></legend>
                                            <table id="example5" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Tên Nhân Viên</th>
                                                        <th>Tổng đơn hàng</th>
                                                        <th>Thời gian giải quyết trung bình</th>
                                                        <th>Ghi chú</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Lã Mạnh Đạt</a>
                                                        </td>
                                                        <td class="text-center">20</td>
                                                        <td class="text-center">2h30p</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Nguyễn Văn Minh</a>
                                                        </td>
                                                        <td class="text-center">25</td>
                                                        <td class="text-center">1h30p</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>
                                                            <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Lê Minh Trung</a>
                                                        </td>
                                                        <td class="text-center">12</td>
                                                        <td class="text-center">30p</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>
                                                            <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Võ Văn Linh</a>
                                                        </td>
                                                        <td class="text-center">5</td>
                                                        <td class="text-center">1h20p</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>
                                                            <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Nguyễn Minh Trường</a>
                                                        </td>
                                                        <td class="text-center">9</td>
                                                        <td class="text-center">3h</td>
                                                        <td></td>
                                                    </tr>

                                                </tbody>
                                                <tfoot></tfoot>
                                            </table>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Copyright &copy; 2017 <a href="http://www.thaisonbac.com.vn/">Bản quyền thuộc Thái Sơn Bắc</a>.</strong>
            </footer>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 3 -->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="bower_components/fastclick/lib/fastclick.js"></script>
        <!-- bootstrap datepicker -->
        <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <!-- ChartJS -->
        <script src="dist/js/Chart.bundle.js"></script>
        <!-- DataTables -->
        <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <!-- SlimScroll -->
        <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- Page script -->
        <script>
            $(function () {
                //Date picker
                $('#datepicker').datepicker({
                    autoclose: true
                });
                $('#datepicker2').datepicker({
                    autoclose: true
                });
            });
            //Initialize Select2 Elements
            $('.select2').select2();

        </script>
        <script>
            new Chart(document.getElementById("lineChart"), {
                type: 'line',
                data: {
                    datasets: [{
                            data: [{
                                    x: 1,
                                    y: 3
                                },
                                {
                                    x: 7,
                                    y: 1.1
                                },
                                {
                                    x: 15,
                                    y: 3.5
                                }, {
                                    x: 20,
                                    y: 2.5
                                }, {
                                    x: 28,
                                    y: 4.1
                                }],
                            label: "Tháng 12",
                            borderColor: "#33FF33",
                            backgroundColor: "#33FF33",
                            fill: false
                        }, {
                            data: [{
                                    x: 1,
                                    y: 1.5
                                }, {
                                    x: 18,
                                    y: 3.2
                                }, {
                                    x: 22,
                                    y: 3.4
                                }, {
                                    x: 31,
                                    y: 3
                                }],
                            label: "Tháng 11",
                            borderColor: "#EE0000",
                            backgroundColor: "#EE0000",
                            fill: false
                        }
                    ]
                },
                options: {
                    legend: {display: false},
                    hover: {
                        mode: 'nearest',
                        intersect: true
                    },
                    elements: {
                        line: {
                            tension: 0, // disables bezier curves
                        }
                    },
                    scales: {
                        yAxes: [{
                                ticks: {
                                    min: 0,
                                    stepSize: 1,
                                    max: 5
                                }
                            }],
                        xAxes: [{
                                type: "linear",
                                ticks: {
                                    min: 1,
                                    stepSize: 5,
                                    max: 31
                                }
                            }, ],
                    }
                }
            });

            new Chart(document.getElementById("lineChart2"), {
                type: 'line',
                data: {
                    datasets: [{
                            data: [{
                                    x: 1,
                                    y: 3
                                },
                                {
                                    x: 7,
                                    y: 1
                                },
                                {
                                    x: 15,
                                    y: 3
                                }, {
                                    x: 20,
                                    y: 2
                                }, {
                                    x: 28,
                                    y: 4
                                }],
                            label: "Tháng 12",
                            borderColor: "#33FF33",
                            backgroundColor: "#33FF33",
                            fill: false
                        }, {
                            data: [{
                                    x: 1,
                                    y: 1
                                }, {
                                    x: 18,
                                    y: 3
                                }, {
                                    x: 22,
                                    y: 3
                                }, {
                                    x: 31,
                                    y: 4
                                }],
                            label: "Tháng 11",
                            borderColor: "#EE0000",
                            backgroundColor: "#EE0000",
                            fill: false
                        }
                    ]
                },
                options: {
                    legend: {display: false},
                    hover: {
                        mode: 'nearest',
                        intersect: true
                    },
                    elements: {
                        line: {
                            tension: 0 // disables bezier curves
                        }
                    },
                    scales: {
                        yAxes: [{
                                ticks: {
                                    min: 0,
                                    stepSize: 1,
                                    max: 5
                                }
                            }],
                        xAxes: [{
                                type: "linear",
                                ticks: {
                                    min: 1,
                                    stepSize: 5,
                                    max: 31
                                }
                            }]
                    }
                }
            });

            new Chart(document.getElementById("lineChart3"), {
                type: 'line',
                data: {
                    datasets: [{
                            data: [{
                                    x: 1,
                                    y: 3
                                },
                                {
                                    x: 7,
                                    y: 1.1
                                },
                                {
                                    x: 15,
                                    y: 3.5
                                }, {
                                    x: 20,
                                    y: 2.5
                                }, {
                                    x: 28,
                                    y: 4.1
                                }],
                            label: "Tháng 12",
                            borderColor: "#33FF33",
                            backgroundColor: "#33FF33",
                            fill: false
                        }, {
                            data: [{
                                    x: 1,
                                    y: 1.5
                                }, {
                                    x: 18,
                                    y: 3.2
                                }, {
                                    x: 22,
                                    y: 3.4
                                }, {
                                    x: 31,
                                    y: 3
                                }],
                            label: "Tháng 11",
                            borderColor: "#EE0000",
                            backgroundColor: "#EE0000",
                            fill: false
                        }
                    ]
                },
                options: {
                    legend: {display: false},
                    hover: {
                        mode: 'nearest',
                        intersect: true
                    },
                    elements: {
                        line: {
                            tension: 0, // disables bezier curves
                        }
                    },
                    scales: {
                        yAxes: [{
                                ticks: {
                                    min: 0,
                                    stepSize: 1,
                                    max: 5
                                }
                            }],
                        xAxes: [{
                                type: "linear",
                                ticks: {
                                    min: 1,
                                    stepSize: 5,
                                    max: 31
                                }
                            }, ],
                    }
                }
            });

            new Chart(document.getElementById("lineChart4"), {
                type: 'line',
                data: {
                    datasets: [{
                            data: [{
                                    x: 1,
                                    y: 3
                                },
                                {
                                    x: 7,
                                    y: 1
                                },
                                {
                                    x: 15,
                                    y: 3
                                }, {
                                    x: 20,
                                    y: 2
                                }, {
                                    x: 28,
                                    y: 4
                                }],
                            label: "Tháng 12",
                            borderColor: "#33FF33",
                            backgroundColor: "#33FF33",
                            fill: false
                        }, {
                            data: [{
                                    x: 1,
                                    y: 1
                                }, {
                                    x: 18,
                                    y: 3
                                }, {
                                    x: 22,
                                    y: 3
                                }, {
                                    x: 31,
                                    y: 4
                                }],
                            label: "Tháng 11",
                            borderColor: "#EE0000",
                            backgroundColor: "#EE0000",
                            fill: false
                        }
                    ]
                },
                options: {
                    legend: {display: false},
                    hover: {
                        mode: 'nearest',
                        intersect: true
                    },
                    elements: {
                        line: {
                            tension: 0 // disables bezier curves
                        }
                    },
                    scales: {
                        yAxes: [{
                                ticks: {
                                    min: 0,
                                    stepSize: 1,
                                    max: 5
                                }
                            }],
                        xAxes: [{
                                type: "linear",
                                ticks: {
                                    min: 1,
                                    stepSize: 5,
                                    max: 31
                                }
                            }]
                    }
                }
            });
        </script>
        <script>
            $(function () {
                $('#example1').DataTable({
                    'paging': true,
                    'lengthChange': true,
                    'searching': false,
                    'ordering': true,
                    'info': true,
                    'autoWidth': true,
                    'language': {
                        "info": "Đang hiển thị _START_ tới _END_ tổng số _TOTAL_ kết quả",
                        "lengthMenu": "Hiển thị _MENU_ kết quả",
                        "paginate": {
                            "first": "Trang đầu",
                            "last": "Trang cuối",
                            "next": "Tiếp",
                            "previous": "Trước"
                        }
                    }
                });
                $('#example2').DataTable({
                    'paging': true,
                    'lengthChange': true,
                    'searching': false,
                    'ordering': true,
                    'info': true,
                    'autoWidth': true,
                    'language': {
                        "info": "Đang hiển thị _START_ tới _END_ tổng số _TOTAL_ kết quả",
                        "lengthMenu": "Hiển thị _MENU_ kết quả",
                        "paginate": {
                            "first": "Trang đầu",
                            "last": "Trang cuối",
                            "next": "Tiếp",
                            "previous": "Trước"
                        }
                    }
                });
                $('#example3').DataTable({
                    'paging': true,
                    'lengthChange': true,
                    'searching': false,
                    'ordering': true,
                    'info': true,
                    'autoWidth': true,
                    'language': {
                        "info": "Đang hiển thị _START_ tới _END_ tổng số _TOTAL_ kết quả",
                        "lengthMenu": "Hiển thị _MENU_ kết quả",
                        "paginate": {
                            "first": "Trang đầu",
                            "last": "Trang cuối",
                            "next": "Tiếp",
                            "previous": "Trước"
                        }
                    }
                });
                $('#example4').DataTable({
                    'paging': true,
                    'lengthChange': true,
                    'searching': false,
                    'ordering': true,
                    'info': true,
                    'autoWidth': true,
                    'language': {
                        "info": "Đang hiển thị _START_ tới _END_ tổng số _TOTAL_ kết quả",
                        "lengthMenu": "Hiển thị _MENU_ kết quả",
                        "paginate": {
                            "first": "Trang đầu",
                            "last": "Trang cuối",
                            "next": "Tiếp",
                            "previous": "Trước"
                        }
                    }
                });
                $('#example5').DataTable({
                    'paging': true,
                    'lengthChange': true,
                    'searching': false,
                    'ordering': true,
                    'info': true,
                    'autoWidth': true,
                    'language': {
                        "info": "Đang hiển thị _START_ tới _END_ tổng số _TOTAL_ kết quả",
                        "lengthMenu": "Hiển thị _MENU_ kết quả",
                        "paginate": {
                            "first": "Trang đầu",
                            "last": "Trang cuối",
                            "next": "Tiếp",
                            "previous": "Trước"
                        }
                    }
                });

            });
        </script>        
    </body>
</html>