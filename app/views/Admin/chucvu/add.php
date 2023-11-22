<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Chức Vụ</h1>
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
              <h3 class="card-title">Nhập Chức Vụ</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="index.php?act=addcv" method="POST">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInput">Tên Chức Vụ</label>
                  <input class="form-control" name="chucnang" type="text" placeholder="Nhập tên Chức Vụ">
                </div>
                <div class="form-group">
                  <label>Mô tả</label>
                  <textarea class="form-control" name="mota" rows="5" placeholder="Nhập mô tả ..."></textarea>
                </div>
              </div>
              <!-- /.card-body -->
              <?php
if (isset($thongbao) && $thongbao != "") {
    echo '<div class="container-fluid"><div class="alert alert-success" role="alert">' . $thongbao . '</div></div>';
}
?>
              <div class="card-footer">
                <button type="submit" name="themmoi" class="btn btn-primary">Thêm</button>
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