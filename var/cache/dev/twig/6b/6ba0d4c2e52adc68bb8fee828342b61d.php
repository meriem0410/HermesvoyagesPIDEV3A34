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

/* front_h/index.html.twig */
class __TwigTemplate_967fd3bb73bed8a2dffe75dbd4ab6933 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_h/index.html.twig"));

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
\t\t\t<div class=\"fh5co-cover\" data-stellar-background-ratio=\"0.5\"  src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/images/cover_bg_1.jpg"), "html", null, true);
        echo "\">
\t\t\t\t<div class=\"desc\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-5 col-md-5\">
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
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t\t<h2>Nos Hebergements</h2>
\t\t\t\t\t\t\t\t\t<!-- <p><a class=\"btn btn-primary btn-lg\" href=\"#\">Get Started</a></p> -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
 
\t\t
 
 
\t\t<div id=\"fh5co-blog-section\" class=\"fh5co-section-gray\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center heading-section\">
\t\t\t\t\t\t<h3>Nos Hebergements </h3>
\t\t\t\t\t\t<p>Vous trouvez ici nos Hebergement</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 335
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_h");
        echo "\" method=\"get\">
    <div>
        <label>Trier par :</label>
        <select name=\"sortBy\">
            <option value=\"prix\">Prix</option>
            <option value=\"averageRating\">Rating Moyen</option>
        </select>
    </div>
    <div>
        <label>Direction :</label>
        <select name=\"sortDirection\">
            <option value=\"ASC\">Ascendant</option>
            <option value=\"DESC\">Descendant</option>
        </select>
    </div>
    <button type=\"submit\">Trier</button>
</form>
 
 
\t\t\t\t        ";
        // line 354
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Hebergements"]) || array_key_exists("Hebergements", $context) ? $context["Hebergements"] : (function () { throw new RuntimeError('Variable "Hebergements" does not exist.', 354, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Hebergement"]) {
            // line 355
            echo "\t\t\t\t\t\t<div class=\"swiper-container\">
    <div class=\"swiper-wrapper\">
 
\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"fh5co-blog\">
\t\t\t\t\t\t\t<a href=\"";
            // line 360
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_h_show", ["id" => twig_get_attribute($this->env, $this->source, $context["Hebergement"], "id", [], "any", false, false, false, 360)]), "html", null, true);
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["Hebergement"], "image", [], "any", false, false, false, 360))), "html", null, true);
            echo "\"  height=\"344.07\" .icon-user== ></a>
\t\t\t\t\t\t\t<div class=\"blog-text\">
\t\t\t\t\t\t\t\t<div class=\"prod-title\">
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">Ville: ";
            // line 363
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Hebergement"], "adresse", [], "any", false, false, false, 363), "html", null, true);
            echo "</a></h3>
\t\t\t\t\t\t\t\t\t<span class=\"posted_by\"> ";
            // line 364
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Hebergement"], "description", [], "any", false, false, false, 364), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span class=\"comment\"><a href=\"\">";
            // line 366
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Hebergement"], "maxguest", [], "any", false, false, false, 366), "html", null, true);
            echo "<i class=\"icon-user3\"></i></a></span>
\t\t\t\t\t\t\t\t\t<p> nombre de chambre: ";
            // line 367
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Hebergement"], "room", [], "any", false, false, false, 367), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">Prix de la nuitée ";
            // line 368
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Hebergement"], "prix", [], "any", false, false, false, 368), "html", null, true);
            echo "DT</a></p>
\t\t\t\t\t\t\t\t\t<p>Moyenne des ratings : ";
            // line 369
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["Hebergement"], "averageRating", [], "any", true, true, false, 369)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["Hebergement"], "averageRating", [], "any", false, false, false, 369), "Pas de ratings")) : ("Pas de ratings")), "html", null, true);
            echo "</p>
                                 <button class=\"btn\"=> <a  href=\"";
            // line 370
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new", ["HebergementId" => twig_get_attribute($this->env, $this->source, $context["Hebergement"], "id", [], "any", false, false, false, 370)]), "html", null, true);
            echo "\" > ";
            echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 370, $this->source); })()), "Reserver")) : ("Reserver")), "html", null, true);
            echo "</button>
                                 <button class=\"btn\"=> <a  href=\"";
            // line 371
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis_new", ["HebergementId" => twig_get_attribute($this->env, $this->source, $context["Hebergement"], "id", [], "any", false, false, false, 371)]), "html", null, true);
            echo "\" > ";
            echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 371, $this->source); })()), "review")) : ("review")), "html", null, true);
            echo "</button>

                            \t</div>
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Add Pagination -->
    <div class=\"swiper-pagination\"></div>
    <!-- Add Arrows -->
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Hebergement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 384
        echo " 
 <script src=\"https://unpkg.com/swiper/swiper-bundle.min.js\"></script>
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
 
 
 
 
 
 
 

 
 
 
\t</div>
\t<!-- END fh5co-page -->
 
\t</div>
\t<!-- END fh5co-wrapper -->
 
\t<!-- jQuery -->
 
      ";
        // line 419
        $this->displayBlock('javascripts', $context, $blocks);
        // line 448
        echo "

\t</body>
</html>
 
 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 419
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 420
        echo "
 
