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

/* impot_assi_valeur/listTaxIndirecte.html.twig */
class __TwigTemplate_399b311426322a53fa09597ee06e94a7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impot_assi_valeur/listTaxIndirecte.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "impot_assi_valeur/listTaxIndirecte.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "impot_assi_valeur/listTaxIndirecte.html.twig", 1);
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

        // line 4
        echo "
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
    <div class=\"list-group m-3 mx-auto\" style=\"max-width: 90%;\">
        <a href=\"#\" class=\"list-group-item list-group-item-action active m-lg-2\" style=\"width: 90%\" aria-current=\"true\">
            <div class=\"d-flex w-100 justify-content-between\">
                <h4 class=\"mb-1\">  Impôt indirect</h4>
            </div>
            <p class=\"mb-1 fs-4\">Montant Cumule : ";
        // line 14
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalTaxIndirecte"]) || array_key_exists("totalTaxIndirecte", $context) ? $context["totalTaxIndirecte"] : (function () { throw new RuntimeError('Variable "totalTaxIndirecte" does not exist.', 14, $this->source); })()), 0, ",", " "), "html", null, true);
        echo " Fcfa</p>
        </a>
    </div>

    <div class=\"d-flex justify-content-center mt-3 \">
        <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_impot_indirecte");
        echo "\" class=\"btn btn-primary btn-lg p-2 m-2\">Ajouter Taxe Indirecte</a>
        <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_impot_indirecte");
        echo "\" class=\"btn btn-warning btn-lg p-2 m-2\">Liste Taxe Indirecte</a>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        // line 26
        echo "    Les impots indirects
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "impot_assi_valeur/listTaxIndirecte.html.twig";
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
        return array (  135 => 26,  125 => 25,  111 => 20,  107 => 19,  99 => 14,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block title %}

{% endblock %}

{% block body %}

    <div class=\"list-group m-3 mx-auto\" style=\"max-width: 90%;\">
        <a href=\"#\" class=\"list-group-item list-group-item-action active m-lg-2\" style=\"width: 90%\" aria-current=\"true\">
            <div class=\"d-flex w-100 justify-content-between\">
                <h4 class=\"mb-1\">  Impôt indirect</h4>
            </div>
            <p class=\"mb-1 fs-4\">Montant Cumule : {{ totalTaxIndirecte|number_format(0, ',', ' ') }} Fcfa</p>
        </a>
    </div>

    <div class=\"d-flex justify-content-center mt-3 \">
        <a href=\"{{ path('edit_impot_indirecte') }}\" class=\"btn btn-primary btn-lg p-2 m-2\">Ajouter Taxe Indirecte</a>
        <a href=\"{{ path('liste_impot_indirecte') }}\" class=\"btn btn-warning btn-lg p-2 m-2\">Liste Taxe Indirecte</a>
    </div>

{% endblock %}

{% block PageTitre %}
    Les impots indirects
{% endblock %}
", "impot_assi_valeur/listTaxIndirecte.html.twig", "C:\\xampp7\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\impot_assi_valeur\\listTaxIndirecte.html.twig");
    }
}
