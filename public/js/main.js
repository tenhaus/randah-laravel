$(document).init(function() {
  $('.header-container').backstretch('/images/header.jpg');
  $(".backstretch > img").css('opacity', .39);

  var container = document.querySelector('.recent-images');
  var msnry = new Masonry( container, {
    // options
    // columnWidth: 200,
    itemSelector: '.item',
    isFitWidth: true
  });
});
