<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	background-color:#395B64;
	
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
	height:100%;
	width:100%;
	
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