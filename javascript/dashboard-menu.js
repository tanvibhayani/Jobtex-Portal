
!function(t) {
  "use strict";

  t("#side-menu").downMenu(),
  t("#left-menu-btn").on("click", function(e) {
      e.preventDefault();   
     
      if($("body").hasClass("sidebar-enable") == true) {
          $("body").removeClass("sidebar-enable");
          $.cookie("isButtonActive", "0");
         } else {
          $('body').addClass("sidebar-enable");
          $.cookie("isButtonActive", "1");
         } 
      1400 <= t(window).width() ? t("body").toggleClass("show-job") : t("body").removeClass("show-job") ;

      var width = $(window).width();
      if (width < 1400){
        $.cookie('isButtonActive', null)
      }

      //$(".sidebar-enable").find('.left-menu').removeClass("modal-menu--close");
  });

  if($.cookie("isButtonActive") == 1)
  {
      $("body").addClass("sidebar-enable show-job");
  } 
 
  t("#sidebar-menu a").each(function() {
      var e = window.location.href.split(/[?#]/)[0];
      this.href == e && (t(this).addClass("active"),
      t(this).parent().addClass("ff-active"),
      t(this).parent().parent().addClass("ff-show"),
      t(this).parent().parent().prev().addClass("ff-active"),
      t(this).parent().parent().parent().addClass("ff-active"),
      t(this).parent().parent().parent().parent().addClass("ff-show"),
      t(this).parent().parent().parent().parent().parent().addClass("ff-active"))
  });

  t(document).ready(function() {
      var e;
      0 < t("#sidebar-menu").length && 0 < t("#sidebar-menu .ff-active .active").length && (300 < (e = t("#sidebar-menu .ff-active .active").offset().top) && (e -= 300,
      t(".left-menu .simplebar-content-wrapper").animate({
          scrollTop: e
      }, "slow")))
  });

  

  $(function () {
    
  });

}(jQuery);