<?php
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    $channel_name = mysqli_real_escape_string($connection, $_POST['channel_name']);
    $year_of_launch = mysqli_real_escape_string($connection, $_POST['year_of_launch']);

    if (empty($channel_name) || empty($year_of_launch)) {
        echo json_encode(array('status' => 'error'));
        exit();
    }

    if (!empty($channel_name) && !empty($year_of_launch)) {
        $sql = "INSERT INTO tv_channels (channel_name, year_of_launch) VALUES ('$channel_name', '$year_of_launch')";
        if(mysqli_query($connection, $sql)) {
            echo json_encode(array('status' => 'success'));
            exit();
        }
    }
}
include_once 'views/tv_channels.php';
?>