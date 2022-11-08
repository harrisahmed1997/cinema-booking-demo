<?php 


include '../connection.php';
$id = $_POST['id'];
$moviename = $_POST['moviename'];
$moviecat = $_POST['moviecat'];
$mvstatus = $_POST['mvstatus'];
$movietrailer = $_POST['mvtrailer'];

$query= "UPDATE nueplex.movies 
set movieName = '{$moviename}',
movieCat = '{$moviecat}',
movieStatus = '{$mvstatus}', movieTrailer = '{$movietrailer}' where movieId = {$id}
";

mysqli_query($connection,$query);
?>