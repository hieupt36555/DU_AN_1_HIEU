<?php
if (is_array($sp) ){
    extract($sp);
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Sản Phẩm</h1>
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
                            <h3 class="card-title">Sửa thông tin Sản Phẩm</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="index.php?act=updatesp" method="POST">
                        <input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>">
                            <div class="form-group">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInput">Tên Sản Phẩm</label>
                                    <input class="form-control" name="tensanpham" value="<?php echo $sp['ten_san_pham']?>" type="text" placeholder="Nhập tên sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label>Ngày Nhập</label>
                                    <input class="form-control" name="ngaynhap" value="<?php echo $sp['ngay_nhap']?>" type="date" placeholder="Nhập ngày">
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <input class="form-control" name="mota" value="<?php echo $sp['mo_ta_sp']?>" type="text" placeholder="Nhập mô tả">
                                </div>
                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select name="iddanhmuc" class="form-control">
                                    <?php foreach ($listdanhmuc as $danhmuc): ?>
                                        <option value="<?php echo $danhmuc['id_danh_muc']?>"><?php echo $danhmuc['ten_danh_muc']?></option>
                                        <?php endforeach; ?>
                                    </select>
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