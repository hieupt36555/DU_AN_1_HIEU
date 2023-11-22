<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Banner</h1>
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
                <h3 class="card-title">Danh sách Banner</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Ảnh Banner</th>
                    <th>Link</th>
                    <th>Chọn</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php foreach ($listbanner as $banner):
                    
                  ?>
                  <tr>
                    <td>   <?php echo $banner['id_banner']; ?></td>
                    
                    <td><img src="../../upload/<?php echo $banner['img']; ?>" alt="" height= '100px'>
                    </td>
                    <td> <?php echo $banner['link']; ?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-outline-secondary" href="index.php?act=suabn&id=<?php echo $banner['id_banner']; ?>" role="button">Sửa</a>
                        <a class="btn btn-outline-danger" href="index.php?act=xoabn&id=<?php echo $banner['id_banner']; ?>" role="button">Xóa</a>

                      </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  <!-- <tr>
                    <td>1</td>
                    <td><img src="../../../public/images/AdminLTELogo.png" alt="">
                    </td>
                    <td>https://www.google.com/</td>
                    <td><div class="btn-group">
                      <a class="btn btn-outline-secondary" href="index.php?act=updatebanner" role="button">Sửa</a>
                      <a class="btn btn-outline-danger" href="#" role="button">Xóa</a>

                    </div></td>
                  </tr> -->
                 
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