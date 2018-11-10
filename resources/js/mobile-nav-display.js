//switch menu type if window resize reaches 600px
$(window).resize(function() {
  if ($(this).width() < 600) {
    $('.nav-mob').show();
    $('.nav-des').hide();
  } else {
    $('.nav-mob').hide();
    $('.nav-des').show();
    }
});
//switch menu type if loads above/bellow 600px
$(document).ready(function() {
    if ($(this).width() < 600) {
      $('.nav-mob').show();
      $('.nav-des').hide();
    } else {
      $('.nav-mob').hide();
      $('.nav-des').show();
      }
});
