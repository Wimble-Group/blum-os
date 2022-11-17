$(document).ready(function () {
  $('.menu-trigger').click(function(e) {
    e.preventDefault();

    if ($('.menu-trigger').hasClass('active')) {
      $('.menu-trigger').removeClass('active');
      $('.menu').removeClass('active');
    } else {
      $('.menu-trigger').addClass('active');
      $('.menu').addClass('active');
    }
    
  });
  
  $(".open").click(function () {
    $(".menu").addClass('active');
  });

  if ($(window).width() > 480) {
    SmoothScroll({
      // Время скролла 400 = 0.4 секунды
      animationTime    : 800,
      // Размер шага в пикселях 
      stepSize         : 75,
  
      // Дополнительные настройки:
      
      // Ускорение 
      accelerationDelta : 70,  
      // Максимальное ускорение
      accelerationMax   : 2,   
  
      // Поддержка клавиатуры
      keyboardSupport   : true,  
      // Шаг скролла стрелками на клавиатуре в пикселях
      arrowScroll       : 50,
  
      // Pulse (less tweakable)
      // ratio of "tail" to "acceleration"
      pulseAlgorithm   : true,
      pulseScale       : 4,
      pulseNormalize   : 1,
  
      // Поддержка тачпада
      touchpadSupport   : true,
    })
  }
})