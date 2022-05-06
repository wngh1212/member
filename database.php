<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>가입완료</title>
  </head>
  <body>
    <?php
      $ID = $_POST[ 'id' ];
      $pass = $_POST[ 'pass' ];
      $Email = $_POST[ 'email' ];
        $conn = mysqli_connect( 'localhost', 'root', '123456', 'mem_db' );
        $sql = "INSERT INTO members (ID, pass,Email) VALUES( '".$ID."', '".$pass."', '".$Email."')";
      mysqli_query($conn,$sql);
    ?>
    <p>
      <a href="login.php">로그인하러가기</a>
     </p>
  </body>
</html>