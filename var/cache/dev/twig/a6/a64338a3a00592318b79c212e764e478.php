<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* front_h/hebergement_front.html.twig */
class __TwigTemplate_38a3d275f516f01ec29d7f83187e4bba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_h/hebergement_front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_h/hebergement_front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
\t<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>Travel &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\" content=\"Free HTML5 Template by FREEHTML5.CO\" />
\t<meta name=\"keywords\" content=\"free html5, free template, free bootstrap, html5, css3, mobile first, responsive\" />
\t<meta name=\"author\" content=\"FREEHTML5.CO\" />
 
 
  \t<!-- Facebook and Twitter integration -->
\t<meta property=\"og:title\" content=\"\"/>
\t<meta property=\"og:image\" content=\"\"/>
\t<meta property=\"og:url\" content=\"\"/>
\t<meta property=\"og:site_name\" content=\"\"/>
\t<meta property=\"og:description\" content=\"\"/>
\t<meta name=\"twitter:title\" content=\"\" />
\t<meta name=\"twitter:image\" content=\"\" />
\t<meta name=\"twitter:url\" content=\"\" />
\t<meta name=\"twitter:card\" content=\"\" />
 
\t<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
\t<link rel=\"shortcut icon\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/favicon.ico"), "html", null, true);
        echo "\">
 
\t<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
 
\t<!-- Animate.css -->
\t<link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/animate.css"), "html", null, true);
        echo "\">
\t<!-- Icomoon Icon Fonts-->
\t<link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/icomoon.css"), "html", null, true);
        echo "\">
\t<!-- Bootstrap  -->
\t<link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/bootstrap.css"), "html", null, true);
        echo "\">
\t<!-- Superfish -->
\t<link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/superfish.css"), "html", null, true);
        echo "\">
\t<!-- Magnific Popup -->
\t<link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/magnific-popup.css"), "html", null, true);
        echo "\">
\t<!-- Date Picker -->
\t<link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\">
\t<!-- CS Select -->
\t<link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/cs-select.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/cs-skin-border.css"), "html", null, true);
        echo "\">
 
\t<link rel=\"stylesheet\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/style.css"), "html", null, true);
        echo "\">
 
 
\t<!-- Modernizr JS -->
\t<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- FOR IE9 below -->
\t<!--[if lt IE 9]>
\t<script src=\"js/respond.min.js\"></script>
\t<![endif]-->
 
\t</head>
\t<body>
\t\t<div id=\"fh5co-wrapper\">
\t\t<div id=\"fh5co-page\">
 
\t\t<header id=\"fh5co-header-section\" class=\"sticky-banner\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"nav-header\">
\t\t\t\t\t<a href=\"#\" class=\"js-fh5co-nav-toggle fh5co-nav-toggle dark\"><i></i></a>
\t\t\t\t\t<h1 id=\"fh5co-logo\"><a href=\"index.html\"><i class=\"icon-airplane\"></i>Hermes voyage</a></h1>
\t\t\t\t\t<!-- START #fh5co-menu-wrap -->
\t\t\t\t\t<nav id=\"fh5co-menu-wrap\" role=\"navigation\">
\t\t\t\t\t\t<ul class=\"sf-menu\" id=\"fh5co-primary-menu\">
\t\t\t\t\t\t\t<li><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"vacation.html\" class=\"fh5co-sub-ddown\">Vacations</a>
\t\t\t\t\t\t\t\t<ul class=\"fh5co-sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Family</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">CSS3 &amp; HTML5</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Angular JS</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Node JS</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Django &amp; Python</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"flight.html\">Flights</a></li>
\t\t\t\t\t\t\t<li><a href=\"hotel.html\">Hotel</a></li>
\t\t\t\t\t\t\t<li><a href=\"car.html\">Car</a></li>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"blog.html\">hebergements</a></li>
\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hebergement_index");
        echo "\">Back Office</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
 
\t\t<!-- end:header-top -->
 
