<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from gebo-admin-3.tzdthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Aug 2019 10:14:32 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DonBosco Boys</title>

    <!-- Bootstrap framework -->
    <link rel="stylesheet" href="{{asset('admin/bootstrap/css/bootstrap.min.css')}}" />
    <!-- jQuery UI theme -->
    <link rel="stylesheet" href="{{asset('admin/lib/jquery-ui/css/Aristo/Aristo.css')}}" />
    <!-- breadcrumbs -->
    <link rel="stylesheet" href="{{asset('admin/lib/jBreadcrumbs/css/BreadCrumb.css')}}" />
    <!-- tooltips-->
    <link rel="stylesheet" href="{{asset('admin/lib/qtip2/jquery.qtip.min.css')}}" />
    <!-- colorbox -->
    <link rel="stylesheet" href="{{asset('admin/lib/colorbox/colorbox.css')}}" />
    <!-- code prettify -->
    <link rel="stylesheet" href="{{asset('admin/lib/google-code-prettify/prettify.css')}}" />
    <!-- sticky notifications -->
    <link rel="stylesheet" href="{{asset('admin/lib/datatables/extras/TableTools/media/css/TableTools.css')}}">
    <link rel="stylesheet" href="{{asset('admin/lib/sticky/sticky.css')}}" />
    <!-- aditional icons -->
    <link rel="stylesheet" href="{{asset('admin/img/splashy/splashy.css')}}" />
    <!-- flags -->
    <link rel="stylesheet" href="{{asset('admin/img/flags/flags.css')}}" />
    <!-- datatables -->
    <link rel="stylesheet" href="{{asset('admin/lib/datatables/extras/TableTools/media/css/TableTools.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('admin/lib/tag_handler/css/jquery.taghandler.css')}}" />
    <!-- uniform -->
    <link rel="stylesheet" href="{{asset('admin/lib/uniform/Aristo/uniform.aristo.css')}}" />
    <!-- multiselect -->
    <link rel="stylesheet" href="{{asset('admin/lib/multi-select/css/multi-select.css')}}" />
    <!-- enhanced select -->
    <link rel="stylesheet" href="{{asset('admin/lib/chosen/chosen.css')}}" />
    <!-- upload -->
    <link rel="stylesheet" href="{{asset('admin/lib/plupload/js/jquery.plupload.queue/css/plupload-gebo.css')}}" />

    <!-- font-awesome -->
    <link rel="stylesheet" href="{{asset('admin/img/font-awesome/css/font-awesome.min.css')}}" />
    <!-- calendar -->
    <link rel="stylesheet" href="{{asset('admin/lib/fullcalendar/fullcalendar_gebo.css')}}" />

    <!-- main styles -->
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}" />
    <!-- theme color-->
    <link rel="stylesheet" href="{{asset('admin/css/blue.css')}}" id="link_theme" />

    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel='stylesheet' type='text/css'>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('admin/favicon.ico')}}" />

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="{{asset('admin/css/ie.css')}}" />
    <![endif]-->

    <!--[if lt IE 9]>
    <script src="{{asset('admin/js/ie/html5.js')}}"></script>
    <script src="{{asset('admin/js/ie/respond.min.js')}}"></script>
    <script src="{{asset('admin/lib/flot/excanvas.min.js')}}"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{asset('admin/lib/datatables/extras/TableTools/media/css/TableTools.css')}}">
    <meta name="_token" content="{{csrf_token()}}"/>
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"
            integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
    @include('sweetalert::alert')


    <style type="text/css">
        #image_preview{

            border: 0px solid black;

            padding: 10px;

        }

        #image_preview img{

            width: 150px;

            padding: 5px;

        }

    </style>
