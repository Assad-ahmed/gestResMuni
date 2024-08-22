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

/* agent_collecte/show.html.twig */
class __TwigTemplate_6bd1326526e35f63f499125bc1eb2978 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent_collecte/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent_collecte/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "agent_collecte/show.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Contributeurs pour l'Agent ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agentCollecte"]) || array_key_exists("agentCollecte", $context) ? $context["agentCollecte"] : (function () { throw new RuntimeError('Variable "agentCollecte" does not exist.', 5, $this->source); })()), "nom", [], "any", false, false, false, 5), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agentCollecte"]) || array_key_exists("agentCollecte", $context) ? $context["agentCollecte"] : (function () { throw new RuntimeError('Variable "agentCollecte" does not exist.', 5, $this->source); })()), "prenom", [], "any", false, false, false, 5), "html", null, true);
        echo "</h1>

    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultats"]) || array_key_exists("resultats", $context) ? $context["resultats"] : (function () { throw new RuntimeError('Variable "resultats" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["siteId"] => $context["siteData"]) {
            // line 8
            echo "        <h2>Site ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["siteData"], "site", [], "any", false, false, false, 8), "nom", [], "any", false, false, false, 8), "html", null, true);
            echo "</h2>
        <table>
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Montant Journalier</th>
                <th>Total Journalier</th>
                <th>Total Mensuel</th>
                <th>Total Annuel</th>
                <th>Manque à Gagner Journalier</th>
                <th>Manque à Gagner Mensuel</th>
                <th>Manque à Gagner Annuel</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["siteData"], "contributeurs", [], "any", false, false, false, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["contributeur"]) {
                // line 25
                echo "                <tr>
                    <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "nom", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
                    <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "prenom", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
                    <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "montant_journalier", [], "any", false, false, false, 28), "html", null, true);
                echo " F CFA</td>
                    <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "total_journalier", [], "any", false, false, false, 29), "html", null, true);
                echo " F CFA</td>
                    <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "total_mensuel", [], "any", false, false, false, 30), "html", null, true);
                echo " F CFA</td>
                    <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "total_annuel", [], "any", false, false, false, 31), "html", null, true);
                echo " F CFA</td>
                    <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "manque_a_gagner_journalier", [], "any", false, false, false, 32), "html", null, true);
                echo " F CFA</td>
                    <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "manque_a_gagner_mensuel", [], "any", false, false, false, 33), "html", null, true);
                echo " F CFA</td>
                    <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "manque_a_gagner_annuel", [], "any", false, false, false, 34), "html", null, true);
                echo " F CFA</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contributeur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            </tbody>
        </table>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['siteId'], $context['siteData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "agent_collecte/show.html.twig";
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
        return array (  148 => 37,  139 => 34,  135 => 33,  131 => 32,  127 => 31,  123 => 30,  119 => 29,  115 => 28,  111 => 27,  107 => 26,  104 => 25,  100 => 24,  80 => 8,  76 => 7,  68 => 5,  58 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/agent_collecte/contributeurs.html.twig #}
{% extends 'base.html.twig' %}

{% block body %}
    <h1>Contributeurs pour l'Agent {{ agentCollecte.nom }} {{ agentCollecte.prenom }}</h1>

    {% for siteId, siteData in resultats %}
        <h2>Site {{ siteData.site.nom }}</h2>
        <table>
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Montant Journalier</th>
                <th>Total Journalier</th>
                <th>Total Mensuel</th>
                <th>Total Annuel</th>
                <th>Manque à Gagner Journalier</th>
                <th>Manque à Gagner Mensuel</th>
                <th>Manque à Gagner Annuel</th>
            </tr>
            </thead>
            <tbody>
            {% for contributeur in siteData.contributeurs %}
                <tr>
                    <td>{{ contributeur.nom }}</td>
                    <td>{{ contributeur.prenom }}</td>
                    <td>{{ contributeur.montant_journalier }} F CFA</td>
                    <td>{{ contributeur.total_journalier }} F CFA</td>
                    <td>{{ contributeur.total_mensuel }} F CFA</td>
                    <td>{{ contributeur.total_annuel }} F CFA</td>
                    <td>{{ contributeur.manque_a_gagner_journalier }} F CFA</td>
                    <td>{{ contributeur.manque_a_gagner_mensuel }} F CFA</td>
                    <td>{{ contributeur.manque_a_gagner_annuel }} F CFA</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endfor %}
{% endblock %}
", "agent_collecte/show.html.twig", "C:\\xampp7\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\agent_collecte\\show.html.twig");
    }
}
