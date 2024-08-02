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

/* agent_collecte/index.html.twig */
class __TwigTemplate_e22b9605490ffcdf6aa5125e96ff463b extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "agent_collecte/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello AgentCollecteController!";
    }

    // line 5
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    Liste des Agents
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <div class=\"container\">
        <div class=\"d-grid gap-7 col-2 mx-xxl-6\">
            <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_agent");
        echo "\" class=\"btn bg-info\" ><strong>Ajouter Agent</strong></a>
        </div>
    </div>
<div class=\" m-3\">
    <table class=\"table table-bordered\">
        <thead class=\"text-center\" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
        <tr>
            <th scope=\"col\">Nom </th>
            <th scope=\"col\">prenom</th>
            <th scope=\"col\">Téléphone</th>
            <th scope=\"col\">Date</th>
            <th scope=\"col\">MontantJ</th>
            <th scope=\"col\">MontantM</th>
            <th scope=\"col\">Montant</th>
            <th scope=\"col\">Sites</th>
            <th scope=\"col\">Details</th>
            <th scope=\"col\">Modifier</th>
            <th scope=\"col\">Supprimer</th>
        </tr>
        </thead>
        <tbody class=\"text-center\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["agentCollectes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["agentCollecte"]) {
            // line 34
            echo "            <tr>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agentCollecte"], "nom", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agentCollecte"], "prenom", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agentCollecte"], "telephone", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agentCollecte"], "date", [], "any", false, false, false, 38), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agentCollecte"], "montantJournalier", [], "any", false, false, false, 39), "html", null, true);
            echo "FCFA</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agentCollecte"], "montantMensuel", [], "any", false, false, false, 40), "html", null, true);
            echo "FCFA</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agentCollecte"], "montantAnnuel", [], "any", false, false, false, 41), "html", null, true);
            echo "FCFA</td>
                <td>";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["agentCollecte"], "sites", [], "any", false, false, false, 42));
            foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
                // line 43
                echo "                      ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["site"], "nom", [], "any", false, false, false, 43), "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                </td>
                <td><a href=\"#\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_agent", ["id" => twig_get_attribute($this->env, $this->source, $context["agentCollecte"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" class=\"btn btn-primary \"> <i class=\"fa-solid fa-user-pen\"></i></a></td>
                 <td><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_agent", ["id" => twig_get_attribute($this->env, $this->source, $context["agentCollecte"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"btn btn-danger \"><i class=\"fa-solid fa-trash\"></i></a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agentCollecte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>
</div>
    ";
        // line 54
        if (($context["isPaginated"] ?? null)) {
            // line 55
            echo "        <div class=\"row mt-3\">
            <nav aria-label=\"Page navigation example\">
                <ul class=\"pagination\">
                    ";
            // line 58
            if ((($context["page"] ?? null) != 1)) {
                // line 59
                echo "                        <li class=\"page-item\"><a class=\"page-link\" style=\"background-color: rgb(130, 106, 251);color:#fff;\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_agent", ["page" => (($context["page"] ?? null) - 1), "nbre" => ($context["nbre"] ?? null)]), "html", null, true);
                echo "\">Previous</a></li>
                    ";
            }
            // line 61
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["nbrePage"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 62
                echo "                        <li class=\"page-item\"><a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_agent", ["page" => $context["i"], "nbre" => ($context["nbre"] ?? null)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                    ";
            if ((($context["page"] ?? null) != ($context["nbre"] ?? null))) {
                // line 65
                echo "                        <li class=\"page-item\"><a class=\"page-link\" style=\"background-color: rgb(130, 106, 251);color:#fff;\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_agent", ["page" => (($context["page"] ?? null) + 1), "nbre" => ($context["nbre"] ?? null)]), "html", null, true);
                echo "\">Next</a></li>
                    ";
            }
            // line 67
            echo "                </ul>
            </nav>
        </div>
    ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "agent_collecte/index.html.twig";
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
        return array (  206 => 67,  200 => 65,  197 => 64,  186 => 62,  181 => 61,  175 => 59,  173 => 58,  168 => 55,  166 => 54,  161 => 51,  152 => 48,  148 => 47,  144 => 45,  135 => 43,  131 => 42,  127 => 41,  123 => 40,  119 => 39,  115 => 38,  111 => 37,  107 => 36,  103 => 35,  100 => 34,  96 => 33,  72 => 12,  68 => 10,  64 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "agent_collecte/index.html.twig", "C:\\xampp\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\agent_collecte\\index.html.twig");
    }
}
