<?php
require_once "models/m_nv.php";
function listNV(){
    $nhan_vien = list_nv();
    include_once "views/nhan_vien/v_list_nv.php";
}
function addNV(){
    add_nv();
    include_once "views/nhan_vien/v_add_nv.php";
}
function editNV(){
    $nv_details = read_nv_by_id();
    edit_nv();
    include_once "views/nhan_vien/v_edit_nv.php";
}
function delNV(){
    del_nv();
}
