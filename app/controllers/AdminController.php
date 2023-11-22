<?php
include "../../models/pdo.php";
if (isset($_GET["act"]) && ($_GET["act"] != "")) {
    switch ($_GET["act"]) {
            // case tài khoản
        case 'listtk':
            if (isset($_POST['timkiem'])) {
                $tukhoa = $_POST['tukhoa'];
                $idphanquyen = $_POST['idphanquyen'];
            } else {
                $tukhoa = "";
                $idphanquyen = 0;
            }
            $listphanquyen=loadAllpq();
            $listtaikhoan=loadAll_taikhoan($tukhoa,$idphanquyen);
            include "taikhoan/list.php";
            break;
        case 'addtk':
            if(isset($_POST['themmoi'])){
                $tendangnhap=$_POST['tendangnhap'];
                $matkhau=$_POST['matkhau'];
                $hoten=$_POST['hoten'];
                $hinhanh = $_FILES['hinhanh']['name'];
                $target_dir = "../../upload/";
                $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
                if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
                    // echo "Thêm ảnh thành công";
                } else {
                    echo "Không thêm được ảnh";
                }
                $email=$_POST['email'];
                $diachi=$_POST['diachi'];
                $sdt=$_POST['sdt'];
                $trangthai=$_POST['trangthai'];
                $idphanquyen=$_POST['idphanquyen'];
                insert_taikhoan($tendangnhap,$matkhau,$hoten,$hinhanh,$email,$diachi,$sdt,$trangthai,$idphanquyen);
            }
            $listphanquyen = loadAllpq();
            include "taikhoan/list.php";
            break;
        case 'detailtk':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                $onetk=taikhoan_one_admin($id);
            }
            include "taikhoan/detail.php";
            break;
        case 'xoatk':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                delete_taikhoan($id);
                }
            $listtaikhoan = loadAll_taikhoan();
            
            include "taikhoan/list.php";
            break;
            
        case 'suatk':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                $onetk = taikhoan_one_admin($id);
                }
            $listphanquyen = loadAllpq();
            include "taikhoan/update.php";   
                break;
                
        case 'updatetk':
            if (isset($_POST['capnhat'])) {
                $id = $_POST['id'];
                $tendangnhap=$_POST['tendangnhap'];
                $matkhau=$_POST['matkhau'];
                $hoten=$_POST['hoten'];
                $hinhanh = $_FILES['hinhanh']['name'];
                $target_dir = "../../upload/";
                $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
                if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
                    // echo "Thêm ảnh thành công";
                } else {
                    echo "Không thêm được ảnh";
                }
                $email=$_POST['email'];
                $diachi=$_POST['diachi'];
                $sdt=$_POST['sdt'];
                $trangthai=$_POST['trangthai'];
                $idphanquyen=$_POST['idphanquyen'];
                update_taikhoan($id, $tendangnhap, $matkhau, $hoten,$hinhanh,$email,$sdt,$diachi,$trangthai,$idphanquyen);
                $thongbao = "Cập nhật thành công";
                }
        
        $listtaikhoan = loadAll_taikhoan();
        include "taikhoan/list.php";
        break;
        
            // case chức vụ
        case 'listcv':
            $listphanquyen = loadAllpq();
            include "chucvu/list.php";
            break;
        case 'addcv':
            if (isset($_POST['themmoi'])) {
                $chucnang=$_POST['chucnang'];
                $mota=$_POST['mota'];
                insert_phanquyen($chucnang,$mota);
                $thongbao = "Thêm thành công";
            }
            include "chucvu/add.php";
            break;
        case 'xoacv':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                delete_phanquyen($id);
                }
            $listphanquyen = loadAllpq();
            include "chucvu/list.php";
            break;
        case 'suacv':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                $pq = loadOnepq($id);
                }
            include "chucvu/update.php";
                // break;
        
        case 'updatecv':
            if (isset($_POST['capnhat'])) {
                $id = $_POST['id'];
                $chucnang = $_POST['chucnang'];
                $mota = $_POST['mota'];
                update_phanquyen($id,$chucnang,$mota);
                $thongbao = "Cập nhật thành công";
                }
        
            $listphanquyen = loadAllpq();
            include "chucvu/list.php";
            break;
       
            // case danh mục
        case 'listdm':
            $listdanhmuc = loadAlldm();
            include "danhmuc/list.php";
            break;
        case 'adddm':
            if (isset($_POST['themmoi'])) {
                $tenloai=$_POST['tenloai'];
                $mota=$_POST['mota'];
                insert_danhmuc($tenloai,$mota);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'suadm':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                $dm = loadOnedm($id);
                }
            include "danhmuc/update.php";
            // break;
    
        case 'updatedm':
            if (isset($_POST['capnhat'])) {
                $id = $_POST['id'];
                $tenloai = $_POST['tenloai'];
                $mota = $_POST['mota'];
                update_danhmuc($id,$tenloai,$mota);
                $thongbao = "Cập nhật thành công";
            }
    
                $listdanhmuc = loadAlldm();
                include "danhmuc/list.php";
                break;
        case 'xoadm':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                delete_danhmuc($id);
                }
            $listdanhmuc = loadAlldm();
            include "danhmuc/list.php";
            break;

            // case  sản phẩm
        case 'listsp':
            if (isset($_POST['timkiem'])) {
                $tukhoa = $_POST['tukhoa'];
                $iddanhmuc = $_POST['iddanhmuc'];
            } else {
                $tukhoa = "";
                $iddanhmuc = 0;
            }

            $listdanhmuc = loadAlldm();
            $listsanpham = loadAll_sanpham($tukhoa, $iddanhmuc);
            include "sanpham/list.php";
            break;

        case 'addsp';
            if (isset($_POST['themmoi'])) {
                $tensanpham=$_POST['tensanpham'];
                $ngaynhap=$_POST['ngaynhap'];
                $mota=$_POST['mota'];
                $iddanhmuc=$_POST['iddanhmuc'];
                insert_sanpham($tensanpham, $ngaynhap, $mota, $iddanhmuc);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadAlldm();
            include "sanpham/add.php";
            break;
        case 'suasp':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                $sp = loadOne_sanpham($id);
            }
            $listdanhmuc=loadAlldm();
            include "sanpham/update.php";

        case 'updatesp':
            if (isset($_POST['capnhat'])){
                $id = $_POST['id'];
                $tensanpham=$_POST['tensanpham'];
                $ngaynhap=$_POST['ngaynhap'];
                $mota=$_POST['mota'];
                $iddanhmuc=$_POST['iddanhmuc'];
                update_sanpham($id, $tensanpham, $ngaynhap, $mota, $iddanhmuc);
                $thongbao = "Thêm thành công";
            }
            $listsanpham=loadAll_sanpham();
            include "sanpham/list.php";
            break;

        case 'xoasp':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                delete_sanpham($id);
            }
            $listsanpham=loadAll_sanpham();
            include "sanpham/list.php";
            break;



            // case biến thể
        case 'listbt':
            $listbienthe=loadAll_bienthe();
            include "bienthe/list.php";
            break;

        case 'addbt':
            if(isset($_POST['themmoi'])){
                $hinhanh = $_FILES["hinhanh"]['name'];
                $target_dir = "../../upload/";
                $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
                if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
                    // echo "Thêm ảnh thành công";
                } else {
                    echo "Không thêm được ảnh";
                }
                $gia=$_POST['gia'];
                $giasale=$_POST['giasale'];
                $mau=$_POST['mau'];
                $dungluong=$_POST['dungluong'];
                $idsanpham=$_POST['idsanpham'];
                
                insert_bienthe($hinhanh, $gia, $giasale, $mau, $dungluong, $idsanpham);
            }
            $listsanpham=loadAll_sanpham();
            include "bienthe/add.php";
            break;
        case 'detailbt':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                $bt=loadOne_bienthe($id);
            }
            include "bienthe/detail.php";
            break;

        case 'xoabt':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                delete_bienthe($id);
            }
            $listbienthe=loadAll_bienthe();
            include "bienthe/list.php";
            break;

        case "suabt":
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                $bt =loadOne_bienthe($id);
            }
            $listsanpham=loadAll_sanpham();
            include "bienthe/update.php";

        case 'updatebt':
            if (isset($_POST['capnhat'])){
                $id = $_POST['id'];
                $hinhanh = $_FILES["hinhanh"]['name'];
                $target_dir = "../../upload/";
                $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
                if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
                    // echo "Thêm ảnh thành công";
                } else {
                    echo "Không thêm được ảnh";
                }
                $gia=$_POST['gia'];
                $giasale=$_POST['giasale'];
                $mau=$_POST['mau'];
                $dungluong=$_POST['dungluong'];
                $idsanpham=$_POST['idsanpham'];
                update_bienthe($id, $hinhanh, $gia, $giasale,$mau,$dungluong,$idsanpham);
            }
            $listbienthe=loadAll_bienthe();
            include "bienthe/list.php";
            break;

            // case đơn hàng
            case 'listdh':
                $listhd=load_all_hoa_don();
                include "donhang/list.php";
                break;
            case 'adddh':
                if (isset($_POST['them'])) {
                    $ho_ten=$_POST['ho_ten'];
                    $sdt=$_POST['sdt'];
                    $dia_chi=$_POST['dia_chi'];
                    $ten_san_pham=$_POST['ten_san_pham'];
                    $gia=$_POST['gia'];
                    $ma_khuyen_mai=$_POST['ma_khuyen_mai'];
                    $phuong_thuc_thanh_toan=$_POST['phuong_thuc_thanh_toan'];
                    $tong_tien=$_POST['tong_tien'];
                    $trang_thai=$_POST['trang_thai'];
                    insert_hoa_don($ho_ten,$sdt,$dia_chi,$ten_san_pham,$gia,$ma_khuyen_mai,$phuong_thuc_thanh_toan,$tong_tien,$trang_thai);
                    $thongbao = "Thêm thành công";
                }
                include "donhang/add.php";
                break;
            case 'detaildh':
                if (isset($_GET["id"]) && $_GET["id"] > 0) {
                    $id = $_GET["id"];
                    $hd = load_one_hoa_don($id);
                }
                include "donhang/detail.php";
                break;
            case 'xoahd':
                if (isset($_GET["id"]) && $_GET["id"] > 0) {
                    $id = $_GET["id"];
                    delete_hd($id);
                    }
                $listhd = load_all_hoa_don();
                include "donhang/list.php";
                break;
            case 'suahd':
                if (isset($_GET["id"]) && $_GET["id"] > 0) {
                    $id = $_GET["id"];
                    $hd = load_one_hoa_don($id);
                }else{
                    echo "Lỗi id";
                }
                include "donhang/update.php";
                break;
            case 'updatedh':
                if (isset($_POST['capnhat'])) {
                    $id_hoa_don=$_POST['id_hoa_don'];
                    $ho_ten=$_POST['ho_ten'];
                    $sdt=$_POST['sdt'];
                    $dia_chi=$_POST['dia_chi'];
                    $ten_san_pham=$_POST['ten_san_pham'];
                    $gia=$_POST['gia'];
                    $ma_khuyen_mai=$_POST['ma_khuyen_mai'];
                    $phuong_thuc_thanh_toan=$_POST['phuong_thuc_thanh_toan'];
                    $tong_tien=$_POST['tong_tien'];
                    $trang_thai=$_POST['trang_thai'];
                    update_hd($id_hoa_don,$ho_ten,$sdt,$dia_chi,$ten_san_pham,$gia,$ma_khuyen_mai,$phuong_thuc_thanh_toan,$tong_tien,$trang_thai);
                    $thongbao = "Sửa thành công";
                    
                }
                $listhd = load_all_hoa_don();
                include "donhang/update.php";
                break;
                
            //end don hang//

         //binh luan//
        case 'listbl':
            $listbl= load_all_binh_luan();
            include "binhluan/list.php";
            break;
        case 'xoabl':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                delete_bl($id);
                }
            $listbl = load_all_binh_luan();
            include "binhluan/list.php";
            break;
        case 'updatebl': //view
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                $bl = loadOnebl($id);
            }else{
                echo "Lỗi id";
            }
            include "binhluan/update.php";
            // break;
        case 'suabl': //update
            if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                $id_binh_luan=$_POST['id_binh_luan'];
                $ten_dang_nhap=$_POST['ten_dang_nhap'];
                $danh_gia=$_POST['danh_gia'];
                $noi_dung=$_POST['noi_dung'];
                $ngay_binh_luan=$_POST['ngay_binh_luan'];
                $id_san_pham=$_POST['id_san_pham'];
                $id_tai_khoan=$_POST['id_tai_khoan'];
                update_bl($id_binh_luan, $ten_dang_nhap, $danh_gia, $noi_dung, $ngay_binh_luan, $id_san_pham, $id_tai_khoan);
                $thongbao="Cap Nhat thanh cong";
                
            }else{
                $thongbao="Cap nhat loi";
            }
            
            $listbl=load_all_binh_luan();
            include "binhluan/list.php";
            break;
        //end binh luan//

        //banner//
        case 'listbn':
            $listbanner = load_all_banner();
            include "banner/list.php";
            break;
        case 'xoabn':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                delete_banner($id);
                }
            $listbanner = load_all_banner();
            include "banner/list.php";
            break;
        case 'addbn':
            if (isset($_POST['thembanner'])) {
                // $img=$_POST['img'];
                $link=$_POST['link'];

                $imgbanner=$_FILES['img']['name'];
                $target_dir="../../upload/";
                $target_file=$target_dir . basename($_FILES["img"]["name"]);
                move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                insert_banner($imgbanner,$link);
                $thongbao = "Thêm thành công";
            }
            include "banner/add.php";
            break;
        case 'suabn':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                $bner = loadOnebanner($id);
            }
            include "banner/update.php";
            break;
        case 'updatebn':
                if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $id_banner=$_POST['id_banner'];
                    // $imgbanner=$_POST['img'];
                    $link=$_POST['link'];
                    $imgbanner=$_FILES['img']['name'];
                    $target_dir="../../upload/";
                    $target_file=$target_dir . basename($_FILES["img"]["name"]);
                    move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
                    update_banner($id_banner, $imgbanner, $link);
                    $thongbao="Cap Nhat thanh cong";
                }else{
                    $thongbao="Cap nhat loi";
                }
                
                $listbanner=load_all_banner();
                include "banner/list.php";
                break;
        //end banner//

            // case tin tức
        case 'listtt':
            $listtintuc = loadAlltt();
            include "tintuc/list.php";
            break;

        case 'addtt':
            if (isset($_POST['themmoi'])) {
                $tieude = $_POST['tieu_de'];
                $ngaydang = $_POST['ngay_dang'];
                $noidung = $_POST['noi_dung'];
                $hinhanh = $_FILES['img']['name'];
                $target_dir = "../../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // echo "Thêm ảnh thành công";
                } else {
                    echo "Không thêm được ảnh";
                }
                insert_tintuc($tieude, $hinhanh, $ngaydang, $noidung);
                $thongbao = "Thêm thành công";
            }
            include "tintuc/add.php";
            break;
        
        case 'suatt':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                $tt = loadOnett($id);
            }
            include "tintuc/update.php";

        case 'updatett':
            if (isset($_POST['capnhat'])) {
                $idtintuc = $_POST['id'];
                $tieude = $_POST['tieu_de'];
                $ngaydang = $_POST['ngay_dang'];
                $noidung = $_POST['noi_dung'];
                $hinhanh = $_FILES['img']['name'];
                $target_dir = "../../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // echo "Thêm ảnh thành công";
                } else {
                    echo "Không thêm được ảnh";
                }
                update_tintuc($idtintuc, $tieude, $ngaydang, $noidung, $hinhanh);
                $thongbao = "Cập nhật thành công";
            }
            $listtintuc = loadAlltt();
            include "tintuc/list.php";
            break;
        case 'xoatt':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                delete_tintuc($id);
            }
            $listtintuc = loadAlltt();
            include "tintuc/list.php";
            break;

        // case khuyến mại
        case 'listkm':
            $listkhuyenmai = loadAllkm();
            include "khuyenmai/list.php";
            break;
        case 'addkm':
            if (isset($_POST['themmoi'])) {
                $khuyenmai = $_POST['ma_khuyen_mai'];
                $giatrikhuyenmai = $_POST['phan_tram_khuyen_mai'];
                $ngaybatdau = $_POST['ngay_bat_dau'];
                $ngayketthuc = $_POST['ngay_ket_thuc'];
                $mota = $_POST['mo_ta'];
                $trangthai = $_POST['trangthai'];
                insert_khuyenmai($khuyenmai, $giatrikhuyenmai, $ngaybatdau, $ngayketthuc, $mota, $trangthai);
                $thongbao = "Thêm thành công";
            }
            include "khuyenmai/add.php";
            break;
        case 'xoakm':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                delete_khuyenmai($id);
            }
            $listkhuyenmai = loadAllkm();
            include "khuyenmai/list.php";
            break;
        case 'suakm':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                $km = loadOnekm($id);
            }
            include "khuyenmai/update.php";
        case 'updatekm':
            if (isset($_POST['capnhat'])) {
                $id = $_POST['id'];
                $makhuyenmai = $_POST['makhuyenmai'];
                $giatri = $_POST['phantramkhuyenmai'];
                $ngaybatdau = $_POST['ngaybatdau'];
                $ngayketthuc = $_POST['ngayketthuc'];
                $mota = $_POST['mota'];
                $trangthai = $_POST['trangthai'];
                update_khuyenmai($id, $makhuyenmai, $giatri, $ngaybatdau, $ngayketthuc, $mota, $trangthai);
                $thongbao = "Cập nhật thành công";
            }
            $listkhuyenmai = loadAllkm();
            include "khuyenmai/list.php";
            break;
            // case liên hệ
        case 'listlh':
            $listlienhe=loadalllienhe();
            include "lienhe/list.php";
            break;
        case "xoalh":
            if(isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                delete_lh($id);
            }
            $listlienhe=loadalllienhe();
            include "lienhe/list.php";
            break;
        case 'updatelh':
            include "lienhe/update.php";
    }
} else {
    include "home.php";
}
