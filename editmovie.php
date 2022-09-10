<?php
session_start();
require("connect.php");

if(isset($_POST['update'])){

$sql = "UPDATE employee SET moviename=:moviename, movietime=:movietime where id=:id";
$statement=$pdo->prepare($sql);
$moviename=$_POST['moviename'];
$movietime=$_POST['movietime'];
$id=$_GET['id'];
$statement->bindParam(":id",$id,PDO::PARAM_STR);
$statement->bindParam(":moviename",$moviename,PDO::PARAM_STR);
$statement->bindParam(":movietime",$movietime,PDO::PARAM_STR);
$statement->execute();

header("location:movies.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view Employee</title>
</head>
<body>
<form method="post" action="editmovie.php">

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


        <input type="submit" name="update" value="Edit">
    </form>
    <a href="viewAllEmployees.php"> view employees </a>
</body>
</body>
</html>