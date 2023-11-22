<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tin Tức</h1>
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
              <h3 class="card-title">Danh sách Tin Tức</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Hình ảnh</th>
                    <th>Ngày đăng</th>
                    <th>Nội dung</th>
                    <th>Chọn</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($listtintuc as $tintuc): ?>
                  
                  <tr>
                    <td> <?php echo $tintuc['id_tin_tuc'];?></td>
                    <td> <?php echo $tintuc['tieu_de']?> </td>
                    <td><img src="../../upload/<?php echo $tintuc['img']; ?>" alt="" height="100px" ></td>
                    <td><?php echo $tintuc['ngay_dang'];?></td>
                    <td> <?php echo $tintuc['noi_dung'];?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-outline-secondary" href="index.php?act=suatt&id=<?php echo $tintuc['id_tin_tuc']; ?>" role="button">Sửa</a>
                        <a class="btn btn-outline-danger" href="index.php?act=xoatt&id=<?php echo $tintuc['id_tin_tuc']; ?>" role="button">Xóa</a>

                      </div>
                    </td>
                  </tr>
                 <?php endforeach;   ?>

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