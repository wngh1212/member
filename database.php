<!doctype html>
<html lang="ko">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>가입완료</title>
    <style>
      h1{
        text-align:center;
      }
      a{
        font-style:none;
        text-align:center;
      }
    </style>
  </head>
  <body>
    <?php
      $ID = $_POST[ 'id' ];
      $pass = $_POST[ 'pass' ];
      $Email = $_POST[ 'email' ];
        $conn = mysqli_connect( 'localhost', 'root', '123456', 'mem_db' );
        $sql = "INSERT INTO members (ID, pass,Email) VALUES( '".$ID."', '".$pass."', '".$Email."' )";
     // mysqli_query($conn,$sql);
    ?>
    <p>

      <h1>회원가입이 완료되셨습니다.</h1>
      <a href="login.php">로그인하러가기</a>
     </p>
  </body>
</html>