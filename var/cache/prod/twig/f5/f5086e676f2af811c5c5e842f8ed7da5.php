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

/* ressource/show.html.twig */
class __TwigTemplate_a308ddffa02a44bdb733a14c17d6ab9c extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "ressource/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Détails de la Ressource ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ressource"] ?? null), "nom", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Détails de la Ressource ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ressource"] ?? null), "nom", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

    <p><strong>Nom :</strong> ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ressource"] ?? null), "nom", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>


    <h2>Types d'Impôts Associés :</h2>
    <ul>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["taxTypes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["taxType"]) {
            // line 14
            echo "            <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taxType"], "nom", [], "any", false, false, false, 14), "html", null, true);
            echo "</li>
            ";
            // line 16
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </ul>

    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ressource/show.html.twig";
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
        return array (  88 => 17,  82 => 16,  77 => 14,  73 => 13,  65 => 8,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ressource/show.html.twig", "C:\\xampp\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\ressource\\show.html.twig");
    }
}
