<?php 
    include 'connection.php';

    $seats = $_POST['seats'];
    $userid = $_POST['userid'];
    $showid = $_POST['showid'];
    $price = $_POST['price'];

    $query = "INSERT INTO seatreserve (seats,userId,showId,price) VALUES ('{$seats}',{$userid},{$showid},{$price})";
    mysqli_query($connection,$query);   

    $maxseats = "SELECT COUNT(seats) from seatreserve where userId = {$userid}";

    $maxseatsresult = mysqli_fetch_assoc(mysqli_query($connection,$maxseats));

    $makeorder = "INSERT INTO orders (userId,showId,seatsBooked) VALUES ({$userid},{$showid},{$maxseatsresult['COUNT(seats)']})";

    mysqli_query($connection,$makeorder);

   
?>