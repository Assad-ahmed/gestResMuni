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
class __TwigTemplate_44c1fd8c42d366b4ce2d3af85481827c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("template.html.twig", "home/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <main>

        <section class=\"py-6 text-center container-xl text-bg-primary   \">
            <h1>Tableau de bord Taxe Municipale : </h1>
            <div class=\"row \">
                <div class=\"col-xl-4 col-md-6\">
                    <div class=\"card bg-success text-white mb-4\">
                        <div class=\"card-body text-bg-success fs-4\">Montant Journalier</div>
                        <div class=\"card-footer  justify-content-between\">
                            <h4 class=\"text-center\" >";
        // line 12
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalMontantJournalier"]) || array_key_exists("totalMontantJournalier", $context) ? $context["totalMontantJournalier"] : (function () { throw new RuntimeError('Variable "totalMontantJournalier" does not exist.', 12, $this->source); })()), 0, " ", " "), "html", null, true);
        echo " Fcfa</h4>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-md-6  \">
                    <div class=\"card bg-success text-white mb-4\">
                        <div class=\"card-body text-bg-success fs-4\">Montant Mensuel</div>
                        <div class=\"card-footer  justify-content-between\">
                            <h4 class=\"text-center\" >";
        // line 20
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalMontantMensuel"]) || array_key_exists("totalMontantMensuel", $context) ? $context["totalMontantMensuel"] : (function () { throw new RuntimeError('Variable "totalMontantMensuel" does not exist.', 20, $this->source); })()), 0, " ", " "), "html", null, true);
        echo " Fcfa</h4>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-md-6\">
                    <div class=\"card bg-success text-white mb-4\">
                        <div class=\"card-body text-bg-success fs-4\">Montant annuel</div>
                        <div class=\"card-footer  justify-content-between\">
                            <h4 class=\"text-center\" >";
        // line 28
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalAnnualMontant"]) || array_key_exists("totalAnnualMontant", $context) ? $context["totalAnnualMontant"] : (function () { throw new RuntimeError('Variable "totalAnnualMontant" does not exist.', 28, $this->source); })()), 0, " ", " "), "html", null, true);
        echo " Fcfa</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class=\"album py-5 bg-light\">
            <div class=\"container\">
                <div class=\"row \">
                    <div class=\"col\">
                        <div class=\"card h-100 shadow-sm border-light\">
                            <div class=\"card-header text-center bg-primary text-white border-success\">
                                <h5 class=\"mb-0\">Gestion Des Ressources Propres</h5>
                            </div>
                            <div class=\"card-body\">
                                <p class=\"card-text\">Ce module contient toutes les informations relatives aux ressources propres, y compris leur gestion et leurs caractéristiques.</p>
                            </div>
                            <div class=\"card-footer bg-light text-center\">
                                <a href=\"#\" class=\"btn btn-primary\">VOIR</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col\">
                        <div class=\"card h-100 shadow-sm border-light\">
                            <div class=\"card-header text-center bg-primary text-white border-success\">
                                <h5 class=\"mb-0\">Gestion Des Sites de Collectes</h5>
                            </div>
                            <div class=\"card-body\">
                                <p class=\"card-text\">Ce module contient toutes les informations relatives aux sites de collecte, y compris leur gestion et leur organisation.</p>
                            </div>
                            <div class=\"card-footer bg-light text-center\">
                                <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_site_collecte");
        echo "\" class=\"btn btn-primary\">VOIR</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col\">
                        <div class=\"card h-100 shadow-sm border-light\">
                            <div class=\"card-header text-white text-center bg-primary border-bottom border-light\">
                                <h5 class=\"mb-0\">Gestion Des Agents Collectes</h5>
                            </div>
                            <div class=\"card-body\">

                                <p class=\"card-text\">Ce module contient toutes les informations relatives aux agents de collecte, y compris leur gestion et leurs fonctions.</p>
                            </div>
                            <div class=\"card-footer bg-light text-center\">
                                <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_agent");
        echo "\" class=\"btn btn-primary\">VOIR</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col\">
                        <div class=\"card h-100 shadow-sm border-light\">
                            <div class=\"card-header text-white text-center bg-primary border-success\">
                                <h5 class=\"mb-0\">Gestion Des Contributeurs</h5>
                            </div>
                            <div class=\"card-body\">
                                <p class=\"card-text\">Ce module contient tout ce qui est relatif aux contributeurs, y compris la gestion et les détails associés.</p>
                            </div>
                            <div class=\"card-footer bg-light text-center\">
                                <a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_contributeur");
        echo "\" class=\"btn btn-primary\">VOIR</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  184 => 99,  172 => 90,  155 => 76,  137 => 61,  101 => 28,  90 => 20,  79 => 12,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.html.twig' %}
{% block body %}
    <main>

        <section class=\"py-6 text-center container-xl text-bg-primary   \">
            <h1>Tableau de bord Taxe Municipale : </h1>
            <div class=\"row \">
                <div class=\"col-xl-4 col-md-6\">
                    <div class=\"card bg-success text-white mb-4\">
                        <div class=\"card-body text-bg-success fs-4\">Montant Journalier</div>
                        <div class=\"card-footer  justify-content-between\">
                            <h4 class=\"text-center\" >{{ totalMontantJournalier|number_format(0, ' ', ' ', ) }} Fcfa</h4>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-md-6  \">
                    <div class=\"card bg-success text-white mb-4\">
                        <div class=\"card-body text-bg-success fs-4\">Montant Mensuel</div>
                        <div class=\"card-footer  justify-content-between\">
                            <h4 class=\"text-center\" >{{ totalMontantMensuel|number_format(0, ' ', ' ', ) }} Fcfa</h4>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-md-6\">
                    <div class=\"card bg-success text-white mb-4\">
                        <div class=\"card-body text-bg-success fs-4\">Montant annuel</div>
                        <div class=\"card-footer  justify-content-between\">
                            <h4 class=\"text-center\" >{{ totalAnnualMontant|number_format(0, ' ', ' ', ) }} Fcfa</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class=\"album py-5 bg-light\">
            <div class=\"container\">
                <div class=\"row \">
                    <div class=\"col\">
                        <div class=\"card h-100 shadow-sm border-light\">
                            <div class=\"card-header text-center bg-primary text-white border-success\">
                                <h5 class=\"mb-0\">Gestion Des Ressources Propres</h5>
                            </div>
                            <div class=\"card-body\">
                                <p class=\"card-text\">Ce module contient toutes les informations relatives aux ressources propres, y compris leur gestion et leurs caractéristiques.</p>
                            </div>
                            <div class=\"card-footer bg-light text-center\">
                                <a href=\"#\" class=\"btn btn-primary\">VOIR</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col\">
                        <div class=\"card h-100 shadow-sm border-light\">
                            <div class=\"card-header text-center bg-primary text-white border-success\">
                                <h5 class=\"mb-0\">Gestion Des Sites de Collectes</h5>
                            </div>
                            <div class=\"card-body\">
                                <p class=\"card-text\">Ce module contient toutes les informations relatives aux sites de collecte, y compris leur gestion et leur organisation.</p>
                            </div>
                            <div class=\"card-footer bg-light text-center\">
                                <a href=\"{{ path('liste_site_collecte') }}\" class=\"btn btn-primary\">VOIR</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col\">
                        <div class=\"card h-100 shadow-sm border-light\">
                            <div class=\"card-header text-white text-center bg-primary border-bottom border-light\">
                                <h5 class=\"mb-0\">Gestion Des Agents Collectes</h5>
                            </div>
                            <div class=\"card-body\">

                                <p class=\"card-text\">Ce module contient toutes les informations relatives aux agents de collecte, y compris leur gestion et leurs fonctions.</p>
                            </div>
                            <div class=\"card-footer bg-light text-center\">
                                <a href=\"{{ path('list_agent') }}\" class=\"btn btn-primary\">VOIR</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col\">
                        <div class=\"card h-100 shadow-sm border-light\">
                            <div class=\"card-header text-white text-center bg-primary border-success\">
                                <h5 class=\"mb-0\">Gestion Des Contributeurs</h5>
                            </div>
                            <div class=\"card-body\">
                                <p class=\"card-text\">Ce module contient tout ce qui est relatif aux contributeurs, y compris la gestion et les détails associés.</p>
                            </div>
                            <div class=\"card-footer bg-light text-center\">
                                <a href=\"{{ path('liste_contributeur') }}\" class=\"btn btn-primary\">VOIR</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <script src=\"{{ asset('js/scripts.js') }}\"></script>

{% endblock %}", "home/home.html.twig", "C:\\xampp7\\htdocs\\ProjetSymfony\\gestResMuni\\templates\\home\\home.html.twig");
    }
}
