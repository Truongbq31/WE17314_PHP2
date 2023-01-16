<?php
class c_phuongTrinhBac2{
    public $a;
    public $b;
    public $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    function tinhDelta(){
        return ($this->b*$this->b) - (4*$this->a*$this->c);
    }
    function tinhPTBac2(){
        if ($this->a == 0){
            return "Phương trình vô nghiệm";
        }
        if($this->tinhDelta() > 0){
            $x1 = (-$this->b + sqrt($this->tinhDelta())) / 2*$this->a;
            $x2 = (-$this->b - sqrt($this->tinhDelta())) / 2*$this->a;
            return "Phương trình có 2 nghiệm: " .$x1 .", " .$x2;
        }
        if ($this->tinhDelta() == 0){
            $x = -$this->b / (2*$this->a);
            return "Phương trình có nghiệm kép là: x1 = x2 = " .$x;
        }
        if ($this->tinhDelta() < 0){
            return "Phương trình vô nghiệm";
        }
    }
}
$pt = new c_phuongTrinhBac2(1,2,3);
echo $pt->tinhPTBac2()
?>
