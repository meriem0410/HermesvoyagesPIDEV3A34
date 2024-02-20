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

/* voyage/index.html.twig */
class __TwigTemplate_3d8a969192fc650b3e52839069ee8b96 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sidebar' => [$this, 'block_sidebar'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/index.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "voyage/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des Voyages";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        echo " ";
        
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
      <h3 class=\"page-title\" style=\"color: #D0A343;\">Liste des voyages</h3>
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\" style=\"background-color: #94BDB5;\">
          <li class=\"breadcrumb-item\"><a href=\"#\" style=\"color: #4F818C;\">Voyage</a></li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\" style=\"color: #4F818C;\">Liste</li>
        </ol>
      </nav>
    </div>
    <div class=\"row justify-content-center\">
      <div class=\"col-md-10 grid-margin stretch-card\">
        <div class=\"card\" style=\"border-color: #4F818C;\">
          <div class=\"card-body\">
            <h4 class=\"card-title\" style=\"color: #D0A343;\">Liste des voyages</h4>
            <table class=\"table\">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Destination</th>
                  <th>Prix</th>
                  <th>Date</th>
                  <th>Type</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 35
            echo "                <tr>
                  <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                  <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "destination", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                  <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "prix", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                  <td>";
            // line 39
            ((twig_get_attribute($this->env, $this->source, $context["voyage"], "date", [], "any", false, false, false, 39)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "date", [], "any", false, false, false, 39), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                  <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "type", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                  <td>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" class=\"btn btn-info\" style=\"background-color: #D0A343; border-color: #D0A343;\">Afficher</a>
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn btn-primary\" style=\"background-color: #D0A343; border-color: #D0A343;\">Modifier</a>
                  </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "                <tr>
                  <td colspan=\"6\">Aucun enregistrement trouvé</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "              </tbody>
            </table>
            <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_new");
        echo "\" class=\"btn btn-success\" style=\"background-color: #D0A343; border-color: #D0A343;\">Créer un nouveau voyage</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class=\"footer\">
    <!-- Contenu du pied de page -->
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
        return "voyage/index.html.twig";
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
        return array (  172 => 53,  168 => 51,  159 => 47,  150 => 43,  146 => 42,  141 => 40,  137 => 39,  133 => 38,  129 => 37,  125 => 36,  122 => 35,  117 => 34,  87 => 6,  80 => 5,  67 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Liste des Voyages{% endblock %}
 {% block sidebar %} {% endblock %} 
{% block content %}
<div class=\"main-panel\">
  <div class=\"content-wrapper\">
    <div class=\"page-header\">
      <h3 class=\"page-title\" style=\"color: #D0A343;\">Liste des voyages</h3>
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\" style=\"background-color: #94BDB5;\">
          <li class=\"breadcrumb-item\"><a href=\"#\" style=\"color: #4F818C;\">Voyage</a></li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\" style=\"color: #4F818C;\">Liste</li>
        </ol>
      </nav>
    </div>
    <div class=\"row justify-content-center\">
      <div class=\"col-md-10 grid-margin stretch-card\">
        <div class=\"card\" style=\"border-color: #4F818C;\">
          <div class=\"card-body\">
            <h4 class=\"card-title\" style=\"color: #D0A343;\">Liste des voyages</h4>
            <table class=\"table\">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Destination</th>
                  <th>Prix</th>
                  <th>Date</th>
                  <th>Type</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                {% for voyage in voyages %}
                <tr>
                  <td>{{ voyage.id }}</td>
                  <td>{{ voyage.destination }}</td>
                  <td>{{ voyage.prix }}</td>
                  <td>{{ voyage.date ? voyage.date|date('Y-m-d') : '' }}</td>
                  <td>{{ voyage.type }}</td>
                  <td>
                    <a href=\"{{ path('app_voyage_show', {'id': voyage.id}) }}\" class=\"btn btn-info\" style=\"background-color: #D0A343; border-color: #D0A343;\">Afficher</a>
                    <a href=\"{{ path('app_voyage_edit', {'id': voyage.id}) }}\" class=\"btn btn-primary\" style=\"background-color: #D0A343; border-color: #D0A343;\">Modifier</a>
                  </td>
                </tr>
                {% else %}
                <tr>
                  <td colspan=\"6\">Aucun enregistrement trouvé</td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
            <a href=\"{{ path('app_voyage_new') }}\" class=\"btn btn-success\" style=\"background-color: #D0A343; border-color: #D0A343;\">Créer un nouveau voyage</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class=\"footer\">
    <!-- Contenu du pied de page -->
  </footer>
</div>
{% endblock %}

", "voyage/index.html.twig", "/Users/meriemsayari/Downloads/HermesvoyagesPIDEV3A34-main/templates/voyage/index.html.twig");
    }
}
