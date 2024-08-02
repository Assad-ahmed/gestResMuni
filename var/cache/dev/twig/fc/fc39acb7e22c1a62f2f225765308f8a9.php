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

/* impot_tom/index.html.twig */
class __TwigTemplate_7f01897a5837e6449848f7061cd56d4f extends Template
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
        // line 2
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impot_tom/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impot_tom/index.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "impot_tom/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Impot Tom!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <div class=\" m-3\">
        <table class=\"table table-striped\">
            <thead class=\"text-center \" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
            <tr>
                <th scope=\"col\">Proprietaire</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Montant</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Details</th>
                <th scope=\"col\">Modifier</th>
                ";
        // line 18
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            echo " 
                <th scope=\"col\">Supprimer</th>
                ";
        }
        // line 20
        echo " 
            </tr>
            </thead>
            <tbody class=\"text-center\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["impotTOMs"]) || array_key_exists("impotTOMs", $context) ? $context["impotTOMs"] : (function () { throw new RuntimeError('Variable "impotTOMs" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["impotTOM"]) {
            // line 25
            echo "                <tr>

                    <td>";
            // line 27
            ((twig_get_attribute($this->env, $this->source, $context["impotTOM"], "propriete", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["impotTOM"], "propriete", [], "any", false, false, false, 27), "nom", [], "any", false, false, false, 27), "html", null, true))) : (print ("")));
            echo " ";
            ((twig_get_attribute($this->env, $this->source, $context["impotTOM"], "propriete", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["impotTOM"], "propriete", [], "any", false, false, false, 27), "prenom", [], "any", false, false, false, 27), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["impotTOM"], "nom", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["impotTOM"], "montant", [], "any", false, false, false, 29), 0, ",", " "), "html", null, true);
            echo " fcfa</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["impotTOM"], "date", [], "any", false, false, false, 30), "d/m/y "), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_impot_tom", ["propriete_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["impotTOM"], "propriete", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                    <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_impot_tom", ["id" => twig_get_attribute($this->env, $this->source, $context["impotTOM"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"btn btn-primary mt-2\"> <i class=\"fa-solid fa-user-pen\"></i></a></td>
                    ";
            // line 33
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                echo " 
                     <td><a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_impot_tom", ["id" => twig_get_attribute($this->env, $this->source, $context["impotTOM"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\" class=\"btn btn-danger mt-2\"
                      onclick=\"return confirm('Etes-vous sur de suprimer cet impotTom')\">
                     <i class=\"fa-solid fa-trash\"></i></a></td>
                    ";
            }
            // line 37
            echo " 
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['impotTOM'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </tbody>
        </table>
    </div>

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
        echo "    La liste d'impot TOM
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "impot_tom/index.html.twig";
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
        return array (  191 => 46,  181 => 45,  167 => 40,  159 => 37,  152 => 34,  148 => 33,  144 => 32,  140 => 31,  136 => 30,  132 => 29,  128 => 28,  122 => 27,  118 => 25,  114 => 24,  108 => 20,  102 => 18,  89 => 7,  79 => 6,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'template.html.twig' %}

{% block title %}Impot Tom!{% endblock %}

{% block body %}

    <div class=\" m-3\">
        <table class=\"table table-striped\">
            <thead class=\"text-center \" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
            <tr>
                <th scope=\"col\">Proprietaire</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Montant</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Details</th>
                <th scope=\"col\">Modifier</th>
                {% if is_granted('ROLE_SUPER_ADMIN') %} 
                <th scope=\"col\">Supprimer</th>
                {% endif  %} 
            </tr>
            </thead>
            <tbody class=\"text-center\">
            {% for impotTOM in impotTOMs %}
                <tr>

                    <td>{{ impotTOM.propriete ? impotTOM.propriete.nom  }} {{ impotTOM.propriete ? impotTOM.propriete.prenom  }}</td>
                    <td>{{ impotTOM.nom }}</td>
                    <td>{{ impotTOM.montant|number_format(0, ',', ' ') }} fcfa</td>
                    <td>{{ impotTOM.date|date('d/m/y ') }}</td>
                    <td><a href=\"{{path('detail_impot_tom', {propriete_id: impotTOM.propriete.id})}}\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                    <td><a href=\"{{ path('edit_impot_tom',{id: impotTOM.id}) }}\" class=\"btn btn-primary mt-2\"> <i class=\"fa-solid fa-user-pen\"></i></a></td>
                    {% if is_granted('ROLE_SUPER_ADMIN') %} 
                     <td><a href=\"{{ path('delete_impot_tom', {id: impotTOM.id}) }}\" class=\"btn btn-danger mt-2\"
                      onclick=\"return confirm('Etes-vous sur de suprimer cet impotTom')\">
                     <i class=\"fa-solid fa-trash\"></i></a></td>
                    {% endif  %} 
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>

{% endblock %}
{% block PageTitre %}
    La liste d'impot TOM
{% endblock %}

", "impot_tom/index.html.twig", "C:\\xampp7\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\impot_tom\\index.html.twig");
    }
}
