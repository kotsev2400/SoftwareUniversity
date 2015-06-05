<!DOCTYPE html>
<html>
    <head>
        <title>Annual Expenses</title>
        <meta charset = "UTF-8">
    </head>
    <body>
        <div>
            <form type="get">
                <label>Enter number of years</label>
                <input type="text" name="years"/>
                <input type="submit" name="submit" value="Show costs"/>
            </form>
        </div>
    </body>
</html>
<?php
if (isset($_GET['submit'])) {
    $n = $_GET['years'];
    ?>
    <table border="1">
        <thead>
        <th>Year</th>
        <th>January</th>
        <th>February</th>
        <th>March</th>
        <th>April</th>
        <th>May</th>
        <th>June</th>
        <th>July</th>
        <th>August</th>
        <th>September</th>
        <th>October</th>
        <th>November</th>
        <th>December</th>
        <th>Total:</th>
    </thead>
    <tbody>
        <?php
        for ($i = 0, $year = 2015; $i < $n; $i++, $year--) {
            echo "<tr>";
            echo "<td>$year</td>";
            for ($j = 0; $j < 12; $j++) {
                $rand = rand(0, 999);
                $total += $rand;
                echo "<td>$rand</td>";
            }
            echo "<td>$total</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
    </table>
    <?php
}