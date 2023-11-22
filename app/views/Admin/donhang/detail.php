<?php
if (isset($hd) && is_array($hd)) {
    // extract($hd);
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
        <div class="invoice p-3 mb-3">
          <!-- title row -->
          <div class="row">
            <div class="col-12">
              <h4>
                <i class="fas fa-globe"></i> Hóa đơn chi tiết
              </h4>
            </div>
            <!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
          
            <div class="col-sm-6 invoice-col">
              Từ
              <address>
                <strong>H2L Mobile</strong><br>
                Số 14, Ngõ 94 Hồ Tùng Mậu<br>
                Cầu Giấy, Hà Nội<br>
                Phone: 0917555305<br>
                Email: hhai03@gmail.com
              </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-6 invoice-col">
              Đến
              <address>
                <strong><?php echo $hd['ho_ten']?></strong><br>
                <?php echo $hd['dia_chi']?><br>
               
                Phone: <?php echo $hd['sdt']?><br>
                
              </address>
            </div>
            <!-- /.col -->
            
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Stt</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Hình ảnh</th>
                    <th>Hình thức thanh toán</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $hd['id_hoa_don']?></td>
                    <td><?php echo $hd['ten_san_pham']?></td>
                    <td><?php echo $hd['gia']?>VND</td>
                    <td><img style="width: 150px; object-fit: contain;" src="dist/img/iphone 15 pro tintan.jpeg" alt=""></td>
                    <td><?php echo $hd['phuong_thuc_thanh_toan']?></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <div class="row">
            <!-- accepted payments column -->
            <div class="col-6">
              <p class="lead">Payment Methods:</p>
              <img src="../../../public/images/credit/visa.png" alt="Visa">
              <img src="../../../public/images/credit/mastercard.png" alt="Mastercard">
              <img src="../../../public/images/credit/american-express.png" alt="American Express">
              <img src="../../../public/images/credit/paypal2.png" alt="Paypal">
            </div>
            <!-- /.col -->
            <div class="col-6">
              <p class="lead">Đang vận chuyển</p>

              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <th style="width:50%">Giá:</th>
                    <td><?php echo $hd['gia']?>VNĐ</td>
                  </tr>
                  <tr>
                    <th>Mã giảm giá:</th>
                    <td>0%</td>
                  </tr>
                  <tr>
                    <th>Phí vận chuyển:</th>
                    <td>50.000VND</td>
                  </tr>
                  <tr>
                    <th>Tổng tiền:</th>
                    <td><?php echo $hd['tong_tien']?>VNĐ</td>
                  </tr>
                </table>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-12">
              <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i
                  class="fas fa-print"></i> Print</a>
              <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                Payment
              </button>
              <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                <i class="fas fa-download"></i> Generate PDF
              </button>
            </div>
          </div>
        </div>
        <!-- /.col -->
    </div>