<?php

/*
When k is ODD , k-1 is EVEN , k-1 can always be reached by (k-1) & k.

In binary form:
    k   = 11
    k-1 = 10
    k-1 == (k-1) & k

That is , ((k-1) | k) is always k. And ((k-1) | k) <= n is always TRUE.

When k is EVEN , k-1 is ODD , k-1 can only be reached if and only if ((k-1) | k) <= n is TRUE
Why?

In binary form:
    k   = 10110
    k-1 = 10101
    pos = 10111
    k-1 == (k-1) & pos

You can get k-1 if pos <= n is TRUE. And you can get pos by ((k-1) | (k-1+1)) , that is , ((k-1) | k). Otherwise , you just need to follow the process above when k is ODD (because k-1 is ODD) , then you get the answer k-2.
In brief , you can just do the test ((k-1) | k) <= n to determine the answer.
 */

function findMaxValue(int $range, int $limit)
{
    if ((($limit - 1) | $limit) <= $range) {
        return $limit - 1;
    }

    return $limit - 2;
}

function run()
{
    $data = [
        [5, 2],
        [8, 5],
        [2, 2]
    ];

    foreach ($data as $datum) {
        echo $datum[0] . ' ' . $datum[1] . ': ' . findMaxValue($datum[0], $datum[1]) . "\n";
    }

}

run();
