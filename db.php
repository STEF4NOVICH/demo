
    <?php
    /*
After creating the table, we have to create a PHP MySQL connector script to connect to the MySQL database server. Create a file named db.php and put the following code inside it.
*/
    // Sæt host name, database username, password(nottingham), og database navn.

    // Når vi ikke har lavet et password til database sæt det til ingenting
    $con = mysqli_connect("localhost", "root", "", "logindemo");
    // Check connection
    if (mysqli_connect_error()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    ?>
