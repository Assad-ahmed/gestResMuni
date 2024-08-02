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

/* template.html.twig */
class __TwigTemplate_d08ca0e9726ef4eda2a91ed1beadfc21 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'titre' => [$this, 'block_titre'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'PageTitre' => [$this, 'block_PageTitre'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <title>";
        // line 9
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/@fortawesome/fontawesome-free/css/fontawesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    <script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>
</head>
<body class=\"sb-nav-fixed\">
<nav class=\"sb-topnav navbar navbar-expand navbar-dark text-bg-primary\">
    <!-- Navbar Brand-->
    <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/images.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"50\" height=\"50\">
    <a class=\"navbar-brand ps-3\" href=\"index.htm\">Mor Dieng</a>
    <!-- Sidebar Toggle-->
    <button class=\"btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0\" id=\"sidebarToggle\" href=\"#!\"><i class=\"fas fa-bars\"></i></button>
    <!-- Navbar Search-->
    <form class=\"d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0\">
        <div class=\"input-group\">
            <input class=\"form-control\" type=\"text\" placeholder=\"Search for...\" aria-label=\"Search for...\" aria-describedby=\"btnNavbarSearch\" />
            <button class=\"btn btn-primary\" id=\"btnNavbarSearch\" type=\"button\"><i class=\"fas fa-search\"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class=\"navbar-nav ms-auto ms-md-0 me-3 me-lg-4\">
        <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fas fa-user fa-fw\"></i></a>
            <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                <li><a class=\"dropdown-item\" href=\"#\">Se connecter</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">M'inscrire</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Déconnecter</a></li>
            </ul>
        </li>
    </ul>
</nav>
<div id=\"layoutSidenav\">
    <div id=\"layoutSidenav_nav\">
        <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
            <div class=\"sb-sidenav-menu\">
                <div class=\"nav\">
                    <div class=\"sb-sidenav-menu-heading\">Core</div>
                    <a class=\"nav-link\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                        <div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                        Page d'accueil
                    </a>

                    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsePages\" aria-expanded=\"false\" aria-controls=\"collapsePages\">
                        <div class=\"sb-nav-link-icon\"><i class=\"fas fa-book-open\"></i></div>
                        Ressource propre
                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                    </a>
                    <div class=\"collapse\" id=\"collapsePages\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#sidenavAccordion\">
                        <nav class=\"sb-sidenav-menu-nested nav accordion\" id=\"sidenavAccordionPages\">
                                <a class=\"nav-link\" href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("typeImpots_index");
        echo "\">Recettes fiscales</a>
                                <a class=\"nav-link\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_recette_non_fiscale");
        echo "\">Recette non fiscale</a>
                                <a class=\"nav-link\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_ristourne");
        echo "\">Ristourne</a>
                                <a class=\"nav-link\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_excedent");
        echo "\">Excedent</a>
                        </nav>
                    </div>
                    <div class=\"sb-sidenav-menu-heading\">Interface</div>
                    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseLayouts\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\">
                        <div class=\"sb-nav-link-icon\"><i class=\"fas fa-columns\"></i></div>
                        Agents
                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                    </a>
                    <div class=\"collapse\" id=\"collapseLayouts\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordion\">
                        <nav class=\"sb-sidenav-menu-nested nav\">
                            <a class=\"nav-link\" href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_agent");
        echo "\">Nouvel Agent</a>
                            <a class=\"nav-link\" href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_agent");
        echo "\">liste d'agents</a>
                        </nav>
                    </div>
                    <div class=\"sb-sidenav-menu-heading\">Interface</div>
                    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseLayouts\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\">
                        <div class=\"sb-nav-link-icon\"><i class=\"fas fa-columns\"></i></div>
                        Contributeur
                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                    </a>
                    <div class=\"collapse\" id=\"collapseLayouts\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordion\">
                        <nav class=\"sb-sidenav-menu-nested nav\">
                            <a class=\"nav-link\" href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_contributeur");
        echo "\">Creer contributeur</a>
                            <a class=\"nav-link\" href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_contributeur");
        echo "\">Liste contributeur</a>
                        </nav>
                    </div>
                    <div class=\"sb-sidenav-menu-heading\">Interface</div>
                    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseLayouts\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\">
                        <div class=\"sb-nav-link-icon\"><i class=\"fas fa-columns\"></i></div>
                        Site
                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                    </a>
                    <div class=\"collapse\" id=\"collapseLayouts\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordion\">
                        <nav class=\"sb-sidenav-menu-nested nav\">
                            <a class=\"nav-link\" href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_site_collecte");
        echo "\"> Creer site</a>
                            <a class=\"nav-link\" href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_site_collecte");
        echo "\">Liste site</a>
                        </nav>
                    </div>
                    <div class=\"sb-sidenav-menu-heading\">Addons</div>
                    <a class=\"nav-link\" href=\"tables.html\">
                        <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                        Tables
                    </a>
                </div>
            </div>

            <div class=\"sb-sidenav-footer\">
                <div class=\"small\">Logged in as:</div>
                ";
        // line 113
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 113)) {
            // line 114
            echo "                  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 114), "email", [], "any", false, false, false, 114), "html", null, true);
            echo "
                  ";
        } else {
            // line 116
            echo "                   Ananymous
                ";
        }
        // line 118
        echo "            </div>

        </nav>
    </div>
    <div id=\"layoutSidenav_content\">
        <main>
            <div class=\"container-fluid px-0\">
                <h1 class=\"mt-4\">
                    ";
        // line 126
        $this->displayBlock('PageTitre', $context, $blocks);
        // line 129
        echo "                </h1>

                <div class=\"card mb-4\">
                    <div class=\"card-body\">";
        // line 132
        $this->displayBlock('body', $context, $blocks);
        // line 135
        echo "                    </div>
                </div>
                <div style=\"height: 100vh\"></div>
                <div class=\"card mb-4\"><div class=\"card-body\">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
            </div>
        </main>
        <footer class=\"py-4 bg-light mt-auto\">
            <div class=\"container-fluid px-4\">
                <div class=\"d-flex align-items-center justify-content-between small\">
                    <div class=\"text-muted\">Copyright &copy; Your Website 2023</div>
                    <div>
                        <a href=\"#\">Privacy Policy</a>
                        &middot;
                        <a href=\"#\">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/select2/dist/js/select2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/@fortawesome/fontawesome-free/js/fontawesome.js"), "html", null, true);
        echo "\"></script>
";
        // line 160
        $this->displayBlock('javascripts', $context, $blocks);
        // line 162
        echo "<script src=\"https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js\" crossorigin=\"anonymous\"></script>
<script src=\"js/datatables-simple-demo.js\"></script>
</body>
</html>
";
    }

    // line 9
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Static Navigation - SB Admin";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
    }

    // line 126
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        echo "                    Static Navigation
                    ";
    }

    // line 132
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        echo "                            tamplate body
                        ";
    }

    // line 160
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "template.html.twig";
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
        return array (  319 => 160,  314 => 133,  310 => 132,  305 => 127,  301 => 126,  297 => 14,  293 => 13,  286 => 9,  278 => 162,  276 => 160,  272 => 159,  268 => 158,  264 => 157,  260 => 156,  237 => 135,  235 => 132,  230 => 129,  228 => 126,  218 => 118,  214 => 116,  208 => 114,  206 => 113,  190 => 100,  186 => 99,  172 => 88,  168 => 87,  154 => 76,  150 => 75,  136 => 64,  132 => 63,  128 => 62,  124 => 61,  109 => 49,  77 => 20,  70 => 15,  68 => 13,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "template.html.twig", "C:\\xampp\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\template.html.twig");
    }
}
