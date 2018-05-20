<?php
    include 'connect_db.php';

    if(isset($_POST['submit1'])){
        $sql = "TRUNCATE table comment_1";
        mysqli_query($objCon, $sql);
        header("Location: comment.php");
        exit();
    }

?>




