<?php
require("connect.php");

if($_SERVER['REQUEST_METHOD']=='POST'){
$sql="INSERT INTO register (username,password) values (:username,:password)";
$statement=$pdo->prepare($sql);
$username=$_POST['username'];
$password=$_POST['password'];

$statement->bindParam(":username",$username,PDO::PARAM_STR);
$statement->bindParam(":password",$password,PDO::PARAM_STR);
$statement->execute();

header("location:loginpage.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration </title>
  <link rel="stylesheet" href="signup.css">
</head>


<body>

<ul>
        <li ><a class="active" href="WebsiteFinal1.html ">Home</a></li>
        <li ><a href="#Movies">Movies</a></li>
        <li style="float:right"><a class="active" href="loginpage.php">Sign-in</a></li>
      </ul>

    <div class = "Middle">
        <h1>Sign-up</h1>
        <form action="" method="POST">
        <div class="txtfield">
                
                <input type="text" name ="username">
                <label for="username">Username</label>
        </div>

            <div class="txtfield">
                <input type="password" name="password">
                <label for="password">Password</label>
            </div>

            <input type="Submit" value="Create Account">
            <div class="Space"></div>
            

        </form>
    </div>
</body>
</html>