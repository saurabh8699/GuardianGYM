<?php   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
    $name= $_POST["name"];
    $email= $_POST["email"];
    $number= $_POST["number"];
    $message= $_POST["message"];

$sql = "INSERT INTO customer_queries VALUES ('$name', '$email', '$number', '$message')";
$result = mysqli_query($conn, $sql);
session_start();
$_SESSION['gym']='true';
header('location:home.html');
// if (mysqli_num_rows($result) > 0) {
//     session_start();
//     $_SESSION['gym']='true';
//     header('location:home.html');
// } 
// else {
//     header('location:error.php');
//     alert("Wrong username or password");
// }
mysqli_close($conn);
?>