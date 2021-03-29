<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>


<body>
    <?php
    // Sæt host name, database username, password(nottingham), og database navn.

    // Når vi ikke har lavet et password til database sæt det til ingenting
    $con = mysqli_connect("localhost", "root", "", "logindemo");
    // Check connection
    if (mysqli_connect_error()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    ?>
</body>

</html>