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

/* hebergement/show.html.twig */
class __TwigTemplate_91f22aa3f9299a0c55fc571b080f12f1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "/base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hebergement/show.html.twig"));

        $this->parent = $this->loadTemplate("/base_back.html.twig", "hebergement/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hebergement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <h1>Hebergement</h1>
      
<form action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_qr_code");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"id\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Hebergement"]) || array_key_exists("Hebergement", $context) ? $context["Hebergement"] : (function () { throw new RuntimeError('Variable "Hebergement" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"text\" value=\"
        Description: ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Hebergement"]) || array_key_exists("Hebergement", $context) ? $context["Hebergement"] : (function () { throw new RuntimeError('Variable "Hebergement" does not exist.', 12, $this->source); })()), "description", [], "any", false, false, false, 12), "html", null, true);
        echo "\\n
        Prix: ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Hebergement"]) || array_key_exists("Hebergement", $context) ? $context["Hebergement"] : (function () { throw new RuntimeError('Variable "Hebergement" does not exist.', 13, $this->source); })()), "prix", [], "any", false, false, false, 13), "html", null, true);
        echo "\\n
        Maxguest: ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Hebergement"]) || array_key_exists("Hebergement", $context) ? $context["Hebergement"] : (function () { throw new RuntimeError('Variable "Hebergement" does not exist.', 14, $this->source); })()), "maxguest", [], "any", false, false, false, 14), "html", null, true);
        echo "\\n
        Adresse: ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Hebergement"]) || array_key_exists("Hebergement", $context) ? $context["Hebergement"] : (function () { throw new RuntimeError('Variable "Hebergement" does not exist.', 15, $this->source); })()), "adresse", [], "any", false, false, false, 15), "html", null, true);
        echo "\\n
    \">
    <button type=\"submit\">Générer QR Code</button>
</form>
      
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Hebergement"]) || array_key_exists("Hebergement", $context) ? $context["Hebergement"] : (function () { throw new RuntimeError('Variable "Hebergement" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Hebergement"]) || array_key_exists("Hebergement", $context) ? $context["Hebergement"] : (function () { throw new RuntimeError('Variable "Hebergement" does not exist.', 28, $this->source); })()), "adresse", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Hebergement"]) || array_key_exists("Hebergement", $context) ? $context["Hebergement"] : (function () { throw new RuntimeError('Variable "Hebergement" does not exist.', 32, $this->source); })()), "type", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Hebergement"]) || array_key_exists("Hebergement", $context) ? $context["Hebergement"] : (function () { throw new RuntimeError('Variable "Hebergement" does not exist.', 36, $this->source); })()), "prix", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Maxguest</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Hebergement"]) || array_key_exists("Hebergement", $context) ? $context["Hebergement"] : (function () { throw new RuntimeError('Variable "Hebergement" does not exist.', 40, $this->source); })()), "maxguest", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Room</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Hebergement"]) || array_key_exists("Hebergement", $context) ? $context["Hebergement"] : (function () { throw new RuntimeError('Variable "Hebergement" does not exist.', 44, $this->source); })()), "room", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Hebergement"]) || array_key_exists("Hebergement", $context) ? $context["Hebergement"] : (function () { throw new RuntimeError('Variable "Hebergement" does not exist.', 48, $this->source); })()), "description", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Amenitites</th>
                <td>
                <ul>
                    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Hebergement"]) || array_key_exists("Hebergement", $context) ? $context["Hebergement"] : (function () { throw new RuntimeError('Variable "Hebergement" does not exist.', 54, $this->source); })()), "amenities", [], "any", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["amenities"]) {
            // line 55
            echo "                        <li>";
            echo twig_escape_filter($this->env, $context["amenities"], "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amenities'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                </ul>
            </td>
            <tr>
            <th>images</th>
             <td>
            <img src =";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["Hebergement"]) || array_key_exists("Hebergement", $context) ? $context["Hebergement"] : (function () { throw new RuntimeError('Variable "Hebergement" does not exist.', 62, $this->source); })()), "image", [], "any", false, false, false, 62))), "html", null, true);
        echo " width = \"100%\"/>
            </td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Hebergement_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Hebergement_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Hebergement"]) || array_key_exists("Hebergement", $context) ? $context["Hebergement"] : (function () { throw new RuntimeError('Variable "Hebergement" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70)]), "html", null, true);
        echo "\">edit</a>

    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "hebergement/show.html.twig";
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
        return array (  208 => 70,  203 => 68,  194 => 62,  187 => 57,  178 => 55,  174 => 54,  165 => 48,  158 => 44,  151 => 40,  144 => 36,  137 => 32,  130 => 28,  123 => 24,  111 => 15,  107 => 14,  103 => 13,  99 => 12,  94 => 10,  90 => 9,  86 => 7,  79 => 6,  67 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/base_back.html.twig' %}

{% block title %}Hebergement{% endblock %}
{% block stylesheets %}{% endblock %}

{% block content %}
    <h1>Hebergement</h1>
      
<form action=\"{{ path('generate_qr_code') }}\" method=\"post\">
    <input type=\"hidden\" name=\"id\" value=\"{{ Hebergement.id }}\" />
    <input type=\"hidden\" name=\"text\" value=\"
        Description: {{ Hebergement.description }}\\n
        Prix: {{ Hebergement.prix }}\\n
        Maxguest: {{ Hebergement.maxguest }}\\n
        Adresse: {{ Hebergement.adresse }}\\n
    \">
    <button type=\"submit\">Générer QR Code</button>
</form>
      
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ Hebergement.id }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ Hebergement.adresse }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ Hebergement.type }}</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>{{ Hebergement.prix }}</td>
            </tr>
            <tr>
                <th>Maxguest</th>
                <td>{{ Hebergement.maxguest }}</td>
            </tr>
            <tr>
                <th>Room</th>
                <td>{{ Hebergement.room }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ Hebergement.description }}</td>
            </tr>
            <tr>
                <th>Amenitites</th>
                <td>
                <ul>
                    {% for amenities in Hebergement.amenities %}
                        <li>{{ amenities }}</li>
                    {% endfor %}
                </ul>
            </td>
            <tr>
            <th>images</th>
             <td>
            <img src ={{ asset ('uploads/' ~Hebergement.image)}} width = \"100%\"/>
            </td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_Hebergement_index') }}\">back to list</a>

    <a href=\"{{ path('app_Hebergement_edit', {'id': Hebergement.id}) }}\">edit</a>

    
{% endblock %}
", "hebergement/show.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\New folder\\HermesvoyagesPIDEV3A34-main\\templates\\hebergement\\show.html.twig");
    }
}
