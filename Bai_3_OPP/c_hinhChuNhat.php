<?php
class c_hinhChuNhat{
    public $chieuDai;
    public $chieuRong;
    public function __construct($chieuDai, $chieuRong)
    {
        $this->chieuDai = $chieuDai;
        $this->chieuRong = $chieuRong;
    }

    function tinhDienTich(){
        return $this->chieuDai * $this->chieuRong;
    }
    function tinhCV(){
        return ($this->chieuDai + $this->chieuRong) * 2;
    }

    function hienThi(){
        return "Diện tích HCN: " .$this->tinhDienTich() ." Chu vi HCN: " .$this->tinhCV();
    }
}
$HCN = new c_hinhChuNhat(10,5);
echo $HCN->hienThi();
?>
