<?php

function strings()
{
    return explode(" ", trim(fgets(STDIN)));
}
function ints()
{
    return array_map("intval", strings());
}
function output(...$args)
{
    echo implode(" ", $args), "\n";
}

class Main
{
    public function __construct()
    {

    }

    public function run()
    {

    }
}

(new Main())->run();
