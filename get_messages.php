<?php
include('db_connection.php');

$query = "SELECT * FROM chat_message ORDER BY timestamp ASC";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $username = $row['username'];
    $message = $row['message'];

    echo "<p><strong>$username:</strong> $message</p>";
}

mysqli_close($conn);
?>
