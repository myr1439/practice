<?php
$type=$_REQUEST["type"];

include "../include/board_setup.php";
include "../include/header.php";
include $type.".php";
?>