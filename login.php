<?php
session_start();

$message = '';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!isset($_SESSION['username'])) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $_SESSION['username'] = $username;
        $_SESSION['password'] = $hashedPassword; 

        
    } else {
        $message = "User is already logged in. Wait for them to log out first.";
    }
}

header('Location: index.php?message=' . urlencode($message));
exit;
?>
