<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Word Mapping</title>
    </head>
    <body>
        <form method="get">
            <textarea name="text"></textarea></br>
            <input type="submit" name="submit" value="Count words"/>
        </form>
        <?php
        $text = strtolower($_GET['text']);
        preg_match_all('/[A-Za-z]+/', $text, $tempArr);
        $words = $tempArr[0];

        if (isset($_GET['submit'])) :
            $counts = array_count_values($words);
            $unique = array_unique($words);
            ?>
            <table border="1">
                <?php foreach ($unique as $value) : ?>
                    <tr>
                        <td><?= $value; ?></td>
                        <td><?= $counts[$value]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </body>
</html>