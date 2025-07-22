<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo (new url())->base_url(); ?>public/assets/css/style.css">
    <title>Login</title>
</head>
<body class="login-bg">
    <div class="login-container">
        <img src="<?php echo (new url())->base_url(); ?>public/assets/image/SUNN.png" alt="Logo" class="login-logo">
        <form class="login-form">
            <input type="text" class="login-input" placeholder="ID Number" required>
            <input type="password" class="login-input" placeholder="Password" required>
            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>
</body>
</html>