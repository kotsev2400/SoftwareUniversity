<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Text Filter</title>
    </head>
    <body>
        <form method="get">
            <textarea name="text"></textarea></br>
            <input type="text" name="banlist"/></br>
            <input type="submit" name="submit" value="Filter"/>
        </form>
        <?php
        $text = $_GET['text'];
        $banList = explode(", ", $_GET['banlist']);

        if (isset($_GET['submit'])) {
            $workText = $text;
            foreach ($banList as $ban) {
                $newStr = str_repeat("*", strlen($ban));
                $workText = str_replace($ban, $newStr, $workText);
            }
            echo $workText;
        }
        ?>
    </body>
</html>