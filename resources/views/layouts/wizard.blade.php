<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

    <title> @yield('title') | JEDA </title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- SmartAdmin Styles : Caution! DO NOT change the order -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-production-plugins.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-production.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-skins.min.css') }}">

    <!-- SmartAdmin RTL Support -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-rtl.min.css') }}">

    <!-- We recommend you use "your_style.css" to override SmartAdmin
         specific styles this will also ensure you retrain your customization with each SmartAdmin update.
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/your_style.css') }}"> -->

    <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/demo.min.css') }}">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="{{ asset('img/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('img/favicon/favicon.ico') }}" type="image/x-icon">

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

    <!-- Specifying a Webpage Icon for Web Clip 
         Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
    <link rel="apple-touch-icon" href="{{ asset('img/splash/sptouch-icon-iphone.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/splash/touch-icon-ipad.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/splash/touch-icon-iphone-retina.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/splash/touch-icon-ipad-retina.png') }}">

    <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Startup image for web apps -->
    <link rel="apple-touch-startup-image" href="{{ asset('img/splash/ipad-landscape.png') }}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
    <link rel="apple-touch-startup-image" href="{{ asset('img/splash/ipad-portrait.png') }}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
    <link rel="apple-touch-startup-image" href="{{ asset('img/splash/iphone.png') }}" media="screen and (max-device-width: 320px)">
    
    @stack('css')
</head>

<!--

TABLE OF CONTENTS.

Use search to find needed section.

===================================================================

|  01. #CSS Links                |  all CSS links and file paths  |
|  02. #FAVICONS                 |  Favicon links and file paths  |
|  03. #GOOGLE FONT              |  Google font link              |
|  04. #APP SCREEN / ICONS       |  app icons, screen backdrops   |
|  05. #BODY                     |  body tag                      |
|  06. #HEADER                   |  header tag                    |
|  07. #PROJECTS                 |  project lists                 |
|  08. #TOGGLE LAYOUT BUTTONS    |  layout buttons and actions    |
|  09. #MOBILE                   |  mobile view dropdown          |
|  10. #SEARCH                   |  search field                  |
|  11. #NAVIGATION               |  left panel & navigation       |
|  12. #RIGHT PANEL              |  right panel userlist          |
|  13. #MAIN PANEL               |  main panel                    |
|  14. #MAIN CONTENT             |  content holder                |
|  15. #PAGE FOOTER              |  page footer                   |
|  16. #SHORTCUT AREA            |  dropdown shortcuts area       |
|  17. #PLUGINS                  |  all scripts and plugins       |

===================================================================

-->

<!-- #BODY -->
<!-- Possible Classes

    * 'smart-style-{SKIN#}'
    * 'smart-rtl'         - Switch theme mode to RTL
    * 'menu-on-top'       - Switch to top navigation (no DOM change required)
    * 'no-menu'			  - Hides the menu completely
    * 'hidden-menu'       - Hides the main menu but still accessable by hovering over left edge
    * 'fixed-header'      - Fixes the header
    * 'fixed-navigation'  - Fixes the main menu
    * 'fixed-ribbon'      - Fixes breadcrumb
    * 'fixed-page-footer' - Fixes footer
    * 'container'         - boxed layout mode (non-responsive: will not work with fixed-navigation & fixed-ribbon)
-->
<body class="">

