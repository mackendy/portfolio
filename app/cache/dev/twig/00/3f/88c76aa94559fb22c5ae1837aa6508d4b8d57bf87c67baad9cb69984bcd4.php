<?php

/* ::baseAdmin.html.twig */
class __TwigTemplate_003f88c76aa94559fb22c5ae1837aa6508d4b8d57bf87c67baad9cb69984bcd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'admin_body' => array($this, 'block_admin_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>

    <!-- start: Meta -->
    <meta charset=\"utf-8\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"Bootstrap Metro Dashboard\">
    <meta name=\"author\" content=\"Dennis Ji\">
    <meta name=\"keyword\" content=\"Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <!-- end: CSS -->


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <link id=\"ie-style\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/css/ie.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <![endif]-->

    <!--[if IE 9]>
    <link id=\"ie9style\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/css/ie9.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <![endif]-->

</head>

<body>

<!-- start: Header -->
<div class=\"navbar\">
<div class=\"navbar-inner\">
<div class=\"container-fluid\">
<a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".top-nav.nav-collapse,.sidebar-nav.nav-collapse\">
    <span class=\"icon-bar\"></span>
    <span class=\"icon-bar\"></span>
    <span class=\"icon-bar\"></span>
</a>
<a class=\"brand\" href=\"index.html\"><span>Mac</span></a>

<!-- start: Header Menu -->
<div class=\"nav-no-collapse header-nav\">
<ul class=\"nav pull-right\">
<li class=\"dropdown hidden-phone\">
    <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <i class=\"icon-bell\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge red\">
\t\t\t\t\t\t\t\t7 </span>
    </a>
    <ul class=\"dropdown-menu notifications\">
        <li class=\"dropdown-menu-title\">
            <span>You have 11 notifications</span>
            <a href=\"#refresh\"><i class=\"icon-repeat\"></i></a>
        </li>
        <li>
            <a href=\"#\">
                <span class=\"icon blue\"><i class=\"icon-user\"></i></span>
                <span class=\"message\">New user registration</span>
                <span class=\"time\">1 min</span>
            </a>
        </li>
        <li>
            <a href=\"#\">
                <span class=\"icon green\"><i class=\"icon-comment-alt\"></i></span>
                <span class=\"message\">New comment</span>
                <span class=\"time\">7 min</span>
            </a>
        </li>
        <li>
            <a href=\"#\">
                <span class=\"icon green\"><i class=\"icon-comment-alt\"></i></span>
                <span class=\"message\">New comment</span>
                <span class=\"time\">8 min</span>
            </a>
        </li>
        <li>
            <a href=\"#\">
                <span class=\"icon green\"><i class=\"icon-comment-alt\"></i></span>
                <span class=\"message\">New comment</span>
                <span class=\"time\">16 min</span>
            </a>
        </li>
        <li>
            <a href=\"#\">
                <span class=\"icon blue\"><i class=\"icon-user\"></i></span>
                <span class=\"message\">New user registration</span>
                <span class=\"time\">36 min</span>
            </a>
        </li>
        <li>
            <a href=\"#\">
                <span class=\"icon yellow\"><i class=\"icon-shopping-cart\"></i></span>
                <span class=\"message\">2 items sold</span>
                <span class=\"time\">1 hour</span>
            </a>
        </li>
        <li class=\"warning\">
            <a href=\"#\">
                <span class=\"icon red\"><i class=\"icon-user\"></i></span>
                <span class=\"message\">User deleted account</span>
                <span class=\"time\">2 hour</span>
            </a>
        </li>
        <li class=\"warning\">
            <a href=\"#\">
                <span class=\"icon red\"><i class=\"icon-shopping-cart\"></i></span>
                <span class=\"message\">New comment</span>
                <span class=\"time\">6 hour</span>
            </a>
        </li>
        <li>
            <a href=\"#\">
                <span class=\"icon green\"><i class=\"icon-comment-alt\"></i></span>
                <span class=\"message\">New comment</span>
                <span class=\"time\">yesterday</span>
            </a>
        </li>
        <li>
            <a href=\"#\">
                <span class=\"icon blue\"><i class=\"icon-user\"></i></span>
                <span class=\"message\">New user registration</span>
                <span class=\"time\">yesterday</span>
            </a>
        </li>
        <li class=\"dropdown-menu-sub-footer\">
            <a>View all notifications</a>
        </li>
    </ul>
</li>
<!-- start: Notifications Dropdown -->
<li class=\"dropdown hidden-phone\">
    <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <i class=\"icon-calendar\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge red\">
\t\t\t\t\t\t\t\t5 </span>
    </a>
    <ul class=\"dropdown-menu tasks\">
        <li class=\"dropdown-menu-title\">
            <span>You have 17 tasks in progress</span>
            <a href=\"#refresh\"><i class=\"icon-repeat\"></i></a>
        </li>
        <li>
            <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">iOS Development</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"percent\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
                <div class=\"taskProgress progressSlim red\">80</div>
            </a>
        </li>
        <li>
            <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Android Development</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"percent\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
                <div class=\"taskProgress progressSlim green\">47</div>
            </a>
        </li>
        <li>
            <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">ARM Development</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"percent\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
                <div class=\"taskProgress progressSlim yellow\">32</div>
            </a>
        </li>
        <li>
            <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">ARM Development</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"percent\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
                <div class=\"taskProgress progressSlim greenLight\">63</div>
            </a>
        </li>
        <li>
            <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">ARM Development</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"percent\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
                <div class=\"taskProgress progressSlim orange\">80</div>
            </a>
        </li>
        <li>
            <a class=\"dropdown-menu-sub-footer\">View all tasks</a>
        </li>
    </ul>
</li>
<!-- end: Notifications Dropdown -->
<!-- start: Message Dropdown -->
<li class=\"dropdown hidden-phone\">
    <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <i class=\"icon-envelope\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge red\">
\t\t\t\t\t\t\t\t4 </span>
    </a>
    <ul class=\"dropdown-menu messages\">
        <li class=\"dropdown-menu-title\">
            <span>You have 9 messages</span>
            <a href=\"#refresh\"><i class=\"icon-repeat\"></i></a>
        </li>
        <li>
            <a href=\"#\">
                <span class=\"avatar\"><img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/img/avatar.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"from\">
\t\t\t\t\t\t\t\t\t\t    \tDennis Ji
\t\t\t\t\t\t\t\t\t\t     </span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">
\t\t\t\t\t\t\t\t\t\t    \t6 min
\t\t\t\t\t\t\t\t\t\t    </span>
\t\t\t\t\t\t\t\t\t\t</span>
                                        <span class=\"message\">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
            </a>
        </li>
        <li>
            <a href=\"#\">
                <span class=\"avatar\"><img src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/img/avatar.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"from\">
\t\t\t\t\t\t\t\t\t\t    \tDennis Ji
\t\t\t\t\t\t\t\t\t\t     </span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">
\t\t\t\t\t\t\t\t\t\t    \t56 min
\t\t\t\t\t\t\t\t\t\t    </span>
\t\t\t\t\t\t\t\t\t\t</span>
                                        <span class=\"message\">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
            </a>
        </li>
        <li>
            <a href=\"#\">
                <span class=\"avatar\"><img src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/img/avatar.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"from\">
\t\t\t\t\t\t\t\t\t\t    \tDennis Ji
\t\t\t\t\t\t\t\t\t\t     </span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">
\t\t\t\t\t\t\t\t\t\t    \t3 hours
\t\t\t\t\t\t\t\t\t\t    </span>
\t\t\t\t\t\t\t\t\t\t</span>
                                        <span class=\"message\">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
            </a>
        </li>
        <li>
            <a href=\"#\">
                <span class=\"avatar\"><img src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/img/avatar.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"from\">
\t\t\t\t\t\t\t\t\t\t    \tDennis Ji
\t\t\t\t\t\t\t\t\t\t     </span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">
\t\t\t\t\t\t\t\t\t\t    \tyesterday
\t\t\t\t\t\t\t\t\t\t    </span>
\t\t\t\t\t\t\t\t\t\t</span>
                                        <span class=\"message\">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
            </a>
        </li>
        <li>
            <a href=\"#\">
                <span class=\"avatar\"><img src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/img/avatar.jpg"), "html", null, true);
        echo "\" alt=\"Avatar\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"from\">
