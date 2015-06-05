<!DOCTYPE html>
<html>
    <head>
        <title>Car Randomizer</title>
        <meta charset = "UTF-8">
    </head>
    <body>
        <div>
            <form type="get">
                <label>Enter cars</label>
                <input type="text" name="cars"/>
                <input type="submit" name="submit" value="Show result"/>
            </form>
        </div>
    </body>
</html>
<?php
$cars = explode(", ", $_GET['cars']);
$colors = ["red", "green", "blue", "black", "white"];
$count = [1, 2, 3, 4, 5];

if (isset($_GET['submit'])) {
    ?>
    <table border="1">
        <thead>
            <th>Car</th>
            <th>Color</th>
            <th>Count</th>
        </thead>
        <tbody>
            <?php
            foreach ($cars as $car) {
                $colorKey = array_rand($colors);
                $countKey = array_rand($count);
                echo "<tr>";
                echo "<td>$car</td>";
                echo "<td>$colors[$colorKey]</td>";
                echo "<td>$count[$countKey]</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <?php
}