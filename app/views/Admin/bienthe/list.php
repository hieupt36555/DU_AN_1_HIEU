<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Biến thể</h1>
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
              <h3 class="card-title">Danh sách Biến Thể</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Hình Ảnh</th>
                    <th>Màu</th>
                    <th>Dung Lượng</th>
                    <th>Giá</th>
                    <th>Giá sale</th>
                    <th>Sản phẩm</th>
                    <th>Chọn</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($listbienthe as $bt):
                  extract($bt);
                   ?>
                  <tr>
                    <td><?php echo $bt['id_bien_the']?></td>
                    <td><img style="width: 150px; object-fit: contain;" src="../../upload/<?php echo $bt['img']?>" alt=""></td>
                    <td><?php echo $bt['mau']?>
                    </td>
                    <td><?php echo $bt['dung_luong']?></td>
                    <td>  <?= number_format($gia, 0, ',', '.') ?>VNĐ</td>
                    <td>  <?= number_format($gia_sale, 0, ',', '.') ?>VNĐ</td>
                    <td><?php echo $bt['ten_san_pham']?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-outline-success" href="index.php?act=detailbt&id=<?php echo $bt['id_bien_the'];?>" role="button">Xem</a>
                        <a class="btn btn-outline-secondary" href="index.php?act=suabt&id=<?php echo $bt['id_bien_the'];?>" role="button">Sửa</a>
                        <a class="btn btn-outline-danger" href="index.php?act=xoabt&id=<?php echo $bt['id_bien_the'];?>" role="button">Xóa</a>
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