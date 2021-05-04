<?php

require_once 'rating_connection.php';

// all helpers
$query = $db->query("SELECT * FROM helpers");

$helpers = [];

while($row = $query->fetch_object())    {
        $helpers[] = $row;
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php foreach($helpers as $helper): ?>
                <div class="helper">
                    <h3><a href="rating_helper.php?id=<?php echo $helper->id; ?>"><?php echo $helper->name; ?></a</h3>
                    <div class="helper-rating">Rating: x/5</div>
                </div>
        <?php endforeach; ?>
</body>
</html>