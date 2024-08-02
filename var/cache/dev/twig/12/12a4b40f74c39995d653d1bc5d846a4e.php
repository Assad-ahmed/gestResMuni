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
class __TwigTemplate_9bc37e23fa958eaccbfb62475c6ca2f1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template.html.twig"));

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
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/card.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/template.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/@fortawesome/fontawesome-free/css/fontawesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/card.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\">
    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "    <script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>
</head>
<body class=\"sb-nav-fixed\">
<nav class=\"sb-topnav navbar navbar-expand navbar-dark text-bg-primary\">
    <!-- Navbar Brand-->
    <img src=\"";
        // line 24
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
                ";
        // line 40
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            // line 41
            echo "                    <li><a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cabinet");
            echo "\">Administration</a></li>
                ";
        }
        // line 43
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 44
            echo "                <li><a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnecter</a></li>
                 ";
        } else {
            // line 46
            echo "                <li><a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter</a></li>
                <li><a class=\"dropdown-item\" href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">M'inscrire</a></li>
                ";
        }
        // line 49
        echo "
            </ul>
        </li>
    </ul>
</nav>
<div id=\"layoutSidenav\">
    ";
        // line 55
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 56
            echo "    <div id=\"layoutSidenav_nav\">
        <nav class=\"sb-sidenav accordion sb-sidenav-dark\"  id=\"sidenavAccordion\">
            <div class=\"sb-sidenav-menu\">
                <div class=\"nav\">
                    <div class=\"sb-sidenav-menu-heading\">Core</div>
                    <a class=\"nav-link\"  href=\"";
            // line 61
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
            // line 73
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("total_impots");
            echo "\">Recettes fiscales</a>
                                <a class=\"nav-link\" href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("total_recettenonFiscale");
            echo "\">Recette non fiscale</a>
                                <a class=\"nav-link\" href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("total_ristournes");
            echo "\">Ristourne</a>
                                <a class=\"nav-link\" href=\"";
            // line 76
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("total_excedents");
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
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_agent");
            echo "\">Nouvel Agent</a>
                            <a class=\"nav-link\" href=\"";
            // line 88
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
            // line 99
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_contributeur");
            echo "\">Creer contributeur</a>
                            <a class=\"nav-link\" href=\"";
            // line 100
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
            // line 111
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_site_collecte");
            echo "\"> Creer site</a>
                            <a class=\"nav-link\" href=\"";
            // line 112
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_site_collecte");
            echo "\">Liste site</a>
                        </nav>
                    </div>
                    <div class=\"sb-sidenav-menu-heading\">Addons</div>
                    <a class=\"nav-link\" href=\"#\">
                        <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                        Tables
                    </a>
                </div>
            </div>

            <div class=\"sb-sidenav-footer\">
                <div class=\"small\">Logged in as:</div>
                ";
            // line 125
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 125, $this->source); })()), "user", [], "any", false, false, false, 125)) {
                // line 126
                echo "                  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "user", [], "any", false, false, false, 126), "email", [], "any", false, false, false, 126), "html", null, true);
                echo "
                  ";
            } else {
                // line 128
                echo "                   Ananymous
                ";
            }
            // line 130
            echo "            </div>

        </nav>
    </div>
    ";
        }
        // line 135
        echo "    <div id=\"layoutSidenav_content\">
        <main>
            <div class=\"container-fluid px-0\">
                <h1   class=\"mt-4 text-center\">
                    ";
        // line 139
        $this->displayBlock('PageTitre', $context, $blocks);
        // line 142
        echo "                </h1>

                <div class=\"card mb-4\">
                    <div class=\"card-body\">
                    ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "session", [], "any", false, false, false, 146), "flashBag", [], "any", false, false, false, 146), "get", ["info"], "method", false, false, false, 146));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 147
            echo "                    <div class=\"alert alert-info\">
                        ";
            // line 148
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "session", [], "any", false, false, false, 151), "flashBag", [], "any", false, false, false, 151), "get", ["success"], "method", false, false, false, 151));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 152
            echo "                        <div class=\"alert alert-success\">
                            ";
            // line 153
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "session", [], "any", false, false, false, 156), "flashBag", [], "any", false, false, false, 156), "get", ["error"], "method", false, false, false, 156));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 157
            echo "                        <div class=\"alert alert-danger\">
                            ";
            // line 158
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "                        ";
        $this->displayBlock('body', $context, $blocks);
        // line 164
        echo "                    </div>
                </div>
            </div>
        </main>
        ";
        // line 168
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 169
            echo "        <footer class=\"py-4 bg-primary mt-auto\">
            <div class=\"container-fluid px-4\">
                <div class=\"justify-content-between small\">
                    <div class=\"text-muted text-center  \">Copyright &copy; Your Website 2023</div>
                    <div>
                        <a href=\"#\">Privacy Policy</a>
                        &middot;
                        <a href=\"#\">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
        ";
        }
        // line 182
        echo "    </div>

