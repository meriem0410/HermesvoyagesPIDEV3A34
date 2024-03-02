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

/* evenement/index.html.twig */
class __TwigTemplate_50ccec77383647df06a8e92ea9cc3304 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

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
        $this->displayBlock('body', $context, $blocks);
        // line 246
        echo "





                                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
                                </script>
                                <script>
                                    \$( document ).ready(function() {

                                        /*begin rechercher avancee multicritéres selon sujet et staus*/
                                        \$(\"#divs\").keyup(function(e){
                                            /* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
                                            var value = \$(\"#search\").val();
                                            var value2 = \$(\"#search2\").val();
                                            if(value.length >= 2 || value.length == 0 || value2.length >= 2 || value2.length == 0 )
                                            {
                                              
                                                //    alert(value);
                                                /* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */
                                                \$.ajax({
                                                    /* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                                                    url : \"";
        // line 269
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\",
                                                    /* La méthode utilisée pour transférer les données est GET */
                                                    type : 'GET',
                                                    /*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */
                                                    data: {
                                                        'searchValue' : value,
                                                        'searchValue2': value2
                                                    },
                                                    /*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                                                    success : function(retour){
                                                        if(retour){
                                                            \$('#t tbody#search').empty();
                                                            \$.each(JSON.parse(retour), function(i, obj) {
                                                                \$('#t tbody#all').hide();

                                                      var imagePath = '/' + obj.image; // Modifiez le chemin si nécessaire
                                                       var imageHtml = '<img src=\"' + imagePath + '\" alt=\"Evenement Image\" style=\"width: 100px;height:100px\">';
                                                                \$('#t tbody#search').append('<tr><td> '+obj.id+'  </td><td>    '+obj.titre+'  </td><td>'+obj.description+' </td> <td>'+obj.datedebut+' </td>   <td>'+obj.datefin +' </td> <td>'+obj.lieu+' </td> <td>'+imageHtml+' </td>  <td> <a href=\"/evenement/'+obj.id+'/edit\">edit</a></td></tr>');
                                                            });
                                                        }
                                                        else
                                                        {
                                                            \$('#t tbody#all').show();
                                                            \$('#t tbody#search').empty();
                                                            \$('#t tbody#search').fadeIn('fast');
                                                        }
                                                    },
                                                });
                                                return false;
                                            }
                                        });

                                    });
                                    /*end rechercher avancee multicritéres selon sujet et staus*/
                                </script>



























































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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 198
        echo "


 


    <table class=\"table\" id=\"t\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Datedebut</th>
                <th>Datefin</th>
                <th>Lieu</th>
                <th>Image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody id=\"all\">
        ";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 218, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 219
            echo "            <tr>
                <td>";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 220), "html", null, true);
            echo "</td>
                <td>";
            // line 221
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 221), "html", null, true);
            echo "</td>
                <td>";
            // line 222
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 222), "html", null, true);
            echo "</td>
                <td>";
            // line 223
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "datedebut", [], "any", false, false, false, 223)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "datedebut", [], "any", false, false, false, 223), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 224
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "datefin", [], "any", false, false, false, 224)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "datefin", [], "any", false, false, false, 224), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 225
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "lieu", [], "any", false, false, false, 225), "html", null, true);
            echo "</td>
                                                    
            <td> <img src=\"";
            // line 227
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["evenement"], "image", [], "any", false, false, false, 227)), "html", null, true);
            echo "\" alt=\"\" style=\"width: 100px;height:100px\"> </td>
                <td>
                    <a class=\"btn btn-success\" href=\"";
            // line 229
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 229)]), "html", null, true);
            echo "\">show</a>
                    <a class=\"btn btn-warning\" href=\"";
            // line 230
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 230)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 234
            echo "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "        </tbody>
        
         <tbody id=\"search\">
          </tbody>
    </table>

    <a class=\"btn btn-primary\" href=\"";
        // line 244
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_new");
        echo "\">Ajouter</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "evenement/index.html.twig";
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
        return array (  537 => 244,  529 => 238,  520 => 234,  511 => 230,  507 => 229,  502 => 227,  497 => 225,  493 => 224,  489 => 223,  485 => 222,  481 => 221,  477 => 220,  474 => 219,  469 => 218,  447 => 198,  440 => 197,  427 => 19,  300 => 269,  275 => 246,  273 => 197,  178 => 105,  167 => 97,  133 => 66,  83 => 19,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  42 => 1,);
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








  



