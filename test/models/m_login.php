<?php
require_once "db.php";
function login(){
        $sql = "select * from account";
        return getData($sql);
}
