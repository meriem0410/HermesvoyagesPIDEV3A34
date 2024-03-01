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

/* front_h/show.html.twig */
class __TwigTemplate_187c2728e7dd0d25915b4212e21ee1db extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_h/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_h/show.html.twig"));

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
\t
 
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
\t\t    <div id=\"fh5co-wrapper\">
        <div id=\"fh5co-page\">

            <header id=\"fh5co-header-section\" class=\"sticky-banner\">
                <div class=\"container\">
                    <div class=\"nav-header\">
                        <a href=\"#\" class=\"js-fh5co-nav-toggle fh5co-nav-toggle dark\"><i></i></a>
                        <h1 id=\"fh5co-logo\"><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/index.html"), "html", null, true);
        echo "\"><i class=\"icon-airplane\"></i>Hermes Voyage</a></h1>
                        <!-- START #fh5co-menu-wrap -->
                        <nav id=\"fh5co-menu-wrap\" role=\"navigation\">
                            <ul class=\"sf-menu\" id=\"fh5co-primary-menu\">
                                <li class=\"active\"><a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/index.html"), "html", null, true);
        echo "\">Acceuil</a></li>
                                <li>
                                    <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/vacation.html"), "html", null, true);
        echo "\" class=\"fh5co-sub-ddown\">Voyages organisés</a>
                                
                                </li>
                                <li><a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/flight.html"), "html", null, true);
        echo "\">Transport</a></li>
                                <li><a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/car.html"), "html", null, true);
        echo "\">Hebergement</a></li>
                                <li><a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/car.html"), "html", null, true);
        echo "\">E-tourism</a></li>
                                <li><a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/blog.html"), "html", null, true);
        echo "\">Evenement</a></li>
                                
                            </ul>
                        </nav>

                    </div>
                </div>
            </header>
            <div class=\"fh5co-hero\">
\t\t\t<div class=\"fh5co-overlay\"></div>
\t\t\t<div class=\"fh5co-cover\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url('";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("public/front_office/images/cover_bg_3.jpg"), "html", null, true);
        echo "'); background-size: cover; background-position: center;\">
\t\t\t\t<div class=\"desc\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-5 col-md-5\">
\t\t\t\t\t\t\t\t<!-- <a href=\"index.html\" id=\"main-logo\">Travel</a> -->
\t\t\t\t\t\t\t\t<div class=\"tabulation animate-box\">

\t\t\t\t\t\t\t\t  <!-- Nav tabs -->
\t\t\t\t\t\t\t\t   <ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t      <li role=\"presentation\" class=\"active\">
\t\t\t\t\t\t\t\t      \t<a href=\"#flights\" aria-controls=\"flights\" role=\"tab\" data-toggle=\"tab\">Flights</a>
\t\t\t\t\t\t\t\t      </li>
\t\t\t\t\t\t\t\t      <li role=\"presentation\">
\t\t\t\t\t\t\t\t    \t   <a href=\"#hotels\" aria-controls=\"hotels\" role=\"tab\" data-toggle=\"tab\">Hotels</a>
\t\t\t\t\t\t\t\t      </li>
\t\t\t\t\t\t\t\t      <li role=\"presentation\">
\t\t\t\t\t\t\t\t    \t   <a href=\"#packages\" aria-controls=\"packages\" role=\"tab\" data-toggle=\"tab\">Packages</a>
\t\t\t\t\t\t\t\t      </li>
\t\t\t\t\t\t\t\t   </ul>

\t\t\t\t\t\t\t\t   <!-- Tab panes -->
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t <div role=\"tabpanel\" class=\"tab-pane active\" id=\"flights\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"from\">From:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"from-place\" placeholder=\"Los Angeles, USA\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"from\">To:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"to-place\" placeholder=\"Tokyo, Japan\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt alternate\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"date-start\">Check In:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"date-start\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt alternate\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"date-end\">Check Out:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"date-end\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"class\">Class:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-border\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Economy</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"economy\">Economy</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"first\">First</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"business\">Business</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"class\">Adult:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-border\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"class\">Children:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-border\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"Search Flight\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t </div>

\t\t\t\t\t\t\t\t\t <div role=\"tabpanel\" class=\"tab-pane\" id=\"hotels\">
\t\t\t\t\t\t\t\t\t \t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-12 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"from\">City:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"from-place\" placeholder=\"Los Angeles, USA\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt alternate\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"date-start\">Return:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"date-start\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt alternate\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"date-end\">Check Out:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"date-end\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"class\">Rooms:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-border\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"economy\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"first\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"business\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"class\">Adult:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-border\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"class\">Children:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-border\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"Search Hotel\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t </div>

