<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Square Root</title>
    </head>
    <body>
        <table border="1">
            <thead>
            <th>Number</th>
            <th>Square</th>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i <= 100; $i++) {
                $sqrt = number_format(sqrt($i), 2);
                $total += $sqrt; 
                echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td>$sqrt</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td><b>Total</b></td>
                <td><?= $total; ?></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>
