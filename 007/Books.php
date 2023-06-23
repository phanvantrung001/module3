<?php
class Books implements Stack
{
    protected $stack;
    protected $item;
    public function __construct($item)
    {
        $this->stack = [];
        $this->item = $item;
    }
    function push($item)
    {
        if (count($this->stack) > $this->item) {
            throw new Exception("stack full");
        } else {
            array_push($this->stack, $item);
        }
    }
    // lay va xoa
    function pop()
    {
        if ($this->isEmpty()) {
            throw new Exception("stack empty");
        } else {
            return array_pop($this->stack);
        }
    }
    function top()
    { 
        return end($this->stack);
    }
    
   // kiem tra rong
    function isEmpty()
    { if(!empty($this->stack)){
        return empty($this->stack);
    }else{
        echo "mang rong";
    }
    }
    function getStack(){
        return $this->stack;
    }
}
