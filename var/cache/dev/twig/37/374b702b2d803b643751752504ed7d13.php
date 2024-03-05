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

/* user/dashboard.html.twig */
class __TwigTemplate_f3b4fb0cc44a23a96da564377b8df107 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "user/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        echo " <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "User index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <h1>User index</h1>

    <form action=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\" method=\"GET\">
        <div class=\"input-group mb-3\">
            <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Search by username , e-mail or role\">
            <div class=\"input-group-append\">
                <button class=\"btn btn-outline-secondary\" type=\"submit\">Search</button>
            </div>
        </div>
    </form>

    <table class=\"table\">
        <!-- Table headers -->
        <thead>
            <!-- Header row -->
            <tr class=\"table-warning\">
                <th>Id</th>
                <th>Email</th>
                <th>Username</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- User data rows -->
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 36
            echo "                <tr class=\"table-light\">
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Show</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "                <!-- If no users found -->
                <tr>
                    <td colspan=\"5\">No records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>

    <!-- Pagination controls -->
    <nav aria-label=\"Page navigation\">
        <ul class=\"pagination justify-content-center\">
            ";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 57, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 57) != 1)) {
            // line 58
            echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => 1]);
            echo "\" aria-label=\"First\">
                        <span aria-hidden=\"true\">&laquo;&laquo;</span>
                        <span class=\"sr-only\">First</span>
                    </a>
                </li>
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 65, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 65) - 1)]), "html", null, true);
            echo "\" aria-label=\"Previous\">
                        <span aria-hidden=\"true\">&laquo;</span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                </li>
            ";
        }
        // line 71
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 71, $this->source); })()), "pageCount", [], "any", false, false, false, 71)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 72
            echo "                <li class=\"page-item ";
            if (($context["page"] == twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 72, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 72))) {
                echo "active";
            }
            echo "\">
                    <a class=\"page-link\" href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => $context["page"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 76, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 76) != twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 76, $this->source); })()), "pageCount", [], "any", false, false, false, 76))) {
            // line 77
            echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 78, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 78) + 1)]), "html", null, true);
            echo "\" aria-label=\"Next\">
                        <span aria-hidden=\"true\">&raquo;</span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </li>
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 84, $this->source); })()), "pageCount", [], "any", false, false, false, 84)]), "html", null, true);
            echo "\" aria-label=\"Last\">
                        <span aria-hidden=\"true\">&raquo;&raquo;</span>
                        <span class=\"sr-only\">Last</span>
                    </a>
                </li>
            ";
        }
        // line 90
        echo "        </ul>
    </nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/dashboard.html.twig";
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
        return array (  243 => 90,  234 => 84,  225 => 78,  222 => 77,  219 => 76,  208 => 73,  201 => 72,  196 => 71,  187 => 65,  178 => 59,  175 => 58,  173 => 57,  165 => 51,  155 => 46,  146 => 42,  141 => 40,  137 => 39,  133 => 38,  129 => 37,  126 => 36,  121 => 35,  95 => 12,  91 => 10,  84 => 9,  71 => 8,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}
{% block head %} <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
{% endblock %}

{% block title %}User index{% endblock %}
{% block content %}
    <h1>User index</h1>

    <form action=\"{{ path('app_user_index') }}\" method=\"GET\">
        <div class=\"input-group mb-3\">
            <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Search by username , e-mail or role\">
            <div class=\"input-group-append\">
                <button class=\"btn btn-outline-secondary\" type=\"submit\">Search</button>
            </div>
        </div>
    </form>

    <table class=\"table\">
        <!-- Table headers -->
        <thead>
            <!-- Header row -->
            <tr class=\"table-warning\">
                <th>Id</th>
                <th>Email</th>
                <th>Username</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- User data rows -->
            {% for user in pagination %}
                <tr class=\"table-light\">
                    <td>{{ user.id }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.username }}</td>
                    <td>{{ user.role }}</td>
                    <td>
                        <a href=\"{{ path('app_user_show', {'id': user.id}) }}\" class=\"btn btn-primary btn-sm\">Show</a>
                    </td>
                </tr>
            {% else %}
                <!-- If no users found -->
                <tr>
                    <td colspan=\"5\">No records found</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <!-- Pagination controls -->
    <nav aria-label=\"Page navigation\">
        <ul class=\"pagination justify-content-center\">
            {% if pagination.currentPageNumber != 1 %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path('app_user_index', {'page': 1}) }}\" aria-label=\"First\">
                        <span aria-hidden=\"true\">&laquo;&laquo;</span>
                        <span class=\"sr-only\">First</span>
                    </a>
                </li>
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path('app_user_index', {'page': pagination.currentPageNumber - 1}) }}\" aria-label=\"Previous\">
                        <span aria-hidden=\"true\">&laquo;</span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                </li>
            {% endif %}
            {% for page in 1..pagination.pageCount %}
                <li class=\"page-item {% if page == pagination.currentPageNumber %}active{% endif %}\">
                    <a class=\"page-link\" href=\"{{ path('app_user_index', {'page': page}) }}\">{{ page }}</a>
                </li>
            {% endfor %}
            {% if pagination.currentPageNumber != pagination.pageCount %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path('app_user_index', {'page': pagination.currentPageNumber + 1}) }}\" aria-label=\"Next\">
                        <span aria-hidden=\"true\">&raquo;</span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </li>
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path('app_user_index', {'page': pagination.pageCount}) }}\" aria-label=\"Last\">
                        <span aria-hidden=\"true\">&raquo;&raquo;</span>
                        <span class=\"sr-only\">Last</span>
                    </a>
                </li>
            {% endif %}
        </ul>
    </nav>
{% endblock %}


", "user/dashboard.html.twig", "C:\\Users\\azizr\\Desktop\\HermesvoyagesPIDEV3A34-main\\templates\\user\\dashboard.html.twig");
    }
}
