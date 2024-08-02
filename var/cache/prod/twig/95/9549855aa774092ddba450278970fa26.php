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

/* impot_assi_valeur/show.html.twig */
class __TwigTemplate_671152b82db0b8b2eff47a9bbe7271fb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("template.html.twig", "impot_assi_valeur/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h1>Détails de Type d'impot ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["impotAssiValeur"] ?? null), "typeImpotAssi", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>

    <p><strong>Nom :</strong> ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["impotAssiValeur"] ?? null), "typeImpotAssi", [], "any", false, false, false, 6), "html", null, true);
        echo "</p>


    <h2>Types d'Impôts Associés :</h2>
    <ul>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typeimpots"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["typeimpot"]) {
            // line 12
            echo "            <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["typeimpots"] ?? null), "nom", [], "any", false, false, false, 12), "html", null, true);
            echo "</li>
            ";
            // line 14
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeimpot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </ul>

    ";
    }

    // line 20
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "impot_assi_valeur/show.html.twig";
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
        return array (  90 => 21,  86 => 20,  80 => 15,  74 => 14,  69 => 12,  65 => 11,  57 => 6,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "impot_assi_valeur/show.html.twig", "C:\\xampp\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\impot_assi_valeur\\show.html.twig");
    }
}
