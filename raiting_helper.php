<?php

require_once 'rating_connection.php';

$helper = null;

if(isset($_GET[ 'id' ])) {

    $id = (int)$_GET[ 'id' ];

    $helper = $db->query("SELECT * FROM helpers WHERE id = {$id}")->fetch_object();
}

?>




<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hjemmehjælper</title>
</head>
<body>
        <?php if($helper): ?>
            <div class="helper">
                Dette er hjælperen "<?php echo $helper->name; ?>". 
                <div class="helper-rating">Rating: x/5</div> 
                <div class="helper-rate">
                    Vurdér denne hjemmehjælper:
                    <?php foreach(range(1, 5) as $rating): ?>
                        <a href="rate.php?helper=<?php echo $helper->id;?>$rating=<?php echo  $rating; ?>"><?php echo $rating; ?> </a>
                    <?php endforeach; ?>
                </div> 
            </div>
            <?php endif; ?>
</body>
</html>