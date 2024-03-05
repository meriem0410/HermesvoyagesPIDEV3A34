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

/* evenement/show.html.twig */
class __TwigTemplate_56b84c1db3494ab1ba9dd3435332d85e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/show.html.twig"));

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
        // line 197
        $this->displayBlock('title', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('body', $context, $blocks);
        // line 241
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
        // line 266
        $this->displayBlock('javascripts', $context, $blocks);
        // line 282
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

    // line 197
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Evenement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 199
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 200
        echo "    <h1>Evenement</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 206
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 206, $this->source); })()), "id", [], "any", false, false, false, 206), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 210
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 210, $this->source); })()), "titre", [], "any", false, false, false, 210), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 214, $this->source); })()), "description", [], "any", false, false, false, 214), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datedebut</th>
                <td>";
        // line 218
        ((twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 218, $this->source); })()), "datedebut", [], "any", false, false, false, 218)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 218, $this->source); })()), "datedebut", [], "any", false, false, false, 218), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Datefin</th>
                <td>";
        // line 222
        ((twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 222, $this->source); })()), "datefin", [], "any", false, false, false, 222)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 222, $this->source); })()), "datefin", [], "any", false, false, false, 222), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>";
        // line 226
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 226, $this->source); })()), "lieu", [], "any", false, false, false, 226), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
            <td> <img src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 230, $this->source); })()), "image", [], "any", false, false, false, 230)), "html", null, true);
        echo "\" alt=\"\" style=\"width: 100px;height:100px\"> </td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-primary\" href=\"";
        // line 235
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_index");
        echo "\">back to list</a>

    <a class=\"btn btn-warning\" href=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 237, $this->source); })()), "id", [], "any", false, false, false, 237)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 239
        echo twig_include($this->env, $context, "evenement/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 266
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 267
        echo "    <!-- Container Scroller -->
    <!-- Plugins:js -->
    <script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/vendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
    <!-- Endinject -->
    <!-- Plugin js for this page -->
    <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/vendors/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- End plugin js for this page -->
    <!-- Inject:js -->
    <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back_office/assets/js/misc.js"), "html", null, true);
        echo "\"></script>
    <!-- Endinject -->
    <!-- Custom js for this page -->
    <script src=\"";
        // line 280
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
        return "evenement/show.html.twig";
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
        return array (  471 => 280,  465 => 277,  461 => 276,  457 => 275,  451 => 272,  445 => 269,  441 => 267,  434 => 266,  425 => 239,  420 => 237,  415 => 235,  407 => 230,  400 => 226,  393 => 222,  386 => 218,  379 => 214,  372 => 210,  365 => 206,  357 => 200,  350 => 199,  337 => 197,  324 => 19,  311 => 282,  309 => 266,  282 => 241,  280 => 199,  277 => 198,  275 => 197,  180 => 105,  169 => 97,  135 => 66,  85 => 19,  76 => 13,  72 => 12,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  44 => 1,);
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












{% block title %}Evenement{% endblock %}

{% block body %}
    <h1>Evenement</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ evenement.id }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ evenement.titre }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ evenement.description }}</td>
            </tr>
            <tr>
                <th>Datedebut</th>
                <td>{{ evenement.datedebut ? evenement.datedebut|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Datefin</th>
                <td>{{ evenement.datefin ? evenement.datefin|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Lieu</th>
                <td>{{ evenement.lieu }}</td>
            </tr>
            <tr>
                <th>Image</th>
            <td> <img src=\"{{ asset(evenement.image) }}\" alt=\"\" style=\"width: 100px;height:100px\"> </td>
            </tr>
        </tbody>
    </table>

    <a class=\"btn btn-primary\" href=\"{{ path('app_evenement_index') }}\">back to list</a>

    <a class=\"btn btn-warning\" href=\"{{ path('app_evenement_edit', {'id': evenement.id}) }}\">edit</a>

    {{ include('evenement/_delete_form.html.twig') }}
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


", "evenement/show.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\HermesvoyagesPIDEV3A34-main\\templates\\evenement\\show.html.twig");
    }
}
