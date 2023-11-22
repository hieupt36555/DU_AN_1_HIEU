<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Biến Thể</h1>
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
              <h3 class="card-title">Nhập Biến Thể</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="index.php?act=addbt" method="POST" enctype="multipart/form-data">
              <div class="card-body">
              <div class="form-group">
                                <label for="exampleInputFile">Hình ảnh Sản Phẩm</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                    <input type="file" name="hinhanh" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Chọn ảnh</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Tải lên</span>
                                    </div>
                                </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Màu</label>
                                    <input class="form-control" name="mau" type="text" placeholder="Nhập màu">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Giá</label>
                                    <input class="form-control" name="gia" type="text" placeholder="Nhập Giá">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Giá Sale</label>
                                    <input class="form-control" name="giasale" type="text" placeholder="Nhập giá Sale">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Nhập dung lượng</label>
                                    <input class="form-control" name="dungluong" type="text" placeholder="Nhập dung lượng">
                                </div>
                                <div class="form-group">
                                    <label>Sản phẩm</label>
                                    <select name="idsanpham" class="form-control">
                                    <?php foreach ($listsanpham as $sanpham): ?>
                                      <option value="<?php echo $sanpham['id_san_pham']?>"><?php echo $sanpham['ten_san_pham']?></option>
                                      <?php endforeach; ?>
                                    </select>
                                </div> 
              <!-- /.card-body -->

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