<?php
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
if(isset($_GET['add'])){
    echo "<script>alert('Thêm thành công!')</script>";
}
if(isset($_GET['edit'])){
    echo "<script>alert('Sửa thành công!')</script>";
}
if(isset($_GET['del'])){
    echo "<script>alert('Xóa thành công!')</script>";
}

switch ($url){
    case "/":
        require_once "controller/c_nhan_vien.php";
        view_nhan_vien();
        break;
    case "deleteNhanVien":
        require_once "controller/c_nhan_vien.php";
        remove_nhan_vien();
        break;
    case "addNhanVien":
        require_once "controller/c_nhan_vien.php";
        add_nhan_vien();
        break;
    case "editNhanVien":
        require_once "controller/c_nhan_vien.php";
        edit_nhan_vien();
        break;
}