\t\t<div class=\"fh5co-hero\">
\t\t\t<div class=\"fh5co-overlay\"></div>
\t\t\t<div class=\"fh5co-cover\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url(images/cover_bg_1.jpg);\">
\t\t\t\t<div class=\"desc\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-5 col-md-5\">
 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc2\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-7 col-sm-push-1 col-md-7 col-md-push-1\">
\t\t\t\t\t\t\t\t\t<h2>Nos Evenements</h2>
\t\t\t\t\t\t\t\t\t<!-- <p><a class=\"btn btn-primary btn-lg\" href=\"#\">Get Started</a></p> -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
 
\t\t</div>
 
 
\t\t<div id=\"fh5co-blog-section\" class=\"fh5co-section-gray\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center heading-section\">
\t\t\t\t\t\t<h3>Our Event</h3>
\t\t\t\t\t\t<p>Vous trouvez ici nos hebergement</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
 
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row row-bottom-padded-md\">
 
 
 
\t\t\t\t        ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hebergements"]) || array_key_exists("hebergements", $context) ? $context["hebergements"] : (function () { throw new RuntimeError('Variable "hebergements" does not exist.', 134, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hebergement"]) {
            // line 135
            echo " 
\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"fh5co-blog\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["hebergement"], "image", [], "any", false, false, false, 138)), "html", null, true);
            echo "\"></a>
\t\t\t\t\t\t\t<div class=\"blog-text\">
\t\t\t\t\t\t\t\t<div class=\"prod-title\">
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">Titre: ";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "adresse", [], "any", false, false, false, 141), "html", null, true);
            echo "</a></h3>
\t\t\t\t\t\t\t\t\t<span class=\"posted_by\">Date Debut: ";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "room", [], "any", false, false, false, 142), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"posted_by\">Date Fin: ";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "amenities", [], "any", false, false, false, 143), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"comment\"><a href=\"\">21<i class=\"icon-bubble2\"></i></a></span>
\t\t\t\t\t\t\t\t\t<p>";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "description", [], "any", false, false, false, 145), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">Lieux: ";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hebergement"], "nb_guest", [], "any", false, false, false, 146), "html", null, true);
            echo "</a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hebergement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo " 
 
 
 
 
 
 
 
 
\t\t

\t\t<footer>
\t\t\t<div id=\"footer\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row row-bottom-padded-md\">
\t\t\t\t\t\t<div class=\"col-md-2 col-sm-2 col-xs-12 fh5co-footer-link\">
\t\t\t\t\t\t\t<h3>About Travel</h3>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 col-sm-2 col-xs-12 fh5co-footer-link\">
\t\t\t\t\t\t\t<h3>Top Flights Routes</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Manila flights</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dubai flights</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Bangkok flights</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Tokyo Flight</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">New York Flights</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 col-sm-2 col-xs-12 fh5co-footer-link\">
\t\t\t\t\t\t\t<h3>Top Hotels</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Boracay Hotel</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dubai Hotel</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Singapore Hotel</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Manila Hotel</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 col-sm-2 col-xs-12 fh5co-footer-link\">
\t\t\t\t\t\t\t<h3>Interest</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Beaches</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Family Travel</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Budget Travel</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Food &amp; Drink</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Honeymoon and Romance</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 col-sm-2 col-xs-12 fh5co-footer-link\">
\t\t\t\t\t\t\t<h3>Best Places</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Boracay Beach</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dubai</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Singapore</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Hongkong</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 col-sm-2 col-xs-12 fh5co-footer-link\">
\t\t\t\t\t\t\t<h3>Affordable</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Food &amp; Drink</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Fare Flights</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center\">
\t\t\t\t\t\t\t<p class=\"fh5co-social-icons\">
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-twitter2\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-facebook2\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-instagram\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-dribbble2\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-youtube\"></i></a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>Copyright 2016 Free Html5 <a href=\"#\">Module</a>. All Rights Reserved. <br>Made with <i class=\"icon-heart3\"></i> by <a href=\"http://freehtml5.co/\" target=\"_blank\">Freehtml5.co</a> / Demo Images: <a href=\"https://unsplash.com/\" target=\"_blank\">Unsplash</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
 
 
 
