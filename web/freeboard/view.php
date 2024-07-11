<?php
if(isset($_REQUEST["num"])){
    $num = $_REQUEST["num"];
}else{
    $num="";
}

$con=mysqli_connect("localhost","root","","web604");
$sql="select *from freeboard where num=$num"; //레코드 검색
$result=mysqli_query($con,$sql); //sql 명령 실행

$row=mysqli_fetch_assoc($result);
$name=$row["name"]; //이름
$subject=$row["subject"]; //제목
$regist_day=$row["regist_day"]; //작성일
$content=$row["content"]; //내용
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>자유 게시판 > 내용보기</h2>
    <ul class="board_view">
        <li class="row1">
            <span class="col1"><b>제목 : </b><?= $subject ?></span>
            <span class="col2"><?= $name ?> | <?= $regist_day ?></span>
        </li>
        <li class="row2">
             <?= $content ?>
        </li>
        <ul class="buttons">
            <li><button onClick="location.href='list.php'">목록보기</button></li>
            <li><button onClick="check_password('modify','<?= $num ?>')">수정하기</button></li>
            <li><button onClick="check_password('delete','<?= $num ?>')">삭제하기</button></li>
            <li><button onClick="location.href='form.php'">글쓰기</button></li>
        </ul>
    </ul>

    <script>
        function check_password(mode,num){
            //mode:modify(수정하기) delete(삭제하기) num:레코드 번호
            window.open("password_form.php?mode=" + mode + "&num=" + num,"pass_check","left=700,top=300,width=550,height=150")
        }
    </script>
</body>
</html>