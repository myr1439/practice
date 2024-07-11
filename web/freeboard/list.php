<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>자유게시판 > 목록보기</h2>
    <ul class="board_list">
        <li>
            <span class="col1">번호</span>
            <span class="col2">제목</span>
            <span class="col3">글쓴이</span>
            <span class="col4">등록일</span>
        </li>

        <?php
        $con=mysqli_connect("localhost","root","","web604"); //DB 연결
        $sql="select * from freeboard order by num desc"; //번호를 기준으로 내림차순 레코드 검색

        $result=mysqli_query($con,$sql);
        $total_record=mysqli_num_rows($result); //전체 글 수

        $number = $total_record;

        for($i=0; $i<$total_record; $i++){
            mysqli_data_seek($result,$i); //가져올 레코드로 위치(포인터) 이동
            $row = mysqli_fetch_assoc($result); //하나의 레코드 가져오기

            $num       =$row["num"]; //일련번호
            $subject   =$row["subject"]; //제목
            $name      =$row["name"]; //이름
            $regist_day=$row["regist_day"]; //작성일
        
        ?>

        <li>
            <span class="col1"><?= $number ?></span>
            <span class="col2"><a href="view.php?num=<?= $num ?>"><?= $subject ?></a></span>
            <span class="col3"><?= $name ?></span>
            <span class="col4"><?= $regist_day ?></span>
        </li>

        <?php
        $number--;
        }
        mysqli_close($con);
        ?>

        <ul class="buttons">
            <li><button>목록</button></li>
            <li><button onClick="location.href='form.php'">글쓰기</button></li>
        </ul>
    </ul>
</body>
</html>