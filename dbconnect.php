<?php
// try {
    $serverName = "10.50.91.24";
    $userName = "practice";
    $userPassword = "Dp6E0ISSKj";
    $dbName = "practice_inventory";
    $conn = mysqli_connect($serverName, $userName, $userPassword, $dbName);

    if (!$conn) {
        die(mysqli_connect_error());
    }
    // $conn = new PDO("sqlrsv:server=$serverName", $userName, $userPassword);
    // $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
// }

// catch ( PDOException $e) {
//     die ($e->getMessage());
// }
mysqli_set_charset($conn , "utf8mb4");
?>