<?php
session_start();

$servername = "name.gr";
$username = "name";
$password = "name123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>


<html>
<body>

Welcome <?php echo $_GET["uname"]; ?><br>
Your password is: <?php echo $_GET["psw"]; ?>

</body>
</html>