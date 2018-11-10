//start script
$(document).ready(function(){

  $(".fa-menu-close").hide();

  $(".fa-menu-open").click( function(){
    $(".mobile-nav-menu").animate({"top": "0"});
    $(".fa-menu-open").hide();
    $(".fa-menu-close").show();
  });

  $(".fa-menu-close").click( function(){
    $(".mobile-nav-menu").animate({"top": "-100vh"});
    $(".fa-menu-open").show();
    $(".fa-menu-close").hide();
  });
});
