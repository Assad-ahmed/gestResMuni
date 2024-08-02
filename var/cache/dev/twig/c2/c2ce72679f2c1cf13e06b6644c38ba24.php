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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contributeur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contributeur/index.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "contributeur/index.html.twig", 1);
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

        echo "Hello Contributeur!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        // line 6
        echo "        Liste des Contributeurs
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"d-flex justify-content-center \">
      <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_contributeur");
        echo "\" class=\"btn btn-primary btn-lg ms-2\"><strong>Ajouter un contributeur</strong></a>
    </div>
 <div class=\" m-3 mt-3\">
        <table class=\"table table-striped\">
            <thead class=\"text-center px-sm-0\" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
            <tr>
               <th scope=\"col\">Numero</th>
                <th scope=\"col\">Nom </th>
                <th scope=\"col\">prenom</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">MontantJour</th>
                <th scope=\"col\">MontantMois</th>
                <th scope=\"col\">Sites</th>
                <th scope=\"col\">Details</th>
                <th scope=\"col\">Modifier</th>
                <th scope=\"col\">Supprimer</th>
            </tr>
            </thead>
            <tbody class=\"text-center\">
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contributeurs"]) || array_key_exists("contributeurs", $context) ? $context["contributeurs"] : (function () { throw new RuntimeError('Variable "contributeurs" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contributeur"]) {
            // line 31
            echo "                <tr>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "numeroEtablissement", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "nom", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "prenom", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "datePaye", [], "any", false, false, false, 35), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "montantJour", [], "any", false, false, false, 36), "html", null, true);
            echo "FCFA</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "montantMois", [], "any", false, false, false, 37), "html", null, true);
            echo "FCFA</td>
                    <td>";
            // line 38
            ((twig_get_attribute($this->env, $this->source, $context["contributeur"], "sitecollecte", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contributeur"], "sitecollecte", [], "any", false, false, false, 38), "nom", [], "any", false, false, false, 38), "html", null, true))) : (print ("N/A")));
            echo "</td>
                    <td><a href=\"#\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                    <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_contributeur", ["id" => twig_get_attribute($this->env, $this->source, $context["contributeur"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"btn btn-primary \"> <i class=\"fa-solid fa-user-pen\"></i></a></td>
                    <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_contributeur", ["id" => twig_get_attribute($this->env, $this->source, $context["contributeur"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" class=\"btn btn-danger \" onclick=\"return confirm('Etes-vous sur de suprimer ce contributeur')\"><i class=\"fa-solid fa-trash\"></i></a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contributeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </tbody>
        </table>
 </div>
        ";
        // line 47
        if ((isset($context["isPaginated"]) || array_key_exists("isPaginated", $context) ? $context["isPaginated"] : (function () { throw new RuntimeError('Variable "isPaginated" does not exist.', 47, $this->source); })())) {
            // line 48
            echo "            <div class=\"row mt-3\">
                <nav aria-label=\"Page navigation example\">
                    <ul class=\"pagination\">
                        ";
            // line 51
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 51, $this->source); })()) != 1)) {
                // line 52
                echo "                            <li class=\"page-item\"><a class=\"page-link\" style=\"background-color: rgb(130, 106, 251);color:#fff;\"href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_contributeur", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 52, $this->source); })()) - 1), "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 52, $this->source); })())]), "html", null, true);
                echo "\">Previous</a></li>
                        ";
            }
            // line 54
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbrePage"]) || array_key_exists("nbrePage", $context) ? $context["nbrePage"] : (function () { throw new RuntimeError('Variable "nbrePage" does not exist.', 54, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 55
                echo "                            <li class=\"page-item\"><a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_contributeur", ["page" => $context["i"], "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 55, $this->source); })())]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                        ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 57, $this->source); })()) != (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 57, $this->source); })()))) {
                // line 58
                echo "                            <li class=\"page-item\"><a class=\"page-link\" style=\"background-color: rgb(130, 106, 251);color:#fff;\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_contributeur", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 58, $this->source); })()) + 1), "nbre" => (isset($context["nbre"]) || array_key_exists("nbre", $context) ? $context["nbre"] : (function () { throw new RuntimeError('Variable "nbre" does not exist.', 58, $this->source); })())]), "html", null, true);
                echo "\">Next</a></li>
                        ";
            }
            // line 60
            echo "                    </ul>
                </nav>
            </div>
        ";
        }
        // line 64
        echo "    ";
        
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
        return array (  235 => 64,  229 => 60,  223 => 58,  220 => 57,  209 => 55,  204 => 54,  198 => 52,  196 => 51,  191 => 48,  189 => 47,  184 => 44,  175 => 41,  171 => 40,  166 => 38,  162 => 37,  158 => 36,  154 => 35,  150 => 34,  146 => 33,  142 => 32,  139 => 31,  135 => 30,  113 => 11,  110 => 10,  100 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'template.html.twig' %}

    {% block title %}Hello Contributeur!{% endblock %}

    {%block PageTitre %}
        Liste des Contributeurs
    {% endblock %}

    {% block body %}
    <div class=\"d-flex justify-content-center \">
      <a href=\"{{ path('edit_contributeur') }}\" class=\"btn btn-primary btn-lg ms-2\"><strong>Ajouter un contributeur</strong></a>
    </div>
 <div class=\" m-3 mt-3\">
        <table class=\"table table-striped\">
            <thead class=\"text-center px-sm-0\" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
            <tr>
               <th scope=\"col\">Numero</th>
                <th scope=\"col\">Nom </th>
                <th scope=\"col\">prenom</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">MontantJour</th>
                <th scope=\"col\">MontantMois</th>
                <th scope=\"col\">Sites</th>
                <th scope=\"col\">Details</th>
                <th scope=\"col\">Modifier</th>
                <th scope=\"col\">Supprimer</th>
            </tr>
            </thead>
            <tbody class=\"text-center\">
            {% for contributeur in contributeurs %}
                <tr>
                    <td>{{ contributeur.numeroEtablissement}}</td>
                    <td>{{ contributeur.nom}}</td>
                    <td>{{contributeur.prenom}}</td>
                    <td>{{ contributeur.datePaye|date('Y-m-d') }}</td>
                    <td>{{contributeur.montantJour }}FCFA</td>
                    <td>{{ contributeur.montantMois}}FCFA</td>
                    <td>{{ contributeur.sitecollecte ? contributeur.sitecollecte.nom : 'N/A' }}</td>
                    <td><a href=\"#\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                    <td><a href=\"{{ path('edit_contributeur',{id: contributeur.id}) }}\" class=\"btn btn-primary \"> <i class=\"fa-solid fa-user-pen\"></i></a></td>
                    <td><a href=\"{{ path('delete_contributeur',{id: contributeur.id}) }}\" class=\"btn btn-danger \" onclick=\"return confirm('Etes-vous sur de suprimer ce contributeur')\"><i class=\"fa-solid fa-trash\"></i></a></td>
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
                            <li class=\"page-item\"><a class=\"page-link\" style=\"background-color: rgb(130, 106, 251);color:#fff;\"href=\"{{ path('liste_contributeur',{page: page-1, nbre:nbre}) }}\">Previous</a></li>
                        {% endif %}
                        {% for i in range(1, nbrePage) %}
                            <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('liste_contributeur',{page: i, nbre:nbre}) }}\">{{ i }}</a></li>
                        {% endfor %}
                        {% if page !=nbre %}
                            <li class=\"page-item\"><a class=\"page-link\" style=\"background-color: rgb(130, 106, 251);color:#fff;\" href=\"{{ path('liste_contributeur',{page: page+1, nbre:nbre}) }}\">Next</a></li>
                        {% endif %}
                    </ul>
                </nav>
            </div>
        {% endif %}
    {% endblock %}




", "contributeur/index.html.twig", "C:\\xampp7\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\contributeur\\index.html.twig");
    }
}
