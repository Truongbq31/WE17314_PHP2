<?php
abstract class hinhHoc{
    abstract function chuVi();
    abstract function dienTich();
}
class HCN extends hinhHoc{
    public $chieuDai;
    public $chieuRong;
    public function __construct($chieuDai, $chieuRong)
    {
        $this->chieuDai = $chieuDai;
        $this->chieuRong = $chieuRong;
    }

    public function chuVi()
    {
        return ($this->chieuDai + $this->chieuRong) * 2;
        // TODO: Implement chuVi() method.
    }
    public function dienTich()
    {
        return $this->chieuDai * $this->chieuRong;
        // TODO: Implement dienTich() method.
    }
}
class hinhVuong extends hinhHoc{
    public function chuVi()
    {
        // TODO: Implement chuVi() method.
    }
    public function dienTich()
    {
        // TODO: Implement dienTich() method.
    }
}

$hcn = new HCN(5,2);
echo $hcn->dienTich();