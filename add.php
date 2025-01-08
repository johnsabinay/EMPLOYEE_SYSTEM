<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD EMPLOYEE</title>
    <link rel="stylesheet"href="stylesheet.css">
</head>
<body>
<div class="pHeader">
<a id="header" href="index.php">EMPLOYEE MANAGE SYSTEM</a>
    </div>
    <div class="pBody">
<div id="addFormCon">
        <div class="addHeader">ADD EMPLOYEE</div>
        <form action="add_employee.php" method="post" class="addForm" autocomplete="off">
        <label>Name</label>
            <input type="text" name="name" placeholder="eg. Juan Dela Cruz" required>
            <label>Age</label>
            <input type="text" name="age" placeholder="eg. 21" required>
            <label>Email</label>
            <input type="email" name="email" placeholder="eg. juandelax@example.com" required>
            <label>Contact No.</label>
            <input type="text" name="contact" placeholder="eg. 0912345678" required>
            <label>Birthdate</label>
            <input type="date" name="bday" placeholder="Birthdate" required>
            <label>Position</label>
            <input type="text" name="position" placeholder="Waiter" required>
            <button type="submit" class="submitBtn">Submit</button>
            <a href="index.php" class="backBtn">Back</a>
        </form>
    </div>
    </div>
    <div class="pFooter">
    <p>Copyright © Johnbeloveddd 2024</p>
</div>
</body>
</html>