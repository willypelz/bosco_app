/* [ ---- Gebo Admin Panel - dashboard ---- ] */

	$(document).ready(function() {
		//* small charts
		gebo_peity.init();
		//* charts
		gebo_charts.fl_1();
		gebo_charts.fl_2();
		//* sortable/searchable list
		gebo_flist.init();
		//* calendar
		gebo_calendar.init();
		//* responsive table
		gebo_media_table.init();
		//* resize elements on window resize
		var lastWindowHeight = $(window).height();
		var lastWindowWidth = $(window).width();
		$(window).on("debouncedresize",function() {
			if($(window).height()!=lastWindowHeight || $(window).width()!=lastWindowWidth){
				lastWindowHeight = $(window).height();
				lastWindowWidth = $(window).width();
				//* rebuild calendar
				$('#calendar').fullCalendar('render');
			}
		});
		//* small gallery grid
        gebo_gal_grid.small();
		
	});
	
	//* small charts
	gebo_peity = {
		init: function() {
			$.fn.peity.defaults.line = {
				strokeWidth: 1,
				delimiter: ",",
				height: 32,
				max: null,
				min: 0,
				width: 50
			};
			$.fn.peity.defaults.bar = {
				delimiter: ",",
				height: 32,
				max: null,
				min: 0,
				spacing: 1,
				width: 50
			};
			$(".p_bar_up span").peity("bar",{
				colours: ["#6cc334"]
			});
			$(".p_bar_down span").peity("bar",{
				colours: ["#e11b28"]
			});
			$(".p_line_up span").peity("line",{
				colour: "#b4dbeb",
				strokeColour: "#3ca0ca"
			});
			$(".p_line_down span").peity("line",{
				colour: "#f7bfc3",
				strokeColour: "#e11b28"
			});
		}
	};

	//* charts
    gebo_charts = {
        fl_1: function() {
            // Setup the placeholder reference
            var elem = $('#fl_1'),
            	sin = [], cos = [];

			for (var i = 0; i < 14; i += 0.5) {
                sin.push([i, Math.sin(i)]);
                cos.push([i, Math.cos(i)]);
            }

            // Setup the flot chart using our data
            $.plot(elem, 
                [
                    { label: "sin(x)",  data: sin},
                    { label: "cos(x)",  data: cos}
                ], 
                {
                    lines: { show: true },
                    points: { show: true },
                    yaxis: { min: -1.2, max: 1.2 },
                    grid: {
                        hoverable: true,
                        borderWidth: 1
                    },
					tooltip: true,
					tooltipOpts: {
						content: function(label, xval, yval) {
							return label + ' (' + xval +') = ' + yval.toFixed(2)
						},
						shifts: {
							x: 20,
							y: 0
						},
						defaultTheme: false
					},
					colors: [ "#8cc7e0", "#2d83a6" ]
                }
            );
        },
        fl_2 : function() {
            // Setup the placeholder reference
            var elem = $('#fl_2');
           
			var data = [
				{
					label: "United States",
					data: 560
				},
				{
					label: "Brazil",
					data: 360
				},
                {
					label: "France",
					data: 320
				},
				{
					label: "Turkey",
					data: 280
				},
				{
					label: "India",
					data: 160
				}
			];
			
			// Setup the flot chart using our data
            $.plot(elem, data,         
                {
					label: "Visitors by Location",
                    series: {
                        pie: {
                            show: true,
							highlight: {
								opacity: 0.2
							}
                        }
                    },
                    grid: {
                        hoverable: true
                    },
					tooltip: true,
					tooltipOpts: {
						content: "%s ( %p.1% )",
						shifts: {
							x: 20,
							y: 0
						},
						defaultTheme: false
					},
					colors: [ "#b4dbeb", "#8cc7e0", "#64b4d5", "#3ca0ca", "#2d83a6", "#22637e", "#174356", "#0c242e" ]
                }
            );
        }
    };

	//* filterable list
	gebo_flist = {
		init: function(){
			//*typeahead
			var list_source = [];
			$('.user_list li').each(function(){
				var search_name = $(this).find('.sl_name').text();
				//var search_email = $(this).find('.sl_email').text();
				list_source.push(search_name);
			});
			$('.user-list-search').typeahead({local: list_source, limit:5});
			
			var options = {
					valueNames: [ 'sl_name', 'sl_status', 'sl_email' ],
					page: 10,
					plugins: [
						[ 'paging', {
							pagingClass	: "bottomPaging",
							innerWindow: 1,
							outerWindow: 2
						} ]
					]
				},
				userList = new List('user-list', options);
			
			$('#filter-online').on('click',function() {
				$('ul.filter li').removeClass('active');
				$(this).parent('li').addClass('active');
				userList.filter(function(item) {
					return item.values().sl_status == "online";
				});
				return false;
			});
			$('#filter-offline').on('click',function() {
				$('ul.filter li').removeClass('active');
				$(this).parent('li').addClass('active');
				userList.filter(function(item) {
					return item.values().sl_status == "offline";
				});
				return false;
			});
			$('#filter-none').on('click',function() {
				$('ul.filter li').removeClass('active');
				$(this).parent('li').addClass('active');
				userList.filter();
				return false;
			});
			
			$('#user-list').on('click','.sort',function(){
					$('.sort').parent('li').removeClass('active');
					if($(this).parent('li').hasClass('active')) {
						$(this).parent('li').removeClass('active');
					} else {
						$(this).parent('li').addClass('active');
					}
				}
			);
		}
	};
	
	//* gallery grid
    gebo_gal_grid = {
        small: function() {
			var $small_grid = $('#small_grid').children('ul');

            //* small gallery grid
            $small_grid.imagesLoaded(function() {
                // Prepare layout options.
                var options = {
					autoResize: true, // This will auto-update the layout when the browser window is resized.
					container: $('#small_grid'), // Optional, used for some extra CSS styling
					offset: 6, // Optional, the distance between grid items
					itemWidth: 120, // Optional, the width of a grid item (li)
					flexibleItemWidth: false
                };
                
                // Get a reference to your grid items.
                var handler = $small_grid.children('li');
                
                // Call the layout function.
                handler.wookmark(options);
                
                $small_grid.children('li').children('a').attr('rel', 'gallery').colorbox({
                    maxWidth	: '80%',
                    maxHeight	: '80%',
                    opacity		: '0.2', 
                    loop		: false,
                    fixed		: true
                });
            });
        }
    };
	
	//* calendar
	gebo_calendar = {
		init: function() {
			var date = new Date();
			var d = date.getDate();
			var m = date.getMonth();
			var y = date.getFullYear();
			var calendar = $('#calendar').fullCalendar({
				header: {
					left: 'prev,next',
					center: 'title,today',
					right: 'month,agendaWeek,agendaDay'
				},
				buttonText: {
					prev: '<i class="fa fa-chevron-left cal_prev" />',
					next: '<i class="fa fa-chevron-right cal_next" />'
				},
				aspectRatio: 1.5,
				selectable: true,
				selectHelper: true,
				select: function(start, end, allDay) {
					var title = prompt('Event Title:');
					if (title) {
						calendar.fullCalendar('renderEvent',
							{
								title: title,
								start: start,
								end: end,
								allDay: allDay
							},
							true // make the event "stick"
						);
					}
					calendar.fullCalendar('unselect');
				},
				editable: true,
				theme: false,
				events: [
					{
						title: 'All Day Event',
						start: new Date(y, m, 1),
                        color: '#aedb97',
                        textColor: '#3d641b'
					},
					{
						title: 'Long Event',
						start: new Date(y, m, d-5),
						end: new Date(y, m, d-2)
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: new Date(y, m, d+8, 16, 0),
						allDay: false
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: new Date(y, m, d+15, 16, 0),
						allDay: false
					},
					{
						title: 'Meeting',
						start: new Date(y, m, d+12, 15, 0),
						allDay: false,
                        color: '#aedb97',
                        textColor: '#3d641b'
					},
					{
						title: 'Lunch',
						start: new Date(y, m, d, 12, 0),
						end: new Date(y, m, d, 14, 0),
						allDay: false
					},
					{
						title: 'Birthday Party',
						start: new Date(y, m, d+1, 19, 0),
						end: new Date(y, m, d+1, 22, 30),
						allDay: false,
                        color: '#cea97e',
                        textColor: '#5e4223'
					},
					{
						title: 'Click for Google',
						start: new Date(y, m, 28),
						end: new Date(y, m, 29),
						url: 'http://google.com/'
					}
				],
				eventColor: '#bcdeee'
			})
		}
	};
	
    //* responsive tables
    gebo_media_table = {
        init: function() {
			$('.mediaTable').mediaTable();
        }
    };
