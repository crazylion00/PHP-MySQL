<?php
    session_start();

    if(isset($_SESSION["userid"]))
        $userid = $_SESSION["userid"];
    else {
        $userid="";
    }

    if(isset($_SESSION["username"]))
        $username = $_SESSION["username"];
    else {
        $username = "";
    }

    if(isset($_SESSIONp["userlevel"]))
        $userlevel = $_SESSION["userlevel"];
    else
        $userlevel = "";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP+MySQL 입문</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <header>
            <h3 class="logo">
                <a href="../main/index.php">PHP+MySQL 입문</a>
            </h3>
            <ul class="top_menu">
            <?php
                if(!$userid) {
                    echo "<li>홈페이지 오신 것을 환영합니다~~~</li>";
                } else {
                    $logged = $username."(Level:".$userlevel.")님 환영합니다.";
                    echo "<li>$logged</li>";
                }
            ?>
            </ul><!-- top_menu-->

            <ul class="main_menu">
                <?php
                    if(!$userid) {
                ?>
                    <li>
                        <a href="../member/index.php?type=form">회원가입</a>
                    </li>
                    <li>
                        <a href="../member/index.php?type=login_form">로그인</a>
                    </li>
                <?php
                    } else {
                ?>
                    <li>
                        <a href="../member/logout.php">로그아웃</a>                    
                    </li>
                    <li>
                        <a href="../member/index.php?type=modify_form">정보 수정</a>
                    </li>
                <?php
                    }
                ?>
                    <li>|</li>
                    <li>
                        <a href="../mboard/index.php?type=list&table=_notice">공지 게시판</a>
                    </li>
                    <li>
                        <a href="../mboard/index.php?type=list&table=_youtube">YOUTUBE동영상</a>
                    </li>
                    <li>
                        <a href="../mboard/index.php?type=list&table=_qna">묻고 답하기<a>
                    </li>
            </ul><!--main_manu-->
        </header>
    <!-- </body>
</html> -->