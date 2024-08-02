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

/* home/home.html.twig */
class __TwigTemplate_ef4691090954217697abdce2ed826296 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Page d'accueil</title>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">

</head>
<body>
    <header>
        <div class=\"navbar navbar-dark bg-primary shadow-sm\">
            <div class=\"container\">
                <a href=\"#\" class=\"navbar-brand d-flex align-items-center\">
                    <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/images.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"50\" height=\"50\">
                    <strong class=\"m-3\">Mor Dieng</strong>
                </a>
                <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"navbar-toggler d-print-none\"> Connexion</a>
            </div>
        </div>
    </header>
    <main>

        <section class=\"py-6 text-center container-xl text-bg-primary m-5  \">
            <h1>Tableau de bord Taxe Municipale : </h1>
            <div class=\"row \">
                <div class=\"col-xl-4 col-md-6\">
                    <div class=\"card bg-info text-white mb-4\">
                        <div class=\"card-body\">Montant Journalier</div>
                        <div class=\"card-footer d-flex align-items-center justify-content-between\">
                            <a class=\"small text-white stretched-link\" href=\"#\">View Details</a>
                            <div class=\"small text-white\"><svg class=\"svg-inline--fa fa-angle-right fa-w-8\" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"angle-right\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 256 512\" data-fa-i2svg=\"\"><path fill=\"currentColor\" d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"></path></svg><!-- <i class=\"fas fa-angle-right\"></i> Font Awesome fontawesome.com --></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-md-6\">
                    <div class=\"card bg-warning text-white mb-4\">
                        <div class=\"card-body\">Montant Mensuel</div>
                        <div class=\"card-footer d-flex align-items-center justify-content-between\">
                            <a class=\"small text-white stretched-link\" href=\"#\">View Details</a>
                            <div class=\"small text-white\"><svg class=\"svg-inline--fa fa-angle-right fa-w-8\" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"angle-right\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 256 512\" data-fa-i2svg=\"\"><path fill=\"currentColor\" d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"></path></svg><!-- <i class=\"fas fa-angle-right\"></i> Font Awesome fontawesome.com --></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-md-6\">
                    <div class=\"card bg-success text-white mb-4\">
                        <div class=\"card-body\">Montant annuel</div>
                        <div class=\"card-footer d-flex align-items-center justify-content-between\">
                            <a class=\"small text-white stretched-link\" href=\"#\">View Details</a>
                            <div class=\"small text-white\"><svg class=\"svg-inline--fa fa-angle-right fa-w-8\" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"angle-right\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 256 512\" data-fa-i2svg=\"\"><path fill=\"currentColor\" d=\"M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z\"></path></svg><!-- <i class=\"fas fa-angle-right\"></i> Font Awesome fontawesome.com --></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class=\"album py-5 bg-light\">
            <div class=\"container\">
                <div class=\"row row-cols-1 row-cols-md-4 g-5\">
                    <div class=\"col\">
                        <div class=\"card h-100\">
                            <div class=\"card-header text-center text-dark-50 text-bg-primary border-success\">Gestion Des Ressources Propres</div>
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Ressource Propre</h5>
                                <p class=\"card-text\">Ce module contient ce qui
                                    est relatif aux ressources
                                    propres.</p>
                            </div>
                            <div class=\"card-footer bg-light text-center\">
                                <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("impotAssiValeur_index");
        echo "\" class=\"btn btn-primary\">VOIR</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col\">
                        <div class=\"card h-100\">
                            <div class=\"card-header text-dark-50 text-center text-bg-primary border-success\">Gestion Des Sites de collectes</div>
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Site de collecte</h5>
                                <p class=\"card-text\">Ce module contient ce qui est relatif aux sites de collectes.</p>
                            </div>
                            <div class=\"card-footer bg-light text-center\">
                                <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_site_collecte");
        echo "\" class=\"btn btn-primary\">VOIR</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col\">
                        <div class=\"card h-100\">
                            <div class=\"card-header text-dark-50 text-center text-bg-primary border-success\">Gestion Des Agents  Collectes</div>
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Agent de collecte</h5>
                                <p class=\"card-text\">Ce module contient ce qui est relatif aux contributeurs.</p>
                            </div>
                            <div class=\"card-footer bg-light text-center\">
                                <a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_agent");
        echo "\" class=\"btn btn-primary\">VOIR</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col\">
                        <div class=\"card h-100\">
                            <div class=\"card-header text-dark-50 text-center text-bg-primary border-success\">Gestion Des Contributeurs</div>
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Contributeur</h5>
                                <p class=\"card-text\"> Ce module contient ce qui est relatif aux agents de collectes.</p>
                            </div>
                            <div class=\"card-footer bg-light text-center\">
                                <a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_contributeur");
        echo "\" class=\"btn btn-primary\">VOIR</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer class=\"text-white text-center py-3 bg-primary\">
        <div class=\"container\">
            <p class=\"mb-1\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"> © Copyright@gmail.com&nbsp;!</font></font></p>
        </div>
    </footer>
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/home.html.twig";
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
        return array (  184 => 125,  167 => 111,  151 => 98,  135 => 85,  119 => 72,  64 => 20,  58 => 17,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/home.html.twig", "C:\\xampp\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\home\\home.html.twig");
    }
}
