<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

try {
    // Code for timeline page
} catch (Exception $e) {
    echo "Error: ". $e->getMessage();
}
?>