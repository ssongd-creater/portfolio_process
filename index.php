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
  <!-- <Media Css Link -->
  <link rel="stylesheet" href="/schedule/css/media.css">
  <!-- Animation CSS Link -->
  <link rel="stylesheet" href="/schedule/css/animation.css">
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
        <div class="total-pofol">
          <div class="total-chart">
            <span class="chart" data-percent="35">
              <span class="percent"></span>
              <!-- <h3>Total Process Rate</h3> -->
            </span>
          </div>

          <div class="total-txt">
            <h3>Total Process Rate</h3>
            <p>Your process rate is very low<br>Plz Hurry Up!!</p>
            <button>Update Rate</button>
          </div>
        </div>
      </section>

      <section class="table-ui">
        <div class="new-update">
          <div class="tit-box">
            <p>Recent Update</p>
            <a href="#">More</a>
          </div>
          <ul class="con-details">
            <li><i class="fa fa-database"></i>
              <div class="con-txt">
                <p><a href="#">데이터베이스 테이블 설계 완료</a></p>
                <em>2021-05-31</em>
              </div>
            </li>
            <li><i class="fa fa-database"></i>
              <div class="con-txt">
                <p><a href="#">데이터베이스 테이블 설계 완료</a></p>
                <em>2021-05-31</em>
              </div>
            </li>
            <li><i class="fa fa-database"></i>
              <div class="con-txt">
                <p><a href="#">데이터베이스 테이블 설계 완료</a></p>
                <em>2021-05-31</em>
              </div>
            </li>
          </ul>
        </div>

        <div class="each-contents">
          <div class="each-btns">
            <button class="active">Database</button>
            <button>API</button>
            <button>Renewal</button>
            <button>Planning</button>
          </div>
          <ul class="con-details">
            <li><i class="fa fa-database"></i>
              <div class="con-txt">
                <p><a href="#">데이터베이스 테이블 설계 완</a></p>
                <em>2021-05-31</em>
              </div>
            </li>
            <li><i class="fa fa-database"></i>
              <div class="con-txt">
                <p><a href="#">데이터베이스 테이블 설계 완</a></p>
                <em>2021-05-31</em>
              </div>
            </li>
            <li><i class="fa fa-database"></i>
              <div class="con-txt">
                <p><a href="#">데이터베이스 테이블 설계 완</a></p>
                <em>2021-05-31</em>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </div>
    <!-- End of Main Dashboard Frame -->
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

  <script>
  // startPie('.db_pofol', '#7c41f5', '#c1a5fa');
  // startPie('.api_pofol', '#ff9062', '#fcc5ae');
  // startPie('.renewal_pofol', '#3acbe8', '#a2dce8');
  // startPie('.planning_pofol', '#69c', '#ace');


  // //-----------------------------
  // var chart = window.chart = new EasyPieChart(document.querySelector('.api_pofol .chart'), {
  //   easing: 'easeOutElastic',
  //   delay: 3000,
  //   barColor: '#ff9062',
  //   trackColor: '#fcc5ae',
  //   scaleColor: false,
  //   lineWidth: 10,
  //   trackWidth: 8,
  //   lineCap: 'round',
  //   onStep: function (from, to, percent) {
  //     this.el.children[0].innerHTML = Math.round(percent);
  //   }
  // });
  // //-----------------------------
  //  var chart = window.chart = new EasyPieChart(document.querySelector('.renewal_pofol .chart'), {
  //   easing: 'easeOutElastic',
  //   delay: 3000,
  //   barColor: '#3acbe8',
  //   trackColor: '#a2dce8',
  //   scaleColor: false,
  //   lineWidth: 10,
  //   trackWidth: 8,
  //   lineCap: 'round',
  //   onStep: function (from, to, percent) {
  //     this.el.children[0].innerHTML = Math.round(percent);
  //   }
  // });
  // //-----------------------------
  // var chart = window.chart = new EasyPieChart(document.querySelector('.planning_pofol .chart'), {
  //   easing: 'easeOutElastic',
  //   delay: 3000,
  //   barColor: '#69c',
  //   trackColor: '#ace',
  //   scaleColor: false,
  //   lineWidth: 10,
  //   trackWidth: 8,
  //   lineCap: 'round',
  //   onStep: function (from, to, percent) {
  //     this.el.children[0].innerHTML = Math.round(percent);
  //   }
  // });
  </script>

</body>

</html>