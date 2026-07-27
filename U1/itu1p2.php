<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>u1 p2</title>
    </head>
    <body>
        <?php
            $num = array(10,20,30,40,50);

            $mx1 = max($num);
            $mn1 = min($num);
            
            //2nd logic 
            $mx2 = max(10,20,30,40,50);
            $mn2 = min(10,20,30,40,50);

            echo "<h1> Maximum Minimum </h1>";
            echo "<h2> Maximum </h2>";
            echo "First max <br>".$mx1."<br>----<br>";
            echo "Second max <br>".$mx2;
            echo "<br><h2> Maximum </h2><br>";
            echo "First min<br>".$mn1."<br>----<br>";
            echo "Second min <br>".$mn2;
        ?>
    </body>
</html>