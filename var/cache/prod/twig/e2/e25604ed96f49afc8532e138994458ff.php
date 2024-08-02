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

/* ressources/excedent/index.html.twig */
class __TwigTemplate_71acecdb08c9b60ea320b2ac22c3f376 extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "ressources/excedent/index.html.twig", 1);
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
        echo "\" class=\"btn bg-info\" ><strong>Ajouter Excedent</strong></a>
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
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["excedents"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["excedent"]) {
            // line 28
            echo "                <tr>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excedent"], "nom", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excedent"], "date", [], "any", false, false, false, 30), "d/m/y "), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excedent"], "montantJournalier", [], "any", false, false, false, 31), "html", null, true);
            echo "FCFA</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excedent"], "montantMensuel", [], "any", false, false, false, 32), "html", null, true);
            echo "FCFA</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["excedent"], "montantAnnuel", [], "any", false, false, false, 33), "html", null, true);
            echo "FCFA</td>
                    <td>";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["excedent"], "sites", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
                // line 35
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site"], "nom", [], "any", false, false, false, 35), "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                    </td>
                    <td><a href=\"#\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                    <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_excedent", ["id" => twig_get_attribute($this->env, $this->source, $context["excedent"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" class=\"btn btn-primary mt-2\"> <i class=\"fa-solid fa-user-pen\"></i></a></td>
                  <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_excedent", ["id" => twig_get_attribute($this->env, $this->source, $context["excedent"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"btn btn-danger mt-2\"><i class=\"fa-solid fa-trash\"></i></a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['excedent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </tbody>
        </table>
    </div>

    ";
        // line 47
        if (($context["isPaginated"] ?? null)) {
            // line 48
            echo "        <div class=\"row mt-3\">
            <nav aria-label=\"Page navigation example\">
                <ul class=\"pagination\">
                    ";
            // line 51
            if ((($context["page"] ?? null) != 1)) {
                // line 52
                echo "                        <li class=\"page-item\"><a class=\"page-link\" style=\"background-color: rgb(130, 106, 251);color:#fff;\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_excedent", ["page" => (($context["page"] ?? null) - 1), "nbre" => ($context["nbre"] ?? null)]), "html", null, true);
                echo "\">Previous</a></li>
                    ";
            }
            // line 54
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["nbrePage"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 55
                echo "                        <li class=\"page-item\"><a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_excedent", ["page" => $context["i"], "nbre" => ($context["nbre"] ?? null)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                    ";
            if ((($context["page"] ?? null) != ($context["nbre"] ?? null))) {
                // line 58
                echo "                        <li class=\"page-item\"><a class=\"page-link\" style=\"background-color: rgb(130, 106, 251);color:#fff;\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_excedent", ["page" => (($context["page"] ?? null) + 1), "nbre" => ($context["nbre"] ?? null)]), "html", null, true);
                echo "\">Next</a></li>
                    ";
            }
            // line 60
            echo "                </ul>
            </nav>
        </div>
    ";
        }
    }

    // line 65
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "    La liste des Excedent
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ressources/excedent/index.html.twig";
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
        return array (  200 => 66,  196 => 65,  188 => 60,  182 => 58,  179 => 57,  168 => 55,  163 => 54,  157 => 52,  155 => 51,  150 => 48,  148 => 47,  142 => 43,  133 => 40,  129 => 39,  125 => 37,  116 => 35,  112 => 34,  108 => 33,  104 => 32,  100 => 31,  96 => 30,  92 => 29,  89 => 28,  85 => 27,  63 => 8,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ressources/excedent/index.html.twig", "C:\\xampp\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\ressources\\excedent\\index.html.twig");
    }
}
