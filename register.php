<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div>
        <h2>Register</h2>
    </div>

    <form>
        <?php include('errors.php'); ?>
        <div>
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div>
            <label>Confirm password</label>
            <input type="password" name="password_2">
        </div>
        <div>
            <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        <p>
            Already a member? <a href="login.php">Sign in</a>
        </p>
    </form>
</body>

</html>