<?php

use Zhanchmini\Demo\ContinuousSum;

$startNumber = 1;
$endNumber = 100;

$continuousSum = new  ContinuousSum($startNumber, $endNumber);
$continuousSum->sum();

echo $continuousSum->getSum();