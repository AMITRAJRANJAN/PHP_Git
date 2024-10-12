<?php

function calculatemarks($marksarr)
{
  $sum = 0;
  foreach ($marksarr as $marks) {
    $sum += $marks;
  }
  return $sum;
}

$amitmarks = array(80, 90, 95, 85, 75);
$summarks = calculatemarks($amitmarks);
echo "$summarks";
