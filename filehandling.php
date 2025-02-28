<?php
$file = 'extras/user.txt';

if (file_exists($file)) {
    echo readfile($file); //returns the file content with number of bytes within the file
} else {
    echo "file doesnt exis";
}

if (file_exists($file)) {
    $handle = fopen($file, 'r'); //pointeer to the file reading
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file, 'w'); //open file in write mode
    $contents = 'brad' . PHP_EOL . 'SAR' . PHP_EOL . 'mike'; //PHP_EOL USED TO PUT THE CONTENT IN SEPARATE FILES
    fwrite($handle, $contents);
    fclose($handle);
}
