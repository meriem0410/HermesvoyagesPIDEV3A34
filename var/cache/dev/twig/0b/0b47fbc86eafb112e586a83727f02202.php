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
class __TwigTemplate_cda63a78092437bad2d73ac99af84601 extends Template
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

        echo " 
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "User index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <h1>User index</h1>

    <form action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\" method=\"GET\">
        <div class=\"input-group mb-3\">
            <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Search by username, email, or role\">
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
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 37
            echo "                <tr class=\"table-light\">
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, $context["user"], "isBanned", [], "any", false, false, false, 43)) {
                // line 44
                echo "                            <form action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_unban", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\" method=\"post\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("unban" . twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 45))), "html", null, true);
                echo "\">
                                <button type=\"submit\" class=\"btn btn-warning btn-sm\">Unban</button>
                            </form>
                        ";
            } else {
                // line 49
                echo "                            <form action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_ban", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\" method=\"post\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("ban" . twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 50))), "html", null, true);
                echo "\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Ban</button>
                            </form>
                        ";
            }
            // line 54
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Show</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            echo "                <!-- If no users found -->
                <tr>
                    <td colspan=\"5\">No records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </tbody>
    </table>

    <!-- Pagination controls -->
    <nav aria-label=\"Page navigation\">
        <ul class=\"pagination justify-content-center\">
            ";
        // line 69
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 69, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 69) != 1)) {
            // line 70
            echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => 1]);
            echo "\" aria-label=\"First\">
                        <span aria-hidden=\"true\">&laquo;&laquo;</span>
                        <span class=\"sr-only\">First</span>
                    </a>
                </li>
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 77, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 77) - 1)]), "html", null, true);
            echo "\" aria-label=\"Previous\">
                        <span aria-hidden=\"true\">&laquo;</span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                </li>
            ";
        }
        // line 83
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 83, $this->source); })()), "pageCount", [], "any", false, false, false, 83)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 84
            echo "                <li class=\"page-item ";
            if (($context["page"] == twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 84, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 84))) {
                echo "active";
            }
            echo "\">
                    <a class=\"page-link\" href=\"";
            // line 85
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
        // line 88
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 88, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 88) != twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 88, $this->source); })()), "pageCount", [], "any", false, false, false, 88))) {
            // line 89
            echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 90, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 90) + 1)]), "html", null, true);
            echo "\" aria-label=\"Next\">
                        <span aria-hidden=\"true\">&raquo;</span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </li>
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["page" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 96, $this->source); })()), "pageCount", [], "any", false, false, false, 96)]), "html", null, true);
            echo "\" aria-label=\"Last\">
                        <span aria-hidden=\"true\">&raquo;&raquo;</span>
                        <span class=\"sr-only\">Last</span>
                    </a>
                </li>
            ";
        }
        // line 102
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
        return array (  271 => 102,  262 => 96,  253 => 90,  250 => 89,  247 => 88,  236 => 85,  229 => 84,  224 => 83,  215 => 77,  206 => 71,  203 => 70,  201 => 69,  193 => 63,  183 => 58,  173 => 54,  166 => 50,  161 => 49,  154 => 45,  149 => 44,  147 => 43,  142 => 41,  138 => 40,  134 => 39,  130 => 38,  127 => 37,  122 => 36,  96 => 13,  92 => 11,  85 => 10,  72 => 9,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}
{% block head %} 
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
{% endblock %}

{% block title %}User index{% endblock %}
{% block content %}
    <h1>User index</h1>

    <form action=\"{{ path('app_user_index') }}\" method=\"GET\">
        <div class=\"input-group mb-3\">
            <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Search by username, email, or role\">
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
                        {% if user.isBanned %}
                            <form action=\"{{ path('app_user_unban', {'id': user.id}) }}\" method=\"post\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('unban' ~ user.id) }}\">
                                <button type=\"submit\" class=\"btn btn-warning btn-sm\">Unban</button>
                            </form>
                        {% else %}
                            <form action=\"{{ path('app_user_ban', {'id': user.id}) }}\" method=\"post\" style=\"display: inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('ban' ~ user.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Ban</button>
                            </form>
                        {% endif %}
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
