<?php
require_once ("toan_hoc.php");
class kiem_tra_so extends toan_hoc{
    public $soNhap;
    public function nhapTT(){
        if (isset($_POST['btn_submit'])){
            $this->soNhap = $_POST['so_nhap'];
            return $this->soNhap;
        }
    }
    public function kiemTraSo(){
        if (isset($_POST['btn_submit'])){
            return $this->kiemTraSoNguyenTo($this->nhapTT()) ."<br>"
                .$this->kiemTraSoHoanHao($this->nhapTT()) ."<br>"
                .$this->kiemTraSoChanSoLe($this->nhapTT());
        }
    }
}
$kiemTra = new kiem_tra_so();
echo $kiemTra->kiemTraSo();


