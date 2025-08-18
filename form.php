<?php
session_start();
include './db_con.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $msg = trim($_POST['msg']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['msg'][] = "Invalid email format.";
        header("Location: ./index.php");
        exit();
    }

    $stmt = $conn->prepare("INSERT INTO contact_form (name, email, subject, msg) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $msg);

    if ($stmt->execute()) {
        $_SESSION['msg'] = "Message sent successfully! Thank you";
    } else {
        $_SESSION['msg'] = "Opps.. Failed to send message.";
    }

    $stmt->close();
    $conn->close();

    header("Location: ./index.php");
    exit();
}
?>
