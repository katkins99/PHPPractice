<!DOCTYPE html>
<html>
    <body>
    <link rel="mysqli" href="./php_mysqli.dll">
        <?php
            $servername = 'localhost';
            $username = 'Kieran';
            $password = '*';
            $dbname = 'myDB';

            $conn = new mysqli($servername,$username,$password);

            if ($conn->connect_error) {
                    die('Connection failed:     '. $conn->connect_error);
                    echo '<br>';
            }
            echo 'Connected successfully';
            echo '<br>';

            $sql = 'CREATE TABLE MyGuests (
               id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
               firstname VARCHAR(30) NOT NULL,
               lastname VARCHAR(30) NOT NULL,
               email VARCHAR(50),
               reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP 
                )';

            if ($conn->query($sql) === TRUE) {
                echo "Table Myguests created succesfully";
            } else {
                echo "Error creating table: ". $conn->error;
            }

            $conn-> close();
        ?>
    </body>
</html>
