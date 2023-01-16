<?php
require_once "db.php";
function listNhanVien(){
    $sql = "Select * from nhan_vien";
    return getData($sql);
}
function deleteNhanVien(){
    $id = $_GET['id'];
    $sql = "delete from nhan_vien where id='$id'";
    return getData($sql, false);
}
function addNhanVien(){
    if(isset($_POST['btn_add'])){
        $id = null;
        $ten_nv = $_POST['ten_nv'];
        $luong = $_POST['luong'];
        $sql = "insert into nhan_vien values ('$id', '$ten_nv', '$luong')";
        getData($sql, false);
        header("location: index.php?add=done");
    }
}
function read_nhanVien_by_id(){
    $id = $_GET['id'];
    $sql = "Select * from nhan_vien where id = '$id'";
    return getData($sql);
}
function editNhanVien(){
    if(isset($_POST['btn_save'])){
        $id = $_GET['id'];
        $ten_nv = $_POST['ten_nv'];
        $luong = $_POST['luong'];
        $sql = "update nhan_vien set ten_nv = '$ten_nv', luong = '$luong' where id = '$id'";
        getData($sql);
        header("location: index.php?edit=done");
    }
}