\t</div>
\t<!-- END fh5co-page -->
 
\t</div>
\t<!-- END fh5co-wrapper -->
 
\t<!-- jQuery -->
 
 
\t<script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- jQuery Easing -->
\t<script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
\t<!-- Bootstrap -->
\t<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- Waypoints -->
\t<script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/sticky.js"), "html", null, true);
        echo "\"></script>
 
\t<!-- Stellar -->
\t<script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- Superfish -->
\t<script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/superfish.js"), "html", null, true);
        echo "\"></script>
\t<!-- Magnific Popup -->
\t<script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/magnific-popup-options.js"), "html", null, true);
        echo "\"></script>
\t<!-- Date Picker -->
\t<script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- CS Select -->
\t<script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/classie.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"js/selectFx.js\"></script>
 
\t<!-- Main JS -->
\t<script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/main.js"), "html", null, true);
        echo "\"></script>
 
\t</body>
</html>
 
 
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front_h/hebergement_front.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  412 => 268,  405 => 264,  400 => 262,  395 => 260,  391 => 259,  386 => 257,  382 => 256,  377 => 254,  371 => 251,  367 => 250,  362 => 248,  357 => 246,  352 => 244,  258 => 152,  246 => 146,  242 => 145,  237 => 143,  233 => 142,  229 => 141,  223 => 138,  218 => 135,  214 => 134,  164 => 87,  126 => 52,  119 => 48,  114 => 46,  110 => 45,  105 => 43,  100 => 41,  95 => 39,  90 => 37,  85 => 35,  80 => 33,  72 => 28,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
\t<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>Travel &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\" content=\"Free HTML5 Template by FREEHTML5.CO\" />
\t<meta name=\"keywords\" content=\"free html5, free template, free bootstrap, html5, css3, mobile first, responsive\" />
\t<meta name=\"author\" content=\"FREEHTML5.CO\" />
 
 
  \t<!-- Facebook and Twitter integration -->
\t<meta property=\"og:title\" content=\"\"/>
\t<meta property=\"og:image\" content=\"\"/>
\t<meta property=\"og:url\" content=\"\"/>
\t<meta property=\"og:site_name\" content=\"\"/>
\t<meta property=\"og:description\" content=\"\"/>
\t<meta name=\"twitter:title\" content=\"\" />
\t<meta name=\"twitter:image\" content=\"\" />
\t<meta name=\"twitter:url\" content=\"\" />
\t<meta name=\"twitter:card\" content=\"\" />
 
\t<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
\t<link rel=\"shortcut icon\" href=\"{{asset('front_office/favicon.ico')}}\">
 
\t<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
 
\t<!-- Animate.css -->
\t<link rel=\"stylesheet\" href=\"{{asset('front_office/css/animate.css')}}\">
\t<!-- Icomoon Icon Fonts-->
\t<link rel=\"stylesheet\" href=\"{{asset('front_office/css/icomoon.css')}}\">
\t<!-- Bootstrap  -->
\t<link rel=\"stylesheet\" href=\"{{ asset('front_office/css/bootstrap.css')}}\">
\t<!-- Superfish -->
\t<link rel=\"stylesheet\" href=\"{{asset('front_office/css/superfish.css')}}\">
\t<!-- Magnific Popup -->
\t<link rel=\"stylesheet\" href=\"{{asset('front_office/css/magnific-popup.css')}}\">
\t<!-- Date Picker -->
\t<link rel=\"stylesheet\" href=\"{{asset('front_office/css/bootstrap-datepicker.min.css')}}\">
\t<!-- CS Select -->
\t<link rel=\"stylesheet\" href=\"{{ asset('front_office/css/cs-select.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('front_office/css/cs-skin-border.css')}}\">
 