<!-- HEADER -->
<header id="header">
    <div id="logo-group">

        <!-- PLACE YOUR LOGO HERE -->
        <span id="logo"> <img src="img/logo.png') }}" alt="SmartAdmin"> </span>
        <!-- END LOGO PLACEHOLDER -->

        <!-- Note: The activity badge color changes when clicked and resets the number to 0
        Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
        <span id="activity" class="activity-dropdown"> <i class="fa fa-user"></i> <b class="badge"> 21 </b> </span>

        <!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
        <div class="ajax-dropdown">

            <!-- the ID links are fetched via AJAX to the ajax container "ajax-notifications" -->
            <div class="btn-group btn-group-justified" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" name="activity" id="ajax/notify/mail.html">
                    Msgs (14) </label>
                <label class="btn btn-default">
                    <input type="radio" name="activity" id="ajax/notify/notifications.html">
                    notify (3) </label>
                <label class="btn btn-default">
                    <input type="radio" name="activity" id="ajax/notify/tasks.html">
                    Tasks (4) </label>
            </div>

            <!-- notification content -->
            <div class="ajax-notifications custom-scroll">

                <div class="alert alert-transparent">
                    <h4>Click a button to show messages here</h4>
                    This blank page message helps protect your privacy, or you can show the first message here automatically.
                </div>

                <i class="fa fa-lock fa-4x fa-border"></i>

            </div>
            <!-- end notification content -->

            <!-- footer: refresh area -->
            <span> Last updated on: 12/12/2013 9:43AM
						<button type="button" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Loading..." class="btn btn-xs btn-default pull-right">
							<i class="fa fa-refresh"></i>
						</button> </span>
            <!-- end footer -->

        </div>
        <!-- END AJAX-DROPDOWN -->
    </div>

    <!-- projects dropdown -->
    <div class="project-context hidden-xs">

        <span class="label">Projects:</span>
        <span class="project-selector dropdown-toggle" data-toggle="dropdown">Recent projects <i class="fa fa-angle-down"></i></span>

        <!-- Suggestion: populate this list with fetch and push technique -->
        <ul class="dropdown-menu">
            <li>
                <a href="javascript:void(0);">Online e-merchant management system - attaching integration with the iOS</a>
            </li>
            <li>
                <a href="javascript:void(0);">Notes on pipeline upgradee</a>
            </li>
            <li>
                <a href="javascript:void(0);">Assesment Report for merchant account</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="javascript:void(0);"><i class="fa fa-power-off"></i> Clear</a>
            </li>
        </ul>
        <!-- end dropdown-menu-->

    </div>
    <!-- end projects dropdown -->

    <!-- pulled right: nav area -->
    <div class="pull-right">

        <!-- collapse menu button -->
        <div id="hide-menu" class="btn-header pull-right">
            <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
        </div>
        <!-- end collapse menu -->

        <!-- #MOBILE -->
        <!-- Top menu profile link : this shows only when top menu is active -->
        <ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
            <li class="">
                <a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown">
                    <img src="img/avatars/sunny.png') }}" alt="John Doe" class="online" />
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="login.html" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- logout button -->
        <div id="logout" class="btn-header transparent pull-right">
            <span> <a href="login.html" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a> </span>
        </div>
        <!-- end logout button -->

        <!-- search mobile button (this is hidden till mobile view port) -->
        <div id="search-mobile" class="btn-header transparent pull-right">
            <span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
        </div>
        <!-- end search mobile button -->

        <!-- input: search field -->
        <form action="search.html" class="header-search pull-right">
            <input id="search-fld"  type="text" name="param" placeholder="Find reports and more" data-autocomplete='[
					"ActionScript",
					"AppleScript",
					"Asp",
					"BASIC",
					"C",
					"C++",
					"Clojure",
					"COBOL",
					"ColdFusion",
					"Erlang",
					"Fortran",
					"Groovy",
					"Haskell",
					"Java",
					"JavaScript",
					"Lisp",
					"Perl",
					"PHP",
					"Python",
					"Ruby",
					"Scala",
					"Scheme"]'>
            <button type="submit">
                <i class="fa fa-search"></i>
            </button>
            <a href="javascript:void(0);" id="cancel-search-js" title="Cancel Search"><i class="fa fa-times"></i></a>
        </form>
        <!-- end input: search field -->

        <!-- fullscreen button -->
        <div id="fullscreen" class="btn-header transparent pull-right">
            <span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
        </div>
        <!-- end fullscreen button -->

        <!-- #Voice Command: Start Speech -->
        <div id="speech-btn" class="btn-header transparent pull-right hidden-sm hidden-xs">
            <div>
                <a href="javascript:void(0)" title="Voice Command" data-action="voiceCommand"><i class="fa fa-microphone"></i></a>
                <div class="popover bottom"><div class="arrow"></div>
                    <div class="popover-content">
                        <h4 class="vc-title">Voice command activated <br><small>Please speak clearly into the mic</small></h4>
                        <h4 class="vc-title-error text-center">
                            <i class="fa fa-microphone-slash"></i> Voice command failed
                            <br><small class="txt-color-red">Must <strong>"Allow"</strong> Microphone</small>
                            <br><small class="txt-color-red">Must have <strong>Internet Connection</strong></small>
                        </h4>
                        <a href="javascript:void(0);" class="btn btn-success" onclick="commands.help()">See Commands</a>
                        <a href="javascript:void(0);" class="btn bg-color-purple txt-color-white" onclick="$('#speech-btn .popover').fadeOut(50);">Close Popup</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end voice command -->

        <!-- multiple lang dropdown : find all flags in the flags page -->
        <ul class="header-dropdown-list hidden-xs">
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="img/blank.gif" class="flag flag-us" alt="United States"> <span> English (US) </span> <i class="fa fa-angle-down"></i> </a>
                <ul class="dropdown-menu pull-right">
                    <li class="active">
                        <a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-us" alt="United States"> English (US)</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-fr" alt="France"> Français</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-es" alt="Spanish"> Español</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-de" alt="German"> Deutsch</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-jp" alt="Japan"> 日本語</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-cn" alt="China"> 中文</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-it" alt="Italy"> Italiano</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-pt" alt="Portugal"> Portugal</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-ru" alt="Russia"> Русский язык</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-kr" alt="Korea"> 한국어</a>
                    </li>

                </ul>
            </li>
        </ul>
        <!-- end multiple lang -->

    </div>
    <!-- end pulled right: nav area -->

</header>
<!-- END HEADER -->

