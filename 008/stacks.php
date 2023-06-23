<?php
$q = new SplStack();
$q->push("Trung");
$q->push("Hung");
$q->push("Tam");
// dua con tro ve vi tri ban dau 
$q->rewind();


while($q->valid()){
    echo $q->current();//tam
    $q->next();
}





// echo "<pre>";
// print_r($q);
// echo "</pre>";


