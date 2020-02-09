<?php

declare(strict_types=1);

$terms = [1, 2];
for ($i = 0, $j = 1; $terms[count($terms) - 1] <= 4000000; $i++, $j++) {
    $terms[] = $terms[$i] + $terms[$j];
}

$eventTerms = array_filter($terms, fn($n) => ($n % 2 === 0));
var_dump(array_sum($eventTerms));
