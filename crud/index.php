<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php include 'database.php';?>


    <!-- Hare is the form start -->

    <div class="d-flex justify-content-center">
        <form class="col-2 p-4 bg-warning rounded-2 mt-2">
            <div class="row mb-3">
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>

    </div>

    <?php
    $sql = "SELECT * FROM todolist";

    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
    
    if(mysqli_num_rows($result) > 0){

    

    ?>


    <!-- Hare is the table start -->

    <div class="d-flex justify-content-center">

        <div class="col-6 p-4 mt-2">
            <table class="table border table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                while($row = mysqli_fetch_assoc($result)){

                ?>

                    <tr>
                        <th scope="row"><?php echo $row['textbox'] ?></th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php } ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>