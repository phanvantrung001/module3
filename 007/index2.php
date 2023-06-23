<?php
include_once "Stack.php";
include_once "books.php";

$books = new Books(3);
$books->push("tin hoc 12");
$books->push("toan 12");
$books->push("vat ly 12");
$books->push("hoa 12");

// $books->pop();
echo $books->isEmpty();
echo "<pre>";
print_r($books->getStack());
echo "</pre>";
