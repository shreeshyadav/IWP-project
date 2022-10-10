<?php
$servername = "localhost";
$username = "shreesh";
$password = "shreesh";
$dbname = "iwp_project";
$conn = mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
	
	$name=$_POST['full_name'];
	$address=$_POST['address'];
	$mobile=$_POST['number'];
	$numdays=$_POST['numdays'];
	$sql="INSERT INTO user_data (name,address,mobile,numdays) VALUES ('$name','$address','$mobile','$numdays')";
    $result = mysqli_query($conn, $sql);
    echo "hello";
?>