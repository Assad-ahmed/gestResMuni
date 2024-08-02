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

/* impot_assi_valeur/list.html.twig */
class __TwigTemplate_84f19c4c2d46c00d50c66a70598a2be4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impot_assi_valeur/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impot_assi_valeur/list.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "impot_assi_valeur/list.html.twig", 1);
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
        <a href=\"#\" class=\"list-group-item list-group-item-action active m-lg-2\" style=\"width: 90%\" aria-current=\"true\">
            <div class=\"d-flex w-100 justify-content-between\">
                <h4 class=\"mb-1\"> Contribution foncière des propriétés bâties (CFPB)</h4>
            </div>
            <p class=\"mb-1 fs-4\">Montant Cumule : ";
        // line 11
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalCFPB"]) || array_key_exists("totalCFPB", $context) ? $context["totalCFPB"] : (function () { throw new RuntimeError('Variable "totalCFPB" does not exist.', 11, $this->source); })()), 0, ",", " "), "html", null, true);
        echo " Fcfa</p>
        </a>

        <a href=\"#\" class=\"list-group-item list-group-item-action bg-warning m-lg-2\" style=\"width: 90%\">
            <div class=\"d-flex w-100 justify-content-between\">
                <h4 class=\"mb-1\"> Contribution foncière des propriétés non bâties (CFPNB)</h4>
            </div>
            <p class=\"mb-1 fs-4\">Montant Cumule : ";
        // line 18
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalCFPNB"]) || array_key_exists("totalCFPNB", $context) ? $context["totalCFPNB"] : (function () { throw new RuntimeError('Variable "totalCFPNB" does not exist.', 18, $this->source); })()), 0, ",", " "), "html", null, true);
        echo " Fcfa</p>
        </a>

        <a href=\"#\" class=\"list-group-item list-group-item-action bg-info m-lg-2\" style=\"width: 90%\">
            <div class=\"d-flex w-100 justify-content-between\">
                <h4 class=\"mb-1\"> Taxe d'enlèvement des ordures ménagères (TOM)</h4>
            </div>
            <p class=\"mb-1 fs-4\">Montant Cumule : ";
        // line 25
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalTOM"]) || array_key_exists("totalTOM", $context) ? $context["totalTOM"] : (function () { throw new RuntimeError('Variable "totalTOM" does not exist.', 25, $this->source); })()), 0, ",", " "), "html", null, true);
        echo " Fcfa</p>
        </a>
    </div>

    <div class=\"d-flex justify-content-center\">
        <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_impot_cfpb");
        echo "\" class=\"btn btn-primary btn-lg p-2\">Ajouter CFPB</a>
         <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_impot_cfpb");
        echo "\" class=\"btn btn-primary btn-lg p-2 ms-2\">Liste CFPB</a>
        <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_impot_cfnpb");
        echo "\" class=\"btn btn-warning btn-lg p-2 ms-2\">Ajouter CFNPB</a>
         <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_impot_cfnpb");
        echo "\" class=\"btn btn-warning btn-lg p-2 ms-2\">Liste CFNPB</a>
        <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_impot_tom");
        echo "\"  class=\"btn btn-info btn-lg p-2 ms-2\" >Ajouter TOM</a>
         <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_impot_tom");
        echo "\" class=\"btn btn-info btn-lg p-2 ms-2\">Liste TOM</a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 39
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        // line 40
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
        return "impot_assi_valeur/list.html.twig";
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
        return array (  167 => 40,  157 => 39,  144 => 35,  140 => 34,  136 => 33,  132 => 32,  128 => 31,  124 => 30,  116 => 25,  106 => 18,  96 => 11,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block title %}Liste des impôts{% endblock %}

{% block body %}
    <div class=\"list-group m-3 ms-auto\" style=\"width: 90%;\">
        <a href=\"#\" class=\"list-group-item list-group-item-action active m-lg-2\" style=\"width: 90%\" aria-current=\"true\">
            <div class=\"d-flex w-100 justify-content-between\">
                <h4 class=\"mb-1\"> Contribution foncière des propriétés bâties (CFPB)</h4>
            </div>
            <p class=\"mb-1 fs-4\">Montant Cumule : {{ totalCFPB|number_format(0, ',', ' ') }} Fcfa</p>
        </a>

        <a href=\"#\" class=\"list-group-item list-group-item-action bg-warning m-lg-2\" style=\"width: 90%\">
            <div class=\"d-flex w-100 justify-content-between\">
                <h4 class=\"mb-1\"> Contribution foncière des propriétés non bâties (CFPNB)</h4>
            </div>
            <p class=\"mb-1 fs-4\">Montant Cumule : {{ totalCFPNB|number_format(0, ',', ' ') }} Fcfa</p>
        </a>

        <a href=\"#\" class=\"list-group-item list-group-item-action bg-info m-lg-2\" style=\"width: 90%\">
            <div class=\"d-flex w-100 justify-content-between\">
                <h4 class=\"mb-1\"> Taxe d'enlèvement des ordures ménagères (TOM)</h4>
            </div>
            <p class=\"mb-1 fs-4\">Montant Cumule : {{ totalTOM|number_format(0, ',', ' ') }} Fcfa</p>
        </a>
    </div>

    <div class=\"d-flex justify-content-center\">
        <a href=\"{{ path('edit_impot_cfpb') }}\" class=\"btn btn-primary btn-lg p-2\">Ajouter CFPB</a>
         <a href=\"{{ path('liste_impot_cfpb') }}\" class=\"btn btn-primary btn-lg p-2 ms-2\">Liste CFPB</a>
        <a href=\"{{ path('edit_impot_cfnpb') }}\" class=\"btn btn-warning btn-lg p-2 ms-2\">Ajouter CFNPB</a>
         <a href=\"{{ path('liste_impot_cfnpb') }}\" class=\"btn btn-warning btn-lg p-2 ms-2\">Liste CFNPB</a>
        <a href=\"{{ path('edit_impot_tom') }}\"  class=\"btn btn-info btn-lg p-2 ms-2\" >Ajouter TOM</a>
         <a href=\"{{ path('liste_impot_tom') }}\" class=\"btn btn-info btn-lg p-2 ms-2\">Liste TOM</a>
    </div>
{% endblock %}

{% block PageTitre %}
    Les impôts assis sur la valeur foncière et immobilière
{% endblock %}", "impot_assi_valeur/list.html.twig", "C:\\xampp7\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\impot_assi_valeur\\list.html.twig");
    }
}
