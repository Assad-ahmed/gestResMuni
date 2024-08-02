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

/* impot_cfnpb/index.html.twig */
class __TwigTemplate_ea4ab8763192f7824bf504c7b8ab0ba4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impot_cfnpb/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impot_cfnpb/index.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "impot_cfnpb/index.html.twig", 2);
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

        echo "Liste Impot CFNPB";
        
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
        echo "    <div class=\"m-3\">
        <table class=\"table table-striped\">
            <thead class=\"text-center\" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
            <tr>
                <th scope=\"col\">proprietaire</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Montant</th>
                <th scope=\"col\">Details</th>
                <th scope=\"col\">Modifier</th>
                ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            echo " 
                 <th scope=\"col\">Supprimer</th>
                ";
        }
        // line 19
        echo " 
            </tr>
            </thead>
            <tbody class=\"text-center\">
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["impotCFNPBs"]) || array_key_exists("impotCFNPBs", $context) ? $context["impotCFNPBs"] : (function () { throw new RuntimeError('Variable "impotCFNPBs" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["impotCFNPB"]) {
            // line 24
            echo "                    <tr>
                        <td>";
            // line 25
            ((twig_get_attribute($this->env, $this->source, $context["impotCFNPB"], "propriete", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["impotCFNPB"], "propriete", [], "any", false, false, false, 25), "nom", [], "any", false, false, false, 25), "html", null, true))) : (print ("")));
            echo "  ";
            ((twig_get_attribute($this->env, $this->source, $context["impotCFNPB"], "propriete", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["impotCFNPB"], "propriete", [], "any", false, false, false, 25), "prenom", [], "any", false, false, false, 25), "html", null, true))) : (print ("")));
            echo " </td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["impotCFNPB"], "nom", [], "any", false, false, false, 26), "html", null, true);
            echo " </td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["impotCFNPB"], "date", [], "any", false, false, false, 27), "d/m/y "), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["impotCFNPB"], "montant", [], "any", false, false, false, 28), 0, ",", " "), "html", null, true);
            echo " fcfa</td>
                        <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_impot_cfnpb", ["propriete_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["impotCFNPB"], "propriete", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                        <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_impot_cfnpb", ["id" => twig_get_attribute($this->env, $this->source, $context["impotCFNPB"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"btn btn-primary mt-2\"> <i class=\"fa-solid fa-user-pen\"></i></a></td>
                        ";
            // line 31
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                echo " 
                         <td><a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_impot_cfnpb", ["id" => twig_get_attribute($this->env, $this->source, $context["impotCFNPB"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\" class=\"btn btn-danger mt-2\"
                          onclick=\"return confirm('Etes-vous sur de suprimer cet impot CFNPB')\">
                         <i class=\"fa-solid fa-trash\"></i></a></td>
                        ";
            }
            // line 36
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['impotCFNPB'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </tbody>
        </table>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 43
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        // line 44
        echo "    La liste d' Impot CFNPB
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "impot_cfnpb/index.html.twig";
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
        return array (  188 => 44,  178 => 43,  164 => 38,  157 => 36,  150 => 32,  146 => 31,  142 => 30,  138 => 29,  134 => 28,  130 => 27,  126 => 26,  120 => 25,  117 => 24,  113 => 23,  107 => 19,  101 => 17,  89 => 7,  79 => 6,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'template.html.twig' %}

{% block title %}Liste Impot CFNPB{% endblock %}

{% block body %}
    <div class=\"m-3\">
        <table class=\"table table-striped\">
            <thead class=\"text-center\" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
            <tr>
                <th scope=\"col\">proprietaire</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Montant</th>
                <th scope=\"col\">Details</th>
                <th scope=\"col\">Modifier</th>
                {% if is_granted('ROLE_SUPER_ADMIN') %} 
                 <th scope=\"col\">Supprimer</th>
                {% endif  %} 
            </tr>
            </thead>
            <tbody class=\"text-center\">
                {% for impotCFNPB in impotCFNPBs %}
                    <tr>
                        <td>{{ impotCFNPB.propriete ? impotCFNPB.propriete.nom  }}  {{ impotCFNPB.propriete ? impotCFNPB.propriete.prenom  }} </td>
                        <td>{{ impotCFNPB.nom }} </td>
                        <td>{{ impotCFNPB.date|date('d/m/y ') }}</td>
                        <td>{{ impotCFNPB.montant|number_format(0, ',', ' ') }} fcfa</td>
                        <td><a href=\"{{path('detail_impot_cfnpb', {propriete_id: impotCFNPB.propriete.id })}}\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                        <td><a href=\"{{ path('edit_impot_cfnpb',{id: impotCFNPB.id}) }}\" class=\"btn btn-primary mt-2\"> <i class=\"fa-solid fa-user-pen\"></i></a></td>
                        {% if is_granted('ROLE_SUPER_ADMIN') %} 
                         <td><a href=\"{{ path('delete_impot_cfnpb',{id: impotCFNPB.id}) }}\" class=\"btn btn-danger mt-2\"
                          onclick=\"return confirm('Etes-vous sur de suprimer cet impot CFNPB')\">
                         <i class=\"fa-solid fa-trash\"></i></a></td>
                        {% endif  %}
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

{% endblock %}
{% block PageTitre %}
    La liste d' Impot CFNPB
{% endblock %}

", "impot_cfnpb/index.html.twig", "C:\\xampp7\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\impot_cfnpb\\index.html.twig");
    }
}
