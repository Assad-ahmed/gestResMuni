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

/* agent_collecte/index.html.twig */
class __TwigTemplate_7c93d5aa071eea27454a7d2afdfe0b9e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'PageTitre' => [$this, 'block_PageTitre'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent_collecte/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent_collecte/index.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "agent_collecte/index.html.twig", 1);
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

        echo "Hello AgentCollecteController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        // line 6
        echo "    Liste des Agents de collectes
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"d-flex justify-content-center \">
    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_agent");
        echo "\" class=\"btn btn-primary btn-lg ms-2\"><strong>Ajouter Agent de collecte</strong></a>
</div>
<div class=\"m-3 mt-3\">
    <table class=\"table table-striped\">
        <thead class=\"text-center\" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
        <tr>
            <th scope=\"col\">Nom </th>
            <th scope=\"col\">prenom</th>
            <th scope=\"col\">Téléphone</th>
            <th scope=\"col\">Date</th>
            <th scope=\"col\">MontantJ</th>
            <th scope=\"col\">MontantM</th>
            <th scope=\"col\">Montant</th>
            <th scope=\"col\">Sites</th>
            <th scope=\"col\">Details</th>
            <th scope=\"col\">Modifier</th>
            <th scope=\"col\">Supprimer</th>
        </tr>
        </thead>
        <tbody class=\"text-center\">
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agentCollectes"]) || array_key_exists("agentCollectes", $context) ? $context["agentCollectes"] : (function () { throw new RuntimeError('Variable "agentCollectes" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["agentCollecte"]) {
            // line 32
            echo "            <tr>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agentCollecte"], "nom", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agentCollecte"], "prenom", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agentCollecte"], "telephone", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agentCollecte"], "date", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agentCollecte"], "montantJournalier", [], "any", false, false, false, 37), "html", null, true);
            echo " FCFA</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agentCollecte"], "montantMensuel", [], "any", false, false, false, 38), "html", null, true);
            echo " FCFA</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agentCollecte"], "montantAnnuel", [], "any", false, false, false, 39), "html", null, true);
            echo " FCFA</td>
                <td>";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["agentCollecte"], "sites", [], "any", false, false, false, 40));
            foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
                // line 41
                echo "                      ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site"], "nom", [], "any", false, false, false, 41), "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                </td>
                <td><a href=\"#\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                <td><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_agent", ["id" => twig_get_attribute($this->env, $this->source, $context["agentCollecte"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-user-pen\"></i></a></td>
                <td><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_agent", ["id" => twig_get_attribute($this->env, $this->source, $context["agentCollecte"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return confirm('Etes-vous sur de suprimer cet agent')\"><i class=\"fa-solid fa-trash\"></i></a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agentCollecte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>
</div>
";
        // line 52
        if ((isset($context["isPaginated"]) || array_key_exists("isPaginated", $context) ? $context["isPaginated"] : (function () { throw new RuntimeError('Variable "isPaginated" does not exist.', 52, $this->source); })())) {
            // line 53
            echo "    <div class=\"row mt-3\">
        <nav aria-label=\"Page navigation example\">
            <ul class=\"pagination\">
                ";
            // line 56
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 56, $this->source); })()) != 1)) {
                // line 57
                echo "                    <li class=\"page-item\"><a class=\"page-link\" style=\"background-color: rgb(130, 106, 251);color:#fff;\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_agent", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 57, $this->source); })()) - 1), "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 57, $this->source); })())]), "html", null, true);
                echo "\">Previous</a></li>
                ";
            }
            // line 59
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbrePage"]) || array_key_exists("nbrePage", $context) ? $context["nbrePage"] : (function () { throw new RuntimeError('Variable "nbrePage" does not exist.', 59, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 60
                echo "                    <li class=\"page-item\"><a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_agent", ["page" => $context["i"], "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 60, $this->source); })())]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 62, $this->source); })()) != (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 62, $this->source); })()))) {
                // line 63
                echo "                    <li class=\"page-item\"><a class=\"page-link\" style=\"background-color: rgb(130, 106, 251);color:#fff;\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_agent", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 63, $this->source); })()) + 1), "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 63, $this->source); })())]), "html", null, true);
                echo "\">Next</a></li>
                ";
            }
            // line 65
            echo "            </ul>
        </nav>
    </div>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "agent_collecte/index.html.twig";
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
        return array (  246 => 65,  240 => 63,  237 => 62,  226 => 60,  221 => 59,  215 => 57,  213 => 56,  208 => 53,  206 => 52,  201 => 49,  192 => 46,  188 => 45,  184 => 43,  175 => 41,  171 => 40,  167 => 39,  163 => 38,  159 => 37,  155 => 36,  151 => 35,  147 => 34,  143 => 33,  140 => 32,  136 => 31,  113 => 11,  110 => 10,  100 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block title %}Hello AgentCollecteController!{% endblock %}

