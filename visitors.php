<?php
    include 'db_con.php';
    $sql = "SELECT COUNT(*) AS total_visitors FROM visitors";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $data = mysqli_fetch_assoc($result);
        echo json_encode(['total_visitors' => $data['total_visitors']]);
    } else {
        echo json_encode(['error' => 'Failed to fetch visitor count']);
    }
    mysqli_close($con);
?>