<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include('header.php');
?>

<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>Så vi landet på dashboard, her kan Berit se oversigt over medarbejdere osv</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>

</html>