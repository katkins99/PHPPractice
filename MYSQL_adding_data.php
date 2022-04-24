<!DOCTYPE html>
<html>
    <body>
        <?php
        $servername = 'localhost';
        $username = 'Kieran';
        $password = 'Roygbiv4life123!';
        $dbname = 'myDB';

        $conn = new mysqli($servername,$username,$password);

        if ($conn->connect_error) {
                die('Connection failed:     '. $conn->connect_error);
                echo '<br>';
        }
        echo 'Connected successfully';
        echo '<br>';
        ?>
    </body>
</html>