{% block body %}



 


    <table class=\"table\" id=\"t\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Datedebut</th>
                <th>Datefin</th>
                <th>Lieu</th>
                <th>Image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody id=\"all\">
        {% for evenement in evenements %}
            <tr>
                <td>{{ evenement.id }}</td>
                <td>{{ evenement.titre }}</td>
                <td>{{ evenement.description }}</td>
                <td>{{ evenement.datedebut ? evenement.datedebut|date('Y-m-d') : '' }}</td>
                <td>{{ evenement.datefin ? evenement.datefin|date('Y-m-d') : '' }}</td>
                <td>{{ evenement.lieu }}</td>
                                                    
            <td> <img src=\"{{ asset(evenement.image) }}\" alt=\"\" style=\"width: 100px;height:100px\"> </td>
                <td>
                    <a class=\"btn btn-success\" href=\"{{ path('app_evenement_show', {'id': evenement.id}) }}\">show</a>
                    <a class=\"btn btn-warning\" href=\"{{ path('app_evenement_edit', {'id': evenement.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
        
         <tbody id=\"search\">
          </tbody>
    </table>

    <a class=\"btn btn-primary\" href=\"{{ path('app_evenement_new') }}\">Ajouter</a>
{% endblock %}






                                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
                                </script>
                                <script>
                                    \$( document ).ready(function() {

                                        /*begin rechercher avancee multicritéres selon sujet et staus*/
                                        \$(\"#divs\").keyup(function(e){
                                            /* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
                                            var value = \$(\"#search\").val();
                                            var value2 = \$(\"#search2\").val();
                                            if(value.length >= 2 || value.length == 0 || value2.length >= 2 || value2.length == 0 )
                                            {
                                              
                                                //    alert(value);
                                                /* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */
                                                \$.ajax({
                                                    /* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                                                    url : \"{{ path('search') }}\",
                                                    /* La méthode utilisée pour transférer les données est GET */
                                                    type : 'GET',
                                                    /*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */
                                                    data: {
                                                        'searchValue' : value,
                                                        'searchValue2': value2
                                                    },
                                                    /*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                                                    success : function(retour){
                                                        if(retour){
                                                            \$('#t tbody#search').empty();
                                                            \$.each(JSON.parse(retour), function(i, obj) {
                                                                \$('#t tbody#all').hide();

                                                      var imagePath = '/' + obj.image; // Modifiez le chemin si nécessaire
                                                       var imageHtml = '<img src=\"' + imagePath + '\" alt=\"Evenement Image\" style=\"width: 100px;height:100px\">';
                                                                \$('#t tbody#search').append('<tr><td> '+obj.id+'  </td><td>    '+obj.titre+'  </td><td>'+obj.description+' </td> <td>'+obj.datedebut+' </td>   <td>'+obj.datefin +' </td> <td>'+obj.lieu+' </td> <td>'+imageHtml+' </td>  <td> <a href=\"/evenement/'+obj.id+'/edit\">edit</a></td></tr>');
                                                            });
                                                        }
                                                        else
                                                        {
                                                            \$('#t tbody#all').show();
                                                            \$('#t tbody#search').empty();
                                                            \$('#t tbody#search').fadeIn('fast');
                                                        }
                                                    },
                                                });
                                                return false;
                                            }
                                        });

                                    });
                                    /*end rechercher avancee multicritéres selon sujet et staus*/
                                </script>



























































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

  </body>

</html>


", "evenement/index.html.twig", "C:\\Users\\User\\Downloads\\HermesvoyagesPIDEV3A34-main\\templates\\evenement\\index.html.twig");
    }
}
