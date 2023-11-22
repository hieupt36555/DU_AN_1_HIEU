<?php
if (is_array($km)) {
  extract($km);
}
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Khuyến mại</h1>
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
              <h3 class="card-title">Sửa khuyến mại</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="index.php?act=updatekm" method="POST">
              <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $km['id_khuyen_mai'] ?>">
                <div class="form-group">
                  <label for="exampleInput">Mã khuyến mại</label>
                  <input class="form-control" type="text" name="makhuyenmai" value="<?php echo $km['ma_khuyen_mai'] ?>" placeholder="Nhập khuyến mại">
                </div>
                <div class="form-group">
                  <label for="exampleInput">Giá trị khuyến mại</label>
                  <input class="form-control" type="text" name="phantramkhuyenmai" value="<?php echo $km['phan_tram_khuyen_mai'] ?>" placeholder="Nhập giá trị khuyến mại">
                </div>
                <div class="form-group">
                  <label for="exampleInput">Ngày bắt đầu</label>
                  <input class="form-control" type="date" name="ngaybatdau" value="<?php echo $km['ngay_bat_dau'] ?>" placeholder="Nhập ngày bắt đầu">
                </div>
                <div class="form-group">
                  <label for="exampleInput">Ngày kết thúc</label>
                  <input class="form-control" type="date" name="ngayketthuc" value="<?php echo $km['ngay_ket_thuc'] ?>" placeholder="Nhập ngày kết thúc">
                </div>
                <div class="form-group">
                  <label for="exampleInput">Mô tả</label>
                  <input class="form-control" type="text" name="mota" value="<?php echo $km['mo_ta'] ?>" placeholder="Nhập mô tả">
                </div>
                <div class="form-group">
                  <label>Trạng thái</label>
                  <select name="trangthai" class="select2" style="width: 100%;">
                    <option value="ON">On</option>
                    <option value="OFF">Off</option>
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
                <button type="submit" name='capnhat' class="btn btn-primary">Sửa</button>
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