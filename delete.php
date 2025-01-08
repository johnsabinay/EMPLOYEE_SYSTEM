<?php
$hostName="localhost";
$dbUser="root";
$dbPass="";
$dbName="employee_db";
$conn = mysqli_connect($hostName, $dbUser,$dbPass,$dbName);
if (!$conn) {
    die("Connection is not successful");
}

 if(isset($_GET["id"])){
     $id=$_GET['id'];
    $sql = "delete from `employee_tb` where id=$id";
    $result = mysqli_query($conn, $sql);
    
    if ($result){
    header('location:index.php');
   }
    else {
         die(mysqli_error($conn));     }
 }




mysqli_close($conn);
?>