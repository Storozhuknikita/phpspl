<?php

$queue = new SplPriorityQueue();
$queue->setExtractFlags(SplPriorityQueue::EXTR_DATA); // получаем только значения элементов

$queue->insert('Мама ', 30);
$queue->insert('Мыла ', 20);
$queue->insert('Раму ', 10);
$queue->insert('Утром ', 3);
$queue->insert('Ранним ', 5);
//$queue->insert('R', 1);
//$queue->insert('T', 1);
//$queue->insert('Y', 1);



$queue->top();
while($queue->valid())
{
    echo $queue->current();
    $queue->next();
}
echo PHP_EOL;
//YTREWQ
