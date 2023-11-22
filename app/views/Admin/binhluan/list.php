<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Bình Luận</h1>
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
                <h3 class="card-title">Danh sách Bình Luận</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>ID Sản Phẩm</th>
                    <th>Tên đăng nhập</th>
                    <th>Nội dung</th>
                    <th>Ngày bình luận</th>
                    <th>Đánh giá</th>
                    <th>Chọn</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($listbl as $bl):?>
                  <tr>
                    <td><?php echo $bl['id_binh_luan']; ?></td>
                    <td><?php echo $bl['id_san_pham'] ?></td>
                    <td><?php echo $bl['ten_dang_nhap']; ?>
                    </td>
                    <td><?php echo $bl['noi_dung']; ?></td>
                    <td><?php echo $bl['ngay_binh_luan']; ?></td>
                    <td>Tốt</td>
                    <td><div class="btn-group">
                      <!-- <a class="btn btn-outline-secondary" href="index.php?act=updatebl&id= role="button">Sửa</a> -->

                      <a class="btn btn-outline-danger" role="button" href="index.php?act=xoabl&id=<?php echo $bl["id_binh_luan"]; ?>" >Xóa</a>

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