<!-- Left panel : Navigation area -->
<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it --> 
					
					<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
						<img src="img/avatars/sunny.png') }}" alt="me" class="online" /> 
						<span>
							john.doe 
						</span>
						<i class="fa fa-angle-down"></i>
					</a> 
					
				</span>
    </div>
    <!-- end user info -->

    <nav>
        <!-- 
        NOTE: Notice the gaps after each icon usage <i></i>..
        Please note that these links work a bit different than
        traditional href="" links. See documentation for details.
        -->

        <ul>
            <li>
                <a href="#" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
                <ul>
                    <li>
                        <a href="index.html" title="Dashboard"><span class="menu-item-parent">Analytics Dashboard</span></a>
                    </li>
                    <li class="">
                        <a href="dashboard-social.html" title="Dashboard"><span class="menu-item-parent">Social Wall</span></a>
                    </li>
                </ul>
            </li>
            <li class="top-menu-invisible">
                <a href="#"><i class="fa fa-lg fa-fw fa-cube txt-color-blue"></i> <span class="menu-item-parent">SmartAdmin Intel</span></a>
                <ul>
                    <li class="">
                        <a href="layouts.html" title="Dashboard"><i class="fa fa-lg fa-fw fa-gear"></i> <span class="menu-item-parent">App Layouts</span></a>
                    </li>
                    <li class="">
                        <a href="skins.html" title="Dashboard"><i class="fa fa-lg fa-fw fa-picture-o"></i> <span class="menu-item-parent">Prebuilt Skins</span></a>
                    </li>
                    <li>
                        <a href="applayout.html"><i class="fa fa-cube"></i> App Settings</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="inbox.html"><i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Outlook</span> <span class="badge pull-right inbox-badge margin-right-13">14</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Graphs</span></a>
                <ul>
                    <li>
                        <a href="flot.html">Flot Chart</a>
                    </li>
                    <li>
                        <a href="morris.html">Morris Charts</a>
                    </li>
                    <li>
                        <a href="sparkline-charts.html">Sparklines</a>
                    </li>
                    <li>
                        <a href="easypie-charts.html">EasyPieCharts</a>
                    </li>
                    <li>
                        <a href="dygraphs.html">Dygraphs</a>
                    </li>
                    <li>
                        <a href="chartjs.html">Chart.js</a>
                    </li>
                    <li>
                        <a href="hchartable.html">HighchartTable <span class="badge pull-right inbox-badge bg-color-yellow">new</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Tables</span></a>
                <ul>
                    <li>
                        <a href="table.html">Normal Tables</a>
                    </li>
                    <li>
                        <a href="datatables.html">Data Tables <span class="badge inbox-badge bg-color-greenLight hidden-mobile">responsive</span></a>
                    </li>
                    <li>
                        <a href="jqgrid.html">Jquery Grid</a>
                    </li>
                </ul>
            </li>
            <li class="active">
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Forms</span></a>
                <ul>
                    <li>
                        <a href="form-elements.html">Smart Form Elements</a>
                    </li>
                    <li>
                        <a href="form-templates.html">Smart Form Layouts</a>
                    </li>
                    <li>
                        <a href="validation.html">Smart Form Validation</a>
                    </li>
                    <li>
                        <a href="bootstrap-forms.html">Bootstrap Form Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-validator.html">Bootstrap Form Validation</a>
                    </li>
                    <li>
                        <a href="plugins.html">Form Plugins</a>
                    </li>
                    <li class="active">
                        <a href="wizard.html">Wizards</a>
                    </li>
                    <li>
                        <a href="other-editors.html">Bootstrap Editors</a>
                    </li>
                    <li>
                        <a href="dropzone.html">Dropzone</a>
                    </li>
                    <li>
                        <a href="image-editor.html">Image Cropping</a>
                    </li>
                    <li>
                        <a href="ckeditor.html">CK Editor</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">UI Elements</span></a>
                <ul>
                    <li>
                        <a href="general-elements.html">General Elements</a>
                    </li>
                    <li>
                        <a href="buttons.html">Buttons</a>
                    </li>
                    <li>
                        <a href="#">Icons</a>
                        <ul>
                            <li>
                                <a href="fa.html"><i class="fa fa-plane"></i> Font Awesome</a>
                            </li>
                            <li>
                                <a href="glyph.html"><i class="glyphicon glyphicon-plane"></i> Glyph Icons</a>
                            </li>
                            <li>
                                <a href="flags.html"><i class="fa fa-flag"></i> Flags</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="grid.html">Grid</a>
                    </li>
                    <li>
                        <a href="treeview.html">Tree View</a>
                    </li>
                    <li>
                        <a href="nestable-list.html">Nestable Lists</a>
                    </li>
                    <li>
                        <a href="jqui.html">JQuery UI</a>
                    </li>
                    <li>
                        <a href="typography.html">Typography</a>
                    </li>
                    <li>
                        <a href="#">Six Level Menu</a>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-folder-open"></i> Item #2</a>
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-fw fa-folder-open"></i> Sub #2.1 </a>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-fw fa-file-text"></i> Item #2.1.1</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-fw fa-plus"></i> Expand</a>
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-folder-open"></i> Item #3</a>

                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-fw fa-folder-open"></i> 3ed Level </a>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="inactive"><i class="fa fa-fw fa-folder-open"></i> Item #4 (disabled)</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="widgets.html"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Widgets</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-cloud"><em>3</em></i> <span class="menu-item-parent">Cool Features!</span></a>
                <ul>
                    <li>
                        <a href="calendar.html"><i class="fa fa-lg fa-fw fa-calendar"></i> <span class="menu-item-parent">Calendar</span></a>
                    </li>
                    <li>
                        <a href="gmap-xml.html"><i class="fa fa-lg fa-fw fa-map-marker"></i> <span class="menu-item-parent">GMap Skins</span><span class="badge bg-color-greenLight pull-right inbox-badge">9</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-puzzle-piece"></i> <span class="menu-item-parent">App Views</span></a>
                <ul>
                    <li>
                        <a href="projects.html"><i class="fa fa-file-text-o"></i> Projects</a>
                    </li>
                    <li>
                        <a href="blog.html"><i class="fa fa-paragraph"></i> Blog</a>
                    </li>
                    <li>
                        <a href="gallery.html"><i class="fa fa-picture-o"></i> Gallery</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-comments"></i> Forum Layout</a>
                        <ul>
                            <li><a href="forum.html">General View</a></li>
                            <li><a href="forum-topic.html">Topic View</a></li>
                            <li><a href="forum-post.html">Post View</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="profile.html"><i class="fa fa-group"></i> Profile</a>
                    </li>
                    <li>
                        <a href="timeline.html"><i class="fa fa-clock-o"></i> Timeline</a>
                    </li>
                    <li>
                        <a href="search.html"><i class="fa fa-search"></i>  Search Page</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-shopping-cart"></i> <span class="menu-item-parent">E-Commerce</span></a>
                <ul>
                    <li><a href="orders.html">Orders</a></li>
                    <li><a href="products-view.html">Products View</a></li>
                    <li><a href="products-detail.html">Products Detail</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-windows"></i> <span class="menu-item-parent">Miscellaneous</span></a>
                <ul>
                    <li>
                        <a href="../Landing_Page/" target="_blank">Landing Page <i class="fa fa-external-link"></i></a>
                    </li>
                    <li>
                        <a href="pricing-table.html">Pricing Tables</a>
                    </li>
                    <li>
                        <a href="invoice.html">Invoice</a>
                    </li>
                    <li>
                        <a href="login.html" target="_top">Login</a>
                    </li>
                    <li>
                        <a href="register.html" target="_top">Register</a>
                    </li>
                    <li>
                        <a href="forgotpassword.html" target="_top">Forgot Password</a>
                    </li>
                    <li>
                        <a href="lock.html" target="_top">Locked Screen</a>
                    </li>
                    <li>
                        <a href="error404.html">Error 404</a>
                    </li>
                    <li>
                        <a href="error500.html">Error 500</a>
                    </li>
                    <li>
                        <a href="blank_.html">Blank Page</a>
                    </li>
                </ul>
            </li>
            <li class="chat-users top-menu-invisible">
                <a href="#"><i class="fa fa-lg fa-fw fa-comment-o"><em class="bg-color-pink flash animated">!</em></i> <span class="menu-item-parent">Smart Chat API <sup>beta</sup></span></a>
                <ul>
                    <li>
                        <!-- DISPLAY USERS -->
                        <div class="display-users">

                            <input class="form-control chat-user-filter" placeholder="Filter" type="text">

                            <a href="#" class="usr"
                               data-chat-id="cha1"
                               data-chat-fname="Sadi"
                               data-chat-lname="Orlaf"
                               data-chat-status="busy"
                               data-chat-alertmsg="Sadi Orlaf is in a meeting. Please do not disturb!"
                               data-chat-alertshow="true"
                               data-rel="popover-hover"
                               data-placement="right"
                               data-html="true"
                               data-content="
											<div class='usr-card'>
												<img src='img/avatars/5.png' alt='Sadi Orlaf'>
												<div class='usr-card-content'>
													<h3>Sadi Orlaf</h3>
													<p>Marketing Executive</p>
												</div>
											</div>
										">
                                <i></i>Sadi Orlaf
                            </a>

                            <a href="#" class="usr"
                               data-chat-id="cha2"
                               data-chat-fname="Jessica"
                               data-chat-lname="Dolof"
                               data-chat-status="online"
                               data-chat-alertmsg=""
                               data-chat-alertshow="false"
                               data-rel="popover-hover"
                               data-placement="right"
                               data-html="true"
                               data-content="
											<div class='usr-card'>
												<img src='img/avatars/1.png' alt='Jessica Dolof'>
												<div class='usr-card-content'>
													<h3>Jessica Dolof</h3>
													<p>Sales Administrator</p>
												</div>
											</div>
										">
                                <i></i>Jessica Dolof
                            </a>

                            <a href="#" class="usr"
                               data-chat-id="cha3"
                               data-chat-fname="Zekarburg"
                               data-chat-lname="Almandalie"
                               data-chat-status="online"
                               data-rel="popover-hover"
                               data-placement="right"
                               data-html="true"
                               data-content="
											<div class='usr-card'>
												<img src='img/avatars/3.png' alt='Zekarburg Almandalie'>
												<div class='usr-card-content'>
													<h3>Zekarburg Almandalie</h3>
													<p>Sales Admin</p>
												</div>
											</div>
										">
                                <i></i>Zekarburg Almandalie
                            </a>

                            <a href="#" class="usr"
                               data-chat-id="cha4"
                               data-chat-fname="Barley"
                               data-chat-lname="Krazurkth"
                               data-chat-status="away"
                               data-rel="popover-hover"
                               data-placement="right"
                               data-html="true"
                               data-content="
											<div class='usr-card'>
												<img src='img/avatars/4.png' alt='Barley Krazurkth'>
												<div class='usr-card-content'>
													<h3>Barley Krazurkth</h3>
													<p>Sales Director</p>
												</div>
											</div>
										">
                                <i></i>Barley Krazurkth
                            </a>

                            <a href="#" class="usr offline"
                               data-chat-id="cha5"
                               data-chat-fname="Farhana"
                               data-chat-lname="Amrin"
                               data-chat-status="incognito"
                               data-rel="popover-hover"
                               data-placement="right"
                               data-html="true"
                               data-content="
											<div class='usr-card'>
												<img src='img/avatars/female.png' alt='Farhana Amrin'>
												<div class='usr-card-content'>
													<h3>Farhana Amrin</h3>
													<p>Support Admin <small><i class='fa fa-music'></i> Playing Beethoven Classics</small></p>
												</div>
											</div>
										">
                                <i></i>Farhana Amrin (offline)
                            </a>

                            <a href="#" class="usr offline"
                               data-chat-id="cha6"
                               data-chat-fname="Lezley"
                               data-chat-lname="Jacob"
                               data-chat-status="incognito"
                               data-rel="popover-hover"
                               data-placement="right"
                               data-html="true"
                               data-content="
											<div class='usr-card'>
												<img src='img/avatars/male.png' alt='Lezley Jacob'>
												<div class='usr-card-content'>
													<h3>Lezley Jacob</h3>
													<p>Sales Director</p>
												</div>
											</div>
										">
                                <i></i>Lezley Jacob (offline)
                            </a>

                            <a href="ajax/chat.html" class="btn btn-xs btn-default btn-block sa-chat-learnmore-btn">About the API</a>

                        </div>
                        <!-- END DISPLAY USERS -->
                    </li>
                </ul>
            </li>
        </ul>
    </nav>


    <span class="minifyme" data-action="minifyMenu"> 
				<i class="fa fa-arrow-circle-left hit"></i> 
			</span>

