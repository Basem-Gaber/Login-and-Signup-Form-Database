<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="formBlock">
<div>
<?php            
        session_start();
        if(isset($_SESSION['name'])){
         $name=$_SESSION['name'];    
         echo'Welcome '. $name.'<br>';
        }
        else{
            echo "Invalid Credentials!";
        }
        session_destroy();
?>
</div>
</body>
</html>