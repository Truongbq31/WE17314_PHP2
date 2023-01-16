<?php
require_once "db.php";
function list_nv(){
    $sql = "select * from nhan_vien";
    return getData($sql);
}
function add_nv(){
    if (isset($_POST['btn_add'])){
        $id = null;
        $ten_nv = $_POST['ten_nv'];
        $luong = $_POST['luong'];
        $sql = "insert into nhan_vien values ('$id', '$ten_nv', '$luong')";
        getData($sql, false);
        header("location: index.php?done=?");
    }
}
function read_nv_by_id(){
    $id = $_GET['id_nv'];
    $sql = "select * from nhan_vien where id ='$id'";
    return getData($sql);
}
function edit_nv(){
    if (isset($_POST['btn_save'])){
        $id = $_GET['id_nv'];
        $ten_nv = $_POST['ten_nv'];
        $luong = $_POST['luong'];
        $sql = "update nhan_vien set ten_nv = '$ten_nv', luong='$luong' where id='$id'";
        getData($sql, false);
        header("location: index.php?done=?");
    }
}
function del_nv(){
    $id = $_GET['id_nv'];
    $sql = "delete from nhan_vien where id='$id'";
    getData($sql, false);
    header("location: index.php?done=?");
}
