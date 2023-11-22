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
                            <h3 class="card-title">Nhập danh mục</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="index.php?act=adddm" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInput">Tên loại</label>
                                    <input class="form-control" type="text" name="tenloai" placeholder="Nhập tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea class="form-control" rows="5" name="mota" placeholder="Nhập mô tả ..."></textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <?php
if (isset($thongbao) && $thongbao != "") {
    echo '<div class="container-fluid"><div class="alert alert-success" role="alert">' . $thongbao . '</div></div>';
}
?>
                            <div class="card-footer">
                                
                                <button type="submit" name="themmoi" class="btn btn-primary">Thêm</button>
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
