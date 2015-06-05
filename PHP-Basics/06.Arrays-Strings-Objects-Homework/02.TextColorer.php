<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Text Color</title>
    </head>
    <body>
        <form method="get">
            <textarea name="text"></textarea></br>
            <input type="submit" name="submit" value="Color text"/>
        </form>
        <?php
        $text = str_split($_GET['text']);

        if (isset($_GET['submit'])) {
            foreach ($text as $char) {
                if (ord($char) % 2 == 0) {
                    echo "<font color=\"red\">$char</font>";
                } else {
                    echo "<font color=\"blue\">$char</font>";
                }
            }
        }
        ?>
    </body>
</html>