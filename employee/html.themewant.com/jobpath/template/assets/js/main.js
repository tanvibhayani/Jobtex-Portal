/*=== Javascript function indexing ===*/

(function ($) {
  "use strict";
  let device_width = window.innerWidth;

  var rtsJs = {
    m: function (e) {
      rtsJs.d();
      rtsJs.methods();
    },
    d: function (e) {
      (this._window = $(window)),
        (this._document = $(document)),
        (this._body = $("body")),
        (this._html = $("html"));
    },
    methods: function (e) {
      rtsJs.StickyHeader();
      rtsJs.swiperActivation();
      rtsJs.counterUp();
      rtsJs.niceSelect();
      rtsJs.pricingToggle();
      rtsJs.svgInject();
      rtsJs.mobileMenu();
      rtsJs.WowJs();
      rtsJs.preloader();
      rtsJs.activeButton();
      rtsJs.chartJs();
      rtsJs.backToTop();
    },
    // sticky Header
    StickyHeader: function () {
      $(window).on("scroll", function() {
        var ScrollBarPostion = $(window).scrollTop();
        if (ScrollBarPostion > 100) {
          $(".rts__header").addClass("sticky");      
        } else {
          $(".rts__header").removeClass("sticky");   
        }
      });
    },
    swiperActivation: function () {
      $(function () {
        // initialize swipers with default and custom options
        initSwipers(".swiper-data", {
          spaceBetween: 30,
          slidesPerView: 2,
          loop: true,
        });
        // utility function to initialize swipers
        function initSwipers(selector, defaults) {
          const swipers = document.querySelectorAll(selector);
          swipers.forEach((swiper) => {
            const optionsData = swiper.dataset.swiper
              ? JSON.parse(swiper.dataset.swiper)
              : {};
            const options = Object.assign({}, defaults, optionsData);
            new Swiper(swiper, options);
          });
        }
      });
      // explorer slider
      var swiper = new Swiper(".rts__testimonial__four", {
        slidesPerView: 1,
        loop: true,
        autoplay: {
          delay: 5000,
        },
        navigation: {
          nextEl: ".rts__slide__next",
          prevEl: ".rts__slide__prev",
        },
      });
    },
    counterUp: function () {
      try {
        $(".counter").counterUp({
          delay: 10,
          time: 2000,
        });
      } catch (error) {
        console.log("Counterup not declared");
      }
    },
    niceSelect: function (e) {
      $(document).ready(function() {
        $('.select-nice').niceSelect();
      });
    },
    pricingToggle: function () {
      $(document).ready(function () {
        $(".pricing__toogle").change(function () {
          if ($(this).is(":checked")) {
            $(".monthly__pricing").removeClass("active");
            $(".yearly__pricing").addClass("active");
          } else {
            $(".monthly__pricing").addClass("active");
            $(".yearly__pricing").removeClass("active");
          }
        });
      });
      // radio pricing check box
      $(document).ready(function() {
        // Listen for clicks on the radio buttons
        $('input[name="package"]').on('change', function() {
            if ($('#package1').is(':checked')) {
                $('.monthly__pricing').removeClass('').addClass('active'); 
                $('.yearly__pricing').removeClass('active').addClass('hide'); 
            } else if ($('#package2').is(':checked')) {
                $('.monthly__pricing').removeClass('active').addClass('hide'); 
                $('.yearly__pricing').removeClass('hide').addClass('active'); 
            }
        });
    });

    },
    svgInject: function () {
      try {
        SVGInject(document.querySelectorAll("img.html"));
      } catch (error) {
        console.log("svginject is not declared");
      }
    },
    mobileMenu: function () {
        try {
          $("#offcanvas__menu").meanmenu({
            meanMenuContainer: ".offcanvas__menu",
            meanScreenWidth: "991",
            meanExpand: ["+"],
          });
        } catch (error) {
          console.log("Mobile Menu Not loaded");
        }
    },
    WowJs: function () {
      new WOW().init();
    },
    preloader:function(){
      window.addEventListener('load',function(){
        document.querySelector('body').classList.add("loaded")  
      });          
    },
    activeButton: function () {
      $(document).ready(function() {
        const currentPath = window.location.pathname.split("https://html.themewant.com/").pop(); 
        const navLinks = document.querySelectorAll('.dash__menu .nav-link');
    
        navLinks.forEach(link => {
            const linkPath = link.getAttribute('href').split("https://html.themewant.com/").pop();
    
            if (linkPath === currentPath) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
      });

        // active button
      $(document).ready(function() {
        $('.nav-link').on('click', function() {
            $('.nav-link').removeClass('active');
            $(this).addClass('active');
        });
      });
    

      // dashboard menu show
      $(document).ready(function() {
        $('.sidebar__action').on('click', function() {
            $('.dashboard__left').addClass('active');
        });
    
        $(document).on('click', function(event) {
            const $dashboardLeft = $('.dashboard__left');
            const $sidebarAction = $('.sidebar__action');
    
            if (!$dashboardLeft.is(event.target) && !$dashboardLeft.has(event.target).length && 
                !$sidebarAction.is(event.target) && !$sidebarAction.has(event.target).length) {
                $dashboardLeft.removeClass('active');
            }
        });
      });

    
    },
    chartJs: function () {
      $(document).ready(function(){
        try {
          var chartOne = document.querySelector("#spline__chart__candidate");
          if (chartOne !== null){
            var options__candidate = {
              series: [
                {
                  name: "candidate",
                  data: [100, 200, 300, 400, 500, 800, 700, 800, 1000],
                },
              ],
              chart: {
                height: 420,
                type: "area",
                toolbar: {
                  show: false,
                },
              },
              colors: ['#34A853'],
              grid: {
                show: true,
                borderColor: "#7D8087",
                strokeDashArray: 3,
                position: "back",
                yaxis: {
                  lines: {
                    show: true,
                  },
                },
              },
              dataLabels: {
                enabled: false,
              },
              stroke: {
                curve: "smooth",
              },
              xaxis: {
                type: "day",
                categories: [
                  "Jan",
                  "Feb",
                  "Mar",
                  "Apr",
                  "May",
                  "Jun",
                  "Jul",
                  "Aug",
                  "Sep",
                  "Oct",
                  "Nov",
                  "Dec",
                ],
                labels:{
                  show: true,
                  offsetY: 2,
                  style:{
                    fontSize: '14px',
                    fontWeight: 500,
                    cssClass: 'apexcharts-xaxis-label',
                  },
                },
              },
              yaxis: {
                labels:{
                  show: true,
                  style:{
                    fontSize: '14px',
                    fontWeight: 500,
                    cssClass: 'apexcharts-xaxis-label',
                  },
                },
              },
              tooltip: {
                enabled: true,
                x: {
                  format: "dd/MM/yy",
                },
              },
              fill: {
                type: "gradient",
                gradient: {
                  opacityFrom: 1,
                  opacityTo: 0,
                  stops: [0, 46, 100],
                  type: "vertical",
                  colorStops:[
                    {
                      offset: 0,
                      color: "#FEF2EB",
                      opacity: 1
                    },
                    {
                      offset: 50,
                      color: "#F1F1F1",
                      opacity: 0.5
                    },
                    {
                      offset: 100,
                      color: "#E4E0EA",
                      opacity: 0.9
                    }
                  ],
                },
              },
              responsive: [
                {
                  breakpoint: 1800,
                  options: {
                    chart: {
                      height: "550",
                      width: "100%",
                    },
                  },
                },
                {
                  breakpoint: 1400,
                  options: {
                    chart: {
                      height: "400",
                      width: "100%",
                    },
                  },
                },
              ],
            };
            var chart = new ApexCharts(chartOne, options__candidate);
            chart.render();
          }
        } 
        catch (error) {
          console.log("chartjs is not declared");
        }
      });

      // chart monthly
      $(document).ready(function(){
        try {
          var chartTwo = document.querySelector("#spline__chart__candidate__monthly");
          if (chartTwo !== null){
            var options__candidate__monthly = {
              series: [
                {
                  name: "candidate",
                  data: [100, 200, 300, 400, 500, 800, 700, 800, 1000],
                },
              ],
              chart: {
                height: 420,
                type: "area",
                toolbar: {
                  show: false,
                },
              },
              colors: ['#34A853'],
              grid: {
                show: true,
                borderColor: "#7D8087",
                strokeDashArray: 3,
                position: "back",
                yaxis: {
                  lines: {
                    show: true,
                  },
                },
              },
              dataLabels: {
                enabled: false,
              },
              stroke: {
                curve: "smooth",
              },
              xaxis: {
                type: "day",
                categories: [
                  "Jan",
                  "Feb",
                  "Mar",
                  "Apr",
                  "May",
                  "Jun",
                  "Jul",
                  "Aug",
                  "Sep",
                  "Oct",
                  "Nov",
                  "Dec",
                ],
                labels:{
                  show: true,
                  offsetY: 2,
                  style:{
                    fontSize: '14px',
                    fontWeight: 500,
                    cssClass: 'apexcharts-xaxis-label',
                  },
                },
              },
              yaxis: {
                labels:{
                  show: true,
                  style:{
                    fontSize: '14px',
                    fontWeight: 500,
                    cssClass: 'apexcharts-xaxis-label',
                  },
                },
              },
              tooltip: {
                enabled: true,
                x: {
                  format: "dd/MM/yy",
                },
              },
              fill: {
                type: "gradient",
                gradient: {
                  opacityFrom: 1,
                  opacityTo: 0,
                  stops: [0, 46, 100],
                  type: "vertical",
                  colorStops:[
                    {
                      offset: 0,
                      color: "#FEF2EB",
                      opacity: 1
                    },
                    {
                      offset: 50,
                      color: "#F1F1F1",
                      opacity: 0.5
                    },
                    {
                      offset: 100,
                      color: "#E4E0EA",
                      opacity: 0.9
                    }
                  ],
                },
              },
              responsive: [
                {
                  breakpoint: 1800,
                  options: {
                    chart: {
                      height: "550",
                      width: "100%",
                    },
                  },
                },
                {
                  breakpoint: 1400,
                  options: {
                    chart: {
                      height: "400",
                      width: "100%",
                    },
                  },
                },
              ],
            };
            var chart = new ApexCharts(chartTwo, options__candidate__monthly);
            chart.render();
          }
      } 
      catch (error) {
        console.log("spline__chart__candidate__monthly not declared");
      }
        
      });

      $(document).ready(function(){
        try {
          var chartThree = document.querySelector("#chart__candidate__yearly");
          if (chartThree !== null){
            var options__candidate__yearly = {
              series: [
                {
                  name: "candidate",
                  data: [2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000],
                },
              ],
              chart: {
                height: 420,
                type: "area",
                toolbar: {
                  show: false,
                },
              },
              colors: ['#34A853'],
              grid: {
                show: true,
                borderColor: "#7D8087",
                strokeDashArray: 3,
                position: "back",
                yaxis: {
                  lines: {
                    show: true,
                  },
                },
              },
              dataLabels: {
                enabled: false,
              },
              stroke: {
                curve: "smooth",
              },
              xaxis: {
                type: "year",
                categories: [
                  "2000",
                  "2001",
                  "2002",
                  "2003",
                  "2004",
                  "2005",
                  "2006",
                  "2007",
                  "2008",
                ],
                labels:{
                  show: true,
                  offsetY: 2,
                  style:{
                    fontSize: '14px',
                    fontWeight: 500,
                    cssClass: 'apexcharts-xaxis-label',
                  },
                },
              },
              yaxis: {
                labels:{
                  show: true,
                  style:{
                    fontSize: '14px',
                    fontWeight: 500,
                    cssClass: 'apexcharts-xaxis-label',
                  },
                },
              },
              tooltip: {
                enabled: true,
                x: {
                  format: "dd/MM/yy",
                },
              },
              fill: {
                type: "gradient",
                gradient: {
                  opacityFrom: 1,
                  opacityTo: 0,
                  stops: [0, 46, 100],
                  type: "vertical",
                  colorStops:[
                    {
                      offset: 0,
                      color: "#FEF2EB",
                      opacity: 1,
                    },
                    {
                      offset: 50,
                      color: "#F1F1F1",
                      opacity: 0.5,
                    },
                    {
                      offset: 100,
                      color: "#E4E0EA",
                      opacity: 0.9,
                    }
                  ],
                },
              },
              responsive: [
                {
                  breakpoint: 1800,
                  options: {
                    chart: {
                      height: "550",
                      width: "100%",
                    },
                  },
                },
                {
                  breakpoint: 1400,
                  options: {
                    chart: {
                      height: "400",
                      width: "100%",
                    },
                  },
                },
              ],
            };
            var chart = new ApexCharts(chartThree, options__candidate__yearly);
            chart.render();
          }
        } 
        catch (error) {
          console.log("spline__chart__candidate__yearly not declared");
        }

      });
    },

    backToTop: function () {
      $(document).ready(function () {
        var backButton = $("#rts-back-to-top");
        $(window).scroll(function () {
          if ($(this).scrollTop() > 100) {
            backButton.addClass("show");
          } else {
            backButton.removeClass("show");
          }
        });
        backButton.on("click", function () {
          $("html, body").animate(
            {
              scrollTop: 0,
            },
            1000
          );
        });
      });
    },
  };
  rtsJs.m();
})(jQuery, window);
