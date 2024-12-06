<?php

echo 'test';

function multiply($main_number, $sum_number) {
    if ($sum_number === 0) {
        return;
    }

    return multiply($main_number, $sum_number - 1) + $main_number;
} 

echo multiply(5,3);



echo "\n";