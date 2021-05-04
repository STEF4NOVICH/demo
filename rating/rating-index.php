<?php
include('config.php')

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rating</title>
    <link rel="stylesheet" href="css/rating.css">

</head>

<body>
    <div class="container">
        <header>
            <div class="logo"><img src="img/urfeels_logo2.svg" alt=""></div>
        </header>

        <div class="intro-text">
            <p>Her kan du vurdere din overordnede tilfredshed af din hjemmehjælper
                ved at trykke på en af de følgende smileys:
            </p>
        </div>


        <?php
        $find_data = $conn->query("SELECT * FROM rates");

        while ($row = $find_data->fetch_assoc()) {

            $id = $row['id'];
            $staff_name = $row['staff_name'];
            $current_rating = $row['rating'];
            $hits = $row['hits'];

            echo "
        
           
                  
            
                                    <form action='rate.php' method='POST'>$staff_name    
                                        <div class='select'> 

                                                    
                                                            <select name='rating'>
                                                                                <option>0</option>
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option>4</option>
                                                                                <option>5</option>
                                                            </select> 
                                        </div>
                                                <input type='hidden' value='$staff_name' name='staff_name'>
                                                <input class='btn' type='submit' value='Rate!'> Current Rating: ";
            echo round($current_rating, 1);
            echo "
                                    </form>
                        ";
        }
        ?>



        <div class="btn-next">
            <a href="../urfeels_finish.php">Fortsæt</a>
        </div>

    </div>
</body>

</html>