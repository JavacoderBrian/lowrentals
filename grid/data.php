<?php

// Include the connect.php file
include ('conny121317.php');

// Connect to the database
$mysqli = new mysqli($hostname, $username, $password, $database);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$pagenum = $_GET['pagenum'];
$pagesize = $_GET['pagesize'];
$start = $pagenum * $pagesize;
if (isset($_GET['update'])) {
    $query = "UPDATE `bookings` SET `start`=?, `end`=?, `description`=?, `subject`=?, `place`=?, `calendar`=?, `active`=? WHERE `id`=?";
    $result = $mysqli->prepare($query);
    $result->bind_param("ssssssss", $_GET['start'], $_GET['end'], $_GET['description'], $_GET['subject'], $_GET['place'], $_GET['calendar'], $_GET['active'], $_GET['id']);
    $res = $result->execute() or trigger_error($result->error, E_USER_ERROR);
    echo "hello " . $res;
} else {
    $query = "SELECT * FROM bookings LIMIT ?,?";
    $result = $mysqli->prepare($query);
    $result->bind_param('ii', $start, $pagesize);
    $result->execute();

    /* bind result variables */
    $result->bind_result($start, $end, $id, $description, $place, $subject, $calendar, $active);

    /* fetch values */
    while ($result->fetch()) {
        $bookings[] = array(
            'start' => $start,
            'end' => $end,
            'id' => $id,
            'description' => $description,
            'place' => $place,
            'subject' => $subject,
            'calendar' => $calendar,
            'active' => $active
        );
    }
    echo json_encode($bookings);
}
?>

