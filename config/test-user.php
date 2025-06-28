<?php
require_once 'database.php';

$fname = 'Nico';
$username = 'admin_user';
$password = password_hash('Wea_dayaday05', PASSWORD_DEFAULT);

try {
    $sql = "INSERT INTO users (fname, username, password) VALUES (:fname, :username, :password)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':fname', $fname, PDO::PARAM_STR);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR);
    
    $stmt->execute();
    echo "User created successfully.";
} catch(PDOException $e) {
    die("ERROR: Could not execute. " . $e->getMessage());
}
?>