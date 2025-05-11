<?php

function binary_search_gte(array $array, int $x): ?int
{
    $l = 0;
    $r = count($array) - 1;
    if ($array < $x) return null;
    while ($l < $r) {
        $mid = floor(($l + $r) / 2);
        if ($array[$mid] < $x) {
            $l = $mid + 1;
        } else {
            $r = $mid;
        }
    }
    return $l;
}

function binary_search_lte(array $array, int $x): ?int
{
    $l = 0;
    $r = count($array) - 1;
    if ($array > $x) return null;
    while ($l < $r) {
        $mid = ceil(($l + $r) / 2);
        if ($array[$mid] > $x) {
            $r = $mid - 1;
        } else {
            $l = $mid;
        }
    }
    return $l;
}
