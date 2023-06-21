<?php
class ArrayList
{
    public $container;
    public $limit;

    public function __construct($limit)
    {
        $this->container  = [];
        $this->limit = $limit;
    }
    public function add($item)
    {
        if (!$this->isFull()) {
            array_push($this->container, $item);
        } else {
            echo "danh sach da day";
        }
    }
    public function addAtPos($item, $index){
        array_splice($this->container, $index, 0, $item);
    }
    public function remove($index)
    {
        if (array_key_exists($index, $this->container)) {
            // unset($this->container[$index]);
            array_splice($this->container, $index, 1);
        } else {
            echo "khong toi tai tai vi tri index" . $index;
        }
    }
    public function update($index, $item)
    {
        if (array_key_exists($index, $this->container)) {
            $this->container[$index] = $item;
        } else {
            echo "khong toi tai tai vi tri index" . $index;
        }
    }
    public function size()
    {
        return count($this->container);
    }
    public function isFull()
    {
        return $this->size() == $this->limit;
    }
    public function getByIndex($index)
    {
        if (array_key_exists($index, $this->container)) {
            return $this->container[$index];
        } else {
            echo "khong toi tai tai vi tri index" . $index;
        }
    }
}


