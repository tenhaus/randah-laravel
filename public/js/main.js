$(document).ready(function() {
  $('.header-container').backstretch('/images/header.jpg');
  $(".backstretch > img").css('opacity', .39);

  $(".image-grid").tilesGallery({
    'height': 16000,
    'captionAnimationDuration': 0.5,
    'captionAnimationType': 'fade'
  });

});
