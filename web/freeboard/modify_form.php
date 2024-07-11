<?php
if(isset($_REQUEST["num"])){
    $num=$_REQUEST["num"];
}else{
    $num="";
}

$con=mysqli_connect("localhost","root","","web604"); //DB연결

$sql="select * from freeboard where num=$num";

$result=mysqli_query($con,$sql);  //$sql에 명령 실행

$row=mysqli_fetch_assoc($result); //레코드 가져오기

$name=$row["name"]; //이름
$pass=$row["pass"]; //비번
$subject=$row["subject"]; //제목
$content=$row["content"]; //내용

$regist_day=date("Y-m-d (H:i"); //수정한 날짜

mysqli_close($con);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>자유 게시판</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h2>자유게시판>글 수정하기</h2>    
    <form name="board" action="modify.php?num=<?=$num?>">
        <ul class="board_form">
            <li>
                <span class="col1">이름:</span>
                <span class="col2">
                    <input type="text" name="name" value="<?=$name?>">
                </span>
            </li>
            <li>
                <span class="col1">비밀번호:</span>
                <span class="col2">
                    <input type="password" name="pass" value="<?=$pass?>">
                </span>
            </li>
            <li>
                <span class="col1">제목:</span>
                <span class="col2">
                    <input type="text" name="subject" value="<?=$subject?>">
                </span>
            </li>
            <li class="area">
                <span class="col1">내용:</span>
                <span class="col2">
                    <textarea name="content"><?=$content?></textarea>
                </span>
            </li>
        </ul>
        <ul class="buttons">
            <li><button type="button" onclick="check_input()">저장하기</button></li>
            <li><button type="button" onclick="location.href='list.php'">목록보기</button></li>
        </ul>
    </form>

    <script>
        function check_input(){
            if(!document.board.name.value){ //이름 체크
                alert("이름을 입력하세요")
                document.board.name.focus()
                return;
            }
            if(!document.board.pass.value){ //비밀번호 체크
                alert("비밀번호를 입력하세요")
                document.board.pass.focus()
                return;
            }
            if(!document.board.subject.value){ //제목 체크
                alert("제목을 입력하세요")
                document.board.subject.focus()
                return;
            }
            if(!document.board.content.value){ //내용 체크
                alert("내용을 입력하세요")
                document.board.content.focus()
                return;
            }
            document.board.submit();
        }
    </script>
</body>
</html>