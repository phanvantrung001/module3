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
$qNam = new SplStack();
$qNam->push( new Dancer('Trung',true) );
$qNam->push( new Dancer('Hung',true) );
$qNu = new SplStack();
$qNu->push( new Dancer('Tham',false) );
$qNu->push( new Dancer('Thao',true) );
$qNu->push( new Dancer('Ngoc Anh',true) );

$pairs = [];
$nuWaiting = [];
$namWaiting = [];
while( $qNam->count() > 0 || $qNu->count() > 0 ){
    // Nam co && Nu co
    if( $qNam->count() > 0 && $qNu->count() > 0 ){
        $pairs[] = [
            'nam' => $qNam->pop(),
            'nu' => $qNu->pop(),
        ];
        // Nu co && Nam ko
    }elseif( $qNu->count() > 0 && $qNam->count() == 0 ){
        $nuWaiting[] = $qNu->pop();
        // Nam co && Nu ko
    }elseif( $qNam->count() > 0 && $qNu->count() == 0 ){
        $namWaiting[] = $qNam->pop();
    }
}

echo '<pre>';
print_r($pairs);
print_r($nuWaiting);
print_r($namWaiting);
echo '</pre>';