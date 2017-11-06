<?php
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    $channel_name = mysqli_real_escape_string($connection, $_POST['channel_name']);
    $image = mysqli_real_escape_string($connection, $_POST['image']);

    if ($channel_name == '' || empty($image)) {
        echo json_encode(array('status' => 'error'));
        exit();
    }

    if ($channel_name != '' && !empty($image)) {
        $sql = "UPDATE tv_channels SET image = '$image' WHERE channel_name = '$channel_name'";
        if(mysqli_query($connection, $sql)) {
            echo json_encode(array('status' => 'success'));
            exit();
        }
    }
}
include_once 'views/tv_update.php';
?>