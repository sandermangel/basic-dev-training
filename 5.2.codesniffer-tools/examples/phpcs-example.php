<?php

global $seedsArray;
$seedsArray = [10,
    20,30];

function exampleFunction($st, $doExtra = true) {
    global $seedsArray;
    $rt = [];

    if ($doExtra) {
        for ($i=0;$i<1000;$i++) {
            for ($j=0;$j<1000;$j++) {
                foreach ($seedsArray as $s) {
                    $rt[] = ($s+$j)*($i+$st);
                }
            }
        }
    } else {
        for ($i=0;$i<1000;$i++) {
            for ($j=0;$j<1000;$j++) {
                foreach ($seedsArray as $s) {
                    $rt[] = ($s-$j)*($i-$st);
                }
            }
        }
    }

    return $rt;
}

echo array_sum(exampleFunction(2, true));