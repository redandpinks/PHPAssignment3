<?php
$dsn = 'mysql:host=localhost;dbname=tech_support';
$username = 'ts_user';
$password = 'pa55word';

try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error mode to exception
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('../errors/database_error.php'); // Include error page on failure
    exit();
}
?>