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

/* contributeur/show.html.twig */
class __TwigTemplate_7bd537d741ea6e8935c58012fa71c503 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contributeur/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contributeur/show.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "contributeur/show.html.twig", 1);
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

        echo "Détails du Contributeur";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        // line 5
        echo "    Détails du Contributeur
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
                <table class=\"table table-hover table-striped\">
                    <thead class=\"text-sm-center\" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
                    <tr>
                        <th>Nom du Propriétaire</th>
                        <th>Prénom du Propriétaire</th>
                        <th>Date</th>
                        <th>Montant</th>
                    </tr>
                    </thead>
                    <tbody class=\"text-sm-center\">
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paiements"]) || array_key_exists("paiements", $context) ? $context["paiements"] : (function () { throw new RuntimeError('Variable "paiements" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["paiement"]) {
            // line 20
            echo "                        <tr>
                            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contributeur"]) || array_key_exists("contributeur", $context) ? $context["contributeur"] : (function () { throw new RuntimeError('Variable "contributeur" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contributeur"]) || array_key_exists("contributeur", $context) ? $context["contributeur"] : (function () { throw new RuntimeError('Variable "contributeur" does not exist.', 22, $this->source); })()), "prenom", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paiement"], "date", [], "any", false, false, false, 23), "d-m-Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paiement"], "montant", [], "any", false, false, false, 24), 0, " ", " ", " "), "html", null, true);
            echo " F CFA</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paiement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                    </tbody>
                    <tfoot class=\"text-sm-center\" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
                    <tr>
                        <td colspan=\"3\" class=\"text-end\"><strong>Montant Cumulé Mensuel :</strong></td>
                        <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["montantCumuleMensuel"]) || array_key_exists("montantCumuleMensuel", $context) ? $context["montantCumuleMensuel"] : (function () { throw new RuntimeError('Variable "montantCumuleMensuel" does not exist.', 31, $this->source); })()), 0, " ", " ", " "), "html", null, true);
        echo " F CFA</td>
                    </tr>
                    </tfoot>
                </table>

    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_contributeur");
        echo "\" class=\"btn btn-primary\">Retour à la liste</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "contributeur/show.html.twig";
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
        return array (  165 => 36,  157 => 31,  151 => 27,  142 => 24,  138 => 23,  134 => 22,  130 => 21,  127 => 20,  123 => 19,  110 => 8,  100 => 7,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block title %}Détails du Contributeur{% endblock %}
{% block PageTitre %}
    Détails du Contributeur
{% endblock%}
{% block body %}

                <table class=\"table table-hover table-striped\">
                    <thead class=\"text-sm-center\" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
                    <tr>
                        <th>Nom du Propriétaire</th>
                        <th>Prénom du Propriétaire</th>
                        <th>Date</th>
                        <th>Montant</th>
                    </tr>
                    </thead>
                    <tbody class=\"text-sm-center\">
                    {% for paiement in paiements %}
                        <tr>
                            <td>{{ contributeur.nom }}</td>
                            <td>{{ contributeur.prenom }}</td>
                            <td>{{ paiement.date|date('d-m-Y') }}</td>
                            <td>{{ paiement.montant|number_format(0, \" \", \" \", \" \") }} F CFA</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                    <tfoot class=\"text-sm-center\" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
                    <tr>
                        <td colspan=\"3\" class=\"text-end\"><strong>Montant Cumulé Mensuel :</strong></td>
                        <td>{{ montantCumuleMensuel|number_format(0, \" \", \" \", \" \") }} F CFA</td>
                    </tr>
                    </tfoot>
                </table>

    <a href=\"{{ path('liste_contributeur') }}\" class=\"btn btn-primary\">Retour à la liste</a>
{% endblock %}


", "contributeur/show.html.twig", "C:\\xampp7\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\contributeur\\show.html.twig");
    }
}
