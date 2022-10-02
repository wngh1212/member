
<html>

<head>
        <meta charset = 'utf-8'>
</head>
<style>
        *{
padding:0;
margin:0;
font-family:"Work Sans";
list-style:none;
}
        table.table2{
                border-collapse: separate;
                border-spacing: 1px;
                text-align: left;
                line-height: 1.5;
                border-top: 1px solid #ccc;
                margin : 20px 10px;
        }
        table.table2 tr {
                 width: 70px;
                 padding: 10px;
                font-weight: bold;
                vertical-align: middle;
                border-bottom: 1px solid #ccc;
        }
        table.table2 td {
                 width: 100px;
                 padding: 10px;
                 vertical-align: top;
                 border-bottom: 1px solid #ccc;
        }
        header{
	height:60px;
	background-color:#0925c2;
	
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
ul li{
        color:white;
	line-height:50px;
        list-style:none;
        list-style-type: none;
        float: left;
        margin-right:20px;
}

.menu{float:right;}
.menu a{text-decoration:none; 
		line-height:75px;
		color: white; 
		padding-right:20px; 
		display:block;}
</style>
<body>
        <header>
                <h1>SITE</h1>
                <nav class="menu">
			<ul>
			<li><a href="#">서비스</a></li>
			<li><a href="logout.php">로그아웃</a></li>
			<li><a href="index.php">회원가입</a></li>
			<li><a href="#">도움말</a></li>
			</ul>
		</nav>
</header>
        <form action="main_ok.php" method="post">
        <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
                <tr>
                <td height=20 align= center bgcolor=#0925c2><font color=white>불편사항</font></td>
                </tr>
                <tr>
                <td bgcolor=white>
                <table class = "table2">
                        <tr>
                        <td>작성자</td>
                        <td><input type = text name = name size=20> </td>
                        </tr>
 
                        <tr>
                        <td>제목</td>
                        <td><input type = text name = title size=60></td>
                        </tr>
 
                        <tr>
                        <td>내용</td>
                        <td><textarea name = text cols=85 rows=15></textarea></td>
                        </tr>
                        </table>
                        <center>
                        <input type = "submit" value="작성">
                        </center>
                </td>
                </tr>
        </table>
        </form>
</body>
</html>