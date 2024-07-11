<?php
$id=$_REQUEST["id"];
$pass=$_REQUEST["pass"];

include "../include/db_connect.php";
$sql="select * from _mem where id='$id'";

$result=mysqli_query($con,$sql);

$num_match=mysqli_num_rows($result);//총갯수

if(!$num_match){
    echo "
    <script>
        window.alert('등록되지 않은 아이디입니다!');
        history.go(-1);
    </script>
    ";
}else{
    $row=mysqli_fetch_assoc($result);//레코드가져오기

    $db_pass=$row["pass"];
    mysqli_close($con);
    if($pass != $db_pass){
        echo "
            <script>
                window.alert('비밀번호가 틀립니다!');
                history.go(-1);
            </script>
            ";
            exit; 
    }else{
      session_start(); 
      $_SESSION["userid"]=$row["id"];
      $_SESSION["username"]=$row["name"];
      $_SESSION["userlevel"]=$row["level"]; 

      echo "
      <script>
          location.href='../main/index.php';
      </script>
      ";
    }
}

?>