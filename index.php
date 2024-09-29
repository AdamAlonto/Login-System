<?php
session_start();
$message = isset($_GET['message']) ? $_GET['message'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
</head>
<body>
    <h2>Login System</h2>

    <form method="POST" action="login.php">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit" name="login">Login</button>
    </form>

    <form method="POST" action="logout.php">
        <button type="submit" name="logout">Logout</button>
    </form>

    <p><?php echo htmlspecialchars($message); ?></p>

    <?php
    if (isset($_SESSION['username'])) {
        echo "<p>User logged in: " . htmlspecialchars($_SESSION['username']) . "</p>";
		echo "<p>Password:" . htmlspecialchars($_SESSION['password']). "</p";
    }
    ?>
</body>
</html>
