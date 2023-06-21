
<?php
include "Triangle.php";
class Shape extends Triangle{
   protected $h;
    public function __construct($a,$b,$c){
        parent::__construct($a,$b,$c);
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    
   
    public function toString(){
        return "<h4>Thông tin của tam gíac con :</h4>". "Cạnh a = ". $this->a.' '.", Cạnh b = ".$this->b.' '.", Cạnh c = ".$this->c."<br>"
        ." Diện tính tam giác :".$this->getArea()."<br>"."Chu vi tam giác : ".parent::getPerimeter()."<br>"."Màu sắc : ".$this->color;
    }
}
// $shape = new Shape(10,8,7);
// echo $shape->toString();
// echo "<br>";
// echo "Chiều cao : ". $shape->getH();
// echo "<br>";
// echo "<br>";
// $shape->__construct(25,17,11);
// echo $shape->toString();


$triangle = new Triangle(100,85,71);
echo $triangle->toString();
echo "<br>";
echo "Chiều cao : ". $triangle->getH();
$triangle->__construct(255,170,110);
echo $triangle->toString();