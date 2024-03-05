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
class __TwigTemplate_04f736f65221db584df01e05a360923e extends Template
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
\t<link rel=\"stylesheet\" href=\"https://unpkg.com/swiper/swiper-bundle.min.css\">

 
\t<!-- Modernizr JS -->
\t<script src=\"";
        // line 53
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
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"blog.html\">Hebergements</a></li>
\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Hebergement_index");
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
\t\t\t\t\t\t\t\t\t<h2>Nos Evnements</h2>
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
\t\t\t\t\t\t<p>Vous trouvez ici nos Hebergement</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
 
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row row-bottom-padded-md\">
";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Hebergements"]) || array_key_exists("Hebergements", $context) ? $context["Hebergements"] : (function () { throw new RuntimeError('Variable "Hebergements" does not exist.', 132, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Hebergement"]) {
            // line 133
            echo "\t\t\t<div class=\"swiper-container\">
    <div class=\"swiper-wrapper\">
        <!-- Your slides here --> 

\t<div class=\"col-lg-4 col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"fh5co-blog\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["Hebergement"], "image", [], "any", false, false, false, 139))), "html", null, true);
            echo "\"></a>
\t\t\t\t\t\t\t<div class=\"blog-text\">
\t\t\t\t\t\t\t\t<div class=\"prod-title\">
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\"></a></h3>
\t\t\t\t\t\t\t\t\t<span class=\"posted_by\">Date Debut: ";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Hebergement"], "room", [], "any", false, false, false, 143), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span class=\"comment\"><a href=\"\">21<i class=\"icon-bubble2\"></i></a></span>
\t\t\t\t\t\t\t\t\t<p>";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Hebergement"], "description", [], "any", false, false, false, 146), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">Lieux: ";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Hebergement"], "maxguest", [], "any", false, false, false, 147), "html", null, true);
            echo "</a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t</div>
\t</div>
    <!-- Add Pagination -->
    <div class=\"swiper-pagination\"></div>
    <!-- Add Arrows -->
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
\t\t\t\t</div> 
\t\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Hebergement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "
\t<script src=\"https://unpkg.com/swiper/swiper-bundle.min.js\"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto',
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
\t\t\t 



 
 
 
 
 
 
 
 
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
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- jQuery Easing -->
\t<script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
\t<!-- Bootstrap -->
\t<script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- Waypoints -->
\t<script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/sticky.js"), "html", null, true);
        echo "\"></script>
 
\t<!-- Stellar -->
\t<script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- Superfish -->
\t<script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/superfish.js"), "html", null, true);
        echo "\"></script>
\t<!-- Magnific Popup -->
\t<script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/magnific-popup-options.js"), "html", null, true);
        echo "\"></script>
\t<!-- Date Picker -->
\t<script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- CS Select -->
\t<script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/classie.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"js/selectFx.js\"></script>
 
\t<!-- Main JS -->
\t<script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/main.js"), "html", null, true);
        echo "\"></script>
 
\t</body>
</html>
 
 
";
        
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
        return array (  431 => 296,  424 => 292,  419 => 290,  414 => 288,  410 => 287,  405 => 285,  401 => 284,  396 => 282,  390 => 279,  386 => 278,  381 => 276,  376 => 274,  371 => 272,  258 => 161,  238 => 147,  234 => 146,  228 => 143,  221 => 139,  213 => 133,  209 => 132,  162 => 88,  124 => 53,  116 => 48,  111 => 46,  107 => 45,  102 => 43,  97 => 41,  92 => 39,  87 => 37,  82 => 35,  77 => 33,  69 => 28,  40 => 1,);
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
\t<link rel=\"stylesheet\" href=\"https://unpkg.com/swiper/swiper-bundle.min.css\">

 
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
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"blog.html\">Hebergements</a></li>
\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('app_Hebergement_index') }}\">Back Office</a></li>
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
\t\t\t\t\t\t\t\t\t<h2>Nos Evnements</h2>
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
\t\t\t\t\t\t<p>Vous trouvez ici nos Hebergement</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
 
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row row-bottom-padded-md\">
{% for Hebergement in Hebergements %}
\t\t\t<div class=\"swiper-container\">
    <div class=\"swiper-wrapper\">
        <!-- Your slides here --> 

\t<div class=\"col-lg-4 col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"fh5co-blog\">
\t\t\t\t\t\t\t<a href=\"#\"><img src=\"{{  asset('uploads/' ~ Hebergement.image) }}\"></a>
\t\t\t\t\t\t\t<div class=\"blog-text\">
\t\t\t\t\t\t\t\t<div class=\"prod-title\">
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\"></a></h3>
\t\t\t\t\t\t\t\t\t<span class=\"posted_by\">Date Debut: {{ Hebergement.room }}</span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span class=\"comment\"><a href=\"\">21<i class=\"icon-bubble2\"></i></a></span>
\t\t\t\t\t\t\t\t\t<p>{{Hebergement.description}}</p>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">Lieux: {{ Hebergement.maxguest }}</a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t</div>
\t</div>
    <!-- Add Pagination -->
    <div class=\"swiper-pagination\"></div>
    <!-- Add Arrows -->
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
\t\t\t\t</div> 
\t\t\t\t {% endfor %}

\t<script src=\"https://unpkg.com/swiper/swiper-bundle.min.js\"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto',
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
\t\t\t 



 
 
 
 
 
 
 
 
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
 
 
", "front_h/hebergement_front.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\New folder\\HermesvoyagesPIDEV3A34-main\\templates\\front_h\\hebergement_front.html.twig");
    }
}
