<!DOCTYPE>
<html>
    <body>
        <?php
            $x = 5433;
            var_dump(is_int($x));

            echo'<br>';

            $x = 54.33;
            var_dump(is_int($x));

            echo '<br>';

            $x = 54.33;
            var_dump(is_float($x));

            echo'<br>';

            $x = 3456;
            var_dump(is_infinite($x));

            echo'<br>';

            //returning a NaN value
            $x = acos(8);
            var_dump($x);

            echo'<br>';

            $x = '87346';
            var_dump(is_numeric($x));

            echo'<br>';

            $x = 'Word';
            var_dump(is_numeric($x));

            echo'<br>';

            //Casting strings and floats to integers
            $x = 16.2;
            $int_cast = (int)$x;
            echo $x;
            echo'<br>';
            echo $int_cast;



        ?>
    </body>
</html>