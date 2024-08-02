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

/* impot_assi_valeur/index.html.twig */
class __TwigTemplate_348aa3d18797ee64ea4838f8d5775c65 extends Template
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
        $this->parent = $this->loadTemplate("template.html.twig", "impot_assi_valeur/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Liste des impots";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
        <div class=\"  list-group m-3 ms-auto\"  style=\"width: 90%;\">
            <a href=\"#\" class=\"list-group-item list-group-item-action active m-lg-2  \" style=\"width: 90%\" aria-current=\"true\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h4 class=\"mb-1\">La contribution foncière des propriétés bâties (CFPB)</h4>
                </div>
                <p class=\"mb-1 fs-4\">Montant Cumule : </p>

            </a>

            <a href=\"#\" class=\"list-group-item list-group-item-action bg-warning m-lg-2\" style=\"width: 90%\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h4 class=\"mb-1\">La contribution foncière des propriétés non bâties (CFPNB)</h4>
                </div>
                <p class=\"mb-1 fs-4\">Montant Cumule :</p>

            </a>
            <a href=\"#\" class=\"list-group-item list-group-item-action bg-info m-lg-2\" style=\"width: 90%\">
                <div class=\"d-flex w-100 justify-content-between\">
                    <h4 class=\"mb-1\">taxe d'enlèvement des ordures ménagères (TOM)</h4>
                </div>
                <p class=\"mb-1 fs-4\">Montant Cumule :</p>

            </a>
        </div>
   <div class=\" d-flex justify-content-center \">
       <a  href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impot_cfpb_calculer");
        echo "\" type=\"button\"  class=\"btn btn-primary btn-lg m-2\">Ajoutet  ImpotCFPB</a>
       <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impot_cfnpb_calculer");
        echo "\" type=\"button\" class=\"btn btn-warning btn-lg m-2\">Ajoutet  ImpotCFNPB</a>
       <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impot_tom_calculer");
        echo "\" type=\"button\" class=\"btn btn-info btn-lg m-2\">Ajoutet  ImpotTOM</a>
    </div>
";
    }

    // line 37
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    Les impôts assis sur la valeur foncière et immobilière
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "impot_assi_valeur/index.html.twig";
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
        return array (  106 => 38,  102 => 37,  95 => 34,  91 => 33,  87 => 32,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "impot_assi_valeur/index.html.twig", "C:\\xampp\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\impot_assi_valeur\\index.html.twig");
    }
}
