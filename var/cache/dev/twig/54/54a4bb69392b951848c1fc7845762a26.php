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

/* randomfacts.html.twig */
class __TwigTemplate_de8174e1a400492cc3818fe0c569640a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "randomfacts.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "randomfacts.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "session", [], "any", false, false, false, 3), "get", ["isBanned"], "method", false, false, false, 3) == 1)) {
            echo " 
                <p>This account is banned.</p>
                <form action=\"";
            // line 5
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" method=\"post\">
                    <button type=\"submit\">Disconnect</button>
                </form>
";
        } else {
            // line 9
            echo "
<!DOCTYPE html>
<html>
<head>
  <title>Random Country Facts</title>
  <style>
    h1, p {
      font-family: Arial, sans-serif;
    }
  </style>
</head>
<body>

<h1>Random Country Facts</h1>
<p id=\"country-fact\">Click the button below to view a random country fact!</p>
<button id=\"show-fact\">Show a new fact</button>

<script>
  var factPlaceholder = document.getElementById(\"country-fact\");
  var showFact = document.getElementById(\"show-fact\");

  var randomCountry = JSON.parse('";
            // line 30
            echo json_encode((isset($context["randomCountry"]) || array_key_exists("randomCountry", $context) ? $context["randomCountry"] : (function () { throw new RuntimeError('Variable "randomCountry" does not exist.', 30, $this->source); })()));
            echo "');

  function randomFact(){
    var languages = randomCountry.languages.join(', ');
    var facts = [
      randomCountry.name + \" is located in \" + randomCountry.region + \".\",
      \"The capital of \" + randomCountry.name + \" is \" + randomCountry.capital + \".\",
      \"The population of \" + randomCountry.name + \" is approximately \" + randomCountry.population + \" people.\",
      randomCountry.name + \" has \" + languages.split(', ').length + \" official language(s), including \" + languages + \".\",
      randomCountry.name + \"'s currency is \" + randomCountry.currencies[0].name + \" (\" + randomCountry.currencies[0].code + \").\",
      \"The calling code for \" + randomCountry.name + \" is +\" + randomCountry.callingCodes[0] + \".\",
      randomCountry.name + \"'s area is \" + randomCountry.area + \" square kilometers.\",
      \"The government type of \" + randomCountry.name + \" is \" + randomCountry.government + \".\",
      randomCountry.name + \"'s domain extension is \" + randomCountry.topLevelDomain.join(', ') + \".\"
    ];
    
    // Generate a random index to select a random country fact
    var randomIndex = Math.floor(Math.random() * facts.length);
    return facts[randomIndex];
  }

  showFact.addEventListener('click', function(){
    factPlaceholder.textContent = randomFact();
  });
</script>

</body>
</html>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "randomfacts.html.twig";
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
        return array (  94 => 30,  71 => 9,  64 => 5,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}
{% block content %}
{% if app.session.get('isBanned') == 1 %} 
                <p>This account is banned.</p>
                <form action=\"{{ path('app_logout') }}\" method=\"post\">
                    <button type=\"submit\">Disconnect</button>
                </form>
{% else %}

<!DOCTYPE html>
<html>
<head>
  <title>Random Country Facts</title>
  <style>
    h1, p {
      font-family: Arial, sans-serif;
    }
  </style>
</head>
<body>

<h1>Random Country Facts</h1>
<p id=\"country-fact\">Click the button below to view a random country fact!</p>
<button id=\"show-fact\">Show a new fact</button>

<script>
  var factPlaceholder = document.getElementById(\"country-fact\");
  var showFact = document.getElementById(\"show-fact\");

  var randomCountry = JSON.parse('{{ randomCountry|json_encode|raw }}');

  function randomFact(){
    var languages = randomCountry.languages.join(', ');
    var facts = [
      randomCountry.name + \" is located in \" + randomCountry.region + \".\",
      \"The capital of \" + randomCountry.name + \" is \" + randomCountry.capital + \".\",
      \"The population of \" + randomCountry.name + \" is approximately \" + randomCountry.population + \" people.\",
      randomCountry.name + \" has \" + languages.split(', ').length + \" official language(s), including \" + languages + \".\",
      randomCountry.name + \"'s currency is \" + randomCountry.currencies[0].name + \" (\" + randomCountry.currencies[0].code + \").\",
      \"The calling code for \" + randomCountry.name + \" is +\" + randomCountry.callingCodes[0] + \".\",
      randomCountry.name + \"'s area is \" + randomCountry.area + \" square kilometers.\",
      \"The government type of \" + randomCountry.name + \" is \" + randomCountry.government + \".\",
      randomCountry.name + \"'s domain extension is \" + randomCountry.topLevelDomain.join(', ') + \".\"
    ];
    
    // Generate a random index to select a random country fact
    var randomIndex = Math.floor(Math.random() * facts.length);
    return facts[randomIndex];
  }

  showFact.addEventListener('click', function(){
    factPlaceholder.textContent = randomFact();
  });
</script>

</body>
</html>
{% endif %}
{% endblock %}
", "randomfacts.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\templates\\randomfacts.html.twig");
    }
}
