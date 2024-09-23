
<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "Numbers:  using for loop";
for ($i = 0; $i < count($numbers); $i++) {
    echo "<br>".$numbers[$i] * 5;
}

echo "<br>Numbers: using foreach loop";
foreach ($numbers as $number) {
    echo  "<br>".$number * 5;
}

?> 