<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
	<style>
*{
padding:0;
margin:0;
font-family:"Work Sans";
list-style:none;
}

header{
	height:75px;
	background-color:#395B64;
	
	width:100%;
	left:0;
}

h1{
	color:white;
	font-family:Courier New header;
	line-height:75px;
	float:left;
	display: block;
	padding-left:20px;
}
.menu a{text-decoration:none; 
		line-height:75px;
		color: white; 
		padding-right:20px; 
		display:block;}
.menu{float:right;}
.menu li{float:left;}

.section{
	background-color:#A5C9CA;
	height:100%;
	width:100%;
	position:fixed;
}

div{
  position:absolute;
  left:38%;
  top:7%;
}

h2{
	line-height:80px;
	font-size:30px;
	text-align:center;
}
#text1{
	font-size:15px;
	line-height:40px;
	/**text-align:center;**/
}
#texts{
	font-size:15px;
	line-height:40px;
	text-align:center;
}
form ul li{
	line-height:50px;
}
.word{
	height:40px;
	width:400px;
}
#click{
	height:40px;
	width:400px;
	background-color:#E7F6F2;
	color:black;
}
p a{
   	text-decoration:underline;
	color:black;
}
.footer{
	background-color:#2C3333;
	height:100px;
}
</style>
	</head>
	<body>
	<header>
			<h1>SITE</h1>
			<nav class="menu">
				<ul>
					<li><a href="#">서비스</a></li>
					<li><a href="login.php">로그인</a></li>
					<li><a href="index.php">회원가입</a></li>
					<li><a href="#">도움말</a></li>
				</ul>
			</nav>
		</header>
		<section class="section">
			<div>
				<h2> 회원가입</h2>
				<p id="text1">가입으로 서비스를 누리세요</p>
				<form action="database.php" method="POST">
					<ul>
						<li><input type="text" name="id" autofocus placeholder=" 아이디" maxlength="30" class="word"></li>
						<li><input type="password" name="pass" autofocus placeholder=" 비밀번호" maxlength="15" class="word"></li>
						<li><input type="text" name="email" autofocus placeholder=" 이메일" class="word"></li>
						<li><input type="password" name="password check" autofocus placeholder=" 비밀번호 확인" maxlength="15" class="word"></li>
						<li><input type="submit" value="가입하기" id="click"></li>
					</ul>
				</form>
				<hr size=2>
				<p id="texts">이미 가입했다면? <a href="login.php">로그인</a></p>
			</div>
			
	
		
		</section>
	</body>
</html>