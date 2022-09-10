<?php

session_start();
require("connect.php");

if(isset($_POST['login'])){
    $sql="SELECT * from register where username=:username and password=:password";
    $statement=$pdo->prepare($sql);
    $username=$_POST['username'];
    $password=$_POST['password'];

    $statement->bindParam(":username",$username,PDO::PARAM_STR);
    $statement->bindParam(":password",$password,PDO::PARAM_STR);
    $statement->execute();
    $count=$statement->rowCount();
    if($count==1){
        $_SESSION['privilleged']=$username;
        header("location:homepage2.php");
    }else{
        echo "Invalid username or password";
    }
    $pdo=null;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-in</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <!-- Navigation Bar -->
    <ul>
        <li ><a class="active" href="homepage01.php">Home</a></li>
        <li style="float:right"><a class="active" href="loginpage.html" target="_blank">Sign-in</a></li>
      </ul>

    <div class = "center">
        <h1>Sign-in</h1>
        <form method="post">

            <div class="txtfield">
                <input type="text" name="username">
                <label for="username">Username</label>
            </div>

            <div class="txtfield">
                <input type="password" name="password">
                <label for="password">Password</label>
            </div>

            <input type="Submit" name="login" value="Login">
            <div class="signup">
                Not a member? <a  class="reg-link" href="signup.php" >Sign-up</a>
            </div>



        </form>


    </div>
</body>
</html>