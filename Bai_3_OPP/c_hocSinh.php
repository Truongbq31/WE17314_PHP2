<?php
class c_hocSinh{
    public $ten;
    public $namSinh;
    public $diaChi;
    public $diemToan;
    public $diemLy;
    public $diemHoa;

//    public function __construct($ten, $diaChi, $namSinh, $diemToan, $diemLy, $diemHoa)
//    {
//        $this->ten = $ten;
//        $this->namSinh = $namSinh;
//        $this->diaChi = $diaChi;
//        $this->diemToan = $diemToan;
//        $this->diemHoa = $diemHoa;
//        $this->diemLy = $diemLy;
//    }

    public function setTen($ten){
        $this->ten=$ten;
    }
    public function setNamSinh($namSinh){
        $this->namSinh=$namSinh;
    }
    public function setDiaChi($diaChi){
        $this->diaChi=$diaChi;
    }
    public function setDiemToan($diemToan){
        $this->diemToan=$diemToan;
    }
    public function setDiemLy($diemLy){
        $this->diemLy=$diemLy;
    }
    public function setDiemHoa($diemHoa){
        $this->diemHoa=$diemHoa;
    }

    public function getTen(){
        return $this->ten;
    }
    public function getNamSinh(){
        return $this->namSinh;
    }
    public function getDiaChi(){
        return $this->diaChi;
    }
    public function getDiemToan(){
        return $this->diemToan;
    }
    public function getDiemLy(){
        return $this->diemLy;
    }
    public function getDiemHoa(){
        return $this->diemHoa;
    }

    function tinhTuoi(){
        return date("Y") - $this->getNamSinh();
    }

    function tinhDTB(){
        return ($this->getDiemToan() + $this->getDiemLy() + $this->getDiemHoa())/3;
    }
    function xepLoai(){
        if($this->tinhDTB() < 4){
            return "Yếu";
        }elseif ($this->tinhDTB() >= 4 && $this->tinhDTB() < 6){
            return "Trung bình";
        }elseif ($this->tinhDTB() >= 6 && $this->tinhDTB() < 8){
            return "Khá";
        }elseif ($this->tinhDTB() >= 8 && $this->tinhDTB() <= 10){
            return "Giỏi";
        }
    }

    function hienThi(){
        return "Tên SV: " .$this->getTen() ." - " ."Địa chỉ: " .$this->getDiaChi() ." - " ."Tuổi: " .$this->tinhTuoi() ." - " ."Điểm trung bình: " .$this->tinhDTB() ." - " ."Xếp loại: " .$this->xepLoai();
    }
}
$sv = new c_hocSinh();
$sv->setTen("Trường");
$sv->setNamSinh(2003);
$sv->setDiaChi("Thanh Hóa");
$sv->setDiemToan(7);
$sv->setDiemLy(7);
$sv->setDiemHoa(8);
echo $sv->hienThi();
?>
