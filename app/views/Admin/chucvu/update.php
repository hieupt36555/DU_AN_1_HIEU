<?php
if (is_array($pq)) {
    extract($pq);
}

?>
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

                    <!-- /.card-header -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Sửa Chức Vụ</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="index.php?act=updatecv" method="POST">
                            <div class="card-body">
                            <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>">
                                <div class="form-group">
                                    <label for="exampleInput">Tên Chức Vụ</label>
                                    <input class="form-control" name="chucnang" type="text" value="<?php echo $pq['ten_chuc_nang']?>" placeholder="Nhập tên chức vụ">
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <input class="form-control" name="mota" type="text" value="<?php echo $pq['mo_ta']?>" placeholder="Nhập mô tả">
                                    <!-- <textarea class="form-control" name="mota" rows="5" value="" placeholder="Nhập mô tả ..."></textarea> -->
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" name="capnhat" class="btn btn-primary">Sửa</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>