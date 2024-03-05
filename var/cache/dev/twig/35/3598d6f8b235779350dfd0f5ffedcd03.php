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

/* billet/newfront.html.twig */
class __TwigTemplate_6ef2051cc30335de63121c5a7dc34419 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "billet/newfront.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>Hotelier - Hotel HTML Template</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"img/favicon.ico\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">  

    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/lib/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body>
    <div class=\"container-xxl bg-white p-0\">
        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class=\"container-fluid bg-dark px-0\">
            <div class=\"row gx-0\">
                <div class=\"col-lg-3 bg-dark d-none d-lg-block\">
                    <a href=\"index.html\" class=\"navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center\">
                        <h1 class=\"m-0 text-primary text-uppercase\">Hotelier</h1>
                    </a>
                </div>
                <div class=\"col-lg-9\">
                    <div class=\"row gx-0 bg-white d-none d-lg-flex\">
                        <div class=\"col-lg-7 px-5 text-start\">
                            <div class=\"h-100 d-inline-flex align-items-center py-2 me-4\">
                                <i class=\"fa fa-envelope text-primary me-2\"></i>
                                <p class=\"mb-0\">info@example.com</p>
                            </div>
                            <div class=\"h-100 d-inline-flex align-items-center py-2\">
                                <i class=\"fa fa-phone-alt text-primary me-2\"></i>
                                <p class=\"mb-0\">+012 345 6789</p>
                            </div>
                        </div>
                        <div class=\"col-lg-5 px-5 text-end\">
                            <div class=\"d-inline-flex align-items-center py-2\">
                                <a class=\"me-3\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"me-3\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"me-3\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a class=\"me-3\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                <a class=\"\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class=\"navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0\">
                        <a href=\"index.html\" class=\"navbar-brand d-block d-lg-none\">
                            <h1 class=\"m-0 text-primary text-uppercase\">Hotelier</h1>
                        </a>
                        <button type=\"button\" class=\"navbar-toggler\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                            <span class=\"navbar-toggler-icon\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse justify-content-between\" id=\"navbarCollapse\">
                            <div class=\"navbar-nav mr-auto py-0\">
                                <a href=\"index.html\" class=\"nav-item nav-link\">Home</a>
                                <a href=\"about.html\" class=\"nav-item nav-link active\">About</a>
                                <a href=\"service.html\" class=\"nav-item nav-link\">Services</a>
                                <a href=\"room.html\" class=\"nav-item nav-link\">Rooms</a>
                                <div class=\"nav-item dropdown\">
                                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                                    <div class=\"dropdown-menu rounded-0 m-0\">
                                        <a href=\"booking.html\" class=\"dropdown-item\">Booking</a>
                                        <a href=\"team.html\" class=\"dropdown-item\">Our Team</a>
                                        <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                                    </div>
                                </div>
                                <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
                            </div>
                            <a href=\"https://htmlcodex.com/hotel-html-template-pro\" class=\"btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block\">Premium Version<i class=\"fa fa-arrow-right ms-3\"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Page Header Start -->
        <div class=\"container-fluid page-header mb-5 p-0\" style=\"background-image: url(img/carousel-1.jpg);\">
            <div class=\"container-fluid page-header-inner py-5\">
                <div class=\"container text-center pb-5\">
                    <h1 class=\"display-3 text-white mb-3 animated slideInDown\">About Us</h1>
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb justify-content-center text-uppercase\">
                            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                            <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
                            <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
















        
     













";
        // line 154
        $this->displayBlock('title', $context, $blocks);
        // line 155
        echo "
";
        // line 156
        $this->displayBlock('body', $context, $blocks);
        // line 163
        echo "

































        <!-- Newsletter Start -->
        <div class=\"container newsletter mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-10 border rounded p-1\">
                    <div class=\"border rounded text-center p-1\">
                        <div class=\"bg-white rounded text-center p-5\">
                            <h4 class=\"mb-4\"> <span class=\"text-primary text-uppercase\">Reservez Ici</span></h4>
                            <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
                                <button type=\"button\" class=\"btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2\">Reservez</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Start -->
        

        <!-- Footer Start --
        <div class=\"container-fluid bg-dark text-light footer wow fadeIn\" data-wow-delay=\"0.1s\">
            <div class=\"container pb-5\">
                <div class=\"row g-5\">
                    <div class=\"col-md-6 col-lg-4\">
                        <div class=\"bg-primary rounded p-4\">
                            <a href=\"index.html\"><h1 class=\"text-white text-uppercase mb-3\">Hotelier</h1></a>
                            <p class=\"text-white mb-0\">
