<?php
class Circle extends Shape
{
    public $radius;
    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function DienTich()
    {
        return pi() * pow($this->radius, 2);
    }
    public function ChuVi()
    {
        return pi() * $this->radius * 2;
    }
}
class Cylinder extends Circle
{
    public $height;
    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }
    public function DienTich()
    {
        return parent::DienTich() * 2 + parent::ChuVi() * $this->height;
    }
    public function ChuVi()
    {
        return parent::DienTich() * $this->height;
    }
}
