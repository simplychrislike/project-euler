<?php

declare(strict_types=1);

$multiples = [];
for ($i = 1; $i < 1000; $i++) {
    if ($i % 3 === 0 || $i % 5 === 0) {
        $multiples[] = $i;
    }
}

var_dump(array_sum($multiples));
