<?php
interface Stack {
    function push($item);
    function pop();
    function top();
    function isEmpty();  
}