<?php
$mode=$_REQUEST["mode"]; //modify:수정, delete:삭제
$num=$_REQUEST["num"]; //레코드번호
$pass=$_REQUEST["pass"]; //비밀번호

$con=mysqli_connect("localhost","root","","web604");
$sql="select pass from freeboard where num=$num"; //레코드검색

$result=mysqli_query($con,$sql);

$row=mysqli_fetch_assoc($result); //레코드 가져오기

$db_password=$row["pass"];
mysqli_close($con);

if($pass == $db_password){
    if($mode == "modify"){
        $url="modify_form.php?num=$num";
    }else{
        $url="delete.php?num=$num";
    }

    echo "
    <script>
        self.close(); //password.php를 닫음
        opener.location.href='$url'
    </script>
    ";
}else{
    echo "
        <script>
            location.href='password_form.php?num=$num&error=y'
        </script>
    ";
}


?>
