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


</head>

<body>
  <div class="wrapper">
    <div class="dashboard">
      <!-- Main Dashboard Frame -->

      <?php
      include $_SERVER['DOCUMENT_ROOT']."/schedule/include/header.php";
      include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
      ?>

      <section class="graph-ui">
        <div class="intro">
          <div class="slide-box">
            <?php
              $sql1 = "SELECT * FROM sp_table WHERE SP_cate='database' ORDER BY SP_idx DESC LIMIT 1";
              $sl_result = mysqli_query($dbConn, $sql1);
              $sl_rewult_row = mysqli_fetch_array($sl_result);
              $sl_idx = $sl_rewult_row['SP_idx'];
              $sl_con = $sl_rewult_row['SP_con'];
              $sl_cate = $sl_rewult_row['SP_cate'];
            ?>
            <h2>Database Project Process</h2>
            <p><?=$sl_con?></p>
            <a href="/schedule/pages/sp_detail_view.php?pageNum=<?=$sl_idx?>">More Details</a>
            <i class="fa fa-<?=$sl_cate?>"></i>
          </div>

          <div class="slide-box">
            <?php
              $sql2 = "SELECT * FROM sp_table WHERE SP_cate='thermometer-half' ORDER BY SP_idx DESC LIMIT 1";
              $sl_result2 = mysqli_query($dbConn, $sql2);
              $sl_rewult_row2 = mysqli_fetch_array($sl_result2);
              $sl_idx2=$sl_rewult_row2['SP_idx'];
              $sl_con2=$sl_rewult_row2['SP_con'];
              $sl_cate2=$sl_rewult_row2['SP_cate'];
            ?>
            <h2>API Project Process</h2>
            <p><?=$sl_con2?></p>
            <a href="/schedule/pages/sp_detail_view.php?pageNum=<?=$sl_idx2?>">More Details</a>
            <i class="fa fa-<?=$sl_cate2?>"></i>
          </div>
          <div class="slide-box">
            <?php
              $sql3 = "SELECT * FROM sp_table WHERE SP_cate='clone' ORDER BY SP_idx DESC LIMIT 1";
              $sl_result3 = mysqli_query($dbConn, $sql3);
              $sl_rewult_row3 = mysqli_fetch_array($sl_result3);
              $sl_idx3=$sl_rewult_row3['SP_idx'];
              $sl_con3=$sl_rewult_row3['SP_con'];
              $sl_cate3=$sl_rewult_row3['SP_cate'];
            ?>
            <h2>Renewal Project Process</h2>
            <p><?=$sl_con3?></p>
            <a href="/schedule/pages/sp_detail_view.php?pageNum=<?=$sl_idx3?>">More Details</a>
            <i class="fa fa-<?=$sl_cate3?>"></i>
          </div>

          <div class="slide-box">
            <?php
              $sql4 = "SELECT * FROM sp_table WHERE SP_cate='bar-chart-o' ORDER BY SP_idx DESC LIMIT 1";
              $sl_result4 = mysqli_query($dbConn, $sql4);
              $sl_rewult_row4 = mysqli_fetch_array($sl_result4);
              $sl_idx4=$sl_rewult_row4['SP_idx'];
              $sl_con4=$sl_rewult_row4['SP_con'];
              $sl_cate4=$sl_rewult_row4['SP_cate'];
            ?>
            <h2>Planning Project Process</h2>
            <p><?=$sl_con4?></p>
            <a href="/schedule/pages/sp_detail_view.php?pageNum=<?=$sl_idx4?>">More Details</a>
            <i class="fa fa-<?=$sl_cate4?>"></i>
          </div>

        </div>
        <div class="each-pofol">
          <div>
            <div class="each-title">
              <h3>Each Portfolio Process Rate</h3>
            </div>
            <div class="each-graph">

            </div>
          </div>
        </div>
        <?php
        include $_SERVER['DOCUMENT_ROOT']."/schedule/include/total_pofol.php";
        ?>

      </section>
      <?php
        include $_SERVER['DOCUMENT_ROOT']."/schedule/include/table_ui.php";
      ?>
    </div>
    <!-- End of Main Dashboard Frame -->
  </div>

  <?php
    include $_SERVER['DOCUMENT_ROOT']."/schedule/include/modal.php";
  ?>

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