{%block PageTitre %}
    Liste des Agents de collectes
{% endblock %}

{% block body %}
<div class=\"d-flex justify-content-center \">
    <a href=\"{{ path('edit_agent') }}\" class=\"btn btn-primary btn-lg ms-2\"><strong>Ajouter Agent de collecte</strong></a>
</div>
<div class=\"m-3 mt-3\">
    <table class=\"table table-striped\">
        <thead class=\"text-center\" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
        <tr>
            <th scope=\"col\">Nom </th>
            <th scope=\"col\">prenom</th>
            <th scope=\"col\">Téléphone</th>
            <th scope=\"col\">Date</th>
            <th scope=\"col\">MontantJ</th>
            <th scope=\"col\">MontantM</th>
            <th scope=\"col\">Montant</th>
            <th scope=\"col\">Sites</th>
            <th scope=\"col\">Details</th>
            <th scope=\"col\">Modifier</th>
            <th scope=\"col\">Supprimer</th>
        </tr>
        </thead>
        <tbody class=\"text-center\">
        {% for agentCollecte in agentCollectes %}
            <tr>
                <td>{{ agentCollecte.nom }}</td>
                <td>{{ agentCollecte.prenom }}</td>
                <td>{{ agentCollecte.telephone }}</td>
                <td>{{ agentCollecte.date|date('Y-m-d') }}</td>
                <td>{{ agentCollecte.montantJournalier }} FCFA</td>
                <td>{{ agentCollecte.montantMensuel }} FCFA</td>
                <td>{{ agentCollecte.montantAnnuel }} FCFA</td>
                <td>{% for site in agentCollecte.sites %}
                      {{ site.nom }}
                    {% endfor %}
                </td>
                <td><a href=\"#\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                <td><a href=\"{{ path('edit_agent', {id: agentCollecte.id}) }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-user-pen\"></i></a></td>
                <td><a href=\"{{ path('delete_agent', {id: agentCollecte.id}) }}\" class=\"btn btn-danger\" onclick=\"return confirm('Etes-vous sur de suprimer cet agent')\"><i class=\"fa-solid fa-trash\"></i></a></td>
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
                    <li class=\"page-item\"><a class=\"page-link\" style=\"background-color: rgb(130, 106, 251);color:#fff;\" href=\"{{ path('list_agent', {page: page-1, nbre: nbre}) }}\">Previous</a></li>
                {% endif %}
                {% for i in range(1, nbrePage) %}
                    <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('list_agent', {page: i, nbre: nbre}) }}\">{{ i }}</a></li>
                {% endfor %}
                {% if page != nbre %}
                    <li class=\"page-item\"><a class=\"page-link\" style=\"background-color: rgb(130, 106, 251);color:#fff;\" href=\"{{ path('list_agent', {page: page+1, nbre: nbre}) }}\">Next</a></li>
                {% endif %}
            </ul>
        </nav>
    </div>
{% endif %}
{% endblock %}
", "agent_collecte/index.html.twig", "C:\\xampp7\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\agent_collecte\\index.html.twig");
    }
}
