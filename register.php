<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="js/script.js"></script>
</head>
<body class="body">
    <div class="formBlock">
    <form name="registerForm" onsubmit="return validateRegister()" method="post">
    <i class="fa fa-user icon"></i>
    Name: <br><input type="text" id="border" name="name" placeholder="Type your name"><br><br>
    <i class="fa fa-envelope icon"></i>
    E-mail: <br><input type="text" id="border" name="email" placeholder="Type your email"><br><br>
    <i class="fa fa-key icon"></i>
    Password : <br><input type="password" name="password" id="pass" placeholder="Type your password"><br>
    <input type="checkbox" onclick="passVisibility()">Show Password<br><br>
    <input type="submit" name='submit' id="mybutton">
    </form>
</div>
<?php


if(isset($_POST['submit'])){
    
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registeration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("select * from user where email=?");
$stmt->bind_param("s", $email);
$email=$_POST["email"];
$stmt->execute();

$result = $stmt->get_result();
if ($result->num_rows > 0) {
    die("Email already exits!");
}

$stmt = $conn->prepare("select * from user where username=?");
$stmt->bind_param("s", $username);
$username=$_POST['name'];

$stmt->execute();

$result = $stmt->get_result();
if ($result->num_rows > 0) {
    die("Username already exits!");
}

$stmt = $conn->prepare("insert into user (username, password, email) values (? , ? , ?)");
$stmt->bind_param("sss", $username, $pwd, $email);
$pwd=md5($_POST["password"]);
$email=$_POST["email"];
$username=$_POST['name'];
if ( $stmt->execute() === TRUE) {
    echo "New record created successfully";
    $_SESSION['name']=$_POST['name'];
    header('location:welcome.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header('location:welcome.php');
}
$stmt->close();
$conn->close();
  }
?>
</body>
</html>