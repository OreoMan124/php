<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form>
            <div class="form-group">
                <input type="email" id="email" required placeholder="Enter your email">
            </div>

            <div class="form-group">
                <input type="password" id="password" required placeholder="Enter your password">
            </div>

            <button type="submit" class="login-btn">Login</button>

            <p class="register-text">Don't Have An Account Yet?<br>
            Register Below!</p>

            <button type="button" class="register-btn"><a href="localhost/website/index.php" class="link">Register</a></button>
        </form>
    </div>
</body>
</html>
