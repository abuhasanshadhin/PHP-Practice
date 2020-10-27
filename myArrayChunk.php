<?php

$input_array = array('a', 'b', 'c', 'd', 'e', 'f', 'g');

function myArrayChunk($array, $size, $preserve_keys = false) {
    $i = $j = 0;
    $newArray = [];
    $_size = $size;
    foreach ($array as $k => $item) {
        if ($i == $_size) {
            $j = ++$j;
            $_size = $_size + $size;
        }
        if ($preserve_keys) {
            $newArray[$j][$k] = $item;
        } else {
            $newArray[$j][] = $item;
        }
        $i++;
    }
    return $newArray;
}

print_r(myArrayChunk($input_array, 2));

?>




// Output

Array
(
    [0] => Array
        (
            [0] => a
            [1] => b
        )

    [1] => Array
        (
            [0] => c
            [1] => d
        )

    [2] => Array
        (
            [0] => e
            [1] => f
        )

    [3] => Array
        (
            [0] => g
        )
)
