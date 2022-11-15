<?php 
    include 'connection.php';

    $seats = $_POST['seats'];
    $userid = $_POST['userid'];
    $showid = $_POST['showid'];
    $price = $_POST['price'];

    $query = "INSERT INTO seatreserve (userId,seatno,showId,price) VALUES ({$userid},'{$seats}',{$showid},{$price})";

    mysqli_query($connection,$query);

    echo "done"
?>