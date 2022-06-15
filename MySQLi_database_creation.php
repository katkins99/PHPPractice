<!DOCTYPE html>
<html>
    <body>
    <link rel="mysqli" href="./php_mysqli.dll">
        <?php
            $servername = 'localhost';
            $username = 'Kieran';
            $password = '*';

            $conn = new mysqli($servername,$username,$password);

            if ($conn->connect_error) {
                    die('Connection failed:     '. $conn->connect_error);
                    echo '<br>';
            }
            echo 'Connected successfully';
            echo '<br>';

            $sql = 'CREATE DATABASE myDB';
            if($conn->query($sql)=== TRUE){
                echo "Database created successfully";
                echo '<br>';
            } else {
                echo "Error creating database: ". $conn->error;
                echo '<br>';
            }

            $conn->close();
        ?>
    </body>
</html>
