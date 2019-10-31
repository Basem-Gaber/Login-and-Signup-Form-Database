<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="js/script.js"></script>
</head>
<body class="body">
<div class="formBlock">
<form name="loginForm" onsubmit="return validateLogin()" method="post">
    <i class="fa fa-envelope icon"></i>
    E-mail: <br><input id="border" type="text" name="email" placeholder="Type your email" ><br><br>
    <i class="fa fa-key icon"></i>
    Password : <br><input type="password" name="password" placeholder="Type your password" id="pass" ><br>
    <input type="checkbox" onclick="passVisibility()">Show Password<br><br>
    <input type="submit" name="submit" id="mybutton" >
</form>
</div>
<?php
if (isset($_POST['submit']))
{
session_start();
$servername = "localhost";
$username = "root";
$dbname = "registeration";

// Create connection
$conn = new mysqli($servername, $username , '' , $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("select * from user where email=? and password = ?");
$stmt->bind_param("ss", $email, $pwd);
$pwd=md5($_POST["password"]);
$email=$_POST["email"];

$stmt->execute();

$result = $stmt->get_result();
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $_SESSION["name"]=$row["username"];
  header('location:welcome.php');
} else {
    echo "0 results";
  header('location:welcome.php');
}
$stmt->close();
$conn->close();
}
?>
</body>
</html>