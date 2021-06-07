//Cutting Contents Text
const conTxt = document.querySelectorAll('.con-txt p a');
conTxt.forEach(element => {
  //console.log(element.textContent.slice(0,10) + "...");
  const cutTxt = element.textContent.slice(0, 10) + "...";
  element.textContent = cutTxt;
});

//Mobile Menu Activate
const mobileMenu = document.querySelector('.mobile-menu');

mobileMenu.onclick = () => {
  mobileMenu.classList.toggle('active');
}

$(document).ready(function () {
    //Lightslider Plugin Code
    $(".intro").lightSlider({
      item:1,
      pager:false,
      //슬라이드 밑에 .... 으로 된 선택자를 없애주는 옵션
      loop:true,
      slideMargin:0,
      speed: 400, //ms'
      auto: true,
      pause: 3500,
      mode:'fade',
      adaptiveHeight:true,
    });
  });
    //Pie Chart Rendering Code
    document.addEventListener('DOMContentLoaded', function () {
      let lWidth = 10;
      let tWidth = 8;
      

      let pieSize = 200;
      let clearSet;
      const winWidth = window.innerWidth;

      if (winWidth <= 1280 && winWidth > 950) {
        pieSize = 150;
      } else if(winWidth <= 950 && winWidth >= 400){
        pieSize = 170;
      }else if(winWidth <= 400){
        pieSize = 140;
      } else {
        pieSize = 200;
        }

      var chart = window.chart = new EasyPieChart(document.querySelector('.total-chart .chart'), {
        easing: 'easeOutElastic',
        delay: 3000,
        barColor: '#f28888',
        trackColor: '#edc0c0',
        scaleColor: false,
        lineWidth: 18,
        trackWidth: 18,
        lineCap: 'round',
        size:pieSize,
        onStep: function(from, to, percent) {
        this.el.children[0].innerHTML = Math.round(percent);
        }
      });
      
      window.addEventListener('resize', function () {
        const winWidth = window.innerWidth;

        if (winWidth <= 1280) {
        pieSize = 180;
      } else {
        pieSize = 200;
        }

        if (winWidth <= 1280 && winWidth > 950) {
        pieSize = 150;
      } else if(winWidth <= 950 && winWidth >= 400){
        pieSize = 170;
      }else if(winWidth <= 400){
        pieSize = 140;
      } else {
        pieSize = 200;
        }
        
        clearTimeout(clearSet);
        clearSet = setTimeout(function () {
          document.querySelector('.total-chart .chart canvas').remove();
          var chart = window.chart = new EasyPieChart(document.querySelector('.total-chart .chart'), {
            easing: 'easeOutElastic',
            delay: 3000,
            barColor: '#f28888',
            trackColor: '#edc0c0',
            scaleColor: false,
            lineWidth: 18,
            trackWidth: 18,
            lineCap: 'round',
            size: pieSize,
            onStep: function(from, to, percent) {
            this.el.children[0].innerHTML = Math.round(percent);
          }
      });
    });
    }, 150);

        
      //---each chart
      if (winWidth <= 950) {
        lWidth = 5;
        tWidth = 4;
      } else {
        lWidth = 10;
        tWidth = 8;
      }

      if (winWidth <= 1280) {
        eachSize = 90;
      } else {
        eachSize = 110;
      }
      
      const poData = [
        { poKind: '.db_pofol', bColor: '#7c41f5', tColor: '#c1a5fa' },
        { poKind: '.api_pofol', bColor: '#ff9062', tColor: '#fcc5ae' },
        { poKind: '.renewal_pofol', bColor: '#3acbe8', tColor: '#a2dce8' },
        { poKind: '.planning_pofol', bColor: '#69c', tColor: '#ace' },
        //{ poKind: '.total-chart', bColor: '#f28888', tColor: '#edc0c0' }
      ];

      function startPie(){
        poData.map(value => {

        var chart = window.chart = new EasyPieChart(document.querySelector(value.poKind + ' .chart'), {
          easing: 'easeOutElastic',
          delay: 3000,
          barColor: value.bColor,
          trackColor: value.tColor,
          scaleColor: false,
          lineWidth: lWidth,
          trackWidth: tWidth,
          lineCap: 'round',
          size:eachSize,
          onStep: function (from, to, percent) {
          this.el.children[0].innerHTML = Math.round(percent);
          }
        });
      });
    }

  startPie();
});

const abc = window.innerHeight;
console.log(abc);