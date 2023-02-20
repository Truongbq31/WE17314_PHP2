<?php
//interface (tính đa hình) không phải là class
//Trong interface không có phương thức trừu tượng nên không cần phải dùng từ khóa abstract ở đầu
interface DiChuyen{
    function chay(); //Đây là phương thức trừu tượng trong interface
}
//Đối với interface phải dùng từ khóa implements
class conCho implements DiChuyen {
    public function chay()
    {
        echo "Con chó chạy bằng 4 chân";
        // TODO: Implement chay() method.
    }
}
class oTo implements DiChuyen{
    public function chay()
    {
        echo "Ô tô chạy bằng 4 bánh";
        // TODO: Implement chay() method.
    }
}
$cc = new conCho();
$cc->chay();
