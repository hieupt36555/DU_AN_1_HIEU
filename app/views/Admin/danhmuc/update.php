<?php
if (is_array($dm)) {
    extract($dm);
}

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh Mục</h1>
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
                            <h3 class="card-title">Sửa danh mục</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="index.php?act=updatedm" method="POST">

                            <div class="card-body">
                            <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>">

                                <div class="form-group">
                                    <label for="exampleInput">Tên loại</label>
                                    <input class="form-control" type="text" id="tenloai" name="tenloai" value="<?php echo $dm['ten_danh_muc']?>" placeholder="Nhập tên danh mục" required>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <input class="form-control" type="text" id="tenloai" name="mota" value="<?php echo $dm['mo_ta']?>" placeholder="Nhập mô tả" required>
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