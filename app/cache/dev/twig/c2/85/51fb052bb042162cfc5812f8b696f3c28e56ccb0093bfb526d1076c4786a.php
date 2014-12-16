<?php

/* MacAdminBundle::layout.html.twig */
class __TwigTemplate_c28551fb052bb042162cfc5812f8b696f3c28e56ccb0093bfb526d1076c4786a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'admin_header' => array($this, 'block_admin_header'),
            'admin_menu' => array($this, 'block_admin_menu'),
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

    ";
        // line 43
        $this->displayBlock('admin_header', $context, $blocks);
        // line 44
        echo "    <div class=\"container-fluid-full\">
    <div class=\"row-fluid\">
    ";
        // line 46
        $this->displayBlock('admin_menu', $context, $blocks);
        // line 47
        echo "    <noscript>
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
        // line 66
        $this->displayBlock('admin_body', $context, $blocks);
        // line 69
        echo "    <!-- end: Content -->
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
        // line 101
        $this->displayBlock('javascripts', $context, $blocks);
        // line 160
        echo "<!-- end: JavaScript-->
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

    // line 43
    public function block_admin_header($context, array $blocks = array())
    {
        echo " ";
    }

    // line 46
    public function block_admin_menu($context, array $blocks = array())
    {
        echo " ";
    }

    // line 66
    public function block_admin_body($context, array $blocks = array())
    {
        // line 67
        echo "
    ";
    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        // line 102
        echo "

    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery-migrat-1.0.0.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/modernizr.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/excanvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.chosen.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.cleditor.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.noty.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.elfinder.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.gritter.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.imagesloaded.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.masonry.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.knob.modified.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/counter.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/retina.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macadmin/js/custom.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "MacAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 158,  343 => 156,  338 => 154,  333 => 152,  328 => 150,  323 => 148,  318 => 146,  313 => 144,  308 => 142,  303 => 140,  298 => 138,  293 => 136,  288 => 134,  283 => 132,  278 => 130,  273 => 128,  268 => 126,  264 => 125,  260 => 124,  256 => 123,  252 => 122,  247 => 120,  242 => 118,  237 => 116,  232 => 114,  227 => 112,  222 => 110,  217 => 108,  212 => 106,  207 => 104,  203 => 102,  200 => 101,  195 => 67,  192 => 66,  186 => 46,  180 => 43,  173 => 22,  169 => 21,  165 => 20,  160 => 19,  157 => 18,  151 => 7,  144 => 160,  142 => 101,  108 => 69,  106 => 66,  85 => 47,  83 => 46,  79 => 44,  77 => 43,  67 => 36,  60 => 32,  49 => 25,  47 => 18,  33 => 7,  25 => 1,);
    }
}
