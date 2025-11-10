//[Dashboard Javascript]

//Project:	EmployX - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
	
	  Morris.Donut({
        element: 'donut-chart',
        data: [{
            label: "Male",
            value: 75,

        }, {
            label: "Female",
            value: 25,
        }],
        resize: true,
        colors:['#4d7cff', '#51ce8a']
    });
	
	
	var options = {
          series: [{
          name: 'Upcoming',
          data: [12, 15, 17, 10, 31, 20, 15, 24, 28, 30, 18, 12]
        }, {
          name: 'In Progress',
          data: [15, 25, 31, 30, 26, 20, 25, 20, 18, 26, 24, 27]
        }, {
          name: 'Complate',
          data: [13, 5, 8, 18, 8, 18, 33, 32, 34, 29, 48, 56]
        }],
          chart: {
          type: 'bar',
          height: 314,
          stacked: true,
          toolbar: {
            show: false
          },
          zoom: {
            enabled: false
          }
        },
		colors: ['#4d7cff', '#51ce8a', '#b6b6c4'],
        plotOptions: {
          bar: {
            horizontal: false,
			  columnWidth: '25%',
          },
        },
		dataLabels: {
  			enabled: false,
		},
		grid: {
			strokeDashArray: 7,
		},
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        },
        legend: {
          show: false,
        },
        fill: {
          opacity: 1
        }
        };

        var chart = new ApexCharts(document.querySelector("#project-chart"), options);
        chart.render();
	
	
	
		var options = {
		  chart: {
			height: 150,
			width: 150,
			type: "radialBar"
		  },

		  series: [60],
			colors: ['#4d7cff'],
		  plotOptions: {
			radialBar: {
			  hollow: {
				margin: 0,
				size: "60%"
			  },
			  track: {
				background: '#e6f0ff',
			  },

			  dataLabels: {
				showOn: "always",
				name: {
				  show: false,
				},
				 grid: {
			      show: true,
			      padding: {
			        top: 10,
			        bottom: 10,
			        right: 30,
			        left: 20
			      }
			    },
				value: {
				  offsetY: 0,
				  color: "#111",
				  fontSize: "20px",
				  show: true
				}
			  }
			}
		  },

		  stroke: {
			lineCap: "round",
		  },
		  labels: ["Progress"]
		};

		var chart = new ApexCharts(document.querySelector("#revenue1"), options);

		chart.render();

		var options = {
		  chart: {
			height: 150,
			width: 150,
			type: "radialBar"
		  },

		  series: [50],
			colors: ['#51ce8a'],
		  plotOptions: {
			radialBar: {
			  hollow: {
				margin: 0,
				size: "60%"
			  },
			  track: {
				background: '#defded',
			  },
			  grid: {
			      show: true,
			      padding: {
			        top: 30,
			        bottom: 10,
			        right: 30,
			        left: 20
			      }
			    },

			  dataLabels: {
				showOn: "always",
				name: {
				  show: false,
				},
				value: {
				  offsetY: 0,
				  color: "#111",
				  fontSize: "20px",
				  show: true
				}
			  }
			}
		  },

		  stroke: {
			lineCap: "round",
		  },
		  labels: ["Progress"]
		};

		var chart = new ApexCharts(document.querySelector("#revenue2"), options);

		chart.render();

		var options = {
		  chart: {
			height: 150,
			width: 150,
			type: "radialBar"
		  },

		  series: [34],
			colors: ['#733aeb'],
		  plotOptions: {
			radialBar: {
			  hollow: {
				margin: 0,
				size: "60%"
			  },
			  track: {
				background: '#f4efff',
			  },
			  grid: {
			      show: true,
			      padding: {
			        top: 10,
			        bottom: 10,
			        right: 30,
			        left: 20
			      }
			    },

			  dataLabels: {
				showOn: "always",
				name: {
				  show: false,
				},
				value: {
				  offsetY: 0,
				  color: "#111",
				  fontSize: "20px",
				  show: true
				}
			  }
			}
		  },

		  stroke: {
			lineCap: "round",
		  },
		  labels: ["Progress"]
		};

		var chart = new ApexCharts(document.querySelector("#revenue3"), options);

		chart.render();

		
	
		var options = {
          series: [{
          data: [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46]
        }],
          chart: {
          type: 'area',
          height: 100,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
          curve: 'smooth',
			width: 2,
        },
        fill: {
          opacity: 1,
        },
        yaxis: {
          min: 0
        },
        colors: ['#51ce8a'],
        };

        var chart = new ApexCharts(document.querySelector("#followers-spark"), options);
        chart.render();
	
	
		
	
		var options = {
          series: [{
          data: [51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62]
        }],
          chart: {
          type: 'area',
          height: 100,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
          curve: 'smooth',
			width: 2,
        },
        fill: {
          opacity: 1,
        },
        yaxis: {
          min: 0
        },
        colors: ['#4d7cff'],
        };

        var chart = new ApexCharts(document.querySelector("#growth-spark"), options);
        chart.render();
	
		
	
		var options = {
          series: [{
          data: [47, 45, 27, 93, 53, 61, 27, 54, 43, 19, 46, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35]
        }],
          chart: {
          type: 'area',
          height: 100,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
          curve: 'smooth',
			width: 2,
        },
        fill: {
          opacity: 1,
        },
        yaxis: {
          min: 0
        },
        colors: ['#733aeb'],
        };

        var chart = new ApexCharts(document.querySelector("#post-spark"), options);
        chart.render();
	
	
		
	
		var options = {
          series: [{
          data: [51, 35, 41, 35, 27, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 93, 53, 61, 27, 54, 43, 19, 46, 47]
        }],
          chart: {
          type: 'area',
          height: 100,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
          curve: 'smooth',
			width: 2,
        },
        fill: {
          opacity: 1,
        },
        yaxis: {
          min: 0
        },
        colors: ['#fec801'],
        };

        var chart = new ApexCharts(document.querySelector("#interactions-spark"), options);
        chart.render();
	
	
		var options = {
          series: [41, 17, 15],
          chart: {
			 width: 300,
          type: 'donut',
        },
		 legend: {
			show: false, 
		 },
		dataLabels: {
  			enabled: false,
		},
		colors: ['#4d7cff', '#51ce8a', '#733aeb'],
		responsive: [{
          breakpoint: 1500,
          options: {
            chart: {
              width: 250
            }
          }
        }]	
		
        };
		
        var chart = new ApexCharts(document.querySelector("#revenue7"), options);
        chart.render();
	
	
		 $('.application-bx').slimScroll({
			height: '382px'
		  });
	
	
}); // End of use strict


		var options = {
          series: [{
			name: "Applications",
			data: [15, 35, 50, 23, 30, 90]
		  },
		  {
			name: "Shortlisted",
			data: [0, 48, 75, 35, 36, 70]
		  }],
          chart: {
          height: 335,
          type: 'area',
          toolbar: {
            show: false
          },
          zoom: {
            enabled: false
          }
        },
		colors: ['#51ce8a', '#733aeb'],
        dataLabels: {
          enabled: false
        },
		 legend: {
			show: false,
		 },
        stroke: {
          curve: 'smooth'
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
        },
        };

        var chart = new ApexCharts(document.querySelector("#active-jobs-chart"), options);
        chart.render();
	
		// check if the checkbox has any unchecked item
		checkLegends()

		function checkLegends() {
		  var allLegends = document.querySelectorAll(".legend input[type='checkbox']")

		  for(var i = 0; i < allLegends.length; i++) {
			if(!allLegends[i].checked) {
			  chart.toggleSeries(allLegends[i].value)
			}
		  }
		}

		// toggleSeries accepts a single argument which should match the series name you're trying to toggle
		function toggleSeries(checkbox) {
		  chart.toggleSeries(checkbox.value)
		}
	
	