\t\t\t\t\t\t\t\t\t\t    \tDennis Ji
\t\t\t\t\t\t\t\t\t\t     </span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">
\t\t\t\t\t\t\t\t\t\t    \tJul 25, 2012
\t\t\t\t\t\t\t\t\t\t    </span>
\t\t\t\t\t\t\t\t\t\t</span>
                                        <span class=\"message\">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
            </a>
        </li>
        <li>
            <a class=\"dropdown-menu-sub-footer\">View all messages</a>
        </li>
    </ul>
</li>

<!-- start: User Dropdown -->
<li class=\"dropdown\">
    <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <i class=\"halflings-icon white user\"></i> Dennis Ji
        <span class=\"caret\"></span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"dropdown-menu-title\">
            <span>Account Settings</span>
        </li>
        <li><a href=\"#\"><i class=\"halflings-icon user\"></i> Profile</a></li>
        <li><a href=\"login.html\"><i class=\"halflings-icon off\"></i> Logout</a></li>
    </ul>
</li>
<!-- end: User Dropdown -->
</ul>
</div>
<!-- end: Header Menu -->

</div>
</div>
</div>
<!-- start: Header -->
<div class=\"container-fluid-full\">
    <div class=\"row-fluid\">

        <!-- start: Main Menu -->
        <div id=\"sidebar-left\" class=\"span2\">
            <div class=\"nav-collapse sidebar-nav\">
                <ul class=\"nav nav-tabs nav-stacked main-menu\">
                    <li><a href=\"index.html\"><i class=\"icon-bar-chart\"></i><span class=\"hidden-tablet\"> Dashboard</span></a></li>
                    <li><a href=\"messages.html\"><i class=\"icon-envelope\"></i><span class=\"hidden-tablet\"> Messages</span></a></li>
                    <li><a href=\"tasks.html\"><i class=\"icon-tasks\"></i><span class=\"hidden-tablet\"> Tasks</span></a></li>
                    <li><a href=\"ui.html\"><i class=\"icon-eye-open\"></i><span class=\"hidden-tablet\"> UI Features</span></a></li>
                    <li><a href=\"widgets.html\"><i class=\"icon-dashboard\"></i><span class=\"hidden-tablet\"> Widgets</span></a></li>
                    <li>
                        <a class=\"dropmenu\" href=\"#\"><i class=\"icon-folder-close-alt\"></i><span class=\"hidden-tablet\"> Dropdown</span><span class=\"label label-important\"> 3 </span></a>
                        <ul>
                            <li><a class=\"submenu\" href=\"submenu.html\"><i class=\"icon-file-alt\"></i><span class=\"hidden-tablet\"> Sub Menu 1</span></a></li>
                            <li><a class=\"submenu\" href=\"submenu2.html\"><i class=\"icon-file-alt\"></i><span class=\"hidden-tablet\"> Sub Menu 2</span></a></li>
                            <li><a class=\"submenu\" href=\"submenu3.html\"><i class=\"icon-file-alt\"></i><span class=\"hidden-tablet\"> Sub Menu 3</span></a></li>
                        </ul>
                    </li>
                    <li><a href=\"form.html\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Forms</span></a></li>
                    <li><a href=\"chart.html\"><i class=\"icon-list-alt\"></i><span class=\"hidden-tablet\"> Charts</span></a></li>
                    <li><a href=\"typography.html\"><i class=\"icon-font\"></i><span class=\"hidden-tablet\"> Typography</span></a></li>
                    <li><a href=\"gallery.html\"><i class=\"icon-picture\"></i><span class=\"hidden-tablet\"> Gallery</span></a></li>
                    <li><a href=\"table.html\"><i class=\"icon-align-justify\"></i><span class=\"hidden-tablet\"> Tables</span></a></li>
                    <li><a href=\"calendar.html\"><i class=\"icon-calendar\"></i><span class=\"hidden-tablet\"> Calendar</span></a></li>
                    <li><a href=\"file-manager.html\"><i class=\"icon-folder-open\"></i><span class=\"hidden-tablet\"> File Manager</span></a></li>
                    <li><a href=\"icon.html\"><i class=\"icon-star\"></i><span class=\"hidden-tablet\"> Icons</span></a></li>
                    <li><a href=\"login.html\"><i class=\"icon-lock\"></i><span class=\"hidden-tablet\"> Login Page</span></a></li>
                </ul>
            </div>
        </div>
        <!-- end: Main Menu -->
        <noscript>
            <div class=\"alert alert-block span10\">
                <h4 class=\"alert-heading\">Warning!</h4>
                <p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
            </div>
        </noscript>

        <!-- start: Content -->
        <div id=\"content\" class=\"span10\">


            <ul class=\"breadcrumb\">
                <li>
                    <i class=\"icon-home\"></i>
                    <a href=\"index.html\">Home</a>
                    <i class=\"icon-angle-right\"></i>
                </li>
                <li><a href=\"#\">Dashboard</a></li>
            </ul>
            ";
        // line 379
        $this->displayBlock('admin_body', $context, $blocks);
        // line 382
        echo "            <!-- end: Content -->
        </div><!--/#content.span10-->
    </div><!--/fluid-row-->

    <div class=\"modal hide fade\" id=\"myModal\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
            <h3>Settings</h3>
        </div>
        <div class=\"modal-body\">
            <p>Here settings can be configured...</p>
        </div>
        <div class=\"modal-footer\">
            <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
            <a href=\"#\" class=\"btn btn-primary\">Save changes</a>
        </div>
    </div>

    <div class=\"clearfix\"></div>

    <footer>

        <p>
            <span style=\"text-align:left;float:left\">&copy; 2013 <a href=\"http://themifycloud.com/downloads/janux-free-responsive-admin-dashboard-template/\" alt=\"Bootstrap_Metro_Dashboard\">JANUX Responsive Dashboard</a></span>

        </p>

    </footer>



    <!-- start: JavaScript-->
    ";
        // line 414
        $this->displayBlock('javascripts', $context, $blocks);
        // line 473
        echo "    <!-- end: JavaScript-->