\t<link rel=\"stylesheet\" href=\"{{ asset('front_office/css/style.css')}}\">
 
 
\t<!-- Modernizr JS -->
\t<script src=\"{{ asset('front_office/js/modernizr-2.6.2.min.js')}}\"></script>
\t<!-- FOR IE9 below -->
\t<!--[if lt IE 9]>
\t<script src=\"js/respond.min.js\"></script>
\t<![endif]-->
 
\t</head>
\t<body>
\t\t<div id=\"fh5co-wrapper\">
\t\t<div id=\"fh5co-page\">
 
\t\t<header id=\"fh5co-header-section\" class=\"sticky-banner\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"nav-header\">
\t\t\t\t\t<a href=\"#\" class=\"js-fh5co-nav-toggle fh5co-nav-toggle dark\"><i></i></a>
\t\t\t\t\t<h1 id=\"fh5co-logo\"><a href=\"index.html\"><i class=\"icon-airplane\"></i>Hermes voyage</a></h1>
\t\t\t\t\t<!-- START #fh5co-menu-wrap -->
\t\t\t\t\t<nav id=\"fh5co-menu-wrap\" role=\"navigation\">
\t\t\t\t\t\t<ul class=\"sf-menu\" id=\"fh5co-primary-menu\">
\t\t\t\t\t\t\t<li><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"vacation.html\" class=\"fh5co-sub-ddown\">Vacations</a>
\t\t\t\t\t\t\t\t<ul class=\"fh5co-sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Family</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">CSS3 &amp; HTML5</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Angular JS</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Node JS</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Django &amp; Python</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"flight.html\">Flights</a></li>
\t\t\t\t\t\t\t<li><a href=\"hotel.html\">Hotel</a></li>
\t\t\t\t\t\t\t<li><a href=\"car.html\">Car</a></li>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"blog.html\">hebergements</a></li>
\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('app_hebergement_index') }}\">Back Office</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
 
\t\t<!-- end:header-top -->
 
\t\t<div class=\"fh5co-hero\">
\t\t\t<div class=\"fh5co-overlay\"></div>
\t\t\t<div class=\"fh5co-cover\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url(images/cover_bg_1.jpg);\">
\t\t\t\t<div class=\"desc\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-5 col-md-5\">
 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc2\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-7 col-sm-push-1 col-md-7 col-md-push-1\">
\t\t\t\t\t\t\t\t\t<h2>Nos Evenements</h2>
\t\t\t\t\t\t\t\t\t<!-- <p><a class=\"btn btn-primary btn-lg\" href=\"#\">Get Started</a></p> -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
 
\t\t</div>
 
 
\t\t<div id=\"fh5co-blog-section\" class=\"fh5co-section-gray\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center heading-section\">
\t\t\t\t\t\t<h3>Our Event</h3>
\t\t\t\t\t\t<p>Vous trouvez ici nos hebergement</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
 
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row row-bottom-padded-md\">
 
 
 
\t\t\t\t        {% for hebergement in hebergements %}
 
\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"fh5co-blog\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"{{ asset(hebergement.image) }}\"></a>
\t\t\t\t\t\t\t<div class=\"blog-text\">
\t\t\t\t\t\t\t\t<div class=\"prod-title\">
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">Titre: {{ hebergement.adresse }}</a></h3>
\t\t\t\t\t\t\t\t\t<span class=\"posted_by\">Date Debut: {{ hebergement.room }}</span>
\t\t\t\t\t\t\t\t\t<span class=\"posted_by\">Date Fin: {{ hebergement.amenities}}</span>
\t\t\t\t\t\t\t\t\t<span class=\"comment\"><a href=\"\">21<i class=\"icon-bubble2\"></i></a></span>
\t\t\t\t\t\t\t\t\t<p>{{hebergement.description}}</p>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">Lieux: {{ hebergement.nb_guest }}</a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
        {% endfor %}
 
 
 
 
 
 
 
 
 
\t\t

