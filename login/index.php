<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Log in</title>
</head>
<body>
    <div class="wrapper">
        <form action="">
            <h1>Login</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" required>
                    <img src="./icons/bx-user.svg" alt="user">
                </div>

                <div class="input-box">
                    <input type="password" placeholder="Password" required>
                    <img src="./icons/bx-lock-alt.svg" alt="lock">
                </div>

                <div class="remember-forget">
                    <label><input type="checkbox" class="checkbox-1">Remember me</label>
                    <a href="#">Forget password?</a>
                </div>

                <button type="submit" class="btn">Login</button>

                <div class="register-link">
                    <p>Don't have an account? <a href="#">Register</a></p>
                </div>

        </form>
    </div>
</body>
</html>