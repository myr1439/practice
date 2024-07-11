<?php
$id = $_REQUEST["id"];

$pass=$_REQUEST["pass"];
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];

include "../include/db_connect.php";

$sql="update _mem set pass='$pass',name='$name',email='$email' where id='$id'";

mysqli_query($con,$sql);
mysqli_close($con);

echo "
    <script>
    location.href='../main/index.php';
    </script>
";



?>