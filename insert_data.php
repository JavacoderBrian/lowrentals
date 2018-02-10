<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$con = mysqli_connect("localhost", "javawi_lowrental", "-rKrXj-s)k", "javawi_lowrentals") or die('Could not connect sigh');


$from = $_POST['from1'];
$to = $_POST['to1'];
$id = $_POST['id1'];
$description = $_POST['description1'];
$location = $_POST['location1'];
$subject = $_POST['subject1'];
$resource = $_POST['resource1'];
$sql = "INSERT INTO bookings(start, end, id, description, place, subject, calendar) VALUES ('$from','$to','$id','$description','$location','$subject','$resource')";
if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
}else{
    echo "here is my ".$from." and ".$to." and ".$id." and ".$description." and ".$location." and ".$subject;
}
