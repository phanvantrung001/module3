<?php
include_once "Queue.php";

$queue = new Queue();
$queue->enqueue(10);
$queue->enqueue(11);
$queue->enqueue(12);
$queue->enqueue(13);
$queue->enqueue(14);
$queue->enqueue(15);
$queue->dequeue();
$queue->dequeue();
echo "<pre>";
print_r($queue->container);
echo "</pre>";
