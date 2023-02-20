<?php
namespace NSP1;
class giangVien{
    public $tengv;
    public $magv;
    public $luongCB;
    public function __construct($tengv, $magv, $luongCB)
    {
        $this->magv = $magv;
        $this->tengv = $tengv;
        $this->luongCB = $luongCB;

    }
    public function hienThiGV(){
        echo "Tên gv: " .$this->tengv ."-" ."Mã GV " .$this->magv ."-" ."Lương CB " .$this->luongCB;
    }
}


