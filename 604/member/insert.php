<?php
$id=$_REQUEST["id"];      //아이디
$pass=$_REQUEST["pass"];  //비밀번호
$name=$_REQUEST["name"];  //이름
$email=$_REQUEST["email"];//이메일
$regist_day=date("Y-m-d (H:i)"); //가입일자

include "../include/db_connect.php";
$sql="select * from _mem where id='$id'";
$result=mysqli_query($con,$sql); //sql 실행
$num_record=mysqli_num_rows($result);

if($num_record){
    echo "
    <script>
    alert ('아이디가 중복됩니다. 다른 아이디를 사용해 주세요');
    history.go(-1);
    </script>
    ";
    exit;
}

$sql="insert into _mem(id,pass,name,email,regist_day,level,point) values('$id','$pass','$name','$email','$regist_day',9,100)";
mysqli_query($con,$sql);

mysqli_close($con);

echo "
    <script>
        location.href='index.php?type=login_form'
    </script>
";
?>
