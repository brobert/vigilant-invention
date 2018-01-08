<!DOCTYPE html>
<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lander.v2 - Bootstrap WebApp & Dashboard</title>
        <meta name="author" content="optimisticdesigns">
        <meta name="description" content="Lander.v2 Admin is a clean and flat backend built with twitter bootstrap">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/image/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/image/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/image/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/image/touch/apple-touch-icon-57x57-precomposed.png">
        <link rel="shortcut icon" href="/image/favicon.ico">
        <!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        <link rel="stylesheet" href="/plugins/selectize/css/selectize.css">
        <link rel="stylesheet" href="/plugins/jquery-ui/css/jquery-ui.css">
        <link rel="stylesheet" href="/plugins/select2/css/select2.css">
        <link rel="stylesheet" href="/plugins/touchspin/css/touchspin.css">
        <!--/ Plugins stylesheet : optional -->

        <!-- Application stylesheet : mandatory -->
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/layout.css">
        <link rel="stylesheet" href="/css/uielement.css">
        <!--/ Application stylesheet -->

        <!-- Theme stylesheet -->
		<link rel="stylesheet" href="/css/themes/theme.css">
        <!--/ Theme stylesheet -->

        <!-- modernizr script -->
        <script type="text/javascript" src="/plugins/modernizr/js/modernizr.js"></script>
        <!--/ modernizr script -->
        <!-- END STYLESHEETS -->
    </head>
    <!--/ END Head -->

    <!-- START Body -->
    <body>
        <!-- START Template Header -->
        <header id="header" class="navbar">
            <!-- START navbar header -->
            <div class="navbar-header">
                <!-- Brand -->
                <a class="navbar-brand" href="javascript:void(0);">
                    <span class="logo-figure"></span>
                    <span class="logo-text"></span>
                </a>
                <!--/ Brand -->
            </div>
            <!--/ END navbar header -->

            <!-- START Toolbar -->
            <div class="navbar-toolbar clearfix">
                <!-- START Left nav -->
                <ul class="nav navbar-nav navbar-left">
                    <!-- Sidebar shrink -->
                    <li class="hidden-xs hidden-sm">
                        <a href="javascript:void(0);" class="sidebar-minimize" data-toggle="minimize" title="Minimize sidebar">
                            <span class="meta">
                                <span class="icon"></span>
                            </span>
                        </a>
                    </li>
                    <!--/ Sidebar shrink -->

                    <!-- Offcanvas left: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
                    <li class="navbar-main hidden-lg hidden-md hidden-sm">
                        <a href="javascript:void(0);" data-toggle="sidebar" data-direction="ltr" rel="tooltip" title="Menu sidebar">
                            <span class="meta">
                                <span class="icon"><i class="ico-paragraph-justify3"></i></span>
                            </span>
                        </a>
                    </li>
                    <!--/ Offcanvas left -->

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
							<ul class="dropdown-menu">
								<li><a href="#">First item</a></li>
								<li><a href="#">Second item</a></li>
								<li class="divider"></li>
								<li><a href="#">Third item</a></li>
							</ul>
					</li>
					
                </ul>
                <!--/ END Left nav -->

                <!-- START navbar form -->
                <div class="navbar-form navbar-left dropdown" id="dropdown-form">
                    <form action="" role="search">
                        <div class="has-icon">
                            <input type="text" class="form-control" placeholder="Search application...">
                            <i class="ico-search form-control-icon"></i>
                        </div>
                    </form>
                </div>
                <!-- START navbar form -->

                <!-- START Right nav -->
                <ul class="nav navbar-nav navbar-right">
					<!-- Notification dropdown -->
                    <li class="dropdown custom" id="header-dd-notification">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="meta">
                                <span class="icon"><i class="ico-envelop"></i></span>
                            </span>
                        </a>

                        <!-- Dropdown menu -->
                        <div class="dropdown-menu" role="menu">
                            <div class="dropdown-header">
                                <span class="title">Notification <span class="count"></span></span>
                                <span class="option text-right"><a href="javascript:void(0);">Clear all</a></span>
                            </div>
                            <div class="dropdown-body slimscroll">
                                
								<!-- Message list -->
                                <div class="media-list">
                                    <a href="javascript:void(0);" class="media read border-dotted">
                                        <span class="media-object pull-left">
                                            <i class="ico-basket2 bgcolor-info"></i>
                                        </span>
                                        <span class="media-body">
                                            <span class="media-text">Duis aute irure dolor in <span class="text-primary semibold">reprehenderit</span> in voluptate.</span>
                                            <!-- meta icon -->
                                            <span class="media-meta pull-right">2d</span>
                                            <!--/ meta icon -->
                                        </span>
                                    </a>
									
									<a href="page-message-rich.html" class="media border-dotted read">
                                        <span class="pull-left">
                                            <img src="/image/avatar/avatar1.jpg" class="media-object img-circle" alt="">
                                        </span>
                                        <span class="media-body">
                                            <span class="media-heading">Martina Poole</span>
                                            <span class="media-text ellipsis nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</span>
                                            <!-- meta icon -->
                                            <span class="media-meta"><i class="ico-reply"></i></span>
                                            <span class="media-meta"><i class="ico-attachment"></i></span>
                                            <span class="media-meta pull-right">20m</span>
                                            <!--/ meta icon -->
                                        </span>
                                    </a>

                                    <a href="javascript:void(0);" class="media read border-dotted">
                                        <span class="media-object pull-left">
                                            <i class="ico-call-incoming"></i>
                                        </span>
                                        <span class="media-body">
                                            <span class="media-text">Aliquip ex ea commodo consequat.</span>
                                            <!-- meta icon -->
                                            <span class="media-meta pull-right">1w</span>
                                            <!--/ meta icon -->
                                        </span>
                                    </a>

                                    <a href="javascript:void(0);" class="media read border-dotted">
                                        <span class="media-object pull-left">
                                            <i class="ico-alarm2"></i>
                                        </span>
                                        <span class="media-body">
                                            <span class="media-text">Excepteur sint <span class="text-primary semibold">occaecat</span> cupidatat non.</span>
                                            <!-- meta icon -->
                                            <span class="media-meta pull-right">12w</span>
                                            <!--/ meta icon -->
                                        </span>
                                    </a>
									
									<a href="page-message-rich.html" class="media border-dotted read">
                                        <span class="pull-left">
                                            <img src="/image/avatar/avatar9.jpg" class="media-object img-circle" alt="">
                                        </span>
                                        <span class="media-body">
                                            <span class="media-heading">Tamara Moon</span>
                                            <span class="media-text ellipsis nm">Aliquam ultrices iaculis odio. Nam interdum enim non nisi. Aenean eget metus.</span>
                                            <!-- meta icon -->
                                            <span class="media-meta"><i class="ico-attachment"></i></span>
                                            <span class="media-meta pull-right">2w</span>
                                            <!--/ meta icon -->
                                        </span>
                                    </a>

                                    <a href="javascript:void(0);" class="media read border-dotted">
                                        <span class="media-object pull-left">
                                            <i class="ico-checkmark3 bgcolor-success"></i>
                                        </span>
                                        <span class="media-body">
                                            <span class="media-text">Lorem ipsum dolor sit amet, <span class="text-primary semibold">consectetur</span> adipisicing elit.</span>
                                            <!-- meta icon -->
                                            <span class="media-meta pull-right">14w</span>
                                            <!--/ meta icon -->
                                        </span>
                                    </a>
									
									<a href="page-message-rich.html" class="media border-dotted read">
                                        <span class="pull-left">
                                            <img src="/image/avatar/avatar5.jpg" class="media-object img-circle" alt="">
                                        </span>
                                        <span class="media-body">
                                            <span class="media-heading">Noelani Blevins</span>
                                            <span class="media-text ellipsis nm">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis.</span>
                                            <!-- meta icon -->
                                            <span class="media-meta pull-right">2d</span>
                                            <!--/ meta icon -->
                                        </span>
                                    </a>
									
									<a href="page-message-rich.html" class="media border-dotted read">
                                        <span class="pull-left">
                                            <img src="/image/avatar/avatar3.jpg" class="media-object img-circle" alt="">
                                        </span>
                                        <span class="media-body">
                                            <span class="media-heading">Walter Foster</span>
                                            <span class="media-text ellipsis nm">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
                                            <!-- meta icon -->
                                            <span class="media-meta"><i class="ico-attachment"></i></span>
                                            <span class="media-meta pull-right">21h</span>
                                            <!--/ meta icon -->
                                        </span>
                                    </a>
                                </div>
                                <!--/ Message list -->
                            </div>
                        </div>
                        <!--/ Dropdown menu -->
                    </li>
                    <!--/ Notification dropdown -->
					
                    <!-- Profile dropdown -->
                    <li class="dropdown profile">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="meta">
                                <span class="avatar"><img src="/image/avatar/avatar7.jpg" class="img-circle" alt="" /></span>
                                <span class="text hidden-xs hidden-sm pl5">John Doe</span>
                            </span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="javascript:void(0);"><span class="icon"><i class="ico-user-plus2"></i></span> My Accounts</a></li>
                            <li><a href="javascript:void(0);"><span class="icon"><i class="ico-cog4"></i></span> Profile Setting</a></li>
                            <li><a href="javascript:void(0);"><span class="icon"><i class="ico-question"></i></span> Help</a></li>
                            <li class="divider"></li>
                            <li><a href="javascript:void(0);"><span class="icon"><i class="ico-exit"></i></span> Sign Out</a></li>
                        </ul>
                    </li>
                    <!-- Profile dropdown -->
					<!-- Offcanvas right This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
                    <li class="navbar-main">
                        <a href="javascript:void(0);" data-toggle="sidebar" data-direction="rtl" rel="tooltip" title="Feed / contact sidebar">
                            <span class="meta">
                                <span class="icon"><i class="ico-users3"></i></span>
                            </span>
                        </a>
                    </li>
                    <!--/ Offcanvas right -->
                  
                </ul>
                <!--/ END Right nav -->
            </div>
            <!--/ END Toolbar -->
        </header>
        <!--/ END Template Header -->

        <!-- START Template Sidebar (Left) -->
        <aside class="sidebar sidebar-left sidebar-menu">
			<!-- START Sidebar Content -->
            <section class="content slimscroll">
				<!-- START Template Navigation/Menu -->
                <ul class="topmenu topmenu-responsive" data-toggle="menu">
                    <li>
                        <a href="index.html" data-target="#dashboard" data-parent=".topmenu">
                            <span class="figure"><i class="ico-home2"></i></span>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>
					<li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#layout" data-parent=".topmenu">
                            <span class="figure"><i class="ico-grid"></i></span>
                            <span class="text">Layouts</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="layout" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Page Layout</li>
                            <li >
                                <a href="layout-default.html">
                                    <span class="text">Default</span>
                                </a>
                            </li>
                            <li >
                                <a href="layout-with-footer.html">
                                    <span class="text">With footer</span>
                                    <span class="number"><span class="label label-success">N</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="layout-reveal-header.html">
                                    <span class="text">Reveal header</span>
                                    <span class="number"><span class="label label-success">N</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="layout-fixed-header.html">
                                    <span class="text">Fixed header</span>
                                </a>
                            </li>
                            <li >
                                <a href="layout-fixed-sidebar.html">
                                    <span class="text">Fixed sidebar</span>
                                </a>
                            </li>
                            <li >
                                <a href="layout-navbar-collapse.html">
                                    <span class="text">Navbar Collapse</span>
                                </a>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
					<li>
                        <a href="widget.html" data-parent=".topmenu">
                            <span class="figure"><i class="ico-tasks"></i></span>
                            <span class="text">Stats & Widgets</span>
							<span class="number"><span class="label label-danger">6</span></span>
                        </a>
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-target="#components" data-toggle="submenu" data-parent=".topmenu">
                            <span class="figure"><i class="ico-screen4"></i></span>
                            <span class="text">UI Elements</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="components" class="submenu collapse">
                            <li class="submenu-header ellipsis">Components</li>
                            <li >
                                <a href="component-animation.html">
                                    <span class="text">Animation</span>
                                </a>
                            </li>
							<li >
                                <a href="component-button.html">
                                    <span class="text">Button</span>
                                    <span class="number"><span class="label label-info">U</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="component-carousel.html">
                                    <span class="text">Carousel</span>
                                </a>
                            </li>
							<li >
                                <a href="component-grid.html">
                                    <span class="text">Grid</span>
                                </a>
                            </li>
							<li >
                                <a href="component-icon.html">
                                    <span class="text">Icon</span>
                                </a>
                            </li>
							<li >
                                <a href="component-loading.html">
                                    <span class="text">Loading indicator</span>
                                </a>
                            </li>
							<li >
                                <a href="component-notification.html">
                                    <span class="text">Notification</span>
                                </a>
                            </li>
                            <li >
                                <a href="component-panel.html">
                                    <span class="text">Panel</span>
                                </a>
                            </li>
                            <li >
                                <a href="component-pricing.html">
                                    <span class="text">Pricing table / box</span>
                                </a>
                            </li>
							<li >
                                <a href="component-slider.html">
                                    <span class="text">Slider</span>
                                </a>
                            </li>
							<li >
                                <a href="component-sortable.html">
                                    <span class="text">Sortable</span>
                                    <span class="number"><span class="label label-success">N</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="component-tabsaccordion.html">
                                    <span class="text">Tabs &amp; accordion</span>
                                </a>
                            </li>
                            <li >
                                <a href="component-typography.html">
                                    <span class="text">Typography</span>
                                </a>
                            </li>
                            <li >
                                <a href="component-others.html">
                                    <span class="text">Miscelleneous</span>
                                </a>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li class="active open">
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#form" data-parent=".topmenu">
                            <span class="figure"><i class="ico-file"></i></span>
                            <span class="text">Forms</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="form" class="submenu collapse in">
                            <li class="submenu-header ellipsis">Forms</li>
                            <li class="active">
                                <a href="form-element.html">
                                    <span class="text">Element</span>
                                    <span class="number"><span class="label label-info">U</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="form-layout.html">
                                    <span class="text">Layout</span>
                                </a>
                            </li>
                            <li >
                                <a href="form-validation.html">
                                    <span class="text">Validation</span>
                                </a>
                            </li>
                            <li >
                                <a href="form-wizard.html">
                                    <span class="text">Wizard</span>
                                </a>
                            </li>
                            <li >
                                <a href="form-wysiwyg.html">
                                    <span class="text">WYSIWYG Editor</span>
                                </a>
                            </li>
                            <li >
                                <a href="form-xeditable.html">
                                    <span class="text">X-editable</span>
                                </a>
                            </li>
                            <li >
                                <a href="form-fileupload.html">
                                    <span class="text">File Upload</span>
                                    <span class="number"><span class="label label-success">N</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="form-imagecrop.html">
                                    <span class="text">Image Crop</span>
                                    <span class="number"><span class="label label-success">N</span></span>
                                </a>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#table" data-parent=".topmenu">
                            <span class="figure"><i class="ico-table22"></i></span>
                            <span class="text">Tables</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="table" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Tables</li>
                            <li >
                                <a href="table-default.html">
                                    <span class="text">Basic Tables</span>
                                </a>
                            </li>
                            <li>
                                <a href="table-datatable.html">
                                    <span class="text">Data Tables</span>
                                </a>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#page" data-parent=".topmenu">
                            <span class="figure"><i class="ico-copy4"></i></span>
                            <span class="text">Miscelleneous</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="page" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Miscelleneous</li>
                            <li >
                                <a href="page-starter.html">
                                    <span class="text">Blank </span>
                                </a>
                            </li>
							<li >
                                <a href="javascript:void(0);" data-toggle="submenu" data-target="#blog" data-parent="#page">
                                    <span class="text">Blog page</span>
                                    <span class="arrow"></span>
                                </a>
                                <!-- START 2nd Level Menu -->
                                <ul id="blog" class="submenu collapse ">
                                    <li >
                                        <a href="page-blog-default.html"><span class="text">Blog default</span></a>
                                    </li>
                                    <li >
                                        <a href="page-blog-grid.html"><span class="text">Blog grid</span></a>
                                    </li>
                                    <li >
                                        <a href="page-blog-single.html"><span class="text">Single post</span></a>
                                    </li>
                                </ul>
                                <!--/ END 2nd Level Menu -->
                            </li>
							<li >
                                <a href="page-calendar.html">
                                    <span class="text">Calendar</span>
                                </a>
                            </li>
                            <li >
                                <a href="javascript:void(0);" data-toggle="submenu" data-target="#email" data-parent="#page">
                                    <span class="text">Email</span>
                                    <span class="arrow"></span>
                                </a>
                                <!-- START 2nd Level Menu -->
                                <ul id="email" class="submenu collapse ">
                                    <li >
                                        <a href="page-email-inbox.html"><span class="text">Inbox</span></a>
                                    </li>
                                    <li >
                                        <a href="page-email-view.html"><span class="text">View</span></a>
                                    </li>
                                </ul>
                                <!--/ END 2nd Level Menu -->
                            </li>
                            <li >
                                <a href="javascript:void(0);" data-toggle="submenu" data-target="#error" data-parent="#page">
                                    <span class="text">Error</span>
                                    <span class="arrow"></span>
                                </a>
                                <!-- START 2nd Level Menu -->
                                <ul id="error" class="submenu collapse ">
                                    <li >
                                        <a href="page-error-404.html"><span class="text">Not Found (404)</span></a>
                                    </li>
                                    <li >
                                        <a href="page-error-403.html"><span class="text">Forbidden (403)</span></a>
                                    </li>
                                    <li >
                                        <a href="page-error-500.html"><span class="text">Server Error (500)</span></a>
                                    </li>
                                </ul>
                                <!--/ END 2nd Level Menu -->
                            </li>
							<li >
                                <a href="page-faq.html">
                                    <span class="text">FAQ</span>
                                </a>
                            </li>
							<li >
                                <a href="page-invoice.html">
                                    <span class="text">Invoice</span>
                                </a>
                            </li>
							<li >
                                <a href="page-profile.html">
                                    <span class="text">Profile</span>
                                </a>
                            </li>
                            <li >
                                <a href="page-login.html">
                                    <span class="text">Login</span>
                                </a>
                            </li>
                            <li >
                                <a href="page-login-returned.html">
                                    <span class="text">Lock Screen</span>
                                </a>
                            </li>
                            <li >
                                <a href="page-register.html">
                                    <span class="text">Register</span>
                                </a>
                            </li>
                            <li >
                                <a href="javascript:void(0);" data-toggle="submenu" data-target="#media" data-parent="#page">
                                    <span class="text">Media</span>
                                    <span class="arrow"></span>
                                </a>
                                <!-- START 2nd Level Menu -->
                                <ul id="media" class="submenu collapse ">
                                    <li >
                                        <a href="page-media-album.html"><span class="text">Media album</span></a>
                                    </li>
                                    <li >
                                        <a href="page-media-gallery.html"><span class="text">Media gallery</span></a>
                                    </li>
                                </ul>
                                <!--/ END 2nd Level Menu -->
                            </li>
                            <li >
                                <a href="javascript:void(0);" data-toggle="submenu" data-target="#message" data-parent="#page">
                                    <span class="text">Message</span>
                                    <span class="arrow"></span>
                                </a>
                                <!-- START 2nd Level Menu -->
                                <ul id="message" class="submenu collapse ">
                                    <li >
                                        <a href="page-message-bubble.html"><span class="text">Bubble message</span></a>
                                    </li>
                                    <li >
                                        <a href="page-message-rich.html"><span class="text">Rich message</span></a>
                                    </li>
                                </ul>
                                <!--/ END 2nd Level Menu -->
                            </li>
                            <li >
                                <a href="page-timeline-v2.html">
                                    <span class="text">Timeline</span>
                                </a>
                            </li>
                           
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li >
                        <a href="chart-flot.html">
                            <span class="figure"><i class="ico-stats-up"></i></span>
                            <span class="text">Charts</span>
							<span class="number"><span class="label label-success">11</span></span>
                        </a>
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#maps" data-parent=".topmenu">
                            <span class="figure">
                                <i class="ico-map3"></i>
                            </span>
                            <span class="text">Maps</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="maps" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Maps</li>
                            <li >
                                <a href="maps-vector.html">
                                    <span class="text">Vector</span>
                                    <span class="number"><span class="label label-info">U</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="maps-google.html">
                                    <span class="text">Google</span>
                                </a>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
					<li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#submenu1" data-parent=".topmenu">
                            <span class="figure">
                                <i class="ico-sitemap"></i>
                            </span>
                            <span class="text">Menu Levels</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="submenu1" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Menu Levels</li>
                            <li >
                                <a href="javascript:void(0);" data-toggle="submenu" data-target="#submenu2" data-parent="#submenu">
                                    <span class="text">Menu Level 1.1</span>
									<span class="arrow"></span>
                                </a>
								<ul id="submenu2" class="submenu collapse ">
									<li class="submenu-header ellipsis">Menu Levels 1.1</li>
									<li >
										<a href="javascript:void(0);" data-toggle="submenu" data-target="#submenu3" data-parent="#submenu2">
											<span class="text">Menu Level 2.1</span>
											<span class="arrow"></span>
										</a>
										<ul id="submenu3" class="submenu collapse ">
											<li class="submenu-header ellipsis">Menu Levels 2.1</li>
											<li >
												<a href="#">
													<span class="text">Menu Level 3.1</span>
												</a>
											</li>
										</ul>
									</li>
								</ul>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
				</ul>
                <!--/ END Template Navigation/Menu -->
				<!-- START Sidebar summary -->
                <!-- Summary -->
                <h5 class="heading">Summary</h5>
                <div class="wrapper">
                    <div class="table-layout">
                        <div class="col-xs-5 valign-middle">
                            <span class="sidebar-sparklines" sparkType="bar" sparkBarColor="#00B1E1">1,5,3,2,4,5,3,3,2,4,5,3</span>
                        </div>
                        <div class="col-xs-7 valign-middle">
                            <h5 class="semibold nm">Server uptime</h5>
                            <small class="semibold">1876 days</small>
                        </div>
                    </div>

                    <div class="table-layout">
                        <div class="col-xs-5 valign-middle">
                            <span class="sidebar-sparklines" sparkType="bar" sparkBarColor="#91C854">2,5,3,6,4,2,4,7,8,9,7,6</span>
                        </div>
                        <div class="col-xs-7 valign-middle">
                            <h5 class="semibold nm">Disk usage</h5>
                            <small class="semibold">83.1%</small>
                        </div>
                    </div>

                    <div class="table-layout">
                        <div class="col-xs-5 valign-middle">
                            <span class="sidebar-sparklines" sparkType="bar" sparkBarColor="#ED5466">5,1,3,7,4,3,7,8,6,5,3,2</span>
                        </div>
                        <div class="col-xs-7 valign-middle">
                            <h5 class="semibold nm">Daily visitors</h5>
                            <small class="semibold">56.5%</small>
                        </div>
                    </div>
                </div>
                <!--/ Summary -->
                <!--/ END Sidebar summary -->
            </section>
            <!--/ END Sidebar Container -->
        </aside>
        <!--/ END Template Sidebar (Left) -->
		
		<!-- START Template Sidebar (right) -->
        <aside class="sidebar sidebar-right">
            <!-- START Offcanvas -->
            <div class="offcanvas-container" data-toggle="offcanvas" data-options='{"openerClass":"offcanvas-opener", "closerClass":"offcanvas-closer"}'>
                <!-- START Wrapper -->
                <div class="offcanvas-wrapper">
                    <!-- Offcanvas Left -->
                    <div class="offcanvas-left">
                        <!-- Header -->
                        <div class="header pl0 pr0">
                            <ul class="list-table nm">
                                <li style="width:50px;height:34px;" class="text-center">
                                    <a href="javascript:void(0);" class="text-default offcanvas-closer"><i class="ico-arrow-left6 fsize16"></i></a>
                                </li>
                                <li class="text-center">
                                    <h5 class="semibold nm">Settings</h5>
                                </li>
                                <li style="width:50px;height:34px;" class="text-center">
                                    <a href="javascript:void(0);" class="text-default"><i class="ico-info22 fsize16"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--/ Header -->

                        <!-- Content -->
                        <div class="content slimscroll">
                            <h5 class="heading">News Feed</h5>
                            <ul class="topmenu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="figure"><i class="ico-plus"></i></span>
                                        <span class="text">Add &amp; Manage Source</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="figure"><i class="ico-google-plus"></i></span>
                                        <span class="text">Google Reader</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="figure"><i class="ico-twitter2"></i></span>
                                        <span class="text">Twitter Source</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                            </ul>

                            <h5 class="heading">Friends</h5>
                            <ul class="topmenu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="figure"><i class="ico-search22"></i></span>
                                        <span class="text">Find Friends</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="figure"><i class="ico-user-plus2"></i></span>
                                        <span class="text">Add Friends</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                            </ul>

                            <h5 class="heading">Account</h5>
                            <ul class="topmenu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="figure"><i class="ico-user2"></i></span>
                                        <span class="text">Edit Account</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="figure"><i class="ico-envelop"></i></span>
                                        <span class="text">Manage Subscription</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="figure"><i class="ico-location6"></i></span>
                                        <span class="text">Location Service</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="figure"><i class="ico-switch"></i></span>
                                        <span class="text">Logout</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-danger">
                                        <span class="figure"><i class="ico-minus-circle2"></i></span>
                                        <span class="text">Deactivate</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--/ Content -->
                    </div>
                    <!--/ Offcanvas Left -->

                    <!-- Offcanvas Content -->
                    <div class="offcanvas-content">
                        <!-- Content -->
                        <div class="content slimscroll">
                            <!-- START profile -->
                            <div class="panel nm">
                    <!-- thumbnail -->
                    <div class="thumbnail">
                        <!-- media -->
                        <div class="media">
                            <!-- indicator -->
                            <div class="indicator"><span class="spinner"></span></div>
                            <!--/ indicator -->
                            <img data-toggle="unveil" src="/image/background/400x250/placeholder.jpg" data-src="/image/background/400x250/background3.jpg" alt="Cover" width="100%">
                        </div>
                        <!--/ media -->
                    </div>
                    <!--/ thumbnail -->
                </div>
                <div class="panel-body text-center" style="margin-top:-55px;z-index:11">
                    <img class="img-circle mb5" src="/image/avatar/avatar7.jpg" alt="" width="75">
                    <h5 class="bold mt0 mb5">Erich Reyes</h5>
                    <p>Administrator</p>
                    <button type="button" class="btn btn-primary offcanvas-opener offcanvas-open-ltr"><i class="ico-settings"></i> Settings</button>
                </div>
                            <!--/ END profile -->

                            <!-- START contact -->
                            <div class="media-list media-list-contact">
                    <h5 class="heading pa15 pb0">Family</h5>
                    <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                        <span class="media-object pull-left">
                            <img src="/image/avatar/avatar1.jpg" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-success mr5"></span> Autumn Barker</span>
                            <span class="media-meta ellipsis">Malaysia</span>
                        </span>
                    </a>
                    <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                        <span class="media-object pull-left">
                            <img src="/image/avatar/avatar2.jpg" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-success mr5"></span> Giselle Horn</span>
                            <span class="media-meta ellipsis">Bolivia</span>
                        </span>
                    </a>
                    <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                        <span class="media-object pull-left">
                            <img src="/image/avatar/avatar.png" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-danger mr5"></span> Austin Shields</span>
                            <span class="media-meta ellipsis">Timor-Leste</span>
                        </span>
                    </a>
                    <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                        <span class="media-object pull-left">
                            <img src="/image/avatar/avatar.png" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-danger mr5"></span> Caryn Gibson</span>
                            <span class="media-meta ellipsis">Libya</span>
                        </span>
                    </a>
                    <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                        <span class="media-object pull-left">
                            <img src="/image/avatar/avatar3.jpg" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-success mr5"></span> Nash Evans</span>
                            <span class="media-meta ellipsis">Honduras</span>
                        </span>
                    </a>

                    <h5 class="heading pa15 pb0">Friends</h5>
                    <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                        <span class="media-object pull-left">
                            <img src="/image/avatar/avatar4.jpg" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-default mr5"></span> Josiah Johnson</span>
                            <span class="media-meta ellipsis">Belgium</span>
                        </span>
                    </a>
                    <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                        <span class="media-object pull-left">
                            <img src="/image/avatar/avatar.png" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-default mr5"></span> Philip Hewitt</span>
                            <span class="media-meta ellipsis">Bahrain</span>
                        </span>
                    </a>
                    <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                        <span class="media-object pull-left">
                            <img src="/image/avatar/avatar5.jpg" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-default mr5"></span> Wilma Hunt</span>
                            <span class="media-meta ellipsis">Dominica</span>
                        </span>
                    </a>
                    <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                        <span class="media-object pull-left">
                            <img src="/image/avatar/avatar6.jpg" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-success mr5"></span> Noah Gill</span>
                            <span class="media-meta ellipsis">Guatemala</span>
                        </span>
                    </a>

                    <h5 class="heading pa15 pb0">Others</h5>
                    <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                        <span class="media-object pull-left">
                            <img src="/image/avatar/avatar8.jpg" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-success mr5"></span> David Fisher</span>
                            <span class="media-meta ellipsis">French Guiana</span>
                        </span>
                    </a>
                    <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                        <span class="media-object pull-left">
                            <img src="/image/avatar/avatar9.jpg" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-success mr5"></span> Samantha Avery</span>
                            <span class="media-meta ellipsis">Jersey</span>
                        </span>
                    </a>
                    <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                        <span class="media-object pull-left">
                            <img src="/image/avatar/avatar.png" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-success mr5"></span> Madaline Medina</span>
                            <span class="media-meta ellipsis">Finland</span>
                        </span>
                    </a>
                </div>
                            <!--/ END contact -->
                        </div>
                        <!--/ Content -->
                    </div>
                    <!--/ Offcanvas Content -->

                    <!-- Offcanvas Right -->
                    <div class="offcanvas-right">
                        <!-- Header -->
                        <div class="header pl0 pr0">
                            <ul class="list-table nm">
                                <li style="width:50px;height:34px;" class="text-center">
                                    <a href="javascript:void(0);" class="text-default offcanvas-closer"><i class="ico-arrow-left6 fsize16"></i></a>
                                </li>
                                <li class="text-center">
                                    <h5 class="semibold nm">Autumn Barker</h5>
                                </li>
                                <li style="width:50px;height:34px;" class="text-center">
                                    <a href="javascript:void(0);" class="text-default"><i class="ico-info22 fsize16"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--/ Header -->

                        <!-- Footer -->
                        <div class="footer">
                            <div class="has-icon">
                                <input type="text" class="form-control" placeholder="Type message...">
                                <i class="ico-paper-plane form-control-icon"></i>
                            </div>
                        </div>
                        <!--/ Footer -->

                        <!-- Content -->
                        <div class="content slimscroll">
                            <!-- START chat -->
                            <ul class="media-list media-list-bubble">
                            <li class="media media-right">
                                <a href="javascript:void(0);" class="media-object">
                                    <img src="/image/avatar/avatar7.jpg" class="img-circle" alt="">
                                </a>
                                <div class="media-body">
                                    <p class="media-text">eros non enim commodo hendrerit.</p>
                                    <span class="clearfix"></span>
                                    <p class="media-text">Suspendisse dui.</p>
                                    <span class="clearfix"></span>
                                    <p class="media-text">eu nulla at</p>
                                    <!-- meta -->
                                    <span class="clearfix"></span><!-- important: clearing floated media text -->
                                    <p class="media-meta">Sun, Mar 02</p>
                                </div>
                            </li>
                            <li class="media">
                                <a href="javascript:void(0);" class="media-object">
                                    <img src="/image/avatar/avatar6.jpg" class="img-circle" alt="">
                                </a>
                                <div class="media-body">
                                    <p class="media-text">Etiam laoreet, libero et tristique pellentesque, tellus sem mollis dui, in sodales elit erat.</p>
                                    <span class="clearfix"></span>
                                    <p class="media-text">faucibus ut, nulla. Cras eu tellus</p>
                                    <!-- meta -->
                                    <span class="clearfix"></span><!-- important: clearing floated media text -->
                                    <p class="media-meta">Tue, Oct 01</p>
                                </div>
                            </li>
                            <li class="media media-right">
                                <a href="javascript:void(0);" class="media-object">
                                    <img src="/image/avatar/avatar7.jpg" class="img-circle" alt="">
                                </a>
                                <div class="media-body">
                                    <p class="media-text">Duis a mi fringilla mi lacinia mattis. Integer</p>
                                    <!-- meta -->
                                    <span class="clearfix"></span><!-- important: clearing floated media text -->
                                    <p class="media-meta">Fri, Sep 27</p>
                                </div>
                            </li>
                            <li class="media">
                                <a href="javascript:void(0);" class="media-object">
                                    <img src="/image/avatar/avatar6.jpg" class="img-circle" alt="">
                                </a>
                                <div class="media-body">
                                    <p class="media-text">Praesent interdum ligula eu enim. Etiam imperdiet dictum magna.</p>
                                    <!-- meta -->
                                    <span class="clearfix"></span><!-- important: clearing floated media text -->
                                    <p class="media-meta">Wed, Aug 28</p>
                                </div>
                            </li>
                            <li class="media media-right">
                                <a href="javascript:void(0);" class="media-object">
                                    <img src="/image/avatar/avatar7.jpg" class="img-circle" alt="">
                                </a>
                                <div class="media-body">
                                    <p class="media-text">Aliquam rutrum lorem ac risus. Morbi metus. Vivamus euismod urna.</p>
                                    <!-- meta -->
                                    <span class="clearfix"></span><!-- important: clearing floated media text -->
                                    <p class="media-meta">Sat, Sep 27</p>
                                </div>
                            </li>
                            <li class="media">
                                <a href="javascript:void(0);" class="media-object">
                                    <img src="/image/avatar/avatar6.jpg" class="img-circle" alt="">
                                </a>
                                <div class="media-body">
                                    <p class="media-text">Vestibulum accumsan neque et nunc. Quisque ornare tortor at risus. Nunc ac</p>
                                    <span class="clearfix"></span>
                                    <p class="media-text">Nam porttitor scelerisque neque</p>
                                    <!-- meta -->
                                    <span class="clearfix"></span><!-- important: clearing floated media text -->
                                    <p class="media-meta">Sun, Feb 22</p>
                                </div>
                            </li>
                        </ul>
                            <!--/ END chat -->
                        </div>
                        <!--/ Content -->
                    </div>
                    <!--/ Offcanvas Right -->
                </div>
                <!--/ END Wrapper -->
            </div>
            <!--/ END Offcanvas -->
        </aside>
        <!--/ END Template Sidebar (right) -->

        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold">Form elements</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="javascript:void(0);">Forms</a></li>
                                <li class="active">Elements</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">General</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                <form class="form-horizontal form-bordered" action="">
                                    <h4 class="text-primary mt0">Basic example</h4>
                                    <p class="pb10">Individual form controls automatically receive some global styling. All textual <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, and <code>&lt;select&gt;</code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing.</p>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Input Text</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Input Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Help text</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control">
                                            <span class="help-block">Help text that breaks onto a new line and may extend beyond one line.</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Input Placeholder</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Placeholder...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Textarea</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Select</label>
                                        <div class="col-sm-9">
                                            <select class="form-control">
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                                <option value="4">Option 4</option>
                                                <option value="5">Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Custom select</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="selectize-customselect">
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                                <option value="4">Option 4</option>
                                                <option value="5">Option 5</option>
                                            </select>
                                            <small class="help-block text-danger">*Require selectize plugin to be include.</small>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Select Multiple</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" multiple>
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                                <option value="4">Option 4</option>
                                                <option value="5">Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Static control</label>
                                        <div class="col-sm-9">
                                            <p class="form-control-static">email@example.com</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Checkbox</label>
                                        <div class="col-sm-9">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="option1"> Checkbox 1
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="option2"> Checkbox 2
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Custom checkbox</label>
                                        <div class="col-sm-9">
                                            <span class="checkbox custom-checkbox custom-checkbox-inverse">
                                                <input type="checkbox" name="customcheckbox1" id="customcheckbox1" />
                                                <label for="customcheckbox1">&nbsp;&nbsp;Checkbox 1</label>
                                            </span>
                                            <span class="checkbox custom-checkbox">
                                                <input type="checkbox" name="customcheckbox2" id="customcheckbox2" />
                                                <label for="customcheckbox2">&nbsp;&nbsp;Checkbox 2</label>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Radio Button</label>
                                        <div class="col-sm-9">
                                            <label class="radio-inline">
                                                <input type="radio" value="option1">Radio 1
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" value="option2">Radio 2
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Custom radio</label>
                                        <div class="col-sm-9">
                                            <span class="radio custom-radio custom-radio-primary">  
                                                <input type="radio" id="customradio1" value="option1">  
                                                <label for="customradio1">&nbsp;&nbsp;Radio 1</label>   
                                            </span>
                                            <span class="radio custom-radio custom-radio-teal">  
                                                <input type="radio" id="customradio2" value="option2">  
                                                <label for="customradio2">&nbsp;&nbsp;Radio 2</label>   
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Native file Upload</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="upload">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Custom file Upload</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="text" class="form-control" readonly>
                                                <span class="input-group-btn">
                                                    <div class="btn btn-primary btn-file">
                                                        <span class="icon iconmoon-file-3"></span> Browse <input type="file">
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Stack Input</label>
                                        <div class="col-sm-9">
                                            <div class="form-stack-wrapper">
                                                <div class="form-stack has-icon">
                                                    <input type="text" class="form-control input-lg" placeholder="Stack one">
                                                    <i class="ico-pencil5 form-control-icon"></i>
                                                </div>
                                                <div class="form-stack has-icon pull-left">
                                                    <input type="text" class="form-control input-lg" placeholder="Stack two">
                                                    <i class="ico-camera form-control-icon"></i>
                                                </div>
                                                <div class="form-stack has-icon">
                                                    <input type="text" class="form-control input-lg" placeholder="Stack three">
                                                    <i class="ico-bubble10 form-control-icon"></i>
                                                </div>
                                            </div>
                                            <p class="help-block mb0 mt10">Default font-size on <code>input-lg</code> is 13px</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Has Icon</label>
                                        <div class="col-sm-9">
                                            <div class="has-icon mb10">
                                                <input type="text" class="form-control">
                                                <i class="ico-lock2 form-control-icon"></i>
                                            </div>
                                            <div class="has-icon pull-left">
                                                <input type="text" class="form-control input-lg">
                                                <i class="ico-cog2 form-control-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="form-group no-border">
                                            <label class="col-sm-3 control-label">Button</label>
                                            <div class="col-sm-9">
                                                <button type="submit" class="btn btn-primary">Submit button</button>
                                                <button type="reset" class="btn btn-danger">Reset button</button>
                                            </div>
                                        </div> 
                                    </div>
                                </form>
                            </div>
                            <!-- panel body -->
                        </div>
                        <!--/ END form panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- START panel -->
                        <form class="panel panel-default form-horizontal form-bordered" action="">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Form State</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                <h4 class="text-teal mt0">Validation states</h4>
                                <p class="pb10">Includes validation styles for error, warning, and success states on form controls. To use, add <code>.has-warning</code>, <code>.has-error</code>, or <code>.has-success</code> to the parent element. Any <code>.control-label</code>, <code>.form-control</code>, and <code>.help-block</code> within that element will receive the validation styles.</p>
                                <div class="form-group has-success">
                                    <label class="col-sm-3 control-label">Success state</label>
                                    <div class="col-sm-9">
                                        <div class="has-feedback">
                                            <input class="form-control" type="text">
                                            <span class="ico-checkmark form-control-feedback"></span>
                                        </div>
                                        <select class="form-control mt10">
                                            <option value="">Select</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <span class="checkbox custom-checkbox">  
                                            <input type="checkbox" id="successcheckbox1" value="option1">  
                                            <label for="successcheckbox1">&nbsp;&nbsp;Checkbox</label>   
                                        </span>
                                        <div class="help-block mt10">Help text that breaks onto a new line and may extend beyond one line.</div>
                                    </div>
                                </div>
                                <div class="form-group has-warning">
                                    <label class="col-sm-3 control-label">Warning state</label>
                                    <div class="col-sm-9">
                                        <div class="has-feedback">
                                            <input class="form-control" type="text">
                                            <span class="ico-warning-sign form-control-feedback"></span>
                                        </div>
                                        <select class="form-control mt10">
                                            <option value="">Select</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <span class="radio custom-radio">  
                                            <input type="radio" id="warningradio1" value="option1">  
                                            <label for="warningradio1">&nbsp;&nbsp;Radio Button</label>   
                                        </span>
                                        <div class="help-block mt10">Help text that breaks onto a new line and may extend beyond one line.</div>
                                    </div>
                                </div>
                                <div class="form-group has-error">
                                    <label class="col-sm-3 control-label">Error state</label>
                                    <div class="col-sm-9">
                                        <div class="has-feedback">
                                            <input class="form-control" type="text">
                                            <span class="ico-close2 form-control-feedback"></span>
                                        </div>
                                        <select class="form-control mt10">
                                            <option value="">Select</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                            <option value="5">Option 5</option>
                                        </select>
                                        <span class="checkbox custom-checkbox">  
                                            <input type="checkbox" id="errorcheckbox1" value="option1">  
                                            <label for="errorcheckbox1">&nbsp;&nbsp;Checkbox</label>   
                                        </span>
                                        <div class="help-block mt10">Help text that breaks onto a new line and may extend beyond one line.</div>
                                    </div>
                                </div>
                            </div>
                            <!--/ panel body -->
                        </form>
                        <!-- END form panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- START panel -->
                        <form class="panel panel-default form-horizontal form-bordered" action="">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Form Sizing</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                <h4>Height sizing</h4>
                                <p class="text-info">Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like <code>.col-lg-*</code>.</p>
                                <p><input class="form-control input-lg" type="text" placeholder=".input-lg"></p>
                                <p><input type="text" class="form-control" placeholder="Default input"></p>
                                <p><input class="form-control input-sm" type="text" placeholder=".input-sm"></p>
                                <p>
                                    <select class="form-control input-lg">
                                        <option value="">.input-lg</option>
                                    </select>
                                </p>
                                <p>
                                    <select class="form-control">
                                        <option value="">Default select</option>
                                    </select>
                                </p>
                                <p>
                                    <select class="form-control input-sm">
                                        <option value="">.input-sm</option>
                                    </select>
                                </p>
                            </div>
                            <div class="panel-body">
                                <h4>Column sizing</h4>
                                <p class="text-info">Wrap inputs in grid columns, or any custom parent element, to easily enforce desired widths.</p>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" placeholder=".col-sm-2">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" placeholder=".col-sm-3">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" placeholder=".col-sm-4">
                                    </div>
                                </div>
                            </div>
                            <!--/ panel body -->
                        </form>
                        <!-- END form panel -->
                    </div>

                    <div class="col-md-6">
                        <!-- START panel -->
                        <form class="panel panel-default form-horizontal form-bordered" action="">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Input groups</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                <p class="text-info">Extend form controls by adding text or buttons before, after, or on both sides of any text-based input.</p>
                                <div class="form-group has-warning">
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" placeholder=".input-group-lg">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control" placeholder=".input-group-sm">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="ico-lock2"></i></span>
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon"><i class="ico-key2"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="button">Go!</button>
                                            </span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn btn-info" type="button">Go!</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div><!-- /btn-group -->
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-inverse">Action</button>
                                                <button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ panel body -->
                        </form>
                        <!-- END form panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- START panel -->
                        <form class="panel panel-default form-horizontal form-bordered" action="">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Selectize</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                <p>Selectize is the hybrid of a textbox and box. It's jQuery-based and it's useful for tagging, contact lists, country selectors, and so on.</p>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Tagging</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="selectize-tagging" value="awesome,neat">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Select</label>
                                    <div class="col-sm-9">
                                        <select id="selectize-select" class="form-control" placeholder="Select a person...">
                                            <option value="">Select a person...</option>
                                            <option value="4">Thomas Edison</option>
                                            <option value="1">Nikola</option>
                                            <option value="3">Nikola Tesla</option>
                                            <option value="5">Arnold Schwarzenegger</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Select multiple</label>
                                    <div class="col-sm-9">
                                        <select id="selectize-selectmultiple" class="form-control" placeholder="Select state..." multiple>
                                            <option value="">Select a state...</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA" selected>California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="DC">District of Columbia</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY" selected>Wyoming</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Contact style</label>
                                    <div class="col-sm-9">
                                        <select id="selectize-contact" class="form-control" placeholder="Select contact..."></select>
                                    </div>
                                </div>
                            </div>
                            <!--/ panel body -->
                        </form>
                        <!-- END panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- START panel -->
                        <form class="panel panel-default form-horizontal form-bordered" action="">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Input Masking</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body -->
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">ISBN</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" data-mask="999-99-999-9999-9" placeholder="ISBN">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Date</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" data-mask="99/99/9999" placeholder="Date">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" data-mask="(999) 999-9999" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">TIN</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" data-mask="99-9999999" placeholder="TIN">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">SSN</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" data-mask="999-99-9999" placeholder="SSN">
                                    </div>
                                </div>
                            </div>
                            <!--/ panel body -->
                        </form>
                        <!-- END form panel -->
                    </div>

                    <div class="col-md-6">
                        <!-- START panel -->
                        <form class="panel panel-default form-horizontal form-bordered" action="">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Datepicker</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Default</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="datepicker1" placeholder="Select a date" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Date other month</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="datepicker2" placeholder="Select a date" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Button bar</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="datepicker3" placeholder="Select a date" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Display month &amp; year</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="datepicker4" placeholder="Select a date" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Select date range</label>
                                        <div class="col-sm-8">
                                            <div class="row">
                                                <div class="col-md-6"><input type="text" class="form-control" id="datepicker-from" placeholder="From" /></div>
                                                <div class="col-md-6"><input type="text" class="form-control" id="datepicker-to" placeholder="to" /></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </form>
                        <!-- END form panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START Row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- START panel -->
                        <form class="panel panel-default form-horizontal form-bordered" action="">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Timepicker</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Date + Timepicker</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="datetime-picker" placeholder="Select a date and time" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Timepicker</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="time-picker" placeholder="Select a time" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Time format</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="time-picker-format" placeholder="Select a time" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Time zone</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="time-picker-timezone" placeholder="Select a time" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </form>
                        <!-- END form panel -->
                    </div>

                    <div class="col-md-6">
                        <!-- START panel -->
                        <form class="panel panel-default form-horizontal form-bordered" action="">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Select2</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Basic</label>
                                        <div class="col-sm-8">
                                            <select name="select2-basic">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option><option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option><option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Multiple</label>
                                        <div class="col-sm-8">
                                            <select name="select2-multiple" multiple>
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option><option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option><option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Placeholder</label>
                                        <div class="col-sm-8">
                                            <select name="select2-placeholder" multiple>
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option><option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option><option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </form>
                        <!-- END form panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START Row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- START panel -->
                        <form class="panel panel-default form-horizontal form-bordered" action="">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Bootstrap Touchspin</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Basic</label>
                                        <div class="col-sm-8">
                                            <input type="text" value="55" name="bs-touchspin-basic">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Vertical button</label>
                                        <div class="col-sm-8">
                                            <input type="text" value="55" name="bs-touchspin-vbutton">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">With postfix</label>
                                        <div class="col-sm-8">
                                            <input type="text" value="55" name="bs-touchspin-postfix">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">With prefix</label>
                                        <div class="col-sm-8">
                                            <input type="text" value="55" name="bs-touchspin-prefix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </form>
                        <!-- END form panel -->
                    </div>
                </div>
                <!--/ END row -->
            </div>
            <!--/ END Template Container -->

            <!-- START To Top Scroller -->
            <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
            <!--/ END To Top Scroller -->
        </section>
        <!--/ END Template Main -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- Application and vendor script : mandatory -->
        <script type="text/javascript" src="/js/vendor.js"></script>
        <script type="text/javascript" src="/js/core.js"></script>
        <script type="text/javascript" src="/js/backend/app.js"></script>
        <!--/ Application and vendor script : mandatory -->

        <!-- Plugins and page level script : optional -->
		<script type="text/javascript" src="/js/pace.min.js"></script>
        <script type="text/javascript" src="/plugins/selectize/js/selectize.js"></script>
        <script type="text/javascript" src="/plugins/jquery-ui/js/jquery-ui.js"></script>
        <script type="text/javascript" src="/plugins/jquery-ui/js/addon/timepicker/jquery-ui-timepicker.js"></script>
        <script type="text/javascript" src="/plugins/jquery-ui/js/jquery-ui-touch.js"></script>
        <script type="text/javascript" src="/plugins/inputmask/js/inputmask.js"></script>
        <script type="text/javascript" src="/plugins/select2/js/select2.js"></script>
        <script type="text/javascript" src="/plugins/touchspin/js/jquery.bootstrap-touchspin.js"></script>
        <script type="text/javascript" src="/js/backend/forms/element.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>