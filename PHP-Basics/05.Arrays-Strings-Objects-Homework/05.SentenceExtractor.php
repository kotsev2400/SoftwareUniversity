<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sentence Extractor</title>
    </head>
    <body>
        <form method="get">
            <textarea name="text"></textarea></br>
            <input type="text" name="word"/></br>
            <input type="submit" name="submit" value="Search"/>
        </form>
        <?php
        $text = $_GET['text'];
        $searchWord = $_GET['word'];

        if (isset($_GET['submit'])) {
            $pattern = "/[\w+\s+]*($searchWord)[\s+\w+\s+]*[\!|\.|\?]/";
            preg_match_all($pattern, $text, $result);
            foreach ($result[0] as $value) {
                echo "$value</br>";
            }
        }
        ?>
    </body>
</html>