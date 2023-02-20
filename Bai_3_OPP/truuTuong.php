<?php
abstract class DongVat {
    //định nghĩa 1 phương thức trìu tượng (hàm  trừu tượng)
    //Phương thức gì không định nghĩa được cụ thể ta cho nó là trừu tượng
    abstract function chay();
}
class ConCho extends DongVat {
    public function nhay() {

    }
    public function chay()
    {
        echo "Con chó chạy bằng 4 chân";
    }
}
class conNguoi extends DongVat{
    public function chay()
    {
        // TODO: Implement chay() method.
    }
}

$conCho = new ConCho();
$conCho->chay();
//tìm hiểu xem tại sao phải định nghĩa 1 phương thức abstract và phương thức đó có
// ý nghĩa gì
// kiểm tra điều chỉnh lại phiên bản xampp
// cài đặt composer

//Luyện tập
//XD 1 class để tính chu vi và diện tích HCN
//XD 1 class để tính chu vi và diện tích hình vuông
//XD 1 class để tính chu vi và diện tích hình thang
//Yêu cầu XD 1 class trừu tượng và xác định những phương thức trừu tượng cho 3 class trên
?>