</div>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/select2/dist/js/select2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/@fortawesome/fontawesome-free/js/fontawesome.js"), "html", null, true);
        echo "\"></script>
";
        // line 190
        $this->displayBlock('javascripts', $context, $blocks);
        // line 192
        echo "<script src=\"https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js\" crossorigin=\"anonymous\"></script>
<script src=\"js/datatables-simple-demo.js\"></script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo "Gestion des ressources propres";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 139
    public function block_PageTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitre"));

        // line 140
        echo "                       <h1 style =\" color: #0c63e4; font-size: 2.5em;margin-top: 20px;font-weight: bold;\" class=\"text-center\">Bienvenu(é) à l'entreprise de Mor Dieng</h1>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 161
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 162
        echo "                            tamplate body
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 190
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  487 => 190,  476 => 162,  466 => 161,  455 => 140,  445 => 139,  435 => 18,  425 => 17,  406 => 9,  392 => 192,  390 => 190,  386 => 189,  382 => 188,  378 => 187,  374 => 186,  368 => 182,  353 => 169,  351 => 168,  345 => 164,  342 => 161,  333 => 158,  330 => 157,  325 => 156,  316 => 153,  313 => 152,  308 => 151,  299 => 148,  296 => 147,  292 => 146,  286 => 142,  284 => 139,  278 => 135,  271 => 130,  267 => 128,  261 => 126,  259 => 125,  243 => 112,  239 => 111,  225 => 100,  221 => 99,  207 => 88,  203 => 87,  189 => 76,  185 => 75,  181 => 74,  177 => 73,  162 => 61,  155 => 56,  153 => 55,  145 => 49,  140 => 47,  135 => 46,  129 => 44,  126 => 43,  120 => 41,  118 => 40,  99 => 24,  92 => 19,  90 => 17,  86 => 16,  82 => 15,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <title>{% block titre %}Gestion des ressources propres{% endblock %}</title>
    <link href=\"{{ asset('css/styles.css') }}\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/card.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/template.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
    <link href=\"{{ asset('node_modules/@fortawesome/fontawesome-free/css/fontawesome.css') }}\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/card.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('node_modules/select2/dist/css/select2.min.css') }}\">
    {% block stylesheets %}
    {% endblock %}
    <script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>
</head>
<body class=\"sb-nav-fixed\">
<nav class=\"sb-topnav navbar navbar-expand navbar-dark text-bg-primary\">
    <!-- Navbar Brand-->
    <img src=\"{{ asset('assets/images/images.png') }}\" alt=\"logo\" width=\"50\" height=\"50\">
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
                {% if is_granted('ROLE_SUPER_ADMIN') %}
                    <li><a class=\"dropdown-item\" href=\"{{ path('app_cabinet') }}\">Administration</a></li>
                {% endif %}
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <li><a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Déconnecter</a></li>
                 {% else %}
                <li><a class=\"dropdown-item\" href=\"{{ path('app_login') }}\">Se connecter</a></li>
                <li><a class=\"dropdown-item\" href=\"{{ path('app_register') }}\">M'inscrire</a></li>
                {% endif %}

            </ul>
        </li>
    </ul>
