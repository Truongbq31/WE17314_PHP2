<?php
class conNguoi{
    public $chan;
    public $tay;
    public $mat;
    public $mui;
    //Hàm khởi tạo class cha
    public function __construct($chan, $tay, $mat, $mui)
    {
        $this->chan = $chan;
        $this->tay = $tay;
        $this->mat = $mat;
        $this->mui = $mui;
    }

    public function an(){
        echo "Ăn bằng mồm";
    }
    public function setChan($chan){
        $this->chan = $chan;
    }
    public function setTay($tay){
        $this->tay = $tay;
    }
}

//Khi class con chưa có hàm khởi tạo thì class con sẽ auto nhận hàm khởi tạo từ class cha
class nguoiLon extends conNguoi {
 public $longNach;

 public function __construct($chan, $tay, $mat, $mui, $longNach)
 {
     parent::__construct($chan, $tay, $mat, $mui); //Đây được dùng để gọi hàm khởi tạo của class cha
     $this->longNach = $longNach;
 }

    public function di(){
    echo "Đi bằng " .$this->chan ." chân " .$this->tay ." tay" ."<br>";
    echo "Có " .$this->longNach ." lông nách";
 }

}

//class treCon extends  conNguoi {
//    public function bo(){
//        echo "Bò bằng " .$this->chan ." chân " .$this->tay ." tay";
//    }
//
//}

$nl1 = new nguoiLon(1,2,4,5, 1); //Nhận hàm khởi tạo từ class Cha
$nl1->di();
////$nl1->an();
//$nl1->di();
//$tc1 = new treCon();
//$tc1->setChan(2);
//$tc1->setTay(2);
////$tc1->an();
//$tc1->bo();