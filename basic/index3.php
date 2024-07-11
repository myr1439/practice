<?php
$kor = 90; //국어 성적
$eng = 80; //영어 성적
$math = 100; //수학 성적

$sum = $kor + $eng +$math;
$avg = $sum/3;

echo "국어 : $kor<br>";
echo "평균 : $avg<br>";

$x=$kor>$eng;
echo "$x"; //true 1
var_dump($x); //var_dump()함수는 데이터 형과 값을 화면에 출력한다.
?>