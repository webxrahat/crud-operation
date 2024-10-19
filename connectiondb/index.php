<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection db</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <?php include 'database.php';?>
    <?php 
    $sql = "SELECT * FROM table1";

    $result = mysqli_query($conn, $sql) or die("Cannot Connect");

    if (mysqli_num_rows($result)> 0) {
       
    ?>

    <?php 
    while($row= mysqli_fetch_assoc($result)){

    
    ?>
    <p>This data comming from DataBase: <?php echo $row['t1Name']?></p>

    <?php } ?>

    <?php   } ?>
</body>

</html>