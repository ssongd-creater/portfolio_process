<?php
  include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php"; //db 접속정보 로드
  $sql1 = "SELECT * FROM sp_table WHERE SP_cate = 'bar-chart-o' ORDER BY SP_idx DESC";
  $db_result = mysqli_query($dbConn, $sql1);
  $db_num = mysqli_num_rows($db_result);

  if($db_num == 0){
?>
<li>
  <p>입력된 일정이 없습니다.</p>
</li>
<?php
  } else {
    while($db_row = mysqli_fetch_array($db_result)){
        $db_row_idx = $db_row['SP_idx'];
        $db_row_cate = $db_row['SP_cate'];
        $db_row_tit = $db_row['SP_tit'];
        $db_row_reg = $db_row['SP_reg'];
?>

<li class="board-contents">
  <span><?=$db_row_idx?></span>
  <span><?=$db_row_cate?></span>
  <span><a href="#"><?=$db_row_tit?></a></span>
  <span><?=$db_row_reg?></span>
  <span><a href="/schedule/php/sp_delete.php?del_idx=<?=$db_row_idx?>" class="del-btn">삭제</a></span>
</li>
<?php
  }
}
?>