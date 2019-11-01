<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from theemon.com/c/charity/LivePreview/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Aug 2019 19:02:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Bosco Boys Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,300italic,300,700%7CPlayfair+Display:400,700italic%7CRoboto:300%7CMontserrat:400,700%7COpen+Sans:400,300%7CLibre+Baskerville:400,400italic" rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/bootstrap-theme.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/revolution-slider/css/settings.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/global.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/skin.css')}}" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
    .ajax-loading{
        text-align: center;
    }
</style>
</head>
<body>

<div id="wrapper">
    <!--Header Section Start Here -->
    <header id="header">
        <div class="container">
            <div class="row primary-header">
                <a href="{{route('homepage')}}" class="col-xs-12 col-sm-5 brand" title="Welcome to DonBosco Charity">
                     <img src="{{asset('Logo@1000x.png')}}" alt="Charity" style="width:70px; height:50px">Bosco Boys Home</a>
                <div class="social-links col-xs-12 col-sm-7">
                    <a href="/donations" class="btn btn-default btn-volunteer">Donate</a>
                    <ul class="social-icons hidden-xs">
{{--                        <li>--}}
{{--                            <a href="https://facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>--}}
{{--                        </li>--}}
                        <li>
                            <a href="https://twitter.com/BoysBosco" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
{{--                        <li>--}}
{{--                            <a href="http://dribble.com/" target="_blank"><i class="fa fa-linkedin"></i></a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="https://pinterest.com/" target="_blank"><i class="fa fa-vimeo-square"></i></a>--}}
{{--                        </li>--}}

                    </ul>
                </div>
            </div>
        </div>
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <nav>
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="{{route('homepage')}}" class="submenu-icon">Home <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
                            </li>

                            <li>
                                <a href="/about-us" class="submenu-icon">About us <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
                                <!-- Drop Down  -->
                            </li>
                            <li>
                                <a href="/our-objectives" class="submenu-icon">Our Objectives <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
                            </li>
                            <li>
                                <a href="{{route('allBlog')}}" class="submenu-icon">Our Blog <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
                            </li>

                            <li>
                                <a href="{{route('allGallery')}}" class="submenu-icon">Gallery <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
                                <!-- Drop Down  -->
                            </li>

                            <li>
                                <a href="/contact">contact us</a>
                            </li>

                        </ul>
                    </nav>

{{--                    <form class="navbar-form navbar-right search-form" role="search">--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="text" class="form-control" placeholder="Search Here">--}}
{{--                        </div>--}}
{{--                        <button type="submit">--}}
{{--                            <i class="icon-search"></i>--}}
{{--                        </button>--}}
{{--                    </form>--}}
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </div>

    </header>

    @yield('content');

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="footer-logo">
                        <a href="/" title="Welcome to Charity"><img src="{{asset('Logo@1000x.png')}}" alt="Don bosco" style="width:70px; height:50px"></a>
                    </div>
                    <p>
                        Bosco Boys Street Children Home is an establishment dedicated to improving the lives of vulnerable children (Street Children) at risk providing shelter, education, emotional support, protection and life skill empowerment for Lagos state, and Nigeria at large. It is managed by the Salesians of St. John Bosco, an international religious congregation of the Catholic Church founded by St. John Bosco.
                    </p>
                    <address>
                        <span> <i class="fa fa-home"></i> <span>3, Prince Adefowope Martins Street, Unity Estate Ogudu, Lagos</span> </span>
                        <span> <i class="fa fa-phone-square"></i> <span>+234-80661580006</span> </span>
                        <span> <i class="fa fa-envelope"></i> <span><a href="mailto:boscoboyslagos@gmail.com">boscoboyslagos@gmail.com</a> </span>
                    </address>

                </div>
                <div class="col-xs-12 col-sm-4 twitter-update">
{{--                    <h6>Twitter Feed</h6>--}}
{{--                    <p>--}}
{{--                        <a href="#"> <span class="charity">@charity</span> We are a charity trust that dedicatedly work for several countries around the globe.  Twitter Alerts will provide your some critical information about those people that need help of yours. <span class="comment-time">2 hours ago</span> </a>--}}
{{--                    </p>--}}
{{--                    <p>--}}
{{--                        <a href="#"> <span class="charity">@charity</span> Use Twitter as the best conversation platform to make the people aware of the worst situation that many of Africans are facing. Tweet for them and raise fund in the best possible way. <span class="comment-time">2 hours ago</span> </a>--}}
{{--                    </p>--}}
                </div>
                <div class="col-xs-12 col-sm-6 offset-6">
                    <h6>Newsletter Signup</h6>
                    <p>

                        Sign up your account to check our newsletter that will undoubtedly help you acquainted with current scenario.
                    </p>
                    <form role="form" class="sign-up">

                        <div class="input-group">
                            <input class="form-control" type="email" placeholder="Email">
                            <div class="input-group-addon">
                                <input type="submit" class="btn btn-theme" value="Submit">
                            </div>
                        </div>

                    </form>

                    <h6>Follow us</h6>
                    <ul class="social-icons">
{{--                        <li>--}}
{{--                            <a href="https://facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>--}}
{{--                        </li>--}}
                        <li>
                            <a href="https://twitter.com/BoysBosco" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
{{--                        <li>--}}
{{--                            <a href="http://dribble.com/" target="_blank"><i class="fa fa-dribbble"></i></a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="https://pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="https://instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>--}}
{{--                        </li>--}}
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
								<span> &copy; Copyright {{date('Y')}}, All Rights Reserved by <a href="mailto:sprintcorp7@gmail.com">Zattis Technology</a>.
									</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer Section End Here -->

</div>
<!-- join now form popup -->
<div class="modal join-now-form">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <header class="page-header">
                    <h2>Donate<strong>to Help a street child</strong></h2>
                </header>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('payment')}}" role="form">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="name-join">First Name<span>*</span></label>
                                <input type="text" name="first_name" class="form-control" id="name-join" required>
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="last-name-join">Last Name<span>*</span></label>
                                <input type="text" name="last_name" class="form-control" id="last-name-join" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="email-join">Email<span>*</span></label>
                                <input type="text" name="email" class="form-control" id="email-join" required>
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="phone-join">Phone<span>*</span></label>
                                <input type="text" name="phone" class="form-control" id="phone-join" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="zip-code-join">Amount<span>*</span></label>
                                <input type="number" name="amount" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12">
                                <label for="message-join">Message(Optional)<span>*</span></label>
                                <textarea class="form-control" name="message" id="message-join"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-default pull-right">
                                    Submit
                                </button>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12">
                                <p class="forms-notes">

                                </p>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- join now form popup -->
<!-- donation form popup -->

<div class="modal donate-form">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <header class="page-header">
                    <h2>You are donating to. <strong>Example Causes name</strong></h2>
                </header>
            </div>
            <div class="modal-body">
                <form role="form">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12 col-sm-6">
                                <label>How much would you like to donate ?</label>

                                <div class="choose-pricing">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default active">
                                            $12
                                        </button>
                                        <button type="button" class="btn btn-default">
                                            $22
                                        </button>
                                        <button type="button" class="btn btn-default">
                                            $32
                                        </button>

                                        <input type="text" placeholder="Custom" class="inpt-first form-control">

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row display">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12 col-sm-6">
                                <div class="dropdown">
                                    <button class="btn btn-width dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                        <small> Donation Type</small>
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="#">Every Monthly (Recurring)</a>
                                        </li>
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1" href="#">One Time Donation</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="name">Name<span>*</span></label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="last-name">Last Name<span>*</span></label>
                                <input type="text" class="form-control" id="last-name">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="name">Email<span>*</span></label>
                                <input type="text" class="form-control" id="email">
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="phone">Phone<span>*</span></label>
                                <input type="text" class="form-control" id="phone">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="message">Address<span>*</span></label>
                                <textarea class="form-control" id="message"></textarea>
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <label for="add-note">Additional Note</label>
                                <textarea class="form-control" id="add-note"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12">
                                <input type="submit" value="DONATE" class="btn btn-default pull-right">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group col-xs-12">
                                <p class="forms-notes">
                                    Note: Lorem ipsum dolor sit amet
                                </p>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- donation form popup -->

<script data-cfasync="false" src="{{asset('asset/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.min.js')}}"></script>
<!-- Switcher Style Js -->
<script src="assets/js/style-switcher/assets/js/style.switcher.js')}}"></script>
<script src="{{asset('asset/js/jquery.cookie.js')}}"></script>
<!-- Switcher Style End Js -->
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.easing.min.js')}}"></script>
<!--Main Slider Js-->
<script src="{{asset('asset/revolution-slider/js/jquery.themepunch.plugins.min.js')}}"></script>
<script src="{{asset('asset/revolution-slider/js/jquery.themepunch.revolution.js')}}"></script>
<!--Main Slider End Js-->
<script src="{{asset('asset/js/jquery.flexslider.js')}}"></script>
<script src="{{asset('asset/js/site.js')}}"></script>

<script>
    var page = 1; //track user scroll as page number, right now page number is 1
    load_more(page); //initial content load
    $(window).scroll(function() { //detect page scroll
        if($(window).scrollTop() + $(window).height() >= $(document).height()) { //if user scrolled from top to bottom of the page
            page++; //page number increment
            load_more(page); //load content
        }
    });
    function load_more(page){
        $.ajax(
            {
                url: '?page=' + page,
                type: "get",
                datatype: "html",
                beforeSend: function()
                {
                    $('.ajax-loading').show();
                }
            })
            .done(function(data)
            {
                if(data.length == 0){
                    console.log(data.length);

                    //notify user if nothing to load
                    $('.ajax-loading').html("No post available!");
                    return;
                }
                $('.ajax-loading').hide(); //hide loading animation once data is received
                $("#results").append(data); //append data into #results element
            })
            .fail(function(jqXHR, ajaxOptions, thrownError)
            {
                alert('No response from server');
            });
    }
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d7ff61ac22bdd393bb62364/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


</body>

<!-- Mirrored from theemon.com/c/charity/LivePreview/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Aug 2019 19:05:04 GMT -->
</html>
