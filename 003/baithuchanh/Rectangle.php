<?php
class Ractangle extends Shape {
    public $widht;
    public $height;
public function __construct($widht, $height) {
    $this->widht = $widht;
    $this->height = $height;
}
public function DienTich(){
    return $this->widht * $this->height;
}
public function ChuVi(){
    return ($this->widht + $this->height)*2;
}
}

?>