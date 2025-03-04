<?php


function inverse($x)
{
    if (! $x) {
        throw new Exception('Division by zero');
    }
    return 1 / $x;
}
//echo inverse(0); //this with no try catch statment would output  uncaught error

try {
    echo inverse(5);
    echo inverse(0);
} catch (Exception $e) {
    echo 'caught Exception', $e->getMessage(), ' ';
} finally {
    echo 'first finally';
}

try {

    echo inverse(0);
} catch (Exception $e) {
    echo 'caught Exception', $e->getMessage(), ' ';
} finally {
    echo 'second finally';
}
