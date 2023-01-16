<?php
class conNguoi{
    public $chan;
    public $tay;
    public $mat;
    public $mui;

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
class nguoiLon extends conNguoi {
 public $longNach;

 //Phương thức khởi tạo
 public function __construct()
 {
 }
 public function di(){
    echo "Đi bằng " .$this->chan ." chân";
 }
 public function noi(){

 }
}
class treCon extends  conNguoi {
    public function bo(){
        echo "Bò bằng " .$this->chan ." chân " .$this->tay ." tay";
    }

}

$nl1 = new nguoiLon();
$nl1->setChan(2);
$nl1->setTay(2);
//$nl1->an();
$nl1->di();
$tc1 = new treCon();
$tc1->setChan(2);
$tc1->setTay(2);
//$tc1->an();
$tc1->bo();