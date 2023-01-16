<?php
//Tạo class giảng viên gồm thuộc tính: magv, tengv, namsinh, luongCB, soGioDay
//Xây dựng 1 hàm tạo có tham số cho các thuộc tính trên
//Xây dựng các hàm set cho từng thuộc tính
//Xây dựng 1 phương thức tính tuổi có trả về = năm hiện tại - năm sinh
//XD 1 phương thức tính lương có trả về = luongCB * soGioDay
//XD 1 phương thức hiển thị thông tin giảng viên gồm: msgv, tengv, tuoi, luong
//Yêu cầu khởi tạo 2 giảng viên và gọi phương thức hiển thị ttgv

class giangVien{
    public $magv;
    public $tengv;
    public $namSinh;
    public $luongCB;
    public $soGioDay;

    public function __construct($magv, $tengv, $namSinh, $luongCB, $soGioDay)
    {
        $this->magv=$magv;
        $this->tengv=$tengv;
        $this->namSinh=$namSinh;
        $this->luongCB=$luongCB;
        $this->soGioDay=$soGioDay;
    }
    public function setMaGV($magv){
        $this->magv=$magv;
    }
    public function setTenGV($tenGV){
        $this->tengv=$tenGV;
    }
    public function setNamSinh($namSinh){
        $this->namSinh=$namSinh;
    }
    public function setLuongCB($luongCB){
        $this->luongCB=$luongCB;
    }
    public function setSoGioDay($soGioDay){
        $this->soGioDay=$soGioDay;
    }

    public function tinhTuoi(){
        return date("Y") - $this->namSinh;
    }
    public function tinhLuong(){
        return $this->luongCB * $this->soGioDay;
    }
    public function hienThiThongTin(){
        return "Mã GV: ".$this->magv ." Tên GV: ".$this->tengv ." Tuổi: " .$this->tinhTuoi() ." Lương: " .$this->tinhLuong();
    }
}
$gv1 = new giangVien("PH123456", "Nam", 1996, 10000000, 12);
echo $gv1->hienThiThongTin();
$gv2 = new giangVien("GV0000", "Thắng", 1996, 10000000, 8);
echo $gv2->hienThiThongTin();
?>
