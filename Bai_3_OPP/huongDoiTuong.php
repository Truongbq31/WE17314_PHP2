<?php
//Khai báo class
class sinhVien{
    //Đây là thuộc tính -> hay còn được gọi là biến
    public $tenSV; //Biến tenSV này là của class
    public $masv;
    public $namSinh;

    //Phương thức khởi tạo(Hàm khởi tạo có tham số truyền vào)
    public function __construct($tenSV, $masv, $namSinh)
    {
        $this->tenSV = $tenSV;
        $this->masv = $masv;
        $this->namSinh = $namSinh;
    }

    //Đây là phương thức set Tên SV
    public function setTenSV($tenSV){ //Biến tenSV này là của tham số
        $this->tenSV = $tenSV; //Set giá trị cho biến tenSV
    }
    public function setMaSV($mssv){
        $this->masv = $mssv;
    }
    public function setNamSinh($namSinh){
        $this->namSinh = $namSinh;
    }
    //Đây là phương thức -> hay còn được gọi là hàm
    public function hienThiThongTinSV(){
        return "Tên sinh viên: ".$this->tenSV ." - Mã sinh viên " .$this->masv ." - Năm sinh " .$this->namSinh;
    }

}
//Khởi tạo đối tượng (Cứ có new thì được gọi là khởi tạo đối tượng)
$sv1 = new sinhVien("Thắng", "PH25857", 2003);
//$sv1->setTenSV("Trường");
//$sv1->setMaSV("PH25857");
//$sv1->setNamSinh(2003);
echo $sv1->hienThiThongTinSV();

//$sv2 = new sinhVien();
//$sv2->setTenSV("Đạt");
//$sv2->setMaSV("PH21656");
//$sv2->setNamSinh(2003);
//$sv2->hienThiThongTinSV();

?>
