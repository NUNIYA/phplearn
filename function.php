
<?php
//funtion have there own scope for global variable y if we want to use it inside function we need to use key word global
$y = 10;
function ruser()
{
    global $y;
    echo $y;
    echo 'user registered';
}

//anponymous functions
$multiply = function ($x, $y) {
    return $x * $y;
};
echo $multiply(2, 3);
//arrow functions we can express the above as simple as

$mul = fn($x, $y) => $x * $y;
echo $mul(5, 6);
//if argument is not sent to a funtion we can use defualt value
$mully = function ($x = 2, $y = 4) {
    return $x * $y;
};
echo $mully();
?>
