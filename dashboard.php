<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include('header.php');
?>

<link rel="stylesheet" href="css/dashboard.css">

<div class="dashboard-stripe">
    <div>
        <span>X</span>
        <input type="search" placeholder="søg hvad som helst">
    </div>
</div>
<div class="dashboard-container">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2>Hej <?php echo $_SESSION['username']; ?>!</h2>
        </div>



        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><span>X</span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href=""><span>X</span>
                        <span>Profil</span></a>
                </li>
                <li>
                    <a href=""><span>X</span>
                        <span>Kalender</span></a>
                </li>
                <li>
                    <a href=""><span>X</span>
                        <span>Beskeder</span></a>
                </li>
                <li>
                    <a href=""><span>X</span>
                        <span>Statistikker</span></a>
                </li>
                <li>
                    <a href=""><span>X</span>
                        <span>Indstillinger</span></a>
                </li>
                <li>
                    <a href="logout.php"><span>X</span>
                        <span>Log ud</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <div class="dashboard-header">
            <h2>
                Dashboard - Oversigt
            </h2>
        </div>

        <div class="information">
            <div class="kurvediagram">
                <h2>Kurvediagram over gennemsnit tilfredshed</h2>
            </div>
        </div>
    </div>



    <div class="oversigt"></div>

</div>