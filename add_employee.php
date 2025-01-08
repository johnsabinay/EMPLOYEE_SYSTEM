<?php
$hostName="localhost";
$dbUser="root";
$dbPass="";
$dbName="employee_db";
$conn = mysqli_connect($hostName, $dbUser,$dbPass,$dbName);
if (!$conn) {
    die("Connection is not successful");
}

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$bday = $_POST['bday'];
$position = $_POST['position'];

$sql = "INSERT INTO employee_tb (NAME, AGE, EMAIL, CONTACTNO, BIRTHDATE, POSITION) VALUES ('$name', '$age', '$email', '$contact', '$bday', '$position')";
if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>