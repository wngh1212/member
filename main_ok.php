<?php
    $text = $_POST[ 'text' ];
    $name = $_POST[ 'name' ];
      $conn = mysqli_connect( 'localhost', 'root', '123456', 'mem_db' );
      $sql = "INSERT INTO com (text,name) VALUES( '".$text."', '".$name."')";
    mysqli_query($conn,$sql);
    ?>
<?php echo "<script>alert('글작성 되셨습니다!');";
        echo "window.location.replace('main.php');</script>";
        ?>
<?php
mysqli_close($conn);
?>