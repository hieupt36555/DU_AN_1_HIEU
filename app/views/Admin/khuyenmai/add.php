<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Khuyến Mại</h1>
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
              <h3 class="card-title">Nhập khuyến mại</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="index.php?act=addkm" method="POST">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInput">Mã khuyến mại</label>
                  <input class="form-control" type="text" placeholder="Nhập mã khuyến mại" name="ma_khuyen_mai">
                </div>
                <div class="form-group">
                  <label for="exampleInput">Giá trị khuyến mại</label>
                  <input class="form-control" type="text" placeholder="Nhập giá trị khuyến mại" name="phan_tram_khuyen_mai">
                </div>
                <div class="form-group">
                  <label for="exampleInput">Ngày bắt đầu</label>
                  <input class="form-control" type="date" placeholder="Nhập ngày bắt đầu" name="ngay_bat_dau">
                </div>
                <div class="form-group">
                  <label for="exampleInput">Ngày kết thúc</label>
                  <input class="form-control" type="date" placeholder="Nhập ngày kết thúc" name="ngay_ket_thuc">
                </div>
                <div class="form-group">
                  <label>Trạng thái</label>
                  <select class="select2" name='trangthai' style="width: 100%;">
                    <option value="ON">On</option>
                    <option value="OFF">Off</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Mô tả</label>
                  <textarea class="form-control" rows="3" placeholder="Nhập mô tả ..." name="mo_ta"></textarea>
                </div>
              </div>
              <!-- /.card-body -->
              <?php
if(isset($thongbao) && $thongbao != "") {
  echo '<div class="container mt-3"><div class="alert alert-success" role="alert">' . $thongbao . '</div></div>';
}              
              ?>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary" name="themmoi">Thêm</button>
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