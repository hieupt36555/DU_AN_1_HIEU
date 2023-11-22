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
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Danh sách Tài Khoản</h3>
            </div>
            <form action="index.php?act=listtk" method="POST">
              <div class="row">
                <div class="col-md-10 offset-md-1">
                  <div class="row">
                    <div class="col-3">
                      <p></p>
                      <h5>Tìm Kiếm</h5>
                    </div>
                    <div class="col-9">
                      <div class="form-group">
                        <label>Chức vụ</label>
                        <select name="idphanquyen" class="form-control">
                          <?php foreach ($listphanquyen as $pq): ?>
                              <option value="<?php echo $pq['id_phan_quyen']?>"><?php echo $pq['ten_chuc_nang']?></option>
                              <?php endforeach; ?>
                        </select>
                      </div>
                    </div>

                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <input type="search" class="form-control form-control-lg" placeholder="Tìm kiếm theo từ khóa" name="tukhoa">
                      <div class="input-group-append">
                        <button type="submit" type="Tìm kiếm" name="timkiem" class="btn btn-lg btn-default">
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
                    <th>Tên đăng nhập</th>
                    <th>Họ Tên</th>
                    <th>Hình Ảnh</th>
                    <th>Trạng Thái</th>
                    <th>Chọn</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($listtaikhoan as $tk): ?>
                  <tr>
                    <td><?php echo $tk['id_tai_khoan']?></td>
                    <td><?php echo $tk['ten_dang_nhap']?>
                    </td>
                    <td><?php echo $tk['ho_ten']?></td>
                    <td><img style="width: 100px; object-fit: contain;" src="../../upload/<?php echo $tk['img']?>" alt=""></td>
                    <td><?php echo $tk['trang_thai']?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-outline-success" href="index.php?act=detailtk&id=<?php echo $tk['id_tai_khoan']; ?>" role="button">Xem</a>
                        <a class="btn btn-outline-secondary" href="index.php?act=suatk&id=<?php echo $tk['id_tai_khoan']; ?>" role="button">Sửa</a>
                        <a class="btn btn-outline-danger" href="index.php?act=xoatk&id=<?php echo $tk['id_tai_khoan']; ?>" role="button">Xóa</a>

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