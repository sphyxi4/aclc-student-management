<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="login-container">
        <div class="login-form">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <input type="email" name="EMAIL" placeholder="Email Address" required />
                <br />
                <input type="password" name="PASSWORD" placeholder="Password" required />
                <br />
                <input type="submit" value="Login" />
            </form>
            <a href="registration.php" class="register">Register Here!</a>
        </div>
    </div>
</body>

</html>

<?php



?>