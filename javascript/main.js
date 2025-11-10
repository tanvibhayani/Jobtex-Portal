/*
 * Header Fixed
 * scrollEffect
 * show search
 * Categories slideToggle
 * accordion
 * parallax
 * goTop
 * counter
 * filter
 * popUpLightBox
 * gallery
 * flatProgressBar
 * load more
 * load more2
 * fasterPreview
 * UpImg
 * delete_img
 * tfTabs
 * btn nav menu
 * btnCategory
 * dropOptionForm
 * progressProduct
 * Modal_Right
 * rangeSlider
 * btnQuantity
 * stickSidebar
 * Switcher
 * preload
 */

(function ($) {
  "use strict";

  var isMobile = {
    Android: function () {
      return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function () {
      return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function () {
      return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function () {
      return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function () {
      return navigator.userAgent.match(/IEMobile/i);
    },
    any: function () {
      return (
        isMobile.Android() ||
        isMobile.BlackBerry() ||
        isMobile.iOS() ||
        isMobile.Opera() ||
        isMobile.Windows()
      );
    },
  };

  /* Header Fixed
  ------------------------------------------------------------------------------------- */
  var headerFixed = function () {
    if ($("header").hasClass("header-fixed")) {
      var nav = $("#header");

      if (nav.length) {
        var offsetTop = nav.offset().top,
          headerHeight = nav.height(),
          injectSpace = $("<div>", {
            height: headerHeight,
          });
        injectSpace.hide();

        if ($("header").hasClass("style-absolute")) {
          injectSpace.hide();
        } else {
          injectSpace.insertAfter(nav);
        }

        $(window).on("load scroll", function () {
          if ($(window).scrollTop() > offsetTop + headerHeight) {
            nav.addClass("is-fixed");
            injectSpace.show();
            $("#trans-logo").attr("src", "images/logo.png");
          } else {
            nav.removeClass("is-fixed");
            injectSpace.hide();
            $("#trans-logo").attr("src", "images/logo-white.png");
          }

          if ($(window).scrollTop() > 150) {
            nav.addClass("is-small");
          } else {
            nav.removeClass("is-small");
          }
        });
      }
    }
  };
  /* scrollEffect
  ------------------------------------------------------------------------------------- */
  var scrollEffect = function () {
    $(window).on("load scroll", function () {
      var headerHeight = $("#header").height();
      if ($(window).scrollTop() > 300) {
        $(".form-meta2").addClass("is-fixed");
      } else {
        $(".form-meta2").removeClass("is-fixed");
      }
      var heightside3 = $(".wrapper-author-page-title").height() + 80;
      var heightside = $(".wd-job-author2").height() + 80;
      var heightside2 = $(".wd-job-author").height() + 80;
      $(".cv-form-details.job-sg").css("top", heightside);
      $(".cv-form-details.job-sg").css("top", heightside2);
      $(".cv-form-details.job-sg").css("top", heightside3);
      if ($("#header").hasClass("header-fixed")) {
        $(".fixed-space").css("top", headerHeight);
        $(".cv-form-details.job-sg").css("top", heightside2 + headerHeight);
        $(".cv-form-details.job-sg").css("top", heightside + headerHeight);
        $(".cv-form-details.po-sticky.st2").css("top", headerHeight + 10);
        $(".cv-form-details.po-sticky.stc2").css("top", headerHeight + 10);
      }
    });
  };
  /* show search
  ------------------------------------------------------------------------------------- */
  var showsearch = function () {
    $(".icon-show-search").click(function () {
      $(".top-search").slideToggle("show");
    });
  };
  /* categories slideToggle
  ------------------------------------------------------------------------------------- */
  $(".categories_title").on("click", function () {
    $(this).toggleClass("active");
    $(".categories_menu_toggle").slideToggle("medium");
  });
  $(".categories_title2").on("click", function () {
    $(this).toggleClass("active");
    $(".categories_menu_toggle22").slideToggle("medium");
  });
  /* accordion
  ------------------------------------------------------------------------------------- */
  var accordion = function () {
    var args = { duration: 600 };
    $(".flat-toggle .toggle-title.active").siblings(".toggle-content").show();
    $(".flat-toggle.enable .toggle-title").on("click", function () {
      $(this).closest(".flat-toggle").find(".toggle-content").slideToggle(args);
      $(this).toggleClass("active");
    });

    $(".flat-accordion .toggle-title").on("click", function () {
      if (!$(this).is(".active")) {
        $(this)
          .closest(".flat-accordion")
          .find(".toggle-title.active")
          .toggleClass("active")
          .next()
          .slideToggle(args);
        $(this).toggleClass("active");
        $(this).next().slideToggle(args);
      } else {
        $(this).toggleClass("active");
        $(this).next().slideToggle(args);
      }
    });

    $(".flat-accordion .flat-toggle").on("click", function () {
      if (!$(this).is(".active")) {
        $(this).find(".flat-toggle.active").toggleClass("active").next();
        $(this).toggleClass("active");
      } else {
        $(this).toggleClass("active");
      }
    });
  };
  /* parallax
  ------------------------------------------------------------------------------------- */
  var parallax = function () {
    if ($(".parallax").length > 0) {
      if ($().parallax && isMobile.any() == null) {
        $(".parallax").parallax("50%", -0.5);
      }
    }
  };
  /* goTop
  ------------------------------------------------------------------------------------- */
  var goTop = function () {
    $(window).scroll(function () {
      if ($(window).scrollTop() > 500) {
        $("#scroll-top").addClass("show");
      } else {
        $("#scroll-top").removeClass("show");
      }
    });

    $("#scroll-top").on("click", function (e) {
      e.preventDefault();
      $("html, body").animate({ scrollTop: 0 }, 1000);
    });
  };
  /* counter
  ------------------------------------------------------------------------------------- */
  var counter = function () {
    if ($(".wrap-counter").length > 0) {
      var a = 0;
      $(window).scroll(function () {
        var oTop = $(".wrap-counter").offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
          if ($().countTo) {
            $(".wrap-counter")
              .find(".counter-number")
              .each(function () {
                var to = $(this).data("to"),
                  speed = $(this).data("speed"),
                  formatter = $(this).data("formatter");
                $(this).countTo({
                  to: to,
                  speed: speed,
                  formatter: formatter,
                });
              });
          }
          a = 1;
        }
      });
    }
  };
  /* filter
  ------------------------------------------------------------------------------------- */
  var filter = function () {
    if ($("div").hasClass("widget-filter-isotope")) {
      var $grid = $(".grid").isotope({
        itemSelector: ".element-item",
        layoutMode: "fitRows",
      });

      $(".filters-button-group").on("click", "button", function () {
        var filterValue = $(this).attr("data-filter");
        $grid.isotope({ filter: filterValue });
      });

      $(".button-group").each(function (i, buttonGroup) {
        var $buttonGroup = $(buttonGroup);
        $buttonGroup.on("click", "button", function () {
          $buttonGroup.find(".is-checked").removeClass("is-checked");
          $(this).addClass("is-checked");
        });
      });
    }
  };
  /* popUpLightBox
  ------------------------------------------------------------------------------------- */
  var popUpLightBox = function () {
    if ($(".lightbox-image").length) {
      $(".lightbox-image").magnificPopup({
        disableOn: 700,
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 160,
        preloader: false,

        fixedContentPos: false,
      });
    }
    if ($(".lightbox-gallery").length) {
      $(".lightbox-gallery").magnificPopup({
        type: "image",
        zoom: {
          enabled: true,

          duration: 300,
          easing: "ease-in-out",
          opener: function (openerElement) {
            return openerElement.is("img")
              ? openerElement
              : openerElement.find("img");
          },
        },
        gallery: {
          enabled: true,
        },
      });
    }
  };
  /* gallery
  ------------------------------------------------------------------------------------- */
  var gallery = function () {
    if ($("div").hasClass("widget-dash-video")) {
      var slider = new Swiper(".gallery-slide", {
        slidesPerView: 1,
        centeredSlides: true,
        loop: true,
        loopedSlides: 3,
        navigation: {
          clickable: true,
          nextEl: ".swiper-button-next3",
          prevEl: ".swiper-button-prev3",
        },
      });

      var thumbs = new Swiper(".gallery-thumb", {
        slidesPerView: "auto",
        spaceBetween: 17,
        loop: true,
        slideToClickedSlide: true,
        slidesPerView: 3,
        breakpoints: {
          200: {
            slidesPerView: 2,
            spaceBetween: 17,
          },
          500: {
            slidesPerView: 2,
            spaceBetween: 17,
          },
          700: {
            slidesPerView: 3,
            spaceBetween: 17,
          },
        },
      });
      slider.controller.control = thumbs;
      thumbs.controller.control = slider;
    }
  };
  /* flatProgressBar
  ------------------------------------------------------------------------------------- */
  var flatProgressBar = function () {
    if ($(".chart-box").length > 0) {
      $(".chart-box").appear(
        function () {
          var bar = $(this).find(".chart").data("barcolor"),
            track = $(this).find(".chart").data("trackcolor"),
            size = $(this).find(".chart").data("size"),
            withh = $(this).find(".chart").data("withh"),
            text = $(this).find(".chart").data("text");
          $(this).find(".chart .text").append(text);
          $(".chart").easyPieChart({
            easing: "easeOut",
            lineWidth: withh,
            size: size,
            scaleColor: false,
            barColor: bar,
            trackColor: track,
            animate: 5000,
            onStep: function (from, to, percent) {
              $(this.el).find(".percent").text(Math.round(percent));
            },
          });
        },
        {
          offset: 400,
        }
      );
    }
  };
  /* loadmore
  ------------------------------------------------------------------------------------- */
  var loadmore = function () {
    $(".client-review .client-item").slice(0, 4).show();
    $(".client-review2 .client-item2").slice(0, 4).show();
    $(".load-btn").on("click", function (e) {
      e.preventDefault();
      $(".client-review .client-item:hidden").slice(0, 4).slideDown();
      $(".client-review2 .client-item2:hidden").slice(0, 4).slideDown();
      var action1 = $(".client-review .client-item:hidden");
      var action2 = $(".client-review2 .client-item2:hidden");
      if (action1.length == 0 || action2.length == 0) {
        $(this).fadeOut("slow");
      }
    });
  };
  /* loadmore2
  ------------------------------------------------------------------------------------- */
  var loadmore2 = function () {
    $(".fl-item").slice(0, 0).show();
    $(".fl-item2").slice(0, 0).show();

    $(".loadmore2").on("click", function (e) {
      e.preventDefault();

      $(".fl-item:hidden").slice(0, 1).slideDown();
      $(".fl-item2:hidden").slice(0, 1).slideDown();
      if ($(".fl-item:hidden").length == 0) {
        $(".loadmore2").hide();
      }
      if ($(".fl-item2:hidden").length == 0) {
        $("#loadmore2").hide();
      }
    });
  };

  $("#profileimg").click(function (e) {
    $("#tf-upload-img").click();
  });
  /* fasterPreview
  ------------------------------------------------------------------------------------- */
  function fasterPreview(uploader) {
    if (uploader.files && uploader.files[0]) {
      $("#profileimg").attr(
        "src",
        window.URL.createObjectURL(uploader.files[0])
      );
    }
  }
  $("#tf-upload-img").change(function () {
    fasterPreview(this);
  });

  /* UpImg
  ------------------------------------------------------------------------------------- */
  var UpImg = function () {
    $("#profileimg2").click(function (e) {
      $("#tf-upload-img2").click();
    });

    function fasterPreview(uploader) {
      if (uploader.files && uploader.files[0]) {
        $("#profileimg2").attr(
          "src",
          window.URL.createObjectURL(uploader.files[0])
        );
      }
    }

    $("#tf-upload-img2").change(function () {
      fasterPreview(this);
    });
  };
  /* delete_img
  ------------------------------------------------------------------------------------- */
  var delete_img = function (e) {
    $(".remove-file").on("click", function (e) {
      e.preventDefault();
      var $this = $(this);
      $this.closest(".file-delete").remove();
    });
  };
  /* tfTabs
  ------------------------------------------------------------------------------------- */
  var tfTabs = function () {
    $(".tf-tab").each(function () {
      $(this).find(".content-tab").children().hide();
      $(this).find(".content-tab").children().first().show();
      $(this)
        .find(".menu-tab")
        .children("div.user-tag, .btn-display, .ct-tab")
        .on("click", function (e) {
          e.preventDefault();
          var liActive = $(this).index();
          var contentActive = $(this)
            .siblings()
            .removeClass("active")
            .parents(".tf-tab")
            .find(".content-tab")
            .children()
            .eq(liActive);
          contentActive.addClass("active").fadeIn("slow");
          contentActive.siblings().removeClass("active");
          $(this)
            .addClass("active")
            .parents(".tf-tab")
            .find(".content-tab")
            .children()
            .eq(liActive)
            .siblings()
            .hide();
        });
    });
  };
  /* btn nav menu
  ------------------------------------------------------------------------------------- */
  var btnmenu = function () {
    $(document).on("click", ".menu-item-has-children-mobile", function () {
      var args = { duration: 600 };
      if ($(this).hasClass("active")) {
        $(this).children(".sub-menu-mobile").slideUp(args);
        $(this).removeClass("active");
      } else {
        $(".sub-menu-mobile").slideUp(args);
        $(this).children(".sub-menu-mobile").slideDown(args);
        $(".menu-item-has-children-mobile").removeClass("active");
        $(this).addClass("active");
      }
    });
  };
  /* btnCategory
  ------------------------------------------------------------------------------------- */
  var btnCategory = function () {
    $(document).on("click", ".categories-mobile", function () {
      var args = { duration: 600 };
      if ($(this).hasClass("active")) {
        $(this).children(".group-menu-category-mobile").slideUp(args);
        $(this).removeClass("active");
      } else {
        $(".group-menu-category-mobile").slideUp(args);
        $(this).children(".group-menu-category-mobile").slideDown(args);
        $(".categories-mobile").removeClass("active");
        $(this).addClass("active");
      }
    });
  };
  /* dropOptionForm 
  ------------------------------------------------------------------------------------- */
  var dropOptionForm = function () {
    if ($("select").length > 0) {
      $(
        "select:not(#billing_country):not(.country_select):not(#billing_state)"
      ).niceSelect();
    }
  };

  new WOW().init();

  /* progressProduct
  ------------------------------------------------------------------------------------- */
  var progressProduct = function () {
    if ($(".progress-item").length > 0) {
      $(".progress-item").appear(function () {
        $(this)
          .find("div.donat-bg")
          .each(function () {
            $(this)
              .find(".custom-donat")
              .delay(600)
              .animate(
                {
                  width: $(this).attr("data-percent"),
                },
                1000,
                "easeInCirc"
              );
            var txt = $(this).attr("data-percent");
            $(this).closest(".rating-details").find(".percent").text(txt);
          });
      });
    }
  };

  $(document).ready(function () {
    var height = $(window).height() + 20;
    $(".row-height").css("height", height);
    $(".row-height").css("max-height", height);
  });

  var setTimeIn = function () {
    if ($(".wd-popup-form").length > 0) {
      setTimeout(function () {
        $(".wd-popup-form").addClass("modal-menu--open");
      }, 3000);
    }
  };
  /* Modal_Right
  ------------------------------------------------------------------------------------- */
  var Modal_Right = function () {
    const body = $("body");
    const modalMenu = $(".sidebar-popup");
    const modalNav = $(".menu-mobile-popup");
    const modalMenu2 = $(".wd-popup-form");
    const modalMenu3 = $(".wd-popup-job-apply");
    const modalMenu4 = $(".wd-filter-radio");

    if (modalMenu.length) {
      const open = function () {
        modalMenu.addClass("modal-menu--open");
      };
      const close = function () {
        modalMenu.removeClass("modal-menu--open");
      };

      $(".button-filter").on("click", function () {
        open();
      });
      $(".modal-menu__backdrop, .title-button-group").on("click", function () {
        close();
      });
    }
    if (modalNav.length) {
      const open = function () {
        modalNav.addClass("modal-menu--open");
      };
      const close = function () {
        modalNav.removeClass("modal-menu--open");
      };

      $(".nav-filter").on("click", function () {
        open();
      });
      $(".modal-menu__backdrop, .title-button-group").on("click", function () {
        close();
      });
    }
    if (modalMenu2.length) {
      const close = function () {
        modalMenu2.addClass("modal-menu--close");
        modalMenu2.removeClass("modal-menu--open");
      };
      $(".modal-menu__backdrop, .title-button-group").on("click", function () {
        close();
      });
    }
    if (modalMenu3.length) {
      const open = function () {
        modalMenu3.addClass("modal-menu--open");
      };
      const close = function () {
        modalMenu3.removeClass("modal-menu--open");
      };
      $(".btn-popup").on("click", function () {
        open();
      });
      $(".modal-menu__backdrop").on("click", function () {
        close();
      });
    }
    if (modalMenu4.length) {
      $(".filter-radio").on("click", function () {
        modalMenu4.toggleClass("modal-menu--open");
      });
      $(document).on("click.filter-radio", function (a) {
        if (
          $(a.target).closest(".filter-radio, .wd-filter-radio").length === 0
        ) {
          modalMenu4.removeClass("modal-menu--open");
        }
      });
    }
  };

  var dropdownLg = function () {};
  /* rangeSlider
  ------------------------------------------------------------------------------------- */
  var rangeSlider = function () {
    if ($(".salary-slider-one").length) {
      $(".salary-slider-one .salary-slider").slider({
        range: true,
        min: 0,
        max: 50000,
        values: [17000, 24000],
        slide: function (event, ui) {
          $(".salary-slider-one .count").text(
            ui.values[0] + "$" + " - " + ui.values[1] + "$"
          );
        },
      });

      $(".salary-slider-one .count").text(
        $(".salary-slider").slider("values", 0) +
          "$" +
          " - " +
          $(".salary-slider").slider("values", 1) +
          "$"
      );
    }
  };

  var rangeOne = function () {
    if ($("#slider-range-min").length) {
      $("#slider-range-min").slider({
        range: "min",
        step: 1,
        value: 25,
        min: 0,
        max: 100,
        slide: function (event, ui) {
          $("#amount").val(ui.value + " " + "Miles");
        },
      });
      $("#amount").val($("#slider-range-min").slider("value") + " " + "Miles");
    }
  };
  var rangeOneCandidate = function () {
    if ($("#slider-range-min-2").length) {
      $("#slider-range-min-2").slider({
        range: "min",
        step: 1,
        value: 25,
        min: 0,
        max: 100,
        slide: function (event, ui) {
          $("#amount").val(ui.value + " " + "Years Old");
        },
      });
      $("#amount").val(
        $("#slider-range-min-2").slider("value") + " " + "Years Old"
      );
    }
  };
  /* btnQuantity
  ------------------------------------------------------------------------------------- */
  var btnQuantity = function () {
    $(".minus-btn").on("click", function (e) {
      e.preventDefault();
      var $this = $(this);
      var $input = $this.closest("div").find("input");
      var value = parseInt($input.val());

      if (value > 1) {
        value = value - 1;
      }

      $input.val(value);
    });

    $(".plus-btn").on("click", function (e) {
      e.preventDefault();
      var $this = $(this);
      var $input = $this.closest("div").find("input");
      var value = parseInt($input.val());

      if (value > 0) {
        value = value + 1;
      }

      $input.val(value);
    });
  };
  /* stickSidebar
  ------------------------------------------------------------------------------------- */
  var stickSidebar = function () {
    if ($(".sticky-sidebar").length) {
      $(".sticky-sidebar").theiaStickySidebar();
    }
  };

  var swClick = function () {
    function activeLayout() {
      $(".switcher-container")
        .on("click", "a.sw-light", function () {
          $(this).toggleClass("active");
          $("body").addClass("home-boxed");
        })
        .on("click", "a.sw-dark", function () {
          $(this).removeClass("active").addClass("active");
          $("body").removeClass("home-boxed");
          return false;
        });
    }
    activeLayout();
  };
  var labelRate = function () {
    if ($("label[for]").length) {
      $("label[for]").on("click", function (e) {
        var target = window[this.htmlFor];
        target.checked = !target.checked;
        e.preventDefault();
      });
    }
  };

  /* image select
  ------------------------------------------------------------------------------------- */
  var selectImages = function () {
    if ($(".image-select").length > 0) {
      const selectIMG = $(".image-select");
      selectIMG.find("option").each((idx, elem) => {
        const selectOption = $(elem);
        const imgURL = selectOption.attr("data-thumbnail");
        if (imgURL) {
          selectOption.attr(
            "data-content",
            "<img src='%i'/> %s"
              .replace(/%i/, imgURL)
              .replace(/%s/, selectOption.text())
          );
        }
      });
      selectIMG.selectpicker();
    }
  };
  /* preload
  ------------------------------------------------------------------------------------- */
  var preload = function () {
    $(".preload").fadeOut("slow", function () {
      setTimeout(function () {
        $(".preload").remove();
      }, 1000);
    });
  };

  /* Dom Ready */
  $(function () {
    headerFixed();
    showsearch();
    dropOptionForm();
    flatProgressBar();
    accordion();
    goTop();
    counter();
    if ($("body").hasClass("tf-popup-auto")) {
      setTimeIn();
    }
    selectImages();
    tfTabs();
    filter();
    stickSidebar();
    parallax();
    gallery();
    scrollEffect();
    btnQuantity();
    loadmore();
    loadmore2();
    UpImg();
    delete_img();
    Modal_Right();
    popUpLightBox();
    progressProduct();
    rangeSlider();
    rangeOne();
    rangeOneCandidate();
    btnmenu();
    swClick();
    labelRate();
    btnCategory();
    preload();
  });
})(jQuery);
