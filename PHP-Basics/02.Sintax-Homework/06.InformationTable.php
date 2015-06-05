<?php
$name = "Gosho";
$phone = "0882-321-423";
$age = 24;
$address = "Hadji Dimitar";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Information Table</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div id="wrapper">
            <table border="1">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td><?= $name; ?></td>
                    </tr>
                    <tr>
                        <th>Phone number</th>
                        <td><?= $phone; ?></td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td><?= $age; ?></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><?= $address; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>