<?php
/*
 * Binary Search By
 * Mehadi Hasan
 * www.mehadih.me
 */

$arr = array(2, 3, 4, 10, 40);
$search_value = 2;

$result = binarySearch($arr, 0, sizeof($arr) - 1, $search_value);

if (($result == -1))
    echo "Not found";
else
    echo "Found at index ",
    $result;


function binarySearch($arr, $l, $r, $x)
{
    if ($r >= $l) {
        $mid = ceil($l + ($r - $l) / 2);

        /*
         * If the element is present in middle position
         * */
        if ($arr[$mid] == $x)
            return floor($mid);

        /*
         * If element is smaller then thr mid value it must be present int left side of the array
         *
         * */
        if ($arr[$mid] > $x)
            return binarySearch($arr, $l,
                $mid - 1, $x);

        /*
         * Else the element is only present in the right side of the array
         * */
        return binarySearch($arr, $mid + 1,
            $r, $x);
    }
    /*
    When the element is not present in the array
    */
    return -1;
}