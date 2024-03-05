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

/* evenement/pdf.html.twig */
class __TwigTemplate_b6aaaf7fde952d9f4a5661f0b2dab56d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/pdf.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

<h1 style=\"text-align: center\"> Liste des restaurants </h1>
<br>



<!DOCTYPE html>
<html>
<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 50%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 2px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #4c7aaf;
            color: yellow;
        }
    </style>
</head>



<table border =\"1\" id=\"customers\" width=\"60%\" height=\"120\" >
    <tr>



                <th scope=\"row\">Id</th>
                <th scope=\"row\">Titre</th>
                <th scope=\"row\">Description</th>
                <th scope=\"row\">Datedebut</th>
                <th scope=\"row\">Datefin</th>
                <th scope=\"row\">Lieu</th>
                <th scope=\"row\">Type</th>
                <th scope=\"row\">Image</th>

    </tr>
    <tbody id=\"all\">
    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["restaurants"]);
        foreach ($context['_seq'] as $context["_key"] => $context["restaurants"]) {
            // line 58
            echo "        <tr>


                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurants"], "id", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurants"], "titre", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurants"], "description", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            ((twig_get_attribute($this->env, $this->source, $context["restaurants"], "datedebut", [], "any", false, false, false, 64)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurants"], "datedebut", [], "any", false, false, false, 64), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 65
            ((twig_get_attribute($this->env, $this->source, $context["restaurants"], "datefin", [], "any", false, false, false, 65)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurants"], "datefin", [], "any", false, false, false, 65), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurants"], "lieu", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurants"], "type", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>

                    <td><img src=\"data:image/jpeg;base64,";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurants"], "image", [], "any", false, false, false, 69), "html", null, true);
            echo "\"  style=\"width: 100px;height:100px\" ></td>


        </tr>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurants'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "



    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "evenement/pdf.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  164 => 76,  151 => 69,  146 => 67,  142 => 66,  138 => 65,  134 => 64,  130 => 63,  126 => 62,  122 => 61,  117 => 58,  113 => 57,  57 => 3,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block body %}


<h1 style=\"text-align: center\"> Liste des restaurants </h1>
<br>



<!DOCTYPE html>
<html>
<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 50%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 2px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #4c7aaf;
            color: yellow;
        }
    </style>
</head>



<table border =\"1\" id=\"customers\" width=\"60%\" height=\"120\" >
    <tr>



                <th scope=\"row\">Id</th>
                <th scope=\"row\">Titre</th>
                <th scope=\"row\">Description</th>
                <th scope=\"row\">Datedebut</th>
                <th scope=\"row\">Datefin</th>
                <th scope=\"row\">Lieu</th>
                <th scope=\"row\">Type</th>
                <th scope=\"row\">Image</th>

    </tr>
    <tbody id=\"all\">
    {% for restaurants in restaurants %}
        <tr>


                <td>{{ restaurants.id }}</td>
                <td>{{ restaurants.titre }}</td>
                <td>{{ restaurants.description }}</td>
                <td>{{ restaurants.datedebut ? restaurants.datedebut|date('Y-m-d') : '' }}</td>
                <td>{{ restaurants.datefin ? restaurants.datefin|date('Y-m-d') : '' }}</td>
                <td>{{ restaurants.lieu }}</td>
                <td>{{ restaurants.type }}</td>

                    <td><img src=\"data:image/jpeg;base64,{{ restaurants.image }}\"  style=\"width: 100px;height:100px\" ></td>


        </tr>


    {%endfor%}




    {% endblock %}", "evenement/pdf.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\HermesvoyagesPIDEV3A34-main\\templates\\evenement\\pdf.html.twig");
    }
}
