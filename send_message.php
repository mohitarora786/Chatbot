<?php
include('db_connection.php');

if (isset($_POST['message']) && isset($_POST['username'])) {
    $message = $_POST['message'];
    $username = $_POST['username'];

    $query = "INSERT INTO `chat_message`( `username`, `message`) VALUES ('$username','$message')";
    mysqli_query($conn, $query);
}

mysqli_close($conn);
?>
