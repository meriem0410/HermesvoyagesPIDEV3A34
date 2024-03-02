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

/* evenement/front.html.twig */
class __TwigTemplate_f338d5a249427befdb1a78b1b0db5702 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/front.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
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
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/favicon.ico"), "html", null, true);
        echo "\">

\t<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
\t
\t<!-- Animate.css -->
\t<link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/animate.css"), "html", null, true);
        echo "\">
\t<!-- Icomoon Icon Fonts-->
\t<link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/icomoon.css"), "html", null, true);
        echo "\">
\t<!-- Bootstrap  -->
\t<link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/bootstrap.css"), "html", null, true);
        echo "\">
\t<!-- Superfish -->
\t<link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/superfish.css"), "html", null, true);
        echo "\">
\t<!-- Magnific Popup -->
\t<link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/magnific-popup.css"), "html", null, true);
        echo "\">
\t<!-- Date Picker -->
\t<link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\">
\t<!-- CS Select -->
\t<link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/cs-select.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/cs-skin-border.css"), "html", null, true);
        echo "\">
\t
\t<link rel=\"stylesheet\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/style.css"), "html", null, true);
        echo "\">


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
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"vacation.html\" class=\"fh5co-sub-ddown\">Voyage organisé</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"flight.html\">Transport</a></li>
\t\t\t\t\t\t\t<li><a href=\"hotel.html\">Hebergement</a></li>
\t\t\t\t\t\t\t<li><a href=\"car.html\">E-tourism</a></li>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"blog.html\">Evenements</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        echo "\">Back Office</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>

\t\t<!-- end:header-top -->
\t
\t\t<div class=\"fh5co-hero\">
\t\t\t<div class=\"fh5co-overlay\"></div>
\t\t\t<div class=\"fh5co-cover\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url(images/cover_bg_1.jpg);\">
\t\t\t\t<div class=\"desc\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-5 col-md-5\">
\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc2\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-7 col-sm-push-1 col-md-7 col-md-push-1\">
\t\t\t\t\t\t\t\t\t<h2>Nos Evènements</h2>
\t\t\t\t\t\t\t\t\t<!-- <p><a class=\"btn btn-primary btn-lg\" href=\"#\">Get Started</a></p> -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>




<div id=\"fh5co-blog-section\" class=\"fh5co-section-gray\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2 text-center heading-section\">
                <h3>Our Event</h3>
                <p>Vous trouvez ici nos evenement</p>
            </div>
        </div>
    </div>
    
    <div class=\"container\">
        <div class=\"row row-bottom-padded-md\">
            ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 126, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 127
            echo "            <div class=\"col-lg-4 col-md-4 col-sm-6\">
                <div class=\"fh5co-blog\">
                    <div class=\"position-relative\">
                      ";
            // line 130
            if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "datedebut", [], "any", false, false, false, 130), "Y-m-d") < twig_date_format_filter($this->env, "now", "Y-m-d"))) {
                // line 131
                echo "                            <small class=\"position-absolute top-0 end-0 bg-success  text-white rounded py-1 px-3 m-2\"> En cours</small>
\t\t\t\t\t";
            }
            // line 133
            echo "    
        ";
            // line 134
            if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "datedebut", [], "any", false, false, false, 134), "Y-m-d") > twig_date_format_filter($this->env, "now", "Y-m-d"))) {
                // line 135
                echo "                            <small class=\"position-absolute top-0 end-0 bg-danger text-white rounded py-1 px-3 m-2\">Bientot disponible </small>
\t\t\t\t\t";
            }
            // line 137
            echo "
