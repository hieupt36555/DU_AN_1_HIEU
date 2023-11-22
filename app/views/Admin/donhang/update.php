<?php
if (isset($hd) && is_array($hd)) {
    extract($hd);
}

?>
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
                    <div class="card">
                      <!-- /.card-header -->
                      <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Sửa Đơn Hàng</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <input type="hidden" name="id_hoa_don"  value="<?php echo $hd['id_hoa_don']?>"  >
                        <form action="index.php?act=updatedh" method="POST" >
                          <div class="card-body">
                            <div class="form-group">
                              <label for="exampleInput">Họ tên</label>
                              <input class="form-control" type="text" placeholder="Nhập họ tên" name="ho_ten" value="<?php echo $hd['ho_ten']?>" >
                            </div>
                            
                            <div class="form-group">
                              <label for="exampleInputEmail1">Số Điện Thoại</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập Số Điện Thoại" name="sdt" value="<?php echo $hd['sdt']?>">
                            </div>
                            <div class="form-group">
                              <label for="exampleInput">Địa Chỉ</label>
                              <input class="form-control" type="text" placeholder="Nhập Địa Chỉ" name="dia_chi" value="<?php echo $hd['dia_chi']?>">
                            </div>
                            <div class="form-group">
                              <label for="exampleInput">Tên sản phẩm</label>
                              <input class="form-control" type="text" placeholder="Nhập tên sản phẩm" name="ten_san_pham" value="<?php echo $hd['ten_san_pham']?>">
                            </div>
                            <div class="form-group">
                              <label for="exampleInput">Giá</label>
                              <input class="form-control" type="text" placeholder="Nhập giá sản phẩm" name="gia" value="<?php echo $hd['gia']?>">
                            </div>
                            <div class="form-group">
                              <label for="exampleInput">Mã khuyến mại</label>
                              <input class="form-control" type="text" placeholder="Nhập mã khuyến mại" name="ma_khuyen_mai" value="<?php echo $hd['ma_khuyen_mai']?>">
                            </div>
                            <div class="form-group">
                              <label for="exampleInput">Phương Thức Thanh Toán</label>
                              <select class="form-control" name="phuong_thuc_thanh_toan" >
                                <option value="Thanh Toán Online" >Thanh Toán Online</option>
                                <option value="Thanh Toán Offline" >Thanh Toán Offline</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="exampleInput">Tổng tiền</label>
                              <input class="form-control" type="text" placeholder="Nhập tổng số tiền phải thanh toán" name="tong_tien" value="<?php echo $hd['tong_tien']?>">
                            </div>
                            <div class="form-group">
                              <label>Trạng Thái</label>
                              <select class="form-control" name="trang_thai" >
                                <option value="Đang vận chuyển" >Đang vận chuyển</option>
                                <option value="Đã vận chuyển" >Đã vận chuyển</option>
                              </select>
                            </div>
                          </div>
                          <!-- /.card-body -->
      <?php
if (isset($thongbao) && $thongbao != "") {
    echo '<div class="container mt-3"><div class="alert alert-success" role="alert">' . $thongbao . '</div></div>';
}
?>
                          <div class="card-footer">
                            <!-- <button type="submit" class="btn btn-primary">Thêm</button> -->
                            <input type="submit" class="btn btn-primary" value="Sửa" name="capnhat" >
                          </div>
                        </form>
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