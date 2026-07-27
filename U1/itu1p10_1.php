<?php
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $a1 = array(1,2,3);
            $a2 = array(4,5,6);

            $merged = array_merge($a1, $a2);
            echo "<h3>Merged Array:</h3>";
            foreach($merged as $val)
            {
                echo $val."<br>";
            }
        ?>
    </body>
</html>

