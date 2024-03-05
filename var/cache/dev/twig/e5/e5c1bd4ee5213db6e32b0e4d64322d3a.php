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

/* hebergement/test.html.twig */
class __TwigTemplate_dd1491cfb633ee719e24cae776435a1a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hebergement/test.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, (isset($context["SearchData"]) || array_key_exists("SearchData", $context) ? $context["SearchData"] : (function () { throw new RuntimeError('Variable "SearchData" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Adresse</th>
                <th>Type</th>
                <th>Prix par nuitée</th>
                <th>Capacité</th>
                <th>Nb de chambres</th>
                <th>Description</th>
              
                <th>Amenitites</th>
                <th>Images</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Hebergements"]) || array_key_exists("Hebergements", $context) ? $context["Hebergements"] : (function () { throw new RuntimeError('Variable "Hebergements" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["Hebergement"]) {
            // line 20
            echo "            <tr>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Hebergement"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Hebergement"], "adresse", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Hebergement"], "type", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Hebergement"], "prix", [], "any", false, false, false, 24), "html", null, true);
            echo "DT</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Hebergement"], "maxguest", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Hebergement"], "room", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Hebergement"], "description", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>
    <ul>
       
            
    </ul> 
               </td>
               <td>
    <ul>
        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Hebergement"], "amenities", [], "any", false, false, false, 36));
            foreach ($context['_seq'] as $context["_key"] => $context["amenity"]) {
                // line 37
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["amenity"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amenity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "    </ul>
            </td>
            <td>
    ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, $context["Hebergement"], "image", [], "any", false, false, false, 42)) {
                // line 43
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["Hebergement"], "image", [], "any", false, false, false, 43))), "html", null, true);
                echo "\" width=\"50%\"/>
    ";
            }
            // line 45
            echo "</td>   
           
                <td>
                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Hebergement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["Hebergement"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Hebergement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Hebergement"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Hebergement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "hebergement/test.html.twig";
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
        return array (  158 => 57,  149 => 53,  140 => 49,  136 => 48,  131 => 45,  125 => 43,  123 => 42,  118 => 39,  109 => 37,  105 => 36,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  66 => 20,  61 => 19,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{SearchData}}
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Adresse</th>
                <th>Type</th>
                <th>Prix par nuitée</th>
                <th>Capacité</th>
                <th>Nb de chambres</th>
                <th>Description</th>
              
                <th>Amenitites</th>
                <th>Images</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for Hebergement in Hebergements %}
            <tr>
                <td>{{ Hebergement.id }}</td>
                <td>{{ Hebergement.adresse }}</td>
                <td>{{ Hebergement.type }}</td>
                <td>{{ Hebergement.prix }}DT</td>
                <td>{{ Hebergement.maxguest }}</td>
                <td>{{ Hebergement.room }}</td>
                <td>{{ Hebergement.description }}</td>
                <td>
    <ul>
       
            
    </ul> 
               </td>
               <td>
    <ul>
        {% for amenity in Hebergement.amenities %}
            <li>{{ amenity }}</li>
        {% endfor %}
    </ul>
            </td>
            <td>
    {% if Hebergement.image %}
        <img src=\"{{ asset('uploads/' ~ Hebergement.image) }}\" width=\"50%\"/>
    {% endif %}
</td>   
           
                <td>
                    <a href=\"{{ path('app_Hebergement_show', {'id': Hebergement.id}) }}\">show</a>
                    <a href=\"{{ path('app_Hebergement_edit', {'id': Hebergement.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

", "hebergement/test.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\New folder\\HermesvoyagesPIDEV3A34-main\\templates\\hebergement\\test.html.twig");
    }
}
