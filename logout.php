<?php
session_start(); 

if (isset($_POST['logout'])) {
    session_destroy(); 
    header('Location: index.php?message=' . urlencode("You have successfully logged out."));
    exit;
}
?>
