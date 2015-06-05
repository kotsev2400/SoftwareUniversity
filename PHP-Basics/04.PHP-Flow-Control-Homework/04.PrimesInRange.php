<!DOCTYPE html>
<html>
    <head>
        <title>Primes in Range</title>
        <meta charset = "UTF-8">
    </head>
    <body>
        <div>
            <form type="get">
                <label>Starting index</label>
                <input type="text" name="start"/>
                <label>End index</label>
                <input type="text" name="end"/>
                <input type="submit" name="submit" value="Submit"/>
            </form>
        </div>
    </body>
</html>
<?php
$start = $_GET['start'];
$end = $_GET['end'];
$numbers = [];
if (isset($_GET['submit'])) {
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            $numbers[] = "<b>$i</b>";
        } else {
            $numbers[] = $i;
        }
    }
}

echo implode(", ", $numbers);

function isPrime($num) {
    if ($num == 1) {
        return false;
    } else if (($num != 2) && ($num % 2 == 0)) {
        return false;
    } else if (($num != 3) && ($num % 3 == 0)) {
        return false;
    } else if (($num != 5) && ($num % 5 == 0)) {
        return false;
    } else {
        return true;
    }
}