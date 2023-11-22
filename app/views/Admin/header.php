<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Trang Chủ</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../public/assets/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../../public/assets/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../../public/assets/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../../public/assets/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../public/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../../public/assets/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../../public/assets/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../../public/assets/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../../../public/images/anh_banda.jpg" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->

    
    
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link active">Trang Chủ</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?act=listcv" class="nav-link">Chức Vụ</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?act=listtk" class="nav-link">Tài Khoản</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?act=listdm" class="nav-link">Danh Mục</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?act=listsp" class="nav-link">Sản Phẩm</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?act=listbt" class="nav-link">Biến Thể</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?act=listdh" class="nav-link">Đơn Hàng</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?act=listbl" class="nav-link">Bình Luận</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?act=listbn" class="nav-link">Banner</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?act=listtt" class="nav-link">Tin Tức</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?act=listkm" class="nav-link">Khuyến Mãi</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?act=listlh" class="nav-link">Liên Hệ</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../../../public/images/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">H2L Mobile</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../../public/images/adminhai.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="index.php?act=detailtk" class="d-block">Admin Hải</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item menu">
                <a href="chucvu/chucvu.html" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Quản lý Chức Vụ
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="index.php?act=listcv" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Danh sách Chức Vụ</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?act=addcv" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Thêm Chức Vụ</p>
                    </a>
                  </li>
                </ul>
              </li>
          <li class="nav-item menu">
            <a href="taikhoan/taikhoan.html" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Quản lý Tài Khoản
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?act=listtk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách Tài Khoản</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?act=addtk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Tài Khoản</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu">
            <a href="danhmuc/danhmuc.html" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Quản lý Danh Mục
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?act=listdm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách Danh Mục</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?act=adddm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Danh Mục</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu">
            <a href="sanpham/sanpham.html" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Quản lý Sản Phẩm
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?act=listsp" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách Sản Phẩm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?act=addsp" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Sản Phẩm</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu">
            <a href="bienthe/bienthe.html" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Quản lý Biến Thể
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?act=listbt" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách Biến Thể</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?act=addbt" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Biến Thể</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu">
            <a href="donhang/donhang.html" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Quản lý Đơn Hàng
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?act=listdh" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách Đơn Hàng</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="index.php?act=adddh" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Đơn Hàng</p>
                </a>
              </li> -->
            </ul>
          </li>
          <li class="nav-item menu">
            <a href="binhluan/binhluan.html" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Quản lý Bình Luận
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?act=listbl" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách Bình Luận</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu">
            <a href="banner/banner.html" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Quản lý Banner
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?act=listbn" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?act=addbn" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Banner</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu">
            <a href="tintuc/tintuc.html" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Quản lý Tin Tức
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?act=listtt" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách Tin Tức</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?act=addtt" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Tin Tức</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu">
            <a href="khuyenmai/khuyenmai.html" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Quản lý Khuyến Mãi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?act=listkm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách Khuyến Mãi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?act=addkm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Khuyến Mãi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu">
            <a href="lienhe/lienhe.html" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Quản lý Liên Hệ
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?act=listlh" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách Liên Hệ</p>
                </a>
              </li>
              
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>