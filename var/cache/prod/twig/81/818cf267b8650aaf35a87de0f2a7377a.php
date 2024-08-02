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

/* impot_cfpb/index.html.twig */
class __TwigTemplate_34875dc2275df8b8864b15b4e74248d4 extends Template
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
        // line 2
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("template.html.twig", "impot_cfpb/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "recette Non Fisscale!";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <div class=\"container\">
        <div class=\"d-grid gap-7 col-2 mx-xxl-6\">
            <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impot_cfpb_calculer");
        echo "\" class=\"btn bg-info\" ><strong>Ajouter ImpotCFPB</strong></a>
        </div>
    </div>
    <div class=\" m-3\">
        <table class=\"table table-bordered\">
            <thead class=\"text-center \" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
            <tr>
                <th scope=\"col\">Type Batiment</th>
                <th scope=\"col\">Valeur Locative</th>
                <th scope=\"col\">Montant</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Details</th>
                <th scope=\"col\">Modifier</th>
                <th scope=\"col\">Supprimer</th>
            </tr>
            </thead>
            <tbody class=\"text-center\">
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["impotCFPBs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["impotCFPB"]) {
            // line 27
            echo "                <tr>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["impotCFPB"], "typeBatiment", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["impotCFPB"], "valeurLocative", [], "any", false, false, false, 29), "html", null, true);
            echo "FCFA</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["impotCFPB"], "montant", [], "any", false, false, false, 30), "html", null, true);
            echo "FCFA</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["impotCFPB"], "date", [], "any", false, false, false, 31), "d/m/y "), "html", null, true);
            echo "</td>
                    <td><a href=\"#\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                    <td><a href=#\" class=\"btn btn-primary mt-2\"> <i class=\"fa-solid fa-user-pen\"></i></a></td>
                    <td><a href=\"#\" class=\"btn btn-danger mt-2\"><i class=\"fa-solid fa-trash\"></i></a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['impotCFPB'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </tbody>
        </table>
    </div>

<a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calculer_somme_impots_cfpb");
        echo "\">Montant Cumule </a>
";
    }

    // line 43
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "   Type d' Impot CFPB
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "impot_cfpb/index.html.twig";
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
        return array (  130 => 44,  126 => 43,  120 => 41,  114 => 37,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  87 => 27,  83 => 26,  63 => 9,  59 => 7,  55 => 6,  48 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "impot_cfpb/index.html.twig", "C:\\xampp\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\impot_cfpb\\index.html.twig");
    }
}
