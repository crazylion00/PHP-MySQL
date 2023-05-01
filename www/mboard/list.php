<!-- 생략 -->
<li>
    <span class="col1"><?=$number?></span>
        <?php
            $view_url = "index.php?type=view&table=$table&num=$num&page=$page";
        ?>
    <span class="col2">
        <a href="<?=$view_url?>">
            <?php
                if($table == "_youtube"&&$file_name)
                    echo "<img src='./data/".$file_copied."'width='150'>".$subject;
                else
                    echo $subject;
            ?>
        </a>
            <?php
                if($table == "_qna") {
                    $table_ripple = $table."_ripple";

                    $sql = "select * from $table_ripple where parent=$num";
                    $result2 = mysqli_query($con, $sql);
                    $num_ripple = mysqli_num_rows($result2);

                    if($num_ripple)
                        echo "[$num_ripple]";
                }
            ?>        
    </span>
    <span class="col3"><?=$name?></span>
    <span class="col4"><?=$file_image?></span>
    <span class="col5"><?=$regist_day?></span>
</li>
<!-- 생략 -->