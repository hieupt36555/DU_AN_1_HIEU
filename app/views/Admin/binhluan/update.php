<?php
if (isset($bl) && is_array($bl)) {
    extract($bl);
}

?>
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Bình Luận</h1>
            </div><!-- /.col -->

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <!-- /.card-header -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Sửa bình luận</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="index.php?act=suabl" method="POST"  >
                  <div class="card-body">
                    <div class="form-group">
                    <div class="form-group">
                      
                      
                    </div>
                    <input type="hidden" name="id_binh_luan" value="<?= isset($id_binh_luan) ? $id_binh_luan : '' ?>">
                    <input type="hidden" name="ten_dang_nhap" value="<?= isset($ten_dang_nhap) ? $ten_dang_nhap : '' ?>">
                    <input type="hidden" name="danh_gia" value="<?= isset($danh_gia) ? $danh_gia : '' ?>">
                    <input type="hidden" name="ngay_binh_luan" value="<?= isset($ngay_binh_luan) ? $ngay_binh_luan : '' ?>">
                    <input type="hidden" name="id_tai_khoan" value="<?= isset($id_tai_khoan) ? $id_tai_khoan : '' ?>">
                    <input type="hidden" name="id_san_pham" value="<?= isset($id_san_pham) ? $id_san_pham : '' ?>">

                      <div class="form-group">
                        <label>Nhập Nội Dung</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="noi_dung"  ><?= isset($noi_dung) ? $noi_dung : '' ?></textarea>
                        
                      </div>
                    <div class="form-group">
                      <label>Đánh giá</label>
                      <select class="form-control">
                        <option>Tốt</option>
                        <option>Ổn</option>
                        <option>Tệ</option>
                      </select>
                    </div>
                  </div>
                  <!-- /.card-body -->
<?php
if (isset($thongbao) && $thongbao != "") {
    echo '<div class="container mt-3"><div class="alert alert-success" role="alert">' . $thongbao . '</div></div>';
}
?>
                  <div class="card-footer">
                    <!-- <button type="submit" class="btn btn-primary" name="capnhat" >Sửa</button> -->
                    <input type="submit" class="btn btn-primary" name="capnhat" value="Sửa" >
                  </div>
                </form>
              </div>
              <!-- /.card-body -->

            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>