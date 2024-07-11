<?php
$num=$_REQUEST["num"];

$con=mysqli_connect("localhost","root","","web604");
$sql="delete from freeboard where num=$num"; //레코드 삭제

mysqli_query($con,$sql); //sql 명령실행

mysqli_close($con);

echo "
<script>
location.href='list.php'
</script>
";
?>