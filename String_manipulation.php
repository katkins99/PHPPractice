<!DOCTYPE html>
<html>
    <body>
        <?php
            $x = 'I love cheddar cheese';
           
            echo $x;
            echo '<br>';
            echo 'Number of characters -'. strlen($x). '<br>';
            echo 'Number of words -'. str_word_count($x). '<br>';
            echo 'Reversed string -'. strrev($x). '<br>';
            echo 'Position of the word cheddar -'. strpos($x,'cheddar'). '<br>';
            echo 'Replacing the word cheddar with red leicester -'. str_replace('cheddar', 'red leicester', $x). '<br>';
        ?>
    </body>
</html>