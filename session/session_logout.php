<?php
session_start();

if(isset($_SESSION["userid"])){
    //userid 섹션이 있으면
    unset($_SESSION["userid"]); //세션 지우기
}

if(isset($_SESSION["username"])){
    //userid 섹션이 있으면
    unset($_SESSION["username"]); //세션 지우기
}

echo "
<script>
location.href='session_page.php';
</script>
"
?>