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

     echo "<ul>";
    for($i = 0; $i<4; $i++){
        echo "<li>$color[$i] </li>";
    }
    
    echo "<ul>";


    $friends = array("Rahim"=> 21, "Raja"=>22, "Hasin"=>24);
    $friends = ["Rahim"=> 21, "Raja"=>22, "Hasin"=>24];

    echo $friends["Rahim"]. "<br>";
    print_r($friends);
    echo $friends["Raja"]."<br>";

    $age= [
        "Masum"=> 21,
        "Mahib"=>25,
        "Hasin"=> 30,
    ];


    foreach($age as $value){
        echo $value ."<br>";
    }
    $age= [
        "Masum"=> 21,
        "Mahib"=>25,
        "Hasin"=> 30,
    ];


    foreach($age as $key=> $value){
        echo "$key=> $value";
    }




    ?>
</body>

</html>