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

/* impot_tom/index.html.twig */
class __TwigTemplate_731bfeb7ff1b57e414b0325e882523af extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "impot_tom/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Impot Tom!";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
    <div class=\" m-3\">
        <table class=\"table table-bordered\">
            <thead class=\"text-center \" style=\"background-color: rgb(130, 106, 251);color:#fff;\">
            <tr>
                <th scope=\"col\">Propriete</th>
                <th scope=\"col\">Region</th>
                <th scope=\"col\">Valeur Locative</th>
                <th scope=\"col\">Taux</th>
                <th scope=\"col\">Montant</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Details</th>
                <th scope=\"col\">Modifier</th>
                <th scope=\"col\">Supprimer</th>
            </tr>
            </thead>
            <tbody class=\"text-center\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["impotTOMs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["impotTOM"]) {
            // line 25
            echo "                <tr>

                    <td>";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["impotTOM"], "propriete", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["propriete"]) {
                // line 28
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propriete"], "nom", [], "any", false, false, false, 28), "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propriete'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                    </td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["impotTOM"], "region", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["impotTOM"], "valeurLocative", [], "any", false, false, false, 32), "html", null, true);
            echo "FCFA</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["impotTOM"], "taux", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["impotTOM"], "montant", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["impotTOM"], "date", [], "any", false, false, false, 35), "d/m/y "), "html", null, true);
            echo "</td>
                    <td><a href=\"#\" class=\"btn btn-primary mt-2\"><i class=\"fa-solid fa-circle-info\"></i></a></td>
                    <td><a href=#\" class=\"btn btn-primary mt-2\"> <i class=\"fa-solid fa-user-pen\"></i></a></td>
                    <td><a href=\"#\" class=\"btn btn-danger mt-2\"><i class=\"fa-solid fa-trash\"></i></a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['impotTOM'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </tbody>
        </table>
    </div>

    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calculer_somme_impots_cfpb");
        echo "\">Montant Cumule </a>
";
    }

    // line 47
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "    Type d' Impot TOM
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "impot_tom/index.html.twig";
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
        return array (  146 => 48,  142 => 47,  136 => 45,  130 => 41,  118 => 35,  114 => 34,  110 => 33,  106 => 32,  102 => 31,  99 => 30,  90 => 28,  86 => 27,  82 => 25,  78 => 24,  59 => 7,  55 => 6,  48 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "impot_tom/index.html.twig", "C:\\xampp\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\impot_tom\\index.html.twig");
    }
}