\t\t\t\t\t\t\t\t\t <div role=\"tabpanel\" class=\"tab-pane\" id=\"packages\">
\t\t\t\t\t\t\t\t\t \t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"from\">City:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"from-place\" placeholder=\"Los Angeles, USA\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"from\">Destination:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"to-place\" placeholder=\"Tokyo, Japan\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt alternate\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"date-start\">Departs:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"date-start\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt alternate\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"date-end\">Return:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"date-end\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"class\">Rooms:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-border\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"economy\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"first\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"business\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"class\">Adult:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-border\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"class\">Children:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-border\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"Search Packages\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc2 animate-box\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-7 col-sm-push-1 col-md-7 col-md-push-1\">
\t\t\t\t\t\t\t\t\t<p>HandCrafted by <a  target=\"_blank\" class=\"fh5co-site-name\">FreeHTML5.co</a></p>
\t\t\t\t\t\t\t\t\t<h2>Exclusive Limited Time Offer</h2>
\t\t\t\t\t\t\t\t\t<h3>Fly to Hong Kong via Los Angeles, USA</h3>
\t\t\t\t\t\t\t\t\t<span class=\"price\">\$599</span>
\t\t\t\t\t\t\t\t\t<!-- <p><a class=\"btn btn-primary btn-lg\" href=\"#\">Get Started</a></p> -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t\t

\t\t<div id=\"fh5co-tours\" class=\"fh5co-section-gray\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center heading-section animate-box\">
\t\t\t\t\t\t<h3>Details</h3>
\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row row-bottom-padded-md\">
\t\t\t\t\t<div class=\"col-md-12 animate-box\">
\t\t\t\t\t\t<h2 class=\"heading-title\">Todays Flight Deal</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 animate-box\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<h4>Better Deals, More Abilities</h4>
\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<h4>Keep up with the news of your airline</h4>
\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<h4>In-Flight Experience</h4>
\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 animate-box\">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"images/cover_bg_3.jpg\" alt=\"travel\">
\t\t\t\t\t\t<a href=\"#\" class=\"flight-book\">
\t\t\t\t\t\t\t<div class=\"plane-name\">
\t\t\t\t\t\t\t\t<span class=\"p-flight\">United States Airways</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t<h4>HK-MNL</h4>
\t\t\t\t\t\t\t\t\t<span>Dec 20 - Dec29</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"right\">
\t\t\t\t\t\t\t\t\t<span class=\"price\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-down22\"></i>
\t\t\t\t\t\t\t\t\t\t\$1000
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"flight-book\">
\t\t\t\t\t\t\t<div class=\"plane-name\">
\t\t\t\t\t\t\t\t<span class=\"p-flight\">Qatar Airways</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t<h4>HK-MNL</h4>
\t\t\t\t\t\t\t\t\t<span>Dec 20 - Dec29</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"right\">
\t\t\t\t\t\t\t\t\t<span class=\"price\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-down22\"></i>
\t\t\t\t\t\t\t\t\t\t\$790
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"flight-book\">
\t\t\t\t\t\t\t<div class=\"plane-name\">
\t\t\t\t\t\t\t\t<span class=\"p-flight\">Philippine Airline</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t<h4>MNL-HK</h4>
\t\t\t\t\t\t\t\t\t<span>Dec 20 - Dec29</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"right\">
\t\t\t\t\t\t\t\t\t<span class=\"price\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-down22\"></i>
\t\t\t\t\t\t\t\t\t\t\$500
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"flight-book\">
\t\t\t\t\t\t\t<div class=\"plane-name\">
\t\t\t\t\t\t\t\t<span class=\"p-flight\">China Airways</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t<h4>HK-LAS</h4>
\t\t\t\t\t\t\t\t\t<span>Dec 20 - Dec29</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"right\">
\t\t\t\t\t\t\t\t\t<span class=\"price\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-down22\"></i>
\t\t\t\t\t\t\t\t\t\t\$900
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row row-bottom-padded-md\">
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-tours animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t\t<div href=\"#\"><img src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/images/place-1.jpg"), "html", null, true);
        echo "\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t<h3>New York</h3>
