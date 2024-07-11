<?php
$name=$_REQUEST["name"]; //이름
$pass=$_REQUEST["pass"]; //비번
$subject=$_REQUEST["subject"]; //제목
$content=$_REQUEST["content"]; //내용

$regist_day=date("Y-m-d (H:i"); //UTC 기준 현재의 년-월-일(시:분)
// $con=mysqli_connect("서버주소","아이디","비밀번호","DB이름")
$con=mysqli_connect("localhost","root","","web604"); //DB연결

$sql="insert into freeboard (name,pass,subject,content,regist_day) values('$name','$pass','$subject','$content','$regist_day')";

mysqli_query($con,$sql);  //$sql에 명령 실행

mysqli_close($con);

//목록페이지로 이동
echo "<script>
location.href='list.php';
</script>";
?>