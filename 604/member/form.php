    <form name="member" method="POST" action="insert.php">
        <div class="join_form">
            <h2>회원가입</h2>
        
            <ul>
                <li>
                    <span class="col1">아이디</span>
                    <span class="col2"><input type="text" name="id"></span>
                    <span class="col3"><button type="button" onClick="check_id()">중복체크</button></span>
                </li>
                <li>
                    <span class="col1">비밀번호</span>
                    <span class="col2">
                        <input type="password" name="pass">
                    </span>
                </li>
                <li>
                    <span class="col1">비밀번호 확인</span>
                    <span class="col2">
                    <input name="pass_confirm" type="password" name="pass">
                    </span>
                </li>
                <li>
                    <span class="col1">이름</span>
                    <span class="col2">
                    <input name="name" type="text">
                    </span>
                </li>
                <li class="area">
                    <span class="col1">이메일</span>
                    <span class="col2">
                        <input name="email" type="text"></input>
                    </span>
                </li>
            </ul>
            <ul class="buttons">
                <li><button type="button" onclick="check_input()">저장하기</button></li>
                <li><button type="button" onclick="reset_form()">취소하기</button></li>
            </ul>
        </div>
    </form>

    <script>
        function check_id(){
            window.open("check_id.php?id="+document.member.id.value,"IDcheck","left=700,top=300,width=380,height=160")
        }
        function reset_form(){
            document.member.id.value="";
            document.member.pass.value="";
            document.member.pass_confirm.value="";
            document.member.name.value="";
            document.member.email.value="";
            document.member.id.focus();
            return;
        }
        function check_input(){
            if(!document.member.id.value){ //아이디 체크
                alert("아이디를 입력하세요")
                document.member.id.focus()
                return;
            }
            if(!document.member.pass.value){ //비밀번호 체크
                alert("비밀번호를 입력하세요")
                document.member.pass.focus()
                return;
            }
            if(!document.member.pass_confirm.value){ //비밀번호 확인 체크
                alert("비밀번호 확인을 입력하세요")
                document.member.pass_confirm.focus()
                return;
            }
            if(!document.member.name.value){ //이름 체크
                alert("이름을 입력하세요")
                document.member.name.focus()
                return;
            }
            if(!document.member.email.value){ //메일 체크
                alert("이메일 주소를 입력하세요")
                document.member.email.focus()
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