</aside>
<!-- END NAVIGATION -->

<!-- MAIN PANEL -->
<div id="main" role="main">

    <!-- RIBBON -->
    <div id="ribbon">

				<span class="ribbon-button-alignment"> 
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span> 
				</span>

        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li>Home</li><li>Forms</li><li>Wizards</li>
        </ol>
        <!-- end breadcrumb -->

        <!-- You can also add more buttons to the
        ribbon for further usability

        Example below:

        <span class="ribbon-button-alignment pull-right">
        <span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
        <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
        <span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
        </span> -->

    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark"><i class="fa fa-pencil-square-o fa-fw "></i> Forms <span>>
							Wizards </span></h1>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
                <ul id="sparks" class="">
                    <li class="sparks-info">
                        <h5> My Income <span class="txt-color-blue">$47,171</span></h5>
                        <div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
                            1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
                        </div>
                    </li>
                    <li class="sparks-info">
                        <h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
                        <div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
                            110,150,300,130,400,240,220,310,220,300, 270, 210
                        </div>
                    </li>
                    <li class="sparks-info">
                        <h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
                        <div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
                            110,150,300,130,400,240,220,310,220,300, 270, 210
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- widget grid -->
        <section id="widget-grid" class="">

            <!-- row -->
            <div class="row">

                <!-- NEW WIDGET START -->
                <article class="col-sm-12 col-md-12 col-lg-6">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false" data-widget-deletebutton="false">
                        <!-- widget options:
                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
        
                        data-widget-colorbutton="false"
                        data-widget-editbutton="false"
                        data-widget-togglebutton="false"
                        data-widget-deletebutton="false"
                        data-widget-fullscreenbutton="false"
                        data-widget-custombutton="false"
                        data-widget-collapsed="true"
                        data-widget-sortable="false"
        
                        -->
                        <header>
                            <span class="widget-icon"> <i class="fa fa-check"></i> </span>
                            <h2>Very Basic Wizard Example </h2>

                        </header>

                        <!-- widget div-->
                        <div>

                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->

                            </div>
                            <!-- end widget edit box -->

                            <!-- widget content -->
                            <div class="widget-body">

                                <div class="row">
                                    <form id="wizard-1" novalidate="novalidate">
                                        <div id="bootstrap-wizard-1" class="col-sm-12">
                                            <div class="form-bootstrapWizard">
                                                <ul class="bootstrapWizard form-wizard">
                                                    <li class="active" data-target="#step1">
                                                        <a href="#tab1" data-toggle="tab"> <span class="step">1</span> <span class="title">Basic information</span> </a>
                                                    </li>
                                                    <li data-target="#step2">
                                                        <a href="#tab2" data-toggle="tab"> <span class="step">2</span> <span class="title">Billing information</span> </a>
                                                    </li>
                                                    <li data-target="#step3">
                                                        <a href="#tab3" data-toggle="tab"> <span class="step">3</span> <span class="title">Domain Setup</span> </a>
                                                    </li>
                                                    <li data-target="#step4">
                                                        <a href="#tab4" data-toggle="tab"> <span class="step">4</span> <span class="title">Save Form</span> </a>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab1">
                                                    <br>
                                                    <h3><strong>Step 1 </strong> - Basic Information</h3>

                                                    <div class="row">

                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope fa-lg fa-fw"></i></span>
                                                                    <input class="form-control input-lg" placeholder="email@address.com" type="text" name="email" id="email">

                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-user fa-lg fa-fw"></i></span>
                                                                    <input class="form-control input-lg" placeholder="First Name" type="text" name="fname" id="fname">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-user fa-lg fa-fw"></i></span>
                                                                    <input class="form-control input-lg" placeholder="Last Name" type="text" name="lname" id="lname">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane" id="tab2">
                                                    <br>
                                                    <h3><strong>Step 2</strong> - Billing Information</h3>

                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-flag fa-lg fa-fw"></i></span>
                                                                    <select name="country" class="form-control input-lg">
                                                                        <option value="" selected="selected">Select Country</option>
                                                                        <option value="United States">United States</option>
                                                                        <option value="United Kingdom">United Kingdom</option>
                                                                        <option value="Afghanistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="American Samoa">American Samoa</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Anguilla">Anguilla</option>
                                                                        <option value="Antarctica">Antarctica</option>
                                                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Aruba">Aruba</option>
                                                                        <option value="Australia">Australia</option>
                                                                        <option value="Austria">Austria</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="Bahamas">Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bermuda">Bermuda</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Bouvet Island">Bouvet Island</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Canada">Canada</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                                        <option value="Central African Republic">Central African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Christmas Island">Christmas Island</option>
                                                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo">Congo</option>
                                                                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                                        <option value="Cook Islands">Cook Islands</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Czech Republic">Czech Republic</option>
                                                                        <option value="Denmark">Denmark</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Finland">Finland</option>
                                                                        <option value="France">France</option>
                                                                        <option value="French Guiana">French Guiana</option>
                                                                        <option value="French Polynesia">French Polynesia</option>
                                                                        <option value="French Southern Territories">French Southern Territories</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="Gambia">Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Germany">Germany</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Gibraltar">Gibraltar</option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Greenland">Greenland</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                                        <option value="Guam">Guam</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guinea-bissau">Guinea-bissau</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hong Kong">Hong Kong</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="Iceland">Iceland</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Israel">Israel</option>
                                                                        <option value="Italy">Italy</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macao">Macao</option>
                                                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                                        <option value="Martinique">Martinique</option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mayotte">Mayotte</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montserrat">Montserrat</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar">Myanmar</option>
                                                                        <option value="Namibia">Namibia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Netherlands">Netherlands</option>
                                                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                                        <option value="New Caledonia">New Caledonia</option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Niue">Niue</option>
                                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                                        <option value="Norway">Norway</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau">Palau</option>
                                                                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Philippines">Philippines</option>
                                                                        <option value="Pitcairn">Pitcairn</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Portugal">Portugal</option>
                                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Reunion">Reunion</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russian Federation">Russian Federation</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="Saint Helena">Saint Helena</option>
                                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Singapore">Singapore</option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                                        <option value="Spain">Spain</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Sweden">Sweden</option>
                                                                        <option value="Switzerland">Switzerland</option>
                                                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Timor-leste">Timor-leste</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tokelau">Tokelau</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                                                        <option value="United Kingdom">United Kingdom</option>
                                                                        <option value="United States">United States</option>
                                                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                                        <option value="Uruguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Viet Nam">Viet Nam</option>
                                                                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                                        <option value="Western Sahara">Western Sahara</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-map-marker fa-lg fa-fw"></i></span>
                                                                    <select class="form-control input-lg" name="city">
                                                                        <option value="" selected="selected">Select City</option>
                                                                        <option>Amsterdam</option>
                                                                        <option>Atlanta</option>
                                                                        <option>Baltimore</option>
                                                                        <option>Boston</option>
                                                                        <option>Buenos Aires</option>
                                                                        <option>Calgary</option>
                                                                        <option>Chicago</option>
                                                                        <option>Denver</option>
                                                                        <option>Dubai</option>
                                                                        <option>Frankfurt</option>
                                                                        <option>Hong Kong</option>
                                                                        <option>Honolulu</option>
                                                                        <option>Houston</option>
                                                                        <option>Kuala Lumpur</option>
                                                                        <option>London</option>
                                                                        <option>Los Angeles</option>
                                                                        <option>Melbourne</option>
                                                                        <option>Mexico City</option>
                                                                        <option>Miami</option>
                                                                        <option>Minneapolis</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-envelope-o fa-lg fa-fw"></i></span>
                                                                    <input class="form-control input-lg" placeholder="Postal Code" type="text" name="postal" id="postal">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-phone fa-lg fa-fw"></i></span>
                                                                    <input class="form-control input-lg" data-mask="+99 (999) 999-9999" data-mask-placeholder= "X" placeholder="+1" type="text" name="wphone" id="wphone">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-mobile fa-lg fa-fw"></i></span>
                                                                    <input class="form-control input-lg" data-mask="+99 (999) 999-9999" data-mask-placeholder= "X" placeholder="+01" type="text" name="hphone" id="hphone">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab3">
                                                    <br>
                                                    <h3><strong>Step 3</strong> - Domain Setup</h3>
                                                    <div class="alert alert-info fade in">
                                                        <button class="close" data-dismiss="alert">
                                                            ×
                                                        </button>
                                                        <i class="fa-fw fa fa-info"></i>
                                                        <strong>Info!</strong> Place an info message box if you wish.
                                                    </div>
                                                    <div class="form-group">
                                                        <label>This is a label</label>
                                                        <input class="form-control input-lg" placeholder="Another input box here..." type="text" name="etc" id="etc">
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab4">
                                                    <br>
                                                    <h3><strong>Step 4</strong> - Save Form</h3>
                                                    <br>
                                                    <h1 class="text-center text-success"><strong><i class="fa fa-check fa-lg"></i> Complete</strong></h1>
                                                    <h4 class="text-center">Click next to finish</h4>
                                                    <br>
                                                    <br>
                                                </div>

                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <ul class="pager wizard no-margin">
                                                                <!--<li class="previous first disabled">
                                                                <a href="javascript:void(0);" class="btn btn-lg btn-default"> First </a>
                                                                </li>-->
                                                                <li class="previous disabled">
                                                                    <a href="javascript:void(0);" class="btn btn-lg btn-default"> Previous </a>
                                                                </li>
                                                                <!--<li class="next last">
                                                                <a href="javascript:void(0);" class="btn btn-lg btn-primary"> Last </a>
                                                                </li>-->
                                                                <li class="next">
                                                                    <a href="javascript:void(0);" class="btn btn-lg txt-color-darken"> Next </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <!-- end widget content -->

                        </div>
                        <!-- end widget div -->

                    </div>
                    <!-- end widget -->

                </article>
                <!-- WIDGET END -->

                <!-- NEW WIDGET START -->
                <article class="col-sm-12 col-md-12 col-lg-6">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget" id="wid-id-2" data-widget-editbutton="false" data-widget-deletebutton="false">
                        <!-- widget options:
                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
        
                        data-widget-colorbutton="false"
                        data-widget-editbutton="false"
                        data-widget-togglebutton="false"
                        data-widget-deletebutton="false"
                        data-widget-fullscreenbutton="false"
                        data-widget-custombutton="false"
                        data-widget-collapsed="true"
                        data-widget-sortable="false"
        
                        -->
                        <header>
                            <h2>Fuel Wizard </h2>

                        </header>

                        <!-- widget div-->
                        <div>

                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->

                            </div>
                            <!-- end widget edit box -->

                            <!-- widget content -->
                            <div class="widget-body fuelux">

                                <div class="wizard">
                                    <ul class="steps">
                                        <li data-target="#step1" class="active">
                                            <span class="badge badge-info">1</span>Step 1<span class="chevron"></span>
                                        </li>
                                        <li data-target="#step2">
                                            <span class="badge">2</span>Step 2<span class="chevron"></span>
                                        </li>
                                        <li data-target="#step3">
                                            <span class="badge">3</span>Step 3<span class="chevron"></span>
                                        </li>
                                        <li data-target="#step4">
                                            <span class="badge">4</span>Step 4<span class="chevron"></span>
                                        </li>
                                        <li data-target="#step5">
                                            <span class="badge">5</span>Step 5<span class="chevron"></span>
                                        </li>
                                    </ul>
                                    <div class="actions">
                                        <button type="button" class="btn btn-sm btn-primary btn-prev">
                                            <i class="fa fa-arrow-left"></i>Prev
                                        </button>
                                        <button type="button" class="btn btn-sm btn-success btn-next" data-last="Finish">
                                            Next<i class="fa fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="step-content">
                                    <form class="form-horizontal" id="fuelux-wizard" method="post">

                                        <div class="step-pane active" id="step1">
                                            <h3><strong>Step 1 </strong> - Validation states</h3>

                                            <!-- wizard form starts here -->
                                            <fieldset>

                                                <div class="form-group has-warning">
                                                    <label class="col-md-2 control-label">Input warning</label>
                                                    <div class="col-md-10">
                                                        <div class="input-group">
                                                            <input class="form-control" type="text">
                                                            <span class="input-group-addon"><i class="fa fa-warning"></i></span>
                                                        </div>
                                                        <span class="help-block">Something may have gone wrong</span>
                                                    </div>

                                                </div>

                                                <div class="form-group has-error">
                                                    <label class="col-md-2 control-label">Input error</label>
                                                    <div class="col-md-10">
                                                        <div class="input-group">
                                                            <input class="form-control" type="text">
                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-remove-circle"></i></span>
                                                        </div>
                                                        <span class="help-block"><i class="fa fa-warning"></i> Please correct the error</span>
                                                    </div>
                                                </div>

                                                <div class="form-group has-success">
                                                    <label class="col-md-2 control-label">Input success</label>
                                                    <div class="col-md-10">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                            <input class="form-control" type="text">
                                                            <span class="input-group-addon"><i class="fa fa-check"></i></span>
                                                        </div>
                                                        <span class="help-block">Something may have gone wrong</span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-2">Input icon success</label>
                                                    <div class="col-md-10">
                                                        <div class="row">
                                                            <div class="col-sm-12">

                                                                <div class="input-icon-left">
                                                                    <i class="fa txt-color-green fa-check"></i>
                                                                    <input class="form-control" placeholder="Left Icon" type="text">
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </fieldset>

                                        </div>

                                        <div class="step-pane" id="step2">
                                            <h3><strong>Step 2 </strong> - Alerts</h3>

                                            <div class="alert alert-warning fade in">
                                                <button class="close" data-dismiss="alert">
                                                    ×
                                                </button>
                                                <i class="fa-fw fa fa-warning"></i>
                                                <strong>Warning</strong> Your monthly traffic is reaching limit.
                                            </div>

                                            <div class="alert alert-success fade in">
                                                <button class="close" data-dismiss="alert">
                                                    ×
                                                </button>
                                                <i class="fa-fw fa fa-check"></i>
                                                <strong>Success</strong> The page has been added.
                                            </div>

                                            <div class="alert alert-info fade in">
                                                <button class="close" data-dismiss="alert">
                                                    ×
                                                </button>
                                                <i class="fa-fw fa fa-info"></i>
                                                <strong>Info!</strong> You have 198 unread messages.
                                            </div>

                                            <div class="alert alert-danger fade in">
                                                <button class="close" data-dismiss="alert">
                                                    ×
                                                </button>
                                                <i class="fa-fw fa fa-times"></i>
                                                <strong>Error!</strong> The daily cronjob has failed.
                                            </div>

                                        </div>

                                        <div class="step-pane" id="step3">
                                            <h3><strong>Step 3 </strong> - Wizard continued</h3>
                                            <br>
                                            <br>
                                            <h1 class="text-center text-primary"> This will be your Step 3 </h1>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                        </div>

                                        <div class="step-pane" id="step4">
                                            <h3><strong>Step 4 </strong> - Wizard continued...</h3>
                                            <br>
                                            <br>
                                            <h1 class="text-center text-danger"> This will be your Step 4 </h1>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                        </div>

                                        <div class="step-pane" id="step5">
                                            <h3><strong>Step 5 </strong> - Finished!</h3>
                                            <br>
                                            <br>
                                            <h1 class="text-center text-success"><i class="fa fa-check"></i> Congratulations!
                                                <br>
                                                <small>Click finish to end wizard</small></h1>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                        </div>

                                    </form>
                                </div>

                            </div>
                            <!-- end widget content -->

                        </div>
                        <!-- end widget div -->

                    </div>
                    <!-- end widget -->

                </article>
                <!-- WIDGET END -->

            </div>

            <!-- end row -->

        </section>
        <!-- end widget grid -->

    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->