\t\t\t\t\t\t\t\t<span>3 nights</span>
\t\t\t\t\t\t\t\t<span class=\"price\">\$1,000</span>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary btn-outline\" href=\"#\">Book Now <i class=\"icon-arrow-right22\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-tours animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t\t<div href=\"#\"><img src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/images/place-2.jpg"), "html", null, true);
        echo "\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t<h3>Philippines</h3>
\t\t\t\t\t\t\t\t<span>4 nights</span>
\t\t\t\t\t\t\t\t<span class=\"price\">\$1,000</span>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary btn-outline\" href=\"#\">Book Now <i class=\"icon-arrow-right22\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-tours animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t\t<div href=\"#\"><img src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/images/place-3.jpg"), "html", null, true);
        echo "\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t<h3>Hongkong</h3>
\t\t\t\t\t\t\t\t<span>2 nights</span>
\t\t\t\t\t\t\t\t<span class=\"price\">\$1,000</span>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary btn-outline\" href=\"#\">Book Now <i class=\"icon-arrow-right22\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-tours animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t\t<div href=\"#\"><img src=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/images/place-4.jpg"), "html", null, true);
        echo "\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t<h3>New York</h3>
\t\t\t\t\t\t\t\t<span>3 nights</span>
\t\t\t\t\t\t\t\t<span class=\"price\">\$1,000</span>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary btn-outline\" href=\"#\">Book Now <i class=\"icon-arrow-right22\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"fh5co-testimonial\" style=\"background-image:('";
        // line 477
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("public/front_office/images/cover_bg_3.jpg"), "html", null, true);
        echo "'); background-size: cover; background-position: center;\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row animate-box\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center fh5co-heading\">
\t\t\t\t\t<h2>Happy Clients</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t ";
        // line 485
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 485, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
            // line 486
            echo " 
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box-testimony animate-box\">
\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t<span class=\"quote\"><span><i class=\"icon-quotes-right\"></i></span></span>
\t\t\t\t\t\t\t<p>";
            // line 491
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avi"], "commentaire", [], "any", false, false, false, 491), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t<p class=\"author\"> <span class=\"subtext\">Creative Director</span></p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 498
        echo "\t\t\t</div>
\t\t</div>
\t</div>
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

\t

\t</div>
\t<!-- END fh5co-page -->

\t</div>
\t<!-- END fh5co-wrapper -->

\t<!-- jQuery -->


\t<script src=\"js/jquery.min.js\"></script>
\t<!-- jQuery Easing -->
\t<script src=\"js/jquery.easing.1.3.js\"></script>
\t<!-- Bootstrap -->
\t<script src=\"js/bootstrap.min.js\"></script>
\t<!-- Waypoints -->
\t<script src=\"js/jquery.waypoints.min.js\"></script>
\t<script src=\"js/sticky.js\"></script>

\t<!-- Stellar -->
\t<script src=\"js/jquery.stellar.min.js\"></script>
\t<!-- Superfish -->
\t<script src=\"js/hoverIntent.js\"></script>
\t<script src=\"js/superfish.js\"></script>
\t<!-- Magnific Popup -->
\t<script src=\"js/jquery.magnific-popup.min.js\"></script>
\t<script src=\"js/magnific-popup-options.js\"></script>
\t<!-- Date Picker -->
\t<script src=\"js/bootstrap-datepicker.min.js\"></script>
\t<!-- CS Select -->
\t<script src=\"js/classie.js\"></script>
\t<script src=\"js/selectFx.js\"></script>
\t
\t<!-- Main JS -->
\t<script src=\"js/main.js\"></script>

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
        return "front_h/show.html.twig";
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
        return array (  622 => 498,  609 => 491,  602 => 486,  598 => 485,  587 => 477,  569 => 462,  555 => 451,  541 => 440,  527 => 429,  184 => 89,  171 => 79,  167 => 78,  163 => 77,  159 => 76,  153 => 73,  148 => 71,  141 => 67,  123 => 52,  116 => 48,  111 => 46,  107 => 45,  102 => 43,  97 => 41,  92 => 39,  87 => 37,  82 => 35,  77 => 33,  43 => 1,);
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
\t
 
\t<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
 
