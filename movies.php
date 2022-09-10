<?php
session_start();
require("connect.php");

if(isset($_POST['submit'])){
$sql="INSERT INTO movies (username,moviename,movietime) values (:username,:moviename,:movietime)";
$statement=$pdo->prepare($sql);
$moviename=$_POST['moviename'];
$movietime=$_POST['movietime'];

$statement->bindParam(":username", $_SESSION['privilleged'],PDO::PARAM_STR);
$statement->bindParam(":moviename",$moviename,PDO::PARAM_STR);
$statement->bindParam(":movietime",$movietime,PDO::PARAM_STR);
$statement->execute();

header("location:homepage2.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <!-- Navigation Bar -->
    <ul>
        <li ><a class="active" href="homepage2.php">Home</a></li>
        <li ><a href="viewAllmovies.php">Bookings</a></li>
        <li style="float:right"><a class="active" href="logout.php" target="_blank">Sign-out</a></li>
      </ul>

    <div class = "center">
        <h1>Movies</h1>
        <form method="post" action="movies.php">

            <div class="txtfield">
            <label for="moviename">Movie Name</label> <br><br>
                <select name="moviename" id="moviename">Movie Name
                    <option value="Batman">Batman</option>
                    <option value="SpiderMan">Spiderman</option>
                    <option value="Primal Fear">Primal Fear</option>
                    <option value="Fight Club">Fight Club</option>
                </select>
                
            </div>

            <div class="txtfield">
            <label for="movietime">Movie Time</label><br><br>
            <select name="movietime" id="movietime">Movie Time
                    <option value="17:00">17:00</option>
                    <option value="19:00">19:00</option>
                    <option value="21:00">21:00</option>
                    <option value="23:00">23:00</option>
                </select>
                
            </div>

            <input type="Submit" name="submit" value="Submit">
           <br><br><br>



        </form>


    </div>
</body>
</html>