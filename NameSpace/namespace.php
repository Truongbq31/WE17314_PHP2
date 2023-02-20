<?php

include_once ("nsp1.php");
include_once ("nsp2.php");
$gv = new NSP1\giangVien("Trường", "GV001", 900000);
$gv->hienThiGV();
$gv2 = new \NSP2\giangVien("Trường", "PH24688", 5);
$gv2->hienThiGV();