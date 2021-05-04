<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: urfeels_welcome.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/urfeels_welcome.css">
</head>
<body>
    <div class="container">
    <header>
        <div class="logo">
            <img src="billeder/urfeels_logo2.svg" alt="">
        </div>
    </header>
        <div class="intro-text">
            <?php echo "<h1>Goddag " . $_SESSION['username'] . "</h1>"; ?>
            <p>Her på Berit's hjemmepleje 
                    vægter vi dig og dine behov. <br> <br>
                    
                    Derfor bedes du venligst 
                    vurderer sessionen med din 
                    hjemmehjælper.</p>
        </div>
        
        <div class="btn-next">
            <a href="urfeels_logout.php">Fortsæt</a>
        </div>  

        <div class="btn-logout">
            <a href="urfeels_logout.php">Log ud</a>
        </div>  
    </div>
    
</body>
</html>