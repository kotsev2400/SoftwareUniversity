<?php
session_start();

if (isset($_POST['submit'])) {
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gander = $_POST['sex'];
    $birthDate = $_POST['birth-date'];
    $nationality = $_POST['nationality'];

    $companyName = $_POST['company-name'];
    $workFrom = $_POST['work-from-date'];
    $workTo = $_POST['work-to-date'];

    $progLng = $_POST['prog-lang'];
    $progLngLevel = $_POST['prog-lang-level'];

    $lng = $_POST['language'];
    $lngC = $_POST['level-c'];
    $lngR = $_POST['level-r'];
    $lngW = $_POST['level-w'];

    $driver = $_POST['driver'];

    $errorArr = [];

    $textPattern = '/[A-za-z]{2,20}/';
    $companyPattern = '/[A-za-z0-9]{2,20}/';
    $phonePattern = '/[0-9\+\-\s]{2,20}/';
    $emailPattern = '/[A-Za-z0-9]+\@[A-Za-z]+\.[A-Za-z]+/';

    if (!preg_match($textPattern, $firstName)) {
        $errorArr[] = "<li>First Name must be only letters and between 2 and 20 symbols!</li>";
    }
    if (!preg_match($textPattern, $lastName)) {
        $errorArr[] = "<li>Last Name must be only letters and between 2 and 20 symbols!</li>";
    }
    if (!preg_match($companyPattern, $companyName)) {
        $errorArr[] = "<li>Company must be letters, numbers and between 2 and 20 symbols!</li>";
    }
    if (!preg_match($phonePattern, $phone)) {
        $errorArr[] = "<li>Phone Number must be only Numbers, spaces, '+', '-', and between 2 and 20 symbols!</li>";
    }
    if (!preg_match($emailPattern, $email)) {
        $errorArr[] = "<li>Invalid Email Address!</li>";
    }
    foreach ($progLng as $var) {
        if (!preg_match($textPattern, $var)) {
            $errorArr[] = "<li>Every Programing Language must be only letters and between 2 and 20 symbols!</li>";
        }
    }
    foreach ($lng as $var) {
        if (!preg_match($textPattern, $var)) {
            $errorArr[] = "<li>Every Language must be only letters and between 2 and 20 symbols!</li>";
        }
    }

    if (count($errorArr) > 0) {
        foreach ($errorArr as $error) {
            echo $error . "<br />";
        }
    } else {
        $_SESSION = $_POST;
        header("Location: CVResult.php");
    }
} else {
    $firstName = "";
    $lastName = "";
    $email = "";
    $phone = "";
    $companyName = "";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CV Generator</title>
        <script src="buttons.js"></script>
    </head>
    <body>
        <form method="POST">
            <fieldset border="1">
                <legend>Personal Information</legend>
                <input type="text" name="first-name" value="<?= $firstName; ?>" placeholder="First Name"/><br />
                <input type="text" name="last-name" value="<?= $lastName; ?>" placeholder="Last Name"/><br />
                <input type="text" name="email" value="<?= $email; ?>" placeholder="Email"/><br />
                <input type="text" name="phone" value="<?= $phone; ?>" placeholder="Phone Number"/><br />
                <label>Female<input type="radio" name="sex" value="Female"/></label>
                <label>Male<input type="radio" name="sex" value="Male"/></label><br />
                <label>Birth Date</label><br />
                <input type="date" name="birth-date"/><br />
                <label>Nationality</label><br />
                <select name="nationality">
                    <option>Bulgarian</option>
                    <option>Indian</option>
                </select><br />
            </fieldset>

            <fieldset border="1">
                <legend>Last Work Position</legend>
                <label>Company Name</label>
                <input type="text" name="company-name" value="<?= $companyName; ?>"/><br />
                <label>From</label>
                <input type="date" name="work-from-date"/><br />
                <label>To</label>
                <input type="date" name="work-to-date"/><br />
            </fieldset>

            <fieldset border="1">
                <legend>Computer Skills</legend>
                <label>Programming Languages</label><br />
                <div id="prog-lng-field">
                    <input type="text" name="prog-lang[]"/>
                    <select name="prog-lang-level[]">
                        <option>Beginner</option>
                        <option>Programmer</option>
                        <option>Ninja</option>
                    </select><br />
                </div>
                <button id="rmv-prog-lng">Remove Language</button>
                <button id="add-prog-lng">Add Language</button>
            </fieldset>

            <fieldset border="1">
                <legend>Other Skills</legend>
                <label>Languages</label><br />
                <div id="lng-field">
                    <input type="text" name="language[]"/>
                    <select name="level-c[]">
                        <option value="" disabled selected>-Comprehension-</option>
                        <option>beginner</option>
                        <option>advanced</option>
                        <option>intermediate</option>
                    </select>
                    <select name="level-r[]">
                        <option value="" disabled selected>-Reading-</option>
                        <option>beginner</option>
                        <option>advanced</option>
                        <option>intermediate</option>
                    </select>
                    <select name="level-w[]">
                        <option value="" disabled selected>-Writing-</option>
                        <option>beginner</option>
                        <option>advanced</option>
                        <option>intermediate</option>
                    </select><br />
                </div>
                <button id="rmv-lng" name="remove-lng">Remove Language</button>
                <button id="add-lng" name="add-lng">Add Language</button><br />
                <label>Driver's License</label><br />
                <label>B<input type="checkbox" name="driver[]" value="B"/></label>
                <label>A<input type="checkbox" name="driver[]" value="A"/></label>
                <label>C<input type="checkbox" name="driver[]" value="C"/></label>
            </fieldset>    
            <input type="submit" name="submit" value="Generate CV"/>
        </form>
    </body>
</html>