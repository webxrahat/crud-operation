<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

     $color= array("rad", 500, "Yellow", 300);
     $color= ["rad", 500, "Yellow", 300];

     echo $color[1];
     print_r($color)."<br>";

    for($i = 0; $i<4; $i++){
        echo $color[$i]. "<br>";
    }
    
    ?>
</body>

</html>