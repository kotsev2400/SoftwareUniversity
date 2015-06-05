<?php

varCheck($var = "hello");
varCheck($var2 = 15);
varCheck($var3 = 1.234);
varCheck($var4 = array(1, 2, 3));
varCheck($var5 = (object) [2, 34]);


function varCheck($var) {
    if (gettype($var) == integer || gettype($var) == double) {
        var_dump($var);
        echo "</br>";
    } else {
        echo gettype($var) . "</br>";
    }
}