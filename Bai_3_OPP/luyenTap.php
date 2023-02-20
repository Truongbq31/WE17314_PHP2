<?php
//Khai báo class conNguoi gồm: hoTen, namSinh, diaChi, SDT, Email
//Định nghĩa phương thức tính tuổi trong class. Tuổi = nam hiện tại - nam sinh

//Tạo class sinhVien kế thừa conNguoi. class SV có thuộc tính: diemLy, DiemToan, DiemHoa.
//Có phương thức tính điểm TB = (hóa + lý + toán) /3
//Tạo phương thức hiển thị TTSV gồm hoTen, Sdt, tuoi và điểm TB

//Tạo class giangVien kế thừa từ class con Người có thuộc tính: luongCb, sogioDay
//Tạo phương thức tính tổng lương = luongcb * sogioday
//Tạo phương thức hiển thị TTGV gồm: hoten, sdt, tổng lương

class conNguoi{
    public $hoTen;
    public $namSinh;
    public $diaChi;
    public $sdt;
    public $email;

    public function __construct($hoTen, $namSinh, $diaChi, $sdt, $email)
    {
        $this->hoTen = $hoTen;
        $this->namSinh = $namSinh;
        $this->diaChi = $diaChi;
        $this->sdt = $sdt;
        $this->email = $email;
    }

//    public function setHoTen($hoTen){
//        $this->hoTen = $hoTen;
//    }
//    public function setNamSinh($namSinh){
//        $this->namSinh = $namSinh;
//    }
//    public function setSDT($sdt){
//        $this->sdt = $sdt;
//    }
//    public function setDiaChi($diaChi){
//        $this->diaChi = $diaChi;
//    }
//    public function setEmail($email){
//        $this->email = $email;
//    }
    public function tinhTuoi(){
        return date("Y") - $this->namSinh;
    }
}

class sinhVien extends conNguoi{
    public $diemToan;
    public $diemLy;
    public $diemHoa;

  public function __construct($hoTen, $namSinh, $diaChi, $sdt, $email, $diemToan, $diemHoa, $diemLy)
  {
      parent::__construct($hoTen, $namSinh, $diaChi, $sdt, $email);
      $this->diemToan = $diemToan;
      $this->diemLy = $diemLy;
      $this->diemHoa = $diemHoa;
  }

//    public function setDiemToan($diemToan){
//        $this->diemToan = $diemToan;
//    }
//    public function setDiemLy($diemLy){
//        $this->diemLy = $diemLy;
//    }
//    public function setDiemHoa($diemHoa){
//        $this->diemHoa = $diemHoa;
//    }

    public function tinhDTB(){
        return ($this->diemToan + $this->diemLy + $this->diemHoa) / 3;
    }
    public function hienThiTTSV(){
        return "Họ tên: " .$this->hoTen ."</br>" ."SĐT: " .$this->sdt ."<br>" ."Email: " .$this->email ."</br>" ."Tuổi: " .$this->tinhTuoi() ."</br>" ."Điểm trung bình: " .$this->tinhDTB();
    }
}

class giangVien extends conNguoi{
    public $luongCB;
    public $soGioDay;
    public function __construct($hoTen, $namSinh, $diaChi, $sdt, $email, $luongCB, $soGioDay)
    {
        parent::__construct($hoTen, $namSinh, $diaChi, $sdt, $email);
        $this->luongCB = $luongCB;
        $this->soGioDay = $soGioDay;
    }

//    public function setLuongCB($luongCB){
//        $this->luongCB = $luongCB;
//    }
//    public function setSoGioDay($soGioDay){
//        $this->soGioDay = $soGioDay;
//    }

    public function tinhluong(){
        return $this->luongCB * $this->soGioDay;
    }

    public function hienThiTTGV(){
        return "Họ tên: " .$this->hoTen ."</br>" ."SĐT: " .$this->sdt ."<br>" ."Email: " .$this->email ."</br>" ."Tổng lương: " .number_format($this->tinhluong()) ." VNĐ";
    }
}

//Khi khởi tạo đối tượng sẽ auto gọi hàm construct (nếu có)
$sv = new sinhVien("Trường", 2003, "HN", "0384714104", "truongbq31@gamil.com", 7,8,9);
//$sv->setDiemToan(8);
//$sv->setDiemLy(7);
//$sv->setDiemHoa(8);
echo "Thông tin sinh viên" ."</br>";
echo $sv->hienThiTTSV();

echo "<br>";
echo "<br>";

echo "Thông tin giảng viên" ."</br>";
$gv = new giangVien("HQT", 1996, "HN", "0382626621", "thanghq12@gmail.com", 9000000, 12);
//$gv->setLuongCB(9000000);
//$gv->setSoGioDay(12);
echo $gv->hienThiTTGV();