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

/* type_impots/total.html.twig */
class __TwigTemplate_d865f3e3aa25b713b5dc59cdb1ce2324 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "type_impots/total.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "type_impots/total.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "type_impots/total.html.twig", 2);
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

        echo "Les différents types de recettes fiscales";
        
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
    <div class=\"row m-2\">
        <div class=\"col-sm-6\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body text-center\">
                    <h3 class=\"card-title mb-4\">Impôts Assis sur Valeur Foncière</h3>
                    <p class=\"fa-2x font-weight-bold\">Montant Cumule:</p>
                    <p class=\"display-6\">";
        // line 14
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalAllTaxes"]) || array_key_exists("totalAllTaxes", $context) ? $context["totalAllTaxes"] : (function () { throw new RuntimeError('Variable "totalAllTaxes" does not exist.', 14, $this->source); })()), 0, ",", " "), "html", null, true);
        echo " Fcfa</p>
                    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_impots");
        echo "\" class=\"btn btn-primary mt-3\">
                        <i class='bx bx-detail'></i> Détails
                    </a>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body text-center\">
                    <h3 class=\"card-title mb-4\">Contribution Patente</h3>
                    <p class=\"fa-2x font-weight-bold\">Montant Cumule:</p>
                    <p class=\"display-6\">";
        // line 26
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalPatentes"]) || array_key_exists("totalPatentes", $context) ? $context["totalPatentes"] : (function () { throw new RuntimeError('Variable "totalPatentes" does not exist.', 26, $this->source); })()), 0, ",", " "), "html", null, true);
        echo " Fcfa</p>
                    <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_patentes");
        echo "\" class=\"btn btn-primary mt-3\">
                        <i class='bx bx-detail'></i> Détails
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row m-2\">
        <div class=\"col-sm-6\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body text-center\">
                    <h3 class=\"card-title mb-4\">Impôt Capitation</h3>
                    <p class=\"fa-2x font-weight-bold\">Montant Cumule:</p>
                    <p class=\"display-6\">";
        // line 40
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalAllImpotCapitation"]) || array_key_exists("totalAllImpotCapitation", $context) ? $context["totalAllImpotCapitation"] : (function () { throw new RuntimeError('Variable "totalAllImpotCapitation" does not exist.', 40, $this->source); })()), 0, ",", " "), "html", null, true);
        echo " Fcfa</p>
                    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_impot_capitation");
        echo "\" class=\"btn btn-primary mt-3\">
                        <i class='bx bx-detail'></i> Détails
                    </a>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body text-center\">
                    <h3 class=\"card-title mb-4\">Impôt indirect</h3>
                    <p class=\"fa-2x font-weight-bold\">Montant Cumule:</p>
                    <p class=\"display-6\">";
        // line 52
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalTaxIndirecte"]) || array_key_exists("totalTaxIndirecte", $context) ? $context["totalTaxIndirecte"] : (function () { throw new RuntimeError('Variable "totalTaxIndirecte" does not exist.', 52, $this->source); })()), 0, ",", " "), "html", null, true);
        echo " Fcfa</p>
                    <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_taxindirecte");
        echo "\" class=\"btn btn-primary mt-3\">
                        <i class='bx bx-detail'></i> Détails
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"d-flex justify-content-center mb-3 \">
        <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_propriete");
        echo "\" class=\"btn btn-primary btn-lg p-2\">Voir les proprietaire</a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 64
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        // line 65
        echo "     Les différents types de recettes fiscales
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "type_impots/total.html.twig";
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
        return array (  192 => 65,  182 => 64,  169 => 61,  158 => 53,  154 => 52,  140 => 41,  136 => 40,  120 => 27,  116 => 26,  102 => 15,  98 => 14,  89 => 7,  79 => 6,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'template.html.twig' %}

{% block title %}Les différents types de recettes fiscales{% endblock %}

{% block body %}
  
    <div class=\"row m-2\">
        <div class=\"col-sm-6\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body text-center\">
                    <h3 class=\"card-title mb-4\">Impôts Assis sur Valeur Foncière</h3>
                    <p class=\"fa-2x font-weight-bold\">Montant Cumule:</p>
                    <p class=\"display-6\">{{ totalAllTaxes|number_format(0, ',', ' ') }} Fcfa</p>
                    <a href=\"{{ path('liste_impots') }}\" class=\"btn btn-primary mt-3\">
                        <i class='bx bx-detail'></i> Détails
                    </a>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body text-center\">
                    <h3 class=\"card-title mb-4\">Contribution Patente</h3>
                    <p class=\"fa-2x font-weight-bold\">Montant Cumule:</p>
                    <p class=\"display-6\">{{ totalPatentes|number_format(0, ',', ' ') }} Fcfa</p>
                    <a href=\"{{ path('liste_patentes') }}\" class=\"btn btn-primary mt-3\">
                        <i class='bx bx-detail'></i> Détails
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row m-2\">
        <div class=\"col-sm-6\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body text-center\">
                    <h3 class=\"card-title mb-4\">Impôt Capitation</h3>
                    <p class=\"fa-2x font-weight-bold\">Montant Cumule:</p>
                    <p class=\"display-6\">{{ totalAllImpotCapitation|number_format(0, ',', ' ') }} Fcfa</p>
                    <a href=\"{{ path('liste_impot_capitation') }}\" class=\"btn btn-primary mt-3\">
                        <i class='bx bx-detail'></i> Détails
                    </a>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body text-center\">
                    <h3 class=\"card-title mb-4\">Impôt indirect</h3>
                    <p class=\"fa-2x font-weight-bold\">Montant Cumule:</p>
                    <p class=\"display-6\">{{ totalTaxIndirecte|number_format(0, ',', ' ') }} Fcfa</p>
                    <a href=\"{{ path('liste_taxindirecte') }}\" class=\"btn btn-primary mt-3\">
                        <i class='bx bx-detail'></i> Détails
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"d-flex justify-content-center mb-3 \">
        <a href=\"{{ path('edit_propriete') }}\" class=\"btn btn-primary btn-lg p-2\">Voir les proprietaire</a>
    </div>
{% endblock %}
 {% block PageTitre%}
     Les différents types de recettes fiscales
 {% endblock %}


", "type_impots/total.html.twig", "C:\\xampp7\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\type_impots\\total.html.twig");
    }
}