<!-- PAGE FOOTER -->
<div class="page-footer">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <span class="txt-color-white">SmartAdmin 1.8.2 <span class="hidden-xs"> - Web Application Framework</span> © 2014-2015</span>
        </div>

        <div class="col-xs-6 col-sm-6 text-right hidden-xs">
            <div class="txt-color-white inline-block">
                <i class="txt-color-blueLight hidden-mobile">Last account activity <i class="fa fa-clock-o"></i> <strong>52 mins ago &nbsp;</strong> </i>
                <div class="btn-group dropup">
                    <button class="btn btn-xs dropdown-toggle bg-color-blue txt-color-white" data-toggle="dropdown">
                        <i class="fa fa-link"></i> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu pull-right text-left">
                        <li>
                            <div class="padding-5">
                                <p class="txt-color-darken font-sm no-margin">Download Progress</p>
                                <div class="progress progress-micro no-margin">
                                    <div class="progress-bar progress-bar-success" style="width: 50%;"></div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="padding-5">
                                <p class="txt-color-darken font-sm no-margin">Server Load</p>
                                <div class="progress progress-micro no-margin">
                                    <div class="progress-bar progress-bar-success" style="width: 20%;"></div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="padding-5">
                                <p class="txt-color-darken font-sm no-margin">Memory Load <span class="text-danger">*critical*</span></p>
                                <div class="progress progress-micro no-margin">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%;"></div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="padding-5">
                                <button class="btn btn-block btn-default">refresh</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE FOOTER -->

