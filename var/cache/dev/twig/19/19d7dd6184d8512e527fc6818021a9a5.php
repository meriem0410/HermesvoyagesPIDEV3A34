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

/* res/index.html.twig */
class __TwigTemplate_39a4d28bbe96399b8871925a0ab0f1f7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "res/index.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "res/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Res index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Liste des reservations </h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Nombre de personnes </th>
                <th>Origine</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["res"]) || array_key_exists("res", $context) ? $context["res"] : (function () { throw new RuntimeError('Variable "res" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["re"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["re"], "nombre", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["re"], "origine", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["re"], "age", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_res_show", ["id" => twig_get_attribute($this->env, $this->source, $context["re"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Show</a>
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_res_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["re"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Edit</a>
                    ";
            // line 26
            if ( !twig_get_attribute($this->env, $this->source, $context["re"], "confirmed", [], "any", false, false, false, 26)) {
                // line 27
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("confirm_reservation", ["id" => twig_get_attribute($this->env, $this->source, $context["re"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                echo "\" class=\"btn btn-success\">Confirm</a>
                    ";
            } else {
                // line 29
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cancel_reservation", ["id" => twig_get_attribute($this->env, $this->source, $context["re"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">Cancel</a>
                    ";
            }
            // line 31
            echo "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['re'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
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
        return "res/index.html.twig";
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
        return array (  146 => 38,  137 => 34,  130 => 31,  124 => 29,  118 => 27,  116 => 26,  112 => 25,  108 => 24,  103 => 22,  99 => 21,  95 => 20,  92 => 19,  87 => 18,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Res index{% endblock %}

{% block content %}
    <h1>Liste des reservations </h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Nombre de personnes </th>
                <th>Origine</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for re in res %}
            <tr>
                <td>{{ re.nombre }}</td>
                <td>{{ re.origine }}</td>
                <td>{{ re.age }}</td>
                <td>
                    <a href=\"{{ path('app_res_show', {'id': re.id}) }}\" class=\"btn btn-primary\">Show</a>
                    <a href=\"{{ path('app_res_edit', {'id': re.id}) }}\" class=\"btn btn-secondary\">Edit</a>
                    {% if not re.confirmed %}
                        <a href=\"{{ path('confirm_reservation', {'id': re.id}) }}\" class=\"btn btn-success\">Confirm</a>
                    {% else %}
                        <a href=\"{{ path('cancel_reservation', {'id': re.id}) }}\" class=\"btn btn-danger\">Cancel</a>
                    {% endif %}
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
", "res/index.html.twig", "/Users/meriemsayari/Downloads/HermesvoyagesPIDEV3A34-main/templates/res/index.html.twig");
    }
}
