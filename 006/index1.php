<?php
include_once "arraylist.php";
$arraylist = new ArrayList(5);
$arraylist->add("van");
$arraylist->add("su");
$arraylist->add("dia");

$arraylist->remove(0);

echo $arraylist->getByIndex(0);
 $arraylist->addAtPos("ly",0);





echo "<pre>";
print_r($arraylist->container);
echo "</pre>";

?>