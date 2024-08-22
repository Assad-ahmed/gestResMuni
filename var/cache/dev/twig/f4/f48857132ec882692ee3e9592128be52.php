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

/* site_de_collecte/show.html.twig */
class __TwigTemplate_77e43f5a4be2c9f2cbe31df06e3d3503 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site_de_collecte/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site_de_collecte/show.html.twig"));

        // line 1
        echo "<h1>Site de Collecte: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteDeCollecte"]) || array_key_exists("siteDeCollecte", $context) ? $context["siteDeCollecte"] : (function () { throw new RuntimeError('Variable "siteDeCollecte" does not exist.', 1, $this->source); })()), "nom", [], "any", false, false, false, 1), "html", null, true);
        echo "</h1>

<table>
    <thead>
    <tr>
        <th>Contributeur</th>
        <th>Montant Mensuel</th>
        <th>Montant Annuel</th>
        <th>Manque à Gagner (Jour)</th>
        <th>Manque à Gagner (Mois)</th>
        <th>Total Collecté</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contributionsData"]) || array_key_exists("contributionsData", $context) ? $context["contributionsData"] : (function () { throw new RuntimeError('Variable "contributionsData" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 16
            echo "        <tr>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "contributeur", [], "any", false, false, false, 17), "nom", [], "any", false, false, false, 17), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "contributeur", [], "any", false, false, false, 17), "prenom", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "montantMensuel", [], "any", false, false, false, 18), "html", null, true);
            echo " F CFA</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "montantAnnuel", [], "any", false, false, false, 19), "html", null, true);
            echo " F CFA</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "manqueAGagnerJour", [], "any", false, false, false, 20), "html", null, true);
            echo " F CFA</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "manqueAGagnerMois", [], "any", false, false, false, 21), "html", null, true);
            echo " F CFA</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "totalCollecte", [], "any", false, false, false, 22), "html", null, true);
            echo " F CFA</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </tbody>
</table>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "site_de_collecte/show.html.twig";
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
        return array (  99 => 25,  90 => 22,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  68 => 17,  65 => 16,  61 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Site de Collecte: {{ siteDeCollecte.nom }}</h1>

<table>
    <thead>
    <tr>
        <th>Contributeur</th>
        <th>Montant Mensuel</th>
        <th>Montant Annuel</th>
        <th>Manque à Gagner (Jour)</th>
        <th>Manque à Gagner (Mois)</th>
        <th>Total Collecté</th>
    </tr>
    </thead>
    <tbody>
    {% for data in contributionsData %}
        <tr>
            <td>{{ data.contributeur.nom }} {{ data.contributeur.prenom }}</td>
            <td>{{ data.montantMensuel }} F CFA</td>
            <td>{{ data.montantAnnuel }} F CFA</td>
            <td>{{ data.manqueAGagnerJour }} F CFA</td>
            <td>{{ data.manqueAGagnerMois }} F CFA</td>
            <td>{{ data.totalCollecte }} F CFA</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "site_de_collecte/show.html.twig", "C:\\xampp7\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\site_de_collecte\\show.html.twig");
    }
}
