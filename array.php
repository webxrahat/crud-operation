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
    };


    $emp=[
        [1, "rahim", "CEO", 50000],
        [1, "ramiz", "manager", 25000],
        [1, "rahi", "product_manager", 50000],
        [1, "raim", "CEO", 50000],
        [1, "lahim", "CEO", 50000]
    ];
    
    echo"<pre>";
    
    print_r ($emp);

    echo"<pre>";


    $a1= array("id"=> 1, "friend"=>"rahim","desination"=> "CEO","salary"=> 50000);
    $a2= array("id"=> 1, "friend"=>"rahim","desination"=> "manager","salary"=> 20000);
    
    $newArray=array_diff($a1,$a2);
    
    echo"<pre>";
    print_r ($newArray);
    echo"<pre>";


    $a1= array("id"=> 1, "friend"=>"rahim","desination"=> "CEO","salary"=> 50000);
    $a2= array("id"=> 1, "num"=> 1, "friend"=>"rahim","desination"=> "manager","salary"=> 20000);
    
    $newArray=array_values($a1);
    $newArray1=array_unique($a2);
    
    echo"<pre>";
    print_r ($newArray);
    echo"<pre>";

    echo"<pre>";
    print_r ($newArray1);
    echo"<pre>";




















    ?>
</body>

</html>