<?php
require_once "models/m_nhan_vien.php";
function view_nhan_vien(){
    $nhan_vien = listNhanVien();
    include_once "view/nhan_vien/v_nhan_vien.php";
}
function remove_nhan_vien(){
    deleteNhanVien();
    header("location: index.php?del=done");
}
function add_nhan_vien(){
    addNhanVien();
    include_once "view/nhan_vien/v_add_nhan_vien.php";
}
function edit_nhan_vien(){
    $nv_detail = read_nhanVien_by_id();
    editNhanVien();
    include_once "view/nhan_vien/v_edit_nhan_vien.php";
}