\t<!-- Animate.css -->
\t<link rel=\"stylesheet\" href=\"{{asset('front_office/css/animate.css')}}\">
\t<!-- Icomoon Icon Fonts-->
\t<link rel=\"stylesheet\" href=\"{{asset('front_office/css/icomoon.css')}}\">
\t<!-- Bootstrap  -->
\t<link rel=\"stylesheet\" href=\"{{asset('front_office/css/bootstrap.css')}}\">
\t<!-- Superfish -->
\t<link rel=\"stylesheet\" href=\"{{asset('front_office/css/superfish.css')}}\">
\t<!-- Magnific Popup -->
\t<link rel=\"stylesheet\" href=\"{{asset('front_office/css/magnific-popup.css')}}\">
\t<!-- Date Picker -->
\t<link rel=\"stylesheet\" href=\"{{asset('front_office/css/bootstrap-datepicker.min.css')}}\">
\t<!-- CS Select -->
\t<link rel=\"stylesheet\" href=\"{{asset('front_office/css/cs-select.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('front_office/css/cs-skin-border.css')}}\">
 
\t<link rel=\"stylesheet\" href=\"{{asset('front_office/css/style.css')}}\">
 
 
\t<!-- Modernizr JS -->
\t<script src=\"{{ asset('front_office/js/modernizr-2.6.2.min.js')}}\"></script>
\t<!-- FOR IE9 below -->
\t<!--[if lt IE 9]>
\t<script src=\"js/respond.min.js\"></script>
\t<![endif]-->
 
\t</head>
\t<body>
\t\t    <div id=\"fh5co-wrapper\">
        <div id=\"fh5co-page\">

            <header id=\"fh5co-header-section\" class=\"sticky-banner\">
                <div class=\"container\">
                    <div class=\"nav-header\">
                        <a href=\"#\" class=\"js-fh5co-nav-toggle fh5co-nav-toggle dark\"><i></i></a>
                        <h1 id=\"fh5co-logo\"><a href=\"{{ asset('front_office/index.html') }}\"><i class=\"icon-airplane\"></i>Hermes Voyage</a></h1>
                        <!-- START #fh5co-menu-wrap -->
                        <nav id=\"fh5co-menu-wrap\" role=\"navigation\">
                            <ul class=\"sf-menu\" id=\"fh5co-primary-menu\">
                                <li class=\"active\"><a href=\"{{ asset('front_office/index.html') }}\">Acceuil</a></li>
                                <li>
                                    <a href=\"{{ asset('front_office/vacation.html') }}\" class=\"fh5co-sub-ddown\">Voyages organisés</a>
                                
                                </li>
                                <li><a href=\"{{ asset('front_office/flight.html') }}\">Transport</a></li>
                                <li><a href=\"{{ asset('front_office/car.html') }}\">Hebergement</a></li>
                                <li><a href=\"{{ asset('front_office/car.html') }}\">E-tourism</a></li>
                                <li><a href=\"{{ asset('front_office/blog.html') }}\">Evenement</a></li>
                                
                            </ul>
                        </nav>

                    </div>
                </div>
            </header>
            <div class=\"fh5co-hero\">
\t\t\t<div class=\"fh5co-overlay\"></div>
\t\t\t<div class=\"fh5co-cover\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url('{{asset('public/front_office/images/cover_bg_3.jpg')}}'); background-size: cover; background-position: center;\">
\t\t\t\t<div class=\"desc\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-5 col-md-5\">
\t\t\t\t\t\t\t\t<!-- <a href=\"index.html\" id=\"main-logo\">Travel</a> -->
\t\t\t\t\t\t\t\t<div class=\"tabulation animate-box\">

\t\t\t\t\t\t\t\t  <!-- Nav tabs -->
\t\t\t\t\t\t\t\t   <ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t      <li role=\"presentation\" class=\"active\">
\t\t\t\t\t\t\t\t      \t<a href=\"#flights\" aria-controls=\"flights\" role=\"tab\" data-toggle=\"tab\">Flights</a>
\t\t\t\t\t\t\t\t      </li>
\t\t\t\t\t\t\t\t      <li role=\"presentation\">
\t\t\t\t\t\t\t\t    \t   <a href=\"#hotels\" aria-controls=\"hotels\" role=\"tab\" data-toggle=\"tab\">Hotels</a>
\t\t\t\t\t\t\t\t      </li>
\t\t\t\t\t\t\t\t      <li role=\"presentation\">
\t\t\t\t\t\t\t\t    \t   <a href=\"#packages\" aria-controls=\"packages\" role=\"tab\" data-toggle=\"tab\">Packages</a>
\t\t\t\t\t\t\t\t      </li>
\t\t\t\t\t\t\t\t   </ul>

