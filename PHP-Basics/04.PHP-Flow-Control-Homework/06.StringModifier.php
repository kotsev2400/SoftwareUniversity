<!DOCTYPE html>
<html>
    <head>
        <title>String Modifier</title>
        <meta charset = "UTF-8">
    </head>
    <body>
        <div>
            <form type="get">
                <input type="text" name="text"/>
                <label><input type="radio" name="type" value="check-palindrome"/>Check Palindrome</label>
                <label><input type="radio" name="type" value="reverse-string"/>Reverse String</label>
                <label><input type="radio" name="type" value="split"/>Split</label>
                <label><input type="radio" name="type" value="hash-string"/>Hash String</label>
                <label><input type="radio" name="type" value="shuffle-string"/>Shuffle String</label>
                <input type="submit" name="submit" value="Submit"/>
            </form>
        </div>
    </body>
</html>
<?php
$text = $_GET['text'];
$type = $_GET['type'];

if (isset($_GET['submit'])) {
    switch ($type) {
        case "check-palindrome": $result = palindromeCheck($text);
            break;
        case "reverse-string": $result = reverseString($text);
            break;
        case "split": $result = splitString($text);
            break;
        case "hash-string": $result = crypt($text);
            break;
        case "shuffle-string": $result = shuffleString($text);
            break;
    }
    echo $result;
}

$arr = [];
$sArr = [];

function shuffleString($var) {
    global $arr;
    for ($i = 0; $i < strlen($var); $i++) {
        $arr[] = $var[$i];
    }
    shuffle($arr);
    return implode("", $arr);
}

function splitString($var) {
    global $arr;
    for ($i = 0; $i < strlen($var); $i++) {
        $arr[] = $var[$i];
    }
    return implode(" ", $arr);
}

function reverseString($var) {
    global $arr, $sArr;
    for ($i = 0; $i < strlen($var); $i++) {
        $arr[] = $var[$i];
    }
    $sArr = array_reverse($arr);
    return implode("", $sArr);
}

function palindromeCheck($var) {
    global $arr, $sArr;
    for ($i = 0; $i < strlen($var); $i++) {
        $arr[] = $var[$i];
    }
    $res1 = implode("", $arr);
    $sArr = array_reverse($arr);
    $res2 = implode("", $sArr);
    
    if ($res1 == $res2) {
        return "$res1 is a palindorme!";
    } else {
        return "$res1 is not a palindrome!";
    }
}
