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

/* contributeur/index.html.twig */
class __TwigTemplate_16ab6ff961599201f351b2a78a8f4dbb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contributeur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contributeur/index.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "contributeur/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        // line 3
        echo "    Liste des Contributeurs
";
        
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
        echo "
    <div class=\"d-flex justify-content-center m-3 \">
        <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paiement_new");
        echo "\" class=\"btn btn-primary btn-lg ms-2\"><strong>Ajouter un paiement</strong></a>
    </div>

    <table class=\"table table-bordered\" >
        <thead class=\"text-center\" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
        <tr>
            <th>Numéro d'Établissement</th>
            <th>Nom Propriétaire</th>
            <th>Prénom Propriétaire</th>
            <th>Montant du Jour</th>
            <th>Montant du Mois</th>
            <th>Manque à Gagner du Jour</th>
            <th>Manque à Gagner du Mois</th>
            <th>Details</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        </thead>
        <tbody class=\"text-sm-center\">
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contributeurs"]) || array_key_exists("contributeurs", $context) ? $context["contributeurs"] : (function () { throw new RuntimeError('Variable "contributeurs" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contributeur"]) {
            // line 28
            echo "            <tr>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "numeroEtablissement", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "nomProprietaire", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "prenomProprietaire", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "montantDuJour", [], "any", false, false, false, 32), "html", null, true);
            echo " F CFA</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "montantDuMois", [], "any", false, false, false, 33), "html", null, true);
            echo " F CFA</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "manqueAGagnerDuJour", [], "any", false, false, false, 34), "html", null, true);
            echo " F CFA</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "manqueAGagnerDuMois", [], "any", false, false, false, 35), "html", null, true);
            echo " F CFA</td>
                <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contributeur_show", ["id" => twig_get_attribute($this->env, $this->source, $context["contributeur"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_contributeur", ["id" => twig_get_attribute($this->env, $this->source, $context["contributeur"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-user-pen\"></i></a></td>
                <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_contributeur", ["id" => twig_get_attribute($this->env, $this->source, $context["contributeur"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return confirm('Etes-vous sur de suprimer cet agent')\"><i class=\"fa-solid fa-trash\"></i></a></td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contributeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "contributeur/index.html.twig";
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
        return array (  169 => 42,  159 => 38,  155 => 37,  151 => 36,  147 => 35,  143 => 34,  139 => 33,  135 => 32,  131 => 31,  127 => 30,  123 => 29,  120 => 28,  116 => 27,  94 => 8,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig'%}
{% block PageTitre %}
    Liste des Contributeurs
{% endblock %}
{% block body %}

    <div class=\"d-flex justify-content-center m-3 \">
        <a href=\"{{ path('paiement_new') }}\" class=\"btn btn-primary btn-lg ms-2\"><strong>Ajouter un paiement</strong></a>
    </div>

    <table class=\"table table-bordered\" >
        <thead class=\"text-center\" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
        <tr>
            <th>Numéro d'Établissement</th>
            <th>Nom Propriétaire</th>
            <th>Prénom Propriétaire</th>
            <th>Montant du Jour</th>
            <th>Montant du Mois</th>
            <th>Manque à Gagner du Jour</th>
            <th>Manque à Gagner du Mois</th>
            <th>Details</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        </thead>
        <tbody class=\"text-sm-center\">
        {% for contributeur in contributeurs %}
            <tr>
                <td>{{ contributeur.numeroEtablissement }}</td>
                <td>{{ contributeur.nomProprietaire }}</td>
                <td>{{ contributeur.prenomProprietaire }}</td>
                <td>{{ contributeur.montantDuJour }} F CFA</td>
                <td>{{ contributeur.montantDuMois }} F CFA</td>
                <td>{{ contributeur.manqueAGagnerDuJour }} F CFA</td>
                <td>{{ contributeur.manqueAGagnerDuMois }} F CFA</td>
                <td><a href=\"{{ path('contributeur_show',{id: contributeur.id}) }}\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                <td><a href=\"{{ path('edit_contributeur', {id: contributeur.id}) }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-user-pen\"></i></a></td>
                <td><a href=\"{{ path('delete_contributeur', {id: contributeur.id}) }}\" class=\"btn btn-danger\" onclick=\"return confirm('Etes-vous sur de suprimer cet agent')\"><i class=\"fa-solid fa-trash\"></i></a></td>

            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}




", "contributeur/index.html.twig", "C:\\xampp7\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\contributeur\\index.html.twig");
    }
}
