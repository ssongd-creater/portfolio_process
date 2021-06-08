<?php
  include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php"; //db 접속정보 로드
  $sql1 = "SELECT * FROM sp_table WHERE SP_cate = 'clone' ORDER BY SP_idx DESC LIMIT 5";
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
        $db_row_cate = $db_row['SP_cate'];
        $db_row_tit = $db_row['SP_tit'];
        $db_row_reg = $db_row['SP_reg'];
?>

<li><i class="fa fa-<?=$db_row_cate?>"></i>
  <div class="con-txt">
    <p><a href="#"><?=$db_row_tit?></a></p>
    <em><?=$db_row_reg?></em>
  </div>
</li>
<?php
  }
}
?>