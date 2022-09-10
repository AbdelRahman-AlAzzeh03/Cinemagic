<?php
require 'connect.php';
$sql="DELETE FROM movies WHERE id=:id";
$id=$_GET['id'];
$statement=$pdo->prepare($sql);
$statement->bindParam(":id",$id, PDO::PARAM_INT);
$statement->execute();
$pdo=null;

header("location:viewAllmovies.php");


?>
