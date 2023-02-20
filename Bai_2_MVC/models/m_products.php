<?php
require_once "models/db.php";
function getProduct(){
    $sql = "Select * from products";
    return getData($sql);
}
function getProduct_by_id(){
    $id = $_GET['id'];
    $sql = "select * from products where id ='$id'";
    return getData($sql);
}
function delete_product(){
    $id = $_GET['id'];
    $sql = "Delete from products where id='$id'";
    return getData($sql, false);
}
function add_product(){
    if (isset($_POST['btn_add'])){
        $id = null;
        $ten_san_pham = $_POST['ten_san_pham'];
        $gia = $_POST['gia'];
        $sql = "insert into products values ('$id','$ten_san_pham','$gia')";
        getData($sql, false);
        header("location: index.php");
    }
    if (isset($_POST['btn_cancel'])){
        header("location: index.php");
    }
}
function edit_product(){
    if(isset($_POST['btn_edit'])){
        $id = $_GET['id'];
        $ten_san_pham = $_POST['ten_san_pham'];
        $gia = $_POST['gia'];
        $sql = "update products set ten_san_pham = '$ten_san_pham', gia = '$gia' where id = '$id'";
        getData($sql, false);
        header("location: index.php");
    }
    if (isset($_POST['btn_cancel'])){
        header("location: index.php");
    }

}