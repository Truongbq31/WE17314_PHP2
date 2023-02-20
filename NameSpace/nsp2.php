<?php
namespace NSP2;
class giangVien{
    public $tengv;
    public $magv;
    public $namLamViec;
    public function __construct($tengv, $magv, $namLamViec)
    {
        $this->magv = $magv;
        $this->tengv = $tengv;
        $this->namLamViec = $namLamViec;

    }
    public function hienThiGV(){
        echo "Tên gv: " .$this->tengv ."-" ."Mã GV " .$this->magv ."-" ."Năm làm việc " .$this->namLamViec;
    }
}
