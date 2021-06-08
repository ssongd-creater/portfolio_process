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

      <section class="graph-ui">
        <div class="intro">
          <div class="slide-box">
            <h2>Database Project Process</h2>
            <p>데이터베이스 테이블 설계 완료<br>테이블 UI 디자인 완료</p>
            <a href="#">More Details</a>
            <i class="fa fa-database"></i>
          </div>
          <div class="slide-box">
            <h2>Database Project Process</h2>
            <p>API 테이블 설계 완료<br>테이블 UI 디자인 완료</p>
            <a href="#">More Details</a>
            <i class="fa fa-database"></i>
          </div>
          <div class="slide-box">
            <h2>Database Project Process</h2>
            <p>리뉴얼 테이블 설계 완료<br>테이블 UI 디자인 완료</p>
            <a href="#">More Details</a>
            <i class="fa fa-database"></i>
          </div>
          <div class="slide-box">
            <h2>Database Project Process</h2>
            <p>기획 테이블 테이블 설계 완료<br>테이블 UI 디자인 완료</p>
            <a href="#">More Details</a>
            <i class="fa fa-database"></i>
          </div>

        </div>
        <div class="each-pofol">
          <div>
            <div class="each-title">
              <h3>Each Portfolio Process Rate</h3>
            </div>
            <div class="each-graph">
              <div class="db_pofol">
                <span class="chart" data-percent="86">
                  <span class="percent"></span>
                </span>
                <b>DB Project</b>
                <i class="fa fa-database"></i>
              </div>
              <div class="api_pofol">
                <span class="chart" data-percent="56">
                  <span class="percent"></span>
                </span>
                <b>API Project</b>
                <i class="fa fa-thermometer-half"></i>
              </div>
              <div class="renewal_pofol">
                <span class="chart" data-percent="74">
                  <span class="percent"></span>
                </span>
                <b>Renewal Project</b>
                <i class="fa fa-clone"></i>
              </div>
              <div class="planning_pofol">
                <span class="chart" data-percent="35">
                  <span class="percent"></span>
                </span>
                <b>Planning Project</b>
                <i class="fa fa-bar-chart-o"></i>
              </div>
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

  <!-- 2.모달 박스 UI 제작 => style.css 581번줄-->
  <!-- The Modal -->
  <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <!-- <span class="close" id="times">&times;</span>
      <p>Some text in the Modal..</p> -->
      <form action="/schedule/php/sp_rate_insert.php" class="rate-form" name="rate_form">
        <p>
          <label for="db_pro">DB Project</label>
          <input type="text" id="db_pro" value="78" name="db_pro">
        </p>
        <p>
          <label for="api_pro">API Project</label>
          <input type="text" id="api_pro" value="60" name="api_pro">
        </p>
        <p>
          <label for="ren_pro">Renewal Project</label>
          <input type="text" id="ren_pro" value="55" name="ren_pro">
        </p>
        <p>
          <label for="pla_pro">Planning Project</label>
          <input type="text" id="pla_pro" value="90" name="pla_pro">
        </p>

      </form>
      <div class="updateBtnBox">
        <button type="button" id="updateBtn">Update Rate</button>
      </div>
      <script>
      const updateBtn = document.querySelector('#updateBtn');
      updateBtn.onclick = function() {
        document.rate_form.submit();
      }
      </script>
    </div>

  </div>
  <!-- Jquery Framework Load -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Plugins Load -->
  <script src="/schedule/lib/js/lightslider.js"></script>
  <script src="/schedule/lib/js/easypiechart.js"></script>
  <!-- Vanilla JS Code Load -->
  <script src="/schedule/js/index.js"></script>
  <!-- Jquery Code Load -->
  <script src="/schedule/js/jquery.index.js"></script>

</body>

</html>