\t\t\t\t\t\t\t\t   <!-- Tab panes -->
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t <div role=\"tabpanel\" class=\"tab-pane active\" id=\"flights\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"from\">From:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"from-place\" placeholder=\"Los Angeles, USA\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"from\">To:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"to-place\" placeholder=\"Tokyo, Japan\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt alternate\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"date-start\">Check In:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"date-start\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt alternate\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"date-end\">Check Out:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"date-end\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"class\">Class:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-border\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>Economy</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"economy\">Economy</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"first\">First</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"business\">Business</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"class\">Adult:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-border\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"class\">Children:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-border\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"Search Flight\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t </div>

\t\t\t\t\t\t\t\t\t <div role=\"tabpanel\" class=\"tab-pane\" id=\"hotels\">
\t\t\t\t\t\t\t\t\t \t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-12 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"from\">City:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"from-place\" placeholder=\"Los Angeles, USA\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt alternate\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"date-start\">Return:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"date-start\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt alternate\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"date-end\">Check Out:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"date-end\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"class\">Rooms:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-border\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"economy\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"first\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"business\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"class\">Adult:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-border\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"class\">Children:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-border\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"Search Hotel\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t </div>

\t\t\t\t\t\t\t\t\t <div role=\"tabpanel\" class=\"tab-pane\" id=\"packages\">
\t\t\t\t\t\t\t\t\t \t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"from\">City:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"from-place\" placeholder=\"Los Angeles, USA\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"from\">Destination:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"to-place\" placeholder=\"Tokyo, Japan\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt alternate\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"date-start\">Departs:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"date-start\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt alternate\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"date-end\">Return:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"date-end\" placeholder=\"mm/dd/yyyy\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"class\">Rooms:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-border\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"economy\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"first\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"business\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"class\">Adult:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-border\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxs-12 col-xs-6 mt\">
\t\t\t\t\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"class\">Children:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"cs-select cs-skin-border\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" disabled selected>1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"Search Packages\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc2 animate-box\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-7 col-sm-push-1 col-md-7 col-md-push-1\">
\t\t\t\t\t\t\t\t\t<p>HandCrafted by <a  target=\"_blank\" class=\"fh5co-site-name\">FreeHTML5.co</a></p>
\t\t\t\t\t\t\t\t\t<h2>Exclusive Limited Time Offer</h2>
\t\t\t\t\t\t\t\t\t<h3>Fly to Hong Kong via Los Angeles, USA</h3>
\t\t\t\t\t\t\t\t\t<span class=\"price\">\$599</span>
\t\t\t\t\t\t\t\t\t<!-- <p><a class=\"btn btn-primary btn-lg\" href=\"#\">Get Started</a></p> -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t\t

