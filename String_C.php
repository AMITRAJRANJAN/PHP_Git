<?php
$name = "Radhe Shyam";
echo "<br> Length of '$name' is :" . strlen($name);
echo "<br>Reverse of '$name' is :" . strrev($name);
echo "<br> Position of 'Shyam' in '$name' is :" . strpos($name, "Shyam");
echo "<br> Replace 'Shyam' by 'Radhe' in '$name' :" . str_replace("Shyam", "Radhe", $name);
echo "<br> Repeat $name 10 Times :" . str_repeat($name, 10);
