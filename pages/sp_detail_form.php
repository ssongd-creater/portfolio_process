<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio Process</title>
  <!-- Favicon Link -->
  <link rel="shortcut icon" href="/schedule/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/schedule/images/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="/schedule/images/favicon.png">

  <!-- Font Awesome Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Google Font Link -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;700&family=Roboto:wght@300;400;500;700&display=swap"
    rel="stylesheet">

  <!-- Reset CSS Link -->
  <link rel="stylesheet" href="/schedule/css/reset.css">

  <!-- Plugin CSS Link -->
  <link rel="stylesheet" href="/schedule/lib/css/lightslider.css">
  <link rel="stylesheet" href="/schedule/lib/css/piechart.css">

  <!-- Main CSS Link -->
  <link rel="stylesheet" href="/schedule/css/style.css">
  <!-- Animation CSS Link -->
  <link rel="stylesheet" href="/schedule/css/animation.css">
  <!-- <Media Css Link -->
  <link rel="stylesheet" href="/schedule/css/media.css">

  <script defer>
  const hostname = window.location.href;
  console.log(hostname);
  if (hostname == 'http://localhost/schedule/') {
    window.location.replace('http://localhost/schedule/index.php?key=database');
  }
  </script>
</head>

<body>
  <div class="wrapper">
    <div class="dashboard">
      <!-- Main Dashboard Frame -->

      <?php
      include $_SERVER['DOCUMENT_ROOT']."/schedule/include/header.php";
      ?>

      <section class="graph-ui detail">

        <?php
        include $_SERVER['DOCUMENT_ROOT']."/schedule/include/total_pofol.php";
        ?>

        <div class="each-pofol" id="each-pofol">
          <div>
            <div class="each-graph" id="each-graph">

            </div>
          </div>
        </div>


        <div class="detail-board">
          <div class="board-btns">
            <a href="#">All</a>
            <a href="#">Database</a>
            <a href="#">API</a>
            <a href="#">Renewal</a>
            <a href="#">Planning</a>
          </div>

          <div class="board-table">
            <ul>
              <li class="board-title">
                <span>번호</span>
                <span>분류</span>
                <span>제목</span>
                <span>등록일</span>
                <span></span>
              </li>

              <?php
                include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php"; //db 접속정보 로드
                $sql = "SELECT * FROM sp_table ORDER BY SP_idx DESC LIMIT 5";
                $board_result = mysqli_query($dbConn, $sql);

                while($board_row = mysqli_fetch_array($board_result)){
                  $board_row_idx = $board_row['SP_idx'];
                  $board_row_cate = $board_row['SP_cate'];
                  $board_row_tit = $board_row['SP_tit'];
                  $board_row_reg = $board_row['SP_reg'];
              ?>

              <li class="board-contents">
                <span><?=$board_row_idx?></span>
                <span><?=$board_row_cate?></span>
                <span><a href="#"><?=$board_row_tit?></a></span>
                <span><?=$board_row_reg?></span>
                <span><a href="/schedule/php/sp_delete.php?del_idx=<?=$board_row_idx?>" class="del-btn">삭제</a></span>
              </li>

              <?php
                }
              ?>
            </ul>
          </div>
        </div>

      </section>

    </div>
    <!-- End of Main Dashboard Frame -->
  </div>


  </div>
  <!-- Jquery Framework Load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Plugins Load -->
  <script src="/schedule/lib/js/lightslider.js"></script>
  <script src="/schedule/lib/js/jquery.easypiechart.min.js"></script>
  <!-- Vanilla JS Code Load -->
  <script src="/schedule/js/index.js"></script>
  <!-- Jquery Code Load -->

  <script src=/schedule/js/modalAjax.js></script>
  <script src=/schedule/js/total_avg.js></script>
  <script src="/schedule/js/jquery.index.js"></script>


</body>

</html>