<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>아이디 중복 체크</h3>
    <div>
        <?php
            $id=$_REQUEST["id"];

            if(!$id){
                echo("아이디를 입력하세요.");
            }else{
                include "../include/db_connect.php";

                $sql="select * from _mem where id='$id'";
                $result=mysqli_query($con,$sql); //sql 실행

                $num_record=mysqli_num_rows($result); //레코드 가져오기

                if($num_record){
                    echo $id."아이디는 중복됩니다. <br/> 다른 아이디를 사용해 주세요";
                }else{
                    echo $id."아이디는 사용 가능합니다.";
                }
                mysqli_close($con);
            }
        ?>
    </div>
    <div class="close">
        <button type="button" onClick="javascript:self.close()">창 닫기</button>
    </div>
</body>
</html>