</body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "        <link id=\"bootstrap-style\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link id=\"base-style\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link id=\"base-style-responsive\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    ";
    }

    // line 379
    public function block_admin_body($context, array $blocks = array())
    {
        // line 380
        echo "
            ";
    }

    // line 414
    public function block_javascripts($context, array $blocks = array())
    {
        // line 415
        echo "

        <script src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery-migrat-1.0.0.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/modernizr.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/excanvas.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.chosen.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.noty.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.elfinder.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.gritter.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.imagesloaded.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.masonry.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.knob.modified.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/counter.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/retina.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/custom.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "::baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  656 => 471,  651 => 469,  646 => 467,  641 => 465,  636 => 463,  631 => 461,  626 => 459,  621 => 457,  616 => 455,  611 => 453,  606 => 451,  601 => 449,  596 => 447,  591 => 445,  586 => 443,  581 => 441,  576 => 439,  572 => 438,  568 => 437,  564 => 436,  560 => 435,  555 => 433,  550 => 431,  545 => 429,  540 => 427,  535 => 425,  530 => 423,  525 => 421,  520 => 419,  515 => 417,  511 => 415,  508 => 414,  503 => 380,  500 => 379,  493 => 22,  489 => 21,  485 => 20,  480 => 19,  477 => 18,  471 => 7,  464 => 473,  462 => 414,  428 => 382,  426 => 379,  328 => 284,  309 => 268,  290 => 252,  271 => 236,  252 => 220,  65 => 36,  58 => 32,  47 => 25,  45 => 18,  31 => 7,  23 => 1,);
    }
}
