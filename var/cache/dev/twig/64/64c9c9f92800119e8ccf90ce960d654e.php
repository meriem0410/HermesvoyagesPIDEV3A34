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

/* guide/show.html.twig */
class __TwigTemplate_405a4239b1cc9a749d1347d2f9d7b86f extends Template
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
        return "base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guide/show.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "guide/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Guide";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <h1>Guide</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 21, $this->source); })()), "prenom", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Num_tel</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 25, $this->source); })()), "numTel", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Disponibilite</th>
                <td>";
        // line 29
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 29, $this->source); })()), "disponibilite", [], "any", false, false, false, 29)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
        </tbody>
    </table>
   <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["guide"]) || array_key_exists("guide", $context) ? $context["guide"] : (function () { throw new RuntimeError('Variable "guide" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">edit</a>
    ";
        // line 36
        echo twig_include($this->env, $context, "guide/_delete_form.html.twig");
        echo "

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Ville</th>
                <th>latitude </th>
                <th>longitude</th>
                <th>Video</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["excursions"]) || array_key_exists("excursions", $context) ? $context["excursions"] : (function () { throw new RuntimeError('Variable "excursions" does not exist.', 52, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["excursion"]) {
            // line 53
            echo "            <tr>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "titre", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "description", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "ville", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "latitude", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excursion"], "longitude", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                <td>
                <iframe width=\"560\" height=\"315\" src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Video/" . twig_get_attribute($this->env, $this->source, $context["excursion"], "video", [], "any", false, false, false, 61))), "html", null, true);
            echo "\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>
                </td>
                <td>
                    <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_excursion_index", ["id" => twig_get_attribute($this->env, $this->source, $context["excursion"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_excursion_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["excursion"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['excursion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
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
        return "guide/show.html.twig";
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
        return array (  219 => 73,  210 => 69,  201 => 65,  197 => 64,  191 => 61,  186 => 59,  182 => 58,  178 => 57,  174 => 56,  170 => 55,  166 => 54,  163 => 53,  158 => 52,  139 => 36,  135 => 35,  130 => 33,  123 => 29,  116 => 25,  109 => 21,  102 => 17,  95 => 13,  87 => 7,  80 => 6,  67 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Guide{% endblock %}
{% block stylesheets %} {% endblock %}

{% block content %}
    <h1>Guide</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ guide.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ guide.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ guide.prenom }}</td>
            </tr>
            <tr>
                <th>Num_tel</th>
                <td>{{ guide.numTel }}</td>
            </tr>
            <tr>
                <th>Disponibilite</th>
                <td>{{ guide.disponibilite ? 'Yes' : 'No' }}</td>
            </tr>
        </tbody>
    </table>
   <a href=\"{{ path('app_guide_index') }}\">back to list</a>

    <a href=\"{{ path('app_guide_edit', {'id': guide.id}) }}\">edit</a>
    {{ include('guide/_delete_form.html.twig') }}

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Ville</th>
                <th>latitude </th>
                <th>longitude</th>
                <th>Video</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for excursion in excursions %}
            <tr>
                <td>{{ excursion.id }}</td>
                <td>{{ excursion.titre }}</td>
                <td>{{ excursion.description }}</td>
                <td>{{ excursion.ville }}</td>
                <td>{{ excursion.latitude }}</td>
                <td>{{ excursion.longitude }}</td>
                <td>
                <iframe width=\"560\" height=\"315\" src=\"{{ asset('Video/' ~ excursion.video) }}\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>
                </td>
                <td>
                    <a href=\"{{ path('app_excursion_index', {'id': excursion.id}) }}\">show</a>
                    <a href=\"{{ path('app_excursion_edit', {'id': excursion.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

 


{% endblock %}
", "guide/show.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\HermesvoyagesPIDEV3A34-main\\templates\\guide\\show.html.twig");
    }
}
