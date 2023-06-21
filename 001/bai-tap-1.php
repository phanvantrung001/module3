<?php
class QuadraticEquation{
    public $a;
    public $b;
    public $c;

    public function __construct($a,$b,$c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function getA() {
        return $this->a;
    }
    public function getB() {
        return $this->b;
    }
    public function getC() {
        return $this->c;
    }
    public function getDiscriminant() {
        return ($this->b * $this->b) - (4*$this->a * $this->c);
    }
    public function getRoot1(){
        return (-$this->b + sqrt($this->b * $this->b - 4*$this->a * $this->c)) / (2*$this->a);
    }
    public function getRoot2(){
        return (-$this->b - sqrt($this->b * $this->b - 4*$this->a * $this->c)) / (2*$this->a);
    }
}

$quadraticEquation1 = new QuadraticEquation(-1,-2,-3);
$delta = $quadraticEquation1->getDiscriminant();
$r1 = $quadraticEquation1 -> getRoot1();
$r2 = $quadraticEquation1 -> getRoot2();

if ($delta > 0){
    echo '<pre>';
    echo 'phuong trinh co 2 nghiem:'. $r1 . '  ' . $r2;
    echo '</pre>';
} else if($delta == 0){
    echo '<pre>';
    echo 'phuong trinh co 1 nghiem:'. $r1;
    echo '</pre>';
} else {
    echo '<pre>';
    echo 'vo nghiem';
    echo '</pre>';
}
?>