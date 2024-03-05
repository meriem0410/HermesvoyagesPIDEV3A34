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

/* evenement/showfront.html.twig */
class __TwigTemplate_cd4ab7691c21960e558c5df4c3ab3415 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/showfront.html.twig"));

        // line 1
        echo "

 <!DOCTYPE html>
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
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/lib/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 34
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

        <!-- 
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
        

-->














        
     






";
        // line 148
        $this->displayBlock('content', $context, $blocks);
        // line 224
        echo "
































        <!-- 
        <div class=\"container newsletter mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-10 border rounded p-1\">
                    <div class=\"border rounded text-center p-1\">
                        <div class=\"bg-white rounded text-center p-5\">
                            <h4 class=\"mb-4\"> <span class=\"text-primary text-uppercase\">Reservez Ici</span></h4>
                            <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
                                <a  href=\"";
        // line 265
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_billet_newfront");
        echo "\" type=\"button\" class=\"btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2\">Reservez</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Start -->
        

        <!-- Footer Start
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
\t\t\t\t\t\t\t
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/lib/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/lib/counterup/counterup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/lib/tempusdominus/js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Javascript -->
    <script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontmed/js/main.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 148
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 149
        echo "
        <!-- About Start -->
        <div class=\"container-xxl py-5\">
            <div class=\"container\">
                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-lg-6\">
                        <h6 class=\"section-title text-start text-primary text-uppercase\">Détail de l'évènement </h6>
                        <h1 class=\"mb-4\">Welcome to <span class=\"text-primary text-uppercase\">";
        // line 156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 156, $this->source); })()), "titre", [], "any", false, false, false, 156), "html", null, true);
        echo "</span></h1>
                        <div class=\"row g-3 pb-4\">
                            <div class=\"col-sm-4 wow fadeIn\" data-wow-delay=\"0.1s\">
                                <div class=\"border rounded p-1\">
                                    <div class=\"border rounded text-center p-4\">
                                        <h2 >";
        // line 161
        ((twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 161, $this->source); })()), "datedebut", [], "any", false, false, false, 161)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 161, $this->source); })()), "datedebut", [], "any", false, false, false, 161), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</h2>
                                        <p class=\"mb-0\">Date Debut   </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-4 wow fadeIn\" data-wow-delay=\"0.3s\">
                                <div class=\"border rounded p-1\">
                                    <div class=\"border rounded text-center p-4\">
                                        <h2 >";
        // line 169
        ((twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 169, $this->source); })()), "datefin", [], "any", false, false, false, 169)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 169, $this->source); })()), "datefin", [], "any", false, false, false, 169), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</h2>
                                        <p class=\"mb-0\">Date Fin</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-4 wow fadeIn\" data-wow-delay=\"0.5s\">
                                <div class=\"border rounded p-1\">
                                    <div class=\"border rounded text-center p-4\">
                                        <h2 >";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 177, $this->source); })()), "type", [], "any", false, false, false, 177), "html", null, true);
        echo " </h2>
                                        <p class=\"mb-0\">Type</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-4 wow fadeIn\" data-wow-delay=\"0.5s\">
                                <div class=\"border rounded p-1\">
                                    <div class=\"border rounded text-center p-4\">
                                        <h2 >";
        // line 185
        echo twig_escape_filter($this->env, (isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 185, $this->source); })()), "html", null, true);
        echo " </h2>
                                        <p class=\"mb-0\">price</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"row g-3\">
                            <div class=\"col-6 text-end\">
                                <img class=\"img-fluid rounded w-75 wow zoomIn\" data-wow-delay=\"0.1s\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 195, $this->source); })()), "image", [], "any", false, false, false, 195)), "html", null, true);
        echo "\" style=\"margin-top: 25%;\">
                            </div>
                            <div class=\"col-6 text-start\">
                                <img class=\"img-fluid rounded w-100 wow zoomIn\" data-wow-delay=\"0.3s\" src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 198, $this->source); })()), "image", [], "any", false, false, false, 198)), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-6 text-end\">
                                <img class=\"img-fluid rounded w-50 wow zoomIn\" data-wow-delay=\"0.5s\" src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 201, $this->source); })()), "image", [], "any", false, false, false, 201)), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-6 text-start\">
                                <img class=\"img-fluid rounded w-75 wow zoomIn\" data-wow-delay=\"0.7s\" src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 204, $this->source); })()), "image", [], "any", false, false, false, 204)), "html", null, true);
        echo "\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        
                    <div class=\"col-md-6 wow fadeIn\" data-wow-delay=\"0.1s\">
                        <iframe class=\"position-relative rounded w-100 h-100\"
                            src=\"https://maps.google.com/maps?q=";
        // line 216
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 216, $this->source); })()), "lieu", [], "any", false, false, false, 216), "html", null, true);
        echo "&amp;ie=UTF8&amp;iwloc=&amp;output=embed\"
                            frameborder=\"0\" style=\"min-height: 350px; border:0;\" allowfullscreen=\"\" aria-hidden=\"false\"
                            tabindex=\"0\"></iframe>
                    </div>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "evenement/showfront.html.twig";
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
        return array (  475 => 216,  460 => 204,  454 => 201,  448 => 198,  442 => 195,  429 => 185,  418 => 177,  407 => 169,  396 => 161,  388 => 156,  379 => 149,  372 => 148,  361 => 349,  355 => 346,  351 => 345,  347 => 344,  343 => 343,  339 => 342,  335 => 341,  331 => 340,  327 => 339,  250 => 265,  207 => 224,  205 => 148,  88 => 34,  82 => 31,  76 => 28,  72 => 27,  68 => 26,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

 <!DOCTYPE html>
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

        <!-- 
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
        

-->














        
     






{%block content %}

        <!-- About Start -->
        <div class=\"container-xxl py-5\">
            <div class=\"container\">
                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-lg-6\">
                        <h6 class=\"section-title text-start text-primary text-uppercase\">Détail de l'évènement </h6>
                        <h1 class=\"mb-4\">Welcome to <span class=\"text-primary text-uppercase\">{{ evenement.titre }}</span></h1>
                        <div class=\"row g-3 pb-4\">
                            <div class=\"col-sm-4 wow fadeIn\" data-wow-delay=\"0.1s\">
                                <div class=\"border rounded p-1\">
                                    <div class=\"border rounded text-center p-4\">
                                        <h2 >{{  evenement.datedebut ? evenement.datedebut|date('Y-m-d') : ''  }}</h2>
                                        <p class=\"mb-0\">Date Debut   </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-4 wow fadeIn\" data-wow-delay=\"0.3s\">
                                <div class=\"border rounded p-1\">
                                    <div class=\"border rounded text-center p-4\">
                                        <h2 >{{  evenement.datefin ? evenement.datefin|date('Y-m-d') : ''  }}</h2>
                                        <p class=\"mb-0\">Date Fin</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-4 wow fadeIn\" data-wow-delay=\"0.5s\">
                                <div class=\"border rounded p-1\">
                                    <div class=\"border rounded text-center p-4\">
                                        <h2 >{{ evenement.type }} </h2>
                                        <p class=\"mb-0\">Type</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-4 wow fadeIn\" data-wow-delay=\"0.5s\">
                                <div class=\"border rounded p-1\">
                                    <div class=\"border rounded text-center p-4\">
                                        <h2 >{{ prix }} </h2>
                                        <p class=\"mb-0\">price</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"row g-3\">
                            <div class=\"col-6 text-end\">
                                <img class=\"img-fluid rounded w-75 wow zoomIn\" data-wow-delay=\"0.1s\" src=\"{{ asset(evenement.image) }}\" style=\"margin-top: 25%;\">
                            </div>
                            <div class=\"col-6 text-start\">
                                <img class=\"img-fluid rounded w-100 wow zoomIn\" data-wow-delay=\"0.3s\" src=\"{{ asset(evenement.image) }}\">
                            </div>
                            <div class=\"col-6 text-end\">
                                <img class=\"img-fluid rounded w-50 wow zoomIn\" data-wow-delay=\"0.5s\" src=\"{{ asset(evenement.image) }}\">
                            </div>
                            <div class=\"col-6 text-start\">
                                <img class=\"img-fluid rounded w-75 wow zoomIn\" data-wow-delay=\"0.7s\" src=\"{{ asset(evenement.image) }}\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        
                    <div class=\"col-md-6 wow fadeIn\" data-wow-delay=\"0.1s\">
                        <iframe class=\"position-relative rounded w-100 h-100\"
                            src=\"https://maps.google.com/maps?q={{ evenement.lieu }}&amp;ie=UTF8&amp;iwloc=&amp;output=embed\"
                            frameborder=\"0\" style=\"min-height: 350px; border:0;\" allowfullscreen=\"\" aria-hidden=\"false\"
                            tabindex=\"0\"></iframe>
                    </div>



{% endblock %}

































        <!-- 
        <div class=\"container newsletter mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-10 border rounded p-1\">
                    <div class=\"border rounded text-center p-1\">
                        <div class=\"bg-white rounded text-center p-5\">
                            <h4 class=\"mb-4\"> <span class=\"text-primary text-uppercase\">Reservez Ici</span></h4>
                            <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
                                <a  href=\"{{ path('app_billet_newfront') }}\" type=\"button\" class=\"btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2\">Reservez</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Start -->
        

        <!-- Footer Start
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
\t\t\t\t\t\t\t
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

</html>", "evenement/showfront.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\HermesvoyagesPIDEV3A34-main\\templates\\evenement\\showfront.html.twig");
    }
}
