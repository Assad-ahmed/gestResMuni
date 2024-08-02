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

/* impot_assi_valeur/listImpotCapitation.html.twig */
class __TwigTemplate_809b6f65be4d9a824a4ccbdc7598de85 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impot_assi_valeur/listImpotCapitation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impot_assi_valeur/listImpotCapitation.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "impot_assi_valeur/listImpotCapitation.html.twig", 1);
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

        echo "Liste des impôts";
        
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
        echo "    <div class=\"list-group m-3 ms-auto\" style=\"width: 90%;\">

        <a href=\"#\" class=\"list-group-item list-group-item-action bg-warning m-lg-2\" style=\"width: 90%\">
            <div class=\"d-flex w-100 justify-content-between\">
                <h4 class=\"mb-1\"> Impôt du minimum fiscal (IMF)</h4>
            </div>
            <p class=\"mb-1 fs-4\">Montant Cumule : ";
        // line 12
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalImpotMinFiscal"]) || array_key_exists("totalImpotMinFiscal", $context) ? $context["totalImpotMinFiscal"] : (function () { throw new RuntimeError('Variable "totalImpotMinFiscal" does not exist.', 12, $this->source); })()), 0, ",", " "), "html", null, true);
        echo " Fcfa</p>
        </a>

        <a href=\"#\" class=\"list-group-item list-group-item-action bg-info m-lg-2\" style=\"width: 90%\">
            <div class=\"d-flex w-100 justify-content-between\">
                <h4 class=\"mb-1\">  Taxe rurale</h4>
            </div>
            <p class=\"mb-1 fs-4\">Montant Cumule :";
        // line 19
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalTaxeRurale"]) || array_key_exists("totalTaxeRurale", $context) ? $context["totalTaxeRurale"] : (function () { throw new RuntimeError('Variable "totalTaxeRurale" does not exist.', 19, $this->source); })()), 0, ",", " "), "html", null, true);
        echo " Fcfa</p>
        </a>
    </div>

    <div class=\"d-flex justify-content-center\">
        <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_impot_mini_fiscal");
        echo "\" class=\"btn btn-warning btn-lg p-2 m-2\">Ajouter ImpotMinFiscale</a>
        <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_impot_mini_fiscal");
        echo "\" class=\"btn btn-primary btn-lg p-2 m-2\">Liste ImpotMinFiscale</a>
        <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_taxe_rurale");
        echo "\" type=\"button\" class=\"btn btn-info btn-lg p-2 m-2\">Ajouter une Taxe rurale</a>
       <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_taxe_rurale");
        echo "\" class=\"btn btn-primary btn-lg p-2 m-2\">Liste une Taxe rurale</a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        // line 32
        echo "    Les impôts assis sur la valeur foncière et immobilière
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "impot_assi_valeur/listImpotCapitation.html.twig";
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
        return array (  150 => 32,  140 => 31,  127 => 27,  123 => 26,  119 => 25,  115 => 24,  107 => 19,  97 => 12,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block title %}Liste des impôts{% endblock %}

{% block body %}
    <div class=\"list-group m-3 ms-auto\" style=\"width: 90%;\">

        <a href=\"#\" class=\"list-group-item list-group-item-action bg-warning m-lg-2\" style=\"width: 90%\">
            <div class=\"d-flex w-100 justify-content-between\">
                <h4 class=\"mb-1\"> Impôt du minimum fiscal (IMF)</h4>
            </div>
            <p class=\"mb-1 fs-4\">Montant Cumule : {{ totalImpotMinFiscal|number_format(0, ',', ' ') }} Fcfa</p>
        </a>

        <a href=\"#\" class=\"list-group-item list-group-item-action bg-info m-lg-2\" style=\"width: 90%\">
            <div class=\"d-flex w-100 justify-content-between\">
                <h4 class=\"mb-1\">  Taxe rurale</h4>
            </div>
            <p class=\"mb-1 fs-4\">Montant Cumule :{{ totalTaxeRurale|number_format(0, ',', ' ') }} Fcfa</p>
        </a>
    </div>

    <div class=\"d-flex justify-content-center\">
        <a href=\"{{ path('edit_impot_mini_fiscal') }}\" class=\"btn btn-warning btn-lg p-2 m-2\">Ajouter ImpotMinFiscale</a>
        <a href=\"{{ path('liste_impot_mini_fiscal') }}\" class=\"btn btn-primary btn-lg p-2 m-2\">Liste ImpotMinFiscale</a>
        <a href=\"{{ path('edit_taxe_rurale') }}\" type=\"button\" class=\"btn btn-info btn-lg p-2 m-2\">Ajouter une Taxe rurale</a>
       <a href=\"{{ path('liste_taxe_rurale') }}\" class=\"btn btn-primary btn-lg p-2 m-2\">Liste une Taxe rurale</a>
    </div>
{% endblock %}

{% block PageTitre %}
    Les impôts assis sur la valeur foncière et immobilière
{% endblock %}", "impot_assi_valeur/listImpotCapitation.html.twig", "C:\\xampp7\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\impot_assi_valeur\\listImpotCapitation.html.twig");
    }
}