\t\t<footer>
\t\t\t<div id=\"footer\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row row-bottom-padded-md\">
\t\t\t\t\t\t<div class=\"col-md-2 col-sm-2 col-xs-12 fh5co-footer-link\">
\t\t\t\t\t\t\t<h3>About Travel</h3>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 col-sm-2 col-xs-12 fh5co-footer-link\">
\t\t\t\t\t\t\t<h3>Top Flights Routes</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Manila flights</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dubai flights</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Bangkok flights</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Tokyo Flight</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">New York Flights</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 col-sm-2 col-xs-12 fh5co-footer-link\">
\t\t\t\t\t\t\t<h3>Top Hotels</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Boracay Hotel</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dubai Hotel</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Singapore Hotel</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Manila Hotel</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 col-sm-2 col-xs-12 fh5co-footer-link\">
\t\t\t\t\t\t\t<h3>Interest</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Beaches</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Family Travel</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Budget Travel</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Food &amp; Drink</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Honeymoon and Romance</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 col-sm-2 col-xs-12 fh5co-footer-link\">
\t\t\t\t\t\t\t<h3>Best Places</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Boracay Beach</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dubai</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Singapore</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Hongkong</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 col-sm-2 col-xs-12 fh5co-footer-link\">
\t\t\t\t\t\t\t<h3>Affordable</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Food &amp; Drink</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Fare Flights</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center\">
\t\t\t\t\t\t\t<p class=\"fh5co-social-icons\">
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-twitter2\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-facebook2\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-instagram\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-dribbble2\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-youtube\"></i></a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>Copyright 2016 Free Html5 <a href=\"#\">Module</a>. All Rights Reserved. <br>Made with <i class=\"icon-heart3\"></i> by <a href=\"http://freehtml5.co/\" target=\"_blank\">Freehtml5.co</a> / Demo Images: <a href=\"https://unsplash.com/\" target=\"_blank\">Unsplash</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
 
 
 
\t</div>
\t<!-- END fh5co-page -->
 
\t</div>
\t<!-- END fh5co-wrapper -->
 
\t<!-- jQuery -->
 
 
\t<script src=\"{{ asset('front_office/js/jquery.min.js')}}\"></script>
\t<!-- jQuery Easing -->
\t<script src=\"{{ asset('front_office/js/jquery.easing.1.3.js')}}\"></script>
\t<!-- Bootstrap -->
\t<script src=\"{{ asset('front_office/js/bootstrap.min.js')}}\"></script>
\t<!-- Waypoints -->
\t<script src=\"{{ asset('front_office/js/jquery.waypoints.min.js')}}\"></script>
\t<script src=\"{{ asset('front_office/js/sticky.js')}}\"></script>
 
\t<!-- Stellar -->
\t<script src=\"{{ asset('front_office/js/jquery.stellar.min.js')}}\"></script>
\t<!-- Superfish -->
\t<script src=\"{{ asset('front_office/js/hoverIntent.js')}}\"></script>
\t<script src=\"{{ asset('front_office/js/superfish.js')}}\"></script>
\t<!-- Magnific Popup -->
\t<script src=\"{{ asset('front_office/js/jquery.magnific-popup.min.js')}}\"></script>
\t<script src=\"{{ asset('front_office/js/magnific-popup-options.js')}}\"></script>
\t<!-- Date Picker -->
\t<script src=\"{{ asset('front_office/js/bootstrap-datepicker.min.js')}}\"></script>
\t<!-- CS Select -->
\t<script src=\"{{ asset('front_office/js/classie.js')}}\"></script>
\t<script src=\"js/selectFx.js\"></script>
 
\t<!-- Main JS -->
\t<script src=\"{{ asset('front_office/js/main.js')}}\"></script>
 
\t</body>
</html>
 
 
", "front_h/hebergement_front.html.twig", "C:\\Users\\Meriem\\Desktop\\hermes\\templates\\front_h\\hebergement_front.html.twig");
    }
}
