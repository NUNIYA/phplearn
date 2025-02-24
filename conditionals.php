
<?php
//if statment
$age = 20;
if ($age >= 20) {
    echo 'you are old enough';
} else {
    echo 'notolde enough';
}
echo date_default_timezone_get();
date_default_timezone_set('Africa/Addis_Ababa');
$t = date("H");

if ($t < 12) {
    echo 'GM';
} elseif ($t < 17) {
    echo 'GAF';
} else {
    echo 'GE';
}

$POST = [];
if (!empty($POST)) {

    echo $POST[0];
} else {
    echo 'no data';
}
// WE CAN WRITE AS THIS ASWELL

echo !empty($POST) ? $POST[0] : 'no data';
// we can also do 
$cond = !empty($POST) ? $POST[0] : 'no data';
echo $cond;
// if we dont have else we can use null or 

$cond = !empty($POST) ? $POST[0] : null;
//we can use collasing operator

$fp = $POST[0] ?? null;
echo $fp;



//switch in php
$favc = 'red';
switch ($favc) {
    case 'red':
        echo 'hee';
        break;
    case 'blue':
        echo 'hoo';
        break;
    default:
        echo 'meme';
}
?>
