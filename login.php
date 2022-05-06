<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Login</title>
    </head>
    <style>
        *{
padding:0;
margin:0;
font-family:"Work Sans";
        }
        header{
	height:75px;
	background-color:#0925c2;
	
	width:100%;
	left:0;
    color:white;
}
h1{
	color:white;
	font-family:Courier New header;
	line-height:75px;
	float:left;
	display: block;
	padding-left:20px;
}
section{
	background-color:#f5f5f5;
	height:100%;
	width:100%;
	position:fixed;
}
form ul li{
	line-height:50px;
}
div{
  position:absolute;
  left:38%;
  top:30%;
}
ul{
    list-style:none;
}
        </style>
    <body>
        <header>
        <h1>로그인</h1>
</header>
        <?php if(!isset($_SESSION['id']) || !isset($_SESSION['pass'])) { ?>
            <div>
            <section>
        <form method="post" action="login_ok.php">
            <ul>
            <li>아이디: <input type="text" name="id" /></li>
            <li>비밀번호: <input type="password" name="pass" /></li>
            <li><input type="submit" value="로그인" /></li>
        </ul>
        </form>
        </section>
        </div>
        <?php
        } ?>
    </body>
</html>