<?php
if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $sexType = $_POST['sex-type'];
    $address = htmlspecialchars($_POST['adderss']);
    $data = "My name is $name. I am $age years old. I am $sexType.";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form Data</title>
        <meta charset="UTF-8">
        <style>
            #wrapper {
                width: 350px;
                margin: 50px auto;
            }
            form {
                width: 180px;
                margin: 1px auto;
            }   
            form > input, button {
                margin: 5px;
            }
            #data {
                margin: 20px auto
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <form action="07.Form-Data.php" method="POST">
                <input type="text" name="name" placeholder="Enter name">
                <input type="text" name="age" placeholder="Enter age">
                <input type="radio" name="sex-type" id="male" value="male">
                <label for="male">Male</label>
                <input type="radio" name="sex-type" id="female" value="female">
                <label for="female">Female</label>
                <button name="submit" name="submit">Submit</button>
            </form>
            <div id="data"><?= $data; ?></div>
        </div>
    </body>
</html>