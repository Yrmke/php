<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "lab2students";
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
?>
<?php
include_once 'db.inc.php';
$first=$_POST['name'];
$last=$_POST['surname'];
$sql="INSERT into users (user_first, user_last ) VALUES ('mary', 'nil');";
$result= mysqli_query($conn,$sql);

header("Location: ../lab2.php?signup=success");
?>

