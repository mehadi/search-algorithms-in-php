<?php

$data = array(4, 2, 5, 6, 14, 7, 15, 3);
$result = linearSearch($data, 15);

if ($result == -1) {
    echo "Not found";
} else {
    echo "Found at index ", $result;
}


function linearSearch($data, $value)
{
    for ($i = 0; $i < sizeof($data); $i++) {
        if ($data[$i] == $value) return $i;
    }
    return -1;
}

?>