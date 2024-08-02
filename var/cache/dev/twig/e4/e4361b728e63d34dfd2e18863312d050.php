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

/* tax_indirecte/index.html.twig */
class __TwigTemplate_7427a79f1d3632c17006baa2ab1aeb7c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tax_indirecte/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tax_indirecte/index.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "tax_indirecte/index.html.twig", 2);
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

        echo "recette Non Fisscale!";
        
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
            // line 19
            echo "                <th scope=\"col\">Supprimer</th>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["taxindirectes"]) || array_key_exists("taxindirectes", $context) ? $context["taxindirectes"] : (function () { throw new RuntimeError('Variable "taxindirectes" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["taxindirecte"]) {
            // line 26
            echo "                <tr>
                    <td>";
            // line 27
            ((twig_get_attribute($this->env, $this->source, $context["taxindirecte"], "propriete", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["taxindirecte"], "propriete", [], "any", false, false, false, 27), "nom", [], "any", false, false, false, 27), "html", null, true))) : (print ("")));
            echo " ";
            ((twig_get_attribute($this->env, $this->source, $context["taxindirecte"], "propriete", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["taxindirecte"], "propriete", [], "any", false, false, false, 27), "prenom", [], "any", false, false, false, 27), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxindirecte"], "nom", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxindirecte"], "montant", [], "any", false, false, false, 29), 0, ",", " "), "html", null, true);
            echo " fcfa</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxindirecte"], "date", [], "any", false, false, false, 30), "d/m/y "), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_taxe_indirecte", ["propriete_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["taxindirecte"], "propriete", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                    <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_impot_indirecte", ["id" => twig_get_attribute($this->env, $this->source, $context["taxindirecte"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"btn btn-primary mt-2\"> <i class=\"fa-solid fa-user-pen\"></i></a></td>
                    ";
            // line 33
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 34
                echo "                     <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_impot_indirecte", ["id" => twig_get_attribute($this->env, $this->source, $context["taxindirecte"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\" class=\"btn btn-danger mt-2\" class=\"btn btn-danger mt-2\"
                     onclick=\"return confirm('Etes-vous sur de suprimer cette taxe indirecte')\">
                    <i class=\"fa-solid fa-trash\"></i></a></td>
                    ";
            }
            // line 38
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxindirecte'], $context['_parent'], $context['loop']);
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
        echo "    La liste d'impot Indirecte
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "tax_indirecte/index.html.twig";
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
        return array (  188 => 46,  178 => 45,  164 => 40,  157 => 38,  149 => 34,  147 => 33,  143 => 32,  139 => 31,  135 => 30,  131 => 29,  127 => 28,  121 => 27,  118 => 26,  114 => 25,  108 => 21,  104 => 19,  102 => 18,  89 => 7,  79 => 6,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'template.html.twig' %}

{% block title %}recette Non Fisscale!{% endblock %}

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
            {% for taxindirecte in taxindirectes %}
                <tr>
                    <td>{{ taxindirecte.propriete ? taxindirecte.propriete.nom  }} {{ taxindirecte.propriete ? taxindirecte.propriete.prenom  }}</td>
                    <td>{{ taxindirecte.nom }}</td>
                    <td>{{ taxindirecte.montant|number_format(0, ',', ' ') }} fcfa</td>
                    <td>{{ taxindirecte.date|date('d/m/y ') }}</td>
                    <td><a href=\"{{path('detail_taxe_indirecte', {propriete_id: taxindirecte.propriete.id})}}\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                    <td><a href=\"{{ path('edit_impot_indirecte',{id: taxindirecte.id}) }}\" class=\"btn btn-primary mt-2\"> <i class=\"fa-solid fa-user-pen\"></i></a></td>
                    {% if is_granted('ROLE_SUPER_ADMIN') %}
                     <td><a href=\"{{ path('delete_impot_indirecte',{id: taxindirecte.id}) }}\" class=\"btn btn-danger mt-2\" class=\"btn btn-danger mt-2\"
                     onclick=\"return confirm('Etes-vous sur de suprimer cette taxe indirecte')\">
                    <i class=\"fa-solid fa-trash\"></i></a></td>
                    {% endif  %}
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>

{% endblock %}
{% block PageTitre %}
    La liste d'impot Indirecte
{% endblock %}

", "tax_indirecte/index.html.twig", "C:\\xampp7\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\tax_indirecte\\index.html.twig");
    }
}
