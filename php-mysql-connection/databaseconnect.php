<!-- https://www.hostinger.com/tutorials/how-to-connect-php-to-mysql -->

<?php
$servername = "localhost";
$database = "u658202322_developer";
$username = "u658202322_developer";
$password = "Cooldatabase1$";
 
// Create connection
 
$conn = mysqli_connect($servername, $username, $password, $database);
 
// Check connection
 
if (!$conn) {
 
    die("Connection failed: " . mysqli_connect_error());
 
}
echo "Connected successfully";
mysqli_close($conn);
?>

