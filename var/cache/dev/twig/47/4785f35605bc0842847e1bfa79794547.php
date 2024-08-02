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

/* taxe_rurale/index.html.twig */
class __TwigTemplate_22316a396b4fb12d64ed84e46aa1d9a7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taxe_rurale/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taxe_rurale/index.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "taxe_rurale/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <table id=\"users\" class=\"table table-striped\">
        <thead  style=\"background-color: rgb(130, 106, 251);color:#fff;\">
        <tr>
            <th scope=\"col\">Proprietaire</th>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Montant</th>
            <th scope=\"col\">Date</th>
            <th scope=\"col\">Detail</th>
            <th scope=\"col\">Modifier</th>
            ";
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 14
            echo "                 <th scope=\"col\">Supprimer</th>
            ";
        }
        // line 16
        echo "        </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taxeRurales"]) || array_key_exists("taxeRurales", $context) ? $context["taxeRurales"] : (function () { throw new RuntimeError('Variable "taxeRurales" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["taxeRurale"]) {
            // line 20
            echo "            <tr>
                <td>";
            // line 21
            ((twig_get_attribute($this->env, $this->source, $context["taxeRurale"], "propriete", [], "any", false, false, false, 21)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["taxeRurale"], "propriete", [], "any", false, false, false, 21), "nom", [], "any", false, false, false, 21), "html", null, true))) : (print ("")));
            echo " ";
            ((twig_get_attribute($this->env, $this->source, $context["taxeRurale"], "propriete", [], "any", false, false, false, 21)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["taxeRurale"], "propriete", [], "any", false, false, false, 21), "prenom", [], "any", false, false, false, 21), "html", null, true))) : (print ("")));
            echo "</td>
                <td> ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxeRurale"], "nom", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td> ";
            // line 23
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxeRurale"], "montant", [], "any", false, false, false, 23), 0, ",", " "), "html", null, true);
            echo " fcfa</td>
                <td> ";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxeRurale"], "date", [], "any", false, false, false, 24), "d/m/y "), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_taxe_rurale", ["propriete_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["taxeRurale"], "propriete", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                 
                  <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_taxe_rurale", ["id" => twig_get_attribute($this->env, $this->source, $context["taxeRurale"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\" class=\"btn btn-primary mt-2\"> <i class=\"fa-solid fa-user-pen\"></i></a></td>
               
                ";
            // line 29
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                echo "  
                <td><a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_taxe_rurale", ["id" => twig_get_attribute($this->env, $this->source, $context["taxeRurale"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\"  class=\"btn btn-danger mt-2\"
                 onclick=\"return confirm('Etes-vous sur de suprimer cette taxe rurale')\">
                <i class=\"fa-solid fa-trash\"></i></a></td>
                ";
            }
            // line 34
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxeRurale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 42
        echo "    Liste des taxes rurales
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 45
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        // line 46
        echo "    Liste des taxes rurles
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "taxe_rurale/index.html.twig";
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
        return array (  189 => 46,  179 => 45,  168 => 42,  158 => 41,  145 => 36,  138 => 34,  131 => 30,  127 => 29,  122 => 27,  117 => 25,  113 => 24,  109 => 23,  105 => 22,  99 => 21,  96 => 20,  92 => 19,  87 => 16,  83 => 14,  81 => 13,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block body %}
    <table id=\"users\" class=\"table table-striped\">
        <thead  style=\"background-color: rgb(130, 106, 251);color:#fff;\">
        <tr>
            <th scope=\"col\">Proprietaire</th>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Montant</th>
            <th scope=\"col\">Date</th>
            <th scope=\"col\">Detail</th>
            <th scope=\"col\">Modifier</th>
            {% if is_granted('ROLE_SUPER_ADMIN')%}
                 <th scope=\"col\">Supprimer</th>
            {% endif %}
        </tr>
        </thead>
        <tbody>
        {% for taxeRurale in taxeRurales %}
            <tr>
                <td>{{ taxeRurale.propriete ? taxeRurale.propriete.nom }} {{taxeRurale.propriete ? taxeRurale.propriete.prenom  }}</td>
                <td> {{taxeRurale.nom }}</td>
                <td> {{taxeRurale.montant|number_format(0, ',', ' ') }} fcfa</td>
                <td> {{taxeRurale.date|date('d/m/y ') }}</td>
                <td><a href=\"{{path('detail_taxe_rurale',{propriete_id: taxeRurale.propriete.id })}}\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                 
                  <td><a href=\"{{ path('edit_taxe_rurale', {id:taxeRurale.id }) }}\" class=\"btn btn-primary mt-2\"> <i class=\"fa-solid fa-user-pen\"></i></a></td>
               
                {% if is_granted('ROLE_SUPER_ADMIN') %}  
                <td><a href=\"{{ path('delete_taxe_rurale',{id:taxeRurale.id}) }}\"  class=\"btn btn-danger mt-2\"
                 onclick=\"return confirm('Etes-vous sur de suprimer cette taxe rurale')\">
                <i class=\"fa-solid fa-trash\"></i></a></td>
                {% endif %}
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}

{% block title %}
    Liste des taxes rurales
{% endblock %}

{% block PageTitre %}
    Liste des taxes rurles
{% endblock %}


", "taxe_rurale/index.html.twig", "C:\\xampp7\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\taxe_rurale\\index.html.twig");
    }
}
