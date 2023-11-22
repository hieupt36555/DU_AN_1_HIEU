<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Đơn Hàng</h1>
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
                <h3 class="card-title">Danh sách Đơn Hàng</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  
                  <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th>Chọn</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <?php foreach ($listhd as $hd):
                    
                    ?>
                    <td> <?php echo $hd['id_hoa_don']; ?></td>
                    <td><?php echo $hd['ten_san_pham']; ?>
                    </td>
                    <td><?php echo $hd['gia']; ?> VNĐ</td>
                    <td>24.845.000VND</td>
                    <td><?php echo $hd['trang_thai']; ?></td>
                    <td><div class="btn-group">
                      <a class="btn btn-outline-success" href="index.php?act=detaildh&id=<?php echo $hd["id_hoa_don"]; ?>" role="button">Xem</a>
                      <a class="btn btn-outline-secondary" href="index.php?act=suahd&id=<?php echo $hd["id_hoa_don"]; ?>" role="button">Sửa</a>
                      <a class="btn btn-outline-danger" href="index.php?act=xoahd&id=<?php echo $hd["id_hoa_don"]; ?>" role="button">Xóa</a>

                    </div></td>
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