

<?php
//to create array there is two ways 
$num = [1, 2, 3];
$fr = array('apple', 'banana');
print_r($fr);

var_dump($num);


//to print array we dont use echo bc it says value should be changed to string error what we can do is this instead
echo $fr[1];
// normally array index start from 0 but if u want to create ur own index u can se associate array
$col = [
    1 => 'red',
    4 => 'blue'
];
//we can also use string as index e.g 'blue':'color' then echo $col['blue']
echo $col[4];

//multi dimentional array
$colors = [
    [
        1 => 'red',
        4 => 'blue'
    ],
    [
        1 => 'red',
        4 => 'blue'
    ],
    [
        1 => 'red',
        4 => 'blue'
    ]
];

echo $colors[1]['1'];
var_dump(json_encode($colors));
?>
