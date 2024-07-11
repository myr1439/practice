<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2{text-align:center; margin: 30px 0;}
        table{
            width: 640px;
            border: 1px solid #000;
            border-collapse:collapse;
            margin:30px auto;
        }
        tr,td{border: 1px solid #000}
        td:nth-child(1){width: 30%; text-align:right;}
        input{display:inline-block; border:0; outline:none; box-sizing:border-box;}
        .btnWrap.btnWrap{width: 100%; border:none; text-align:center;}
    </style>
</head>
<body>
    <h2>회원가입</h2>
    <!-- method=""에는 GET,POST가 있음
    POST는 주소표시줄에 옵션이 표시되지 않음 -->
    <form method="GET" action="mem_print.php">
        <table>
            <tr>
                <td>* 아이디 :</td>
                <td><input type="text" name="id" value="guest" autofocus required></td>
            </tr>
            <tr>
                <td>* 이 름 :</td>
                <td><input type="text" name="name" value="guest" required></td>
            </tr>
            <tr>
                <td>* 비밀번호 :</td>
                <td><input type="password" name="passwd" value="1234" required></td>
            </tr>
            <tr>
                <td>* 비밀번호 확인 :</td>
                <td><input type="password" name="passwd-confirm"></td>
            </tr>
            <tr>
                <td>* 생년월일</td>
                <td>
                    <select name="birth_year" required>
                        <?php
                        for($i=2024; $i>=1910; $i--){
                            echo "<option value=$i>{$i}년</option>";
                            //"" (큰따옴표) 안에서는 변수를 변수자체로 사용할 수 있음
                            //'' (작은따옴표) 안됨
                            //변수와 텍스트를 연이어 사용하면 에러발생
                            //변수와 텍스트를 연결할 때 변수라는 지정을 하기 위해 {변수}년 과 같이 사용함
                        }
                        ?>
                    </select>

                    <select name="birth_month">
                        <?php
                        for($i=1; $i<=12; $i++){
                            print "<option value=$i>{$i}월</option>";
                        }
                        ?>
                    </select>
                    <select name="birth_day">
                        <?php
                        for($i=1; $i<=31; $i++){
                            print "<option value=$i>{$i}일</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>* 휴대전화</td>
                <td>
                    <select name="phone1">
                        <option value="010">010</option>
                        <option value="011">011</option>
                        <option value="017">017</option>
                    </select>-
                    <input type="text" size="4" name="phone2">-
                    <input type="text" size="4" name="phone3">
                </td>
            </tr>
            <tr>
                <td>* 성별</td>              
                <td>
                    <input type="radio" name="gender" value="M" checked>남
                    <input type="radio" name="gender" value="F">여
                </td>              
            </tr>
            <tr>
                <td>* 주소</td>              
                <td>
                    <input type="text" name="address" size=50>
                </td>              
            </tr>
            <tr>
                <td>* 취미</td>              
                <td>
                    <input type="checkbox" name="movie" value="yes" checked>영화감상<br>
                    <input type="checkbox" name="book" value="yes">독서<br>
                    <input type="checkbox" name="shop" value="yes">쇼핑<br>
                    <input type="checkbox" name="sport" value="yes" checked>운동<br>
                </td>            
            </tr>
            <tr>
                <td>* 취미</td>              
                <td>
                    <input type="checkbox" name="hobby[]" value="축구" checked>축구<br>
                    <input type="checkbox" name="hobby[]" value="농구">농구<br>
                    <input type="checkbox" name="hobby[]" value="배구">배구<br>
                    <input type="checkbox" name="hobby[]" value="수영" checked>수영<br>
                </td>            
            </tr>
            <tr>
                <td>* 자기소개</td>              
                <td>
                    <textarea name="intro" cols="60" rows="5" placeholder="간단한 자기소개하기"></textarea>
                </td>              
            </tr>

            
            <tr>
                <td colspan="2" class="btnWrap">
                    <input type="submit" value="확인">
                    <input type="reset" value="다시작성">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>