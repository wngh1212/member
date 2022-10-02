<?php
session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["user_name"]);
echo(
    "<script> alert('로그아웃되셨습니다');
    location.href='login.php';</script>"
);