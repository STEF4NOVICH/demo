<head>
    <link rel="stylesheet" href="login.css">
</head>
<div>
    <?php

    /*  create a PHP file login.php  This file code contains a form that allows users to enter username and
password. */

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
            echo "<div class='forkert-indtastning'>
                  <h3>Ups, du tastede forkert. Prøv igen</h3><br/>
                  <p class='link'>Klik <a href='login.php'>HER</a> for at prøve igen.</p>
                  </div>";
        }
    } else {
    ?>
        <section class="site-wrapper login">

            <form class="loginform" method="post" name="login">
                <h1>Login</h1>
                <p>Brugernavn</p>
                <input type="text" name="username" placeholder="Indtast dit brugernavn" />
                <p>Password</p>
                <input type="password" name="password" placeholder="Indtast dit password" />
                <input class="loginknap" type="submit" value="Login" name="submit" />
            </form>




        </section>

    <?php
    }
    include('footer.php');
    ?>
</div>