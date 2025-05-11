<?php

function strings()
{
    return explode(" ", trim(fgets(STDIN)));
}
function ints()
{
    return array_map("intval", strings());
}
function ints_lines($n)
{
    $lines = [];
    for ($i = 0; $i < $n; $i++) {
        $lines[] = ints();
    }
    return $lines;
}
function ints_cols($n)
{
    $lines = ints_lines($n);
    $columns = [];
    $column_count = count($lines[0]);
    for ($i = 0; $i < $column_count; $i++) {
        $columns[$i] = array_column($lines, $i);
    }
    return $columns;
}
function output(...$args)
{
    echo implode(" ", $args), "\n";
}
