<!DOCTYPE HTML>
<html>
<head>
    <title>CV Generator</title>
</head>
<body>
<form action="_5_CVGenerator.php" method="post">
    <fieldset>
        <legend>Personal Information</legend>
        <input type="text" name="fName" placeholder="First Name"><br>
        <input type="text" name="lName" placeholder="Last Name"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="text" name="phone" placeholder="Phone number"><br>
        <label>Female</label>
        <input type="radio" name="gender",value="Female">
        <label>Male</label>
        <input type="radio" name="gender",value="Male"><br>
        <label>Birth Date</label><br>
        <input type="date" name="bDate"><br>
        <label>Nationality</label><br>
        <select name="nationality">
            <option value="Bulgarian">Bulgarian</option>
            <option value="Indian">Indian</option>
        </select>
    </fieldset>

    <fieldset>
        <legend>Last Work Position</legend>
        <label>Company Name</label>
        <input type="text" name="cName"><br>
        <label>From</label>
        <input type="date" name="from"><br>
        <label>To</label>
        <input type="date" name="to"><br>
    </fieldset>

    <fieldset>
        <legend>Computer Skills</legend>
        <label>Programming Languages</label><br>
        <input type="text" name="pLanguage">
        <select name="level">
            <option value="Beginner">Beginner</option>
            <option value="Intermediate">Intermediate</option>
            <option value="Expert">Advanced</option>
        </select><br>
        <button type="button" name="removep">Remove Language</button>
        <button type="button" name="addp">Add Language</button>
    </fieldset>

    <fieldset>
        <legend>Other Skills</legend>
        <label> Languages</label><br>
        <input type="text" name="language">
        <select name="comprehension">
            <option>-Comprehension-</option>
            <option value="Beginner">Beginner</option>
            <option value="Intermediate">Intermediate</option>
            <option value="Expert">Advanced</option>
        </select>
        <select name="reading">
            <option>-Reading-</option>
            <option value="Beginner">Beginner</option>
            <option value="Intermediate">Intermediate</option>
            <option value="Expert">Advanced</option>
        </select>
        <select name="writing">
            <option>-Writing-</option>
            <option value="Beginner">Beginner</option>
            <option value="Intermediate">Intermediate</option>
            <option value="Expert">Advanced</option>
        </select><br>
        <button type="button" name="remove">Remove Language</button>
        <button type="button" name="add">Add Language</button><br>
        <label>Driver's License</label><br>
        <label>B</label>
        <input type="checkbox" name="dLicense" value="B">
        <label>A</label>
        <input type="checkbox" name="dLicense" value="A">
        <label>C</label>
        <input type="checkbox" name="dLicense" value="C">
    </fieldset>

    <input type="submit" name="generate" value="Generate CV">

</form>

<?php