</head>
<body class="full_width">
		<div id="maincontainer" class="clearfix">

    <header>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="brand pull-left" href="/home">Don Bosco</a>
{{--                    <ul class="nav navbar-nav" id="mobile-nav">--}}
{{--                        <li class="dropdown">--}}
{{--                            <a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="glyphicon glyphicon-list-alt"></span> Forms <b class="caret"></b></a>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                                <li><a href="form_elements.html">Form elements</a></li>--}}
{{--                                <li><a href="form_extended.html">Extended form elements</a></li>--}}
{{--                                <li><a href="form_validation.html">Form Validation</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="dropdown">--}}
{{--                            <a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="glyphicon glyphicon-th"></span> Components <b class="caret"></b></a>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                                <li><a href="alerts_btns.html">Alerts &amp; Buttons</a></li>--}}
{{--                                <li><a href="icons.html">Icons</a></li>--}}
{{--                                <li><a href="notifications.html">Notifications</a></li>--}}
{{--                                <li><a href="tables.html">Tables</a></li>--}}
{{--                                <li><a href="tables_more.html">Tables (more examples)</a></li>--}}
{{--                                <li><a href="tabs_accordion.html">Tabs &amp; Accordion</a></li>--}}
{{--                                <li><a href="tooltips.html">Tooltips, Popovers</a></li>--}}
{{--                                <li><a href="typography.html">Typography</a></li>--}}
{{--                                <li><a href="widgets.html">Widget boxes</a></li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a href="#">Sub menu <b class="caret-right"></b></a>--}}
{{--                                    <ul class="dropdown-menu">--}}
{{--                                        <li><a href="#">Sub menu 1.1</a></li>--}}
{{--                                        <li><a href="#">Sub menu 1.2</a></li>--}}
{{--                                        <li><a href="#">Sub menu 1.3</a></li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">Sub menu 1.4 <b class="caret-right"></b></a>--}}
{{--                                            <ul class="dropdown-menu">--}}
{{--                                                <li><a href="#">Sub menu 1.4.1</a></li>--}}
{{--                                                <li><a href="#">Sub menu 1.4.2</a></li>--}}
{{--                                                <li><a href="#">Sub menu 1.4.3</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="dropdown">--}}
{{--                            <a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="glyphicon glyphicon-wrench"></span> Plugins <b class="caret"></b></a>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                                <li><a href="charts.html">Charts</a></li>--}}
{{--                                <li><a href="calendar.html">Calendar</a></li>--}}
{{--                                <li><a href="datatable.html">Datatable</a></li>--}}
{{--                                <li><a href="dynamic_tree.html">Dynamic tree</a></li>--}}
{{--                                <li><a href="editable_elements.html">Editable elements</a></li>--}}
{{--                                <li><a href="file_manager.html">File Manager</a></li>--}}
{{--                                <li><a href="floating_header.html">Floating List Header</a></li>--}}
{{--                                <li><a href="google_maps.html">Google Maps</a></li>--}}
{{--                                <li><a href="gallery.html">Gallery Grid</a></li>--}}
{{--                                <li><a href="wizard.html">Wizard</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="dropdown">--}}
{{--                            <a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="glyphicon glyphicon-file"></span> Pages <b class="caret"></b></a>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                                <li><a href="blank.html"> Blank</a></li>--}}
{{--                                <li><a href="blog_page.html"> Blog Page</a></li>--}}
{{--                                <li><a href="chat.html"> Chat</a></li>--}}
{{--                                <li><a href="error_404.html"> Error 404</a></li>--}}
{{--                                <li><a href="invoice.html"> Invoice</a></li>--}}
{{--                                <li><a href="mailbox.html">Mailbox</a></li>--}}
{{--                                <li><a href="search_page.html">Search page</a></li>--}}
{{--                                <li><a href="user_profile.html">User profile</a></li>--}}
{{--                                <li><a href="user_static.html">User profile (static)</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
                    <ul class="nav navbar-nav user_menu pull-right">
                        <li class="hidden-phone hidden-tablet">
{{--                            <div class="nb_boxes clearfix">--}}
{{--                                <a data-toggle="modal" data-backdrop="static" href="#myMail" data-placement="bottom" data-container="body" class="label bs_ttip" title="New messages">25 <i class="splashy-mail_light"></i></a>--}}
{{--                                <a data-toggle="modal" data-backdrop="static" href="#myTasks" data-placement="bottom" data-container="body" class="label bs_ttip" title="New tasks">10 <i class="splashy-calendar_week"></i></a>--}}
{{--                            </div>--}}
                        </li>
                        <li class="divider-vertical hidden-sm hidden-xs"></li>
{{--                        <li class="dropdown">--}}
{{--                            <a href="#" class="dropdown-toggle nav_condensed" data-toggle="dropdown"><i class="flag-gb"></i> <b class="caret"></b></a>--}}
{{--                            <ul class="dropdown-menu dropdown-menu-right">--}}
{{--                                <li><a href="javascript:void(0)"><i class="flag-de"></i> Deutsch</a></li>--}}
{{--                                <li><a href="javascript:void(0)"><i class="flag-fr"></i> Français</a></li>--}}
{{--                                <li><a href="javascript:void(0)"><i class="flag-es"></i> Español</a></li>--}}
{{--                                <li><a href="javascript:void(0)"><i class="flag-ru"></i> Pусский</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        <li class="divider-vertical hidden-sm hidden-xs"></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="img/user_avatar.png" alt="" class="user_avatar">{{ Auth::user()->name }}<b class="caret"></b></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#">My Profile</a></li>
                                <li><a href="#">Another action</a></li>
                                <li class="divider"></li>
                                <li>
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

{{--        <div class="modal fade" id="myMail">--}}
{{--            <div class="modal-dialog">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>--}}
{{--                        <h3 class="modal-title">New Messages</h3>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body">--}}
{{--                        <table class="table table-condensed table-striped" data-provides="rowlink">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th>Sender</th>--}}
{{--                                <th>Subject</th>--}}
{{--                                <th>Date</th>--}}
{{--                                <th>Size</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td>Declan Pamphlett</td>--}}
{{--                                <td><a href="javascript:void(0)">Lorem ipsum dolor sit amet</a></td>--}}
{{--                                <td>23/05/2015</td>--}}
{{--                                <td>25KB</td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>Erin Church</td>--}}
{{--                                <td><a href="javascript:void(0)">Lorem ipsum dolor sit amet</a></td>--}}
{{--                                <td>24/05/2015</td>--}}
{{--                                <td>15KB</td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>Koby Auld</td>--}}
{{--                                <td><a href="javascript:void(0)">Lorem ipsum dolor sit amet</a></td>--}}
{{--                                <td>25/05/2015</td>--}}
{{--                                <td>28KB</td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>Anthony Pound</td>--}}
{{--                                <td><a href="javascript:void(0)">Lorem ipsum dolor sit amet</a></td>--}}
{{--                                <td>25/05/2015</td>--}}
{{--                                <td>33KB</td>--}}
{{--                            </tr>--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-default">Go to mailbox</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="modal fade" id="myTasks">--}}
{{--            <div class="modal-dialog">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>--}}
{{--                        <h3 class="modal-title">New Tasks</h3>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body">--}}
{{--                        <table class="table table-condensed table-striped" data-provides="rowlink">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th>id</th>--}}
{{--                                <th>Summary</th>--}}
{{--                                <th>Updated</th>--}}
{{--                                <th>Priority</th>--}}
{{--                                <th>Status</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td>P-23</td>--}}
{{--                                <td><a href="javascript:void(0)">Admin should not break if URL…</a></td>--}}
{{--                                <td>23/05/2015</td>--}}
{{--                                <td><span class="label label-danger">High</span></td>--}}
{{--                                <td>Open</td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>P-18</td>--}}
{{--                                <td><a href="javascript:void(0)">Displaying submenus in custom…</a></td>--}}
{{--                                <td>22/05/2015</td>--}}
{{--                                <td><span class="label label-warning">Medium</span></td>--}}
{{--                                <td>Reopen</td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>P-25</td>--}}
{{--                                <td><a href="javascript:void(0)">Featured image on post types…</a></td>--}}
{{--                                <td>22/05/2015</td>--}}
{{--                                <td><span class="label label-success">Low</span></td>--}}
{{--                                <td>Updated</td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>P-10</td>--}}
{{--                                <td><a href="javascript:void(0)">Multiple feed fixes and…</a></td>--}}
{{--                                <td>17/05/2015</td>--}}
{{--                                <td><span class="label label-warning">Medium</span></td>--}}
{{--                                <td>Open</td>--}}
{{--                            </tr>--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-default">Go to task manager</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

    </header>



    @include('alertify::alertify')
    @yield('body');




    <div class="sidebar">

        <div class="sidebar_inner_scroll">
            <div class="sidebar_inner">
{{--                <form action="http://gebo-admin-3.tzdthemes.com/search_page.html" class="input-group input-group-sm" method="post">--}}
{{--                    <input autocomplete="off" name="query" class="search_query form-control input-sm" size="16" placeholder="Search..." type="text">--}}
{{--                    <span class="input-group-btn"><button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button></span>--}}
{{--                </form>--}}
                <div id="side_accordion" class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="#collapseOne" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
                                <i class="glyphicon glyphicon-folder-close"></i> Blog Post
                            </a>
                        </div>
                        <div class="accordion-body collapse" id="collapseOne">
                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="{{route('allpost')}}">All Post</a></li>
                                    <li><a href="{{route('post')}}">Create post</a></li>
{{--                                    <li><a href="javascript:void(0)">Newsletters</a></li>--}}
{{--                                    <li><a href="javascript:void(0)">Comments</a></li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="#collapseTwo" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
                                <i class="glyphicon glyphicon-th"></i> Gallery
                            </a>
                        </div>
                        <div class="accordion-body collapse" id="collapseTwo">
                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="{{route('display')}}">Gallery Post</a></li>
                                    <li><a href="{{route('listEvent')}}">Galleries</a></li>
{{--                                    <li><a href="javascript:void(0)">Blog</a></li>--}}
{{--                                    <li><a href="javascript:void(0)">FAQ</a></li>--}}
{{--                                    <li><a href="javascript:void(0)">Formbuilder</a></li>--}}
{{--                                    <li><a href="javascript:void(0)">Location</a></li>--}}
{{--                                    <li><a href="javascript:void(0)">Profiles</a></li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="#collapseThree" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
                                <i class="glyphicon glyphicon-user"></i> Category
                            </a>
                        </div>
                        <div class="accordion-body collapse" id="collapseThree">
                            <div class="panel-body">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="{{route('category')}}">Create/View Category</a></li>

{{--                                    <li><a href="javascript:void(0)">Users</a></li>--}}
{{--                                    <li><a href="javascript:void(0)">Users groups</a></li>--}}
                                </ul>

                            </div>
                        </div>
                    </div>
{{--                    <div class="panel panel-default">--}}
{{--                        <div class="panel-heading">--}}
{{--                            <a href="#collapseFour" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">--}}
{{--                                <i class="glyphicon glyphicon-cog"></i> Configuration--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="accordion-body collapse in" id="collapseFour">--}}
{{--                            <div class="panel-body">--}}
{{--                                <ul class="nav nav-pills nav-stacked">--}}
{{--                                    <li class="nav-header">People</li>--}}
{{--                                    <li class="active"><a href="javascript:void(0)">Account Settings</a></li>--}}
{{--                                    <li><a href="javascript:void(0)">IP Adress Blocking</a></li>--}}
{{--                                    <li class="nav-header">System</li>--}}
{{--                                    <li><a href="javascript:void(0)">Site information</a></li>--}}
{{--                                    <li><a href="javascript:void(0)">Actions</a></li>--}}
{{--                                    <li><a href="javascript:void(0)">Cron</a></li>--}}
{{--                                    <li class="divider"></li>--}}
{{--                                    <li><a href="javascript:void(0)">Help</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="panel panel-default">--}}
{{--                        <div class="panel-heading">--}}
{{--                            <a href="#collapse7" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">--}}
{{--                                <i class="glyphicon glyphicon-th"></i> Calculator--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>

                <div class="push"></div>
            </div>

{{--            <div class="sidebar_info">--}}
{{--                <ul class="list-unstyled">--}}
{{--                    <li>--}}
{{--                        <span class="act act-warning">65</span>--}}
{{--                        <strong>New comments</strong>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <span class="act act-success">10</span>--}}
{{--                        <strong>New articles</strong>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <span class="act act-danger">85</span>--}}
{{--                        <strong>New registrations</strong>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>

    </div>
    <script data-cfasync="false" src="{{asset('admin/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('admin/lib/jquery-ui/jquery-ui-1.10.0.custom.min.js')}}"></script>
    <!-- touch events for jquery ui-->
    <script src="{{asset('admin/js/forms/jquery.ui.touch-punch.min.js')}}"></script>
    <!-- easing plugin -->
    <script src="{{asset('admin/js/jquery.easing.1.3.min.js')}}"></script>
    <!-- smart resize event -->
    <script src="{{asset('admin/js/jquery.debouncedresize.min.js')}}"></script>
    <!-- js cookie plugin -->
    <script src="{{asset('admin/js/jquery_cookie_min.js')}}"></script>
    <!-- main bootstrap js -->
    <script src="{{asset('admin/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- bootstrap plugins -->
    <script src="{{asset('admin/js/bootstrap.plugins.min.js')}}"></script>
    <!-- typeahead -->
    <script src="{{asset('admin/lib/typeahead/typeahead.min.js')}}"></script>
    <!-- code prettifier -->
    <script src="{{asset('admin/lib/google-code-prettify/prettify.min.js')}}"></script>
    <!-- sticky messages -->
    <script src="{{asset('admin/lib/sticky/sticky.min.js')}}"></script>
    <!-- lightbox -->
    <script src="{{asset('admin/lib/colorbox/jquery.colorbox.min.js')}}"></script>
    <!-- jBreadcrumbs -->
    <script src="{{asset('admin/lib/jBreadcrumbs/js/jquery.jBreadCrumb.1.1.min.js')}}"></script>
    <!-- hidden elements width/height -->
    <script src="{{asset('admin/js/jquery.actual.min.js')}}"></script>
    <!-- custom scrollbar -->
    <script src="{{asset('admin/lib/slimScroll/jquery.slimscroll.js')}}"></script>
    <!-- fix for ios orientation change -->
    <script src="{{asset('admin/js/ios-orientationchange-fix.js')}}"></script>
    <!-- to top -->
    <script src="{{asset('admin/lib/UItoTop/jquery.ui.totop.min.js')}}"></script>
    <!-- mobile nav -->
    <script src="{{asset('admin/}js/selectNav.js')}}"></script>
    <!-- moment.js date library -->
    <script src="{{asset('admin/lib/moment/moment.min.js')}}"></script>

    <!-- common functions -->
    <script src="{{asset('admin/js/pages/gebo_common.js')}}"></script>

    <script src="{{asset('admin/lib/jquery-ui/external/globalize.js')}}"></script>
    <!-- masked inputs -->
    <script src="{{asset('admin/js/forms/jquery.inputmask.min.js')}}"></script>
    <!-- multi-column layout -->
    <script src="{{asset('admin/js/jquery.imagesloaded.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.wookmark.js')}}"></script>
    <!-- responsive table -->
    <script src="{{asset('admin/js/jquery.mediaTable.min.js')}}"></script>
    <!-- small charts -->
    <script src="{{asset('admin/js/jquery.peity.min.js')}}"></script>
    <!-- charts -->
    <script src="{{asset('admin/lib/flot/jquery.flot.min.js')}}"></script>
    <script src="{{asset('admin/lib/flot/jquery.flot.resize.min.js')}}"></script>
    <script src="{{asset('admin/lib/flot/jquery.flot.pie.min.js')}}"></script>
    <script src="{{asset('admin/lib/flot.tooltip/jquery.flot.tooltip.min.js')}}"></script>
    <!-- calendar -->
    <script src="{{asset('admin/lib/fullcalendar/fullcalendar.min.js')}}"></script>
    <!-- sortable/filterable list -->
    <script src="{{asset('admin/lib/list_js/list.min.js')}}"></script>
    <script src="{{asset('admin/lib/list_js/plugins/paging/list.paging.min.js')}}"></script>
    <!-- dashboard functions -->
    <script src="{{asset('admin/js/pages/gebo_dashboard.js')}}"></script>

    <script src="{{asset('admin/lib/chosen/chosen.jquery.min.js')}}"></script>
    <!-- TinyMce WYSIWG editor -->
    <script src="{{asset('admin/lib/tinymce/jquery.tinymce.min.js')}}"></script>

    <script src="{{asset('admin/js/forms/jquery.counter.min.js')}}"></script>

    <script src="{{asset('admin/js/pages/gebo_forms.js')}}"></script>
    <!-- plupload and all it's runtimes and the jQuery queue widget (attachments) -->
    <script type="text/javascript" src="{{asset('admin/lib/plupload/js/plupload.full.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/lib/plupload/js/jquery.plupload.queue/jquery.plupload.queue.full.js')}}"></script>
    <script src="https://cdn.rawgit.com/alertifyjs/alertify.js/v1.0.10/dist/js/alertify.js"></script>
    <script src="{{asset('admin/lib/smoke/smoke.js')}}"></script>
    <!-- notifications functions -->
    <script src="{{asset('admin/js/pages/gebo_notifications.js')}}"></script>

    <script src="{{asset('admin/lib/datatables/jquery.dataTables.min.js')}}"></script>
    <!-- additional sorting for datatables -->
    <script src="{{asset('admin/lib/datatables/jquery.dataTables.sorting.js')}}"></script>
    <!-- datatables bootstrap integration -->
    <script src="{{asset('admin/lib/datatables/jquery.dataTables.bootstrap.min.js')}}"></script>
    <!-- tables functions -->
    <script src="{{asset('admin/js/pages/gebo_tables.js')}}"></script>

    <script>
        $(document).ready(function() {
            //* jQuery.browser.mobile (http://detectmobilebrowser.com/)
            //* jQuery.browser.mobile will be true if the browser is a mobile device
            (function(a){jQuery.browser.mobile=/android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);
            //replace themeforest iframe
            if(jQuery.browser.mobile) {
                if (top !== self) top.location.href = self.location.href;
            }
        });
    </script>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','{{asset('admin/www.google-analytics.com/analytics.js')}}','ga');

            ga('create', 'UA-65389904-1', 'auto');
            ga('send', 'pageview');

        </script>

    <script>
        //Global object to store the files
        let fileStorage = {};

        $(document).ready(function(){
            //Handle the file change
            $("input[type='file']").change(function(e){
                //Get the id
                let id = e.target.id;

                //Get the files
                let files = e.target.files;

                //Store the file
                storeFile(id, files);

                //Show the complete icon
                $(this).siblings('.icon').hide();
                $(this).parent().removeClass('drawn');
                setTimeout(() => {
                    $(this).parent().addClass('drawn');
                }, 50);
            });

            //Store the file for particular filepicker
            let storeFile = (id, files) => {
                fileStorage[id] = files;

                //Update the file count
                $(`[data-id="${id}"] > .file-total-viewer`).text(files.length);
            }

            //Show file list
            $('[data-toggle="popover"]').popover({
                html: true,
                title: "Files",
                placement:"bottom",
                content: function () {
                    //Get the id of the file picker
                    let id = $(this).attr('data-id');

                    //Get all the files of this filepicker
                    let items = fileStorage[id];

                    //Preview the file
                    let template = '<div class="row">';
                    if(items && items.length){
                        for(let val of items){
                            template += "<div class='col-12 pb10'><span class='popover-content-file-name'>" + val.name + "</span><span class='popover-content-remove' data-target='" + id + "' data-name='" + val.name + "' data-type='upload'><i class='fas fa-trash'></i></span></div>"
                        }
                    }else{
                        template += "<div class='col-12 pb10'><span class='popover-content'>No file</span></div>";
                    }

                    template += '</div>';
                    return template;
                }
            });

            //Prevent multiple popover
            $('body').on('click', function (e) {
                $('[data-toggle="popover"],[data-original-title]').each(function () {
                    //the 'is' for buttons that trigger popups
                    //the 'has' for icons within a button that triggers a popup
                    if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                        (($(this).popover('hide').data('bs.popover') || {}).inState || {}).click = false;  // fix for BS 3.3.6
                    }
                });
            });

            //Delete files
            $(document).on('click', '.popover-content-remove', function (e) {
                //Get the id whose file to delete
                let id = $(this).attr('data-target');

                //Get the name of the file to delete
                let name = $(this).attr('data-name');

                //Confirm delete
                let isDelete = confirm("Do you really want to delete this file?");

                //If confirmed
                if (isDelete) {
                    //Remove the requested file
                    let files = Object.values(fileStorage[id]);
                    let newArr = files.filter((e) => { return e.name !== name; });

                    //Update the list
                    storeFile(id, newArr);

                    //If there is no file then show No file
                    if(newArr.length === 0){
                        $(this).parent().parent().append("<div class='col-12 pb10'><span class='popover-content'>No file</span></div>");
                    }

                    //Remove the current file
                    $(this).parent().remove();
                }
            });
        });
    </script>

</div>
</body>
<script type="text/javascript">



    $("#uploadFile").change(function(){

        $('#image_preview').html("");

        var total_file=document.getElementById("uploadFile").files.length;

        for(var i=0;i<total_file;i++)

        {

            $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");

        }

    });



    $('form').ajaxForm(function()

    {

        alert("Uploaded SuccessFully");

    });



</script>
<!-- Mirrored from gebo-admin-3.tzdthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Aug 2019 10:16:01 GMT -->
</html>
