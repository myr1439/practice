<?php
if(isset($_REQUEST["mode"])){
    $mode=$_REQUEST["mode"];
}else{
    $mode="";
}

if(isset($_REQUEST["num"])){
    $num=$_REQUEST["num"];
}else{
    $num="";
}

if(isset($_REQUEST["error"])){
    $error=$_REQUEST["error"];
}else{
    $error="";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>글 작성시 비밀번호를 입력해 주세요</h3>
    <?php 
        if($error == "y"){
            echo "<p>※ 비밀번호가 다릅니다. 다시 입력해 주세요!</p>";
        }
    ?>
    <form action="password.php?mode=<?=$mode?>&num=<?=$num?>" method="POST">
        비밀번호 : <input type="password" name="pass">
        <button type="submit">확인</button>
    </form>
</body>
</html>