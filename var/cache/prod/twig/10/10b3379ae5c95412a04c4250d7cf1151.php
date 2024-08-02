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

/* impot_cfnpb/formulaire.html.twig */
class __TwigTemplate_98b13a1c2ffb9ace7154cfea6acf4a96 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("template.html.twig", "impot_cfnpb/formulaire.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <div class=\"row\">
        <div class=\"col\">";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "valeurVenale", [], "any", false, false, false, 7), 'row');
        echo "</div>
        <div class=\"col\">";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 8), 'row');
        echo "</div>
    </div>
    <div class=\"row\">
        <div class=\"col\">";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "montant", [], "any", false, false, false, 11), 'row');
        echo "</div>
    </div>
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
";
    }

    // line 15
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <script>
        \$(document).ready(function() {
            \$('.select2').select2();
        });
    </script>
";
    }

    // line 23
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 25
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    Ajoute de l'Impôt CFNPB
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "impot_cfnpb/formulaire.html.twig";
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
        return array (  103 => 26,  99 => 25,  93 => 23,  84 => 16,  80 => 15,  74 => 13,  69 => 11,  63 => 8,  59 => 7,  53 => 5,  49 => 4,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "impot_cfnpb/formulaire.html.twig", "C:\\xampp\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\impot_cfnpb\\formulaire.html.twig");
    }
}
