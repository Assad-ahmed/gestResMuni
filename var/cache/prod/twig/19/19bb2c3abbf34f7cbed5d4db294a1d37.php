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

/* recette_fiscale/index.html.twig */
class __TwigTemplate_e53d64aad468ccfa7998747d7c2d6520 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("template.html.twig", "recette_fiscale/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  <div class=\"row m-3\">
    <div class=\"col-sm-6\">
      <div class=\"card\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">Impot Assis sur Valeur Fonciere</h5>
          <p class=\"card-text\">Montant Cumule</p>
          <a href=\"#\" class=\"btn btn-primary\">Details</a>
        </div>
      </div>
    </div>
    <div class=\"col-sm-6\">
      <div class=\"card\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">Contribution Pantante</h5>
          <p class=\"card-text\">Montant Cumule</p>
          <a href=\"#\" class=\"btn btn-primary\">Details</a>
        </div>
      </div>
    </div>

    <div class=\"col-sm-6 m-2\">
      <div class=\"card \">
        <div class=\"card-body\">
          <h5 class=\"card-title\">Impot Capitation</h5>
          <p class=\"card-text\">Montant Cumule</p>
          <a href=\"#\" class=\"btn btn-primary\">Details</a>
        </div>
      </div>
    </div>
  </div>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "recette_fiscale/index.html.twig";
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
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "recette_fiscale/index.html.twig", "C:\\xampp\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\recette_fiscale\\index.html.twig");
    }
}
