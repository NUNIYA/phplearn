
<?php
for ($x = 0; $x <= 10; $x++) {
    echo $x;
}
//while loop
$x = 1;
while ($x <= 15) {
    echo 'num' . $x . '<br>';
    $x++;
}
//do while loop
$x = 16;
do {
    echo 'num' . $x . '<br>';
    $x++;
} while ($x <= 15);

//for each used for arrays
$post = ['firstp', 'secondp'];
//we can use for loop and for each to access the datas
//for loop
for ($x = 0; $x < count($post); $x++) {
    echo $post[$x];
}
//for each
foreach ($post as $posts) {
    echo $posts;
}
//to get index
foreach ($post as  $index => $posts) {
    echo $index . '-' . $posts . '<br>';
}
//for associative array
$per = [
    '1' => 'buu',
    '4' => 'bee'
];
foreach ($per as $key => $value) {
    echo "$key - $value<br>";
}
?>
