<?php 
    include '../connection.php';
    $showdate = $_POST['showdate'];
    $showtime = $_POST['showtime'];
    $showing = $_POST['showing'];
    $selected = $_POST['selected'];

    $insertQuery = "INSERT INTO showtimes (movieId,cinemaId,showtimings,showDate)
    VALUES ({$showing},{$selected},'{$showtime}','{$showdate}');
";

    mysqli_query($connection,$insertQuery);

    echo "success";
?>