\t\t\t\t\t\t\t\tDownload <a class=\"text-dark fw-medium\" href=\"https://htmlcodex.com/hotel-html-template-pro\">Hotelier – Premium Version</a>, build a professional website for your hotel business and grab the attention of new visitors upon your site’s launch.
\t\t\t\t\t\t\t</p>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <h6 class=\"section-title text-start text-primary text-uppercase mb-4\">Contact</h6>
                        <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York, USA</p>
                        <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890</p>
                        <p class=\"mb-2\"><i class=\"fa fa-envelope me-3\"></i>info@example.com</p>
                        <div class=\"d-flex pt-2\">
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-lg-5 col-md-12\">
                        <div class=\"row gy-5 g-4\">
                            <div class=\"col-md-6\">
                                <h6 class=\"section-title text-start text-primary text-uppercase mb-4\">Company</h6>
                                <a class=\"btn btn-link\" href=\"\">About Us</a>
                                <a class=\"btn btn-link\" href=\"\">Contact Us</a>
                                <a class=\"btn btn-link\" href=\"\">Privacy Policy</a>
                                <a class=\"btn btn-link\" href=\"\">Terms & Condition</a>
                                <a class=\"btn btn-link\" href=\"\">Support</a>
                            </div>
                            <div class=\"col-md-6\">
                                <h6 class=\"section-title text-start text-primary text-uppercase mb-4\">Services</h6>
                                <a class=\"btn btn-link\" href=\"\">Food & Restaurant</a>
                                <a class=\"btn btn-link\" href=\"\">Spa & Fitness</a>
                                <a class=\"btn btn-link\" href=\"\">Sports & Gaming</a>
                                <a class=\"btn btn-link\" href=\"\">Event & Party</a>
                                <a class=\"btn btn-link\" href=\"\">GYM & Yoga</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"copyright\">
                    <div class=\"row\">
                        <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                            &copy; <a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All Right Reserved. 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
