<?php

/* Next, we have to create a session for the user. Create a file named
auth_session.php and paste the codes below. */
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>
</body>

</html>