<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet"href="stylesheet.css">
</head>
<body>

<?php 

$hostName="localhost";
$dbUser="root";
$dbPass="";
$dbName="employee_db";
$conn = mysqli_connect($hostName, $dbUser,$dbPass,$dbName);
if (!$conn) {
    die("Connection is not successful");
}

if (isset($_GET["id"])){
    $id =$_GET['id'];
    $sql = "select * from `employee_tb` where id=$id";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    } else {
        
        $row = mysqli_fetch_array($result);
        if ($row === null) {
            echo "No employee found with ID: $id";
        }
    }
}
    

    

?>

 <?php 
     if (isset($_POST["updateData"])){

        if(isset($_GET["id_new"])){
            $idnew = $_GET["id_new"];
        }

        $name =$_POST['name'];
        $email =$_POST['email'];
         $contact =$_POST['contact'];
         $birthdate =$_POST['bday'];
         $position =$_POST['position'];

        $sql = "update `employee_tb` set `NAME`= '$name', `EMAIL` = '$email', 
         `CONTACTNO` = '$contact', `BIRTHDATE` = '$birthdate', 
         `POSITION` = '$position' where id=$idnew ";

         $result = mysqli_query($conn, $sql);

         if (!$result) {
             die("Query failed: " . mysqli_error($conn));
    }
        else {
            header('location:index.php');
        }
 }
 
?>  

<div class="pHeader">
<a id="header" href="index.php">CRUD SYSTEM</a>
    </div>
    <div class="pBody">
<div id="addFormCon">
<div class="addHeader">EDIT</div>
        <form action="update.php?id_new=<?php echo $id; ?>" method="post" class="addForm" autocomplete="off">
        <label>Name</label>
            <input type="text" name="name" placeholder="eg. Juan Dela Cruz" value ="<?php echo $row["NAME"]; ?>" required >
            <label>Age</label>
            <input type="text" name="age" placeholder="eg. 21" value="<?php echo $row["AGE"]?>" required >
            <label>Email</label>
            <input type="email" name="email" placeholder="eg. juandelax@example.com" value="<?php echo $row["EMAIL"]; ?>" required>
            <label>Contact No.</label>
            <input type="text" name="contact" placeholder="eg. 0912345678" value="<?php echo $row["CONTACTNO"]; ?>" required>
            <label>Birthdate</label>
            <input type="date" name="bday" placeholder="Birthdate" value="<?php echo $row["BIRTHDATE"]; ?>" required>
            <label>Position</label>
            <input type="text" name="position" placeholder="Waiter" value="<?php echo $row["POSITION"]; ?>" required>
            <button type="submit" class="updateBtn" name="updateData">Update</button>
            <a href="index.php" class="backBtn">Back</a>
        </form>
    </div>
    </div>
    <div class="pFooter">
    <p>Copyright © Johnbeloveddd 2024</p>
</div>
</body>
</html>