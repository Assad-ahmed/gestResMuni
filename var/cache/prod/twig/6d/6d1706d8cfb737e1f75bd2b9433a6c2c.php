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

/* impot_cfnpb/index.html.twig */
class __TwigTemplate_7e22d2b972f43e0d18cc00339d4becb6 extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "impot_cfnpb/index.html.twig", 2);
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
    </div>
    <div class=\" m-3\">
        <table class=\"table table-bordered\">
            <thead class=\"text-center \" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
            <tr>
                <th scope=\"col\">Valeur Venale</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Montant</th>
                <th scope=\"col\">Details</th>
                <th scope=\"col\">Modifier</th>
                <th scope=\"col\">Supprimer</th>
            </tr>
            </thead>
            <tbody class=\"text-center\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["impotCFNPBs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["impotCFNPB"]) {
            // line 23
            echo "                <tr>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["impotCFNPB"], "valeurVenale", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                    <<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["impotCFNPB"], "date", [], "any", false, false, false, 25), "d/m/y "), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["impotCFNPB"], "montant", [], "any", false, false, false, 26), "html", null, true);
            echo "FCFA</td>
                    <td><a href=\"#\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                    <td><a href=#\" class=\"btn btn-primary mt-2\"> <i class=\"fa-solid fa-user-pen\"></i></a></td>
                    <td><a href=\"#\" class=\"btn btn-danger mt-2\"><i class=\"fa-solid fa-trash\"></i></a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['impotCFNPB'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </tbody>
        </table>
    </div>

    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calculer_somme_impots_cfpb");
        echo "\">Montant Cumule </a>
";
    }

    // line 38
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    Type d' Impot CFNPB
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "impot_cfnpb/index.html.twig";
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
        return array (  119 => 39,  115 => 38,  109 => 36,  103 => 32,  91 => 26,  87 => 25,  83 => 24,  80 => 23,  76 => 22,  59 => 7,  55 => 6,  48 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "impot_cfnpb/index.html.twig", "C:\\xampp\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\impot_cfnpb\\index.html.twig");
    }
}
