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

/* guide/index.html.twig */
class __TwigTemplate_c552784d467cd8de150876de2d27f4b5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "guide/index.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "guide/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Guide index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <h1>Guide index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>image</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Num_tel</th>
                <th>Disponibilite</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["guides"]) || array_key_exists("guides", $context) ? $context["guides"] : (function () { throw new RuntimeError('Variable "guides" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["guide"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo " </td>
                <td>
                  <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Images/" . twig_get_attribute($this->env, $this->source, $context["guide"], "image", [], "any", false, false, false, 26))), "html", null, true);
            echo "\" alt=\"Product Thumb\" ></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "nom", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "prenom", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guide"], "numTel", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo ((twig_get_attribute($this->env, $this->source, $context["guide"], "disponibilite", [], "any", false, false, false, 30)) ? ("Yes") : ("No"));
            echo "</td>
                <td>  
                    ";
            // line 32
            echo twig_include($this->env, $context, "guide/_delete_form.html.twig");
            echo "
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_show", ["id" => twig_get_attribute($this->env, $this->source, $context["guide"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["guide"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 38
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_guide_new");
        echo "\">Create new</a>


<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js\" integrity=\"sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <canvas id=\"myChart\"></canvas>
    <script>
        var data = ";
        // line 51
        echo json_encode((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 51, $this->source); })()));
        echo ";
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: data.map(function(d) { return d.nom + ' ' + d.prenom }),
                datasets: [
                    {
                        label: 'Likes',
                        data: data.map(function(d) { return d.Likes }),
                        backgroundColor: '#FF6384',
                    },
                    {
                        label: 'Dislikes',
                        data: data.map(function(d) { return d.Dislikes }),
                        backgroundColor: '#36A2EB',
                    },
                    {
                        label: 'Nombre de video',
                        data: data.map(function(d) { return d.videoCount }),
                        backgroundColor: 'yellow',
                    }
                ],
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "guide/index.html.twig";
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
        return array (  185 => 51,  176 => 45,  171 => 42,  162 => 38,  145 => 34,  141 => 33,  137 => 32,  132 => 30,  128 => 29,  124 => 28,  120 => 27,  116 => 26,  111 => 24,  108 => 23,  90 => 22,  73 => 7,  66 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Guide index{% endblock %}


{% block content %}
    <h1>Guide index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>image</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Num_tel</th>
                <th>Disponibilite</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for guide in guides %}
            <tr>
                <td>{{ guide.id }} </td>
                <td>
                  <img src=\"{{ asset('Images/' ~  guide.image ) }}\" alt=\"Product Thumb\" ></td>
                <td>{{ guide.nom }}</td>
                <td>{{ guide.prenom }}</td>
                <td>{{ guide.numTel }}</td>
                <td>{{ guide.disponibilite ? 'Yes' : 'No' }}</td>
                <td>  
                    {{ include('guide/_delete_form.html.twig') }}
                    <a href=\"{{ path('app_guide_show', {'id': guide.id}) }}\">show</a>
                    <a href=\"{{ path('app_guide_edit', {'id': guide.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_guide_new') }}\">Create new</a>


<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js\" integrity=\"sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <canvas id=\"myChart\"></canvas>
    <script>
        var data = {{ data|json_encode|raw }};
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: data.map(function(d) { return d.nom + ' ' + d.prenom }),
                datasets: [
                    {
                        label: 'Likes',
                        data: data.map(function(d) { return d.Likes }),
                        backgroundColor: '#FF6384',
                    },
                    {
                        label: 'Dislikes',
                        data: data.map(function(d) { return d.Dislikes }),
                        backgroundColor: '#36A2EB',
                    },
                    {
                        label: 'Nombre de video',
                        data: data.map(function(d) { return d.videoCount }),
                        backgroundColor: 'yellow',
                    }
                ],
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>


{% endblock %}
", "guide/index.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\HermesvoyagesPIDEV3A34-main\\templates\\guide\\index.html.twig");
    }
}
