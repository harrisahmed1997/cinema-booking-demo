<?php
include '../connection.php';
$showdate = $_POST['showdate'];
$showtime = $_POST['showtime'];
$showing = $_POST['showing'];
$selected = $_POST['selected'];

$showtimes = "SELECT * FROM showtimes where cinemaId = {$selected} AND showtimings = '{$showtime}'";

$showtimeresult = mysqli_query($connection, $showtimes);

if (mysqli_num_rows($showtimeresult) > 0) {
    echo "Movie Already Set On This Cinema And Date";
} else {
    $insertQuery = "INSERT INTO showtimes (movieId,cinemaId,showtimings,showDate)
        VALUES ({$showing},{$selected},'{$showtime}','{$showdate}');
    ";

    mysqli_query($connection, $insertQuery);

    echo "success";
}
