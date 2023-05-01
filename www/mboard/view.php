<!-- 생략 -->
<?php
    if($table == "_qna") {
        $table_ripple = $table."_ripple";

        $sql = "select * from $table_ripple where parent = '$num' order by num";
        $ripple_result = mysqli_query($con, $sql);

        $count = 0;

        while ($row_ripple = mysqli_fetch_assoc($ripple_result)) {
            $ripple_num = $row_ripple["num"];
            $ripple_id = $row_ripple["id"];
            $ripple_name = $row_ripple["name"];
            $ripple_content = $row_ripple["content"];

            $ripple_content = str_replace("\n","<br>", $ripple_content);
            $ripple_content = str-replace("", "&nbsp;", $ripple_content);
            $ripple_date = $row_ripple["regist_day"];
?>
    <div class="ripple_title">
        <span class="col1"><?=$ripple_name?></span>
        <span class="col2"><?=$ripple_date?></span>
        <span class="col3">
            <?php
                if($userlevel == 1 or $userid == $ripple_id)
                    echo "<a href='delete_ripple.php?table=$table&num=$num&ripple_num=$ripple_num&page=$page'>삭제</a>";
                else
                    echo "<a href='#'>삭제</a>";
            ?>
        </span>
    </div>
    <div class="ripple_content">
        <?=$ripple_content?>
    </div>
            <?php
                $count++;
        }
            mysqli_close($con);
            ?>

    <!-- ripple write box -->
    <div class="ripple_box">
        <form name="ripple_form" method="post" action="insert_ripple.php?table=<?=$table?>&num=<?=$num?>&page=<?=$page?>">
            <div class="ripple_box1"><img src="../img/ripple_title.png"></div>
            <div class="ripple_box2"><textarea name="ripple_content"></textarea></div>
            <div class="ripple_box3"><a href="#"><img src="..img/ripple_button.png" onclick="ripple_check_input()"></a></div>
        </form>
    </div>
    <?php
    } //end of if($table=="_qna")
    ?>
    <!-- 생략 -->