<?php
    $host = "localhost";
    $dbname = "bangdiem_db";
    $username = "root";
    $password = "";
    $conn = mysqli_connect(hostname: $host, username: $username, password: $password, database: $dbname);
    if (mysqli_connect_errno()) {
        die("Connect Error: ". mysqli_connect_error());
    }

    $sql = "DELETE FROM bangdiem";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    header("location: bangdiem.html");
?>