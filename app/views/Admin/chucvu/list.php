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
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Danh sách Chức Vụ</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Chức Vụ</th>
                    <th>Mô tả</th>
                    <th>Chọn</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($listphanquyen as $phanquyen): ?>
                  <tr>
                    <td><?php echo $phanquyen['id_phan_quyen']?></td>
                    <td><?php echo $phanquyen['ten_chuc_nang']?>
                    </td>
                    <td><?php echo $phanquyen['mo_ta']?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-outline-secondary" href="index.php?act=suacv&id=<?php echo $phanquyen['id_phan_quyen']; ?>" role="button">Sửa</a>
                        <a class="btn btn-outline-danger" href="index.php?act=xoacv&id=<?php echo $phanquyen['id_phan_quyen']; ?>" role="button">Xóa</a>

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