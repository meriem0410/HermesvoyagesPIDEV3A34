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

/* base_back.html.twig */
class __TwigTemplate_65f8ed7f19cb8acf9a73bdea4b49d360 extends Template
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
            'stylesheet' => [$this, 'block_stylesheet'],
            'body' => [$this, 'block_body'],
            'page_heading' => [$this, 'block_page_heading'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 8
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 17
        echo "    </head>
  <body>
";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 242
        echo " 
  </body>
 
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "hermes voyage";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 9
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/vendors/flag-icon-css/css/flag-icon.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/css/style.css"), "html", null, true);
        echo "\" />
    <link rel=\"shortcut icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/images/h.png"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo " 
  <nav class=\"navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row\"  style=\"background-color: #FBFCFA; color: #fff; padding: 20px;\">
  <div class=\"navbar-menu-wrapper d-flex align-items-stretch justify-content-between\" style=\"background-color: #FBFCFA; color: #fff; padding: 20px;\">
  <h3 class=\"mb-0\" style=\"font-family: ' Helvetica', sans-serif; color: #94BDB5; font-weight: bold; font-style: italic; text-align: center; \" >";
        // line 23
        $this->displayBlock('page_heading', $context, $blocks);
        echo "</h3>
    <a class=\"navbar-brand brand-logo-mini align-self-center d-lg-none\" href=\"index.html\"><img src=\"back_office/assets/images/hermesfinal.png\" alt=\"logo\"></a>
    <button class=\"navbar-toggler navbar-toggler align-self-center mr-2\" type=\"button\" data-toggle=\"minimize\">
 
    </button>
    <ul class=\"navbar-nav\"  style=\"background-color: #FBFCFA; color: #fff; padding: 20px;\">
      <li class=\"nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex\" style=\"background-color: #FBFCFA; color: #fff; \">
        <form class=\"nav-link form-inline mt-2 mt-md-0\">
 
          <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
 
            <div class=\"input-group-append\">
              <span class=\"input-group-text\">
 
                <i class=\"mdi mdi-magnify\"></i>
              </span>
            </div>
          </div>
        </form>
      </li>
    </ul>
  </div>
</nav>
 
    <div class=\"container-scroller\">
     <nav class=\"sidebar sidebar-offcanvas active\" id=\"sidebar\"  style=\"background-color: #94BDB5; color: #fff; \">
        <div class=\"text-center sidebar-brand-wrapper d-flex align-items-center\">
          <a class=\"sidebar-brand brand-logo\" href=\"#\"> 
          <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/images/cap.png"), "html", null, true);
        echo "\" > </img>
        </div>
        <br>
<br>
 
        <ul class=\"nav\">
          <li class=\"nav-item nav-profile\">
 
          </li>
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"mdi mdi-home menu-icon\"></i>
 
              <span class=\"menu-title\"> Acceuil</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"true\" aria-controls=\"ui-basic\">
              <i class=\"mdi mdi-crosshairs-gps menu-icon\"></i>
              <span class=\"menu-title\">Gestion  </span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse show\" id=\"ui-basic\" style=\"\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\">
                                   <a class=\"nav-link\" href=\"\">Ajouter Un Voyage </a>
                </li>
                <li class=\"nav-item\">
 
                  <a class=\"nav-link\" href=\"#\"> Liste des voyages</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Ajouter un programme </a>
                </li>
                <li class=\"nav-item\">
 
                  <a class=\"nav-link\" href=\"#\"> Liste des programme </a>
                </li>
              </ul>
            </div>
         <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"true\" aria-controls=\"ui-basic\">
              <i class=\"mdi mdi-crosshairs-gps menu-icon\"></i>
              <span class=\"menu-title\">Gestion hebergement </span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse show\" id=\"ui-basic\" style=\"\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">hebergement </a>
                </li>
              </ul>
            </div>
 
           <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"true\" aria-controls=\"ui-basic\">
              <i class=\"mdi mdi-crosshairs-gps menu-icon\"></i>
              <span class=\"menu-title\">Gestion evenements</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse show\" id=\"ui-basic\" style=\"\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">evenements</a>
                </li>
              </ul>
            </div>
             <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"true\" aria-controls=\"ui-basic\">
              <i class=\"mdi mdi-crosshairs-gps menu-icon\"></i>
              <span class=\"menu-title\">Gestion transport</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse show\" id=\"ui-basic\" style=\"\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">transport </a>
                </li>
              </ul>
            </div>
             <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"true\" aria-controls=\"ui-basic\">
              <i class=\"mdi mdi-crosshairs-gps menu-icon\"></i>
              <span class=\"menu-title\">Gestion des utilisateurs </span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse show\" id=\"ui-basic\" style=\"\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\"> Utilisateurs </a>
                </li>
              </ul>
            </div>
             <div class=\"collapse show\" id=\"ui-basic\" style=\"\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\"> Ajouter un Utilisateur </a>
                </li>
              </ul>
            </div>
             <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"true\" aria-controls=\"ui-basic\">
              <i class=\"mdi mdi-crosshairs-gps menu-icon\"></i>
              <span class=\"menu-title\">Gestion E-Tourism</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse show\" id=\"ui-basic\" style=\"\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">E-Tourism</a>
                </li>
              </ul>
            </div>
 
          <li class=\"nav-item sidebar-actions\">
            <div class=\"nav-link\">
              <div class=\"mt-4\">
                <div class=\"border-none\">
                  <p class=\"text-black\">Notification</p>
                </div>
                <ul class=\"mt-4 pl-0\">
                  <li><a href=\"";
        // line 173
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">signout</a>
</li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </nav>
 
      </nav>
      <div class=\"container-fluid page-body-wrapper\">
        <div id=\"theme-settings\" class=\"settings-panel\">
          <!-- Theme Settings Content Goes Here -->
        </div>
        <nav class=\"navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row\">
          <!-- Navbar Content Goes Here -->
        </nav>
        <div class=\"main-panel\">
          <div class=\"content-wrapper pb-0\">
 
            <div class=\"page-header flex-wrap\">
 
 
 
 
 
              <div class=\"d-flex\">
                <!-- Page Header Buttons Goes Here -->
              </div>
            </div>
            ";
        // line 203
        $this->displayBlock('content', $context, $blocks);
        // line 206
        echo "          </div>
          <footer class=\"footer\">
            <footer class=\"footer\">
 
  <div class=\"footer-bottom\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <p class=\"text-center\">&copy; 2024 Hermes Voyage. Tous droits réservés.</p>
        </div>
      </div>
    </div>
  </div>
</footer>
 
          </footer>
        </div>
      </div>
    </div>
     ";
        // line 225
        $this->displayBlock('javascripts', $context, $blocks);
        // line 241
        echo " 
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 23
    public function block_page_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_heading"));

        echo " - Bienvenue -";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 203
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 204
        echo "              <!-- Main Content Goes Here -->
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 225
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 226
        echo "    <!-- Container Scroller -->
    <!-- Plugins:js -->
    <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
    <!-- Endinject -->
    <!-- Plugin js for this page -->
    <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/vendors/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- End plugin js for this page -->
    <!-- Inject:js -->
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/js/misc.js"), "html", null, true);
        echo "\"></script>
    <!-- Endinject -->
    <!-- Custom js for this page -->
    <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/js/dashboard.js"), "html", null, true);
        echo "\"></script>
    <!-- End custom js for this page -->
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base_back.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  435 => 239,  429 => 236,  425 => 235,  421 => 234,  415 => 231,  409 => 228,  405 => 226,  398 => 225,  390 => 204,  383 => 203,  370 => 23,  362 => 241,  360 => 225,  339 => 206,  337 => 203,  304 => 173,  276 => 148,  266 => 141,  174 => 52,  142 => 23,  137 => 20,  130 => 19,  121 => 15,  117 => 14,  113 => 13,  109 => 12,  105 => 11,  101 => 10,  96 => 9,  89 => 8,  76 => 7,  66 => 242,  64 => 19,  60 => 17,  58 => 8,  54 => 7,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <title>{% block title %}hermes voyage{% endblock %}</title>
    {% block stylesheet%}
    <link rel=\"stylesheet\" href=\"{{ asset('back_office/assets/vendors/mdi/css/materialdesignicons.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('back_office/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('back_office/assets/vendors/css/vendor.bundle.base.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('back_office/assets/vendors/font-awesome/css/font-awesome.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('back_office/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('back_office/assets/css/style.css') }}\" />
    <link rel=\"shortcut icon\" href=\"{{ asset('back_office/assets/images/h.png') }}\" />
    {% endblock %}
    </head>
  <body>
{% block body%}
 
  <nav class=\"navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row\"  style=\"background-color: #FBFCFA; color: #fff; padding: 20px;\">
  <div class=\"navbar-menu-wrapper d-flex align-items-stretch justify-content-between\" style=\"background-color: #FBFCFA; color: #fff; padding: 20px;\">
  <h3 class=\"mb-0\" style=\"font-family: ' Helvetica', sans-serif; color: #94BDB5; font-weight: bold; font-style: italic; text-align: center; \" >{% block page_heading %} - Bienvenue -{% endblock %}</h3>
    <a class=\"navbar-brand brand-logo-mini align-self-center d-lg-none\" href=\"index.html\"><img src=\"back_office/assets/images/hermesfinal.png\" alt=\"logo\"></a>
    <button class=\"navbar-toggler navbar-toggler align-self-center mr-2\" type=\"button\" data-toggle=\"minimize\">
 
    </button>
    <ul class=\"navbar-nav\"  style=\"background-color: #FBFCFA; color: #fff; padding: 20px;\">
      <li class=\"nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex\" style=\"background-color: #FBFCFA; color: #fff; \">
        <form class=\"nav-link form-inline mt-2 mt-md-0\">
 
          <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
 
            <div class=\"input-group-append\">
              <span class=\"input-group-text\">
 
                <i class=\"mdi mdi-magnify\"></i>
              </span>
            </div>
          </div>
        </form>
      </li>
    </ul>
  </div>
</nav>
 
    <div class=\"container-scroller\">
     <nav class=\"sidebar sidebar-offcanvas active\" id=\"sidebar\"  style=\"background-color: #94BDB5; color: #fff; \">
        <div class=\"text-center sidebar-brand-wrapper d-flex align-items-center\">
          <a class=\"sidebar-brand brand-logo\" href=\"#\"> 
          <img src=\"{{ asset('back_office/assets/images/cap.png') }}\" > </img>
        </div>
        <br>
<br>
 
        <ul class=\"nav\">
          <li class=\"nav-item nav-profile\">
 
          </li>
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"mdi mdi-home menu-icon\"></i>
 
              <span class=\"menu-title\"> Acceuil</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"true\" aria-controls=\"ui-basic\">
              <i class=\"mdi mdi-crosshairs-gps menu-icon\"></i>
              <span class=\"menu-title\">Gestion  </span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse show\" id=\"ui-basic\" style=\"\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\">
                                   <a class=\"nav-link\" href=\"\">Ajouter Un Voyage </a>
                </li>
                <li class=\"nav-item\">
 
                  <a class=\"nav-link\" href=\"#\"> Liste des voyages</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Ajouter un programme </a>
                </li>
                <li class=\"nav-item\">
 
                  <a class=\"nav-link\" href=\"#\"> Liste des programme </a>
                </li>
              </ul>
            </div>
         <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"true\" aria-controls=\"ui-basic\">
              <i class=\"mdi mdi-crosshairs-gps menu-icon\"></i>
              <span class=\"menu-title\">Gestion hebergement </span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse show\" id=\"ui-basic\" style=\"\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">hebergement </a>
                </li>
              </ul>
            </div>
 
           <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"true\" aria-controls=\"ui-basic\">
              <i class=\"mdi mdi-crosshairs-gps menu-icon\"></i>
              <span class=\"menu-title\">Gestion evenements</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse show\" id=\"ui-basic\" style=\"\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">evenements</a>
                </li>
              </ul>
            </div>
             <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"true\" aria-controls=\"ui-basic\">
              <i class=\"mdi mdi-crosshairs-gps menu-icon\"></i>
              <span class=\"menu-title\">Gestion transport</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse show\" id=\"ui-basic\" style=\"\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">transport </a>
                </li>
              </ul>
            </div>
             <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"true\" aria-controls=\"ui-basic\">
              <i class=\"mdi mdi-crosshairs-gps menu-icon\"></i>
              <span class=\"menu-title\">Gestion des utilisateurs </span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse show\" id=\"ui-basic\" style=\"\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"{{path('app_user_index')}}\"> Utilisateurs </a>
                </li>
              </ul>
            </div>
             <div class=\"collapse show\" id=\"ui-basic\" style=\"\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"{{path('app_user_new')}}\"> Ajouter un Utilisateur </a>
                </li>
              </ul>
            </div>
             <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"true\" aria-controls=\"ui-basic\">
              <i class=\"mdi mdi-crosshairs-gps menu-icon\"></i>
              <span class=\"menu-title\">Gestion E-Tourism</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse show\" id=\"ui-basic\" style=\"\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">E-Tourism</a>
                </li>
              </ul>
            </div>
 
          <li class=\"nav-item sidebar-actions\">
            <div class=\"nav-link\">
              <div class=\"mt-4\">
                <div class=\"border-none\">
                  <p class=\"text-black\">Notification</p>
                </div>
                <ul class=\"mt-4 pl-0\">
                  <li><a href=\"{{ path('app_logout') }}\">signout</a>
</li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </nav>
 
      </nav>
      <div class=\"container-fluid page-body-wrapper\">
        <div id=\"theme-settings\" class=\"settings-panel\">
          <!-- Theme Settings Content Goes Here -->
        </div>
        <nav class=\"navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row\">
          <!-- Navbar Content Goes Here -->
        </nav>
        <div class=\"main-panel\">
          <div class=\"content-wrapper pb-0\">
 
            <div class=\"page-header flex-wrap\">
 
 
 
 
 
              <div class=\"d-flex\">
                <!-- Page Header Buttons Goes Here -->
              </div>
            </div>
            {% block content %}
              <!-- Main Content Goes Here -->
            {% endblock %}
          </div>
          <footer class=\"footer\">
            <footer class=\"footer\">
 
  <div class=\"footer-bottom\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <p class=\"text-center\">&copy; 2024 Hermes Voyage. Tous droits réservés.</p>
        </div>
      </div>
    </div>
  </div>
</footer>
 
          </footer>
        </div>
      </div>
    </div>
     {% block javascripts %}
    <!-- Container Scroller -->
    <!-- Plugins:js -->
    <script src=\"{{ asset('back_office/assets/vendors/js/vendor.bundle.base.js') }}\"></script>
    <!-- Endinject -->
    <!-- Plugin js for this page -->
    <script src=\"{{ asset('back_office/assets/vendors/chart.js/Chart.min.js') }}\"></script>
    <!-- End plugin js for this page -->
    <!-- Inject:js -->
    <script src=\"{{ asset('back_office/assets/js/off-canvas.js') }}\"></script>
    <script src=\"{{ asset('back_office/assets/js/hoverable-collapse.js') }}\"></script>
    <script src=\"{{ asset('back_office/assets/js/misc.js') }}\"></script>
    <!-- Endinject -->
    <!-- Custom js for this page -->
    <script src=\"{{ asset('back_office/assets/js/dashboard.js') }}\"></script>
    <!-- End custom js for this page -->
      {% endblock %} 
 {% endblock %} 
  </body>
 
</html>", "base_back.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\templates\\base_back.html.twig");
    }
}
