<!DOCTYPE html>
<html>
    <head>
        <title>Sum of Digits</title>
        <meta charset = "UTF-8">
    </head>
    <body>
        <div>
            <form type="get">
                <label>Input string</label>
                <input type="text" name="input"/>
                <input type="submit" name="submit" value="Submit"/>
            </form>
        </div>
    </body>
</html>
<?php
$input = explode(",", $_GET['input']);
if (isset($_GET['submit'])) {

    echo "<table border=\"1\">";
    foreach ($input as $value) {
        echo "<tr>";
        echo "<td>$value</td>";
        if (numberCheck($value)) {
            echo "<td>" . sumDigits($value) . "</td>";
        } else {
            echo "<td>I cannot sum that</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

function numberCheck($num) {
    $pattern = "/[0-9]+/";
    if (preg_match($pattern, $num)) {
        return true;
    }
    return false;
}

function sumDigits($num) {
    for ($i = 0; $i < strlen($num); $i++) {
        $totalSum += $num[i];
    }
    return $totalSum;
}