\t\t<div id=\"fh5co-tours\" class=\"fh5co-section-gray\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center heading-section animate-box\">
\t\t\t\t\t\t<h3>Details</h3>
\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row row-bottom-padded-md\">
\t\t\t\t\t<div class=\"col-md-12 animate-box\">
\t\t\t\t\t\t<h2 class=\"heading-title\">Todays Flight Deal</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 animate-box\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<h4>Better Deals, More Abilities</h4>
\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<h4>Keep up with the news of your airline</h4>
\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<h4>In-Flight Experience</h4>
\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 animate-box\">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"images/cover_bg_3.jpg\" alt=\"travel\">
\t\t\t\t\t\t<a href=\"#\" class=\"flight-book\">
\t\t\t\t\t\t\t<div class=\"plane-name\">
\t\t\t\t\t\t\t\t<span class=\"p-flight\">United States Airways</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t<h4>HK-MNL</h4>
\t\t\t\t\t\t\t\t\t<span>Dec 20 - Dec29</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"right\">
\t\t\t\t\t\t\t\t\t<span class=\"price\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-down22\"></i>
\t\t\t\t\t\t\t\t\t\t\$1000
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"flight-book\">
\t\t\t\t\t\t\t<div class=\"plane-name\">
\t\t\t\t\t\t\t\t<span class=\"p-flight\">Qatar Airways</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t<h4>HK-MNL</h4>
\t\t\t\t\t\t\t\t\t<span>Dec 20 - Dec29</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"right\">
\t\t\t\t\t\t\t\t\t<span class=\"price\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-down22\"></i>
\t\t\t\t\t\t\t\t\t\t\$790
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"flight-book\">
\t\t\t\t\t\t\t<div class=\"plane-name\">
\t\t\t\t\t\t\t\t<span class=\"p-flight\">Philippine Airline</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t<h4>MNL-HK</h4>
\t\t\t\t\t\t\t\t\t<span>Dec 20 - Dec29</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"right\">
\t\t\t\t\t\t\t\t\t<span class=\"price\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-down22\"></i>
\t\t\t\t\t\t\t\t\t\t\$500
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"flight-book\">
\t\t\t\t\t\t\t<div class=\"plane-name\">
\t\t\t\t\t\t\t\t<span class=\"p-flight\">China Airways</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t<h4>HK-LAS</h4>
\t\t\t\t\t\t\t\t\t<span>Dec 20 - Dec29</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"right\">
\t\t\t\t\t\t\t\t\t<span class=\"price\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-down22\"></i>
\t\t\t\t\t\t\t\t\t\t\$900
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row row-bottom-padded-md\">
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-tours animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t\t<div href=\"#\"><img src=\"{{asset('front_office/images/place-1.jpg')}}\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t<h3>New York</h3>
\t\t\t\t\t\t\t\t<span>3 nights</span>
\t\t\t\t\t\t\t\t<span class=\"price\">\$1,000</span>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary btn-outline\" href=\"#\">Book Now <i class=\"icon-arrow-right22\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-tours animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t\t<div href=\"#\"><img src=\"{{asset('front_office/images/place-2.jpg')}}\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t<h3>Philippines</h3>
\t\t\t\t\t\t\t\t<span>4 nights</span>
\t\t\t\t\t\t\t\t<span class=\"price\">\$1,000</span>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary btn-outline\" href=\"#\">Book Now <i class=\"icon-arrow-right22\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-tours animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t\t<div href=\"#\"><img src=\"{{asset('front_office/images/place-3.jpg')}}\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t<h3>Hongkong</h3>
\t\t\t\t\t\t\t\t<span>2 nights</span>
\t\t\t\t\t\t\t\t<span class=\"price\">\$1,000</span>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary btn-outline\" href=\"#\">Book Now <i class=\"icon-arrow-right22\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-tours animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t\t<div href=\"#\"><img src=\"{{asset('front_office/images/place-4.jpg')}}\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t<h3>New York</h3>
\t\t\t\t\t\t\t\t<span>3 nights</span>
\t\t\t\t\t\t\t\t<span class=\"price\">\$1,000</span>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary btn-outline\" href=\"#\">Book Now <i class=\"icon-arrow-right22\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"fh5co-testimonial\" style=\"background-image:('{{asset('public/front_office/images/cover_bg_3.jpg')}}'); background-size: cover; background-position: center;\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row animate-box\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center fh5co-heading\">
\t\t\t\t\t<h2>Happy Clients</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t {% for avi  in  avis %}
 
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box-testimony animate-box\">
\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t<span class=\"quote\"><span><i class=\"icon-quotes-right\"></i></span></span>
\t\t\t\t\t\t\t<p>{{ avi.commentaire }}</p>
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t<p class=\"author\"> <span class=\"subtext\">Creative Director</span></p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</div>
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

\t

\t</div>
\t<!-- END fh5co-page -->

\t</div>
\t<!-- END fh5co-wrapper -->

\t<!-- jQuery -->


\t<script src=\"js/jquery.min.js\"></script>
\t<!-- jQuery Easing -->
\t<script src=\"js/jquery.easing.1.3.js\"></script>
\t<!-- Bootstrap -->
\t<script src=\"js/bootstrap.min.js\"></script>
\t<!-- Waypoints -->
\t<script src=\"js/jquery.waypoints.min.js\"></script>
\t<script src=\"js/sticky.js\"></script>

\t<!-- Stellar -->
\t<script src=\"js/jquery.stellar.min.js\"></script>
\t<!-- Superfish -->
\t<script src=\"js/hoverIntent.js\"></script>
\t<script src=\"js/superfish.js\"></script>
\t<!-- Magnific Popup -->
\t<script src=\"js/jquery.magnific-popup.min.js\"></script>
\t<script src=\"js/magnific-popup-options.js\"></script>
\t<!-- Date Picker -->
\t<script src=\"js/bootstrap-datepicker.min.js\"></script>
\t<!-- CS Select -->
\t<script src=\"js/classie.js\"></script>
\t<script src=\"js/selectFx.js\"></script>
\t
\t<!-- Main JS -->
\t<script src=\"js/main.js\"></script>

\t</body>
</html>

", "front_h/show.html.twig", "C:\\Users\\Meriem\\Desktop\\hermes\\templates\\front_h\\show.html.twig");
    }
}
