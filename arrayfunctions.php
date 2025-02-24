<?php
$fruit = ['app', 'ban', 'or'];
//length
echo count($fruit);

//search array boolean value
echo var_dump(in_array('app', $fruit));

//add array metthods to end
$fruit[] = 'grape';
print_r($fruit);

array_push($fruit, 'blueberry', 'strawberry');
print_r($fruit);
//add to begening
array_unshift($fruit, 'mango');
print_r($fruit);
//remove from array from end
array_pop($fruit);
print_r($fruit);
//remove from the beginning
array_shift($fruit);
print_r($fruit);

//remove specific index also remove the index 
unset($fruit[2]);
print_r($fruit);
//to break into chunks  e.g. to split into chunck of two 

$chunked_array = array_chunk($fruit, 2);
print_r($chunked_array);
//to concatenate array
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];


$arr3 = array_merge($arr1, $arr2);
print_r($arr3);
//we can do it like this to 
$arr4 = [...$arr1, ...$arr2];
print_r($arr4);
//combining  arrays as key value
$a = ['g', 'r', 'y'];
$b = ['p', 'r', 's'];

$c = array_combine($a, $b);
print_r($c);
//we can print only the keys in the array as
$keys = array_keys($c);
print_r($keys);

//to filip array key and value pair
$flipped = array_flip($c);
print_r($flipped);
//to create array with range of number
$num = range(1, 20);
print_r($num);
//create new array using map array_map() applies the given function to each element of the $num array.
$newnum = array_map(function ($x) {
    return "number {$x}";
}, $num);
print_r($newnum);
//array filter takes array and function and applies and filters the array based on the given function
$lessthanten = array_filter($num, fn($x) =>
$x <= 10);
print_r($lessthanten);
//reduce takes araay and function which have carry value then add num to it carry starts from 0
$sum = array_reduce($num, fn($carry, $x) =>
$carry + $x);
var_dump($sum);
print_r($sum);
