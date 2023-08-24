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
    $psw= $_POST["psw"];
$sql = "SELECT * from registered_accounts where username ='$name' and password ='$psw'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    session_start();
    $_SESSION['gym']='true';
    header('location:home.html');
} 
else {
    header('location:error.html');
}
mysqli_close($conn);
?>
