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

/* site_collecte/index.html.twig */
class __TwigTemplate_bac18b0f97667b8f34f9693b29d62b2b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site_collecte/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "site_collecte/index.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "site_collecte/index.html.twig", 1);
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

        echo "Hello SiteCollecteController!";
        
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
        echo "<div class=\"d-flex justify-content-center \">
      <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_site_collecte");
        echo "\" class=\"btn btn-primary btn-lg ms-2\"><strong>Ajouter Site de collecte</strong></a>
</div>
<div class=\" m-3 mt-3\">
    <table class=\"table table-striped\">
        <thead class=\"text-center \" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
        <tr>
            <th scope=\"col\" >Id</th>
            <th scope=\"col\">Nom </th>
            <th scope=\"col\">Localisation</th>
            <th scope=\"col\">Details</th>
            <th scope=\"col\">Modifier</th>
            <th scope=\"col\">Supprimer</th>

        </tr>
        </thead>
        <tbody class=\"text-center\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["siteCollectes"]) || array_key_exists("siteCollectes", $context) ? $context["siteCollectes"] : (function () { throw new RuntimeError('Variable "siteCollectes" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["siteCollecte"]) {
            // line 24
            echo "            <tr>
                <th scope=\"row\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["siteCollecte"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</th>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["siteCollecte"], "nom", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["siteCollecte"], "Localisation", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td><a href=\"#\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_site_collecte", ["id" => twig_get_attribute($this->env, $this->source, $context["siteCollecte"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"btn btn-primary \"> <i class=\"fa-solid fa-user-pen\"></i></a></td>
                <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_site", ["id" => twig_get_attribute($this->env, $this->source, $context["siteCollecte"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"btn btn-danger \" class=\"btn btn-danger mt-2\" onclick=\"return confirm('Etes-vous sur de suprimer ce site')\"><i class=\"fa-solid fa-trash\"></i></a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['siteCollecte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>
</div>
    ";
        // line 36
        if ((isset($context["isPaginated"]) || array_key_exists("isPaginated", $context) ? $context["isPaginated"] : (function () { throw new RuntimeError('Variable "isPaginated" does not exist.', 36, $this->source); })())) {
            // line 37
            echo "        <div class=\"row mt-3\">
            <nav aria-label=\"Page navigation example\">
                <ul class=\"pagination\">
                    ";
            // line 40
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 40, $this->source); })()) != 1)) {
                // line 41
                echo "                        <li class=\"page-item\"><a class=\"page-link\" style=\"background-color: rgb(130, 106, 251);color:#fff;\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_site_collecte", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 41, $this->source); })()) - 1), "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 41, $this->source); })())]), "html", null, true);
                echo "\">Previous</a></li>
                    ";
            }
            // line 43
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbrePage"]) || array_key_exists("nbrePage", $context) ? $context["nbrePage"] : (function () { throw new RuntimeError('Variable "nbrePage" does not exist.', 43, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 44
                echo "                        <li class=\"page-item\"><a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_site_collecte", ["page" => $context["i"], "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 44, $this->source); })())]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                    ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 46, $this->source); })()) != (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 46, $this->source); })()))) {
                // line 47
                echo "                        <li class=\"page-item\"><a class=\"page-link\" style=\"background-color: rgb(130, 106, 251);color:#fff;\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_site_collecte", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 47, $this->source); })()) + 1), "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 47, $this->source); })())]), "html", null, true);
                echo "\">Next</a></li>
                    ";
            }
            // line 49
            echo "                </ul>
            </nav>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 54
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        // line 55
        echo "   Liste des sites de collectes
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "site_collecte/index.html.twig";
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
        return array (  213 => 55,  203 => 54,  189 => 49,  183 => 47,  180 => 46,  169 => 44,  164 => 43,  158 => 41,  156 => 40,  151 => 37,  149 => 36,  144 => 33,  135 => 30,  131 => 29,  126 => 27,  122 => 26,  118 => 25,  115 => 24,  111 => 23,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block title %}Hello SiteCollecteController!{% endblock %}

{% block body %}
<div class=\"d-flex justify-content-center \">
      <a href=\"{{ path('edit_site_collecte') }}\" class=\"btn btn-primary btn-lg ms-2\"><strong>Ajouter Site de collecte</strong></a>
</div>
<div class=\" m-3 mt-3\">
    <table class=\"table table-striped\">
        <thead class=\"text-center \" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
        <tr>
            <th scope=\"col\" >Id</th>
            <th scope=\"col\">Nom </th>
            <th scope=\"col\">Localisation</th>
            <th scope=\"col\">Details</th>
            <th scope=\"col\">Modifier</th>
            <th scope=\"col\">Supprimer</th>

        </tr>
        </thead>
        <tbody class=\"text-center\">
        {% for siteCollecte in siteCollectes %}
            <tr>
                <th scope=\"row\">{{ siteCollecte.id }}</th>
                <td>{{siteCollecte.nom}}</td>
                <td>{{ siteCollecte.Localisation}}</td>
                <td><a href=\"#\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                <td><a href=\"{{ path('edit_site_collecte',{id: siteCollecte.id}) }}\" class=\"btn btn-primary \"> <i class=\"fa-solid fa-user-pen\"></i></a></td>
                <td><a href=\"{{ path('delete_site',{id: siteCollecte.id}) }}\" class=\"btn btn-danger \" class=\"btn btn-danger mt-2\" onclick=\"return confirm('Etes-vous sur de suprimer ce site')\"><i class=\"fa-solid fa-trash\"></i></a></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
    {% if isPaginated %}
        <div class=\"row mt-3\">
            <nav aria-label=\"Page navigation example\">
                <ul class=\"pagination\">
                    {% if page != 1 %}
                        <li class=\"page-item\"><a class=\"page-link\" style=\"background-color: rgb(130, 106, 251);color:#fff;\" href=\"{{ path('liste_site_collecte',{page: page-1, nbre:nbre}) }}\">Previous</a></li>
                    {% endif %}
                    {% for i in range(1, nbrePage) %}
                        <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('liste_site_collecte',{page: i, nbre:nbre}) }}\">{{ i }}</a></li>
                    {% endfor %}
                    {% if page !=nbre %}
                        <li class=\"page-item\"><a class=\"page-link\" style=\"background-color: rgb(130, 106, 251);color:#fff;\" href=\"{{ path('liste_site_collecte',{page: page+1, nbre:nbre}) }}\">Next</a></li>
                    {% endif %}
                </ul>
            </nav>
        </div>
    {% endif %}
{% endblock %}
{% block PageTitre %}
   Liste des sites de collectes
{% endblock %}
", "site_collecte/index.html.twig", "C:\\xampp7\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\site_collecte\\index.html.twig");
    }
}
