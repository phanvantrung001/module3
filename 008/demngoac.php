<?php
$string = 's * (s – a) * (s – b * (s – c) ';
$array_string = str_split($string);

$leftStack = [];
$rightStack = [];
foreach($array_string as $char){
    if($char == '('){
        array_push($leftStack, $char);
    }
    if($char == ')'){
        if(empty($leftStack)){
            echo 'NOT OK';
            exit;
        }else{
            array_pop($leftStack);
            array_push($rightStack, $char);
        }
    }
}

if( count($leftStack) == count($rightStack) ){
    echo 'OK';
}else{
    echo 'NOT OK';
}
echo '<pre>';
print_r($leftStack);
print_r($rightStack);
echo '</pre>';

