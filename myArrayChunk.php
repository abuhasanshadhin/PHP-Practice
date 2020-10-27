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
