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

/* billet/edit.html.twig */
class __TwigTemplate_005659b57d93f44fd1d9bcbdacf15fe2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_heading' => [$this, 'block_page_heading'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "billet/edit.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/vendors/flag-icon-css/css/flag-icon.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/css/style.css"), "html", null, true);
        echo "\" />
    <link rel=\"shortcut icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/images/h.png"), "html", null, true);
        echo "\" />
    </head>
  <body>
 
  <nav class=\"navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row\"  style=\"background-color: #FBFCFA; color: #fff; padding: 20px;\">
  <div class=\"navbar-menu-wrapper d-flex align-items-stretch justify-content-between\" style=\"background-color: #FBFCFA; color: #fff; padding: 20px;\">
  <h3 class=\"mb-0\" style=\"font-family: ' Helvetica', sans-serif; color: #94BDB5; font-weight: bold; font-style: italic; text-align: center; \" >";
        // line 19
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
 
 
        </div>
        <ul class=\"nav\">
          <li class=\"nav-item nav-profile\">
            <a href=\"#\" class=\"nav-link\">
            </a>
          </li>
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"mdi mdi-home menu-icon\"></i>
 
              <span class=\"menu-title\"> Acceuil</span>
            </a>
          </li>


          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_eventfront");
        echo "\">
              <i class=\"mdi mdi-home menu-icon\"></i>
 
              <span class=\"menu-title\"> Front Office</span>
            </a>
          </li>


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
                  <a class=\"nav-link\" href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        echo "\">evenements</a>
                </li>
              </ul>
            </div>

                        <div class=\"collapse show\" id=\"ui-basic\" style=\"\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_billet_index");
        echo "\">billets</a>
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
                  <a class=\"nav-link\" href=\"#\"> utilisateurs </a>
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
                  <li>Sign Out</li>
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
        // line 198
        $this->displayBlock('title', $context, $blocks);
        // line 199
        echo "
";
        // line 200
        $this->displayBlock('body', $context, $blocks);
        // line 208
        echo "







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
     ";
        // line 235
        $this->displayBlock('javascripts', $context, $blocks);
        // line 251
        echo " 
  </body>

</html>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_page_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_heading"));

        echo "Bienvenue à Hermes Voyage";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 198
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Billet";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 200
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 201
        echo "
    ";
        // line 202
        echo twig_include($this->env, $context, "billet/_form.html.twig", ["button_label" => "Update"]);
        echo "

    <a class=\"btn btn-primary\" href=\"";
        // line 204
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_billet_index");
        echo "\">back to list</a>

    ";
        // line 206
        echo twig_include($this->env, $context, "billet/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 235
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 236
        echo "    <!-- Container Scroller -->
    <!-- Plugins:js -->
    <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
    <!-- Endinject -->
    <!-- Plugin js for this page -->
    <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/vendors/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- End plugin js for this page -->
    <!-- Inject:js -->
    <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/js/misc.js"), "html", null, true);
        echo "\"></script>
    <!-- Endinject -->
    <!-- Custom js for this page -->
    <script src=\"";
        // line 249
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
        return "billet/edit.html.twig";
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
        return array (  419 => 249,  413 => 246,  409 => 245,  405 => 244,  399 => 241,  393 => 238,  389 => 236,  382 => 235,  373 => 206,  368 => 204,  363 => 202,  360 => 201,  353 => 200,  340 => 198,  327 => 19,  314 => 251,  312 => 235,  283 => 208,  281 => 200,  278 => 199,  276 => 198,  180 => 105,  169 => 97,  135 => 66,  85 => 19,  76 => 13,  72 => 12,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <link rel=\"stylesheet\" href=\"{{ asset('back_office/assets/vendors/mdi/css/materialdesignicons.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('back_office/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('back_office/assets/vendors/css/vendor.bundle.base.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('back_office/assets/vendors/font-awesome/css/font-awesome.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('back_office/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('back_office/assets/css/style.css') }}\" />
    <link rel=\"shortcut icon\" href=\"{{ asset('back_office/assets/images/h.png') }}\" />
    </head>
  <body>
 
  <nav class=\"navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row\"  style=\"background-color: #FBFCFA; color: #fff; padding: 20px;\">
  <div class=\"navbar-menu-wrapper d-flex align-items-stretch justify-content-between\" style=\"background-color: #FBFCFA; color: #fff; padding: 20px;\">
  <h3 class=\"mb-0\" style=\"font-family: ' Helvetica', sans-serif; color: #94BDB5; font-weight: bold; font-style: italic; text-align: center; \" >{% block page_heading %}Bienvenue à Hermes Voyage{% endblock %}</h3>
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
 
 
        </div>
        <ul class=\"nav\">
          <li class=\"nav-item nav-profile\">
            <a href=\"#\" class=\"nav-link\">
            </a>
          </li>
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"mdi mdi-home menu-icon\"></i>
 
              <span class=\"menu-title\"> Acceuil</span>
            </a>
          </li>


          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{ path('app_evenement_eventfront') }}\">
              <i class=\"mdi mdi-home menu-icon\"></i>
 
              <span class=\"menu-title\"> Front Office</span>
            </a>
          </li>


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
                  <a class=\"nav-link\" href=\"{{ path('app_evenement_index') }}\">evenements</a>
                </li>
              </ul>
            </div>

                        <div class=\"collapse show\" id=\"ui-basic\" style=\"\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"{{ path('app_billet_index') }}\">billets</a>
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
                  <a class=\"nav-link\" href=\"#\"> utilisateurs </a>
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
                  <li>Sign Out</li>
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













{% block title %}Edit Billet{% endblock %}

{% block body %}

    {{ include('billet/_form.html.twig', {'button_label': 'Update'}) }}

    <a class=\"btn btn-primary\" href=\"{{ path('app_billet_index') }}\">back to list</a>

    {{ include('billet/_delete_form.html.twig') }}
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
  </body>

</html>


", "billet/edit.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\HermesvoyagesPIDEV3A34-main\\templates\\billet\\edit.html.twig");
    }
}
