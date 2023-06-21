<?php
include_once ('Point2D.php');
class Point3D extends Point2D{
   protected $z;
   protected $xyz;
    public function __construct($x,$y,$z) {
        parent::__construct($x,$y);
        $this->z=$z;
    }
    public function getZ(){
        return $this ->z;
    }
    public function setZ($z){
        $this->z = $z;
    }
    public function getXYZ(){
        return array($this->x,$this->y,$this->z);
    }
    public function setXYZ($x,$y,$z){
        $this->__construct($x,$y,$z);
    }
    public function toString(){
        $xyz_array = array($this->x, $this->y, $this->z);
        return $xyz_array;
    }
}
$point3d = new Point3D(2,5,3);
print_r($point3d->toString());
echo "<br>";
$point2d = new Point2D(2,4);
echo $point2d->toString();

?>