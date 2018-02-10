<?php

$response = [];

function getData() {
    include ('conny121317.php');
    $con = mysqli_connect($hostname, $username, $password, $database);
    if (mysqli_connect_errno()) {
        printf("Connect Failed:  %s\n", mysqli_connect_error());
    }
    $result = $con->prepare("SELECT * FROM bookings WHERE `active`=1;");
    $result->execute();
    $result->bind_result($start, $end, $id, $description, $place, $subject, $calendar, $active);
    while ($result->fetch()) {
        $bookings3[] = array(
            'start' => $start,
            'end' => $end,
            'id' => $id,
            'description' => $description,
            'location' => $place,
            'subject' => $subject,
            'calendar' => $calendar
        );
    }
    return $bookings3;
}

if (isset($_GET['usedwidget']) && ($_GET['usedwidget'] == "roomsscheduler")) {
    $response = getData();
    echo json_encode($response);
} else if (isset($_POST['addData']) && ($_POST['addData'] == "true")) {
    include ('conny121317.php');
    $con = mysqli_connect($hostname, $username, $password, $database);
    $from = $_POST['from'];
    $to = $_POST['to'];
    $id = $_POST['id'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $subject = $_POST['subject'];
    $resource = $_POST['resource'];
    $sql = "INSERT INTO bookings(start, end, id, description, place, subject, calendar) VALUES ('$from','$to','$id','$description','$location','$subject','$resource')";
    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
    } else {
        echo "here is my " . $from . " and " . $to . " and " . $id . " and " . $description . " and " . $location . " and " . $subject . " and ".$resource;
    }
}
?>