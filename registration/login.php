<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
</head>

<body>
    <center>
        <div class="header">
            <h2>Login</h2>
        </div>

        <form action="login.php" method="post">
            <?php include('errors.php'); ?>
            <div class="input-group">
                <label>E-mail</label>
                <input type="email" name="email">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
            </div>
            <p>
                Not yet a member? <a href="register.php">Sign up</a>
            </p>
        </form>
    </center>
</body>

</html>