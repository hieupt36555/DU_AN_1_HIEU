<?php
if (is_array($bt)){
    extract($bt);
}
?> 

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
                                  <h3 class="card-title">Sửa Biến Thể</h3>
                              </div>
                              <!-- /.card-header -->
                              <!-- form start -->
                              <form action="index.php?act=updatebt" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                            <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>">
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
                                    <img style="width: 150px; object-fit: contain;" src="../../upload/<?php echo $bt['img']?>" alt="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Màu</label>
                                    <input class="form-control" name="mau" type="text" value="<?php echo $bt['mau']?>" placeholder="Nhập màu">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Giá</label>
                                    <input class="form-control" name="gia" value=" <?= number_format($gia, 0, ',', '.') ?>" type="text" placeholder="Nhập giá">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Giá Sale</label>
                                    <input class="form-control" name="giasale" value=" <?= number_format($gia_sale, 0, ',', '.') ?>" type="text" placeholder="Nhập giá Sale">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Nhập dung lượng</label>
                                    <input class="form-control" name="dungluong" value=" <?php echo $bt['dung_luong']?>" type="text" placeholder="Nhập dung lượng">
                                </div>
                                  <div class="form-group">
                                    <label>Sản phẩm</label>
                                    <select name="idsanpham" class="form-control">
                                    <?php foreach ($listsanpham as $sp): ?>
                                            <option value="<?php echo $sp['id_san_pham']?>"><?php echo $sp['ten_san_pham']?></option>
                                            <?php endforeach; ?>
                                    </select>
                                </div> 
                            </div>
                            <!-- /.card-body -->
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