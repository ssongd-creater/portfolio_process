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
      const winWidth = window.innerWidth;

      if (winWidth <= 950) {
        lWidth = 5;
        tWidth = 4;
      } else {
        lWidth = 10;
        tWidth = 8;
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
        size:200,
        onStep: function(from, to, percent) {
        this.el.children[0].innerHTML = Math.round(percent);
			}
		}); 
        
      const poData = [
        { poKind: '.db_pofol', bColor: '#7c41f5', tColor: '#c1a5fa' },
        { poKind: '.api_pofol', bColor: '#ff9062', tColor: '#fcc5ae' },
        { poKind: '.renewal_pofol', bColor: '#3acbe8', tColor: '#a2dce8' },
        { poKind: '.planning_pofol', bColor: '#69c', tColor: '#ace' },
        //{ poKind: '.total-chart', bColor: '#f28888', tColor: '#edc0c0' }
      ];

      function startPie(){
        poData.map(value =>{

         var chart = window.chart = new EasyPieChart(document.querySelector(value.poKind + ' .chart'), {
          easing: 'easeOutElastic',
          delay: 3000,
          barColor: value.bColor,
          trackColor: value.tColor,
          scaleColor: false,
          lineWidth: lWidth,
          trackWidth: tWidth,
          lineCap: 'round',
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