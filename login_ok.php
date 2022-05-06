<?php
    $user_id = $_POST['id'];
    $user_pw = $_POST['pass'];
    $conn = mysqli_connect('localhost', 'root', '123456', 'mem_db');
    $sql = "SELECT * FROM members where ID='$user_id' and pass='$user_pw'";
    $res = mysqli_fetch_array(mysqli_query($conn,$sql));
    if($res){
        session_start();
        $_SESSION['user_id'] = $res['login_id'];
        $_SESSION['user_name'] = $res['name'];
        echo "<script>alert('로그인에 성공했습니다!');";
        echo "window.location.replace('main.php');</script>";
        exit;
    }
    else{
       echo "<script>alert('아이디 혹은 비밀번호가 잘못되었습니다.');";
       echo "window.location.replace('login.php');</script>";
    }
?>