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

/* programme/show.html.twig */
class __TwigTemplate_afcd336ae596c8e11662f2d69c5c2312 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programme/show.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "programme/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Programme";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"main-panel\">
  <div class=\"content-wrapper\">
    <div class=\"page-header\">
      <h3 class=\"page-title\" style=\"color: #D0A343;\">Programme</h3>
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\" style=\"background-color: #94BDB5;\">
          <li class=\"breadcrumb-item\"><a href=\"#\" style=\"color: #4F818C;\">Programme</a></li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\" style=\"color: #4F818C;\">Détails</li>
        </ol>
      </nav>
    </div>
    <div class=\"row justify-content-center\">
      <div class=\"col-md-8 grid-margin stretch-card\">
        <div class=\"card\" style=\"border-color: #4F818C;\">
          <div class=\"card-body\">
            <h4 class=\"card-title\" style=\"color: #D0A343;\">Détails du programme</h4>
            <table class=\"table\">
              <tbody>
                <tr>
                  <th>Id</th>
                  <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                  <th>Activite</th>
                  <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 30, $this->source); })()), "activite", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                  <th>Datedepart</th>
                  <td>";
        // line 34
        ((twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 34, $this->source); })()), "datedepart", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 34, $this->source); })()), "datedepart", [], "any", false, false, false, 34), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                </tr>
                <tr>
                  <th>Dateretour</th>
                  <td>";
        // line 38
        ((twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 38, $this->source); })()), "dateretour", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 38, $this->source); })()), "dateretour", [], "any", false, false, false, 38), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                </tr>
                <tr>
                  <th>Description</th>
                  <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 42, $this->source); })()), "description", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
                </tr>
              </tbody>
            </table>
            <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programme_index");
        echo "\" class=\"btn btn-secondary\" style=\"background-color: #D0A343; border-color: #D0A343;\">Retour à la liste</a>
            <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programme_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
        echo "\" class=\"btn btn-primary\" style=\"background-color: #D0A343; border-color: #D0A343;\">Modifier</a>
            ";
        // line 48
        echo twig_include($this->env, $context, "programme/_delete_form.html.twig");
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class=\"footer\">
    <!-- Footer Content Goes Here -->
  </footer>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "programme/show.html.twig";
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
        return array (  138 => 48,  134 => 47,  130 => 46,  123 => 42,  116 => 38,  109 => 34,  102 => 30,  95 => 26,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Programme{% endblock %}

{% block content %}
<div class=\"main-panel\">
  <div class=\"content-wrapper\">
    <div class=\"page-header\">
      <h3 class=\"page-title\" style=\"color: #D0A343;\">Programme</h3>
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\" style=\"background-color: #94BDB5;\">
          <li class=\"breadcrumb-item\"><a href=\"#\" style=\"color: #4F818C;\">Programme</a></li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\" style=\"color: #4F818C;\">Détails</li>
        </ol>
      </nav>
    </div>
    <div class=\"row justify-content-center\">
      <div class=\"col-md-8 grid-margin stretch-card\">
        <div class=\"card\" style=\"border-color: #4F818C;\">
          <div class=\"card-body\">
            <h4 class=\"card-title\" style=\"color: #D0A343;\">Détails du programme</h4>
            <table class=\"table\">
              <tbody>
                <tr>
                  <th>Id</th>
                  <td>{{ programme.id }}</td>
                </tr>
                <tr>
                  <th>Activite</th>
                  <td>{{ programme.activite }}</td>
                </tr>
                <tr>
                  <th>Datedepart</th>
                  <td>{{ programme.datedepart ? programme.datedepart|date('Y-m-d') : '' }}</td>
                </tr>
                <tr>
                  <th>Dateretour</th>
                  <td>{{ programme.dateretour ? programme.dateretour|date('Y-m-d') : '' }}</td>
                </tr>
                <tr>
                  <th>Description</th>
                  <td>{{ programme.description }}</td>
                </tr>
              </tbody>
            </table>
            <a href=\"{{ path('app_programme_index') }}\" class=\"btn btn-secondary\" style=\"background-color: #D0A343; border-color: #D0A343;\">Retour à la liste</a>
            <a href=\"{{ path('app_programme_edit', {'id': programme.id}) }}\" class=\"btn btn-primary\" style=\"background-color: #D0A343; border-color: #D0A343;\">Modifier</a>
            {{ include('programme/_delete_form.html.twig') }}
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class=\"footer\">
    <!-- Footer Content Goes Here -->
  </footer>
</div>
{% endblock %}
", "programme/show.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\HermesvoyagesPIDEV3A34-main\\templates\\programme\\show.html.twig");
    }
}
