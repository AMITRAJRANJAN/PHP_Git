<?php

$i = 1;
while ($i <= 10) {
  echo "i :: " . $i;
  $i++;
}

echo "<br><br>";

for ($j = 0; $j <= 15; $j++) {
  echo "j :: $j";
}

echo "<br><br>";

$k = 99;
do {
  echo "K = $k";
  $k++;
} while ($k < 1);

echo "<br><br>";

$arr = ["Bag", "Bottle", "Books", "Note Book", "Lunch"];
$arr2 = array("Bag2", "Bottle2", "Books2", "Note Book2", "Lunch2");
for ($a = 0; $a < count($arr); $a++) {
  echo "<br> $arr[$a]";
}

echo "<br><br>";

foreach ($arr2 as $ar) {
  echo "<br> $ar";
}
