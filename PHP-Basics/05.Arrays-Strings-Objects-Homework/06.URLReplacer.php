<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>URL Replacer</title>
    </head>
    <body>
        <form method="get">
            <textarea name="text"></textarea></br>
            <input type="submit" name="submit" value="Replace"/>
        </form>
        <?php
        $text = $_GET['text'];
        $pattern = '/(<a href=\")(.+?)(\">)(.*?)(<\/a>)/';
        $workText = $text;
        if (isset($_GET['submit'])) {
            preg_match_all($pattern, $text, $result);
            
            foreach ($result[1] as $value) {
                $workText = str_replace($value, "[URL=", $workText);
            }
            foreach ($result[3] as $value) {
                $workText = str_replace($value, "]", $workText);
            }
            foreach ($result[5] as $value) {
                $workText = str_replace($value, "[/URL]", $workText);
            }
            
            echo $workText;
        }
        ?>
    </body>
</html>