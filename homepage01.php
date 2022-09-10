<?php
session_start();
if(!isset($_SESSION['privilleged'])){
   header("location:homepage01.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinemagic</title>
    <link rel="stylesheet" href="homepage1.css">
</head>

<body>
<ul>
        <li ><a class="active" href="#Home">Home</a></li>
        <li ><a href="movies.php">Movies</a></li>
        <li style="float:right"> <a href="loginpage.php">Sign-in</a></li>
      </ul>
 
      <div>
            <h1 style="padding:20px;margin-top:30px;height:1500px;text-align:center;">Cinemagic</h1>
      </div>
</body>

</html>