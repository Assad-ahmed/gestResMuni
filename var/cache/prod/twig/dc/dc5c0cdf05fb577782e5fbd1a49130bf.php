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

/* ressources/ristourne/index.html.twig */
class __TwigTemplate_36d2348030cad3995202b150113005e9 extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "ressources/ristourne/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Ristourne!";
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_ristourne");
        echo "\" class=\"btn bg-info\" ><strong>AjouterRistourne</strong></a>
        </div>
    </div>
    <div class=\" m-3\">
        <table class=\"table table-bordered\">
            <thead class=\"text-center \" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
            <tr>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Montant Journalier</th>
                <th scope=\"col\">Montant Mensuel</th>
                <th scope=\"col\">Montant Annuel</th>
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
        $context['_seq'] = twig_ensure_traversable(($context["ristournes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ristourne"]) {
            // line 28
            echo "                <tr>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ristourne"], "nom", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ristourne"], "date", [], "any", false, false, false, 30), "d/m/y "), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ristourne"], "montantJournalier", [], "any", false, false, false, 31), "html", null, true);
            echo "FCFA</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ristourne"], "montantMensuel", [], "any", false, false, false, 32), "html", null, true);
            echo "FCFA</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ristourne"], "montantAnnuel", [], "any", false, false, false, 33), "html", null, true);
            echo "FCFA</td>
                    <td>";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ristourne"], "sites", [], "any", false, false, false, 34));
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_ristourne", ["id" => twig_get_attribute($this->env, $this->source, $context["ristourne"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" class=\"btn btn-primary mt-2\"> <i class=\"fa-solid fa-user-pen\"></i></a></td>
                    <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_ristourne", ["id" => twig_get_attribute($this->env, $this->source, $context["ristourne"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"btn btn-danger mt-2\"><i class=\"fa-solid fa-trash\"></i></a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ristourne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </tbody>
        </table>
    </div>
    ";
        // line 46
        if (($context["isPaginated"] ?? null)) {
            // line 47
            echo "        <div class=\"row mt-3\">
            <nav aria-label=\"Page navigation example\">
                <ul class=\"pagination\">
                    ";
            // line 50
            if ((($context["page"] ?? null) != 1)) {
                // line 51
                echo "                        <li class=\"page-item\"><a class=\"page-link\"  style=\"background-color: rgb(130, 106, 251);color:#fff;\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_ristourne", ["page" => (($context["page"] ?? null) - 1), "nbre" => ($context["nbre"] ?? null)]), "html", null, true);
                echo "\">Previous</a></li>
                    ";
            }
            // line 53
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["nbrePage"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 54
                echo "                        <li class=\"page-item\"><a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_ristourne", ["page" => $context["i"], "nbre" => ($context["nbre"] ?? null)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                    ";
            if ((($context["page"] ?? null) != ($context["nbre"] ?? null))) {
                // line 57
                echo "                        <li class=\"page-item\"><a class=\"page-link\" style=\"background-color: rgb(130, 106, 251);color:#fff;\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_ristourne", ["page" => (($context["page"] ?? null) + 1), "nbre" => ($context["nbre"] ?? null)]), "html", null, true);
                echo "\">Next</a></li>
                    ";
            }
            // line 59
            echo "                </ul>
            </nav>
        </div>
    ";
        }
    }

    // line 64
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "    La liste des ristournes
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ressources/ristourne/index.html.twig";
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
        return array (  199 => 65,  195 => 64,  187 => 59,  181 => 57,  178 => 56,  167 => 54,  162 => 53,  156 => 51,  154 => 50,  149 => 47,  147 => 46,  142 => 43,  133 => 40,  129 => 39,  125 => 37,  116 => 35,  112 => 34,  108 => 33,  104 => 32,  100 => 31,  96 => 30,  92 => 29,  89 => 28,  85 => 27,  63 => 8,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ressources/ristourne/index.html.twig", "C:\\xampp\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\ressources\\ristourne\\index.html.twig");
    }
}
