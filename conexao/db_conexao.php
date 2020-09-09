<?php 
$user = "root"; 
$password = ""; 
$database = "whatsrobo";  
$hostname = "localhost"; 
 
$conn = mysqli_connect($hostname, $user, $password, $database);
mysqli_set_charset($conn, 'utf8');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "";

?>