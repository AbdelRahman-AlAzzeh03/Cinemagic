<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
    <link rel="stylesheet" href="allmovies.css">
    <style>
         th,td
          {border-bottom: 1px solid #ddd;}

         tr:hover
          {background-color: #D3D3D3;}
    </style>
</head>

<body>
<ul>
        <li ><a class="active" href="homepage2.php">Home</a></li>
        <li ><a href="movies.php">Movies</a></li>
        <li style="float:right"><a class="active" href="logout.php" target="_blank">Sign-out</a></li>
      </ul>


<?php
session_start();
require 'connect.php';
$sql="SELECT * FROM movies where username=:username";
$statement=$pdo->prepare($sql);
$statement->bindParam(":username", $_SESSION['privilleged'],PDO::PARAM_STR);
$statement->execute();
echo "<table class='tablee' style='border:1px solid; width:80%; text-align:center; margin:auto;'>";
echo "<tr>";
echo "<th> ID </th>";
echo "<th> Username </th>";
echo "<th> Movie Name </th>";
echo "<th> Movie Time </th>";
echo "<th> Delete </th>";
echo "</tr>";
$data=$statement->fetchAll();
    foreach ($data as $row) {
        echo "<tr>".
         "<td>" . $row['id']." </td>".
        " <td> ". $row['username'] . " </td>" 
        ."<td>" . $row['moviename'] . "</td>".
        "<td>" . $row['movietime'] . "</td>".
        "<td> <a href=deletemovie.php?id=".$row['id']."> Delete </a> </td>".
        "</tr>";
    }

echo "</table>";
$pdo=null;
?>
</br>
</br>
    
</body>
</html>