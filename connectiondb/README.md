## Connection with database process

#### Read database

-   $conn = ("serverName", "userName", "password", "databaseName")
-   $sql = "SELECT \* FORM table";
-   $result = mysqli_query($conn, $sql)
-   while($row = mysqli_fetch_assoc($result))