</nav>
<div id=\"layoutSidenav\">
    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
    <div id=\"layoutSidenav_nav\">
        <nav class=\"sb-sidenav accordion sb-sidenav-dark\"  id=\"sidenavAccordion\">
            <div class=\"sb-sidenav-menu\">
                <div class=\"nav\">
                    <div class=\"sb-sidenav-menu-heading\">Core</div>
                    <a class=\"nav-link\"  href=\"{{ path('app_home') }}\">
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
                                <a class=\"nav-link\" href=\"{{ path('total_impots') }}\">Recettes fiscales</a>
                                <a class=\"nav-link\" href=\"{{ path('total_recettenonFiscale') }}\">Recette non fiscale</a>
                                <a class=\"nav-link\" href=\"{{ path('total_ristournes') }}\">Ristourne</a>
                                <a class=\"nav-link\" href=\"{{ path('total_excedents') }}\">Excedent</a>
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
                            <a class=\"nav-link\" href=\"{{ path('edit_agent') }}\">Nouvel Agent</a>
                            <a class=\"nav-link\" href=\"{{ path('list_agent') }}\">liste d'agents</a>
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
                            <a class=\"nav-link\" href=\"{{ path('edit_contributeur') }}\">Creer contributeur</a>
                            <a class=\"nav-link\" href=\"{{ path('liste_contributeur') }}\">Liste contributeur</a>
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
                            <a class=\"nav-link\" href=\"{{ path('edit_site_collecte') }}\"> Creer site</a>
                            <a class=\"nav-link\" href=\"{{ path('liste_site_collecte') }}\">Liste site</a>
                        </nav>
                    </div>
                    <div class=\"sb-sidenav-menu-heading\">Addons</div>
                    <a class=\"nav-link\" href=\"#\">
                        <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                        Tables
                    </a>
                </div>
            </div>

            <div class=\"sb-sidenav-footer\">
                <div class=\"small\">Logged in as:</div>
                {% if app.user %}
                  {{ app.user.email }}
                  {%else %}
                   Ananymous
                {% endif %}
            </div>

        </nav>
    </div>
    {% endif %}
    <div id=\"layoutSidenav_content\">
        <main>
            <div class=\"container-fluid px-0\">
                <h1   class=\"mt-4 text-center\">
                    {% block PageTitre %}
                       <h1 style =\" color: #0c63e4; font-size: 2.5em;margin-top: 20px;font-weight: bold;\" class=\"text-center\">Bienvenu(é) à l'entreprise de Mor Dieng</h1>
                    {% endblock %}
                </h1>

                <div class=\"card mb-4\">
                    <div class=\"card-body\">
                    {% for message in app.session.flashBag.get('info') %}
                    <div class=\"alert alert-info\">
                        {{ message }}
                    </div>
                    {% endfor %}
                    {% for message in app.session.flashBag.get('success') %}
                        <div class=\"alert alert-success\">
                            {{ message }}
                        </div>
                    {% endfor %}
                    {% for message in app.session.flashBag.get('error') %}
                        <div class=\"alert alert-danger\">
                            {{ message }}
                        </div>
                    {% endfor %}
                        {% block body %}
                            tamplate body
                        {% endblock %}
                    </div>
                </div>
            </div>
        </main>
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        <footer class=\"py-4 bg-primary mt-auto\">
            <div class=\"container-fluid px-4\">
                <div class=\"justify-content-between small\">
                    <div class=\"text-muted text-center  \">Copyright &copy; Your Website 2023</div>
                    <div>
                        <a href=\"#\">Privacy Policy</a>
                        &middot;
                        <a href=\"#\">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
        {% endif %}
    </div>

</div>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
<script src=\"{{ asset('js/scripts.js') }}\"></script>
<script src=\"{{ asset('node_modules/jquery/dist/jquery.min.js') }}\"></script>
<script src=\"{{ asset('node_modules/select2/dist/js/select2.min.js') }}\"></script>
<script src=\"{{ asset('node_modules/@fortawesome/fontawesome-free/js/fontawesome.js') }}\"></script>
{% block javascripts %}
{% endblock %}
<script src=\"https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js\" crossorigin=\"anonymous\"></script>
<script src=\"js/datatables-simple-demo.js\"></script>
</body>
</html>
", "template.html.twig", "C:\\xampp7\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\template.html.twig");
    }
}