\t\t\t\t\t\t<a href=\"#\"><img src=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["evenement"], "image", [], "any", false, false, false, 138)), "html", null, true);
            echo "\"></a>
                    </div>
                    <div class=\"blog-text\">
                        <div class=\"prod-title\">
                            <h3><a href=\"#\">Titre: ";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 142), "html", null, true);
            echo "</a></h3>
                            <span class=\"posted_by\">Date Debut: ";
            // line 143
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "datedebut", [], "any", false, false, false, 143)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "datedebut", [], "any", false, false, false, 143), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</span>
                            <span class=\"posted_by\">Date Fin: ";
            // line 144
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "datefin", [], "any", false, false, false, 144)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "datefin", [], "any", false, false, false, 144), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</span>
                            <span class=\"comment\"><a href=\"\">21<i class=\"icon-bubble2\"></i></a></span>
                            <p>";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 146), "html", null, true);
            echo "</p>
                            <p><a href=\"#\">Lieux: ";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "lieu", [], "any", false, false, false, 147), "html", null, true);
            echo "</a></p>
                            <div class=\"d-flex justify-content-between\">
                                <a class=\"btn btn-sm btn-primary rounded py-2 px-4\" href=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventfrontdetail", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 149)]), "html", null, true);
            echo "\">View Location</a>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "        </div>
    </div>
</div>





\t\t\t
\t\t</div>
\t\t<!-- fh5co-blog-section -->
\t\t<div id=\"fh5co-testimonial\" style=\"background-image:url(images/img_bg_1.jpg);\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center fh5co-heading\">
\t\t\t\t\t<h2>Happy Clients</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box-testimony\">
\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t<span class=\"quote\"><span><i class=\"icon-quotes-right\"></i></span></span>
\t\t\t\t\t\t\t<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t<p class=\"author\">John Doe, CEO <a href=\"http://freehtml5.co/\" target=\"_blank\">FREEHTML5.co</a> <span class=\"subtext\">Creative Director</span></p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box-testimony\">
\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t<span class=\"quote\"><span><i class=\"icon-quotes-right\"></i></span></span>
\t\t\t\t\t\t\t<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t<p class=\"author\">John Doe, CEO <a href=\"http://freehtml5.co/\" target=\"_blank\">FREEHTML5.co</a> <span class=\"subtext\">Creative Director</span></p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box-testimony\">
\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t<span class=\"quote\"><span><i class=\"icon-quotes-right\"></i></span></span>
\t\t\t\t\t\t\t<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t<p class=\"author\">John Doe, Founder <a href=\"#\">FREEHTML5.co</a> <span class=\"subtext\">Creative Director</span></p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
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


\t<script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- jQuery Easing -->
\t<script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
\t<!-- Bootstrap -->
\t<script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- Waypoints -->
\t<script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/sticky.js"), "html", null, true);
        echo "\"></script>

\t<!-- Stellar -->
\t<script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- Superfish -->
\t<script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/superfish.js"), "html", null, true);
        echo "\"></script>
\t<!-- Magnific Popup -->
\t<script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/magnific-popup-options.js"), "html", null, true);
        echo "\"></script>
