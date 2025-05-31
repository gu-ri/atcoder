<?php

function get_all_combinations(array $array): array
{
    $combos = [[]];
    foreach ($array as $x) {
        foreach ($combos as $c) {
            $combos[] = [...$c, $x];
        }
    }
    return $combos;
}

function get_all_combination_sums(array $array): array
{
    $sums = [0];
    foreach ($array as $x) {
        foreach ($sums as $sum) {
            $sums[] = $sum + $x;
        }
    }
    return $sums;
}
