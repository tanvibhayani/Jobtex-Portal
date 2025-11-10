// (function ($) {
(function ($) {
  var dropdown = function (id) {
    var obj = $(id + ".dropdown");
    var btn = obj.find(".btn-selector");
    var dd = obj.find("ul");
    var opt = dd.find("li");
    dd.hide();
    obj
      .on("mouseenter", function () {
        dd.show();
        dd.addClass("show");
        $(this).css("z-index", 1000);
      })
      .on("mouseleave", function () {
        dd.hide();
        $(this).css("z-index", "auto");
        dd.removeClass("show");
      });

    opt.on("click", function () {
      dd.hide();
      var txt = $(this).html();
      opt.removeClass("active");
      $(this).addClass("active");
      btn.html(txt);
    });
  };

  var dropdown2 = function (id) {
    var obj = $(id + ".dropdown");
    var btn = obj.find(".btn-selector");
    var dd = obj.find("ul");
    var opt = dd.find("li");
    dd.hide();
    obj
      .on("mouseenter", function () {
        dd.show();
        dd.addClass("show");
        $(this).css("z-index", 1000);
      })
      .on("mouseleave", function () {
        dd.hide();
        $(this).css("z-index", "auto");
        dd.removeClass("show");
      });

    opt.on("click", function () {
      dd.hide();
    });
  };

  $(function () {
    dropdown("#item_date");
    dropdown("#item_size");
    dropdown("#language");
    dropdown("#item_category");
    dropdown("#item_category2");
    dropdown("#item_apply");
    dropdown("#item_qualification");
    dropdown("#item_1");
    dropdown("#item_2");
    dropdown("#item_3");
    dropdown("#item_4");
    dropdown("#item_5");
    dropdown("#item_6");
    dropdown("#item_7");
    dropdown2("#items_1");
    dropdown2("#items_2");
    dropdown2("#items_3");
    dropdown2("#items_4");
    dropdown2("#items_5");
    dropdown2("#items_6");
  });
})(jQuery);