\t<script src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- jQuery Easing -->
\t<script src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
\t<!-- Bootstrap -->
\t<script src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- Waypoints -->
\t<script src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/sticky.js"), "html", null, true);
        echo "\"></script>
 
\t<!-- Stellar -->
\t<script src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- Superfish -->
\t<script src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/superfish.js"), "html", null, true);
        echo "\"></script>
\t<!-- Magnific Popup -->
\t<script src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/magnific-popup-options.js"), "html", null, true);
        echo "\"></script>
\t<!-- Date Picker -->
\t<script src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- CS Select -->
\t<script src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/classie.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"js/selectFx.js\"></script>
 
\t<!-- Main JS -->
\t<script src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front_h/index.html.twig";
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
        return array (  650 => 446,  643 => 442,  638 => 440,  633 => 438,  629 => 437,  624 => 435,  620 => 434,  615 => 432,  609 => 429,  605 => 428,  600 => 426,  595 => 424,  590 => 422,  586 => 420,  579 => 419,  566 => 448,  564 => 419,  527 => 384,  506 => 371,  500 => 370,  496 => 369,  492 => 368,  488 => 367,  484 => 366,  479 => 364,  475 => 363,  467 => 360,  460 => 355,  456 => 354,  434 => 335,  185 => 89,  172 => 79,  168 => 78,  164 => 77,  160 => 76,  154 => 73,  149 => 71,  142 => 67,  124 => 52,  117 => 48,  112 => 46,  108 => 45,  103 => 43,  98 => 41,  93 => 39,  88 => 37,  83 => 35,  78 => 33,  70 => 28,  41 => 1,);
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
\t\t\t<div class=\"fh5co-cover\" data-stellar-background-ratio=\"0.5\"  src=\"{{  asset('front_office/images/cover_bg_1.jpg') }}\">
\t\t\t\t<div class=\"desc\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-5 col-md-5\">
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
\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t\t<h2>Nos Hebergements</h2>
\t\t\t\t\t\t\t\t\t<!-- <p><a class=\"btn btn-primary btn-lg\" href=\"#\">Get Started</a></p> -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
 
\t\t
 
 
\t\t<div id=\"fh5co-blog-section\" class=\"fh5co-section-gray\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center heading-section\">
\t\t\t\t\t\t<h3>Nos Hebergements </h3>
\t\t\t\t\t\t<p>Vous trouvez ici nos Hebergement</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<form action=\"{{ path('app_front_h') }}\" method=\"get\">
    <div>
        <label>Trier par :</label>
        <select name=\"sortBy\">
            <option value=\"prix\">Prix</option>
            <option value=\"averageRating\">Rating Moyen</option>
        </select>
    </div>
    <div>
        <label>Direction :</label>
        <select name=\"sortDirection\">
            <option value=\"ASC\">Ascendant</option>
            <option value=\"DESC\">Descendant</option>
        </select>
    </div>
    <button type=\"submit\">Trier</button>
</form>
 
 
\t\t\t\t        {% for Hebergement in Hebergements %}
\t\t\t\t\t\t<div class=\"swiper-container\">
    <div class=\"swiper-wrapper\">
 
\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-6\">
\t\t\t\t\t\t<div class=\"fh5co-blog\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_front_h_show', {'id': Hebergement.id}) }}\" ><img src=\"{{  asset('uploads/' ~ Hebergement.image) }}\"  height=\"344.07\" .icon-user== ></a>
\t\t\t\t\t\t\t<div class=\"blog-text\">
\t\t\t\t\t\t\t\t<div class=\"prod-title\">
\t\t\t\t\t\t\t\t\t<h3><a href=\"#\">Ville: {{ Hebergement.adresse }}</a></h3>
\t\t\t\t\t\t\t\t\t<span class=\"posted_by\"> {{ Hebergement.description }}</span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span class=\"comment\"><a href=\"\">{{Hebergement.maxguest}}<i class=\"icon-user3\"></i></a></span>
\t\t\t\t\t\t\t\t\t<p> nombre de chambre: {{Hebergement.room}}</p>
\t\t\t\t\t\t\t\t\t<p><a href=\"#\">Prix de la nuitée {{ Hebergement.prix }}DT</a></p>
\t\t\t\t\t\t\t\t\t<p>Moyenne des ratings : {{ Hebergement.averageRating|default('Pas de ratings') }}</p>
                                 <button class=\"btn\"=> <a  href=\"{{ path('app_reservation_new', {'HebergementId': Hebergement.id}) }}\" > {{ button_label|default('Reserver') }}</button>
                                 <button class=\"btn\"=> <a  href=\"{{ path('app_avis_new', {'HebergementId': Hebergement.id}) }}\" > {{ button_label|default('review') }}</button>

                            \t</div>
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Add Pagination -->
    <div class=\"swiper-pagination\"></div>
    <!-- Add Arrows -->
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
        {% endfor %}
 
 <script src=\"https://unpkg.com/swiper/swiper-bundle.min.js\"></script>
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
 
 
 
 
 
 
 

 
 
 
\t</div>
\t<!-- END fh5co-page -->
 
\t</div>
\t<!-- END fh5co-wrapper -->
 
\t<!-- jQuery -->
 
      {% block javascripts %}

 
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
{% endblock %}


\t</body>
</html>
 
 
", "front_h/index.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\New folder\\HermesvoyagesPIDEV3A34-main\\templates\\front_h\\index.html.twig");
    }
}
