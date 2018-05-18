<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Báo cáo doanh thu</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css'>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css'>
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
        <!-- bootstrap datepicker -->
        <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
                folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="../dist/css/back-to-top.css">
        <link rel="stylesheet" href="../dist/css/font/GoogleFont.css">
        <style>
            .week-select .input-group-addon {
                cursor: pointer;
            }

            .datepicker table tr td.week{
                background: #e9e9e9;
            }

            .datepicker table tr td.week-active,
            .datepicker table tr td.week-active:hover,
            .datepicker table tr td.week-active td.week,
            .datepicker table tr td.week-active td.week:hover,
            .datepicker table tr td.week-active td:hover{
                background-color: #006dcc;
                background-image: -moz-linear-gradient(top, #0088cc, #0044cc);
                background-image: -ms-linear-gradient(top, #0088cc, #0044cc);
                background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
                background-image: -webkit-linear-gradient(top, #0088cc, #0044cc);
                background-image: -o-linear-gradient(top, #0088cc, #0044cc);
                background-image: linear-gradient(top, #0088cc, #0044cc);
                background-repeat: repeat-x;
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0088cc', endColorstr='#0044cc', GradientType=0);
                border-color: #0044cc #0044cc #002a80;
                border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
                filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
                color: #fff;
                text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
            }

            .button {
                width: 50px;
                height: 18px;
                padding-right: 25px;
                border: none;
            }
            .chart {
                position: static;
                overflow: hidden;
                width: 90%;
                margin-left: 25px;
            }
            #example1 {
                background-color: rgb(240, 240, 240);
            }
            #example1 thead tr th {
                vertical-align: middle !important;
                text-align: center;
                background-color: #3c8dbc;
                color: #fff;
            }

            tfoot {
                color: white;
                text-align: center;
                font-size: 15px;
                font-weight: bold;
                background-color: #544d61;
            }
            /* Style the tab */
            .tab {
                overflow: hidden;
                border: 1px solid #ccc;
                background-color: #f1f1f1;
            }

            /* Style the buttons inside the tab */
            .tab button {
                background-color: inherit;
                float: left;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 14px 16px;
                transition: 0.3s;
                font-size: 17px;

            }
            .active{
                display:block;
            }

            /* Change background color of buttons on hover */
            .tab button:hover {
                background-color: #ddd;

            }

            /* Create an active/current tablink class */
            .tab button.active {
                background-color: #ccc;
            }

            /* Style the tab content */
            .tabcontent {
                display: none;
                padding: 6px 12px;

                border-top: none;
            }
            #myChart {
                height: 100%;
                width: 100%;
            }
            .noBorder{
                border-right-style:hidden !important;
            }
            .noneDisplay{
                display:none;
            }
            .menu-button {
                background-color: #fcf9f9; 
                margin-top: 20px;
                padding-top:20px;
                padding-right:25px;
            }
        </style>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="../dist/css/font/GoogleFont.css">


    </head>
    <body class="hold-transition skin-blue-light sidebar-mini fixed">
        <div class="wrapper">

            <header class="main-header">

                <!-- Logo -->
                <a href="../phanphoi_index.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">LAP</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg" style="margin-left: -15px;">
                        <img style="width:60px; height:50px;margin-top: 5px" class="img-responsive pull-left" src="../dist/img/logo.png" alt="Photo">
                        <div style="margin-top: -5px">
                        <b style="margin-right: 35px;margin-bottom: 20px">Quản lý</b>
                        <span style="position: absolute; margin-top: 15px; margin-left: -100px; font-size: 14px;font-weight: bold"><small>Cửa hàng Laptop</small></span>
                        </div>
                    </span>

                </a>

                <nav class="navbar navbar-static-top">
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>

                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">Bạn có 0 thông báo mới</li>
                                    <li>
                                        <ul class="menu">

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
                                    <img src="../dist/img/user.jpeg" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Trinh Thai</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="../dist/img/user.jpeg" class="img-circle" alt="User Image">

                                        <p>Trinh Thai<small>Admin</small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="phanphoi_nguoidung_thong-tin-nguoi-dung.html" class="btn btn-default btn-flat">Hồ sơ</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="login.html" class="btn btn-default btn-flat">Thoát</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <a href="#" id="scrollContainer" class="navbar-custom-menu pull-left" data-toggle="modal" data-target="#noteModal">
                        <div id="scrollBox">

                        </div>
                    </a>
                </nav>
            </header>
            <aside class="main-sidebar">
                <section class="sidebar">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../dist/img/user.jpeg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Trinh Thai</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Trực tuyến</a>
                        </div>
                    </div>

                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="active">
                            <a href="../phanphoi_index.html">
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
                                <li class=""><a href="../phanphoi_donhang_lap-phieu.html"><i class="fa fa-edit"></i> Lập Phiếu</a></li>

                                <li class="">
                                    <a href="../phanphoi_donhang_danh-sach-phieu-dang-xu-ly.html">
                                        <i class="fa fa-list-alt"></i>
                                        <span>Phiếu đang xử lý</span>
                                        <span class="pull-right-container">
                                            <span class="label label-primary bg-green">1</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../phanphoi_donhang_danh-sach-phieu-hoan-thanh.html">
                                        <i class="fa fa-files-o"></i>
                                        <span>Phiếu đã hoàn thành</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../phanphoi_donhang_danh-sach-phieu-giu-hang.html">
                                        <i class="fa fa-book"></i>
                                        <span>Phiếu giữ hàng</span>
                                        <!--<span class="pull-right-container">-->
                                            <!--<span class="label pull-right bg-green">new</span>-->
                                            <!--<span class="label pull-right bg-red">2</span>-->
                                        <!--</span>-->
                                    </a>
                                </li>
                                <li class="">
                                    <a href="../phanphoi_donhang_lich-giao-hang-tong.html">
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
                                <li class=""><a href="../phanphoi_hanghoa_gia-hang-hoa.html"><i class="fa fa-dollar"></i> Giá hàng hóa</a></li>
                                <li class=""><a href="../phanphoi_hanghoa_ton-kho.html"><i class="fa fa-dropbox"></i> Hàng tồn kho</a></li>

                                <li class="treeview">
                                    <a href="#"><i class="fa fa-hand-o-right"></i> Nhập hàng
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class=""><a href="../phanphoi_hanghoa_tao-dot-nhap-kho.html"><i class="fa fa-edit"></i> Tạo đợt nhập mới</a></li>
                                        <li class=""><a href="../phanphoi_hanghoa_lich-su-nhap-hang.html"><i class="fa fa-table"></i> Lịch sử nhập hàng</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-pencil-square"></i> <span>Báo cáo</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="">
                                    <a href="phanphoi_baocao_doanh-thu.html"><i class="fa fa-line-chart"></i> Doanh thu</a>
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
                                    <a href="../phanphoi_khachhang_danh-sach-khach-hang.html"><i class="fa fa-users"></i> Danh sách khách hàng</a>
                                </li>
                                <li class="">
                                    <a href="../phanphoi_cungcap_danh-sach-nha-cung-cap.html"><i class="fa fa-users"></i> Danh sách nhà cung cấp</a>
                                </li>


                            </ul>
                        </li>
                        <!--<li class="">-->
                        <!--<a href="phanphoi_quy-trinh-xu-ly.html">-->
                        <!--<i class="fa fa-question-circle"></i> <span>Help</span>-->
                        <!--</a>-->
                        <!--</li>						-->
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb" style="float:left">
                        <li><a href="../phanphoi_index.html"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
                        <li><a href=""> Báo cáo</a></li>
                        <li><a href="phanphoi_baocao_doanh-thu.html"> Báo cáo doanh thu</a></li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content" style="margin-top: 15px">
                    <!-- main-row -->
                    <div class="row">
                        <!-- main-col -->
                        <div class="col-md-12">
                            <div class="box">
                                <div class="row" style="margin-left:0px; margin-right:0px; margin-top: 10px;">
                                    <div class="col-md-12">
                                        <h4>
                                            <b>Báo cáo doanh thu</b>
                                        </h4>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box">
                                    <div class="box-header with-border text-center menu-button">
                                     

                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Tạo Mới" data-placement="bottom">
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
                                        <a href="accountant_notification.html" class="btn btn-app custom-btn disabled" data-toggle="modal" title="Giao hàng" data-placement="bottom" data-target="#confirm-process">
                                            <i class="fa fa-check-circle text-grey"></i>
                                            <span><strong>Giao hàng</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Đổi trả" data-placement="bottom">
                                            <i class="fa fa-exchange text-grey"></i>
                                            <span><strong>Đổi trả</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn " data-toggle="tooltip" title="Xem trước" data-placement="bottom">
                                            <i class="fa fa-eye text-black"></i>
                                            <span><strong>Xem trước</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn" data-toggle="tootip" title="In" data-placement="bottom" data-target="#confirm-print">
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
                                        <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Xuất PDF" data-placement="bottom">
                                            <i class="fa fa-file-pdf-o text-red"></i>
                                            <span><strong>Xuất PDF</strong></span>
                                        </a>
                                    </div>
                                </div>
                                <hr>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <!-- custom tab -->
                                                    <div  class="nav-tabs-custom">
                                                        <div class="nav nav-tabs">
                                                            <ul class="nav nav-tabs">
                                                                <li class="active">
                                                                    <a href="#doanhThuTuan" data-toggle="tab" aria-expanded="true">Doanh thu tuần</a>
                                                                </li>
                                                                <li class="">
                                                                    <a href="#doanhThuThang" data-toggle="tab" aria-expanded="false">Doanh thu tháng</a>
                                                                </li>	
                                                                <li class="">
                                                                    <a href="#doanhThuNam" data-toggle="tab" aria-expanded="false">Doanh thu năm</a>
                                                                </li>										

                                                            </ul>
                                                        </div>
                                                        <div class="tab-content">
                                                            <!-- tab 1 -->
                                                            <div id="doanhThuTuan"  class="active tab-pane">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="box-header">
                                                                            <h3 class="text-center">DOANH THU TUẦN</h3>
                                                                        </div>
                                                                        <div class="box-body">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="box">
                                                                                        <div class="col-md-offset-3" style="display: inline-flex;padding-top: 20px">
                                                                                            <label style="padding-right: 56px; padding-top: 7px;">Từ: </label>
                                                                                            <div class="input-group week-select col-md-3 no-padding"> 
                                                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                                                <input type="text" class="form-control" style="width: 150px" name="week" value="01-01-2018">
                                                                                            </div>
                                                                                            <label style="padding-right: 10px; padding-top: 7px;padding-left:15px">Đến: </label>
                                                                                            <div class="input-group week-select col-md-3 no-padding"> 
                                                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                                                <input type="text" class="form-control" style="width: 150px" name="week" value="07-01-2018">
                                                                                            </div>
                                                                                        </div>	
                                                                                        <div class="col-md-offset-3" style="padding-bottom: 15px;padding-top: 20px;display: inline-flex">
                                                                                            <label style="padding-right: 10px; padding-top: 7px;">Danh mục: </label>
                                                                                            <select id="dropbox" class="form-control select2" style="width: 82%;">
                                                                                                <option selected="selected" value="1">Tất cả</option>
                                                                                                <option>CB - Aptomat</option>
                                                                                                <option>Inverter: Biến tần</option>
                                                                                                <option>Cáp thông tin</option>
                                                                                                <option>Công tắc ổ cắm</option>
                                                                                                <option>Busway - Thanh cái dẫn điện & MTR - Máy biến áp & RMU - Tủ trung thế</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>

                                                                                <!-- /.col -->
                                                                            </div>
                                                                            <!-- /.row -->
                                                                        </div>
                                                                        <div class="box-body">
                                                                            <div class="row">

                                                                                <div class="col-md-2"></div>
                                                                                <div class="box-body">
                                                                                    <div id="defaultChart">
                                                                                        <canvas id="lineChart1" style="height: 350px;width:800px;margin:0 auto"></canvas>
                                                                                        <small>Đơn vị :<em> chục triêụ VNĐ</em></small>
                                                                                    </div>
                                                                                    <div class="noneDisplay" id="cbAptomatChart">
                                                                                        <canvas  id="lineChart2" style="height: 350px;width:800px;margin:0 auto"></canvas>
                                                                                        <small>Đơn vị :<em> chục triêụ VNĐ</em></small>
                                                                                    </div>
                                                                                    <div class="noneDisplay" id="inventerChart">
                                                                                        <canvas  id="lineChart3" style="height: 350px;width:800px;margin:0 auto"></canvas>
                                                                                        <small>Đơn vị :<em> chục triêụ VNĐ</em></small>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-sm-offset-5">
                                                                                    <div style="width: 13px; height: 13px; background-color: rgba(221, 41, 13, 1); display: inline-block;"></div>
                                                                                    <strong>Nhập vốn</strong>
                                                                                    <div class="col-sm-offset-1" style="width: 13px; height: 13px; background-color: rgba(15,224,15,1); display: inline-block;"></div>
                                                                                    <strong>Xuất vốn</strong>
                                                                                    <div class="col-sm-offset-1" style="width: 13px; height: 13px; background-color: yellow; display: inline-block;"></div>
                                                                                    <strong>Bán cho khách</strong>
                                                                                </div>
                                                                                <div class="col-md-1"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>			
                                                                </div>							
                                                            </div>
                                                            <!-- tab 2 -->
                                                            <div id="doanhThuThang"  class="tab-pane">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="box-header">
                                                                            <h3 class="text-center">DOANH THU THÁNG</h3>
                                                                        </div>
                                                                        <div class="box-body">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="box">
                                                                                        <div class="col-md-offset-3" style="display: inline-flex;padding-top: 20px">
                                                                                            <label style="padding-right: 56px; padding-top: 7px;">Tháng: </label>
                                                                                            <div class="input-group week-select col-md-3 no-padding"> 
                                                                                                <select style="width: 100px" class="form-control select2">
                                                                                                    <option>1</option>
                                                                                                    <option>2</option>
                                                                                                    <option>3</option>
                                                                                                    <option>4</option> 
                                                                                                    <option>5</option> 
                                                                                                    <option>6</option> 
                                                                                                    <option>7</option>
                                                                                                    <option>8</option> 
                                                                                                    <option>9</option>
                                                                                                    <option>10</option>
                                                                                                    <option>11</option>
                                                                                                    <option>12</option>
                                                                                                </select>
                                                                                            </div>
                                                                                            <label style="padding-right: 10px;margin-left: 15px; padding-top: 7px;padding-left:15px">Năm: </label>
                                                                                            <div class="input-group week-select col-md-3 no-padding"> 
                                                                                                <select class="form-control select2" style="width: 100px">
                                                                                                    <option>2015</option>
                                                                                                    <option>2016</option>
                                                                                                    <option selected="">2017</option>
                                                                                                    <option>2018</option>
                                                                                                    <option>2019</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>	
                                                                                        <div class="col-md-offset-3" style="padding-bottom: 15px;padding-top: 20px;display: inline-flex">
                                                                                            <label style="padding-right: 10px; padding-top: 7px;">Danh mục: </label>
                                                                                            <select id="dropbox1" class="form-control select2" style="width: 48%;margin-left: 23px">
                                                                                                <option selected="selected" value="1">Tất cả</option>
                                                                                                <option>CB - Aptomat</option>
                                                                                                <option>Inverter: Biến tần</option>
                                                                                                <option>Cáp thông tin</option>
                                                                                                <option>Công tắc ổ cắm</option>
                                                                                                <option>Busway - Thanh cái dẫn điện & MTR - Máy biến áp & RMU - Tủ trung thế</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>

                                                                                <!-- /.col -->
                                                                            </div>
                                                                            <!-- /.row -->
                                                                        </div>
                                                                        <div class="box-body">
                                                                            <div class="row">

                                                                                <div class="col-md-2"></div>
                                                                                <div class="box-body">
                                                                                    <div id="defaultChart1">
                                                                                        <canvas id="lineChartThang1" style="height: 350px;width:800px;margin:0 auto"></canvas>
                                                                                        <small>Đơn vị :<em> trăm triêụ VNĐ</em></small>
                                                                                    </div>
                                                                                    <div class="noneDisplay" id="cbAptomatChart1">
                                                                                        <canvas  id="lineChartThang2" style="height: 350px;width:800px;margin:0 auto"></canvas>
                                                                                        <small>Đơn vị :<em> trăm triêụ VNĐ</em></small>
                                                                                    </div>
                                                                                    <div class="noneDisplay" id="inventerChart1">
                                                                                        <canvas  id="lineChartThang3" style="height: 350px;width:800px;margin:0 auto"></canvas>
                                                                                        <small>Đơn vị :<em> trăm triêụ VNĐ</em></small>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-sm-offset-5">
                                                                                    <div style="width: 13px; height: 13px; background-color: rgba(221, 41, 13, 1); display: inline-block;"></div>
                                                                                    <strong>Nhập vốn</strong>
                                                                                    <div class="col-sm-offset-1" style="width: 13px; height: 13px; background-color: rgba(15,224,15,1); display: inline-block;"></div>
                                                                                    <strong>Xuất vốn</strong>
                                                                                    <div class="col-sm-offset-1" style="width: 13px; height: 13px; background-color: yellow; display: inline-block;"></div>
                                                                                    <strong>Bán cho khách</strong>
                                                                                </div>
                                                                                <div class="col-md-1"></div>
                                                                            </div>
                                                                        </div>

                                                                    </div>			
                                                                </div>							
                                                            </div>
                                                            <!-- tab 3 -->
                                                            <div id="doanhThuNam" class="tab-pane" >
                                                                <div class="row">
                                                                    <div class="col-md-4 col-md-offset-4"> <h3>DOANH THU NĂM</h3></div>
                                                                </div>
                                                                <div class="box-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="box">
                                                                                <div class="col-md-offset-3" style="display: inline-flex;padding-top: 20px">
                                                                                    <label style="padding-right: 56px; padding-top: 7px;">Năm: </label>
                                                                                    <div class="input-group week-select col-md-3 no-padding"> 
                                                                                        <select style="width: 220px" class="form-control select2">
                                                                                            <option>2015</option>
                                                                                            <option>2016</option>
                                                                                            <option selected="">2017</option>
                                                                                            <option>2018</option>
                                                                                            <option>2019</option>
                                                                                        </select>
                                                                                    </div>
                                                                                   
                                                                                </div>	
                                                                                <div class="col-md-offset-3" style="padding-bottom: 15px;padding-top: 20px;display: inline-flex">
                                                                                    <label style="padding-right: 10px; padding-top: 7px;">Danh mục: </label>
                                                                                    <select id="dropbox3" class="form-control select2" style="width: 40%;margin-left: 14px">
                                                                                        <option selected="selected" value="1">Tất cả</option>
                                                                                        <option>CB - Aptomat</option>
                                                                                        <option>Inverter: Biến tần</option>
                                                                                        <option>Cáp thông tin</option>
                                                                                        <option>Công tắc ổ cắm</option>
                                                                                        <option>Busway - Thanh cái dẫn điện & MTR - Máy biến áp & RMU - Tủ trung thế</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                        <!-- /.col -->
                                                                    </div>
                                                                    <!-- /.row -->
                                                                </div>

                                                                <div class="row" >
                                                                    <div class="col-md-12">
                                                                        <div class="box-body">
                                                                            <div class="chart" id="defaultChart3">
                                                                                <!-- Sales Chart Canvas -->
                                                                                <canvas id="lineChartNam1" style="height: 500px;"></canvas>
                                                                                <small>Đơn vị :<em> Tỷ VNĐ</em></small>
                                                                            </div>
                                                                            <div class="chart noneDisplay" id="cbAptomatChart3">
                                                                                <!-- Sales Chart Canvas -->
                                                                                <canvas id="lineChartNam2" style="height: 500px;"></canvas>
                                                                                <small>Đơn vị :<em> Tỷ VNĐ</em></small>
                                                                            </div>
                                                                            <div class="chart noneDisplay" id="inventerChart3">
                                                                                <!-- Sales Chart Canvas -->
                                                                                <canvas id="lineChartNam3" style="height: 500px;"></canvas>
                                                                                <small>Đơn vị :<em> Tỷ VNĐ</em></small>
                                                                            </div>
                                                                            <div class="col-sm-offset-5">
                                                                                <div style="width: 13px; height: 13px; background-color: rgba(221, 41, 13, 1); display: inline-block;"></div>
                                                                                <strong>Nhập vốn</strong>
                                                                                <div class="col-sm-offset-1" style="width: 13px; height: 13px; background-color: rgba(15,224,15,1); display: inline-block;"></div>
                                                                                <strong>Xuất vốn</strong>
                                                                                <div class="col-sm-offset-1" style="width: 13px; height: 13px; background-color: yellow; display: inline-block;"></div>
                                                                                <strong>Bán cho khách</strong>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                    <!-- /.col -->
                                                                </div>
                                                                <!-- /.row -->
                                                                <!-- end chart -->
                                                                <!-- ./box-body -->
                                                                <!-- footer of bar chart -->
                                                                <div class="box-footer">
                                                                    <div class="row">
                                                                        <div class="col-sm-4 col-xs-6" style="margin-left:18% ; height : 100px;">
                                                                            <div class="description-block border-right" style="margin-top: 27px;">
                                                                                <h5 class="description-header"> 4,206,475,213VNĐ</h5>
                                                                                <span class="description-text">DOANH THU</span>
                                                                            </div>
                                                                            <!-- /.description-block -->
                                                                        </div>
                                                                        <div class="col-sm-4 col-xs-6">
                                                                            <div class="description-block" style="margin-top: 27px;">
                                                                                <h5 class="description-header">15,678,905,678 VNĐ</h5>
                                                                                <span class="description-text">TỔNG DOANH THU CẢ NĂM</span>
                                                                            </div>
                                                                            <!-- /.description-block -->
                                                                        </div>
                                                                        <!-- /.col -->                                     
                                                                    </div>
                                                                    <!-- /.row -->
                                                                </div>
                                                                <!-- end footer of bar chart -->
                                                                <!-- /.box-footer -->
                                                            </div> 

                                                        </div>
                                                    </div>
                                                    <!-- /.custom tab -->
                                                </div>	
                                                <!-- end div chung cho chart -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- div chung cho tab -->

                            <!--<div class="row">-->
                                <!--<div class="col-xs-12">-->
                                    <!--<div class="box">-->
                                        <!--<div class="box-header text-center">-->
                                            <!--<h3>Phần trăm doanh thu ngành hàng</h3>-->
                                        <!--</div>-->
                                        <!--<div id="donutchart" style="width: 900px; height: 500px;margin:0 auto"></div>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->

                            <!--<div class="row">-->
                                <!--<div class="col-xs-12">-->
                                    <!--<div class="box">								-->

                                        <!--<div class="box-body">-->
                                            <!--<fieldset>-->
                                                <!--<span class="pull-left" style="font-size:17px"><b>CHI TIẾT DOANH THU</b></span><br>-->
                                                <!--<h5><i><a href="phanphoi_baocao_chi-tiet-doanh-thu.html">Xem chi tiết</a></i></h5>-->
                                                <!--<table id="example1" class="table table-bordered table-striped">-->
                                                    <!--<thead>-->
                                                        <!--<tr>-->
                                                            <!--<th>STT</th>-->
                                                            <!--<th>DANH MỤC</th>-->
                                                            <!--<th>NHẬP VỐN</th>-->
                                                            <!--<th>XUẤT VỐN</th>-->
                                                            <!--<th>BÁN CHO KHÁCH</th>-->
                                                            <!--<th>LỢI NHUẬN</th>-->
                                                        <!--</tr>-->
                                                    <!--</thead>-->
                                                    <!--<tbody>-->
                                                        <!--<tr>-->
                                                            <!--<td style="text-align:center">1</td>-->
                                                            <!--<td style="text-align:left">CB-Aptomat</td>-->
                                                            <!--<td style="text-align:right">2,780,194,928</td>-->
                                                            <!--<td style="text-align:right">4,701,058,266</td>-->
                                                            <!--<td style="text-align:right">5,906,230,000</td>-->
                                                            <!--<td style="text-align:right">1,205,171,734</td>-->
                                                        <!--</tr>-->
                                                        <!--<tr>-->
                                                            <!--<td style="text-align:center">2</td>-->
                                                            <!--<td style="text-align:left">Inventer-Biến tần</td>-->
                                                            <!--<td style="text-align:right">5,345,194,562</td>-->
                                                            <!--<td style="text-align:right">4,561,398,000</td>-->
                                                            <!--<td style="text-align:right">5,000,000,000</td>-->
                                                            <!--<td style="text-align:right">438,602,000</td>-->
                                                        <!--</tr>-->
                                                        <!--<tr>-->
                                                            <!--<td style="text-align:center">3</td>-->
                                                            <!--<td style="text-align:left">Cáp thông tin</td>-->
                                                            <!--<td style="text-align:right">2,780,194,928</td>-->
                                                            <!--<td style="text-align:right">1,700,000,000</td>-->
                                                            <!--<td style="text-align:right">2,500,000,000</td>-->
                                                            <!--<td style="text-align:right">800,000,000</td>-->
                                                        <!--</tr>-->
                                                        <!--<tr>-->
                                                            <!--<td style="text-align:center">4</td>-->
                                                            <!--<td style="text-align:left">Công tắc ổ cắm</td>-->
                                                            <!--<td style="text-align:right">4,561,398,000</td>-->
                                                            <!--<td style="text-align:right">5,345,194,562</td>-->
                                                            <!--<td style="text-align:right">6,906,230,000</td>-->
                                                            <!--<td style="text-align:right">1,561,035,438</td>-->
                                                        <!--</tr>-->
                                                        <!--<tr>-->
                                                            <!--<td style="text-align:center">5</td>-->
                                                            <!--<td style="text-align:left">Busway - Thanh cái dẫn điện & MTR - Máy biến áp & RMU - Tủ trung thế</td>-->
                                                            <!--<td style="text-align:right">2,780,194,238</td>-->
                                                            <!--<td style="text-align:right">3,000,000,000</td>-->
                                                            <!--<td style="text-align:right">4,906,230,000</td>-->
                                                            <!--<td style="text-align:right">1,906,230,000</td>-->
                                                        <!--</tr>-->
                                                    <!--</tbody>-->
                                                    <!--<tfoot>-->
                                                        <!--<tr>-->
                                                            <!--<td class="noBorder"></td>-->
                                                            <!--<td style="text-align:center">Tổng cộng</td>-->
                                                            <!--<td style="text-align:right">16,931,521,672</td>-->
                                                            <!--<td style="text-align:right">19,234,567,787</td>-->
                                                            <!--<td style="text-align:right">24,245,331,342</td>-->
                                                            <!--<td style="text-align:right">4,231,316,000</td>-->
                                                        <!--</tr>-->
                                                    <!--</tfoot>-->
                                                <!--</table>-->
                                            <!--</fieldset>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                        </div>
                </section>
                <!-- /.content -->

            </div>

            <!-- /.content-wrapper -->

            <footer class="main-footer">
                <a href="#0" class="cd-top">Top</a>
            </footer>
        </div>
        <!-- jQuery 3 -->
        <script src="../bower_components/jquery/dist/jquery.min.js"></script>
        <script src="../dist/js/back-to-top.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="../bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="../dist/js/adminlte.min.js"></script>
        <!-- Sparkline -->
        <script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <!-- jvectormap  -->
        <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- SlimScroll -->
        <script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- ChartJS -->
        <script src="../dist/js/Chart.bundle.js"></script>
        <!-- bootstrap datepicker -->
        <script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <!-- AdminLTE for demo purposes -->
        <script src="../dist/js/demo.js"></script>
        <!-- DataTables -->
        <script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

        <script src='../dist/js/pages/cong-no/bootstrap-datepicker.js'></script>
        <script src='../dist/js/pages/cong-no/moment.js'></script>

        <script>
            new Chart(document.getElementById("lineChartNam1"), {
                type: 'line',
                data: {
                    labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
                    datasets: [{
                            data: [12, 15, 15.2, 13, 17, 10, 7, 9, 13, 15, 17, 14],
                            label: "Xuất vốn",
                            borderColor: "#33FF33",
                            backgroundColor: "#33FF33",
                            fill: false
                        }, {
                            data: [17, 13.5, 12.5, 15, 12.3, 13.5, 16.5, 10, 11, 17, 15, 17],
                            label: "Nhập vốn",
                            borderColor: "#EE0000",
                            backgroundColor: "#EE0000",
                            fill: false
                        }, {
                            data: [12, 15, 12.5, 16, 14.3, 10.5, 12.5, 18.5, 14, 11, 15, 13.1],
                            label: "Nhập vốn",
                            borderColor: "yellow",
                            backgroundColor: "yellow",
                            fill: false
                        }

                    ]
                },
                options: {
                    legend: {display: false}, tooltips: {
                        mode: 'index',
                        intersect: false,
                    },
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
                                    stepSize: 2,
                                    max: 20
                                }
                            }]
                    }
                }
            });
            new Chart(document.getElementById("lineChartNam2"), {
                type: 'line',
                data: {
                    labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
                    datasets: [{
                            data: [3, 1.1, 5, 7, 2, 6, 9, 7.8, 8, 3, 7, 10],
                            label: "Xuất vốn",
                            borderColor: "#33FF33",
                            backgroundColor: "#33FF33",
                            fill: false
                        }, {
                            data: [14, 3.5, 2.5, 3, 3, 3.5, 6.5, 6.5, 1, 1, 5, 3],
                            label: "Nhập vốn",
                            borderColor: "#EE0000",
                            backgroundColor: "#EE0000",
                            fill: false
                        },
                        {
                            data: [2, 5, 2.5, 6, 4.3, 3.5, 6.5, 8.5, 4, 1, 5, 4],
                            label: "Nhập vốn",
                            borderColor: "yellow",
                            backgroundColor: "yellow",
                            fill: false
                        }

                    ]
                },
                options: {
                    legend: {display: false},
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                    },
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
                                    stepSize: 2,
                                    max: 20
                                }
                            }]
                    }
                }
            });

            new Chart(document.getElementById("lineChartNam3"), {
                type: 'line',
                data: {
                    labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
                    datasets: [{
                            data: [16, 11, 2, 13, 4, 6, 7, 2, 3, 3, 7, 13],
                            label: "Xuất vốn",
                            borderColor: "#33FF33",
                            backgroundColor: "#33FF33",
                            fill: false
                        }, {
                            data: [17, 3.5, 2.5, 5, 2.3, 3.5, 6.5, 6.5, 10, 9.1, 5, 3],
                            label: "Nhập vốn",
                            borderColor: "#EE0000",
                            backgroundColor: "#EE0000",
                            fill: false
                        },
                        {
                            data: [5.6, 9, 2.5, 6, 4.3, 3.5, 6.5, 8.5, 4, 1, 5, 4],
                            label: "Nhập vốn",
                            borderColor: "yellow",
                            backgroundColor: "yellow",
                            fill: false
                        }

                    ]
                },
                options: {
                    legend: {display: false},
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                    },
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
                                    stepSize: 2,
                                    max: 20
                                }
                            }]
                    }
                }
            });


        </script>
        <script>
            function autoSelectDate() {
                var startDate = $('#startDate').val();
            }
            ;
            $('#dropbox').change(function () {
                var selected = $('#dropbox :selected').text();
                if (selected === 'CB - Aptomat') {
                    $('#cbAptomatChart').removeClass("noneDisplay");
                    $('#defaultChart').addClass("noneDisplay");
                    $('#inventerChart').addClass("noneDisplay");
                } else if (selected === 'Inverter: Biến tần') {
                    $('#inventerChart').removeClass("noneDisplay");
                    $('#cbAptomatChart').addClass("noneDisplay");
                    $('#defaultChart').addClass("noneDisplay");
                } else {

                    $('#defaultChart').removeClass("noneDisplay");
                    $('#cbAptomatChart').addClass("noneDisplay");
                    $('#inventerChart').addClass("noneDisplay");
                }
            });
            $('#dropbox1').change(function () {
                var selected = $('#dropbox1 :selected').text();
                if (selected === 'CB - Aptomat') {
                    $('#cbAptomatChart1').removeClass("noneDisplay");
                    $('#defaultChart1').addClass("noneDisplay");
                    $('#inventerChart1').addClass("noneDisplay");
                } else if (selected === 'Inverter: Biến tần') {
                    $('#inventerChart1').removeClass("noneDisplay");
                    $('#cbAptomatChart1').addClass("noneDisplay");
                    $('#defaultChart1').addClass("noneDisplay");
                } else {

                    $('#defaultChart1').removeClass("noneDisplay");
                    $('#cbAptomatChart1').addClass("noneDisplay");
                    $('#inventerChart1').addClass("noneDisplay");
                }
            });
            $('#dropbox3').change(function () {
                var selected = $('#dropbox3 :selected').text();
                if (selected === 'CB - Aptomat') {
                    $('#cbAptomatChart3').removeClass("noneDisplay");
                    $('#defaultChart3').addClass("noneDisplay");
                    $('#inventerChart3').addClass("noneDisplay");
                } else if (selected === 'Inverter: Biến tần') {
                    $('#inventerChart3').removeClass("noneDisplay");
                    $('#cbAptomatChart3').addClass("noneDisplay");
                    $('#defaultChart3').addClass("noneDisplay");
                } else {

                    $('#defaultChart3').removeClass("noneDisplay");
                    $('#cbAptomatChart3').addClass("noneDisplay");
                    $('#inventerChart3').addClass("noneDisplay");
                }
            });
        </script>
        <script>
            new Chart(document.getElementById("lineChartThang1"), {
                type: 'line',
                data: {
                    labels: ['01/01', '06/01', '11/01', '16/01', '21/01', '26/01', '31/01'],
                    datasets: [{
                            data: [12, 15, 32, 37, 40, 46, 28],
                            label: "Xuất vốn",
                            borderColor: "#33FF33",
                            backgroundColor: "#33FF33",
                            fill: false
                        }, {
                            data: [14, 16, 42, 25, 37, 42, 31],
                            label: "Nhập vốn",
                            borderColor: "#EE0000",
                            backgroundColor: "#EE0000",
                            fill: false
                        }
                        , {
                            data: [32, 32, 25, 41, 34.5, 25, 16],
                            label: "Bán cho khách",
                            borderColor: "yellow",
                            backgroundColor: "yellow",
                            fill: false
                        }
                    ]
                },
                options: {
                    legend: {display: false},
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                    },
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
                                    stepSize: 5,
                                    max: 50
                                }
                            }]
                    }
                }
            });
            new Chart(document.getElementById("lineChartThang2"), {
                type: 'line',
                data: {
                    labels: ['01/01', '06/01', '11/01', '16/01', '21/01', '26/01', '31/01'],
                    datasets: [{
                            data: [22, 25, 12, 37, 24, 16, 28],
                            label: "Xuất vốn",
                            borderColor: "#33FF33",
                            backgroundColor: "#33FF33",
                            fill: false
                        }, {
                            data: [25, 23, 12, 32, 23, 15, 31],
                            label: "Nhập vốn",
                            borderColor: "#EE0000",
                            backgroundColor: "#EE0000",
                            fill: false
                        }
                        , {
                            data: [32, 32, 25, 41, 34.5, 25, 16],
                            label: "Bán cho khách",
                            borderColor: "yellow",
                            backgroundColor: "yellow",
                            fill: false
                        }
                    ]
                },
                options: {
                    legend: {display: false},
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                    },
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
                                    stepSize: 5,
                                    max: 50
                                }
                            }]
                    }
                }
            });
            new Chart(document.getElementById("lineChartThang3"), {
                type: 'line',
                data: {
                    labels: ['01/01', '06/01', '11/01', '16/01', '21/01', '26/01', '31/01'],
                    datasets: [{
                            data: [21, 25, 14, 37, 34, 16, 28],
                            label: "Xuất vốn",
                            borderColor: "#33FF33",
                            backgroundColor: "#33FF33",
                            fill: false
                        }, {
                            data: [14, 16, 42, 25, 37, 42, 31],
                            label: "Nhập vốn",
                            borderColor: "#EE0000",
                            backgroundColor: "#EE0000",
                            fill: false
                        }
                        , {
                            data: [23, 32, 15, 41, 34.5, 15, 26],
                            label: "Bán cho khách",
                            borderColor: "yellow",
                            backgroundColor: "yellow",
                            fill: false
                        }
                    ]
                },
                options: {
                    legend: {display: false},
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                    },
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
                                    stepSize: 5,
                                    max: 50
                                }
                            }]
                    }
                }
            });
            new Chart(document.getElementById("lineChart2"), {
                type: 'line',
                data: {
                    labels: ['01/01', '02/01', '03/01', '04/01', '05/01', '06/01', '07/01'],
                    datasets: [{
                            data: [3, 4, 4.2, 5],
                            label: "Xuất vốn",
                            borderColor: "#33FF33",
                            backgroundColor: "#33FF33",
                            fill: false
                        }, {
                            data: [1.2, 1.5, 3.2, 3.7],
                            label: "Nhập vốn",
                            borderColor: "#EE0000",
                            backgroundColor: "#EE0000",
                            fill: false
                        }
                        , {
                            data: [3.5, 6, 4.5, 5.7],
                            label: "Bán cho khách",
                            borderColor: "yellow",
                            backgroundColor: "yellow",
                            fill: false
                        }
                    ]
                },
                options: {
                    legend: {display: false},
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                    },
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
                                    max: 15
                                }
                            }]
                    }
                }
            });
            new Chart(document.getElementById("lineChart3"), {
                type: 'line',
                data: {
                    labels: ['01/01', '02/01', '03/01', '04/01', '05/01', '06/01', '07/01'],
                    datasets: [{
                            data: [3.4, 1.5, 4, 7.3],
                            label: "Xuất vốn",
                            borderColor: "#33FF33",
                            backgroundColor: "#33FF33",
                            fill: false
                        }, {
                            data: [3.2, 1.2, 2.5, 5.2],
                            label: "Nhập vốn",
                            borderColor: "#EE0000",
                            backgroundColor: "#EE0000",
                            fill: false
                        }
                        , {
                            data: [5.3, 6, 5, 7.6],
                            label: "Bán cho khách",
                            borderColor: "yellow",
                            backgroundColor: "yellow",
                            fill: false
                        }
                    ]
                },
                options: {
                    legend: {display: false},
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                    },
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
                                    max: 15
                                }
                            }]
                    }
                }
            });
            new Chart(document.getElementById("lineChart1"), {
                type: 'line',
                data: {
                    labels: ['01/01', '02/01', '03/01', '04/01', '05/01', '06/01', '07/01'],
                    datasets: [{
                            data: [20, 15, 30.5, 15.6],
                            label: "Xuất vốn",
                            borderColor: "#33FF33",
                            backgroundColor: "#33FF33",
                            fill: false
                        }, {
                            data: [19.5, 16, 32.5, 10],
                            label: "Nhập vốn",
                            borderColor: "#EE0000",
                            backgroundColor: "#EE0000",
                            fill: false
                        }
                        , {
                            data: [25, 20, 34.3, 20],
                            label: "Bán cho khách",
                            borderColor: "yellow",
                            backgroundColor: "yellow",
                            fill: false
                        }
                    ]
                },
                options: {
                    legend: {display: false},
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                    },
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
                                    stepSize: 5,
                                    max: 50
                                }
                            }]
                    }
                }
            });
        </script>
        <script>
            $('input[name=week]').datepicker({
                format: "dd-mm",
                autoclose: true,
                orientation: 'top auto'
            }).on('show', function (e) {
                var td = $('td', '.datepicker-days');
                td.mouseover(function () {
                }).mouseout(function () {
                    $('.week', '.datepicker-days').removeClass('week');
                });
            }).on('hide', function (e) {

                console.log($(this).val());
            });
            $('.input-group-addon', '.week-select').click(function () {
                $('input[name=week]').datepicker('show');
            });
        </script>
        <script type="text/javascript" src="../dist/js/loader.js"></script>
        <script type="text/javascript">
            google.charts.load("current", {packages: ["corechart"]});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Category', 'Percentage'],
                    ['CB - Aptomat', 900],
                    ['Inventer - Biến tần', 400],
                    ['Cáp thông tin', 200],
                    ['Công tắc ổ cắm', 500],
                    ['Busway - Thanh cái dẫn điện & MTR - Máy biến áp & RMU - Tủ trung thế', 600]
                ]);
                var options = {
                    pieHole: 0.5,
                };
                var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                chart.draw(data, options);
            }
        </script>

    </body>
</html>					