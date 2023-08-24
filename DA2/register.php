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
    $password= $_POST["password"];
    $phone= $_POST["phone"];
    $plan= $_POST["plan"];

$sql = "INSERT INTO membership VALUES ('$name', '$email', '$password', '$phone', '$plan')";
$result = mysqli_query($conn, $sql);
session_start();
$_SESSION['gym']='true';
header('location:thank.html');
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