<?php
$file = 'extras/user.txt';

if (file_exists($file)) {
    echo readfile($file); //returns the file content with number of bytes within the file
} else {
    echo "file doesnt exis";
}
