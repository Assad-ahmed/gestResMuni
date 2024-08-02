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

/* ressources/recette_non_fiscale/index.html.twig */
class __TwigTemplate_5ab9c0c1bef8275b6aa101bbbcefff08 extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "ressources/recette_non_fiscale/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "recette Non Fisscale!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container\">
        <div class=\"d-grid gap-7 col-2 mx-xxl-6\">
            <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_excedent");
        echo "\" class=\"btn bg-info\" ><strong>Ajouter RNF</strong></a>
        </div>
    </div>
    <div class=\" m-3\">
        <table class=\"table table-bordered\">
            <thead class=\"text-center \" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
            <tr>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">MontantJournalier</th>
                <th scope=\"col\">MontantMensuel</th>
                <th scope=\"col\">MontantAnnuel</th>
                <th scope=\"col\">Sites</th>
                <th scope=\"col\">Details</th>
                <th scope=\"col\">Modifier</th>
                <th scope=\"col\">Supprimer</th>

            </tr>
            </thead>
            <tbody class=\"text-center\">
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recettenonfiscales"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recettenonfiscale"]) {
            // line 29
            echo "                <tr>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recettenonfiscale"], "nom", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recettenonfiscale"], "date", [], "any", false, false, false, 31), "d/m/y "), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recettenonfiscale"], "montantJournalier", [], "any", false, false, false, 32), "html", null, true);
            echo "FCFA</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recettenonfiscale"], "montantMensuel", [], "any", false, false, false, 33), "html", null, true);
            echo "FCFA</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recettenonfiscale"], "montantAnnuel", [], "any", false, false, false, 34), "html", null, true);
            echo "FCFA</td>
                    <td>";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["recettenonfiscale"], "sites", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
                // line 36
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site"], "nom", [], "any", false, false, false, 36), "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                    </td>
                    <td><a href=\"#\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                    <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_recette_non_fiscale", ["id" => twig_get_attribute($this->env, $this->source, $context["recettenonfiscale"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"btn btn-primary mt-2\"> <i class=\"fa-solid fa-user-pen\"></i></a></td>
                    <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_recettenonfiscale", ["id" => twig_get_attribute($this->env, $this->source, $context["recettenonfiscale"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" class=\"btn btn-danger mt-2\"><i class=\"fa-solid fa-trash\"></i></a></td>

                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recettenonfiscale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </tbody>
        </table>
    </div>
    ";
        // line 48
        if (($context["isPaginated"] ?? null)) {
            // line 49
            echo "        <div class=\"row mt-3\">
            <nav aria-label=\"Page navigation example\">
                <ul class=\"pagination\">
                    ";
            // line 52
            if ((($context["page"] ?? null) != 1)) {
                // line 53
                echo "                        <li class=\"page-item\"><a class=\"page-link\" style=\"background-color: rgb(130, 106, 251);color:#fff; \" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_recette_non_fiscale", ["page" => (($context["page"] ?? null) - 1), "nbre" => ($context["nbre"] ?? null)]), "html", null, true);
                echo "\">Previous</a></li>
                    ";
            }
            // line 55
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["nbrePage"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 56
                echo "                        <li class=\"page-item\"><a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_recette_non_fiscale", ["page" => $context["i"], "nbre" => ($context["nbre"] ?? null)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                    ";
            if ((($context["page"] ?? null) != ($context["nbre"] ?? null))) {
                // line 59
                echo "                        <li class=\"page-item\"><a class=\"page-link\"  style=\"background-color: rgb(130, 106, 251);color:#fff; \" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_recette_non_fiscale", ["page" => (($context["page"] ?? null) + 1), "nbre" => ($context["nbre"] ?? null)]), "html", null, true);
                echo "\">Next</a></li>
                    ";
            }
            // line 61
            echo "                </ul>
            </nav>
        </div>
    ";
        }
    }

    // line 66
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "    La liste des recettes non Fiscales
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ressources/recette_non_fiscale/index.html.twig";
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
        return array (  201 => 67,  197 => 66,  189 => 61,  183 => 59,  180 => 58,  169 => 56,  164 => 55,  158 => 53,  156 => 52,  151 => 49,  149 => 48,  144 => 45,  134 => 41,  130 => 40,  126 => 38,  117 => 36,  113 => 35,  109 => 34,  105 => 33,  101 => 32,  97 => 31,  93 => 30,  90 => 29,  86 => 28,  63 => 8,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ressources/recette_non_fiscale/index.html.twig", "C:\\xampp\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\ressources\\recette_non_fiscale\\index.html.twig");
    }
}
