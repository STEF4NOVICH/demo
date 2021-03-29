<?php

session_start();
// Slut session
if (session_destroy()) {
    // Redirect til login.php
    header("Location: login.php");
}