\t\t\t\t
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/lib/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/lib/counterup/counterup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/lib/tempusdominus/js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Javascript -->
    <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/js/main.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 154
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Reservez";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 156
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 157
        echo "    <h1>Create new Billet</h1>

    ";
        // line 159
        echo twig_include($this->env, $context, "billet/_form.html.twig");
        echo "

    <a class=\"btn btn-primary\" href=\"";
        // line 161
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_eventfront");
        echo "\">back to front</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "billet/newfront.html.twig";
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
        return array (  411 => 161,  406 => 159,  402 => 157,  395 => 156,  382 => 154,  371 => 289,  365 => 286,  361 => 285,  357 => 284,  353 => 283,  349 => 282,  345 => 281,  341 => 280,  337 => 279,  219 => 163,  217 => 156,  214 => 155,  212 => 154,  87 => 32,  81 => 29,  75 => 26,  71 => 25,  67 => 24,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>Hotelier - Hotel HTML Template</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"img/favicon.ico\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">  

    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"{{asset('frontmed/lib/animate/animate.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('frontmed/lib/owlcarousel/assets/owl.carousel.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('frontmed/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"{{asset('frontmed/css/bootstrap.min.css')}}\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"{{asset('frontmed/css/style.css')}}\" rel=\"stylesheet\">
</head>

<body>
    <div class=\"container-xxl bg-white p-0\">
        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class=\"container-fluid bg-dark px-0\">
            <div class=\"row gx-0\">
                <div class=\"col-lg-3 bg-dark d-none d-lg-block\">
                    <a href=\"index.html\" class=\"navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center\">
                        <h1 class=\"m-0 text-primary text-uppercase\">Hotelier</h1>
                    </a>
                </div>
                <div class=\"col-lg-9\">
                    <div class=\"row gx-0 bg-white d-none d-lg-flex\">
                        <div class=\"col-lg-7 px-5 text-start\">
                            <div class=\"h-100 d-inline-flex align-items-center py-2 me-4\">
                                <i class=\"fa fa-envelope text-primary me-2\"></i>
                                <p class=\"mb-0\">info@example.com</p>
                            </div>
                            <div class=\"h-100 d-inline-flex align-items-center py-2\">
                                <i class=\"fa fa-phone-alt text-primary me-2\"></i>
                                <p class=\"mb-0\">+012 345 6789</p>
                            </div>
                        </div>
                        <div class=\"col-lg-5 px-5 text-end\">
                            <div class=\"d-inline-flex align-items-center py-2\">
                                <a class=\"me-3\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"me-3\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"me-3\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a class=\"me-3\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                <a class=\"\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class=\"navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0\">
                        <a href=\"index.html\" class=\"navbar-brand d-block d-lg-none\">
                            <h1 class=\"m-0 text-primary text-uppercase\">Hotelier</h1>
                        </a>
                        <button type=\"button\" class=\"navbar-toggler\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                            <span class=\"navbar-toggler-icon\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse justify-content-between\" id=\"navbarCollapse\">
                            <div class=\"navbar-nav mr-auto py-0\">
                                <a href=\"index.html\" class=\"nav-item nav-link\">Home</a>
                                <a href=\"about.html\" class=\"nav-item nav-link active\">About</a>
                                <a href=\"service.html\" class=\"nav-item nav-link\">Services</a>
                                <a href=\"room.html\" class=\"nav-item nav-link\">Rooms</a>
                                <div class=\"nav-item dropdown\">
                                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                                    <div class=\"dropdown-menu rounded-0 m-0\">
                                        <a href=\"booking.html\" class=\"dropdown-item\">Booking</a>
                                        <a href=\"team.html\" class=\"dropdown-item\">Our Team</a>
                                        <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                                    </div>
                                </div>
                                <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
                            </div>
                            <a href=\"https://htmlcodex.com/hotel-html-template-pro\" class=\"btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block\">Premium Version<i class=\"fa fa-arrow-right ms-3\"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Page Header Start -->
        <div class=\"container-fluid page-header mb-5 p-0\" style=\"background-image: url(img/carousel-1.jpg);\">
            <div class=\"container-fluid page-header-inner py-5\">
                <div class=\"container text-center pb-5\">
                    <h1 class=\"display-3 text-white mb-3 animated slideInDown\">About Us</h1>
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb justify-content-center text-uppercase\">
                            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                            <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
                            <li class=\"breadcrumb-item text-white active\" aria-current=\"page\">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
















        
     













{% block title %}Reservez{% endblock %}

{% block body %}
    <h1>Create new Billet</h1>

    {{ include('billet/_form.html.twig') }}

    <a class=\"btn btn-primary\" href=\"{{ path('app_evenement_eventfront') }}\">back to front</a>
{% endblock %}


































        <!-- Newsletter Start -->
        <div class=\"container newsletter mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-10 border rounded p-1\">
                    <div class=\"border rounded text-center p-1\">
                        <div class=\"bg-white rounded text-center p-5\">
                            <h4 class=\"mb-4\"> <span class=\"text-primary text-uppercase\">Reservez Ici</span></h4>
                            <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
                                <button type=\"button\" class=\"btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2\">Reservez</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Start -->
        

        <!-- Footer Start --
        <div class=\"container-fluid bg-dark text-light footer wow fadeIn\" data-wow-delay=\"0.1s\">
            <div class=\"container pb-5\">
                <div class=\"row g-5\">
                    <div class=\"col-md-6 col-lg-4\">
                        <div class=\"bg-primary rounded p-4\">
                            <a href=\"index.html\"><h1 class=\"text-white text-uppercase mb-3\">Hotelier</h1></a>
                            <p class=\"text-white mb-0\">
\t\t\t\t\t\t\t\tDownload <a class=\"text-dark fw-medium\" href=\"https://htmlcodex.com/hotel-html-template-pro\">Hotelier – Premium Version</a>, build a professional website for your hotel business and grab the attention of new visitors upon your site’s launch.
\t\t\t\t\t\t\t</p>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-3\">
                        <h6 class=\"section-title text-start text-primary text-uppercase mb-4\">Contact</h6>
                        <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York, USA</p>
                        <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890</p>
                        <p class=\"mb-2\"><i class=\"fa fa-envelope me-3\"></i>info@example.com</p>
                        <div class=\"d-flex pt-2\">
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-lg-5 col-md-12\">
                        <div class=\"row gy-5 g-4\">
                            <div class=\"col-md-6\">
                                <h6 class=\"section-title text-start text-primary text-uppercase mb-4\">Company</h6>
                                <a class=\"btn btn-link\" href=\"\">About Us</a>
                                <a class=\"btn btn-link\" href=\"\">Contact Us</a>
                                <a class=\"btn btn-link\" href=\"\">Privacy Policy</a>
                                <a class=\"btn btn-link\" href=\"\">Terms & Condition</a>
                                <a class=\"btn btn-link\" href=\"\">Support</a>
                            </div>
                            <div class=\"col-md-6\">
                                <h6 class=\"section-title text-start text-primary text-uppercase mb-4\">Services</h6>
                                <a class=\"btn btn-link\" href=\"\">Food & Restaurant</a>
                                <a class=\"btn btn-link\" href=\"\">Spa & Fitness</a>
                                <a class=\"btn btn-link\" href=\"\">Sports & Gaming</a>
                                <a class=\"btn btn-link\" href=\"\">Event & Party</a>
                                <a class=\"btn btn-link\" href=\"\">GYM & Yoga</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"copyright\">
                    <div class=\"row\">
                        <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                            &copy; <a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All Right Reserved. 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
\t\t\t\t
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"{{asset('frontmed/lib/wow/wow.min.js')}}\"></script>
    <script src=\"{{asset('frontmed/lib/easing/easing.min.js')}}\"></script>
    <script src=\"{{asset('frontmed/lib/waypoints/waypoints.min.js')}}\"></script>
    <script src=\"{{asset('frontmed/lib/counterup/counterup.min.js')}}\"></script>
    <script src=\"{{asset('frontmed/lib/owlcarousel/owl.carousel.min.js')}}\"></script>
    <script src=\"{{asset('frontmed/lib/tempusdominus/js/moment.min.js')}}\"></script>
    <script src=\"{{asset('frontmed/lib/tempusdominus/js/moment-timezone.min.js')}}\"></script>
    <script src=\"{{asset('frontmed/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}\"></script>

    <!-- Template Javascript -->
    <script src=\"{{asset('frontmed/js/main.js')}}\"></script>
</body>

</html>", "billet/newfront.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\HermesvoyagesPIDEV3A34-main\\templates\\billet\\newfront.html.twig");
    }
}