<!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
Note: These tiles are completely responsive,
you can add as many as you like
-->
<div id="shortcut">
    <ul>
        <li>
            <a href="inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
        </li>
        <li>
            <a href="calendar.html" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i class="fa fa-calendar fa-4x"></i> <span>Calendar</span> </span> </a>
        </li>
        <li>
            <a href="gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a>
        </li>
        <li>
            <a href="invoice.html" class="jarvismetro-tile big-cubes bg-color-blueDark"> <span class="iconbox"> <i class="fa fa-book fa-4x"></i> <span>Invoice <span class="label pull-right bg-color-darken">99</span></span> </span> </a>
        </li>
        <li>
            <a href="gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a>
        </li>
        <li>
            <a href="profile.html" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a>
        </li>
    </ul>
</div>
<!-- END SHORTCUT AREA -->

<!--================================================== -->

<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
<script data-pace-options='{ "restartOnRequestAfter": true }' src="{{ asset('js/plugin/pace/pace.min.js') }}"></script>

<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}"></script>
<script>
    if (!window.jQuery) {
        document.write('<script src="{{ asset('js/libs/jquery-2.1.1.min.js') }}"><\/script>');
    }
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js') }}"></script>
<script>
    if (!window.jQuery.ui) {
        document.write('<script src="{{ asset('js/libs/jquery-ui-1.10.3.min.js') }}"><\/script>');
    }
