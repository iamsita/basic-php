<html>
<?php
$i = 0;
while ($i <= 10) {
    $i += 2;
    echo $i . "<br>";
}
$j = 1;
while ($j <= 10 && $j % 2 === 0) {
    echo $j . "<br>";
}


// $i = 5;
// if ($i == 5) {
//     if ($i % 2 == 1) {
//         echo "double if checking $i<br/";
//     }
// }

// echo "<br/";


$a = 1;
$b = "1";

echo "a=$a<br/>";

echo "b=`$b`<br/>";

if ($a == $b) {
    echo "a==b is true <br/>";
} else {
    echo "a==b is false <br/>";
}


if ($a === $b) {
    echo "a===b is datatype true <br/>";
} else {
    echo "a===b is datatype false <br/>";
}


echo "<br/>";

echo " type of $a is " . gettype($a);

echo "<br/>";
echo " type of $a is " . gettype($b);

?>

</html>