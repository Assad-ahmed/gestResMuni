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

/* type_impots/index.html.twig */
class __TwigTemplate_60b9f58d49eb8ef1ebcf3dcf0f4867d2 extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "type_impots/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Typeimpots!";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <div class=\"row m-2\">
        <div class=\"col-sm-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">Impôts Assis sur Valeur Foncière</h3>
                    <p class=\"fa-2x\">Montant Cumule: </p>
                    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impotAssiValeur_index");
        echo "\" class=\"btn btn-primary\"><i class='bx bx-detail'></i>Detail</a>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">Contribution Patente</h3>
                    <p><h5>Montant Cumule:</h5></p>
                    <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impotAssiValeur_index");
        echo "\" class=\"btn btn-primary\"><i class='bx bx-detail'></i>Detail</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row m-2\">
        <div class=\"col-sm-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">Impôt Capitation</h3>
                    <p> <h5>Montant Cumule:</h5></p>
                    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impotAssiValeur_index");
        echo "\" class=\"btn btn-primary\"><i class='bx bx-detail'></i>Detail</a>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\"> Impôt indirect</h3>
                    <p><h5>Montant Cumule:</h5></p>
                    <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impotAssiValeur_index");
        echo "\" class=\"btn btn-primary\"><i class='bx bx-detail'></i>Detail</a>
                </div>
            </div>
        </div>
    </div>

";
    }

    // line 49
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "     Recettes Fiscales
 ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "type_impots/index.html.twig";
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
        return array (  120 => 50,  116 => 49,  105 => 42,  93 => 33,  79 => 22,  67 => 13,  59 => 7,  55 => 6,  48 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "type_impots/index.html.twig", "C:\\xampp\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\type_impots\\index.html.twig");
    }
}
