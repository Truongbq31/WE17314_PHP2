<?php
class toan_hoc{
    public function tinhTong($a, $b){
        return $a + $b;
    }
    public function tinhHieu($a, $b){
        return $a - $b;
    }
    public function tinhTich($a, $b){
        return $a * $b;
    }
    public function tinhThuong($a, $b){
        return $a / $b;
    }
    public function tinhSoMu($a, $b){
        return pow($a,$b);
    }
    public function kiemTraSoChanSoLe($a){
        if ($a % 2 == 0){
            return $a ." là số chẵn";
        }else{
            return $a ." là số lẻ";
        }
    }
    public function kiemTraSoNguyenTo($a){
        if($a < 2){
            return $a ." không phải số Nguyên Tố!";
        }
        for($i = 2; $i < $a; $i++){
            if ($a % $i == 0){
                return $a ." không phải số nguyên tố!";
            }else{
                return $a ." là số Nguyên Tố!";
            }
        }
    }
    public function kiemTraSoHoanHao($a){
        if ($a < 0){
            return $a ." không phải số hoàn hảo";
        }
        $sum = 0;
        for($i = 1; $i < $a; $i++){
            if ($a % $i == 0){
                $sum += $i;
            }
            if ($sum == $a){
                return $a ." là số hoàn hảo!";
            }else{
                return $a ." không phải số hoàn hảo!";
            }
        }
    }
}