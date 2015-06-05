<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Side Bar Builder</title>
    </head>
    <body>
        <form method="get">
            <label>Categories: </label>
            <input type="text" name="categories"/></br>
            <label>Tags: </label>
            <input type="text" name="tags"/></br>
            <label>Months: </label>
            <input type="text" name="months"/></br>
            <input type="submit" name="submit" value="Generate"/>
        </form>
        <?php
        $categories = explode(", ", $_GET['categories']);
        $tags = explode(", ", $_GET['tags']);
        $months = explode(", ", $_GET['months']);

        if (isset($_GET['submit'])) {
            echo sideBar("Categories", $categories);
            echo sideBar("Tags", $tags);
            echo sideBar("Months", $months);
        }

        function sideBar($type, $arr) {
            $result = "<h2>$type</h2>";
            $result .= "<hr>";
            $result .= "<ul>";
            foreach ($arr as $value) {
                $result .= "<li><a href=\"#\">$value</a></li>";
            }
            $result .= "</ul>";
            return $result;
        }
        ?>
    </body>
</html>