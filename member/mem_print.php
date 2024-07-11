<?php
$id=$_REQUEST["id"]; //$_REQUEST[]:POST,GET 모두 받아줌
$name=$_REQUEST["name"];
$passwd=$_REQUEST["passwd"];
$passwd_confirm=$_REQUEST["passwd-confirm"];
$birth_year=$_REQUEST["birth_year"];
$birth_month=$_REQUEST["birth_month"];
$birth_day=$_REQUEST["birth_day"];
$phone1=$_REQUEST["phone1"];
$phone2=$_REQUEST["phone2"];
$phone3=$_REQUEST["phone3"];
$address=$_REQUEST["address"];
$intro=$_REQUEST["intro"];

if($_REQUEST["gender"] === "M"){
 $gender="남자";
}else{
    $gender="여자";
}
//isset() //있는가? true/false
if(isset($_REQUEST["movie"])){
    $movie="영화감상 ";
}else{
    $movie="";
}

if(isset($_REQUEST["book"])){
    $book="독서 ";
}else{
    $book="";
}

if(isset($_REQUEST["shop"])){
    $shop="쇼핑하기 ";
}else{
    $shop="";
}

if(isset($_REQUEST["sport"])){
    $sport="운동하기 ";
}else{
    $sport="";
}

if(isset($_REQUEST["hobby"])){
    // implode(",",$_REQUEST["hobby"]) 배열안의 item을 ,로 구분하여 출력
    $hobby = implode(",",$_REQUEST["hobby"]);
}else{
    $hobby="";
}
?>



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
        input{border:0; width: 100%; outline:none; box-sizing:border-box;}
        .btnWrap.btnWrap{display:flex; justify-content:center; gap:20px; width: 100%; border:none; }
    </style>
</head>
<body>
    <h2>회원가입결과</h2>
    <table>
        <tr>
            <td>*아이디 :</td>
            <!-- <td><?php echo $id ?></td> -->
            <td><?= $id ?></td>
        </tr>
        <tr>
            <td>*이 름 :</td>
            <td><?= $name ?></td>
        </tr>
        <tr>
            <td>*비밀번호 :</td>
            <td><?= $passwd ?></td>
        </tr>
        <tr>
            <td>*비밀번호 확인 :</td>
            <td><?= $passwd_confirm ?></td>
        </tr>
        <tr>
            <td>*생년월일 :</td>
            <td><?= $birth_year ?>년<?= $birth_month ?>월<?= $birth_day ?>일</td>
        </tr>
        <tr>
            <td>*휴대전화 :</td>
            <td><?= $phone1 ?>-<?= $phone2 ?>-<?= $phone3 ?></td>
        </tr>
        <tr>
            <td>*성별 :</td>
            <td><?= $gender ?></td>
        </tr>
        <tr>
            <td>*주소 :</td>
            <td><?= $address ?></td>
        </tr>
        <tr>
            <td>*취미 :</td>
            <td><?= $movie ?><?= $book ?><?= $shop ?><?= $sport ?></td>
        </tr>
        <tr>
            <td>*취미2 :</td>
            <td><?= $hobby ?></td>
        </tr>
        <tr>
            <td>*자기소개 :</td>
            <td><?= $intro ?></td>
        </tr>
        

    </table>
</body>
</html>