<?php
    session_start();
    unset($_SESSION["userid"]);
    unset($_SESSION["username"]);
    unset($_SESSION["userlevel"]);

    echo "<script>
        location.href='../main/index.php';
    </script>";
//깃허브 커밋 테스트
?>