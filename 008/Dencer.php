<?php
// B1
class Dancer {
    public $name = '';
    public $gender = false;

    public function __construct($name,$gender){
        $this->name = $name;
        $this->gender = $gender;
    }
}

//B2
$qNam = new SplQueue();
$qNam->enqueue( new Dancer('Trung',true) ); 
$qNam->enqueue( new Dancer('Hung',true) ); 
$qNam->rewind();

$qNu = new SplQueue();
$qNu->enqueue( new Dancer('Tham',false) ); 
$qNu->enqueue( new Dancer('Thao',true) ); 
$qNu->enqueue( new Dancer('Ngoc Anh',true) ); 
$qNu->rewind();

$pairs = [];
$nuWaiting = [];
$namWaiting = [];
while( $qNam->valid() || $qNu->valid() ){
    // Nam co && Nu co
    if( $qNam->valid() && $qNu->valid() ){
        $pairs[] = [
            'nam' => $qNam->current(),
            'nu' => $qNu->current(),
        ];
        $qNam->next();
        $qNu->next();
        // Nu co && Nam ko
    }elseif( $qNu->valid() && !$qNam->valid() ){
        $nuWaiting[] = $qNu->current();
        $qNu->next();
        // Nam co && Nu ko
    }elseif( $qNam->valid() && !$qNu->valid() ){
        $namWaiting[] = $qNam->current();
        $qNam->next();
    }
}

echo '<pre>';
print_r($pairs);
print_r($nuWaiting);
print_r($namWaiting);
echo '</pre>';