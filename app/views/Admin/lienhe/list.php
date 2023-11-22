
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Liên hệ</h1>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">

    <div class="card card-primary card-outline">
      <div class="card-header">
        <h3 class="card-title">Inbox</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm">
            <input type="text" class="form-control" placeholder="Search Mail">
            <div class="input-group-append">
              <div class="btn btn-primary">
                <i class="fas fa-search"></i>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
        <div class="mailbox-controls">
          <!-- Check all button -->
          <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
          </button>
          <div class="btn-group">
            <button type="button" class="btn btn-default btn-sm">
              <i class="far fa-trash-alt"></i>
            </button>
            <button type="button" class="btn btn-default btn-sm">
              <i class="fas fa-reply"></i>
            </button>
            <button type="button" class="btn btn-default btn-sm">
              <i class="fas fa-share"></i>
            </button>
          </div>
          <!-- /.btn-group -->
          <button type="button" class="btn btn-default btn-sm">
            <i class="fas fa-sync-alt"></i>
          </button>
          <div class="float-right">
            1-50/200
            <div class="btn-group">
              <button type="button" class="btn btn-default btn-sm">
                <i class="fas fa-chevron-left"></i>
              </button>
              <button type="button" class="btn btn-default btn-sm">
                <i class="fas fa-chevron-right"></i>
              </button>
            </div>
            <!-- /.btn-group -->
          </div>
          <!-- /.float-right -->
        </div>
        <div class="table-responsive mailbox-messages">
          <table class="table table-hover table-striped">
            <tbody>
              <?php
              foreach($listlienhe as $lienhe):?>
              <tr>
                <td>
                  <div class="icheck-primary">
                    <input type="checkbox" value="" id="check1">
                    <label for="check1"></label>
                  </div>
                </td>
                <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                <td class="mailbox-name"><a href="read-mail.html"><?php echo $lienhe['ho_ten']?></a></td>
                <td class="mailbox-subject"><?php echo $lienhe['noi_dung']?>
                </td>
                <td class="mailbox-attachment"><b>Email: </b><?php echo $lienhe['email']?></td>
                <td class="mailbox-date"><b>SĐT: </b><?php echo $lienhe['sdt']?></td>
                <td>
                  <div class="btn-group">
                    <a class="btn btn-outline-secondary" href="index.php?act=updatelh" role="button">Sửa</a>
                    <a class="btn btn-outline-danger" href="index.php?act=xoalh&id=<?php echo $lienhe['id_lien_he']?>" role="button">Xóa</a>

                  </div>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <!-- /.table -->
        </div>
        <!-- /.mail-box-messages -->
      </div>
      <!-- /.card-body -->
      <div class="card-footer p-0">
        <div class="mailbox-controls">
          <!-- Check all button -->
          <button type="button" class="btn btn-default btn-sm checkbox-toggle">
            <i class="far fa-square"></i>
          </button>
          <div class="btn-group">
            <button type="button" class="btn btn-default btn-sm">
              <i class="far fa-trash-alt"></i>
            </button>
            <button type="button" class="btn btn-default btn-sm">
              <i class="fas fa-reply"></i>
            </button>
            <button type="button" class="btn btn-default btn-sm">
              <i class="fas fa-share"></i>
            </button>
          </div>
          <!-- /.btn-group -->
          <button type="button" class="btn btn-default btn-sm">
            <i class="fas fa-sync-alt"></i>
          </button>
          <div class="float-right">
            1-50/200
            <div class="btn-group">
              <button type="button" class="btn btn-default btn-sm">
                <i class="fas fa-chevron-left"></i>
              </button>
              <button type="button" class="btn btn-default btn-sm">
                <i class="fas fa-chevron-right"></i>
              </button>
            </div>
            <!-- /.btn-group -->
          </div>
          <!-- /.float-right -->
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>