\t<!-- Date Picker -->
\t<script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- CS Select -->
\t<script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/classie.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"js/selectFx.js\"></script>
\t
\t<!-- Main JS -->
\t<script src=\"";
        // line 314
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
        return "evenement/front.html.twig";
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
        return array (  468 => 314,  461 => 310,  456 => 308,  451 => 306,  447 => 305,  442 => 303,  438 => 302,  433 => 300,  427 => 297,  423 => 296,  418 => 294,  413 => 292,  408 => 290,  272 => 156,  259 => 149,  254 => 147,  250 => 146,  245 => 144,  241 => 143,  237 => 142,  230 => 138,  227 => 137,  223 => 135,  221 => 134,  218 => 133,  214 => 131,  212 => 130,  207 => 127,  203 => 126,  154 => 80,  124 => 53,  117 => 49,  112 => 47,  108 => 46,  103 => 44,  98 => 42,  93 => 40,  88 => 38,  83 => 36,  78 => 34,  70 => 29,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
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
\t
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
\t
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
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"vacation.html\" class=\"fh5co-sub-ddown\">Voyage organisé</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"flight.html\">Transport</a></li>
\t\t\t\t\t\t\t<li><a href=\"hotel.html\">Hebergement</a></li>
\t\t\t\t\t\t\t<li><a href=\"car.html\">E-tourism</a></li>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"blog.html\">Evenements</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('app_evenement_index') }}\">Back Office</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>

\t\t<!-- end:header-top -->
\t
\t\t<div class=\"fh5co-hero\">
\t\t\t<div class=\"fh5co-overlay\"></div>
\t\t\t<div class=\"fh5co-cover\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url(images/cover_bg_1.jpg);\">
\t\t\t\t<div class=\"desc\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-5 col-md-5\">
\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc2\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-7 col-sm-push-1 col-md-7 col-md-push-1\">
\t\t\t\t\t\t\t\t\t<h2>Nos Evènements</h2>
\t\t\t\t\t\t\t\t\t<!-- <p><a class=\"btn btn-primary btn-lg\" href=\"#\">Get Started</a></p> -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>




<div id=\"fh5co-blog-section\" class=\"fh5co-section-gray\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2 text-center heading-section\">
                <h3>Our Event</h3>
                <p>Vous trouvez ici nos evenement</p>
            </div>
        </div>
    </div>
    
    <div class=\"container\">
        <div class=\"row row-bottom-padded-md\">
            {% for evenement in evenements %}
            <div class=\"col-lg-4 col-md-4 col-sm-6\">
                <div class=\"fh5co-blog\">
                    <div class=\"position-relative\">
                      {% if evenement.datedebut|date('Y-m-d') < 'now'|date('Y-m-d') %}
                            <small class=\"position-absolute top-0 end-0 bg-success  text-white rounded py-1 px-3 m-2\"> En cours</small>
\t\t\t\t\t{% endif %}
    
        {% if evenement.datedebut|date('Y-m-d') > 'now'|date('Y-m-d') %}
                            <small class=\"position-absolute top-0 end-0 bg-danger text-white rounded py-1 px-3 m-2\">Bientot disponible </small>
\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<a href=\"#\"><img src=\"{{ asset(evenement.image) }}\"></a>
                    </div>
                    <div class=\"blog-text\">
                        <div class=\"prod-title\">
                            <h3><a href=\"#\">Titre: {{ evenement.titre }}</a></h3>
                            <span class=\"posted_by\">Date Debut: {{ evenement.datedebut ? evenement.datedebut|date('Y-m-d') : '' }}</span>
                            <span class=\"posted_by\">Date Fin: {{ evenement.datefin ? evenement.datefin|date('Y-m-d') : '' }}</span>
                            <span class=\"comment\"><a href=\"\">21<i class=\"icon-bubble2\"></i></a></span>
                            <p>{{evenement.description}}</p>
                            <p><a href=\"#\">Lieux: {{ evenement.lieu }}</a></p>
                            <div class=\"d-flex justify-content-between\">
                                <a class=\"btn btn-sm btn-primary rounded py-2 px-4\" href=\"{{ path('eventfrontdetail', {'id': evenement.id}) }}\">View Location</a>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
</div>





\t\t\t
\t\t</div>
\t\t<!-- fh5co-blog-section -->
\t\t<div id=\"fh5co-testimonial\" style=\"background-image:url(images/img_bg_1.jpg);\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center fh5co-heading\">
\t\t\t\t\t<h2>Happy Clients</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box-testimony\">
\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t<span class=\"quote\"><span><i class=\"icon-quotes-right\"></i></span></span>
\t\t\t\t\t\t\t<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t<p class=\"author\">John Doe, CEO <a href=\"http://freehtml5.co/\" target=\"_blank\">FREEHTML5.co</a> <span class=\"subtext\">Creative Director</span></p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box-testimony\">
\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t<span class=\"quote\"><span><i class=\"icon-quotes-right\"></i></span></span>
\t\t\t\t\t\t\t<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t<p class=\"author\">John Doe, CEO <a href=\"http://freehtml5.co/\" target=\"_blank\">FREEHTML5.co</a> <span class=\"subtext\">Creative Director</span></p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"box-testimony\">
\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t<span class=\"quote\"><span><i class=\"icon-quotes-right\"></i></span></span>
\t\t\t\t\t\t\t<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t<p class=\"author\">John Doe, Founder <a href=\"#\">FREEHTML5.co</a> <span class=\"subtext\">Creative Director</span></p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
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
\t
\t<!-- Main JS -->
\t<script src=\"{{ asset('front_office/js/main.js')}}\"></script>

\t</body>
</html>

", "evenement/front.html.twig", "C:\\Users\\User\\Downloads\\HermesvoyagesPIDEV3A34-main\\templates\\evenement\\front.html.twig");
    }
}
