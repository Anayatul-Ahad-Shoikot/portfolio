<?php
    include './db_con.php';

    $ip_address = $_SERVER['REMOTE_ADDR'];
    $stmt = $con->prepare("INSERT INTO downloads (ip_address) VALUES (?)");
    $stmt->bind_param("s", $ip_address);
    $stmt->execute();
    $stmt->close();

    $file = 'Anayatul-Ahad-Shoikot-Resume.pdf';
    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    } else {
        echo "File not found.";
    }
?>