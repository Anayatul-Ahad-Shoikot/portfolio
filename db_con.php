<?php
    try {
        $dsn = "pgsql:host=127.0.0.1;port=5432;dbname=portfolio";
        $pdo = new PDO($dsn, "postgres", "RX6600xt", [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
        echo "Connected to PostgreSQL successfully!";
    } catch (PDOException $e) {
        error_log("Database connection error: " . $e->getMessage());
        die("Database connection failed. Please try again later.");
    }
?>