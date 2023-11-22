<?php
if (is_array($onetk)) {
    extract($onetk);
}

    
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tài Khoản</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img style="width: 200px; object-fit: contain;" class="profile-user-img img-fluid img-circle" src="../../upload/<?php echo $onetk['img']?>" alt="User profile picture">

                            </div>

                            <h3 class="profile-username text-center"><?php echo $onetk['ho_ten']?></h3>

                            <p class="text-muted text-center"><?php echo $onetk['ten_chuc_nang']?></p>
                            <a href="#" class="btn btn-primary btn-block"><b><?php echo $onetk['trang_thai']?></b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin Tài Khoản</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Tên đăng nhập</strong>
                            <p class="text-muted">
                                <?php echo $onetk['ten_dang_nhap']?>
                            </p>
                            <hr>
                            <strong><i class="fas fa-book mr-1"></i> Mật khẩu</strong>
                            <p class="text-muted">
                            <?php echo $onetk['mat_khau']?>
                            </p>
                            <hr>
                            <strong><i class="fas fa-book mr-1"></i> Email</strong>
                            <p class="text-muted">
                            <?php echo $onetk['email']?>
                            </p>
                            <hr>
                            <strong><i class="fas fa-book mr-1"></i> Số điện thoại</strong>
                            <p class="text-muted">
                            <?php echo $onetk['sdt']?>
                            </p>
                            <hr>
                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                            <p class="text-muted"><?php echo $onetk['dia_chi']?></p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
        
                <!-- Profile Image -->

                <!-- /.card -->

                <!-- About Me Box -->

                <!-- /.card -->
            </div>


            <!-- /.card-body -->
        </div>
        <!-- /.col -->
</div>