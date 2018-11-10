//hide/show collapse items if window resizes to above/bellow 980px
$(window).resize(function() {
  if ($(this).width() < 980) {
    $('.filter-hide-show').hide();
    $('.login-hide-show').hide();
    $('.signup-hide-show').hide();
  } else {
    $('.filter-hide-show').show();
    $('.login-hide-show').show();
    $('.signup-hide-show').show();
    }
});
//hide/show collapse items if window loads above/bellow 980px
$(document).ready(function() {
  if ($(this).width() < 980) {
    $('.filter-hide-show').hide();
    $('.login-hide-show').hide();
    $('.signup-hide-show').hide();
  } else {
    $('.filter-hide-show').show();
    $('.login-hide-show').show();
    $('.signup-hide-show').show();
    }
});
//User Control and default hide/show
$(document).ready(function(){

  $(".collapse-close").hide();
  //newsfeed post filter menu control
  $(".filter-open").click(function(){
    $(".filter-hide-show").slideDown(300);
    $(".filter-open").hide();
    $(".filter-close").show();
  });

  $(".filter-close").click(function(){
    $(".filter-hide-show").slideUp(300);
    $(".filter-open").show();
    $(".filter-close").hide();
  });

  //profile sign up filter menu control
  $(".signup-open").click(function(){
    $(".signup-hide-show").slideDown(300);
    $(".signup-open").hide();
    $(".signup-close").show();
  });

  $(".signup-close").click(function(){
    $(".signup-hide-show").slideUp(300);
    $(".signup-open").show();
    $(".signup-close").hide();
  });

  //newsfeed post filter menu control
  $(".login-open").click(function(){
    $(".login-hide-show").slideDown(300);
    $(".login-open").hide();
    $(".login-close").show();
  });

  $(".login-close").click(function(){
    $(".login-hide-show").slideUp(300);
    $(".login-open").show();
    $(".login-close").hide();
  });
});
