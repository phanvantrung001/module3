<?php
$queue = new SplQueue();
$queue->enqueue('Trung');
$queue->enqueue('Hung');
$queue->enqueue('Tam');
$queue->rewind();
while ($queue->valid()) {
echo $queue->current(), "\n";
$queue->next();
}

