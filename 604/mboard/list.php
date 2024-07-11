<h2><?=$board_title?> > 목록보기</h2>

<ul class="board_list">
    <li>
        <span class="col1">번호</span>
        <span class="col2">제목</span>
        <span class="col3">글쓴이</span>
        <span class="col4">첨부</span>
        <span class="col5">등록일</span>
    </li>    

</ul>
<?php
include "../include/db_connect.php";
$sql="select * from $table";

$result=mysqli_query($con,$sql);
$total_record=mysqli_num_rows($result); //전체 글수

for($i=0; $i<$total_record; $i++){
    mysqli_data_seek($result,$i); //가져올 레코드로 위치(포인트) 이동
    $row=mysqli_fetch_assoc(($result)); //하나의 레코드 가져오기

    $num = $row["num"];
    $id = $row["id"];
    $name = $row["name"];
    $subject = $row["subject"];
    $regist_day = $row["regist_day"];
    $file_name = $row["file_name"];
    $file_copied = $row["file_copied"];
}
?>

<ul class="buttons">
    <li><button>목록</button></li>
    <?php
     if($userid){
        $onClick="location.href='index.php?type=form&table=$table'";
     }else{
        $onClick="alert('로그인 후 이용해 주세요')";
     }
    ?>
    <li><button onClick="<?=$onClick?>">글쓰기</button></li>
</ul>