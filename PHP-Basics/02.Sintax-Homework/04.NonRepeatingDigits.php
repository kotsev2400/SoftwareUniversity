<?php

$number = 152;

if ($number > 99) {

    for ($i = 100; $i <= $number; $i++) {

        if ($i < 1000) {
            $firstDigit = $i % 10;
            $secondDigit = floor($i % 100 / 10);
            $thirdDigit = floor($i % 1000 / 100);
            if ($firstDigit != $secondDigit && $firstDigit != $thirdDigit && $secondDigit != $thirdDigit) {
                echo $i . '</br>';
            }
        }
    }
} else {
    echo "no";
}
