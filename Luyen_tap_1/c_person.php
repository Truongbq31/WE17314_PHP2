<?php
class person{
    public $ten;
    public $gioi_tinh;
    public $dia_chi;
    public $ngay_sinh;

//    public function __construct($ten, $gioi_tinh, $dia_chi, $ngay_sinh)
//    {
//        $this->ten = $ten;
//        $this->gioi_tinh = $gioi_tinh;
//        $this->dia_chi = $dia_chi;
//        $this->ngay_sinh = $ngay_sinh;
//    }
}
class students extends person{
    public $masv;
    public $dtb;
    public $email;

//    public function __construct($ten, $gioi_tinh, $dia_chi, $ngay_sinh, $masv, $dtb, $email)
//    {
//        parent::__construct($ten, $gioi_tinh, $dia_chi, $ngay_sinh);
//        $this->masv = $masv;
//        $this->dtb = $dtb;
//        $this->email = $email;
//    }

    public function nhapTTSV(){
        if (isset($_POST['btn_add'])){
            $this->ten = $_POST['ten'];
            $this->gioi_tinh = $_POST['gioi_tinh'];
            $this->dia_chi = $_POST['dia_chi'];
            $this->ngay_sinh = $_POST['ngay_sinh'];
            $this->masv = $_POST['masv'];
            $this->dtb = $_POST['dtb'];
            $this->email = $_POST['email'];
        }
    }

    public function setHocBong(){
        if ($this->dtb > 8){
            return "Đạt học bổng !";
        }else{
            return "Không đạt học bổng !";
        }
    }

    public function hienThiTTSV(){
        return "---Thông tin sinh viên---" ."<br>"
            ."Họ tên: " .$this->ten ."<br>"
            ."Giới tính: " .$this->gioi_tinh ."<br>"
            ."Địa chỉ: " .$this->dia_chi ."<br>"
            ."Ngày sinh: " .$this->ngay_sinh ."<br>"
            ."Mã sinh viên: " .$this->masv ."<br>"
            ."ĐTB: " .$this->dtb ."<br>"
            ."Email: " .$this->email ."<br>"
            ."Sinh viên " .$this->setHocBong();
    }
}

$student = new students();
$student->nhapTTSV();
echo $student->hienThiTTSV();