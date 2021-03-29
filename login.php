<body>
    <?php

    include('header.php');

    require('db.php');
    session_start();

    // When form submitted, check and create user session.

    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        // fjern backslashes


        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);


        // Check om bruger er i databasen

        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;


            // Redirect til dashboard page

            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
    ?>
        <section class="site-wrapper">

            <form class="loginform" method="post" name="login">
                <h1>Login</h1>
                <input type="text" name="username" placeholder="Username" autofocus="true" />
                <input type="password" name="password" placeholder="Password" />
                <input type="submit" value="Login" name="submit" />
            </form>

        </section>

    <?php
    }
    ?>
</body>

</html>