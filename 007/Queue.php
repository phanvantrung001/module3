<?php
class Queue{
    public $container;
    public function __construct()
    {
        $this->container = [];
    }
    public function enqueue($item){
        array_push($this->container, $item);
    }
    public function dequeue(){
       return array_shift($this->container);
    }
    public function size(){
        return count($this->container);
    }
    public function isEmpty(){
        return empty($this->container); 
    }
} 