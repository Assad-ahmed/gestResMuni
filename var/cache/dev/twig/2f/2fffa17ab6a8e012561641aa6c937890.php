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

/* ristournes/index.html.twig */
class __TwigTemplate_43295d4c81c26a7e75f30c45f834bfa4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ristournes/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ristournes/index.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "ristournes/index.html.twig", 1);
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

        echo "recette Non Fisscale!";
        
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
        echo "    <div class=\" m-3\">
        <table class=\"table table-striped\">
            <thead class=\"text-center \" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
            <tr>
                <th scope=\"col\">Propriete</th>
                <th scope=\"col\">Nom </th>
                <th scope=\"col\">Montant </th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Details</th>
                <th scope=\"col\">Modifier</th>
                
                ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            echo "  
                  <th scope=\"col\">Supprimer</th>
                ";
        }
        // line 20
        echo "                

            </tr>
            </thead>
            <tbody class=\"text-center\">
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ristournes"]) || array_key_exists("ristournes", $context) ? $context["ristournes"] : (function () { throw new RuntimeError('Variable "ristournes" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ristourne"]) {
            // line 26
            echo "                <tr>
                    <td>";
            // line 27
            ((twig_get_attribute($this->env, $this->source, $context["ristourne"], "propriete", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ristourne"], "propriete", [], "any", false, false, false, 27), "nom", [], "any", false, false, false, 27), "html", null, true))) : (print ("")));
            echo " ";
            ((twig_get_attribute($this->env, $this->source, $context["ristourne"], "propriete", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ristourne"], "propriete", [], "any", false, false, false, 27), "prenom", [], "any", false, false, false, 27), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ristourne"], "nom", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ristourne"], "montant", [], "any", false, false, false, 29), 0, ",", " "), "html", null, true);
            echo " fcfa</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ristourne"], "date", [], "any", false, false, false, 30), "d/m/y "), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_ristournes", ["propriete_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ristourne"], "propriete", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                    <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_ristournes", ["id" => twig_get_attribute($this->env, $this->source, $context["ristourne"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"btn btn-primary mt-2\"> <i class=\"fa-solid fa-user-pen\"></i></a></td>
                   
                    ";
            // line 34
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                echo "  
                      <td><a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_ristournes", ["id" => twig_get_attribute($this->env, $this->source, $context["ristourne"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\" class=\"btn btn-danger mt-2\" onclick=\"return confirm('Etes-vous sur de suprimer cette ristourne')\"><i class=\"fa-solid fa-trash\"></i></a></td>
                    ";
            }
            // line 37
            echo "
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ristourne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </tbody>
        </table>
    </div>
    ";
        // line 43
        if ((isset($context["isPaginated"]) || array_key_exists("isPaginated", $context) ? $context["isPaginated"] : (function () { throw new RuntimeError('Variable "isPaginated" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "        <div class=\"row mt-3\">
            <nav aria-label=\"Page navigation example\">
                <ul class=\"pagination\">
                    ";
            // line 47
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 47, $this->source); })()) != 1)) {
                // line 48
                echo "                        <li class=\"page-item\"><a class=\"page-link\" style=\"background-color: rgb(130, 106, 251);color:#fff; \" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_ristournes", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 48, $this->source); })()) - 1), "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 48, $this->source); })())]), "html", null, true);
                echo "\">Previous</a></li>
                    ";
            }
            // line 50
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbrePage"]) || array_key_exists("nbrePage", $context) ? $context["nbrePage"] : (function () { throw new RuntimeError('Variable "nbrePage" does not exist.', 50, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 51
                echo "                        <li class=\"page-item\"><a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_ristournes", ["page" => $context["i"], "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 51, $this->source); })())]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                    ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 53, $this->source); })()) != (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 53, $this->source); })()))) {
                // line 54
                echo "                        <li class=\"page-item\"><a class=\"page-link\"  style=\"background-color: rgb(130, 106, 251);color:#fff; \" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_ristournes", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 54, $this->source); })()) + 1), "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 54, $this->source); })())]), "html", null, true);
                echo "\">Next</a></li>
                    ";
            }
            // line 56
            echo "                </ul>
            </nav>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        // line 62
        echo "    La liste des ristournes
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ristournes/index.html.twig";
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
        return array (  235 => 62,  225 => 61,  211 => 56,  205 => 54,  202 => 53,  191 => 51,  186 => 50,  180 => 48,  178 => 47,  173 => 44,  171 => 43,  166 => 40,  158 => 37,  153 => 35,  149 => 34,  144 => 32,  140 => 31,  136 => 30,  132 => 29,  128 => 28,  122 => 27,  119 => 26,  115 => 25,  108 => 20,  102 => 17,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}

{% block title %}recette Non Fisscale!{% endblock %}

{% block body %}
    <div class=\" m-3\">
        <table class=\"table table-striped\">
            <thead class=\"text-center \" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
            <tr>
                <th scope=\"col\">Propriete</th>
                <th scope=\"col\">Nom </th>
                <th scope=\"col\">Montant </th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Details</th>
                <th scope=\"col\">Modifier</th>
                
                {% if is_granted('ROLE_SUPER_ADMIN') %}  
                  <th scope=\"col\">Supprimer</th>
                {% endif %}
                

            </tr>
            </thead>
            <tbody class=\"text-center\">
            {% for ristourne in ristournes %}
                <tr>
                    <td>{{ ristourne.propriete ? ristourne.propriete.nom  }} {{ ristourne.propriete ? ristourne.propriete.prenom }}</td>
                    <td>{{ ristourne.nom }}</td>
                    <td>{{ ristourne.montant|number_format(0, ',', ' ') }} fcfa</td>
                    <td>{{ ristourne.date|date('d/m/y ') }}</td>
                    <td><a href=\"{{path('detail_ristournes', {propriete_id: ristourne.propriete.id})}}\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                    <td><a href=\"{{ path('edit_ristournes', {id:ristourne.id }) }}\" class=\"btn btn-primary mt-2\"> <i class=\"fa-solid fa-user-pen\"></i></a></td>
                   
                    {% if is_granted('ROLE_SUPER_ADMIN') %}  
                      <td><a href=\"{{ path('delete_ristournes', {id:ristourne.id}) }}\" class=\"btn btn-danger mt-2\" onclick=\"return confirm('Etes-vous sur de suprimer cette ristourne')\"><i class=\"fa-solid fa-trash\"></i></a></td>
                    {% endif %}

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
                        <li class=\"page-item\"><a class=\"page-link\" style=\"background-color: rgb(130, 106, 251);color:#fff; \" href=\"{{ path('liste_ristournes',{page: page-1, nbre:nbre}) }}\">Previous</a></li>
                    {% endif %}
                    {% for i in range(1, nbrePage) %}
                        <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('liste_ristournes',{page: i, nbre:nbre}) }}\">{{ i }}</a></li>
                    {% endfor %}
                    {% if page !=nbre %}
                        <li class=\"page-item\"><a class=\"page-link\"  style=\"background-color: rgb(130, 106, 251);color:#fff; \" href=\"{{ path('liste_ristournes',{page: page+1, nbre:nbre}) }}\">Next</a></li>
                    {% endif %}
                </ul>
            </nav>
        </div>
    {% endif %}
{% endblock %}
{% block PageTitre %}
    La liste des ristournes
{% endblock %}

", "ristournes/index.html.twig", "C:\\xampp7\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\ristournes\\index.html.twig");
    }
}
