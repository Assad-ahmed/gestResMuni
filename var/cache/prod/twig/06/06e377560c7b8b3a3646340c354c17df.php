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
class __TwigTemplate_0bd89e86ac52be39a62ba21719e12ada extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "contributeur/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello Contributeur!";
    }

    // line 5
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "        Liste des Contributeurs
    ";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "     <div class=\"container\">
         <div class=\"d-grid gap-7 col-2 mx-xxl-6\">
             <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_contributeur");
        echo "\" class=\"btn bg-info\" ><strong>AjouterContributeur</strong></a>
         </div>
     </div>
 <div class=\" m-3\">
        <table class=\"table table-bordered\">
            <thead class=\"text-center px-sm-0\" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
            <tr>
                <th scope=\"col\">Nom </th>
                <th scope=\"col\">prenom</th>
                <th scope=\"col\">Adresse</th>
                <th scope=\"col\">Téléphone</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">MontantJ</th>
                <th scope=\"col\">MontantM</th>
                <th scope=\"col\">MontantA</th>
                <th scope=\"col\">Sites</th>
                <th scope=\"col\">Details</th>
                <th scope=\"col\">Modifier</th>
                <th scope=\"col\">Supprimer</th>
            </tr>
            </thead>
            <tbody class=\"text-center\">
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contributeurs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["contributeur"]) {
            // line 35
            echo "                <tr>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "nom", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "prenom", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "adresse", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "telephone", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "datePaye", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "montantJournalier", [], "any", false, false, false, 41), "html", null, true);
            echo "FCFA</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "montantMensuel", [], "any", false, false, false, 42), "html", null, true);
            echo "FCFA</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contributeur"], "montantAnnuel", [], "any", false, false, false, 43), "html", null, true);
            echo "FCFA</td>
                    <td>";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["contributeur"], "sites", [], "any", false, false, false, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
                // line 45
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site"], "nom", [], "any", false, false, false, 45), "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                    </td>
                    <td><a href=\"#\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                    <td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_contributeur", ["id" => twig_get_attribute($this->env, $this->source, $context["contributeur"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\" class=\"btn btn-primary \"> <i class=\"fa-solid fa-user-pen\"></i></a></td>
                    <td><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_contributeur", ["id" => twig_get_attribute($this->env, $this->source, $context["contributeur"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" class=\"btn btn-danger \"><i class=\"fa-solid fa-trash\"></i></a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contributeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </tbody>
        </table>
 </div>
        ";
        // line 56
        if (($context["isPaginated"] ?? null)) {
            // line 57
            echo "            <div class=\"row mt-3\">
                <nav aria-label=\"Page navigation example\">
                    <ul class=\"pagination\">
                        ";
            // line 60
            if ((($context["page"] ?? null) != 1)) {
                // line 61
                echo "                            <li class=\"page-item\"><a class=\"page-link\" style=\"background-color: rgb(130, 106, 251);color:#fff;\"href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_contributeur", ["page" => (($context["page"] ?? null) - 1), "nbre" => ($context["nbre"] ?? null)]), "html", null, true);
                echo "\">Previous</a></li>
                        ";
            }
            // line 63
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["nbrePage"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 64
                echo "                            <li class=\"page-item\"><a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_contributeur", ["page" => $context["i"], "nbre" => ($context["nbre"] ?? null)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                        ";
            if ((($context["page"] ?? null) != ($context["nbre"] ?? null))) {
                // line 67
                echo "                            <li class=\"page-item\"><a class=\"page-link\" style=\"background-color: rgb(130, 106, 251);color:#fff;\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_contributeur", ["page" => (($context["page"] ?? null) + 1), "nbre" => ($context["nbre"] ?? null)]), "html", null, true);
                echo "\">Next</a></li>
                        ";
            }
            // line 69
            echo "                    </ul>
                </nav>
            </div>
        ";
        }
        // line 73
        echo "    ";
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
        return array (  217 => 73,  211 => 69,  205 => 67,  202 => 66,  191 => 64,  186 => 63,  180 => 61,  178 => 60,  173 => 57,  171 => 56,  166 => 53,  157 => 50,  153 => 49,  149 => 47,  140 => 45,  136 => 44,  132 => 43,  128 => 42,  124 => 41,  120 => 40,  116 => 39,  112 => 38,  108 => 37,  104 => 36,  101 => 35,  97 => 34,  72 => 12,  68 => 10,  64 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contributeur/index.html.twig", "C:\\xampp\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\contributeur\\index.html.twig");
    }
}
