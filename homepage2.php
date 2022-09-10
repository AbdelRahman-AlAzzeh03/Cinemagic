<?php
session_start();
if(!isset($_SESSION['privilleged'])){
   header("location:loginpage.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinemagic</title>
    <link rel="stylesheet" href="homepage2.css">
</head>

<style>
      h1{
            text-align:center;
        }
      

      
        
        
</style>


<body>
<ul>
        <li ><a class="active" href="homepage.2">Home</a></li>
        <li ><a href="movies.php">Movies</a></li>
        <li > <p> Welcome Back <?php echo $_SESSION['privilleged']?> </p> </li>
        <li style="float:right"> <a href="logout.php">Sign-out</a></li>
      </ul>
 
      <div>
            <h1 style="padding:20px;margin-top:30px;height:1500px;">Cinemagic</h1>
      </div>
</body>

</html>