</script>

<!-- IMPORTANT: APP CONFIG -->
<script src="{{ asset('js/app.config.js') }}"></script>

<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
<script src="{{ asset('js/plugin/jquery-touch/jquery.ui.touch-punch.min.js') }}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>

<!-- CUSTOM NOTIFICATION -->
<script src="{{ asset('js/notification/SmartNotification.min.js') }}"></script>

<!-- JARVIS WIDGETS -->
<script src="{{ asset('js/smartwidgets/jarvis.widget.min.js') }}"></script>

<!-- EASY PIE CHARTS -->
<script src="{{ asset('js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js') }}"></script>

<!-- SPARKLINES -->
<script src="{{ asset('js/plugin/sparkline/jquery.sparkline.min.js') }}"></script>

<!-- JQUERY VALIDATE -->
<script src="{{ asset('js/plugin/jquery-validate/jquery.validate.min.js') }}"></script>

<!-- JQUERY MASKED INPUT -->
<script src="{{ asset('js/plugin/masked-input/jquery.maskedinput.min.js') }}"></script>

<!-- JQUERY SELECT2 INPUT -->
<script src="{{ asset('js/plugin/select2/select2.min.js') }}"></script>

<!-- JQUERY UI + Bootstrap Slider -->
<script src="{{ asset('js/plugin/bootstrap-slider/bootstrap-slider.min.js') }}"></script>

