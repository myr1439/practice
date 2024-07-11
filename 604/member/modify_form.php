<?php
include "../include/db_connect.php";
$sql="select * from _mem where id='$userid'";
$result=mysqli_query($con,$sql);
$row =mysqli_fetch_assoc($result);//레코드 가져오기

$pass =$row["pass"];
$name = $row["name"];
$email = $row["email"];

mysqli_close($con);

?>
<form name="member" method="post" action="modify.php?id=<?=$userid?>">
        <div class="join_form">
            <h2>정보 수정</h2>
       
            <ul>
                <li>
                    <span class="col1">아이디</span>
                    <span class="col2"><?=$userid?></span>
                </li>      
                <li>   
                    <span class="col1">비밀번호</span>
                    <span class="col2">
                        <input name="pass" type="password" value="<?=$pass?>">
                    </span>
                </li>            
                <li>
                    <span class="col1">비밀번호 확인 </span>
                    <span class="col2"><input name="pass_confirm" type="password"></span>
                </li>   
                <li>
                    <span class="col1">이름 </span>
                    <span class="col2"><input name="name" type="text" value="<?=$name?>"></span>
                </li>       
                <li>
                    <span class="col1">이메일 </span>
                    <span class="col2"><input name="email" type="text" value="<?=$email?>"></span>
                </li>  
            </ul>
            <ul class="buttons">
                <li><button type="button" onclick="check_input()">저장하기</button></li>
                <li><button type="button" onclick="reset_form()">취소하기</button></li>
            </ul>

         </div>
   </form>
    <script>
       
        function reset_form(){
            document.member.id.value="";
            document.member.pass.value="";
            document.member.pass_confirm.value="";
            document.member.name.value="";
            document.member.email.value="";
            document.member.id.focus();
            return;
        }
        function check_input() {
               
            if (!document.member.pass.value) {      // 비밀번호 체크
                alert("비밀번호를 입력하세요!");    
                document.member.pass.focus();
                return;
            }   
            if (!document.member.pass_confirm.value) {      // 비밀번호확인 체크
                alert("비밀번호확인을 입력하세요!");    
                document.member.pass_confirm.focus();
                return;
            }               
            if (!document.member.name.value) {   // 이름 체크
                alert("이름을 입력하세요!");
                document.member.name.focus();
                return;
            }
            if (!document.member.email.value) {   // 메일 체크
                alert("이메일 주소를 입력하세요!");    
                document.member.email.focus();
                return;
            }
            if(document.member.pass.value != document.member.pass_confirm.value){
                alert("비밀번호가 일치하지 않습니다. 다시 입력해 주세요");
                document.member.pass.focus();
                document.member.pass.select();
                return;
            }
        
            document.member.submit();
        }
    </script>
</body>
</html>