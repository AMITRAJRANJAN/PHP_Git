<?php
$a = 79;
$char = "e";
if ($a > 18) {
  echo "You can vote";
} elseif ($a == 18) {
  echo "You are eligible for vote";
} else {
  echo "Please wait for " . (18 - $a) . " Years";
}

echo "<br>";

if ($a > 18 && $a <= 60) {
  echo "You are eligible to drive a vehicle";
} else if ($a < 18 || $a > 60) {
  echo "You are eligible to drive a bicycle";
}

echo "<br>";

switch ($char) {
  case 'a':
    echo "It is A";
    break;

  case 'e':
    echo "It is E";
    break;

  case 'i':
    echo "It is I";
    break;

  case 'o':
    echo "It is O";
    break;

  case 'u':
    echo "It is U";
    break;

  default:
    echo "It is a consonant";
    break;
}
