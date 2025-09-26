<?php
session_start();

$valid_username = 'admin';
$valid_password = '1234';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = isset($_POST['username']) ? trim($_POST['username']) : '';
    $pass = isset($_POST['password']) ? trim($_POST['password']) : '';
    
    if ($user === $valid_username && $pass === $valid_password) {
        $_SESSION['LoggedIn'] = true;
        header("Location: resume.php");
        exit;
    } else {
        $_SESSION['error'] = "Invalid username or password.";
        header("Location: login.php"); // redirect to a clean GET
        exit;
    }
}

// load error if exists
$error = '';
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']); // show once, then clear
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-container">
    <h1>Login</h1>
    
    <?php if (!empty($error)) : ?>
        <p class="error"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Submitt</button>
    </form>
</div>

</body>
</html>
