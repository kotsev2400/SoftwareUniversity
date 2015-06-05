<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Most Frequent Tag</title>
    </head>
    <body>
        
        <form method="GET">
            <label>Enter Tags:</label><br />
            <input type="text" name="tags"/>
            <input type="submit" name="submit" value="Submit"/>
        </form>
        <?php
        if (isset($_GET['submit'])) {
            
            $text = $_GET['tags'];
            $textArr = (explode(", ", $text));
            $countArr = array_count_values($textArr);
            arsort($countArr);
            
            foreach ($countArr as $value => $count) {
                echo "$value : $count times <br />";
            }
            
            $mfTag = current(array_keys($countArr));
            
            echo "Most Frequent Tag is: $mfTag";
        }
        ?>
    </body>
</html>
