$(".book_2").hover(
  function() {
    $('.book_2').css('display', 'none');
    $('.book_4').css('display', 'inline');
  },
  function() {
    $('.book_2').css('display', 'inline');
    $('.book_4').css('display', 'none');
  }
);
$(".book_1").hover(
  function() {
    $('.book_1').css('display', 'none');
    $('.book_3').css('display', 'inline');
  },
  function() {
    $('.book_1').css('display', 'inline');
    $('.book_3').css('display', 'none');
  }
);
$(".openbtn").click(function () {
  $(this).toggleClass('active');
  $("#g-nav").toggleClass('panelactive');
});
$("#g-nav a").click(function () {
  $(".openbtn").removeClass('active');
  $("#g-nav").removeClass('panelactive');
});

$(".nav_menu_btn").click(function (event) {
  $(".child_menu").toggleClass('nav-open');
  event.stopPropagation(); // 親要素へのクリックイベントの伝播を停止
});

$(document).on('click', function(event) {
  if (!$(event.target).closest('.child_menu').length && $('.child_menu').hasClass('nav-open')) {
    $('.child_menu').removeClass('nav-open');
  }
});

function fadeAnime() {
  var offset = isMobileView() ? 20 : 50; // スマートフォンビューなら20px、それ以外なら50pxのオフセットを設定
  $('.about_wrap, .insta_wrap').each(function() {
    var elemPos = $(this).offset().top + offset;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass('fadeUp');
    } else {
      $(this).removeClass('fadeUp');
    }
  });
}

$(window).scroll(function() {
  fadeAnime();
});

$(window).on('load', function() {
  fadeAnime();
});

function isMobileView() {
  return $(window).width() <= 768;
}

document.addEventListener("DOMContentLoaded", function() {
  var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

  if(screenWidth <= 768){
    $('.slider_pc').css('display', 'none');
    $('.slider_sp').css('display', 'block');
  }else{
    $('.slider_sp').css('display', 'none');
    $('.slider_pc').css('display', 'block');
  }
});

$('.slider01').slick({
  fade:true,
  autoplay: true,
  autoplaySpeed: 3000,
  speed:1000,
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
});


$('.slider01').on('touchmove', function(event, slick, currentSlide, nextSlide){
  $('.slider01').slick('slickPlay');
});

$('.slider02').slick({
  arrows: false,
  autoplay: true,
  autoplaySpeed: 0,
  speed: 6900,
  infinite: true,
  pauseOnHover: false,
  pauseOnFocus: false,
  cssEase: 'linear',
  slidesToShow: 4,
  slidesToScroll: 1,
  
  responsive: [
    {
    breakpoint: 1280,
    settings: {
      slidesToShow: 3,
    }
  },
  {
    breakpoint: 650,
    settings: {
      slidesToShow: 1.5,
      speed: 3000,
    }
  }
]
});

var unit = 100,
  canvasList, 
  info = {}, 
  colorList;

function init() {
  info.seconds = 0;
  info.t = 0;
  canvasList = [];
  colorList = [];
  canvasList.push(document.getElementById("waveCanvas"));
  colorList.push(['#62511c', '#6d5e3e', '#57481d']);
	// 各キャンバスの初期化
for(var canvasIndex in canvasList) {
        var canvas = canvasList[canvasIndex];
        canvas.width = document.documentElement.clientWidth;
        canvas.height = 100;//波の高さ
        canvas.contextCache = canvas.getContext("2d");
    }
    // 共通の更新処理呼び出し
		update();
}

function update() {
		for(var canvasIndex in canvasList) {
        var canvas = canvasList[canvasIndex];
        draw(canvas, colorList[canvasIndex]);
    }
    // 共通の描画情報の更新
    info.seconds = info.seconds + .014;
    info.t = info.seconds*Math.PI;
    // 自身の再起呼び出し
    setTimeout(update, 35);
}


function draw(canvas, color) {
    var context = canvas.contextCache;
    context.clearRect(0, 0, canvas.width, canvas.height);

    drawWave(canvas, color[0], 0.5, 5, 0);
    drawWave(canvas, color[1], 0.4, 4, 250);
    drawWave(canvas, color[2], 0.3, 3, 100);
}

function drawWave(canvas, color, alpha, zoom, delay) {
		var context = canvas.contextCache;
    context.fillStyle = color;//塗りの色
    context.globalAlpha = alpha;
    context.beginPath(); 
    drawSine(canvas, info.t / 0.5, zoom, delay);
    context.lineTo(canvas.width + 10, canvas.height); 
    context.lineTo(0, canvas.height);
    context.closePath() 
    context.fill(); 
}

function drawSine(canvas, t, zoom, delay) {
    var xAxis = Math.floor(canvas.height/3);
    var yAxis = 0;
    var context = canvas.contextCache;
   
    var x = t; 
    var y = Math.sin(x)/zoom;
    context.moveTo(yAxis, unit*y+xAxis); 

    for (i = yAxis; i <= canvas.width + 10; i += 10) {
        x = t+(-yAxis+i)/unit/zoom;
        y = Math.sin(x - delay)/3;
        context.lineTo(i, unit*y+xAxis);
    }
}

init();