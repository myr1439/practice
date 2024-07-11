<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>세션으로 로그인 처리하기</h3> 
    <?php
    //session은 session을 사용하는 영역 
    //상단에 session_start()를 반드시 적어야한다

    session_start();

    if(!isset($_SESSION["userid"])){
        //session이 없으면 true
        echo "<a href='session_login.php'>로그인</a>";
    }else{
        echo "<a href='session_logout.php'>로그아웃</a>";
    }

    ?>
</body>
</html>