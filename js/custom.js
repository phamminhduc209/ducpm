$(document).ready(function(){
  // click a menu show menu child
  //$('.nav-menu a.acount-info').click(function(){
    //$(".nav-child").hide('100');
  //});
  //$('.nav-menu a.acount-info').click(function(){
    //$(".nav-child").show('100');
  //});
  
  // click a menu replace icon fa-angle-right
  $('.nav-menu a.acount-info').click(function() {
    if($('.nav-menu a.acount-info i').hasClass('fa-angle-right')) {       
        $('.nav-menu a.acount-info i').removeClass('fa-angle-right').addClass('fa-angle-down');
    }
    else{
        $('.nav-menu a.acount-info i').removeClass('fa-angle-down').addClass('fa-angle-right');
    }
  });
  
  
  var first = true;
  // Hide menu once we know its width
  $('.nav-menu a.acount-info').click(function() {
      var $menu = $('.nav-child');
      if ($menu.is(':visible')) {
        // Slide away
        $menu.animate({left: -($menu.outerWidth() + 10)}, function() {
            $menu.hide();
        });
      }
      else {
        // Slide in
        $menu.show().css("left", -($menu.outerWidth() + 10)).animate({left: 0});
      }
  });
  
});