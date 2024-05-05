<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "test";

try {
    $db = new mysqli($db_host, $db_user, $db_pass, $db_name);
    if ($db->connect_error) {
        throw new Exception("Connection failed: ". $db->connect_error);
    }
} catch (Exception $e) {
    echo "Error: ". $e->getMessage();
    exit();
}
?>