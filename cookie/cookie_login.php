<?php
// setcookie(쿠키name,쿠키value,만료기간)
// time() --> 현재시간

// 60*60 --> 1시간 (60초(1분)*60)
// 60*60*24 --> 24시간, 하루
// 60*60*24*7 --> 1주일
// 60*60*24*30 --> 약 1달 30일

setcookie("userid","green",time() + 60*30);
echo "
<script>
location.href='cookie_page.php';
</script>
"
?>