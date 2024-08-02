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

/* propriete/index.html.twig */
class __TwigTemplate_1112fff6408a3a38ff38925b4d2d336c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'PageTitre' => [$this, 'block_PageTitre'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propriete/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propriete/index.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "propriete/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Propriete!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"d-flex justify-content-center  \">
        <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_propriete");
        echo "\" class=\"btn btn-primary btn-lg p-2\"> Ajouter un proprietaire</a>
    </div>
    <div class=\"row m-3\">
    <table class=\"table table-bordered\">
        <thead class=\"text-center \" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
        <tr>
            <th scope=\"col\">Nom </th>
            <th scope=\"col\">Prénom</th>
            <th scope=\"col\">Telephone</th>
            <th scope=\"col\">Adresse</th>
            <th scope=\"col\">Details</th>
            <th scope=\"col\">Modifier</th>
            ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR_CENTRALE")) {
            echo "  
             <th scope=\"col\">Supprimer</th>
            ";
        }
        // line 21
        echo " 
        </tr>
        </thead>
        <tbody class=\"text-center\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prorietes"]) || array_key_exists("prorietes", $context) ? $context["prorietes"] : (function () { throw new RuntimeError('Variable "prorietes" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["propriete"]) {
            // line 26
            echo "            <tr>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propriete"], "nom", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propriete"], "prenom", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propriete"], "telephone", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propriete"], "adresse", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td><a href=\"#\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_propriete", ["id" => twig_get_attribute($this->env, $this->source, $context["propriete"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"btn btn-primary mt-2\"> <i class=\"fa-solid fa-user-pen\"></i></a></td>
                ";
            // line 33
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONTROLEUR_CENTRALE")) {
                echo " 
                 <td><a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_propriete", ["id" => twig_get_attribute($this->env, $this->source, $context["propriete"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\" class=\"btn btn-danger mt-2\" 
                 onclick=\"return confirm('Etes-vous sur de suprimer ce proprietaire')\">
                 <i class=\"fa-solid fa-trash\"></i></a></td>
                ";
            }
            // line 37
            echo " 

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propriete'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>
    </div>

    ";
        // line 45
        if ((isset($context["isPaginated"]) || array_key_exists("isPaginated", $context) ? $context["isPaginated"] : (function () { throw new RuntimeError('Variable "isPaginated" does not exist.', 45, $this->source); })())) {
            // line 46
            echo "    <div class=\"row mt-3\">
        <nav aria-label=\"Page navigation example\">
            <ul class=\"pagination\">
                ";
            // line 49
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 49, $this->source); })()) != 1)) {
                // line 50
                echo "                    <li class=\"page-item\"><a class=\"page-link\" style=\"background-color: rgb(130, 106, 251);color:#fff; \" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_propriete", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 50, $this->source); })()) - 1), "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 50, $this->source); })())]), "html", null, true);
                echo "\">Previous</a></li>
                ";
            }
            // line 52
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbrePage"]) || array_key_exists("nbrePage", $context) ? $context["nbrePage"] : (function () { throw new RuntimeError('Variable "nbrePage" does not exist.', 52, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 53
                echo "                    <li class=\"page-item\"><a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_propriete", ["page" => $context["i"], "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 53, $this->source); })())]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 55, $this->source); })()) != (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 55, $this->source); })()))) {
                // line 56
                echo "                    <li class=\"page-item\"><a class=\"page-link\"  style=\"background-color: rgb(130, 106, 251);color:#fff; \" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_propriete", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 56, $this->source); })()) + 1), "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 56, $this->source); })())]), "html", null, true);
                echo "\">Next</a></li>
                ";
            }
            // line 58
            echo "            </ul>
        </nav>
    </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 64
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        // line 65
        echo "    La liste des proprietes
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "propriete/index.html.twig";
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
        return array (  237 => 65,  227 => 64,  213 => 58,  207 => 56,  204 => 55,  193 => 53,  188 => 52,  182 => 50,  180 => 49,  175 => 46,  173 => 45,  167 => 41,  158 => 37,  151 => 34,  147 => 33,  143 => 32,  138 => 30,  134 => 29,  130 => 28,  126 => 27,  123 => 26,  119 => 25,  113 => 21,  107 => 19,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block title %}Propriete!{% endblock %}

{% block body %}
    <div class=\"d-flex justify-content-center  \">
        <a href=\"{{ path('edit_propriete') }}\" class=\"btn btn-primary btn-lg p-2\"> Ajouter un proprietaire</a>
    </div>
    <div class=\"row m-3\">
    <table class=\"table table-bordered\">
        <thead class=\"text-center \" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
        <tr>
            <th scope=\"col\">Nom </th>
            <th scope=\"col\">Prénom</th>
            <th scope=\"col\">Telephone</th>
            <th scope=\"col\">Adresse</th>
            <th scope=\"col\">Details</th>
            <th scope=\"col\">Modifier</th>
            {% if is_granted('ROLE_CONTROLEUR_CENTRALE') %}  
             <th scope=\"col\">Supprimer</th>
            {% endif  %} 
        </tr>
        </thead>
        <tbody class=\"text-center\">
        {% for propriete in prorietes %}
            <tr>
                <td>{{ propriete.nom }}</td>
                <td>{{ propriete.prenom }}</td>
                <td>{{ propriete.telephone }}</td>
                <td>{{ propriete.adresse }}</td>
                <td><a href=\"#\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                <td><a href=\"{{ path('edit_propriete', {id:propriete.id }) }}\" class=\"btn btn-primary mt-2\"> <i class=\"fa-solid fa-user-pen\"></i></a></td>
                {% if is_granted('ROLE_CONTROLEUR_CENTRALE') %} 
                 <td><a href=\"{{ path('delete_propriete',{id:propriete.id}) }}\" class=\"btn btn-danger mt-2\" 
                 onclick=\"return confirm('Etes-vous sur de suprimer ce proprietaire')\">
                 <i class=\"fa-solid fa-trash\"></i></a></td>
                {% endif  %} 

            </tr>
        {% endfor %}
        </tbody>
    </table>
    </div>

    {% if isPaginated %}
    <div class=\"row mt-3\">
        <nav aria-label=\"Page navigation example\">
            <ul class=\"pagination\">
                {% if page != 1 %}
                    <li class=\"page-item\"><a class=\"page-link\" style=\"background-color: rgb(130, 106, 251);color:#fff; \" href=\"{{ path('list_propriete',{page: page-1, nbre:nbre}) }}\">Previous</a></li>
                {% endif %}
                {% for i in range(1, nbrePage) %}
                    <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('list_propriete',{page: i, nbre:nbre}) }}\">{{ i }}</a></li>
                {% endfor %}
                {% if page !=nbre %}
                    <li class=\"page-item\"><a class=\"page-link\"  style=\"background-color: rgb(130, 106, 251);color:#fff; \" href=\"{{ path('list_propriete',{page: page+1, nbre:nbre}) }}\">Next</a></li>
                {% endif %}
            </ul>
        </nav>
    </div>
    {% endif %}
{% endblock %}

{% block PageTitre %}
    La liste des proprietes
{% endblock %}", "propriete/index.html.twig", "C:\\xampp7\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\propriete\\index.html.twig");
    }
}