<!-- browser msie issue fix -->
<script src="{{ asset('js/plugin/msie-fix/jquery.mb.browser.min.js') }}"></script>

<!-- FastClick: For mobile devices -->
<script src="{{ asset('js/plugin/fastclick/fastclick.min.js') }}"></script>

<!--[if IE 8]>

<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

<![endif]-->

<!-- Demo purpose only -->
<script src="{{ asset('js/demo.min.js') }}"></script>

<!-- MAIN APP JS FILE -->
<script src="{{ asset('js/app.min.js') }}"></script>

<!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
<!-- Voice command : plugin -->
<script src="{{ asset('js/speech/voicecommand.min.js') }}"></script>

<!-- SmartChat UI : plugin -->
<script src="{{ asset('js/smart-chat-ui/smart.chat.ui.min.js') }}"></script>
<script src="{{ asset('js/smart-chat-ui/smart.chat.manager.min.js') }}"></script>

<!-- PAGE RELATED PLUGIN(S) -->
<script src="{{ asset('js/plugin/bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
<script src="{{ asset('js/plugin/fuelux/wizard/wizard.min.js') }}"></script>


<script type="text/javascript">

    // DO NOT REMOVE : GLOBAL FUNCTIONS!

    $(document).ready(function() {

        pageSetUp();



        //Bootstrap Wizard Validations

        var $validator = $("#wizard-1").validate({

            rules: {
                email: {
                    required: true,
                    email: "Your email address must be in the format of name@domain.com"
                },
                fname: {
                    required: true
                },
                lname: {
                    required: true
                },
                country: {
                    required: true
                },
                city: {
                    required: true
                },
                postal: {
                    required: true,
                    minlength: 4
                },
                wphone: {
                    required: true,
                    minlength: 10
                },
                hphone: {
                    required: true,
                    minlength: 10
                }
            },

            messages: {
                fname: "Please specify your First name",
                lname: "Please specify your Last name",
                email: {
                    required: "We need your email address to contact you",
                    email: "Your email address must be in the format of name@domain.com"
                }
            },

            highlight: function (element) {
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            },
            unhighlight: function (element) {
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            },
            errorElement: 'span',
            errorClass: 'help-block',
            errorPlacement: function (error, element) {
                if (element.parent('.input-group').length) {
                    error.insertAfter(element.parent());
                } else {
                    error.insertAfter(element);
                }
            }
        });

        $('#bootstrap-wizard-1').bootstrapWizard({
            'tabClass': 'form-wizard',
            'onNext': function (tab, navigation, index) {
                var $valid = $("#wizard-1").valid();
                if (!$valid) {
                    $validator.focusInvalid();
                    return false;
                } else {
                    $('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(index - 1).addClass(
                            'complete');
                    $('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(index - 1).find('.step')
                            .html('<i class="fa fa-check"></i>');
                }
            }
        });


        // fuelux wizard
        var wizard = $('.wizard').wizard();

        wizard.on('finished', function (e, data) {
            //$("#fuelux-wizard").submit();
            //console.log("submitted!");
            $.smallBox({
                title: "Congratulations! Your form was submitted",
                content: "<i class='fa fa-clock-o'></i> <i>1 seconds ago...</i>",
                color: "#5F895F",
                iconSmall: "fa fa-check bounce animated",
                timeout: 4000
            });

        });


    })

</script>

<!-- Your GOOGLE ANALYTICS CODE Below -->
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>

@stack('js')
</body>

</html>