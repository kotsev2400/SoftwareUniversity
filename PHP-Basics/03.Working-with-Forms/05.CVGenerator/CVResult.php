<?php
session_start();

$firstName = $_SESSION['first-name'];
$lastName = $_SESSION['last-name'];
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];
$gander = $_SESSION['sex'];
$birthDate = $_SESSION['birth-date'];
$nationality = $_SESSION['nationality'];

$companyName = $_SESSION['company-name'];
$workFrom = $_SESSION['work-from-date'];
$workTo = $_SESSION['work-to-date'];

$progLng = $_SESSION['prog-lang'];
$progLngLevel = $_SESSION['prog-lang-level'];

$lng = $_SESSION['language'];
$lngC = $_SESSION['level-c'];
$lngR = $_SESSION['level-r'];
$lngW = $_SESSION['level-w'];

$driver = $_SESSION['driver'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CV Result</title>
    </head>
    <body>
        <a href="CVForm.php">Back to CV Form</a>
        <h1>CV</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>Personal Information</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>First Name</td>
                    <td><?= $firstName; ?></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><?= $lastName; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?= $email; ?></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><?= $phone ?></td>
                </tr>
                <tr>
                    <td>Gander</td>
                    <td><?= $gander; ?></td>
                </tr>
                <tr>
                    <td>Birth Date</td>
                    <td><?= $birthDate; ?></td>
                </tr>
                <tr>
                    <td>Nationality</td>
                    <td><?= $nationality; ?></td>
                </tr>
            </tbody>
        </table>

        <table border="1">
            <thead>
                <tr>
                    <th>Last Work Position</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Company Name</td>
                    <td><?= $companyName; ?></td>
                </tr>
                <tr>
                    <td>From</td>
                    <td><?= $workFrom; ?></td>
                </tr>
                <tr>
                    <td>To</td>
                    <td><?= $workTo; ?></td>
                </tr>
            </tbody>
        </table>

        <table border="1">
            <thead>
            <th>Computer Skills</th>
        </thead>
        <tbody>
            <tr>
                <td>Programming Languages</td>
                <td>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Language</th>
                                <th>Skill Level</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($progLng as $id => $var) {
                                echo "<tr><td>$var</td>"
                                . "<td>$progLngLevel[$id]</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

    <table border="1">
        <thead>
        <th>Other Skills</th>
    </thead>
    <tbody>
        <tr>
            <td>Languages</td>
            <td>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Language</th>
                            <th>Comprehension</th>
                            <th>Reading</th>
                            <th>Writing</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($lng as $id => $var) {
                            echo "<tr><td>$lng[$id]</td>"
                            . "<td>$lngC[$id]</td>"
                            . "<td>$lngR[$id]</td>"
                            . "<td>$lngW[$id]</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td>Driver's license</td>
            <td><?= implode(", ", $driver); ?></td>
        </tr>
    </tfoot>
</table>
</body>
</html>
