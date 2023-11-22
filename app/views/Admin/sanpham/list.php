<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Sản Phẩm</h1>
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
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Danh sách Sản Phẩm</h3>
            </div>
            <form action="index.php?act=listsp" method="POST">
              <div class="row">
                <div class="col-md-10 offset-md-1">
                  <div class="row">
                    <div class="col-3">
                      <p></p>
                      <h5>Tìm Kiếm</h5>
                    </div>
                    <div class="col-9">
                      <div class="form-group">
                        <label>Danh Mục</label>
                        <select name="iddanhmuc" class="form-control">
                          <?php foreach ($listdanhmuc as $danhmuc): ?>
                              <option value="<?php echo $danhmuc['id_danh_muc']?>"><?php echo $danhmuc['ten_danh_muc']?></option>
                              <?php endforeach; ?>
                        </select>
                        
                      </div>
                    </div>

                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <input type="search" class="form-control form-control-lg" placeholder="Tìm kiếm theo từ khóa" name="tukhoa">
                      <div class="input-group-append">
                        <button name="timkiem" type="Tìm kiếm" class="btn btn-lg btn-default">
                          <i class="fa fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th style="width: 120px;">Ngày nhập</th>
                    <th style="width: 750px;">Mô tả</th>
                    <th>Chọn</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($listsanpham as $sp):
                  extract($sp);
                   ?>
                  <tr>
                    <td><?php echo $sp['id_san_pham']?></td>
                    <td><?php echo $sp['ten_san_pham']?>
                    </td>
                    <td><?php echo $sp['ngay_nhap']?></td>
                    <td><?php echo $sp['mo_ta_sp']?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-outline-secondary" href="index.php?act=suasp&id=<?php echo $sp['id_san_pham']?>" role="button">Sửa</a>
                        <a class="btn btn-outline-danger" href="index.php?act=xoasp&id=<?php echo $sp['id_san_pham']?>" role="button">Xóa</a>

                      </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>