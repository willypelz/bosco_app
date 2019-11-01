jQuery(function($) {
	var styleSwitcher = {

		initialized : false,

		initialize : function() {

			var $this = this;

			if (this.initialized)
				return;
			this.initialized = true;

			// Style Switcher CSS
			$("head").append($('<link rel="stylesheet">').attr("href", "assets/js/style-switcher/assets/css/font-awesome.css"));
			$("head").append($('<link rel="stylesheet">').attr("href", "assets/js/style-switcher/assets/css/theme_panel.css"));
			$("head").append($('<link rel="stylesheet">').attr("href", "http://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css"));
			$("head").append($('<link rel="stylesheet/less">').attr("href", "assets/js/style-switcher/assets/css/skin.less"));
			$("head").append($('<script />').attr("src", "http://code.jquery.com/ui/1.11.1/jquery-ui.js"));

			$.getScript("assets/js/style-switcher/assets/js/less.js", function(data, textStatus, jqxhr) {
				$.getScript('assets/js/style-switcher/assets/js/jquery.easing.js', function(data, textStatus, jqxhr) {
					$("body").append('<div id="theme_panel"></div> <div id="all-headers" />');
					$("#theme_panel").load("assets/js/style-switcher/switcher.html", function(response, status, xhr) {
						if (status == "success") {
							$this.build();
							$this.events();

							if ($.cookie("skin") != null) {
								$this.setColor($.cookie("skin"));
							}
							if ($.cookie("fontFamily") != null) {
								$this.setFamily($.cookie("fontFamily"));
							}
							if ($.cookie("initialized") == null) {
								$this.container.find("h4 a").click();
								$.cookie("initialized", true);
							}
							if ($.cookie("sticky") != null) {
								$this.stickyHeader($.cookie("sticky"));
							}
							if ($.cookie("layout") != null) {
								$this.layoutStyle($.cookie("layout"));
							}
							if ($.cookie('navPosition') != null) {
								$this.navPosition($.cookie("navPosition"));
							}
							if ($.cookie("header") != null) {
								headerStyle($.cookie("header"), $.cookie("index"))
							}
						}
					});
				});
			});

		},

		build : function() {

			var $this = this;

			this.container = $("#theme_panel");

			// Colors Skins
			var colors = [{
				"Hex" : "#ecc731",
				"colorName" : "default"
			}, {
				"Hex" : "#e1cc3f",
				"colorName" : "yellow"
			}, {
				"Hex" : "#28c2e4",
				"colorName" : "skyBlue"
			}, {
				"Hex" : "#d5586d",
				"colorName" : "pink"
			}, {
				"Hex" : "#9fb035",
				"colorName" : "green"
			}, {
				"Hex" : "#935397",
				"colorName" : "purple"
			}, {
				"Hex" : "#2ba09a",
				"colorName" : "greenblue"
			}, {
				"Hex" : "#f2ba66",
				"colorName" : "orange"
			}, {
				"Hex" : "#b33b1c",
				"colorName" : "darkred"
			}, {
				"Hex" : "#f0a01a",
				"colorName" : "darkyellow"
			}, {
				"Hex" : "#7e8588",
				"colorName" : "greyish"
			}];

			//color skin Builder
			var colorList = this.container.find('.swatches');
			$.each(colors, function(i, value) {
				var color = $("<li />").append($("<a class='color-fill' />").css("background-color", colors[i].Hex).attr({
					"data-color-hex" : colors[i].Hex,
					"data-color-name" : colors[i].colorName,
					"href" : "#",
					"title" : colors[i].colorName
				}).append($('<i/>').addClass('fa fa-check active-color')));
				colorList.append(color);
			});

			//color skin events
			colorList.find("a").removeClass('color-fillactive')
			colorList.find('li:first').find("a").addClass('color-fillactive')
			colorList.find("a").click(function(e) {
				e.preventDefault();
				$this.setColor($(this).attr("data-color-hex"));
			});

			// fonts List
			var fontFamily = [{
				'familyName' : "'Montserrat',sans-serif"
			}, {
				'familyName' : "'Open Sans', sans-serif"
			}, {
				'familyName' : "'Libre Baskerville', sans-serif"
			}];

			//fonts List Builder
			var fontList = this.container.find('#fonts .select-font')
			$.each(fontFamily, function(i, value) {
				var fonts = $("<option />").text(fontFamily[i].familyName);
				fontList.append(fonts);
			});

			//fonts List events
			fontList.change(function(e) {
				$this.setFamily($(this).val());
			});
		},

		events : function() {

			var $this = this;

			// switcher on-off
			$(document).on('click', '#theme_panel .theme-setting i', function() {
				var left = $('#theme_panel').outerWidth();
				if (!$('#theme_panel').hasClass('active')) {
					$('#theme_panel').addClass('active');
					$('#theme_panel').animate({
						'left' : 0
					}, 1000, 'easeInBack')
				} else {
					$('#theme_panel').removeClass('active');
					$('#theme_panel').animate({
						'left' : -left
					}, 1000, 'easeOutBack')
				}

				if ($.cookie('currentList') != null) {
					$this.slider($.cookie('currentList'))
				}

			})
			//on off latest
			$(document).on('click', '.theme-heading', function() {
				$('.theme-heading').removeClass('on');
				$('.theme_panel_option').slideUp('normal');
				$('.fa-minus').removeClass('fa-minus');

				if ($(this).next().is(':hidden') == true) {
					$(this).addClass('on');
					$(this).next().slideDown('normal');
					$(this).find('.fa-plus').addClass('fa-minus');
				} else {
					$(this).find('.fa-plus').removeClass('fa-minus');
				}
			});
			$(document).on('mouseover', '.theme-heading', function() {
				$(this).addClass('over');
			}).mouseout(function() {
				$(this).removeClass('over');
			});
			$('.theme_panel_option').hide();

			//Radio active
			$(document).on('click', '#layout .layout-column', function() {
				$('#layout .layout-column').removeClass('radio-active')
				$(this).addClass('radio-active')
				var layoutStyle = $(this).attr('data-layout')
				styleSwitcher.layoutStyle(layoutStyle)
			})

			$(document).on('click', '#sticky .layout-column', function() {
				$('#sticky .layout-column').removeClass('radio-active')
				$(this).addClass('radio-active')
				var sticky = $(this).attr('rel')
				styleSwitcher.stickyHeader(sticky)
			})

			$(document).on('click', '#header-position .layout-column', function() {
				$('#header-position .layout-column').removeClass('radio-active')
				$(this).addClass('radio-active')
				var navPos = $(this).attr('rel')
				styleSwitcher.navPosition(navPos)
			})
			// Active Devices
			$(document).on('click', '.device-highlight', function() {
				$('.iphone-p-active').removeClass('iphone-p-active')
				$(this).addClass('iphone-p-active');

			})
			// Active Pages
			$(document).on('click', '.page-group a', function() {
				$('.active-page').removeClass('active-page')
				$(this).addClass('active-page')
			})
			if ($('#blog-main').length) {
				var $headerStyle = $('#header-style');

				$headerStyle.show()
				$headerStyle.find('.header-items').removeClass('select-active')
				$headerStyle.find('.header-group> .header-items-slider:first-child').find('.header-items:first-child').addClass('select-active')

				$headerStyle.find('.theme-pager li').removeClass('current')
				$headerStyle.find('.theme-pager li:first-child').addClass('current')

				var headerItemsLength = $('.header-items-slider').length;
				var headerItemsWidth = $('.header-items-slider:first-child').width();
				var totalWidth = headerItemsLength * headerItemsWidth;
				$headerStyle.find('.header-group').width(totalWidth);

				$headerStyle.find('.theme-pager li').click(function() {
					$headerStyle.find('.theme-pager li').removeClass('current')
					$(this).addClass('current')
					var currentList = $(this).index();
					$this.slider(currentList)
					$.cookie('currentList', currentList);
				})

				$headerStyle.find('.header-items').click(function() {
					$headerStyle.find('.header-items').removeClass('select-active')
					$(this).addClass('select-active')
					var headername = $(this).attr('rel')
					var ind = $(this).attr('rel').split('-')[1];
					headerStyle(headername, ind)
				})
			}
			headerStyle = function(headername, ind) {
				$('#blog-main').attr('class', '').html('')
				$('#blog-main').addClass('jumbotron main-blog-section blog-header-' + ind)
				$("#all-headers").load("assets/js/style-switcher/header-styles.html", function(responseTxt, statusTxt, xhr) {
					if (statusTxt == "success") {
						var i = 0;
						header = new Array();
						$("#all-headers").find('.main-blog-section').each(function() {
							header[i] = $(this).html()
							i++
						})
						$("#all-headers").hide()
						$('#blog-main').html(header[ind - 1])

						$('#header-style').find('.header-items').removeClass('select-active')
						$('#header-style').find('.header-items').each(function() {
							if ($(this).attr('rel') == headername) {
								$(this).addClass('select-active')
							}
						})
					}
				});

				$.cookie("header", headername);
				$.cookie("index", ind);
			}
			// Fixed Header JS
			var initScroll = $(window).scrollTop(), $HeaderNav = $('#header'), headerHeight = $HeaderNav.height()
			
			fixedNav = function() {				
				 currentScroll = $(window).scrollTop()
				function inteligent() {
					if (currentScroll >= initScroll) {console.log(111)
						//console.log('up')
						$HeaderNav.removeClass('down')
						$HeaderNav.addClass('up')
						if (currentScroll == $(document).height() - $(window).height()) {console.log(1111)
							$HeaderNav.removeClass('up')
							$HeaderNav.addClass('down')
						}
						initScroll = currentScroll
					} else {console.log(111111)
						//console.log('down')
						$HeaderNav.removeClass('up')
						$HeaderNav.addClass('down')
						initScroll = currentScroll
					}
				}

				if ($.cookie('sticky') == "yes") {
					if (currentScroll > $('#header').height()) {
						$HeaderNav.addClass('fixed')
						$('#wrapper').css("padding-top", headerHeight)
						inteligent()
					} else {
						//$HeaderNav.removeClass('fixed up down')
						//$('#wrapper').css("padding-top", "0")
					}
				} else {
					if (currentScroll > $('#header').height()) {console.log(1)
						//$('#wrapper').css("padding-top", headerHeight)
						//$HeaderNav.addClass('fixed')
						//$HeaderNav.removeClass('fixed up down')
						$('#wrapper').css("padding-top", "0")
					} else {console.log(11)
						//$HeaderNav.removeClass('fixed up down')
						$('#wrapper').css("padding-top", "0")
					}
				}
			}
			fixedNav()
			$(window).scroll(function() {
				fixedNav()
			})
			// end for sticky header
		},

		setColor : function(color) {
			less.modifyVars({
				skinColor : color
			});

			$.cookie("skin", color);
			this.container.find(".swatches").find('.color-fill').removeClass('color-fillactive');
			this.container.find(".swatches a[data-color-hex=" + color + "]").addClass('color-fillactive');
		},
		setFamily : function(fontFamily) {
			less.modifyVars({
				fontFamily : fontFamily
			});
			$('#fonts .select-font').find('option').each(function() {
				if ($(this).val() == fontFamily) {
					$(this).attr('selected', 'selected')
				}
			})
			$.cookie("fontFamily", fontFamily);
		},

		stickyHeader : function(sticky) {
			if (sticky == 'yes') {
				fixedNav()
				$('#sticky .layout-column').removeClass('radio-active')
				$('#sticky-yes').addClass('radio-active')
			} else {
				fixedNav()
				$('#layout .layout-column').removeClass('radio-active')
				$('#sticky-no').addClass('radio-active')
			}
			$.cookie('sticky', sticky)
		},
		navPosition : function(navPosition) {
			if (navPosition == "top") {
				$('#header').find('.navbar').addClass('navbar-fixed-top')
				$('#header-position .layout-column').removeClass('radio-active')
				$('#header-top').addClass('radio-active')
			} else {
				$('#header').find('.navbar').removeClass('navbar-fixed-top')
				$('#header-position .layout-column').removeClass('radio-active')
				$('#header-bottom').addClass('radio-active')
			}
			$.cookie('navPosition', navPosition)
		},
		layoutStyle : function(layout) {
			if (layout == 'fullWidth') {
				$('#wrapper').removeClass('boxed')
				$('#layout .layout-column').removeClass('radio-active')
				$('#full-width').addClass('radio-active')
			} else {
				$('#wrapper').addClass('boxed')
				$('#layout .layout-column').removeClass('radio-active')
				$('#boxed').addClass('radio-active')
			}

			$.cookie('layout', layout)
			if ($('.main-banner').length) {
				$('.main-banner .tp-rightarrow ').trigger('click')
			}
		},

		reset : function() {

			$.removeCookie("skin");
			$.removeCookie("layout");
			$.removeCookie("fontFamily");
			$.removeCookie("navPosition");
			$.removeCookie("header")
			$.cookie("showSwitcher", true);
			window.location.reload();

		},
		slider : function(currentList) {
			$headerStyle = $('#header-style');

			var headerItemsWidth = $('.header-items-slider:first-child').width();
			var lefty = currentList * headerItemsWidth;
			$headerStyle.find('.header-group').animate({
				'marginLeft' : -lefty
			}, 500)
			$headerStyle.find('.theme-pager li').removeClass('current')
			$headerStyle.find('.theme-pager li').eq(currentList).addClass('current')
		}
	};

	styleSwitcher.initialize();

})