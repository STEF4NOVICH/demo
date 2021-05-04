<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: urfeels_finish.php");
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
            <?php echo "<h1>Sådan " . $_SESSION['username'] . "</h1>"; ?>
            <p>Vi har indsamlet og gemt
                    dine vurderinger af hjemmehjælperne siger derfor tak for hjælpen og fortsat god dag!  <br> <br>
                    For at afslutte applikationen behøver du blot at trykke på "Log ud" knappen nederst på siden.</p>
        </div>
        
        <div class="btn-next">
            <a href="rating/rating-index.php">Gå tilbage</a>
        </div>  

        <div class="btn-logout">
            <a href="urfeels_logout.php">Log ud</a>
        </div>  
    </div>
    
</body>
</html>