<?php

/* ::base.html.twig */
class __TwigTemplate_ebdfb208cade85292b109a95effae2d1bd99335434f1254c47639bab54f711d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"#\">
    <meta name=\"viewport\" content=\"width=device-width\">

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <style>
        /*body {
            padding-top: 60px;
            padding-bottom: 40px;
        }*/
    </style>
    <!--  <link rel=\"stylesheet\" href=\"/css/bootstrap-responsive.min.css\"> -->





</head>
<body>

<!--[if lt IE 7]>
<p class=\"chromeframe\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
<a href=\"#content\" class=\"sr-only\">Skip to content</a>
<div id=\"admin\"><a href=\"/admin/\" title=\"admin\"><i class=\"icon-cog\"></i></a></div>

<header>
    <div class=\"container\">
        <div id=\"logo\" class=\"pull-left\">
            <h1><a href=\"/\">Mackendy Jeudy</a></h1>
        </div>
        <nav class=\"pull-right\">
            <ul>
                <li><a href=\"/\">Home</a></li>
                <li>Work</li>
                <li>About</li>
                <li><a href=\"/contact\">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<div id=\"top-panneau\">
    <div id=\"top-content\">
        <!-- content slide -->
        Développeur-Intégrateur Web
    </div>
    <div class=\"container\">
        <div class=\"open\"><i class=\"icon-double-angle-up\"></i></div>
    </div>
</div>

<div class=\"clearfix\"></div>

<div class=\"container\" id=\"content\">
    <div id=\"side-bar-left\" class=\"col-md-2\">
        <div id=\"profil-picture\">
            <!-- data-content=\"bienvenue a tous sur mon tout nouveau portfolio.\" data-original-title=\"Hello !\" -->
            <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macportfolio/images/mackendy-jeudy.jpg"), "html", null, true);
        echo "\" alt=\"profile picture\" class=\"img-responsive\"/>
        </div>
        <div class=\"about-me\">
            <ul>
                <li>
                    <div id=\"localisation\">
                        <span> <i class=\"icon-map-marker\"></i></span> Paris
                    </div>
                </li>
                <li>
                    <div id=\"email\">
                        <span> <i class=\"icon-envelope-alt\"></i></span> mackendy.jeudy
                    </div>
                </li>
                <li>
                    <div id=\"phone\">
                        <span><i class=\"icon-phone\"></i></span> 06-66-79-27-37
                    </div>
                </li>
            </ul>
        </div>
        <div id=\"reseaux\" class=\"\">
                    <span class=\"twitter\">
                        <a href=\"#\" title=\"twitter\"><i class=\"icon-twitter\"></i></a>
                    </span>
                    <span class=\"youtube\">
                        <a href=\"#\" title=\"youtube\"><i class=\"icon-youtube\"></i></a>
                    </span>
                    <span class=\"github\">
                        <a href=\"#\" title=\"github\"><i class=\"icon-github\"></i></a>
                    </span>
        </div>
    </div>
    <!-- <div class=\"clearfix\"></div> -->

    <div id=\"main-content\" class=\"col-md-8 \">
        ";
        // line 113
        $this->displayBlock('body', $context, $blocks);
        // line 116
        echo "    </div>

    <div id=\"side-bar-right\" class=\"col-md-2\">
        <div style=\"background: white;text-align:center;\">
            side bar right
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>
<footer>
    <p>
        Copyright &copy; <?php echo date( 'Y' ); ?> <strong>Mackendy Jeudy</strong>. All Rights Reserved.<br />
        Designé, Développé et Administré par <strong>Mackendy Jeudy</strong>.
    </p>
</footer>



";
        // line 153
        $this->displayBlock('javascripts', $context, $blocks);
        // line 173
        echo "</body>
</html>

";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macportfolio/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macportfolio/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link href='http://fonts.googleapis.com/css?family=Pacifico|Poiret+One|Ubuntu|Telex|Numans|Raleway+Dots' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macportfolio/css/main.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macportfolio/css/validationEngine.jquery.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    ";
    }

    // line 113
    public function block_body($context, array $blocks = array())
    {
        // line 114
        echo "
        ";
    }

    // line 153
    public function block_javascripts($context, array $blocks = array())
    {
        // line 154
        echo "
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macportfolio/js/vendor/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macportfolio/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"), "html", null, true);
        echo "\"></script>

    <script>window.jQuery || document.write('<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macportfolio/js/vendor/jquery-1.9.1.min.js"), "html", null, true);
        echo " \"><\\/script>')</script>
    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macportfolio/js/jquery.validationEngine-fr.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macportfolio/js/jquery.validationEngine.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>

    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macportfolio/js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/macportfolio/js/main.js"), "html", null, true);
        echo "\"></script>

    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 164,  258 => 162,  253 => 160,  249 => 159,  245 => 158,  240 => 156,  236 => 155,  233 => 154,  230 => 153,  225 => 114,  222 => 113,  216 => 18,  212 => 17,  207 => 15,  202 => 14,  199 => 13,  193 => 9,  186 => 173,  184 => 153,  145 => 116,  143 => 113,  104 => 77,  45 => 21,  42 => 20,  40 => 13,  33 => 9,  23 => 1,);
    }
}
